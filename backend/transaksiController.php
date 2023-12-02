<?php

    session_start();

    include 'connection.php'; 

    $email = $_SESSION['AuthLogin'];

    $query = "SELECT * FROM tb_user WHERE email='$email'";
    $clause = mysqli_query($conn, $query);
    $idUser = 0;

    while($row = $clause->fetch_assoc()) {
        $idUser = intval($row["id"]);
    }

    $nominal = htmlspecialchars($_POST['nominalDonasi']);
    $keterangan = htmlspecialchars($_POST['keterangan']);

    $query = "INSERT INTO tb_transaksi (id_user, nominal_donasi, keterangan) VALUES ('$idUser', '$nominal', '$keterangan')";

    $insert = mysqli_query($conn, $query);

    if($insert){
        $_SESSION['success_message'] = "Donasi Berhasil!";

        $_SESSION['nominal'] = $nominal;
        $_SESSION['keterangan'] = $keterangan;

        header('Location: ../berhasilTrans.php');
        exit();

    }else{
        $_SESSION['error_message'] = "Donasi Gagal";

        header('Location: ../uang.php');
        exit();
    }