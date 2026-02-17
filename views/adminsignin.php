<?php require 'header.php'; ?>

<link rel="stylesheet" href="adminsignin.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<main class="signin-page">
  <div class="signin-container">

    <!-- LEFT -->
    <section class="form-section">
      <h1>Welcome Back Admin!</h1>
      <p class="subtitle">Please sign in your account.</p>

      <?php if (isset($_GET['error'])): ?>
        <div class="form-error">Invalid admin email or password.</div>
      <?php endif; ?>

      <?php if (isset($_GET['registered'])): ?>
        <div class="form-success">Admin account created. Please sign in.</div>
      <?php endif; ?>

      <!-- ✅ controller action -->
      <form action="/controllers/admin_signin_process.php" method="POST">

        <div class="input-group">
          <label>Email Address</label>
          <input type="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
        </div>

        <p class="login-link">
          Don’t have an account?
          <a href="adminsignup.php">Sign Up</a>
        </p>

        <button type="submit" class="signin-btn">Sign In</button>

      </form>
    </section>

    <!-- RIGHT IMAGE -->
    <section class="image-section">
      <img src="/assets/1stBG.jpg" alt="">
    </section>

  </div>
</main>

<?php require 'footer.php'; ?>