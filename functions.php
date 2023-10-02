<?php

function koneksi() {
    // koneksi ke MySQL & memilih DB
    $conn = mysqli_connect('localhost', 'root', '', 'prakweb2023b_213040115') or die('Koneksi ke database GAGAL!');

    return $conn;
}

function query($query) {
    $conn = koneksi();
    // query untuk mengambil seluruh isi dari tabel buku
    $result = mysqli_query($conn, $query) or die('Query GAGAL! ' .mysqli_error($conn));;

    // looping untuk mengambil setiap data buku satu per satu
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

?>