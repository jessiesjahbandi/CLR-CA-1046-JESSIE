<?php
include_once 'config/conn.php';

class dashboard {
    public function index() {
        global $conn;
        $query = "SELECT id, no_hp, owner FROM dashboard"; // Query untuk mengambil data
        $result = $conn->query($query);

        // Inisialisasi array untuk menyimpan hasil
        $results = [];

        if ($result->num_rows > 0) {
            // Mengambil setiap baris hasil query satu per satu
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
        }

        return $results;
    }

    public function createData($no_hp,$owner) {
        global $conn;

        $query = $conn->prepare("INSERT INTO dashboard (no_hp, owner) VALUES (?, ?)");
        $query->execute([$no_hp, $owner]);
    }

    public function updateData($id,$no_hp,$owner) {
        global $conn;

        $query = $conn->prepare("UPDATE dashboard SET no_hp = ?, owner = ? WHERE id = ?");
        $query->execute([$no_hp, $owner, $id]);
    }

    public function deleteData($id) {
        global $conn;
        $query = $conn->prepare("DELETE FROM dashboard WHERE id = ?");
        $query->execute([$id]);
    }
}
