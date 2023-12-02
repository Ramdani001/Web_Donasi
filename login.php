<?php 
    session_start();

    
    if(isset($_SESSION['AuthLogin'])){
        header('Location: dashboard.php');
        exit();
    }
    // ==

    // ==

    if (isset($_SESSION['success_message'])) {
 
        echo '<script>alert("' . $_SESSION['success_message'] . '");</script>';
 
        unset($_SESSION['success_message']);
    }else if(isset($_SESSION['error_message'])){
        echo '<script>alert("' . $_SESSION['error_message'] . '");</script>';
 
        unset($_SESSION['error_message']);
    }else if(isset($_SESSION['Auth_message'])){
        echo '<script>alert("' . $_SESSION['Auth_message'] . '");</script>';
 
        unset($_SESSION['Auth_message']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body id="bodyLogin">
        <a href="index.php" style="cursor: pointer;">
            <div class="iconBack" style="width: 20px; position: absolute; margin: 10px 5px;">
                <img src="assets/img/arrowBack.png" alt="" width="30">
            </div>
        </a>
        <div class="main">
            <div id="container" style="font-family: jejuHallasan; position: absolute;">
        
                <div class="header" style="margin-top: 20px; padding-top: 50px;">
                    <h1>
                        Masuk
                    </h1>
                </div>
                <div class="content" style="z-index: 100;">
                    <form action="backEnd/authController.php" method="POST">
                        <input type="text" name="status" id="status" placeholder="Nama" style="margin-top: 20px;" value="Login" hidden>


                        <input type="email" name="email" id="email" placeholder="Email">
                        <input type="password" name="password" id="password" placeholder="Password">
                        <button>Masuk</button>
                    </form>
                    <h5>Belum punya akun?</h5>
                    <a href="daftar.php">
                        <button
                        style="
                            cursor: pointer;
                            border: none;
                            margin-top: 8px;
                            font-weight: bold;
                            padding: 5px 30px;
                            letter-spacing: 3px;
                            border-radius: 10px;
                            margin-bottom: 20px;
                            background: #B572AE ;
                            font-family: jejuHallasan;
                            filter: drop-shadow(2px 2px rgba(99, 98, 98, 0.3));
                        "
                        >Buat Akun</button>
                    </a>
                    
                </div>
            </div>
        </div>
        <div style="" id="bgBottom">
            <img src="assets/img/bg1.png" alt="" style="width: 100%;">
        </div>
    
</body>
</html>