<?php
    @session_start();
    if(isset($_SESSION["login_usuario"])){
        session_destroy();
        header("Location: index.php");
        exit();
     }
?>