<?php
session_start();
require_once '../models/AdminAuth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = [
        'first_name'  => $_POST['firstname'],
        'last_name'   => $_POST['lastname'],
        'email'       => $_POST['email'],
        'password'    => $_POST['password'],
        'position'    => $_POST['role'],
        'barangay_id' => $_POST['empid']
    ];

    $success = AdminAuth::signup($data);

    if ($success) {
        header("Location: ../views/adminsignin.php?registered=1");
    } else {
        // Redirect back to signup page with error flag
        header("Location: ../views/adminsignup.php?error=1");
    }
    exit;
}