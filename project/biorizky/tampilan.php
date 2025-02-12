<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "rizkybio");

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query SQL
$query_sql = "SELECT * FROM biodata";

// Eksekusi query
$result = mysqli_query($conn, $query_sql);

// Cek apakah ada hasil
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row); // Menampilkan data
    }
} else {
    echo "Query gagal: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
