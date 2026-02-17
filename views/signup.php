<?php require 'header.php'; ?>

<link rel="stylesheet" href="../views/signup.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<main class="signup-page">
<div class="signup-container">

<section class="form-section">
    <h1>Welcome User!</h1>
    <p class="subtitle">Please make an account.</p>

    <?php if (isset($_GET['error'])): ?>
        <div class="form-error">Email already exists or invalid data.</div>
    <?php endif; ?>

    <!-- ✅ changed action to controller -->
    <form action="../controllers/user_signup_process.php" method="POST">

        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="firstname" required>
        </div>

        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="lastname" required>
        </div>

        <div class="input-group">
            <label>Email Address</label>
            <input type="email" name="email" required>
        </div>

        <div class="input-group">
            <label>Address</label>
            <input type="text" name="address" required>
        </div>

        <div class="two-columns">
            <div class="input-group">
                <label>Age</label>
                <input type="number" name="age" required>
            </div>

            <div class="input-group">
                <label>Sex</label>
                <div class="radio-group">
                    <label><input type="radio" name="sex" value="Female" required> Female</label>
                    <label><input type="radio" name="sex" value="Male"> Male</label>
                </div>
            </div>
        </div>

        <!-- DOB -->
        <div class="input-group">
            <label>Date of Birth</label>
            <div class="dob-group">
                <input type="text" name="dob_mm" placeholder="MM" required>
                <input type="text" name="dob_dd" placeholder="DD" required>
                <input type="text" name="dob_yyyy" placeholder="YYYY" required>
            </div>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <p class="login-link">
            Already have an account? <a href="signin.php">Log In</a>
        </p>

        <button type="submit" class="signup-btn">Sign Up</button>

    </form>
</section>

<section class="image-section">
    <img src="/assets/1stBG.jpg" alt="">
</section>

</div>
</main>

<?php require 'footer.php'; ?>