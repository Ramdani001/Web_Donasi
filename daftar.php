<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>

    <link rel="stylesheet" href="assets/css/styleDaftar.css">

    <style>
        @font-face {
            font-family: jejuHallasan;
            src: url('assets/fonts/JejuHallasan-Regular.ttf');
        }

        *{
            margin: 0;
            padding: 0;
        }

        #bgRight{
            right: 0;
            z-index: -1;
            width: 100px;
            height: 100vh;
            position: absolute;
            background-color: #B572AE;
        }

        #content{
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        #content h2{
            padding-bottom: 50px;
            font-family: jejuHallasan;
        }

        #content form{
            padding-top: 130px;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        #content input{
            width: 120%;
            border: none;
            padding: 5px 10px;
            margin-bottom: 20px;
            border-radius: 10px;
            filter: drop-shadow(2px 2px rgba(99, 98, 98, 0.3));
            background-color: #D9D9D9;
        }

        #bgBottom img{
                width: 50%;
                height: 30%;
                bottom: 0;
                left: 0;
                right: 0;
                position: fixed;
                z-index: -1;
            }
        @media (max-width: 556px) {

            #content form{
                padding-top: 50px;
                display: flex;
                align-items: center;
                flex-direction: column;
                justify-content: center;
            }

            #bgBottom img{
                width: 105%;
                bottom: 0;
                left: 0;
                right: 0;
                position: fixed;
                z-index: -1;
            }


        }

    </style>

</head>
<body style="overflow: hidden;">
    
<div class="containerMain">
        <a href="login.php" style="cursor: pointer;">
            <div class="iconBack" style="width: 20px; position: absolute; margin: 10px 5px;">
                <img src="assets/img/arrowBack.png" alt="" width="30">
            </div>
        </a>

        <div id="bgRight">
            
        </div>

        <div id="content">
            <form action="backEnd/authController.php" method="POST">
                <h2>Buat Akun</h2>
                <input type="text" name="status" id="status" placeholder="Nama" style="margin-top: 20px;" value="Register" hidden>
                <input type="text" name="nama" id="nama" placeholder="Nama" style="margin-top: 20px;">
                <input type="text" name="email" id="email" placeholder="Email" style="margin-top: 5px;">
                <input type="text" name="noHp" id="noHp" placeholder="No. Hp" style="margin-top: 5px;">
                <input type="text" name="password" id="password" placeholder="Password" style="margin-top: 5px;">

                <button
                style="
                    border-radius: 10px;
                    font-family: jejuHallasan;
                    margin-top: 20px;
                    border: none;
                    font-weight: bold;
                    font-size: 15px;
                    padding: 7px 50px;
                    background: #AC1393;
                    filter: drop-shadow(2px 2px rgba(99, 98, 98, 0.3));
                "
                >Daftar</button>
            </form>
        </div>
    </div>

    <div id="bgBottom">
        <img src="assets/img/bg2.png" alt="" style="
           
        ">
    </div>

</body>
</html>