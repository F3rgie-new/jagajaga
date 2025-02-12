<?php
require "connek.php";

$nik = $_POST ["nik"];
$nama = $_POST ["nama"];
$jenisKelamin = $_POST ["jenisKelamin"];
$tanggalLahir = $_POST ["tanggalLahir"];
$tempatLahir = $_POST ["tempatLahir"];

$query_sql = "INSERT INTO biodata (nik, nama, jenisKelamin, tanggalLahir, tempatLahir)
                VALUES('$nik', '$nama', '$jenisKelamin', '$tanggalLahir', '$tempatLahir') ";


if(mysqli_query($kon, $query_sql)){
    header("location: biodata html");
}
else{
    echo"pendaftaran gagal : " . mysqli_error($kon);
}


