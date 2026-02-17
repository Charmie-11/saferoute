<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Emergency Alerts</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="home.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>
<body>

<!-- =========================
     EMERGENCY HERO (FULL WIDTH)
========================= -->
<section class="emergency-banner">
  <div class="yellow-strip"></div>

  <div class="white-strip">
    <div class="section-inner">


    <!-- LEFT CONTENT -->
    <div class="emergency-content">
      <h3>⚠ Emergency Alert: Typhoon Maria</h3>
<div class="banner-text">
  A strong typhoon is approaching your area. Mandatory evacuation order for coastal barangays. Please proceed to the nearest evacuation center immediately.
</div>
      <div class="banner-actions">
        <a href="evacuation.php" class="btn btn-red">Find Evacuation Center</a>
      </div>
    </div>

    <!-- RIGHT IMAGE -->
    <div class="emergency-image">
      <img src="/assets/forecast.jpg" alt="Typhoon Alert">
    </div>

  </div>
</section>


<!-- =========================
     ACTIVE ALERTS
========================= -->
<section class="section alerts-section">
  <div class="section-inner">
    <h4>Active Alerts in Your Area</h4>

    <div class="alerts-grid">
      <div class="alert alert-critical">
        <div class="alert-top">
          <strong>Typhoon Maria Approaching</strong>
          <span class="badge badge-critical">CRITICAL</span>
        </div>

        <p class="alert-desc">
          Expected landfall in 6 hours. Evacuate immediately from coastal areas.
        </p>

        <div class="alert-bottom">
          <span>Coastal Barangays</span>
          <span>5 minutes ago</span>
        </div>
      </div>

      <div class="alert alert-high">
        <div class="alert-top">
          <strong>Flash Flood Warning</strong>
          <span class="badge badge-high">HIGH</span>
        </div>

        <p class="alert-desc">
          Heavy rainfall causing rapid water rise in low-lying areas.
        </p>

        <div class="alert-bottom">
          <span>Downtown District</span>
          <span>15 minutes ago</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================
     EVACUATION CENTERS
========================= -->
<section class="section centers-section">
  <div class="section-inner">
    <h4>Nearest Evacuation Centers</h4>

    <div class="centers-grid">
      <div class="center">
        <div class="center-name">
          <i class="fa-solid fa-location-dot"></i>
          <div class="center-text">
            Vista Alegre Evacuation Center
            <small>9.9 km away</small>
          </div>
        </div>
        <span class="status available">Available</span>
      </div>

      <div class="center">
        <div class="center-name">
          <i class="fa-solid fa-location-dot"></i>
          <div class="center-text">
            Brgy. Zone 10 Evacuation Center
            <small>9.2 km away</small>
          </div>
        </div>
        <span class="status near-full">Near Full</span>
      </div>

      <div class="center">
        <div class="center-name">
          <i class="fa-solid fa-location-dot"></i>
          <div class="center-text">
            Regional Evacuation Center
            <small>24.6 km away</small>
          </div>
        </div>
        <span class="status available">Available</span>
      </div>
    </div>
  </div>
</section>

<!-- =========================
     HOTLINES + SAFETY REMINDERS
========================= -->
<section class="section info-section">
  <div class="section-inner">
    <h4>Emergency Informations</h4>

    <div class="info-grid">

      <!-- HOTLINE CARD -->
      <div class="info-card">
        <h5><i class="fa-solid fa-phone"></i> Emergency Hotlines</h5>

        <div class="hotline-row">
          Emergency Response: 911<br>
          LGU Disaster Office: (02) 8888-0000<br>
          Red Cross: 143
        </div>
      </div>

      <!-- REMINDERS CARD -->
      <div class="info-card">
        <h5><i class="fa-solid fa-triangle-exclamation"></i> Safety Reminders</h5>

        <ul class="reminder-list">
          <li>Prepare emergency supplies</li>
          <li>Secure important documents</li>
          <li>Follow evacuation orders</li>
          <li>Stay away from flood areas</li>
          <li>Keep your phone charged</li>
        </ul>
      </div>

    </div>
  </div>
</section>


<?php include 'footer.php'; ?>
</body>
</html>
