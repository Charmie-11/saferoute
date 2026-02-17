<?php
require_once __DIR__ . '/../config/db.php';

class UserAuth {

    public static function signup($data) {
        global $pdo;

        $sql = "INSERT INTO userinfo 
        (first_name,last_name,email,address,age,sex,birth_date,password)
        VALUES (?,?,?,?,?,?,?,?)";

        $stmt = $pdo->prepare($sql);

        $hash = password_hash($data['password'], PASSWORD_DEFAULT);

        return $stmt->execute([
            $data['first_name'],
            $data['last_name'],
            $data['email'],
            $data['address'],
            $data['age'],
            $data['sex'],
            $data['birth_date'],
            $hash
        ]);
    }

    public static function signin($email, $password) {
        global $pdo;

        $stmt = $pdo->prepare("SELECT * FROM userinfo WHERE email=?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }
}