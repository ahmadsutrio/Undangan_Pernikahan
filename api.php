<?php
include("System.php");

function getData()
{
    $koneksi = new System;
    $koneksi = $koneksi->koneksi();
    $query = "SELECT * FROM undangan ORDER BY id DESC";
    $getData = mysqli_query($koneksi, $query);

    $data = []; // Inisialisasi array untuk menampung data

    // Loop untuk mengambil data dari query
    while ($row = mysqli_fetch_assoc($getData)) {
        $data[] = $row; // Tambahkan data ke dalam array
    }

    // Mengembalikan data dalam format JSON
    return json_encode($data);
}

echo getData(); // Menampilkan data dalam format JSON