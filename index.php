<?php
    session_start();
    require 'connection.php';
    

?>
<!doctype html>
<html lang="en">

<head>
    <title>Southspring</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Raleway, sans-serif;
    }

    body {
        background: linear-gradient(90deg, #C7C5F4, #776BCC);
    }

    .button {
        display: inline-block;
        border-radius: 4px;
        width: 70%;
        height: 40px;
        border: none;
        color: white;
        text-align: center;
        font-size: 15px;
        transition: all 0.5s;
        cursor: pointer;
        background-color: #008CBA;
        border: 2px solid #008CBA;
        margin: 0;
        position: absolute;
        top: 105%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);

    }

    .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;

    }

    .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .button:hover span {
        padding-right: 25px;




    }

    .button:hover span:after {
        opacity: 1;
        right: 0;

    }

    .screen {
        background: linear-gradient(90deg, #5D54A4, #7C78B8);
        position: relative;
        height: 600px;
        width: 360px;
        box-shadow: 0px 0px 24px #5C5696;
    }

    .screen__content {
        z-index: 1;
        position: relative;
        height: 100%;
    }

    .screen__background {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 0;
        -webkit-clip-path: inset(0 0 0 0);
        clip-path: inset(0 0 0 0);
    }

    .screen__background__shape {
        transform: rotate(45deg);
        position: absolute;
    }

    .screen__background__shape1 {
        height: 520px;
        width: 520px;
        background: #FFF;
        top: -50px;
        right: 120px;
        border-radius: 0 72px 0 0;
    }

    .screen__background__shape2 {
        height: 220px;
        width: 220px;
        background: #6C63AC;
        top: -172px;
        right: 0;
        border-radius: 32px;
    }

    .screen__background__shape3 {
        height: 540px;
        width: 190px;
        background: linear-gradient(270deg, #5D54A4, #6A679E);
        top: -24px;
        right: 0;
        border-radius: 32px;
    }

    .screen__background__shape4 {
        height: 400px;
        width: 200px;
        background: #7E7BB9;
        top: 420px;
        right: 50px;
        border-radius: 60px;
    }

    .login {
        width: 320px;
        padding: 30px;
        padding-top: 156px;
    }

    .login__field {
        padding: 20px 0px;
        position: relative;
    }

    .login__icon {
        position: absolute;
        top: 30px;
        color: #7875B5;
    }

    .login__input {
        border: none;
        border-bottom: 2px solid #D1D1D4;
        background: none;
        padding: 10px;
        padding-left: 24px;
        font-weight: 700;
        width: 75%;
        transition: .2s;
    }

    .login__input:active,
    .login__input:focus,
    .login__input:hover {
        outline: none;
        border-bottom-color: #6A679E;
    }

    .login__submit {
        background: #fff;
        font-size: 14px;
        margin-top: 30px;
        padding: 16px 20px;
        border-radius: 26px;
        border: 1px solid #D4D3E8;
        text-transform: uppercase;
        font-weight: 700;
        display: flex;
        align-items: center;
        width: 100%;
        color: #4C489D;
        box-shadow: 0px 2px 2px #5C5696;
        cursor: pointer;
        transition: .2s;
    }

    .login__submit:active,
    .login__submit:focus,
    .login__submit:hover {
        border-color: #6A679E;
        outline: none;
    }

    .button__icon {
        font-size: 24px;
        margin-left: auto;
        color: #7875B5;
    }

    .social-login {
        position: absolute;
        height: 140px;
        width: 160px;
        text-align: center;
        bottom: 0px;
        right: 0px;
        color: #fff;
    }

    .social-icons {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .social-login__icon {
        padding: 20px 10px;
        color: #fff;
        text-decoration: none;
        text-shadow: 0px 0px 8px #7875B5;
    }

    .social-login__icon:hover {
        transform: scale(1.5);
    }
  

    </style>
    <style>
    .ftco-section {
        background-image: url(uploads/curve-light-blue-background-abstract-free-vector.jpg);
        background-size: cover;
        background-position: center;
      
    }
</style>
</head>

    <body class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10" style="display: flex; align-items: center; justify-content: center;">
                    <div class="login-wrap p-4 p-md-5" style="background-color: rgba(255, 255, 255, 0.7); height: 100%">
                        <div class="d-flex" style="justify-content: center;">
                            <img src="uploads/southspring_logo.png" alt="Southspring Logo">
                        </div>
                        <form id="login-form" method="POST" action="Fetch.AuthorizationPage.php">
                            <div class="form-group mb-3 login__field">
                                <i class="login__icon fas fa-user"></i>
                                <input type="text" class="login__input" id="username" name="username"
                                    placeholder="User name / Email" style="font-size: 12px; font-weight: normal; width: 100%"
                                    required>
                                <div class="login-message"></div>
                            </div>
                            <div class="form-group mb-3 login__field" style="margin-top: -25px;">
                                <i class="login__icon fas fa-lock"></i>
                                <input type="password" class="login__input" id="password" name="password"
                                    placeholder="Password" style="font-size: 12px; font-weight: normal; width: 100%"
                                    required>
                                <div class="login-message"></div>
                            </div>
                            <div class="form-group" style="margin-top: 80px; margin-bottom: 100px">
                                <button class="button" style="vertical-align:middle;" type="submit" name="submit">
                                    <span>Sign In</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>



</html>