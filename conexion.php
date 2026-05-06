<?php

$host = "localhost";
$usuario = "root";
$password = "";
$bd = "boda";

$conn = new mysqli($host, $usuario, $password, $bd);

if ($conn->connect_error) {
    die("Error de conexión");
}
?>