<?php
    session_start();

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
    <title>Transaksi Uang</title>

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
            margin-top: -10px;
            width: 10%;
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
        
        @media (max-width: 526px) {
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
                left: 0;
                right: 0;
                height: 20px;
                width: 30%;
                bottom: 30%;
                position: fixed;
            }
        }

        #bgBottom{
            left: 0;
            right: 0;
            height: 100px;
            width: 100%;
            bottom: 15%;
            position: fixed;
        }

        #bgBottom img{
            width: 100%;
            height: 200px;
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

       .content form #noRek{
            width: 100%;
            background: #D9D9D9;
            padding: 15px 25px;
            text-align: center;
        }


       .content form button{
            border: 0;
            color: white;
            font-weight: bold;
            background: #AC1393;
            margin: 130px 180px;
            letter-spacing: 3px;
            position: absolute;
            padding: 8px 40px;  
        }
       
       @media (max-width: 556px)
        {
            .content form input{
                width: 98%;
            }

            .content form #noRek{
                width: 98%;
            }
            
            
       .content form{
            padding: 20px;
        }

        .content form button{
            border: 0;
            color: white;
            font-weight: bold;
            background: #AC1393;
            margin: 140px 110px;
            letter-spacing: 3px;
            position: absolute;
            padding: 8px 40px;  
        }

       }

    </style>

</head>
<body style="overflow: hidden;">
    <div id="bgTop">
        <img src="assets/img/tpBg.png" alt="">
    </div>

    <a href="dashboard.php" style="cursor: pointer;">
        <div class="iconBack" style="width: 21px; margin: 10px 5px;">
            <img src="assets/img/arrowBack.png" alt="" width="17">
        </div>
    </a>

    <div class="content">
        <h1 style="">DONASI UANG</h1>
        <p style="">
            Silahkan transfer melalui rekening di bawah ini, dengan dompet digital anda!
        </p>

        <form action="backend/transaksiController.php" method="POST" style="margin-top: 20px; margin-right: 50px;">
            <div id="noRek" style="">
                <span style="">
                    NO.Rekening BRI 73*************** <br>
                    a/n. Maidina Syafitri
                </span>
            </div>

            <input type="text" name="nominalDonasi" id="nominalDonasi" placeholder="Nominal Donasi" style="" required>
            <input type="text" name="keterangan" id="keterangan" placeholder="Keterangan" style="" required>

            
            <!-- <a href="berhasilTrans.php"> -->
                <button type="submit" style="z-index: 1;">
                    Lanjut
                </button>
            <!-- </a>     -->
        </form>
        <img src="assets/img/arrowBottom.png" alt="" width="100" style="align: center; margin-left: 10px; height: 100px;">
        
    </div>


    
    <div id="bgBottom">
        <img src="assets/img/btmBg.png" alt="" style="">
    </div>
    
</body>
</html>