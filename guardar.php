<?php

include 'conexion.php';

$nombre = trim($_POST['nombre'] ?? '');
$asistencia = $_POST['asistencia'] ?? '';

if ($nombre === '' || $asistencia === '') {
    die("Por favor completa todos los campos.");
}

$stmt = $conn->prepare("INSERT INTO respuestas (nombre, asistencia) VALUES (?, ?)");
$stmt->bind_param("ss", $nombre, $asistencia);

if (!$stmt->execute()) {
    die("Ocurrió un error al guardar la confirmación.");
}

$stmt->close();
$conn->close();

setcookie(
    'boda_confirmada',
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

<title>Gracias por confirmar</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=EB+Garamond:wght@400;500&family=Parisienne&display=swap" rel="stylesheet">

<style>

:root{

    --gold:#C9A662;
    --gold-soft:#A98B52;
    --cream:#F3ECDD;
    --line:rgba(201,166,98,.35);

}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{

    background:#fff;
    min-height:100vh;

    display:flex;
    justify-content:center;
    align-items:center;

    padding:30px;

    font-family:'EB Garamond',serif;
    color:#555;
}

.card{

    position:relative;

    width:100%;
    max-width:700px;

    padding:80px 55px;

    text-align:center;

    border:1px solid var(--line);

    background:white;

    animation:fade .9s ease;

}

.corner{

    position:absolute;
    width:90px;
    height:90px;

}

.tl{
    top:20px;
    left:20px;
}

.br{
    bottom:20px;
    right:20px;
    transform:rotate(180deg);
}

.corner svg{

    width:100%;
    height:100%;

}

img{

    width:140px;
    margin-bottom:30px;

    animation:float 5s ease-in-out infinite;

}

h1{

    font-family:'Cormorant Garamond',serif;

    color:var(--gold);

    font-size:64px;

    font-weight:500;

    margin-bottom:25px;

}

p{

    font-size:22px;

    line-height:1.8;

    max-width:500px;

    margin:auto;

    color:#666;

}

.button{

    display:inline-block;

    margin-top:45px;

    padding:16px 40px;

    border:1px solid var(--gold);

    color:var(--gold);

    text-decoration:none;

    letter-spacing:.18em;

    text-transform:uppercase;

    transition:.35s;

}

.button:hover{

    background:var(--gold);
    color:white;

}

@keyframes fade{

from{

opacity:0;
transform:translateY(25px);

}

to{

opacity:1;
transform:none;

}

}

@keyframes float{

0%,100%{

transform:translateY(0);

}

50%{

transform:translateY(-10px);

}

}

@media(max-width:700px){

.card{

padding:60px 30px;

}

h1{

font-size:46px;

}

p{

font-size:19px;

}

img{

width:110px;

}

.corner{

width:60px;
height:60px;

}

}

</style>

</head>

<body>

<div class="card">

<div class="corner tl">

<svg viewBox="0 0 100 100" fill="none" stroke="#C9A662" stroke-width="1.2">

<path d="M4 4 C30 4 40 4 40 30 C40 45 55 50 70 46"/>
<path d="M4 4 C4 30 4 40 30 40 C45 40 50 55 46 70"/>
<circle cx="42" cy="30" r="3"/>
<circle cx="30" cy="42" r="3"/>

</svg>

</div>

<div class="corner br">

<svg viewBox="0 0 100 100" fill="none" stroke="#C9A662" stroke-width="1.2">

<path d="M4 4 C30 4 40 4 40 30 C40 45 55 50 70 46"/>
<path d="M4 4 C4 30 4 40 30 40 C45 40 50 55 46 70"/>
<circle cx="42" cy="30" r="3"/>
<circle cx="30" cy="42" r="3"/>

</svg>

</div>

<img src="arreglo.png" alt="Decoración">

<h1>¡Gracias!</h1>

<?php if($asistencia=="si"): ?>

<p>

Tu asistencia ha sido confirmada.

<br><br>

Será un honor compartir este momento tan especial contigo.

</p>

<?php else: ?>

<p>

Gracias por avisarnos.

<br><br>

Aunque te extrañaremos, esperamos verte muy pronto.

</p>

<?php endif; ?>

<a href="index.php" class="button">

Volver a la invitación

</a>

</div>

</body>
</html>