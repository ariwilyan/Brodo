<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" sizes="192x192" href="assets/gambar/brodo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>BRODO - Masuk ke Admin</title>
    <style type="text/css">
        input[type=submit]{
            background: #badc58;
            color: white;
            font-size: 11pt;
            width: 100%;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
        input[type=submit]:hover{
            cursor: pointer;
            background: #46de4b;
        }
        footer {
            padding: 20px 20px; 
            color: white;
            background: #006266;
            text-align: center;
        }
    </style>
</head>
<!-- #d5f0f3 -->
<body style="font-family: sans-serif; background: #d5f0f3">
    <!-- Header Navbar -->
    <nav class="navbar navbar-expand-sm bg-white navbar-white justify-content-center">
        <!-- Logo -->
        <a class="navbar-brand" href="#" style="centered">
            <img src="<?= base_url() ?>assets/gambar/logo-brodo-new-active.png" alt="logo" style="width: 100px; height: 41px; display: block; background-position: 50%!important; background-size: 100px 33px!important;">
        </a>
    </nav>
    <div style="width: 350px; background: white; margin: 80px auto; padding: 30px 20px; border-radius: 6px;">
        <h2 style="text-align: center; font-style: bold;">BRODO</h4>
        <h5 style="text-align: center; margin-bottom: 20px;">Login Form - Admin</h5>

        <form>
            <div class="form-group">
                <label>Username</label><br/>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required><br/>

                <label>Password</label><br/>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required><br/>

                <input type="submit" value="MASUK">

                <br/>
                <br/>
                <center>
                    <a style="color: #232323; text-decoration: none; font-size: 10pt;" href="#">kembali ke Customer</a>
                </center>
            </div>
        </form>
    </div>
    <br/>
    <!-- Footer -->
    <footer>
        <p>Copyright © bro.do 2018</p>
    </footer>
</body>
</html>