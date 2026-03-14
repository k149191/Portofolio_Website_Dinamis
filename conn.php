<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "portofolio";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die('Koneksi database tdk berhasil: ' . mysqli_connect_error());
}

mysqli_set_charset($conn, 'utf8mb4');
?>