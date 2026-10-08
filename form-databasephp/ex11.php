<?php

$host = "localhost";
$dbname = "Practice";
$username = "root";
$password = "";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    echo "Connected to MySQL!";
} catch (PDOException $e) {
    echo "Connection failed.";
}
?>