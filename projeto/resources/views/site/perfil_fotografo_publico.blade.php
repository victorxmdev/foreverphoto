<?php
@session_start();
 if(!isset($_SESSION["login_usuario"])){
    header("Location: index.php");
    exit();
 }
?>
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
        <title>4Ever Photo</title>
        <style>
            .card-panel {
                font-size: 38px;
            }

            .circle {
                margin-top: 25px;
            }
        </style>
    </head>

    <body class="#424242 grey darken-3">
    <nav class="#212121 grey darken-4">
    <div class="nav-wrapper container">
        <a href="#" class="brand-logo center"> <img src="../mdb/img/logo.png" width="65px" height="65px"></a>
        <div id="nav-wrapper" class="nav-wrapper">
            <ul class="left">
                <?php
                    if(isset($_SESSION["login_usuario"])) {
                        switch($_SESSION["login_usuario"]){
                            case 'victor':
                                ?>
                                <li><a class="waves-effect" href="/perfil_consumidor">Meu perfil</a></li>
                                <li><a class="waves-effect" href="/galeria">Galeria</a></li>
                                <?php
                                break;
                            case 'prado':
                                ?>
                                <li><a class="waves-effect" href="perfil_fotografo.php">Meu perfil</a></li>
                                <?php
                                break;
                            default:
                                echo '<li><a class="waves-effect" href="/">Home</a></li>';
                            break;
                        }
                     } else {
                        ?>
                            <li><a class="waves-effect" href="/">Home</a></li>
                            <?php }  ?>
            </ul>
            <ul class="right">
                <?php
                    if(isset($_SESSION["login_usuario"])) {
                        switch($_SESSION["login_usuario"]){
                            case 'victor':
                                ?>
                                <li><a class="waves-effect" href="/">Sair</a></li>
                                <?php
                                break;
                            case 'prado':
                                ?>
                                <li><a class="waves-effect" href="/">Sair</a></li>
                                <?php
                                break;
                            default:
                                ?>
                                <li><a class="waves-effect" href="/login">Login</a></li>
                                <?php
                                break;
                        }
                     } else {
                        ?>
                            <li><a class="waves-effect" href="/login">Login</a></li>
                            <?php } ?>
            </ul>
        </div>
    </div>
</nav>
        <h2 class="center white-text "><?php echo $_SESSION["login_usuario"]?></h2>
        <br>

        <div class="container">
            <div class="left"><img class="circle z-depth-5" src="../mdb/img/prado.png" width="300px" height="300px"></div><br>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col s6 ">
                <div class="card-panel teal #ffca28 amber lighten-1 z-depth-5">
                    <span class="dinl" style="font-size:30px;">Olá, meu nome artístico é Prado e estou iniciando no mundo da fotografia.</span>
                </div>
            </div>
        </div>
		<div class="container row">
            <h2 class="white-text center">Portfólio</h2>
            <div class="slider" style="width:300px; height:300px;display: block; margin: 0px auto;">
            <ul class="slides">
                <li>
                    <img src="../mdb/img/prado1.jpg"> 
                </li>
                <li>
                    <img src="../mdb/img/prado2.jpg"> 
                </li>
                <li>
                    <img src="../mdb/img/prado3.jpg"> 
                </li>
            </ul>
        </div>
        </div>        
		<div class="container">
            <h2 class="white-text center">Informações Pessoais</h2>
            <div class="card-panel teal #ffca28 amber lighten-1 z-depth-5"><h6>
                <table>
                    <thead>
                        <tr>
                            <th>Dado</th>  
                            <th>Informação</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                                <tr><td>Nome de Usuário</td><td>Prado</td></tr>
                                <tr><td>Especialização</td><td>Retratos</td></tr>
                                <tr><td>Cidade</td><td>Guarulhos</td><td></td></tr>
                                <tr><td>Estado</td><td>SP</td></tr>
                    </tbody>
                </table>
                </h6>
            </div>
        </div>
        
          <br><br><br><br>
        <div class="center">
        <h2 class="white-text center">Conversar</h2>
                    <div class="redes" style="width:300px; height:300px; display: block; margin: 0px auto; ">
                            <ul>
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                                    <a href="#" class="fa fa-youtube"></a>
                                </li>
                            </ul>
                        </div>
        </div> 
        <script type="text/javascript">
            $(document).ready(function(){
                $('.slider').slider({full_width: true});
            });
            $('.carousel.carousel-slider').carousel({full_width: false});

        </script>
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
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                                    <a href="#" class="fa fa-youtube"></a>
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
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/jquery.mask.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>    
        <script>
            $('.carousel.carousel-slider').carousel({full_width: false});
        </script>
    </body>

</html>