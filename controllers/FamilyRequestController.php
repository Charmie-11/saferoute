<?php
session_start();
require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $proofName = null;

    // file upload (optional)
    if (!empty($_FILES['proof_file']['name'])) {
        $dir = "../uploads/";
        if (!is_dir($dir)) mkdir($dir);

        $proofName = time() . "_" . $_FILES['proof_file']['name'];
        move_uploaded_file(
            $_FILES['proof_file']['tmp_name'],
            $dir . $proofName
        );
    }

    // detect which form
    $familyName = $_POST['family_name']
        ?? $_POST['family_lookup']
        ?? null;

    $address = $_POST['family_address'] ?? null;

    $barangay = $_POST['barangay'] ?? null;

    $sql = "INSERT INTO family_requests
            (requested_by, family_name, address, barangay, proof_file, status)
            VALUES (?, ?, ?, ?, ?, 'pending')";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "issss",
        $_SESSION['user_id'],
        $familyName,
        $address,
        $barangay,
        $proofName
    );

    $stmt->execute();

    header("Location: ../profile.php?submitted=1");
    exit;
}
