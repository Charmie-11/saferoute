var map = L.map('map').setView([10.6766, 122.9568], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // ================= Hazard Markers =================
    var highHazard = L.circleMarker([10.6800, 122.9550], {color:'red', radius:10}).bindPopup("High Risk Hazard - Area A");
    var mediumHazard = L.circleMarker([10.6750, 122.9600], {color:'orange', radius:10}).bindPopup("Medium Risk - Area B");
    var lowHazard = L.circleMarker([10.6700, 122.9500], {color:'yellow', radius:10}).bindPopup("Low Risk - Area C");
    var hazardMarkers = [highHazard, mediumHazard, lowHazard];

    // ================= Evacuation Center Markers =================
    function createEvacMarker(lat, lng, color, name) {
        var icon = L.divIcon({
            html: '<i class="fas fa-location-dot" style="color:' + color + '; font-size: 24px;"></i>',
            className: '',
            iconSize: [24, 24],
            iconAnchor: [12, 24]
        });
        return L.marker([lat, lng], {icon: icon}).bindPopup(name);
    }

    var evacAvailable = createEvacMarker(10.6770, 122.9580, 'green', "Evacuation Center 1 - Available");
    var evacNearFull = createEvacMarker(10.6740, 122.9540, 'orange', "Evacuation Center 2 - Near Full");
    var evacFull = createEvacMarker(10.6780, 122.9520, 'red', "Evacuation Center 3 - Full");
    var evacuationMarkers = [evacAvailable, evacNearFull, evacFull];

    hazardMarkers.forEach(m => m.addTo(map));

    document.querySelector('.layer.hazard').addEventListener('click', function() {
        this.classList.add('active');
        document.querySelector('.layer.evacuation').classList.remove('active');
        map.eachLayer(layer => { 
            if(layer instanceof L.Marker || layer instanceof L.CircleMarker) map.removeLayer(layer); 
        });
        hazardMarkers.forEach(m => m.addTo(map));
    });

    document.querySelector('.layer.evacuation').addEventListener('click', function() {
        this.classList.add('active');
        document.querySelector('.layer.hazard').classList.remove('active');
        map.eachLayer(layer => { 
            if(layer instanceof L.Marker || layer instanceof L.CircleMarker) map.removeLayer(layer); 
        });
        evacuationMarkers.forEach(m => m.addTo(map));
    });

    document.getElementById('zoom-in').addEventListener('click', ()=>map.zoomIn());
    document.getElementById('zoom-out').addEventListener('click', ()=>map.zoomOut());


var userMarker;
var routingControl;
var destinationMarker;

function locateUserAndRoute(destLat, destLng, destName) {
    if (!navigator.geolocation) {
        alert("Geolocation is not supported by your browser.");
        return;
    }

    navigator.geolocation.getCurrentPosition(function(position) {
        var userLat = position.coords.latitude;
        var userLng = position.coords.longitude;

        // Remove old user marker
        if (userMarker) map.removeLayer(userMarker);

        userMarker = L.marker([userLat, userLng])
            .addTo(map)
            .bindPopup("📍 You are here")
            .openPopup();

        // Remove old destination marker
        if (destinationMarker) map.removeLayer(destinationMarker);

        if (destLat && destLng) {
            destinationMarker = L.marker([destLat, destLng])
                .addTo(map)
                .bindPopup(destName || "Destination");

            // Remove previous route
            if (routingControl) map.removeControl(routingControl);

            routingControl = L.Routing.control({
                waypoints: [
                    L.latLng(userLat, userLng),
                    L.latLng(destLat, destLng)
                ],
                routeWhileDragging: false,
                addWaypoints: false,
                show: false,

                lineOptions: {
                styles: [
            {
                color: 'green',      
                opacity: 0.8,      
                weight: 4          
            }
        ]
    }
            }).addTo(map);

            // Auto-fit map bounds to include both points
            map.fitBounds([
                [userLat, userLng],
                [destLat, destLng]
            ]);
        } else {
            // If no destination, just center on user
            map.setView([userLat, userLng], 14);
        }

    }, function() {
        alert("Location access denied.");
    });
}

// ================= Handle resource.php destination =================
const params = new URLSearchParams(window.location.search);
const destLat = params.get('lat');
const destLng = params.get('lng');
const destName = params.get('name');

locateUserAndRoute(destLat, destLng, destName);

var meMarker;
document.querySelector('.layer.me').addEventListener('click', function () {
    document.querySelectorAll('.layer').forEach(b => b.classList.remove('active'));
    this.classList.add('active');

    // Only center on user, do not route anywhere
    if (!navigator.geolocation) {
        alert("Geolocation is not supported by your browser.");
        return;
    }

    navigator.geolocation.getCurrentPosition(function (position) {
        var lat = position.coords.latitude;
        var lng = position.coords.longitude;

        if (meMarker) map.removeLayer(meMarker);

        meMarker = L.marker([lat, lng])
            .addTo(map)
            .bindPopup("📍 You are here")
            .openPopup();

        map.setView([lat, lng], 15);
    }, function () {
        alert("Location access denied.");
    });
});

// Helper to sync the UI highlight
function updateActiveButton(clickedElement) {
    document.querySelectorAll('.layer').forEach(btn => btn.classList.remove('active'));
    clickedElement.classList.add('active');
}

// Hazard Filter
document.querySelector('.layer.hazard').addEventListener('click', function() {
    updateActiveButton(this);
    map.eachLayer(layer => { 
        if(layer instanceof L.Marker || layer instanceof L.CircleMarker) map.removeLayer(layer); 
    });
    hazardMarkers.forEach(m => m.addTo(map));
});

// Evacuation Filter
document.querySelector('.layer.evacuation').addEventListener('click', function() {
    updateActiveButton(this);
    map.eachLayer(layer => { 
        if(layer instanceof L.Marker || layer instanceof L.CircleMarker) map.removeLayer(layer); 
    });
    evacuationMarkers.forEach(m => m.addTo(map));
});

// "Me" Filter
document.querySelector('.layer.me').addEventListener('click', function () {
    updateActiveButton(this);
    if (!navigator.geolocation) {
        alert("Geolocation is not supported.");
        return;
    }
    navigator.geolocation.getCurrentPosition(function (position) {
        var lat = position.coords.latitude;
        var lng = position.coords.longitude;
        if (meMarker) map.removeLayer(meMarker);
        meMarker = L.marker([lat, lng]).addTo(map).bindPopup("📍 You are here").openPopup();
        map.setView([lat, lng], 15);
    });
});