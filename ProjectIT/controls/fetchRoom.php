<?php
    include './controls/db.php';
    session_start();

    // ดึงข้อมูลผู้ใช้งานจาก Data base
    $sql = "SELECT `id`, `name_room`, `description`, `building`, `created_at` FROM `room`";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
?>