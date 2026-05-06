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

body{
    margin:0;
    background:#f7f5f2;
    font-family:Arial, sans-serif;
    padding:30px;
}

.container{
    max-width:1000px;
    margin:auto;
}

h1{
    color:#6d655c;
    margin-bottom:20px;
}

.cards{
    display:flex;
    gap:20px;
    margin-bottom:30px;
    flex-wrap:wrap;
}

.card{
    background:white;
    padding:20px;
    border-radius:15px;
    flex:1;
    min-width:200px;
    box-shadow:0 5px 20px rgba(0,0,0,.05);
}

.card h2{
    margin:0;
    font-size:40px;
    color:#5f5f5f;
}

.card p{
    color:#888;
    margin-top:10px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 5px 20px rgba(0,0,0,.05);
}

th{
    background:#e9e2d8;
    color:#5f5f5f;
    padding:15px;
    text-align:left;
}

td{
    padding:15px;
    border-bottom:1px solid #eee;
}

.si{
    color:green;
    font-weight:bold;
}

.no{
    color:#c0392b;
    font-weight:bold;
}

@media(max-width:700px){

    body{
        padding:15px;
    }

    table{
        font-size:14px;
    }

    th, td{
        padding:10px;
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