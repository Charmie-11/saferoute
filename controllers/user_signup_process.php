<?php
session_start();
require_once '../models/UserModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = [
    'first_name' => $_POST['firstname'],
    'last_name'  => $_POST['lastname'],
    'email'      => $_POST['email'],
    'address'    => $_POST['address'],
    'age'        => $_POST['age'],
    'sex'        => $_POST['sex'],
    'birth_date' => $_POST['dob_yyyy'] . '-' . $_POST['dob_mm'] . '-' . $_POST['dob_dd'],
    'password'   => password_hash($_POST['password'], PASSWORD_DEFAULT)
];

    $userModel = new UserModel();
    $result = $userModel->createUser($data);

    if ($result) {
        // Redirect to signin.php on success
        header("Location: ../views/signin.php?registered=1");
        exit();
    } else {
        // Redirect back to signup.php on failure
        header("Location: ../views/signup.php?error=1");
        exit();
    }
}
