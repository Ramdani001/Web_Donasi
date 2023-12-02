<?php 
    session_start();

    require 'backend/connection.php';

    if(!isset($_SESSION['AuthLogin'])){
        header('Location: login.php');
        exit();
    }
    // ==

    if (isset($_SESSION['success_message'])) {
 
        echo '<script>alert("' . $_SESSION['success_message'] . '");</script>';
 
        unset($_SESSION['success_message']);
        echo '<script>location.reload();</script>';
    }else if(isset($_SESSION['error_message'])){
        echo '<script>alert("' . $_SESSION['error_message'] . '");</script>';
 
        unset($_SESSION['error_message']);
        echo '<script>location.reload();</script>';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
        @font-face {
            font-family: jejuHallasan;
            src: url('assets/fonts/JejuHallasan-Regular.ttf');
        }

        #container{
            display: flex;
            text-align: center;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            font-family: jejuHallasan;
        }

        .footer{
            margin-top: 50px;
            display: flex;
            text-align: center;
            align-items: center;
        }
        .footer button{
            margin-left: 10px;
            border: none;
            height: 50px;
            padding: 7px 50px;
            border-radius: 50px;
            background: #C8B2DA;
        }

        @media (max-width: 556px) {
            .content{
                width: 100%;
                display: flex;
                text-align: center;
                align-items: center;
                margin: 0;
                justify-content: space-between;
            }
            .content img{
                width: 100px;
            }   

            .header{
                margin-top: 20px;
            }

            .footer{
                margin-top: 0;
                display: flex;
                text-align: center;
                align-items: center;
                flex-direction: column;
                justify-content: center;
            }

            .footer a{
                margin-top: 20px;
            }

            #navbarBottom{
                left:0;
                right:0;
                width: 100%;
                margin-bottom: 0;
                height: 50px;
                position:fixed;
            }

        }

    </style>

</head>
<body>
    <div id="container">
        <div class="header">
            <h1>Hallo Dermawan</h1>
            <p>
            Sesungguhnya amal kebaikan yang dicintai oleh Allah adalah yang terus menerus walaupun sedikit 
            </p>
        </div>

        
        <div class="footer">
            <a href="uang.php">
                <button>Uang</button>
            </a>
            <a href="barang.php">
                <button>Makanan / <br> Barang</button>
            </a>
        </div>

        <div class="content" style="margin-top: 50px;">
            <img src="assets/img/donate.png" alt="" width="150">
            <img src="assets/img/donate2.png" alt="" width="150">
            <img src="assets/img/donasi3.png" alt="" width="150">
        </div>


        
    </div>
    <div id="navbarBottom" style="bottom: 74px; width: 100%;  position:fixed; left:0; right:0; height: 50px;
        display: flex; text-align: center; align-items: center; justify-content: center; ">
        <img src="assets/img/people.png" alt="" width="300">
    </div>
    <div style="bottom: 0; z-index: -1; background: gray; width: 100%;  position:fixed; left:0; right:0; height: 60px;">
        <div style=" display: flex; text-align: center; align-items: center; justify-content: space-around; ">
            <a href="history.php" style=" text-decoration: none; color: black; padding: 5px; display: flex; text-align: center; align-items: center;flex-direction: column; justify-content: center; ">
                <img src="assets/img/iconHistory.png" alt="" width="30">
                <span>History</span>
            </a>
            <a href="dashboard.php" style="text-decoration: none; color: black; display: flex; text-align: center; align-items: center; flex-direction: column;justify-content: center; padding: 5px; ">
                <img src="assets/img/iconHouse.png" alt="" width="40">
                <span style="font-size: 10px;">Home</span>
            </a>
            <a href="profile.php" style="
            padding: 5px;
                display: flex;
                text-align: center;
                align-items: center;
                flex-direction: column;
                justify-content: center;
                text-decoration: none;
                color: black;
            ">
                <img src="assets/img/iconProfile.png" alt="" width="40">
                <span style="font-size: 10px;">Profile</span>
            </a>
        </div>
    </div>
</body>
</html>
