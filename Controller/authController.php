<?php
include_once 'Model/user.php';

class authController {
    static function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usernameOrEmail = $_POST['usernameOrEmail'];
            $password = $_POST['password'];

            // Lakukan validasi login
            $user = new user();
            $user = $user->getUserByUsernameOrEmail($usernameOrEmail);
            // var_dump($user);

            if ($user && $password == $user['password']) {
                // Login berhasil, redirect ke halaman dashboard atau halaman lainnya
                header("Location: dashboard");
                exit();
            } else {
                // Login gagal, tampilkan pesan error atau redirect kembali ke halaman login
                header("Location: login");
                exit();
            }
        }
    }
}
?>
