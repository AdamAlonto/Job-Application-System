<?php
// dbConfig.php
$host = 'localhost'; // or your server IP
$dbname = 'Mechanics'; // your database name
$username = 'root'; // your username
$password = ''; // your password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
