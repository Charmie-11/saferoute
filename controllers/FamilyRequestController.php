<?php
session_start();

require_once __DIR__ . '/../models/FamilyRequestModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $uploadName = null;

    if (!empty($_FILES['proof_file']['name'])) {
        $uploadDir = "../uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir);
        }

        $uploadName = time() . "_" . $_FILES['proof_file']['name'];
        move_uploaded_file(
            $_FILES['proof_file']['tmp_name'],
            $uploadDir . $uploadName
        );
    }

    $data = [
        'user_id' => $_SESSION['user_id'],
        'request_type' => $_POST['request_type'],
        'family_name' => $_POST['family_name'] ?? null,
        'join_family_id' => $_POST['join_family_id'] ?? null,
        'relationship' => $_POST['relationship'],
        'contact' => $_POST['family_contact'],
        'address' => $_POST['family_address'],
        'is_head' => isset($_POST['is_head']) ? 1 : 0,
        'proof_file' => $uploadName
    ];

    FamilyRequestModel::createRequest($data);

    header("Location: ../profile.php?submitted=1");
    exit;
}
