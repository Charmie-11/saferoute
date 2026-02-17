<?php
session_start();
require_once '../models/UserAuth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = UserAuth::signin($_POST['email'], $_POST['password']);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = 'user';

        header("Location: ../views/home.php");
        exit;
    }

    header("Location: ../views/signin.php?error=1");
}

if (isset($_GET['error'])): ?>
        <div class="form-error">
            Invalid email or password.
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['registered'])): ?>
        <div class="form-success">
            Account created successfully. Please sign in.
        </div>
    <?php endif; ?>