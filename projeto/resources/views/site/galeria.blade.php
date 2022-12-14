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
        <link rel="stylesheet" href="css/galeria.css">
    </head>
        <title>4Ever Photo</title>
        <style>
            .pagination li a.actual {
                background-color: #212121 !important;
                pointer-events: none;
                color: #FFF!important;
            }
            .input-field label {
                color: white;
            }

            .choose {
                color: #FFF!important;
            }

            .center input[type=submit] {
                color: #fff;
                background: black;
                border: none;
                padding: 1%;
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

            .input-field select {
                background-color: #212121;
                color: white;
                border: none;
            }

            .input-field select:hover {
                background-color: #212121;
                color: white;
                border: none;
            }

            .input-field option {
                background-color: white;
                color: black;
            }

            .white-text select{
                background-color: #212121;
                color: white;
                border: none;
            }

            .white-text select:hover {
                background-color: #212121;
                color: white;
                border: none;
            }
            .white-text option {
                background-color: white;
                color: black;
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
        <h2 class="center white-text ">Fotógrafos</h2>
        <br>
        <div class="row container">

            
            <form class="col s12" method="GET" id="pesquisar" action="#">
                <div class="row">
                    <div class="center">
                        <div class="input-field col s6">
                            <input name="nmuser" style="color:#FFF;" id="nmuser" type="text" class="validate">
                            <label for="nmuser">Nome de usuário</label>
                        </div>
                        <div class="input-field col s6">
                            <select name="especializacao" class="browser-default" name="seletor" id="especializacao">
                                <option value="0">Qualquer</option>
                                <option value="1">Retratos</option>
                                <option value="2">Comidas</option>
                                <option value="3">Animais</option>
                                <option value="4">Paisagens</option>
                                <option value="5">Eventos</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <input type="submit" name="pesquisa" value="Entrar">
                    <br/>
                    <br/>   
                </div>
            </form>
        </div>
        <div class="row container">
            <div class="col s12 m6 l4">
                    <div class="card">
                        <div class="card-image">
                            <img width="300" height="300" src="../mdb/img/prado.png">
                            <span class="card-title dinl" style="font-weight: bold; color:black;">Prado</span>
                        </div>
                        <div class="card-action #ffca28 amber lighten-1 dinc" style="font-size: 16px;">
                            <a href="/perfil_fotografo_publico" class="black-text">Ver o perfil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
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
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/jquery.mask.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script>

            $('#estado').on('change', function(e) {
                var $cidadesOption = (id, cidade) => `<option value="${id}">${cidade}</option>`;
                var target = e.currentTarget;
                var $groupOptions = $(new DocumentFragment());
                var $selectCity = $('#cidade');
                var id = $(target).find(':selected').data('id')
                
                $.get('./api/cidade.php', {
                    id: id
                }, function(datas) {
                    var dataJson = JSON.parse(datas);
                    $selectCity.children().remove();
                    $selectCity.prepend("<option value=''>Escolha a cidade</option>");
                    dataJson.forEach(data => {
                        $($groupOptions).append($cidadesOption(data.nome_cidade, data.nome_cidade));
                    });
                    $selectCity.append($groupOptions);
                    $('select').formSelect();
                })
            })
        </script>
        <!--JavaScript at end of body for optimized loading-->

    </body>

</html>
