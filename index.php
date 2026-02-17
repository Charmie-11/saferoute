<?php require 'views/header.php'; ?>

<link rel="stylesheet" href="/views/styleindex.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<div id="pageContent">

    <div class="container">
        <h1>Welcome to SafeRoute Analytics!</h1>
        <div class="subtitle">Please choose what user are you:</div>

        <div class="card-wrapper">

            <div class="card" onclick="openModal('Admin')">
                <div class="icon"><span>🛡️</span></div>
                <h3>Admin Portal</h3>
                <p>For LGU officials and emergency responders.</p>
            </div>

            <div class="card" onclick="openModal('User')">
                <div class="icon user"><span>👥</span></div>
                <h3>User Portal</h3>
                <p>Safety information and community reporting.</p>
            </div>

        </div>
    </div>

</div>

<!-- MODAL -->
<div id="roleModal" class="modal">
    <div class="modal-content">
        <button class="close-btn" onclick="closeModal()">✕</button>
        <h2 id="modalTitle">Welcome</h2>
        <p>Please choose an option:</p>

        <div class="modal-buttons">
            <a id="signupBtn" class="modal-btn">Sign Up</a>
            <a id="loginBtn" class="modal-btn login">Log In</a>
        </div>
    </div>
</div>

<script src="js/script.js"></script>

<?php require 'views/footer.php'; ?>
