<?php
 session_start();

 if(!isset($_SESSION['AuthLogin'])){
     header('Location: login.php');
     exit();
 }
 // ==
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

        .content{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-top: -30px;
        }

        #bgBottom{
            display: flex;
            align-items: bottom;
            justify-content: end;
            height: 100px;
            width: 100%;
            bottom: 15%;
        }

        #bgBottom img{
            width: 10%;
            height: 270px;
        }

       .content p{
            font-size: 15px;
            margin-top: 20px;
            width: 400px;
            text-align: center;
       }
       .content form #noRek{
            width: 100%;
            border: 1px solid black;
            background: #D9D9D9;
            padding: 15px 25px;
            text-align: center;
        }

        .content form #noRek #maps{
            display: none;
        }

        .content form #noRek #map{
            margin-top: -3px;
            width: 100%;
        }

        .content form #cod{
            margin-left: 15%;
        }

       .content form button{
            border: 0;
            color: black;
            font-weight: bold;
            background: #AE5C97;
            margin: 80px 180px;
            letter-spacing: 3px;
            position: absolute;
            padding: 8px 40px;  
        }
       
       @media (max-width: 556px) {

            .content form #noRek{
                padding: 10px 25px;
                margin-left: 60px;
                width: 200px;
            }

            .content form #noRek #maps{
                display: block;
                margin-top: -2px;
                width: 100%;
                text-align: center;
            }

            .content form #noRek #map{
                display: none;
            }

            .content form #cod{
                margin-left: 9%;
            }

            .content{
                margin-top: 40px;
            }
            
            .content p{
                font-size: 15px;
                margin-top: 20px;
                width: 300px;
                text-align: center;
            }

            .content h3{
                font-size: 30px;
            }

            .content form button{
                border: 0;
                color: black;
                font-weight: bold;
                background: #AE5C97;
                margin: 30px 120px;
                letter-spacing: 3px;
                position: absolute;
                padding: 8px 40px;  
            }

            #bgBottomLeft img{
                width: 70px;
            }

            #bgBottom{
                display: flex;
                align-items: bottom;
                justify-content: end;
                height: 80px;
                width: 100%;
                bottom: 0;
                margin-top: 92px;
            }

            #bgBottom img{
                width: 10%;
                height: 270px;
            }

            #bgTopLeft img{
                width: 100px;
            }
            
            #bgTopLeft img{
                margin-top: 10px;
                height: 90px;
                width: 40px !important;
            }
        }

    </style>

</head>
<body style="overflow: hidden;">
   

    <div id="bgTopLeft">
        <img src="assets/img/bullet3.png" alt="" style="width: 80px;">
    </div>

    <div class="content">
        <h1 style="">DONASI </h1>
        <h3>Makanan/Barang</h3>
        <hr style="width: 25%; margin-top: 10px;">
        <p style="">
           Jika anda ingin mendonasikan makanan/barang. Kami hanya menyediakan 2 pilihan, yaitu dengan sistem Cash On Delivery (COD) atau Anda dapat mengantar barang/makanan ke rumah donasi
        </p>

        <form action="" method="POST" style="margin-top: 20px; margin-right: 50px;">
            <div id="noRek" >
                <a href="https://maps.app.goo.gl/rSjR7yFoGBKX2YZw8?g_st=ic" target="_blank" style="color: black; text-decoration: none;">
                    <p style="" id="maps">
                        https://maps.app.goo.gl/ rSjR7yFoGBKX2YZw8?g_st=ic
                    </p>
                </a>

                <a href="https://maps.app.goo.gl/rSjR7yFoGBKX2YZw8?g_st=ic" target="_blank" style="color: black; text-decoration: none;">
                    <p style="" id="map">
                        https://maps.app.goo.gl/rSjR7yFoGBKX2YZw8?g_st=ic
                    </p>
                </a>
            </div>
            <p style="" id="cod">
                Jika anda ingin menggunakan sistem COD anda dapat konfirmasi langsung dengan kami, dengan menghubungi akun instagram kami @kuriramal_
            </p>
            
            <a href="dashboard.php">
                <button type="button" style="">
                    Selesai
                </button>
            </a>
        </form>
        
    </div>


    
    <div id="bgBottomLeft" style="position: absolute;">
        <img src="assets/img/bullet1.png" alt="" style="margin-top: -30px;">
    </div>

    <div id="bgBottom">
        <img src="assets/img/bullet2.png" alt="" style="">
    </div>
    
</body>
</html>