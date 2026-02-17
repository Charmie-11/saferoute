<?php
require_once '../config/db.php';

class UserModel {

    private $conn;

    public function __construct() {
        global $pdo;
        $this->conn = $pdo;
    }

    public function createUser($data) {
        // Check if email exists
        $stmt = $this->conn->prepare("SELECT * FROM userinfo WHERE email=?");
        $stmt->execute([$data['email']]);
        if ($stmt->rowCount() > 0) return false;

        // Insert user
        $stmt = $this->conn->prepare(
            "INSERT INTO userinfo (first_name, last_name, email, address, age, sex, birth_date, password) 
             VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
        );
        return $stmt->execute([
            $data['first_name'], $data['last_name'], $data['email'], $data['address'],
            $data['age'], $data['sex'], $data['birth_date'], $data['password']
        ]);
    }
}
