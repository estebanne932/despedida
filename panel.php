<?php

include 'conexion.php';

$resultado = $conn->query("SELECT * FROM respuestas ORDER BY fecha DESC");

$total_si = $conn->query("SELECT COUNT(*) as total FROM respuestas WHERE asistencia='si'");
$total_no = $conn->query("SELECT COUNT(*) as total FROM respuestas WHERE asistencia='no'");

$si = $total_si->fetch_assoc()['total'];
$no = $total_no->fetch_assoc()['total'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Panel de Asistentes</title>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Montserrat:wght@300;400;500&family=Great+Vibes&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    min-height:100vh;
    background:linear-gradient(135deg,#fdf5f7,#f8eef1);
    font-family:'Montserrat',sans-serif;
    padding:30px;
}

.container{
    max-width:1100px;
    margin:auto;
    animation:aparecer 1s ease;
}

h1{
    text-align:center;
    color:#6d4756;
    font-family:'Cormorant Garamond',serif;
    font-size:48px;
    margin-bottom:30px;
}

.cards{
    display:flex;
    gap:20px;
    margin-bottom:30px;
    flex-wrap:wrap;
}

.card{
    flex:1;
    min-width:220px;
    background:white;
    border-radius:20px;
    padding:25px;
    box-shadow:0 20px 50px rgba(0,0,0,.08);
    text-align:center;
    transition:.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.card h2{
    font-size:52px;
    color:#b88496;
    margin-bottom:10px;
    font-family:'Cormorant Garamond',serif;
}

.card p{
    color:#777;
    font-size:15px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    border-radius:25px;
    overflow:hidden;
    box-shadow:0 20px 50px rgba(0,0,0,.08);
}

th{
    background:#f7e6ec;
    color:#8c6673;
    padding:18px;
    text-align:left;
    font-weight:600;
}

td{
    padding:18px;
    border-bottom:1px solid #f2e8eb;
    color:#555;
}

tr:last-child td{
    border-bottom:none;
}

tr:hover{
    background:#fff9fb;
}

.si{
    color:#8baf74;
    font-weight:600;
}

.no{
    color:#d37d7d;
    font-weight:600;
}

.petalos{
    position:fixed;
    inset:0;
    pointer-events:none;
    overflow:hidden;
    z-index:0;
}

.petalos span{
    position:absolute;
    top:-50px;
    font-size:18px;
    animation:caer linear infinite;
}

.petalos span:nth-child(1){
    left:10%;
    animation-duration:12s;
}

.petalos span:nth-child(2){
    left:25%;
    animation-duration:16s;
}

.petalos span:nth-child(3){
    left:40%;
    animation-duration:14s;
}

.petalos span:nth-child(4){
    left:60%;
    animation-duration:18s;
}

.petalos span:nth-child(5){
    left:75%;
    animation-duration:13s;
}

.petalos span:nth-child(6){
    left:90%;
    animation-duration:17s;
}

@keyframes caer{
    from{
        transform:translateY(-100px) rotate(0deg);
        opacity:0;
    }

    10%{
        opacity:1;
    }

    to{
        transform:translateY(110vh) rotate(360deg);
        opacity:0;
    }
}

@keyframes aparecer{
    from{
        opacity:0;
        transform:translateY(20px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

@media(max-width:768px){

    body{
        padding:15px;
    }

    h1{
        font-size:36px;
    }

    table{
        font-size:14px;
    }

    th,
    td{
        padding:12px;
    }

}
</style>

</head>
<body>

<div class="container">

<h1>Lista de Confirmaciones 💐</h1>

<div class="cards">

    <div class="card">
        <h2><?php echo $si; ?></h2>
        <p>Asistirán</p>
    </div>

    <div class="card">
        <h2><?php echo $no; ?></h2>
        <p>No asistirán</p>
    </div>

</div>

<table>

<tr>
    <th>Nombre</th>
    <th>Asistencia</th>
    <th>Fecha</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()): ?>

<tr>

    <td>
        <?php echo htmlspecialchars($fila['nombre']); ?>
    </td>

    <td>

        <?php if($fila['asistencia'] == 'si'): ?>

            <span class="si">Sí asistirá</span>

        <?php else: ?>

            <span class="no">No asistirá</span>

        <?php endif; ?>

    </td>

    <td>
        <?php echo $fila['fecha']; ?>
    </td>

</tr>

<?php endwhile; ?>

</table>

</div>

</body>
</html>