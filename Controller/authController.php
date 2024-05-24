<?php
include_once 'Model/user.php';

class authController {
    static function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usernameOrEmail = $_POST['usernameOrEmail'];
            $password = $_POST['password'];
    
            // Lakukan validasi input
            if (empty($usernameOrEmail)) {
                $errors[] = "Username atau email tidak boleh kosong.";
            }
    
            if (empty($password)) {
                $errors[] = "Password tidak boleh kosong.";
            }
    
            // Jika tidak ada kesalahan, lakukan login
            if (empty($errors)) {
                // Proses login pengguna
                $user = new User();
                $user = $user->getUserByUsernameOrEmail($usernameOrEmail);
                
                if ($user && $password == $user['password']) {
                    $_SESSION['userId'] = $user['id'];
                    header("Location: dashboard");
                    exit();
                } else {
                    // Login gagal, simpan pesan error di session
                    $_SESSION['errors'] = ["Username / Email atau Password Salah"];
                    header("Location: ".urlpath(''));
                    exit();
                }
            } else {
                // Simpan pesan kesalahan di session
                $_SESSION['errors'] = $errors;
                header("Location: " .urlpath(''));
                exit();
            }
        } else {
            return view('login');
        }
    }
    
    
    static function register() {
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['konfirmasi'];

            // Lakukan validasi input
            if (empty($username)) {
                $errors[] = "Username tidak boleh kosong.";
            }

            if (empty($email)) {
                $errors[] = "Email tidak boleh kosong.";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Format email tidak valid.";
            }

            if (empty($password)) {
                $errors[] = "Password tidak boleh kosong.";
            }

            if ($password !== $confirmPassword) {
                $errors[] = "Password dan konfirmasi password tidak cocok.";
            }
            if (!(user::isUnique($username,$password))) {
                $errors[] = "Username dan password sudah terdaftar.";
            }
            // Jika tidak ada kesalahan, lakukan registrasi
            if (empty($errors)) {
                // Proses registrasi pengguna
                $user = new User();
                $user->create($username, $email, $password);
                
                header('Location: '.urlpath(''));
                exit();
            } else {
                // Tampilkan pesan kesalahan
                return view('register', ['errors' => $errors]);
            }
        } else {
            return view('register');
        }
    }
}
?>
