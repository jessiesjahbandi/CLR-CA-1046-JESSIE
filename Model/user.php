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

    public static function create($username,$email,$password) {
        global $conn;

        $query = "INSERT INTO user (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $username, $email, $password);
        $stmt->execute();
    }

    public static function isUnique($username, $email) {
        global $conn;
        
        $query = "SELECT COUNT(*) FROM user WHERE username = ? OR email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();
        return $count == 0;
    }
}