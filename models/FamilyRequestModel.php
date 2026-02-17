<?php
require_once __DIR__ . '/../config/db.php';

class FamilyRequestModel {

    public static function createRequest($data) {
        global $conn;

        $sql = "INSERT INTO family_requests
                (requested_by, family_name, address, barangay, proof_file, status)
                VALUES (?, ?, ?, ?, ?, 'pending')";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            "issss",
            $data['requested_by'],
            $data['family_name'],
            $data['address'],
            $data['barangay'],
            $data['proof_file']
        );

        return $stmt->execute();
    }
}
