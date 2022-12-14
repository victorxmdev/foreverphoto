<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8"/>
        <link rel = "icon" type = "image/png" href = "../mdb/img/favicon.ico"/>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="../mdb/css/fonts.css">
    </head>
    <title>4Ever Photo</title>
    <style>
            
            .center input[type=submit] {
                color: #fff;
                background: black;
                border: none;
                padding: 2%;
                border-radius: 8%;
            }
            
            .center input[type=submit]:hover {
                background-color: #FFCD0D;
                color: black;
                -webkit-transition: background-color 0.8s;
                -moz-transition: background-color 0.8s;
                -o-transition: background-color 0.8s;
                transition: background-color 0.8s;
            }
            
        </style>
	</head>

<body class="#424242 grey darken-3">
    <style>
    nav .nav-wrapper {
        position: relative;
    }

</style>
<nav class="#212121 grey darken-4">
    <div class="nav-wrapper container">
        <a href="#" class="brand-logo center"> <img src="../mdb/img/logo.png" width="65px" height="65px"></a>
        <div id="nav-wrapper" class="nav-wrapper">
            <ul class="left">
                            <li><a class="waves-effect" href="/">Home</a></li>
            </ul>
            <ul class="right">
                            <li><a class="waves-effect" href="/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="row">
<h2 class="center white-text dinc">LOGIN</h2>
        <br>
        <div class="row container">
            <form class="col offset-s3 s6" method="GET" action="#">
             <div class="row">
                    <div class="center">
                        <div class="input-field col s12">
                            <input name="login_usuario" style="color:#FFF;" id="login_usuario" type="text" class="validate">
                            <label for="login_usuario">Nome de usuário ou E-Mail</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="center">
                        <div class="input-field col s12">
                            <input name="senha_usuario" id="senha_usuario" style="color:#FFF;" type="password" class="validate">
                        <label for="senha_usuario">Senha</label>
                    </div>
                </div>
                <div class="center">
                    <input type="submit" dusk="submit" name="login" value="Entrar">
                    <br/>
                    <br/>   
                </div>
                <br>
                <div class="center white-text ">
                    Não é cadastrado? <a href="/cadastro">Cadastre-se.</a>
                </div>
            </form>
        </div>
      </div>
</div>
</body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .fa {
        padding: 5%;
        font-size: 30px;
        width: 20%;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        transform: scale(1.0);
        -webkit-transform: rotate(0);
        transform: rotate(0);
        transition-duration: 1s;
    }
    
    .fa:hover {
        opacity: 0.7;
        border-radius: 25%;
    }
    
    .fa-facebook {
        background: #3B5998;
        color: white;
    }
    
    .fa-twitter {
        background: #55ACEE;
        color: white;
    }
    
    .fa-youtube {
        background: #bb0000;
        color: white;
    }
    
    .fa-instagram {
        background: #f09433;
        background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        background: -webkit-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888', GradientType=1);
        color: white;
    }
    
    footer {
        position: relative;
        width: 100%;
        left:0;
        top:150px;
        right: 0;
    }

</style>
<footer class="page-footer grey darken-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text dinc">4Ever Photo</h5>
                <p class="grey-text text-lighten-4 dinl">Eternize suas memórias.</p>
                <a href="/sobre_nos" class="dinl">Saiba mais sobre nossa equipe</a>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text dinc">Nos siga nas redes sociais!</h5>
                <div class="redes">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/tcc4EverPhoto/" class="fa fa-facebook"></a>
                            <a href=" https://twitter.com/ever_photo" class="fa fa-twitter"></a>
                            <a href="https://instagram.com/tcc4everphoto" class="fa fa-instagram"></a>
                            <a href="https://www.youtube.com/channel/UCJG_oIwLDvo6kkBgvKzGKCw?view_as=subscriber" class="fa fa-youtube"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright grey darken-4">
        <div class="container dinc">
            Copyright © 2022 - Todos os direitos reservados.
        </div>
    </div>
</footer>
</html>
<?php
        if(isset($_GET['login_usuario'])) { 
                    $user = $_GET["login_usuario"];
                    $pass = $_GET["senha_usuario"];

                    $user1 = "victor";
                    $pass1 = "123";
                    
                    $user2 = "prado";
                    $pass2 = "123";

                    if($user == $user1 && $pass == $pass1){
                        session_start();
                        $_SESSION["login_usuario"]=$user;
                        $_SESSION["senha_usuario"]=$pass;
                        echo '<script>window.location="/perfil_consumidor";</script>';
                    }else if($user == $user2 && $pass == $pass2){
                        session_start();
                        $_SESSION["login_usuario"]=$user;
                        $_SESSION["senha_usuario"]=$pass;
                        echo '<script>window.location="/perfil_fotografo";</script>';
                    }else{
                        echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
                        }             
                    }
                ?>
