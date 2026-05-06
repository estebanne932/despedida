<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Despedida de Soltera</title>

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;700&family=Great+Vibes&display=swap" rel="stylesheet">

<style>

*{
    box-sizing:border-box;
}

body{
    margin:0;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px 15px;
    font-family:'Cormorant Garamond', serif;

    background:
    repeating-linear-gradient(
        90deg,
        #f7efef 0px,
        #f7efef 45px,
        #f3dfe3 45px,
        #f3dfe3 90px
    );
}

/* CARD */

.card{
    width:100%;
    max-width:520px;
    background:rgba(255,255,255,.72);
    backdrop-filter:blur(4px);
    border-radius:28px;
    padding:45px 30px;
    box-shadow:0 15px 40px rgba(0,0,0,.08);
    border:1px solid rgba(255,255,255,.4);
}

/* TITULOS */

.top{
    text-align:center;
    color:#b75c7a;
    font-size:68px;
    line-height:.9;
    margin-bottom:15px;
    font-weight:500;
}

.nombre{
    text-align:center;
    font-family:'Great Vibes', cursive;
    font-size:78px;
    color:#c16284;
    line-height:.9;
    margin-bottom:35px;
}

/* INFO */

.info{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:35px;
    gap:15px;
}

.info-box{
    width:40%;
    text-align:center;
    color:#b75c7a;
    font-size:24px;
    font-weight:600;
    line-height:1.3;
}

.vestido{
    font-size:90px;
    color:#c16284;
}

/* LUGAR */

.lugar{
    text-align:center;
    margin-bottom:40px;
}

.lugar h2{
    font-family:'Great Vibes', cursive;
    font-size:52px;
    color:#c16284;
    margin:0;
    line-height:1;
}

.lugar p{
    margin-top:5px;
    color:#b75c7a;
    font-size:28px;
}

/* SOBRE */

.sobre-box{
    background:rgba(255,255,255,.5);
    border:2px solid #e9c7d1;
    border-radius:22px;
    padding:25px;
    margin-bottom:35px;
    text-align:center;
}

.sobre{
    font-size:60px;
    margin-bottom:10px;
}

.sobre-title{
    color:#b75c7a;
    font-size:36px;
    font-weight:700;
    margin-bottom:10px;
}

.sobre-text{
    color:#9b6878;
    font-size:24px;
    line-height:1.5;
}

/* FORM */

.form-title{
    text-align:center;
    color:#b75c7a;
    font-size:42px;
    font-weight:700;
    margin-bottom:25px;
}

label{
    display:block;
    color:#a65b74;
    font-size:24px;
    margin-bottom:10px;
}

input{
    width:100%;
    padding:16px;
    border-radius:14px;
    border:2px solid #ead4db;
    background:white;
    font-size:18px;
    margin-bottom:22px;
    font-family:inherit;
}

.btn{
    width:100%;
    border:none;
    padding:16px;
    border-radius:15px;
    cursor:pointer;
    font-size:25px;
    font-family:inherit;
    transition:.3s;
    margin-bottom:15px;
}

.si{
    background:#d88ba7;
    color:white;
}

.no{
    background:#f1dbe3;
    color:#9b6878;
}

.btn:hover{
    transform:translateY(-2px);
    box-shadow:0 10px 20px rgba(0,0,0,.08);
}

.footer{
    text-align:center;
    color:#b48797;
    font-size:18px;
    margin-top:15px;
}

/* MOBILE */

@media(max-width:600px){

    .top{
        font-size:52px;
    }

    .nombre{
        font-size:64px;
    }

    .info{
        flex-direction:column;
    }

    .info-box{
        width:100%;
    }

    .vestido{
        font-size:70px;
    }

    .lugar h2{
        font-size:42px;
    }

    .lugar p{
        font-size:22px;
    }

}



/* FONDO ANIMADO */

body{
    animation:fondoMove 12s ease-in-out infinite alternate;
}

@keyframes fondoMove{

    0%{
        background-position:left top;
    }

    100%{
        background-position:right bottom;
    }

}

/* CARD */

.card{
    animation:entradaCard 1.2s ease;
}

@keyframes entradaCard{

    0%{
        opacity:0;
        transform:translateY(40px) scale(.96);
    }

    100%{
        opacity:1;
        transform:translateY(0) scale(1);
    }

}

/* TITULO */

.top{
    animation:fadeTop 1.5s ease;
}

@keyframes fadeTop{

    0%{
        opacity:0;
        transform:translateY(-30px);
    }

    100%{
        opacity:1;
        transform:translateY(0);
    }

}

/* NOMBRE */

.nombre{
    animation:zoomNombre 1.7s ease;
}

@keyframes zoomNombre{

    0%{
        opacity:0;
        transform:scale(.7);
    }

    100%{
        opacity:1;
        transform:scale(1);
    }

}

/* VESTIDO */

.vestido{
    animation:flotar 3s ease-in-out infinite;
}

@keyframes flotar{

    0%{
        transform:translateY(0px);
    }

    50%{
        transform:translateY(-10px);
    }

    100%{
        transform:translateY(0px);
    }

}

/* SOBRE */

.adultos{
    text-align:center;
    margin-bottom:35px;
    padding:18px 22px;

    background:rgba(255,255,255,.4);

    border:1px solid rgba(216,167,184,.25);

    border-radius:18px;

    color:#9b6878;

    font-size:22px;

    line-height:1.5;

    box-shadow:
    inset 0 1px 0 rgba(255,255,255,.5);

    animation:fadeUp 2.1s ease;
}
.sobre{
    animation:shake 4s infinite;
}

.lugar{
    display:block;

    text-align:center;

    margin-bottom:45px;

    padding:28px;

    border-radius:24px;

    text-decoration:none;

    background:rgba(255,255,255,.38);

    border:1px solid rgba(216,167,184,.28);

    transition:.35s;

    animation:fadeUp 1.8s ease;

    box-shadow:
    inset 0 1px 0 rgba(255,255,255,.5);
}

.lugar:hover{
    transform:translateY(-4px);
    box-shadow:0 14px 28px rgba(0,0,0,.06);
}

.lugar h2{
    font-family:'Great Vibes', cursive;
    font-size:56px;
    color:#c16284;
    margin-bottom:8px;
}

.lugar p{
    color:#b75c7a;
    font-size:28px;
    margin-bottom:14px;
}

.ver-mapa{
    display:inline-flex;
    align-items:center;
    gap:8px;

    font-size:20px;

    color:#a7647e;

    font-weight:600;

    letter-spacing:.5px;
}

@keyframes shake{

    0%{
        transform:rotate(0deg);
    }

    10%{
        transform:rotate(-5deg);
    }

    20%{
        transform:rotate(5deg);
    }

    30%{
        transform:rotate(-3deg);
    }

    40%{
        transform:rotate(3deg);
    }

    50%{
        transform:rotate(0deg);
    }

    100%{
        transform:rotate(0deg);
    }

}

/* BOTONES */

.btn{
    position:relative;
    overflow:hidden;
}

.btn::before{
    content:"";
    position:absolute;
    top:0;
    left:-120%;
    width:100%;
    height:100%;
    background:rgba(255,255,255,.25);
    transform:skewX(-25deg);
    transition:.8s;
}

.btn:hover::before{
    left:120%;
}

.btn:hover{
    transform:translateY(-3px) scale(1.02);
}

/* INPUT */

input{
    transition:.3s;
}

input:focus{
    outline:none;
    border-color:#d88ba7;
    box-shadow:0 0 15px rgba(216,139,167,.25);
    transform:scale(1.01);
}

/* SOBRE BOX */

.sobre-box{
    transition:.4s;
}

.sobre-box:hover{
    transform:translateY(-4px);
    box-shadow:0 12px 25px rgba(0,0,0,.06);
}

/* TEXTOS */

.form-title,
.lugar,
.info-box{
    animation:fadeUp 1.6s ease;
}

@keyframes fadeUp{

    0%{
        opacity:0;
        transform:translateY(25px);
    }

    100%{
        opacity:1;
        transform:translateY(0);
    }

}

/* EFECTO BRILLO CARD */

.card::before{
    content:"";
    position:absolute;
    inset:0;
    border-radius:28px;
    padding:1px;
    background:linear-gradient(
        135deg,
        rgba(255,255,255,.6),
        rgba(255,255,255,0),
        rgba(255,255,255,.5)
    );

    -webkit-mask:
        linear-gradient(#fff 0 0) content-box,
        linear-gradient(#fff 0 0);

    -webkit-mask-composite:xor;
    mask-composite:exclude;

    pointer-events:none;

    animation:shine 6s linear infinite;
}

@keyframes shine{

    0%{
        opacity:.3;
    }

    50%{
        opacity:1;
    }

    100%{
        opacity:.3;
    }

}

/* PARTICULAS */

.particula{
    position:fixed;
    font-size:20px;
    animation:caer linear infinite;
    pointer-events:none;
    opacity:.6;
}

.p1{
    left:10%;
    animation-duration:12s;
}

.p2{
    left:30%;
    animation-duration:16s;
}

.p3{
    left:50%;
    animation-duration:14s;
}

.p4{
    left:70%;
    animation-duration:18s;
}

.p5{
    left:90%;
    animation-duration:13s;
}

@keyframes caer{

    0%{
        transform:translateY(-120px) rotate(0deg);
    }

    100%{
        transform:translateY(120vh) rotate(360deg);
    }

}

</style>

<!-- PARTICULAS -->

<div class="particula p1">🌸</div>
<div class="particula p2">💖</div>
<div class="particula p3">✨</div>
<div class="particula p4">🌷</div>
<div class="particula p5">💐</div>



</head>
<body>

<div class="card">

<div class="top">
Bride To Be!
</div>

<div class="nombre">
Karime<br>Veleta
</div>

<div class="info">

    <div class="info-box">
        DOMINGO<br>
        24 DE MAYO<br>
        2026
    </div>

    <div class="vestido">
        👗
    </div>

    <div class="info-box">
        9:30 A.M.
    </div>

</div>

<a 
href="https://www.google.com/maps?q=Torreza+Jard%C3%ADn+y+Sal%C3%B3n,+Cusihuiriachi+2747,+Francisco+Villa,+31530+Cuauht%C3%A9moc,+Chih.&ftid=0x86c1cbb0940c2fdb:0x82cc9264d1ad167f&entry=gps&shh=CAE&lucs=,94297699,94231188,94280568,47071704,94218641,94282134,94286869&g_ep=CAISEjI2LjE4LjAuOTA2NTA0NDMzMBgAIIgnKj8sOTQyOTc2OTksOTQyMzExODgsOTQyODA1NjgsNDcwNzE3MDQsOTQyMTg2NDEsOTQyODIxMzQsOTQyODY4NjlCAk1Y&skid=0d8e9f3a-70dc-4d97-9519-ceba166952c5&g_st=iw"
target="_blank"
class="lugar"
>

    <h2>Jardín La Torreza</h2>

    <p>
        Cuauhtémoc, Chih.
    </p>

    <span class="ver-mapa">
        Ver ubicación ✨
    </span>

</a>

<!-- SOBRE -->

<div class="sobre-box">

    <div class="sobre">
        ✉️
    </div>

    <div class="sobre-title">
        Regalo sugerido
    </div>

    <div class="sobre-text">
        Tu presencia es lo más importante 💖<br>
        Pero si deseas tener un detalle,<br>
        agradecemos regalos en efectivo.
    </div>


</div>

<div class="form-title">
    Confirmar Asistencia
</div>

<form action="guardar.php" method="POST">

    
    <div class="adultos">
    Para disfrutar plenamente de esta celebración,
    hemos reservado este evento exclusivamente para adultos.
</div>

    <label>Tu Nombre</label>

    <input type="text" name="nombre" required>

    <button type="submit" name="asistencia" value="si" class="btn si">
        Sí asistiré
    </button>

    <button type="submit" name="asistencia" value="no" class="btn no">
        No podré asistir
    </button>

</form>

<div class="footer">
Esperamos celebrar contigo ✨
</div>

</div>

</body>
</html>