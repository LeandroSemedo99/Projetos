<?php

if(!isset($_SESSION)){
    session_start();
}



if(!isset($_SESSION['id'])){

    die("Necessita fazer login primeiro!<p><a href=\"Login.php\">Entrar</a></p>");
}
?>