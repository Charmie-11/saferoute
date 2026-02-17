<?php require 'header.php'; ?>

<link rel="stylesheet" href="adminresources.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">


<div class="resource-page">

  <!-- PAGE HEADER -->
  <div class="page-top">
    <div>
      <h1>Resource Management</h1>
    </div>
    <button class="btn-primary">+ Add Resource</button>
  </div>

  <!-- STAT CARDS -->
  <div class="stats-grid">
    <div class="stat-card">
      <div class="stat-title">Total Items in Stock</div>
      <div class="stat-value">10,740</div>
      <div class="stat-sub green">+12% from yesterday</div>
    </div>

    <div class="stat-card">
      <div class="stat-title">Items Distributed</div>
      <div class="stat-value">7,000</div>
      <div class="stat-sub green">+850 today</div>
    </div>

    <div class="stat-card">
      <div class="stat-title">Items Needed</div>
      <div class="stat-value">14,000</div>
      <div class="stat-sub orange">23% shortfall</div>
    </div>

    <div class="stat-card">
      <div class="stat-title">Critical Shortage</div>
      <div class="stat-value">2</div>
      <div class="stat-sub red">Items below 50%</div>
    </div>
  </div>

  <!-- CHARTS -->
  <div class="card-grid">
    <div class="card">
      <h3>Distribution History</h3>
      <img src="/httpdocs/assets/chart1.png" class="chart-img">
    </div>

    <div class="card">
      <h3>Stock Levels vs Target</h3>
      <img src="/httpdocs/assets/chart2.png" class="chart-img">
    </div>
  </div>

  <!-- TABLE -->
  <div class="table-card">
    <table>
      <thead>
        <tr>
          <th>Resource</th>
          <th>Category</th>
          <th>In Stock</th>
          <th>Distributed</th>
          <th>Needed</th>
          <th>Location</th>
          <th>Status</th>
          <th>Trend</th>
        </tr>
      </thead>

<tbody>

<tr class="resource-row"
data-title="Food Pack (Family Size)"
data-org="Disaster Relief Foundation"
data-contact="09707216118"
data-email="DisRelief@gmail.com"
data-city="La Carlota City"
data-barangay="Barangay Tres"
data-location="City Gym"
data-type="Relief Food Pack"
data-weight="5 kg"
data-exp="Dec 2026"
data-serving="Family of 5"
data-shipstatus="shipped">

<td>Food Packs (Family Size)</td>
<td><span class="badge food">Food</span></td>
<td>2,400</td>
<td>1,850</td>
<td>3,000</td>
<td>Central Warehouse</td>
<td><span class="status low">LOW</span></td>
<td>↘</td>
</tr>

<tr class="resource-row"
data-title="Bottled Water (1L)"
data-org="Water Aid PH"
data-contact="09998887777"
data-email="water@aid.ph"
data-city="Bacolod"
data-barangay="Zone 5"
data-location="Relief Center A"
data-type="Drinking Water"
data-weight="1 kg"
data-exp="N/A"
data-serving="1 person"
data-shipstatus="delivered">

<td>Bottled Water (1L)</td>
<td><span class="badge water">Water</span></td>
<td>5,800</td>
<td>3,200</td>
<td>6,000</td>
<td>Multiple Centers</td>
<td><span class="status ok">ADEQUATE</span></td>
<td>→</td>
</tr>

</tbody>
</table>
</div>
</div>

<!-- MODAL -->

<div id="resourceModal" class="modal">
  <div class="modal-panel">

    <div class="modal-topbar">
      <h2 id="m_title"></h2>
      <button id="modalClose" class="back-btn">← Back</button>
    </div>

    <div class="modal-body">

      <div class="modal-row">

        <div class="info-card">
          <h3>Distributor Information</h3>
          <div class="info-grid">
            <div><label>Organization</label><p id="m_org"></p></div>
            <div><label>Contact</label><p id="m_contact"></p></div>
            <div><label>Email</label><p id="m_email"></p></div>
          </div>
        </div>

        <div class="info-card">
          <h3>Delivery Location</h3>
          <div class="info-grid">
            <div><label>City</label><p id="m_city"></p></div>
            <div><label>Main Location</label><p id="m_location"></p></div>
            <div><label>Barangay</label><p id="m_barangay"></p></div>
          </div>
        </div>

      </div>

      <div class="info-card big-card">
        <div class="product-grid">

          <div>
            <h3>Product Details</h3>
            <label>Type</label><div class="fake-input" id="m_type"></div>
            <label>Weight</label><div class="fake-input" id="m_weight"></div>
            <label>Expiration Date</label><div class="fake-input" id="m_exp"></div>
            <label>Serving Size</label><div class="fake-input" id="m_serving"></div>
          </div>

          <div>
            <h3>Delivery Status</h3>

            <div id="m_status" class="delivery-track">
              <div class="step">Requested</div>
              <div class="step">Packed</div>
              <div class="step">Shipped</div>
              <div class="step">Out for Delivery</div>
              <div class="step">Delivered</div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<script src = "/httpdocs/js/adminresource.js">
</script>

<?php require 'footer.php'; ?>
