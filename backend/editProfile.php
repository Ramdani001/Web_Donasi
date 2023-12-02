<?php
    session_start();
    require 'connection.php';

    $idUser = htmlspecialchars($_POST['idUser']);
    $email = htmlspecialchars($_POST['email']);
    $nama = htmlspecialchars($_POST['nama']);
    $noHp = $_POST['noHp'];

    $query = "UPDATE tb_user SET nama='$nama', email='$email', noHp='$noHp' WHERE id='$idUser'";

    $result = mysqli_query($conn, $query);

    if($result){
        $_SESSION['success_message'] = "Update Berhasil!";

        header('Location: ../profile.php');
        exit();

    }else{
        $_SESSION['error_message'] = "Update Gagal";

        header('Location: ../profile.php');
        exit();
    }
