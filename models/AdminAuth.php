<?php
require_once __DIR__ . '/../config/db.php';

class AdminAuth {

    public static function signup($data) {
        global $pdo;

        $sql = "INSERT INTO admins
        (first_name,last_name,email,password_hash,position,barangay_id)
        VALUES (?,?,?,?,?,?)";

        $stmt = $pdo->prepare($sql);

        $hash = password_hash($data['password'], PASSWORD_DEFAULT);

        try {
        $stmt->execute([
            $data['first_name'],
            $data['last_name'],
            $data['email'],
            $hash,
            $data['position'],
            $data['barangay_id']
        ]);
        return true; // signup successful
    } catch (PDOException $e) {
        // Duplicate entry error code is 23000
        if ($e->getCode() == 23000) {
            return false; // email already exists
        }
        throw $e; // re-throw other DB errors
    }
}

    public static function signin($email, $password) {
        global $pdo;

        $stmt = $pdo->prepare("SELECT * FROM admins WHERE email=?");
        $stmt->execute([$email]);
        $admin = $stmt->fetch();

        if ($admin && password_verify($password, $admin['password_hash'])) {
            return $admin;
        }

        return false;
    }
}