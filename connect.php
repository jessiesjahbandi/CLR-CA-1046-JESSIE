<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "kelas_a_1046"; // nama database

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ""; 
} catch(PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
