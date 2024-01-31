<?php


$user = 'root';
$password = '';
$dbname = 'Voluntario';
$host = 'localhost';

$mysqli = new mysqli($host, $user, $password, $dbname );

if($mysqli->error){

    die("Falha ao conectar á database: " . $mysqli->error);
}