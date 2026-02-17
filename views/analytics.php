<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Analytics & Reports</title>
    <link rel="stylesheet" href="analytics.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>
<body>

<div class="analytics-container">

    <!-- HEADER -->
    <div class="analytics-top">
        <div>
            <h1>Analytics & Reports</h1>
        </div>

        <div class="top-actions">
            <select>
                <option>Last 7 Days</option>
                <option>Last 30 Days</option>
                <option>This Month</option>
            </select>

            <button class="export-btn">Export Report</button>
        </div>
    </div>

    <!-- KPI CARDS -->
    <div class="kpi-grid">

        <div class="kpi-card">
            <h3>Peak Evacuees</h3>
            <div class="kpi-value">1,247</div>
            <span class="kpi-note up">↑ 177% increase</span>
        </div>

        <div class="kpi-card">
            <h3>Avg Response Time</h3>
            <div class="kpi-value">8.2 mins</div>
            <span class="kpi-note up">32% faster than target</span>
        </div>

        <div class="kpi-card">
            <h3>Total Hazards</h3>
            <div class="kpi-value">40</div>
            <span class="kpi-note">85% resolved</span>
        </div>

        <div class="kpi-card">
            <h3>Resource Efficiency</h3>
            <div class="kpi-value">91.3%</div>
            <span class="kpi-note up">Above target</span>
        </div>

    </div>

    <!-- MAIN TREND -->
    <div class="card">
        <h2>Multi-Metric Trend Analysis</h2>
        <p class="card-sub">Evacuees, centers, and hazards over time</p>
        <img src="/httpdocs/assets/chart3.png" class="chart-img">
    </div>

    <!-- RESOURCES -->
    <div class="card">
        <p class="card-sub">Tracking food, water, medical supplies, and shelter items</p>
        <img src="/httpdocs/assets/chart4.png" class="chart-img">
    </div>

    <!-- TWO COLUMN GRID -->
    <div class="grid-2">

        <div class="card">
            <h2>Average Response Time by Hour</h2>
            <img src="/httpdocs/assets/chart5.png" class="chart-img">
        </div>

        <div class="card">
            <h2>Hazard Distribution by Type</h2>
            <img src="/httpdocs/assets/chart6.png" class="chart-img">
        </div>

        <div class="card">
            <h2>Population Movement</h2>
            <img src="/httpdocs/assets/chart7.png" class="chart-img">
        </div>

        <div class="card">
            <h2>Evacuation Center Performance</h2>
            <img src="/httpdocs/assets/chart8.png" class="chart-img">
        </div>

    </div>

    <!-- SUMMARY -->
    <div class="summary-grid">

        <div class="summary-box">
            <span>Total Families Served</span>
            <strong>247</strong>
        </div>

        <div class="summary-box">
            <span>Relief Operations</span>
            <strong>1,542</strong>
        </div>

        <div class="summary-box">
            <span>Volunteer Hours</span>
            <strong>3,890</strong>
        </div>

        <div class="summary-box">
            <span>Avg Stay Duration</span>
            <strong>2.8 days</strong>
        </div>

    </div>

</div>

</body>
</html>

<?php include 'footer.php'; ?>