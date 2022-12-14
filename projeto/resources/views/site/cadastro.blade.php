
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
<div class="row container">
            <form class="col s12" method="POST" id="cadastro" action="#">
                <div class="row">
                    <div class="input-field col s3">
                        <input name="nome_usuario" style="color:#FFF;" id="nome_usuario" type="text" pattern="^([A-Z]|[a-z]|[ ]|[ã]|[Ã]|[á]|[Á]|[õ]|[Õ]|[ó]|[Ó]|[é]|[É]|[ê]|[Ê]|[í]|[ç])+$" class="validate">
                        <label for="nome_usuario">Nome</label>
                    </div>

                    <div class="input-field col s3">
                        <input name="sobrenome_usuario" style="color:#FFF;" id="sobrenome_usuario" type="text" pattern="^([A-Z]|[a-z]|[ ]|[ã]|[Ã]|[á]|[Á]|[õ]|[Õ]|[ó]|[Ó]|[é]|[É]|[ê]|[Ê]|[í]|[ç])+$" class="validate">
                        <label for="sobrenome_usuario">Sobrenome</label>
                    </div>

                    <div class="input-field col s3">
                        <input name="nmuser_usuario" style="color:#FFF;" id="nmuser_usuario" type="text" class="validate">
                        <label for="nmuser_usuario">Nome de Usuário</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s4">
                        <input name="rua_usuario" style="color:#FFF;" id="rua_usuario" type="text" class="validate">
                        <label for="rua_usuario">Endereço</label>
                    </div>

                    <div class="input-field col s4">
                        <input name="bairro_usuario" style="color:#FFF;" id="bairro_usuario" type="text" class="validate">
                        <label for="bairro_usuario">Bairro</label>
                    </div>

                    <div class="input-field col s1">
                        <input name="num_casa_usuario" style="color:#FFF;" onkeyup="somenteNumeros(this);" id="num_casa_usuario" type="text" class="validate">
                        <label for="num_casa_usuario">Número</label>
                    </div>

                    <div class="input-field col s3">
                        <input name="complemento_usuario" style="color:#FFF;" id="complemento_usuario" type="text" class="validate">
                        <label for="complemento_usuario">Complemento</label>
                    </div>

                </div>

                <div class="row">
                    
                    <div class="input-field col s6">
                        <label for="complemento_usuario">Estado</label>
                        <input type="text" style="color:#FFF;"name="uf_usuario" id="uf_usuario">
                        </input>
                    </div>

                    <div class="input-field col s6">
                    <label for="complemento_usuario">Cidade</label>
                        <input type="text" style="color:#FFF;"name="cidade_usuario" id="cidade_usuario">
                        </input>
                    </div>

                </div>

                <div class="row">
                    <div class="input-field col s5">
                        <input name="telefone_usuario" style="color:#FFF;" id="telefone_usuario" type="text" class="validate" pattern="\([0-9])+$">
                        <label for="telefone_usuario">Telefone</label>
                    </div>
                    <div class="input-field col s7">
                        <input name="email_usuario" style="color:#FFF;" id="email_usuario" type="email" class="validate">
                        <label for="email_usuario">Email</label>
                    </div>

                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input name="senha_usuario" id="senha_usuario" style="color:#FFF;" type="password" class="validate">
                        <label for="senha_usuario">Senha</label>
                    </div>

                    <div class="input-field col s6">
                        <input name="senha_usuario2" id="senha_usuario2" type="password" style="color:#FFF;" class="validate">
                        <label for="senha_usuario2">Repetir Senha</label>
                    </div>
                </div>

                <div class="row black-text">
                    Se cadastrar como
                    <select name="tipo_usuario" class="browser-default" name="tipo" id="tipo">
                        <option value="1">Consumidor</option>
                        <option value="2">Fotógrafo</option>
                    </select>
                </div>
                <div class="center">
                    <input id="cadastrar" name="cadastrar" value="Cadastrar" type="submit">
                </div>
            </form>
            <br>
        </div>
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