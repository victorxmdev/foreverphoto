<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8"/>
        <link rel = "icon" type = "image/png" href = "../mdb/img/favicon.ico"/>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
        <link rel="stylesheet" href="../mdb/css/bootstrap.min.css">
        <link rel="stylesheet" href="../mdb/css/mdb.min.css"> 
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="../mdb/css/fonts.css">
    </head>
        <title>4Ever Photo</title>
        <style>
            .indicator-item.active{
                background-color: #000!important;
            }
            .card-panel{
                min-height: 100%!important;
            }
            .equalItems{
                display: flex;
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
                            <li><a  id="init" dusk="init" class="waves-effect" href="/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="../mdb/img/slide1.jpg"> 
                    <div class="caption center-align">
                        <h2>Eternize suas memórias.</h2>
                        <h3>Sempre que precisar, um fotógrafo estará disponível para você.</h3>
                    </div>
                </li>
                <li>
                    <img src="../mdb/img/slide2.jpg"> 
                    <div class="caption center-align">
                        <h2>Capture qualquer ocasião.</h2>
                        <h3>Seja para um casamento, uma festa, ou até fotos da natureza.</h3>
                    </div>
                </li>
                <li>
                    <img src="../mdb/img/slide3.jpg"> 
                    <div class="caption center-align">
                        <h2>Para você, fotógrafo.</h2>
                        <h3>Cadastre-se e encontre as mais diversas opções de trabalho.</h3>
                    </div>
                </li>
            </ul>
        </div>


        <div class="row equalItems dinm">
            <div class="col s12 m4">
                <div class="card-panel #ffd740 amber accent-2">
                    <div class="center">
                        <i class="material-icons large">chat</i><br>
                    </div>
                    <span class="black-text center"><h4>Entre em contato diretamente com nossos fotógrafos</h4></span>
                </div>
            </div>
            
            <div class="col s12 m4">
                <div class="card-panel #ffd740 amber accent-2">
                    <div class="center">
                        <i class="material-icons large">supervisor_account</i><br>
                    </div>
                    <span class="black-text center"><h4>Algum problema? Converse com nossa equipe</h4></span>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card-panel #ffd740 amber accent-2">
                    <div class="center">
                        <i class="material-icons large">payment</i><br>
                    </div>
                    <span class="black-text center"><h4>Valores a contratar com o serviço escolhido</h4></span>
                </div>
            </div>			
        </div>

        <h4 class="white-text center dinm">Nossos planos para fotógrafos</h4>
    
        <div class="container">
            <div class="row">
                <br><br>
                <div class="col s3 m3 imgHover">
                    <div class="card">
                        <div class="card-image">
                            <img src="../mdb/img/Bronze_card.jpg">
                        </div>
                        <div class="card-content" style="background-color: #212121;">
                            <p class="white-text">Plano Bronze</p>
                        </div>
                        <div class="card-action" id="card" style="background-color: #212121;">  
                            <label for="card">
                                <a class="waves-effect waves-light" href="/planos">Ver mais</a>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col s3 m3 imgHover" >
                    <div class="card">
                        <div class="card-image">
                            <img src="../mdb/img/Silver_card.jpg">
                        </div>
                        <div class="card-content" style="background-color: #212121;">
                            <p class="white-text">Plano Silver</p>
                        </div>
                        <div class="card-action" id="card" style="background-color: #212121;">  
                            <label for="card">
                                <a class="waves-effect waves-light" href="/planos">Ver mais</a>
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="col s3 m3 imgHover" >
                    <div class="card">
                        <div class="card-image">
                            <img src="../mdb/img/Gold_card.jpg">
                        </div>
                        <div class="card-content" style="background-color: #212121;">
                            <p class="white-text">Plano Gold</p>
                        </div>
                        <div class="card-action" id="card" style="background-color: #212121;">  
                            <label for="card">
                                <a class="waves-effect waves-light" href="/planos">Ver mais</a>
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="col s3 m3 imgHover">
                    <div class="card">
                        <div class="card-image">
                            <img src="../mdb/img/Platinum_card.jpg">
                        </div>
                        <div class="card-content" style="background-color: #212121;">
                            <p class="white-text">Plano Platinum</p>
                        </div>
                        <div class="card-action" id="card" style="background-color: #212121;">  
                            <label for="card">
                                <a class="waves-effect waves-light" href="/planos">Ver mais</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.slider').slider({full_width: true});
            });
            $('.carousel.carousel-slider').carousel({full_width: false});

        </script>
    </body>
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
        top:50px;
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



