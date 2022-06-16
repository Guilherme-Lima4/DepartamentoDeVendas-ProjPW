<?php

$usuario = 'id18915334_guilherme123';
$senha = 'Gz[C)GZ0O9uhF9)1';
$database = 'id18915334_market';
$host = 'localhost';
$porta = '3306';

$mysqli = new mysqli($host, $usuario, $senha, $database);

$conn = mysqli_connect($host, $usuario, $senha, $database, $porta);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}