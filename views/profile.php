<?php 
include 'header.php'; 

// Logic to handle logout without a separate file
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_unset();
    session_destroy();
    echo "<script>window.location.replace('index.php');</script>";
    exit();
}
?>

<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="profile.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>
<body>

<div class="profile-container">

    <div class="profile-grid">

        <div class="card main-profile">
            <div class="profile-row">
                <div class="avatar"></div>

                <div class="info">
                    <p><strong>Complete Name:</strong><br> Mariel Dignadice</p>
                    <p><strong>Contact Number:</strong><br> 0912345678</p>
                    <p><strong>Email Address:</strong><br> m.riel@gmail.com</p>
                    <p><strong>Home Address:</strong><br>
                    123 Mabini Street, Barangay San Jose, Manila City, Metro Manila</p>
                </div>

                <div class="status">
                    Status: <span class="safe">Safe</span>
                </div>
            </div>
        </div>

        <div class="card side-card">
            <h3>Family Information</h3>
            <p><strong>Role in family:</strong> Head of Household</p>
            <p><strong>Number of Family Members:</strong> 2</p>
            <p><strong>Names:</strong><br>
            Aida Dignadice<br>
            Isaiah Dignadice</p>
            <hr>
                <button class="add-family-btn" onclick="openFamilyModal()">
                    <i class="fa fa-users"></i> Submit Family Info
                </button>


            <hr>

            <h3>Notification Methods</h3>
            <div class="notif-option checked">SMS</div>
            <div class="notif-option checked">Email</div>
            <div class="notif-option">Push Notification</div>
        </div>

        <div class="card evac-card">
            <h3>Evacuation Preferences:</h3>
            <p><strong>Preferred Evacuation Center:</strong></p>
            <div class="center preferred">
                <div class="center-content">
                    <i class="fa-solid fa-house"></i>
                    <span>La Carlota South Elementary School 1</span>
                </div>
            </div>

            <p><strong>Alternative Evacuation Center:</strong></p>
            <div class="center alternative">
                <div class="center-content">
                    <i class="fa-solid fa-house"></i>
                    <span>La Carlota North Elementary School 2</span>
                </div>
            </div>
        </div>

    </div>

    <div class="actions">
    <button class="edit">Edit</button>

    <a href="?action=logout" class="logout">
        Logout
    </a>
</div>

<!-- FAMILY MODAL -->
<div id="familyModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeFamilyModal()">&times;</span>

    <h2>Family Information Submission</h2>

    <form method="POST" action="" enctype="multipart/form-data">

        <label>Family Full Name</label>
        <input type="text" name="family_name" required>

        <label>Relationship</label>
        <select name="relationship" required>
            <option value="">Select</option>
            <option>Father</option>
            <option>Mother</option>
            <option>Child</option>
            <option>Sibling</option>
            <option>Relative</option>
        </select>

        <label>Contact Number</label>
        <input type="text" name="family_contact">

        <label>Address</label>
        <textarea name="family_address"></textarea>

        <label class="checkbox-row">
            <input type="checkbox" name="is_head" value="1">
            Mark as Family Head
        </label>

        <label>Upload Proof (PSA, Birth Certificate, etc.)</label>
        <input type="file" name="proof_file" accept=".jpg,.jpeg,.png,.pdf" required>

        <button type="submit" name="submit_family" class="submit-family-btn">
            Submit for Verification
        </button>

    </form>
  </div>
</div>


<script src = "/httpdocs/js/profile.js">
    
</script>


<?php include 'footer.php'; ?>
