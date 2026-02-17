<?php
session_start();
require_once '../models/AdminAuth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $admin = AdminAuth::signin($_POST['email'], $_POST['password']);

    if ($admin) {
        $_SESSION['user_id'] = $admin['admin_id'];
        $_SESSION['role'] = 'admin';

        header("Location: ../views/adminhome.php");
        exit;
    }

    header("Location: ../views/adminsignin.php?error=1");
}
 if (isset($_GET['error'])): ?>
        <div class="form-error">Invalid admin email or password.</div>
      <?php endif; ?>

      <?php if (isset($_GET['registered'])): ?>
        <div class="form-success">Admin account created. Please sign in.</div>
      <?php endif; ?>