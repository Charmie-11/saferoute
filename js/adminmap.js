var map = L.map('map').setView([10.6766, 122.9568], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
  attribution: '© OpenStreetMap contributors'
}).addTo(map);

var hazardMarkers = [
  L.circleMarker([10.6800, 122.9550], { color: 'red', radius: 10 }),
  L.circleMarker([10.6750, 122.9600], { color: 'orange', radius: 10 }),
  L.circleMarker([10.6700, 122.9500], { color: 'yellow', radius: 10 })
];

function evacIcon(color) {
  return L.divIcon({
    html: `<i class="fas fa-location-dot" style="color:${color};font-size:24px;"></i>`,
    className: '',
    iconSize: [24, 24],
    iconAnchor: [12, 24]
  });
}

var evacuationMarkers = [
  L.marker([10.677, 122.958], { icon: evacIcon('green') }),
  L.marker([10.674, 122.954], { icon: evacIcon('orange') }),
  L.marker([10.678, 122.952], { icon: evacIcon('red') })
];

var populationMarkers = [
  L.circle([10.676, 122.957], { radius: 400, color: '#3b82f6', fillOpacity: 0.4 }),
  L.circle([10.672, 122.952], { radius: 300, color: '#22c55e', fillOpacity: 0.4 })
];

function clearMarkers() {
  map.eachLayer(layer => {
    if (layer instanceof L.Marker || layer instanceof L.CircleMarker || layer instanceof L.Circle) {
      map.removeLayer(layer);
    }
  });
}

function activate(btn) {
  document.querySelectorAll('.layer-pill').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
}

document.querySelector('.layer-pill.hazard').onclick = function () {
  clearMarkers();
  hazardMarkers.forEach(m => m.addTo(map));
  activate(this);
};

document.querySelector('.layer-pill.evac').onclick = function () {
  clearMarkers();
  evacuationMarkers.forEach(m => m.addTo(map));
  activate(this);
};

document.querySelector('.layer-pill.pop').onclick = function () {
  clearMarkers();
  populationMarkers.forEach(m => m.addTo(map));
  activate(this);
};

document.getElementById('zoom-in').onclick = () => map.zoomIn();
document.getElementById('zoom-out').onclick = () => map.zoomOut();

hazardMarkers.forEach(m => m.addTo(map));