<?php
    $servername = "localhost";
    $database = "db_donasi";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Koneksi Gagal : ". mysqli_connect_error());
    }
    // echo "Koneksi Berhasil";

    return $conn;

?>