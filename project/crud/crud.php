<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "Crud";

$kon = mysqli_connect($host,$user,$password,$db);
if(!$kon){
    die("koneksi gagal terhubung ". mysqli_connect_error());

} 
else {
    echo "Koneksi berhasil!";
}
?>