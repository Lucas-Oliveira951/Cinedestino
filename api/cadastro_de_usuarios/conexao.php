<?php

$host = "localhost";
$user = "root";
$pass = "";
$bd = "cinedestino";

$mysqli = new mysqli($host, $user, $pass, $bd);

if ($mysqli->connect_errno) {
    echo "Conexão falhou: " . $mysqli->connect_error;
    exit();
}
