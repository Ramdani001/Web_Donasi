<?php
 session_start();
 require 'backend/connection.php';
 if(!isset($_SESSION['AuthLogin'])){
     header('Location: login.php');
     exit();
 }
 // ==

 
    //  Get Data User Login
    $email = $_SESSION['AuthLogin'];

    $query = "SELECT * FROM tb_user WHERE email='$email'";
    $clause = mysqli_query($conn, $query);

    $idUser = 0;
    while($row = $clause->fetch_assoc()) {
        $idUser = intval($row["id"]);
    }
    
    $query = "SELECT * FROM tb_transaksi WHERE id_user='$idUser'";
    $result = mysqli_query($conn, $query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>


    <style>
        @font-face {
            font-family: jejuHallasan;
            src: url('assets/fonts/JejuHallasan-Regular.ttf');
        }

        body{
            background: #E1C9DD;
        }

        *{
            font-family: jejuHallasan;
            margin: 0;
            padding: 0;
        }

        .pbr5{
            display: flex;
            align-items: end;
            justify-content: end;
        }

        .pbr{
            display: flex;
            align-items: end;
            justify-content: end;
        }

        .pbr2{
            margin-top: -1%;
            bottom: 0;
        }

        .pbl img{
            margin-top: 50px;
            height: 209px;
        }

        .pbr img{
            margin-top: 200px;
            position: absolute;
            height: 150px;
        }

        .pbr5 img{
            margin-top: -100px;
            /* position: absolute; */
            height: 150px;
        }

        .pbr #monster{
            height: 206px;
        }

        #container{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-top: 80px;
        }

        #content{
            
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        #container h1{
            padding-bottom: 60px;
        }

        #content h2{
            background: #20F0F0;
            padding-bottom: 40px;
        }

        .content .listHistory{
            background: #ffffff;
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .content .listHistory .nominal{
            padding-left: 40px;
        }

        #peBack{
            cursor: pointer; position: absolute; margin-top: -5%;
        }
        .content .listHistory{
            padding: 7px 10px;
        }

        @media (max-width: 556px){
            div #peBack{
                margin-top: -23%;
            }

            div .pbr5 img{
                width: 35px;
            }

            div .pbl img{
                height: 100px;
                width: 35px;
            }

            .pbr #monster{
                width: 120px;
                height: 100px;
            }

            .pbr2 {
                margin-top: 50%;
            }

            .content .listHistory{
                font-size: 10px;
                background: #ffffff;
                margin-top: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
            }
            
            #container h1{
                padding-bottom: 60px;
                font-size: 23px;
            }

            .content h2{
                width: 44%;
                text-align: center;
                padding: 3px 5px;
                font-size: 15px;
                background: #20F0F0;
            }

        }
     

    </style>

</head>
<body>
   <div style="width: 100%; position: absolute;">
    <a href="dashboard.php" style="" id="peBack">
            <div class="iconBack" style="width: 21px; margin: 10px 5px;">
                <img src="assets/img/arrowBack.png" alt="" width="17">
            </div>
        </a>

        <div class="pbr5" style="">
            <img src="assets/img/PBR.png" alt="" width="50">
        </div>
   </div>

    <div id="container">
        <h1>RIWAYAT</h1>

    <div class="content">
        <h2>
            Berhasil
        </h2>
    
        <!-- List History -->
        <!-- <?php while($row = $result->fetch_assoc()) {?> -->
            <div class="listHistory" style="">
                    <div class="tgl">
                        Pembayaran <br>
                        <?= $row['created_at'] ?>
                    </div>
                    <div class="nominal">
                        Rp. <?= $row['nominal_donasi'] ?>
                    </div>
            </div>
        <!-- <?php } ?> -->
        
    </div>
        
    </div>

    <div style="width: 100%;" class="pbr2">
        <div class="pbl" style="">
            <img src="assets/img/PBR.png" alt="" width="50">
        </div>

        <div class="pbr" style="">
            <img src="assets/img/monster.png" alt="" width="200" id="monster">
        </div>
   </div>

</body>
</html>