<?php require 'header.php'; ?>

<link rel="stylesheet" href="../views/signin.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<main class="signup-page">
<div class="signup-container">

<section class="form-section">
    <h1>Welcome Back User!</h1>
    <p class="subtitle">Please sign in your account.</p>    

    <?php if (isset($_GET['error'])): ?>
        <div class="form-error">Invalid admin email or password.</div>
    <?php endif; ?>

    <?php if (isset($_GET['registered'])): ?>
        <div class="form-success">User account created. Please sign in.</div>
    <?php endif; ?>


    <!-- ✅ IMPORTANT: action now points to controller -->
    <form action="/controllers/user_signin_process.php" method="POST">

        <div class="input-group">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="Enter your email address" required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
        </div>

        <p class="login-link">
            Don’t have an account?
            <a href="signup.php">Sign Up</a>
        </p>

        <button type="submit" class="signup-btn">Sign In</button>

    </form>
</section>

<section class="image-section">
    <img src="/assets/1stBG.jpg" alt="">
</section>

</div>
</main>

<?php require 'footer.php'; ?>