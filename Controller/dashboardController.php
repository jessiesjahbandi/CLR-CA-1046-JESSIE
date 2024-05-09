<?php
include_once 'Model/dashboard.php';

class dashboardController {
    static function index() {
        // Membuat objek koneksi
        global $conn;

        // Membuat objek model dan meneruskan koneksi
        $model = new dashboard($conn);
        
        // Memanggil method untuk mendapatkan data dari model
        $results = $model->index();
        
        view('dashboard',['results' => $results]);
    }

    static function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $no_hp = $_POST['no_hp'];
            $owner = $_POST['owner'];
            $model = new dashboard();
            $rowCount = $model->createData($no_hp, $owner);

            header("Location: dashboard");
            exit();
        } else {
            view('create');
        }
        
    }
    static function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $no_hp = $_POST['no_hp'];
            $owner = $_POST['owner'];
            
            $model = new dashboard();
            $rowCount = $model->updateData($id, $no_hp, $owner);
            header("Location: dashboard");
            exit();
        } else {
            global $conn;

            $id = $_GET['id'];
    
            $query = $conn->prepare("SELECT * FROM dashboard WHERE id = ?");
            $query->bind_param("i", $id); // Binding parameter
            $query->execute();
            $result = $query->get_result(); // Mengambil hasil query
            $kontak = $result->fetch_assoc(); // Menggunakan fetch_assoc() untuk mengambil hasil
            view('update',['kontak' => $kontak]);
        }
    }
    
    static function delete() {
        $id = $_GET['id'];
        $model = new dashboard();
        $rowCount = $model->deleteData($id);

        header("Location: dashboard"); // Redirect ke halaman utama jika insert berhasil
        exit();
    }
    
}
// <?php

    
//     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     } else {
//         $id = $_GET['id'];
//         $query = $pdo->prepare("SELECT * FROM dashboard WHERE id = ?");
//         $query->execute([$id]);
//         $kontak = $query->fetch(PDO::FETCH_ASSOC);
//     }
// 