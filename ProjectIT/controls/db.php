<?php
    $host = 'localhost';
    $dbname = 'project';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8mb4", $username, $password);
        $pdo->setAttribute(
            PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
        );
         echo "<script>console.log('Connecttion Success');</script>";
    } catch (Exception $e) {
        echo "<scritp>alert('Error: " . $e->getMessage() ."'</scritp>";
        exit();
    }
?>