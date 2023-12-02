<?php
 session_start();

 if(!isset($_SESSION['AuthLogin'])){
     header('Location: login.php');
     exit();
 }
 // ==
$nominal = $_SESSION['nominal'];
$keterangan = $_SESSION['keterangan'];

    $_SESSION['success_message'] = "Donasi Berhasil!";

    $_SESSION['nominal'] = $nominal;
    $_SESSION['keterangan'] = $keterangan;
    
    unset($_SESSION['success_message']);
    unset($_SESSION['nominal']);
    unset($_SESSION['keterangan']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berhasil Transaksi</title>

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

        #bgTop{
            position: absolute;
            width: 100%;
            margin-left:90%;
        }
        
        #bgTop img{
            margin-top: -100px;
            width: 100%;
            height: 200px;
        }

        #bgBottom img{
            width: 100%;
            height: 300px;
        }

        .content{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-top: 50px;
        }

        #bgBottom{
            display: flex;
            align-items: end;
            justify-content: end;
        }

        #bgBottom img{
            width: 30%;
            height: 450px;
            display: flex;
            margin-top: -100px;
            align-items: end;
            justify-content: end;
        }

       input::placeholder{
            text-align: center;
            font-weight: bold;
            color: black;
       }

       .content h1{
            padding: 20px 50px;
            border-radius: 50px;
            font-size: 18px;
            color: white;
            background: #AC1393;
       }

       .content p{
            font-size: 15px;
            margin-top: 20px;
            width: 400px;
            text-align: center;
       }

       .content input{
            width: 100%;
            border: none; 
            margin-top: 10px;
            padding: 10px 25px;
            background: #D9D9D9;
       }

       
       #mainSosmed{
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin-top: 30px;
        }

       #mainSosmed .sosmed{
            margin-left: 10px;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
       }

    
       
       @media (max-width: 556px)
        {

            .content p{
                margin-top: -30px;
                margin-bototm: 30px;
                width: 250px;
                text-align: center;
            }

            .content form input{
                width: 90%;
                margin-bottom: 20px;
            }
            
            .content form{
                margin-top: 50px;
                padding: 25px;
                display: flex;
                margin-left: 50px;
                align-items: center;
                flex-direction: column;
                justify-content: center;
            }

            #mainSosmed .sosmed{
                /* margin-top: -10px; */
                font-size: 10px;
            }

            #mainSosmed .sosmed img{
                margin-bottom: 5px;
            }

            #bgTop{
                width: 100%;
                margin-top: -20px;
                position: absolute;
                margin-left: 65%;
            }

            #bgTop img{
                left: 0;
                top: 0;
                right: 0;
                margin-left: 80%;
                height: 100px;
                width: 20%;
                position: fixed;
            }
            #bgBottom{
                display: flex;
                align-items: end;
                justify-content: end;
            }

            #bgBottom img{
                display: flex;
                align-items: end;
                justify-content: end;
                margin-top: -250px;
                width: 350px;
                height: 570px;
            }
            
        }

    </style>

</head>
<body style="overflow: hidden;">
    <a href="uang.php" style="cursor: pointer;">
        <div class="iconBack" style="width: 21px; margin: 10px 5px;">
            <img src="assets/img/arrowBack.png" alt="" width="17">
        </div>
    </a>

    <div class="content">

        <form action="" method="POST" style="margin-top: 40px; margin-right: 50px;">
            <input type="text" name="nominalDonasi" id="nominalDonasi" placeholder="Nominal Donasi" style="margin-bottom: 20px;" value="<?= $nominal ?>">
            <input type="text" name="keterangan" id="keterangan" placeholder="Keterangan" style="" value="<?= $keterangan ?>">
        </form>
        <p>
            Silahkan hubungi kontak ini untuk mengirimkan bukti transaksi
        </p>

        <div id="mainSosmed" style="
            
        ">
            <a href="https://instagram.com/kuriramal_?igshid=OGQ5ZDc2ODk2ZA==" target="_blank" class="sosmed" class="sosmed" style="color: black; text-decoration: none;">
                <img src="assets/img/ig.png" alt="" width="30">
                @Kuriramal_
            </a>
            <div class="sosmed">
                <img src="assets/img/email.png" alt="" width="30">
                evlnshn@gmail.com
            </div>
            <a href="https://wa.me/082249583629" target="_blank" class="sosmed" style="color: black; text-decoration: none;">
                <img src="assets/img/phone.png" alt="" width="30">
                089-6199-62922
            </a>
        </div>

        <img src="assets/img/womanPeople.png" alt="" style="z-index: -1; align: center; margin-left: 10px; width: 200px; margin-top: 360px; position: absolute;">
        
        <div style="margin-top: 20px; margin-bottom: 25px; cursor: pointer;">
            <a href="uang.php" style="padding: 10px 30px; background: #AE5C97; border: none;  border-radius: 10px; color: black; text-decoration: none;">
                Selesai
            </a>
        </div>
        

    </div>


    
    <div id="bgBottom">
        <img src="assets/img/cloud.png" alt="" style="">
    </div>
    
</body>
</html>