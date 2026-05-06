<?php

include 'conexion.php';

$nombre = trim($_POST['nombre']);
$asistencia = $_POST['asistencia'];

if(empty($nombre)){
    die("Nombre requerido");
}

$stmt = $conn->prepare("INSERT INTO respuestas(nombre, asistencia) VALUES (?, ?)");

$stmt->bind_param("ss", $nombre, $asistencia);

$stmt->execute();

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
    background:#f7f5f2;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    font-family:Georgia;
}

.mensaje{
    background:#f3efe8;
    padding:40px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

h1{
    color:#6d655c;
}

</style>

</head>
<body>

<div class="mensaje">

<h1>¡Gracias por responder! 💐</h1>

<p>Tu respuesta ha sido registrada.</p>

</div>

</body>
</html>