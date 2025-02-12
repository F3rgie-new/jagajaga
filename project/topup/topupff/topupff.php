<?php
    require "connect.php";

    $id = $_POST["id"];
    $nominal = $_POST["nominal"];
    $pembayaran = $_POST["pembayaran"];

    // Query untuk menghitung jumlah data dalam mobile_legend
    $sql = "SELECT * FROM mobile_legend";
    $hasil = mysqli_query($conn, $sql);

    $resi = 83880; // Inisialisasi
    while ($data = mysqli_fetch_array($hasil)) {
        $resi++;
    }

    // Query untuk insert data baru
    $query_sql = "INSERT INTO free_fire (id,  nominal, pembayaran, resi)
                  VALUES ('$id',  '$nominal', '$pembayaran', '$resi')";

    if (mysqli_query($conn, $query_sql)) {
        header("Location: topupff.html");
        exit(); // Tambahkan exit untuk menghentikan eksekusi setelah redirect
    } else {
        echo "Error: " . mysqli_error($conn);
    }
?>
