<?php include 'header.php'; ?>
<head>
    <meta charset="UTF-8">
    <title>Interactive Hazard Map - Bacolod City</title>
    <link rel="stylesheet" href="map.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">


    <style>
        #map { width: 100%; height: 500px; border-radius: 8px; }
    </style>
</head>
<body>

<div class="map-page">
    <h1 class="title">Interactive Hazard Map - Bacolod City</h1>

    <div class="layers-box">
        <h3>Map Layers</h3>
        <div class="layer-buttons">
            <button class="layer hazard active"><i class="fas fa-triangle-exclamation"></i> Show Hazards</button>
            <button class="layer evacuation"><i class="fas fa-location-dot"></i> Show Evacuation Centers</button>
            <button class="layer me"><i class="fas fa-user"></i> Me</button>
    </div>

    </div>

    <div class="map-container">
        <div id="map"></div>
        <div class="map-controls">
            <button id="zoom-in">+</button>
            <button id="zoom-out">−</button>
        </div>
    </div>

    <!-- Legend -->
    <div class="legend-box">
        <h3>Map Legend</h3>
        <div class="legend-items">
            <div class="legend-item"><span class="dot" style="background:red;"></span> High Risk Hazard</div>
            <div class="legend-item"><span class="dot" style="background:orange;"></span> Medium Risk</div>
            <div class="legend-item"><span class="dot" style="background:yellow;"></span> Low Risk</div>
            <div class="legend-item"><i class="fas fa-location-dot" style="color:green;"></i> Evacuation Center (Available)</div>
            <div class="legend-item"><i class="fas fa-location-dot" style="color:orange;"></i> Evacuation Center (Near Full)</div>
            <div class="legend-item"><i class="fas fa-location-dot" style="color:red;"></i> Evacuation Center (Full)</div>
        </div>
    </div>

    <div class="info-box">
        <h3><i class="fas fa-circle-info"></i> How to Use This Map</h3>
        <p>Click on any marker to view detailed information. Red markers indicate hazards, while green/orange/red markers show evacuation centers based on availability. Use the filters above to customize your view.</p>
    </div>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>

<script src = "/httpdocs/js/map.js">
    
</script>

</body>

<?php include 'footer.php'; ?>