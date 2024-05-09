<?php
include_once 'config/conn.php';

class dashboard {
    public function index($userId) {
        global $conn;
        $query = "SELECT id, no_hp, owner FROM dashboard WHERE user_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        $results = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
        }

        return $results;
    }

    public function createData($no_hp, $owner, $userId) {
        global $conn;
    
        $query = $conn->prepare("INSERT INTO dashboard (no_hp, owner, user_id) VALUES (?, ?, ?)");
        $query->bind_param("ssi", $no_hp, $owner, $userId); // Binding parameters and specifying data types
        $query->execute(); // Execute the query
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
