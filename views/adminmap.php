<?php include 'header.php'; ?>
<head>
<meta charset="UTF-8">
<title>Live Situation Map — Bacolod City</title>

<link rel="stylesheet" href="adminmap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>

<body>

<div class="map-page">

    <!-- HEADER -->
    <div class="map-header">
        <div>
            <h1 class="title">Live Situation Map</h1>
            <p class="subtitle">
            </p>
        </div>

        <div class="live-badge">
            <i class="fas fa-bolt"></i> Live
        </div>
    </div>


    <!-- CONTROLS -->
    <div class="layers-box">

    <div class="layers-head">
        <i class="fas fa-filter"></i>
        <span>Map Controls</span>
    </div>

    <div class="layer-pills">

        <button class="layer-pill hazard active">
            <i class="fas fa-triangle-exclamation"></i>
            Hazards
            <i class="fas fa-eye"></i>
        </button>

        <button class="layer-pill evac">
            <i class="fas fa-location-dot"></i>
            Evac Centers
            <i class="fas fa-eye"></i>
        </button>

        <button class="layer-pill pop">
            <i class="fas fa-users"></i>
            Population
            <i class="fas fa-eye"></i>
        </button>

    </div>
</div>

    <!-- MAP -->
    <div class="map-container">
        <div id="map"></div>

        <div class="map-controls">
            <button id="zoom-in">+</button>
            <button id="zoom-out">−</button>
        </div>

        <div class="map-hint">
            Interactive Map View • Real-time Updates
        </div>
    </div>


    <!-- LEGEND -->
    <div class="legend-box">
    <div class="legend-title">Map Legend</div>

    <div class="legend-row">
    <span class="dot red"></span> Critical Hazard
    <span class="dot orange"></span> High Risk
    <span class="dot yellow"></span> Medium Risk
    <span class="dot green"></span> Evacuation Center
    <span class="dot blue"></span> Population Density
</div>

</div>

</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>

<script src = "/httpdocs/js/adminmap.js"></script>

</body>
<?php include 'footer.php'; ?>
