<?php
@session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/custom.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../mdb/css/fonts.css">
    <link rel="stylesheet" href="../mdb/css/paypal.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8"/>
    <link rel = "icon" type = "image/png" href = "../mdb/img/favicon.ico"/>
        <title>4Ever Photo</title>
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
                                <li><a class="waves-effect" href="/perfil_fotografo">Meu perfil</a></li>
                                <?php
                                break;
                            default:
                                ?>
                                <li><a class="waves-effect" href="/">Home</a></li>
                                <?php
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

        <h2 class="white-text center">Sobre N??s</h2>

        <div class="container dinl">
            <font size="3" color="#ffffff">
                <b>
                    <br><br><br>
                    Atualmente no Brasil, ?? percept??vel a busca por fot??grafos em diversas ??reas, se diversificando entre projetos sociais, casamentos,festas e at?? mesmo no ramo jornal??stico, como mostram as pesquisas nos sites Fotografia Mais e Photo Album Universal.
                    Em vista da versatilidade do ramo fotogr??fico, o pa??s possui uma alta demanda de profissionais presentes no mercado, que atualmente encontra-se parcialmente saturado, por??m com determinado conhecimento pr??vio, portf??lio e divulga????o ?? poss??vel se destacar no ramo. 
                    <br><br>
                    Atualmente muitos profissionais se dedicam em publicar seu portf??lio em redes sociais em busca de maior divulga????o, por??m a finalidade de uma rede social n??o ?? 
                    necessariamente de divulga????o de trabalho, por mais que auxilie o crescimento do profissional. Essa dificuldade ?? encontrada pois a rede social possui diversos 
                    p??blicos-alvo e nem sempre s??o pessoas interessadas em fotografias.
                    <br><br>
                    O projeto proposto ?? focado em uma plataforma que permite a intera????o de um fot??grafo e um cliente interessado no servi??o prestado pelo profissional. ?? uma 
                    plataforma online que se encaixaria no perfil de uma rede social, por??m permite a contrata????o do fot??grafo, possuindo uma vis??o mais profissional em rela????o ?? um 
                    site de divulga????o. 
                </b>
            </font>
            
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.slider').slider({
        full_width: true
                });
            });

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
                top:200px;
                right: 0;
            }

        </style>
        <footer class="page-footer grey darken-4">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text dinc">4Ever Photo</h5>
                        <p class="grey-text text-lighten-4 dinl">Eternize suas mem??rias.</p>
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
                    Copyright ?? 2022 - Todos os direitos reservados.
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/jquery.mask.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    </body>

</html>
