<?php
session_start();

if(isset($_SESSION['AuthLogin'])){

    $_SESSION['Auth_message'] = "Harap Login Terlebih Dahulu!!";

    unset($_SESSION['AuthLogin']);

    header('Location: login.php');
    exit();
}