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

setcookie(
    'despedida_kenya',
    'respondio',
    time() + (60 * 60 * 24 * 30),
    '/'
);

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Montserrat:wght@300;400;500&family=Great+Vibes&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
    background:linear-gradient(135deg,#fdf5f7,#f8eef1);
    font-family:'Montserrat',sans-serif;
}

.mensaje{
    max-width:500px;
    width:100%;
    background:#fff;
    padding:50px 35px;
    border-radius:25px;
    text-align:center;
    box-shadow:0 20px 50px rgba(0,0,0,.08);
    animation:aparecer 1s ease;
}

.flor{
    width:150px;
    margin-bottom:15px;
    animation:flotar 4s ease-in-out infinite;
}

h1{
    font-family:'Great Vibes',cursive;
    font-size:68px;
    color:#b88496;
    font-weight:400;
    margin-bottom:15px;
}

p{
    color:#666;
    font-size:16px;
    line-height:1.7;
}

@keyframes aparecer{
    from{
        opacity:0;
        transform:translateY(30px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

@keyframes flotar{
    0%,100%{
        transform:translateY(0);
    }
    50%{
        transform:translateY(-8px);
    }
}

</style>

</head>
<body>

<div class="mensaje">

    <img src="arreglo.png" class="flor">

    <h1>¡Gracias!</h1>

    <p>
        Tu respuesta ha sido registrada correctamente.
        Nos dará mucho gusto compartir este momento contigo. 
    </p>

</div>

</body>
</html>