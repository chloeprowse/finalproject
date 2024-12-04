<?php
$host = 'localhost';
$db = 'tennis_players';
$user = 'root'; // Default user for local server
$pass = ''; // Default password for local server

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
