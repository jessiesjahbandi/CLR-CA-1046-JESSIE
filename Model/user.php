<?php
include_once 'config/conn.php';

class user {
    public static function getUserByUsernameOrEmail($usernameOrEmail) {
        global $conn;

        $query = "SELECT * FROM user WHERE username = ? OR email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $usernameOrEmail, $usernameOrEmail);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        return $user;
    }
}