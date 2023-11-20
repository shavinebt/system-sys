<?php
$host = 'localhost';
$dbname = 'database';
$username = 'database_username';
$password = 'database_password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to the database successfully!';
} catch (PDOException $e) {
    echo 'Error connecting to the database: ' . $e->getMessage();
}?>
