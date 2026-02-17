<?php include 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <title>Resources</title>
    <link rel="stylesheet" href="resource.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>
<body>

<div class="resource-container">

    <!-- Search Bar -->
    <input type="text" class="search-bar" placeholder="Search for Resources or Locations...">

    <!-- Filter Buttons -->
    <p class="filter-label">Filter by type:</p>

    <div class="filters">
        <button class="filter active" data-type="all">All Resources</button>
        <button class="filter" data-type="hospital">Medical Assistance</button>
        <button class="filter" data-type="food">Food Distribution</button>
        <button class="filter" data-type="water">Water Supply</button>
        <button class="filter" data-type="shelter">Temporary Shelter</button>
    </div>

    <h3 class="section-title">Nearby Resources (5)</h3>

    <!-- Resource Grid -->
    <div class="grid">

        <div class="card hospital">
            <h4>The Doctors Hospital </h4>
            <p>BS Aquino Dr, Bacolod</p>
            <p>24/7</p>
            <button class="navigate-btn" 
                    data-lat="10.678036" 
                    data-lng="122.960425" 
                    data-name="The Doctors Hospital">
                Navigate to Location
            </button>
        </div>

        <div class="card food">
            <h4>Sharyn's Cansi House</h4>
            <p>C-58 Capitol Shopping Center, Narra Ave, Brgy. Villamonte, Bacolod</p>
            <p>9 am - 8 pm</p>
            <button class="navigate-btn"
                    data-lat="10.6733561" 
                    data-lng="122.9596188"
                    data-name="Sharyn's Cansi House">
                Navigate to Location
            </button>
        </div>

        <div class="card food">
            <h4>LJ Carinderia</h4>
            <p>Purok Pagla, um, Daniel Ramos St, Barangay 17, Bacolod</p>
            <p>8 am - 9 pm</p>
            <button class="navigate-btn"
                    data-lat="10.67069" 
                    data-lng="122.95529"
                    data-name="LJ">
                Navigate to Location
            </button>
        </div>

        <div class="card water">
            <h4>Water Den</h4>
            <p>Villa fe subd, Bacolod</p>
            <p>8 am - 6 pm</p>
            <button class="navigate-btn"
                    data-lat="10.67301"
                    data-lng="122.97149"
                    data-name="Water Den">
                Navigate to Location
            </button>
        </div>

        <div class="card shelter">
            <h4>Vista Alegre Evacuation Center</h4>
            <p>Lot 21 Abada Eskay, Bacolod</p>
            <p>9 am - 8 pm</p>
            <button class="navigate-btn"
                    data-lat="10.65159" 
                    data-lng="123.01701"
                    data-name="Vista Alegre Evacuation Center">
                Navigate to Location
            </button>
        </div>

    </div>

</div>

<script src = "resource.js">
</script>

<?php include 'footer.php'; ?>
