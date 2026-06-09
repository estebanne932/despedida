<?php

$yaRespondio = isset($_COOKIE['despedida_kenya']);

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despedida de Soltera</title>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
            background: linear-gradient(135deg, #fdf5f7, #f8eef1);
            font-family: 'Montserrat', sans-serif;
        }

        .invitacion {
            width: 100%;
            max-width: 500px;
            background: #fff;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, .12);
            position: relative;
        }

        .flores-top,
        .flores-bottom {
            height: 90px;
            background: linear-gradient(
                135deg,
                #f8d7df,
                #f4c9d6,
                #f8d7df
            );
        }

        .contenido {
            padding: 45px 35px;
            text-align: center;
        }

        .subtitulo {
            letter-spacing: 3px;
            text-transform: uppercase;
            font-size: 12px;
            color: #c58ca0;
            margin-bottom: 10px;
        }

        h1 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 48px;
            color: #6d4756;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .mensaje {
            color: #666;
            line-height: 1.7;
            margin-bottom: 30px;
            font-size: 15px;
        }

        .detalle {
            background: #faf4f6;
            border-radius: 18px;
            padding: 20px;
            margin-bottom: 30px;
        }

        .detalle p {
            margin: 8px 0;
            color: #555;
        }

        .novia-section{
    text-align:center;
    margin-bottom:30px;
}

.arreglo{
    width:180px;
    max-width:70%;
    margin-bottom:10px;
}

.nombre-novia{
    font-family:'Great Vibes', cursive;
    font-size:72px;
    color:#b88496;
    font-weight:400;
    margin-bottom:15px;
}
   

.mensaje{
    color:#666;
    line-height:1.7;
    font-size:15px;
    max-width:320px;
    margin:0 auto;
}

        input[type="text"] {
            width: 100%;
            padding: 14px;
            border: 1px solid #e5d2d9;
            border-radius: 12px;
            outline: none;
            font-size: 15px;
            margin-bottom: 20px;
        }

        input[type="text"]:focus {
            border-color: #d39ab0;
        }

        .botones {
            display: flex;
            gap: 12px;
        }

        .btn {
            flex: 1;
            border: none;
            padding: 14px;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            transition: .3s;
        }

        .si {
            background: #d7a3b5;
            color: white;
        }

        .si:hover {
            background: #c98ca1;
            transform: translateY(-2px);
        }

        .no {
            background: #f2f2f2;
            color: #555;
        }

        .no:hover {
            background: #e7e7e7;
            transform: translateY(-2px);
        }

        .footer{
    margin-top:25px;
    text-align:center;
}

.confirmacion{
    font-size:13px;
    color:#999;
    margin-bottom:15px;
}

.regalo{
    background:#faf4f6;
    border:1px solid #f0dde4;
    border-radius:12px;
    padding:12px;
    color:#8c6673;
    font-weight:500;
    font-size:15px;
}

.regalo span{
    display:block;
    margin-top:5px;
    font-size:13px;
    font-weight:400;
    color:#777;
}

/* Entrada de la tarjeta */
.invitacion{
    animation: aparecer 1.2s ease forwards;
}

.avisos{
    display:flex;
    gap:12px;
    margin-bottom:25px;
}

.aviso{
    flex:1;
    background:#faf4f6;
    border:1px solid #f0dde4;
    border-radius:16px;
    padding:16px 12px;
    text-align:center;
    color:#8c6673;
    font-size:14px;
    font-weight:500;
    box-shadow:0 4px 12px rgba(184,132,150,.08);
    transition:.3s;
    animation:subir 1s ease both;
}

.icono-aviso{
    font-size:28px;
    margin-bottom:8px;
}
.aviso:hover{
    transform:translateY(-3px);
    box-shadow:0 8px 20px rgba(184,132,150,.15);
}

.aviso::first-line{
    font-size:18px;
}

@media(max-width:500px){

    .avisos{
        flex-direction:column;
    }

}

/* Título */
h1{
    animation: subir 1s ease .3s both;
}

/* Nombre de la novia */
.nombre-novia{
    animation: aparecerNombre 1.5s ease .8s both;
}

/* Flores */
.arreglo{
    animation: flotar 4s ease-in-out infinite;
}

/* Datos del evento */
.detalle{
    animation: subir 1s ease 1s both;
}

/* Formulario */
form{
    animation: subir 1s ease 1.2s both;
}

/* Regalo */
.regalo{
    animation: pulseSuave 3s infinite;
}

/* Botones */
.btn{
    transition: all .3s ease;
}

.btn:hover{
    transform: translateY(-4px) scale(1.03);
}

.respuesta-registrada{
    background:#faf4f6;
    border:1px solid #f0dde4;
    border-radius:18px;
    padding:20px;
    text-align:center;
    animation:subir 1s ease;
}

.respuesta-registrada h3{
    color:#b88496;
    margin-bottom:8px;
    font-family:'Cormorant Garamond', serif;
    font-size:28px;
}

.respuesta-registrada p{
    color:#666;
    margin:0;
}

/* Animaciones */

@keyframes aparecer{
    from{
        opacity:0;
        transform:translateY(40px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

@keyframes subir{
    from{
        opacity:0;
        transform:translateY(20px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

@keyframes aparecerNombre{
    from{
        opacity:0;
        transform:scale(.8);
    }
    to{
        opacity:1;
        transform:scale(1);
    }
}

@keyframes flotar{
    0%{
        transform:translateY(0px);
    }
    50%{
        transform:translateY(-8px);
    }
    100%{
        transform:translateY(0px);
    }
}

@keyframes pulseSuave{
    0%{
        transform:scale(1);
    }
    50%{
        transform:scale(1.02);
    }
    100%{
        transform:scale(1);
    }
}
    </style>
</head>

<body>

    <div class="invitacion">

        <div class="flores-top"></div>

        <div class="contenido">

            <div class="subtitulo">
                Estás invitado
            </div>

            <h1>Despedida de Soltera</h1>

           <div class="novia-section">

                <img src="arreglo.png" alt="Arreglo floral" class="arreglo">

                <h2 class="nombre-novia">Kenya Isela</h2>

                <p class="mensaje">
                    Acompáñanos a celebrar este momento tan especial
                    antes del gran día. Tu presencia hará que esta
                    reunión sea aún más memorable.
                </p>

            </div>

            <div class="detalle">
                
                <p><strong>Fecha:</strong> Domingo 5 de Julio 2026</p>
                <p><strong>Hora:</strong> 9:00 AM</p>
                <p><strong>Lugar:</strong> Salón del sindicato de maestros </p>
                 <p>Av. Galeanta entre tercera y quinta</p>

            </div>

           <?php if(!$yaRespondio): ?>

<form action="guardar.php" method="POST">

    <input
        type="text"
        name="nombre"
        placeholder="Escribe tu nombre"
        required>

    <div class="botones">

        <button
            type="submit"
            name="asistencia"
            value="si"
            class="btn si">
            Sí asistiré
        </button>

        <button
            type="submit"
            name="asistencia"
            value="no"
            class="btn no">
            No podré asistir
        </button>

    </div>

</form>

<?php else: ?>

<div class="respuesta-registrada">

    <h3>💐 Confirmación registrada</h3>

    <p>
        Tu respuesta ya fue recibida anteriormente.
    </p>

</div>

<?php endif; ?>
            <div class="footer">

                <p class="confirmacion">
                    Favor de confirmar tu asistencia
                </p>

                <div class="regalo">
                    🎁 Lluvia de sobres
                    <span>Tu regalo en efectivo será muy apreciado.</span>
                </div>

            </div>

        </div>

        <div class="avisos">

            <div class="aviso">
                <div class="icono-aviso">♀</div>
                <span>Solo para damas</span>
            </div>

            <div class="aviso">
                <div class="icono-aviso">🚫👶</div>
                <span>Sin niños, por favor</span>
            </div>

        </div>

        <div class="flores-bottom"></div>

    </div>

</body>

</html>

