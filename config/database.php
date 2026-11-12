
<?php

$host = "localhost";
$db = "tastify_db";
$user = "root";
$password = "";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $error) {
    die("Koneksi database gagal: " . $error->getMessage());
}

?>
