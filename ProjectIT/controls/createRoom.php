<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: /ProjectIT/index.php");
}
    include 'db.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name_room = $_POST['name_room'];
        $description = $_POST['description'];
        $building = $_POST['building'];
    
        $sql = "INSERT INTO users (name_room, description, building) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $name_room,
            $description,
            $building,
        ]);
        header("Location: ../index.php");
    }
?>