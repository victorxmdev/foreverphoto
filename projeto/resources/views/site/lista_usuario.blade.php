<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8"/>
        <link rel = "icon" type = "image/png" href = "../mdb/img/favicon.ico"/>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
        <link rel="stylesheet" href="../mdb/css/bootstrap.min.css">
        <link rel="stylesheet" href="../mdb/css/mdb.min.css"> 
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="../mdb/css/fonts.css"> 
        <title>4Ever Photo</title>
	</head>
        <div class="container pt-4">
                <h2 class = "text-center" >Lista de Usuários<h2>
                <div class="container">
                {!! $table !!}
                </div>
        </div>
</html>