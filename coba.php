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
    }else if(isset($_SESSION['error_message'])){
        echo '<script>alert("' . $_SESSION['error_message'] . '");</script>';
 
        unset($_SESSION['error_message']);
    }



    //  Get Data User Login
    $email = $_SESSION['AuthLogin'];

    $query = "SELECT * FROM tb_user WHERE email='$email'";
    $clause = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <style>
        @font-face {
            font-family: jejuHallasan;
            src: url('assets/fonts/JejuHallasan-Regular.ttf');
        }

        *{
            font-family: jejuHallasan;
            margin: 0;
            padding: 0;
        }

        body{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        #CHeader{
            top: 0;
        }

        .content{
            display: flex;
            align-items: center;
            justify-content: start;
            padding-top: 12%;
            margin-left: 20px;
        }

        .content input {
            width: 100%;
            height: 20px;
            background: #D9D9D9;
            border: none;
            padding: 2px 0;
        }

        .content input::placeholder {
            text-align: center;
            color: black;
        }

        #nameProf{
            display: flex;
            align-items: center;
        }

        #nameProf input{
            margin-left: 15px;
        }

        .main{
            margin-top: 20px;
            display: flex;
            align-items: start;
            justify-content: start;
            flex-direction: column;
            padding: 10px;
            margin-left: 60px;
        }

        .main .listInput{
            margin-bottom: 10px;
            text-align: left;
            display: flex;
            justify-content: start;
            flex-direction: column;
        }

        .main .listInput label{
            font-size: 25px;
        }

        .main .listInput input{
            background: #D9D9D9;
            border: none;
            padding: 0 5px;
            height: 40px;
            width: 250px;
        }

        .main .listInput #btnKluar{
            font-weight: bold;
            width: 100%;
            margin: 20px 30px;
        }

        .main .listInput #btnKluar button{
            font-weight: bold;
        }

            .main .listInput #btnKluar{
                text-align: center;
                width: 100%;
                margin: 30px;
            }

            .main .listInput #btnKluar button{
                border: none;
                padding: 10px 40px;
                background: #AE5C97;
            }

            .footerBg{
                margin-top: -20%;
                display: flex;
                justify-content: space-between;
            }

            .footerBg .pbl img{
                margin-top: -10%;
            }
    
            .pbr5 img{
                width: 70px;
                height: 140px;
            }

        @media (max-width: 556px) {
            body{
                display: block;
            }
            .pbr5 img{
                width: 70px;
                height: 140px;
            }

            .content{
                padding-top: 35%;
                margin-left: 30px;
            }

            .content input {
                width: 100%;
                /* width: 92px; */
                text-align: center;
            }

            .main{
                margin-left: 30px;
                position: absolute;
            }

            .main .listInput #btnKluar{
                text-align: center;
                width: 100%;
                margin: 30px;
            }

            .main .listInput #btnKluar button{
                border: none;
                padding: 10px 40px;
                background: #AE5C97;
            }

            .footerBg{
                margin-top: 53%;
                display: flex;
                justify-content: space-between;
            }

            .footerBg .pbl img{
                margin-top: -10%;
            }

        }

    </style>

</head>
<body>

    <div style="width: 100%;
        position: absolute;
        display: flex; 
        justify-content: space-between;
    "
    id="CHeader"
    >
        <a href="dashboard.php" style="" id="peBack">
            <div class="iconBack" style="width: 21px; margin: 10px 5px;">
                <img src="assets/img/arrowBack.png" alt="" width="17">
            </div>
        </a>

        <div class="pbr5" style="display: flex;
                align-items: end;
                justify-content: end;">
            <img src="assets/img/PTR.png" alt="" width="80" height="200">
        </div>
   </div>

   <?php while($row = $clause->fetch_assoc()) { ?>
   <div class="content">
        <div id="nameProf">
            <img src="assets/img/profile.png" alt="" width="40">
            <input type="text" name="nama" id="nama" placeholder="nama" value="<?= $row['nama'] ?>" readonly>
        </div>        
    </div>
    <div class="main">
       <form action="backend/editProfile.php" method="POST">
           <input type="text" name="idUser" id="idUser" placeholder="idUser" value="<?= $row['id'] ?>" hidden>
        <div class="listInput">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="email" value="<?= $row['email'] ?>" >
            </div>
            <div class="listInput">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="nama" value="<?= $row['nama'] ?>" >
            </div>
            <div class="listInput">
                <label for="noHp">No HP</label>
                <input type="text" name="noHp" id="noHp" placeholder="noHp" value="<?= $row['noHp'] ?>" >
            </div>
            <?php } ?>
            <div class="listInput" style="margin-left: -60px !important;">
                <div id="btnKluar">
                    <a>
                        <button type="submit">    
                            Edit
                        </button>
                    </a>
        </form>
                <a href="logout.php">
                    <button>    
                        Keluar
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div style="width: 100%; z-index: -1;" class="footerBg">
        <div class="pbl" style="">
            <img src="assets/img/PLC.png" alt="" width="70">
        </div>

        <div class="pbr" style="margin-top: 109px;">
            <img src="assets/img/PBR.png" alt="" width="50" id="monster">
        </div>
   </div>
    
</body>
</html>