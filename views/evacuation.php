<?php session_start();
include 'header.php'; ?>

<?php foreach ($centers as $center): ?>
    <h2><?= $center['name']; ?></h2>
    <p>Status: <?= $center['status']; ?></p>
    <p>Capacity: <?= $center['capacity']; ?></p>
    <hr>
<?php endforeach; ?>


<link rel="stylesheet" href="evacuation.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">


<div class="container">
    <h1>Evacuation Centers</h1>
    <p class="subtitle">Find the nearest safe location and check real-time capacity</p>

        <div class="stats">
        <div class="stat-box">
            <div class="stat-left">
                <div class="stat-title">Total Centers</div>
                <div class="stat-number counter" data-target="15">0</div>
                <div class="stat-sub green">All operational</div>
            </div>
            <div class="stat-icon green"><i class="fa-solid fa-location-dot"></i></div>
        </div>

        <div class="stat-box">
            <div class="stat-left">
                <div class="stat-title">Available Space</div>
                <div class="stat-number counter" data-target="525">0</div>
                <div class="stat-sub gray">Across all centers</div>
            </div>
            <div class="stat-icon darkgreen"><i class="fa-solid fa-user-group"></i></div>
        </div>

        <div class="stat-box">
            <div class="stat-left">
                <div class="stat-title">Current Evacuees</div>
                <div class="stat-number counter" data-target="1525">0</div>
                <div class="stat-sub orange">74% capacity</div>
            </div>
            <div class="stat-icon orange"><i class="fa-solid fa-people-roof"></i></div>
        </div>

        <div class="stat-box">
            <div class="stat-left">
                <div class="stat-title">Nearest Center</div>
                <div class="stat-number counter" data-target="0.8">0</div>
                <div class="stat-sub gray">~10 min walk</div>
            </div>
            <div class="stat-icon blue"><i class="fa-solid fa-location-arrow"></i></div>
        </div>
    </div>

    <input class="search" placeholder="Search by center name or address...">

    <?php foreach($centers as $c): 
        $percent = round(($c["evacuees"]/$c["capacity"]) * 100);
    ?>
    <div class="card">
        <div class="card-header">
            <div>
                <h3>
                    <?= htmlspecialchars($c["name"]) ?>
                    <span class="status <?= $c["status"] ?>">
                        <?= strtoupper($c["status"]) ?>
                    </span>
                </h3>
                <div class="address"><?= htmlspecialchars($c["address"]) ?></div>
            </div>
            <div class="right">
                <div class="distance"><?= $c["distance"] ?></div>
                <button class="navigate-btn" 
                        data-lat="<?= $c['lat'] ?>" 
                        data-lng="<?= $c['lng'] ?>" 
                        data-name="<?= htmlspecialchars($c['name']) ?>">
                    Get Directions
                </button>
            </div>
        </div>

        <div class="info-grid">
            <div class="info-box">
                <div>Total Capacity</div>
                <strong class="counter" data-target="<?= $c["capacity"] ?>">0</strong>
            </div>
            <div class="info-box">
                <div>Current Evacuees</div>
                <strong class="counter" data-target="<?= $c["evacuees"] ?>">0</strong>
            </div>
            <div class="info-box space <?= $c["status"] ?>">
                <div>Available Space</div>
                <strong class="counter" data-target="<?= $c["space"] ?>">0</strong>
            </div>
        </div>

        <div class="util-row">
            <div class="util-label">Capacity Utilization</div>
            <div class="util-percent"><span class="counter" data-target="<?= $percent ?>">0</span>%</div>
        </div>

        <div class="progress">
            <div class="bar <?= $c["status"] ?>" data-width="<?= $percent ?>%"></div>
        </div>

        <div class="amenities">
            <?php foreach($c["amenities"] as $a): ?>
                <span><?= htmlspecialchars($a) ?></span>
            <?php endforeach; ?>
        </div>

        <div class="card-footer">
            <div><?= htmlspecialchars($c["phone"]) ?></div>
            <div>Updated <?= htmlspecialchars($c["updated"]) ?></div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<script src = "/httpdocs/js/evacuation.js">
</script>
<?php include 'footer.php'; ?>
