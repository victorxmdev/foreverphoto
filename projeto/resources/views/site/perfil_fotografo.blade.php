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
        <title><?php echo $_SESSION["login_usuario"] ?>-- 4Ever Photo</title>
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
            input[type=file]:hover {
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
                                <li><a class="waves-effect" href="/perfil_fotografo">Meu perfil</a></li>
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
                                <li><a class="waves-effect" href="/sair">Sair</a></li>
                                <?php
                                break;
                            case 'prado':
                                ?>
                                <li><a class="waves-effect" href="/sair">Sair</a></li>
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
        <h2 class="center white-text " style="text-transform: capitalize;"><?php echo $_SESSION["login_usuario"] ?></h2>
        <br>
        
        <div class="container">
            <div class="left"><img src="../mdb/img/prado.png" id="profilePicture" class="circle z-depth-5" width="300px" height="300px">
            </div>
            <br />
        </div>
        <div class="row">
            <div class="col s6 ">
                <div class="card-panel teal #ffca28 amber lighten-1 z-depth-5">
                    <span class="dinl" style="font-size:30px;">Olá, meu nome artístico é Prado e estou iniciando no mundo da fotografia.
                    </span>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br>
        <h2 class="white-text center">Enviar fotos</h2>
        <div class="container">
            <div class="carousel carousel-slider">
                a
            </div>
        </div>
        <br/>
        <form method="GET" action="/foto" enctype="multipart/form-data" >
            <div style="display: flex; justify-content: center;">
             <input type="file" id="imagemUsuario" name="imagem" required class="upload" style="display: none;"accept="image/png, image/jpg, image/jpeg"><br /><br />
                <label for="imagemUsuario" style="margin: 0 10px">
                    <a class="waves-effect waves-light btn-large #ffca28 amber lighten-1 black-text">Adicionar</a>
                </label>
                <button id="deleteBtn" style="margin: 0 10px" class="waves-effect waves-light btn-large #ffca28 amber lighten-1 black-text">Excluir</button>
            </div>
            <br>
        </form>
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
        <br/>
        <br><br><br><br>
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
        <div class="container">
            <h2 class="white-text center">Fatura</h2>
            <div class="card-panel teal #ffca28 amber lighten-1 z-depth-5"><h6>
                <table>
                    <thead>
                        <tr>
                            <th>Dado</th>  
                            <th>Informação</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr><td>Plano</td><td>PLANO PLATINUM</td></tr>
                    </tbody>
                </table>
                </h6>
            </div>
        </div>
          <br><br><br><br>
      <div class="container">
            <h2 class="white-text center">Serviços contratados</h2>
            <div class="card-panel teal #ffca28 amber lighten-1 z-depth-5"><h6>
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>  
                            <th>Contratante</th>
                            <th>Conversar</th>
                        </tr>
                    </thead>
                    
                    <tbody>

                            <tr><td>17/09</td><td>Victor</td><td>
                                <ul><li style="width:300px; display: block; margin: 0px auto; ">
                                    <a href="https://www.facebook.com/tcc4EverPhoto/" class="fa fa-facebook"></a>
                                    <a href=" https://twitter.com/ever_photo" class="fa fa-twitter"></a>
                                    <a href="https://instagram.com/tcc4everphoto" class="fa fa-instagram"></a>
                                    <a href="https://www.youtube.com/channel/UCJG_oIwLDvo6kkBgvKzGKCw?view_as=subscriber" class="fa fa-youtube"></a>
                                </li>
            </ul></td></tr>
                    </tbody>
                </table>
                </h6>
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
    </body>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    </body>
</html>