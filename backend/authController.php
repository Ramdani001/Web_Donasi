<?php
session_start();

include 'connection.php'; 

$status = htmlspecialchars($_POST['status']);

if($status == "Register"){
    
    $status = htmlspecialchars($_POST['status']);
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $noHp = htmlspecialchars($_POST['noHp']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO tb_user (nama, email, noHp, password) VALUES ('$nama', '$email', '$noHp', '$password')";
    $insert = mysqli_query($conn, $query);

    if($insert){
        $_SESSION['success_message'] = "Register berhasil!";

        header('Location: ../login.php');
        exit();

    }else{
        $_SESSION['error_message'] = "Register gagal!";

        header('Location: ../daftar.php');
        exit();
    }

}else{

    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email='$email'");

    if($result){

        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['password'])){
            $_SESSION['success_message'] = "Login Berhasil!";

            $_SESSION['AuthLogin'] = $row['email'];
        
            header('Location: ../dashboard.php');
            exit();
        }else{
            $_SESSION['error_message'] = "Email atau Password Salah !!!";
        
            header('Location: ../login.php');
            exit();

        }
    }
}