<?php
$host = "localhost";
$user = "root";
$pass = ""; // Jika default, biarkan kosong
$db = "simpangstore";

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
