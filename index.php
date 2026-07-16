

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kenya & Oscar — Nos Casamos</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400&family=EB+Garamond:ital,wght@0,400;0,500;1,400&family=Parisienne&display=swap" rel="stylesheet">
<style>
  :root{
    --bg-deep: #ffffff;
    --bg-panel: #ffffff;
    --bg-panel-2: #ffffff;
    --gold: #C9A662;
    --gold-soft: #A98B52;
    --gold-bright: #E4C989;
    --cream: #F3ECDD;
    --cream-dim: #CBBFA6;
    --line: rgba(201,166,98,0.35);
  }

  *{ box-sizing: border-box; }

  html{ scroll-behavior: smooth; }

  body{
    margin:0;
    background: var(--bg-deep);
    color: var(--cream);
    font-family: 'EB Garamond', serif;
    font-size: 18px;
    line-height: 1.6;
    overflow-x: hidden;
  }

  h1,h2,h3, .script{
    font-family: 'Cormorant Garamond', serif;
    font-weight: 500;
    letter-spacing: 0.02em;
  }

  .script{
    font-family: 'Parisienne', cursive;
    font-weight: 400;
    line-height: 1.3;
  }

  .eyebrow{
    text-transform: uppercase;
    letter-spacing: 0.35em;
    font-size: 0.72rem;
    color: var(--gold);
    font-family: 'EB Garamond', serif;
  }

  /* ---------- Botanical corner ornament (signature element) ---------- */
  .frame{
    position: relative;
  }
  .corner{
    position: absolute;
    width: 92px;
    height: 92px;
    opacity: 0.9;
    pointer-events: none;
  }
  .corner svg{ width:100%; height:100%; display:block; }
  .corner.tl{ top: 22px; left: 22px; }
  .corner.tr{ top: 22px; right: 22px; transform: scaleX(-1); }
  .corner.bl{ bottom: 22px; left: 22px; transform: scaleY(-1); }
  .corner.br{ bottom: 22px; right: 22px; transform: scale(-1,-1); }

  @media (max-width:600px){
    .corner{ width: 58px; height: 58px; }
    .corner.tl, .corner.tr{ top: 10px; }
    .corner.bl, .corner.br{ bottom: 10px; }
    .corner.tl, .corner.bl{ left: 10px; }
    .corner.tr, .corner.br{ right: 10px; }
  }

  .divider{
    width: 1px;
    height: 46px;
    background: linear-gradient(to bottom, transparent, var(--gold), transparent);
    margin: 22px auto;
  }
  .divider-h{
    width: 90px;
    height: 1px;
    background: var(--gold);
    opacity: 0.55;
    margin: 18px auto;
  }

  /* ---------- Sections ---------- */
  section{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 90px 24px;
    position: relative;
  }

  .reveal{
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 1s ease, transform 1s ease;
  }
  .reveal.in{
    opacity: 1;
    transform: translateY(0);
  }

  /* ---- Cover (full-bleed photo) ---- */
#cover{
    position:relative;
    height:100vh;
    overflow:hidden;

    display:flex;
    justify-content:center;
    align-items:center;
}

.cover-photo{
    position:absolute;
    inset:0;

    background-image:url("novios.jpeg");
    background-size:cover;
    background-position:center center;
    background-repeat:no-repeat;

    filter:grayscale(100%) brightness(.75);

    z-index:1;
}

.overlay{
    position:absolute;
    inset:0;

    background:linear-gradient(
        to bottom,
        rgba(0,0,0,.15),
        rgba(0,0,0,.35),
        rgba(0,0,0,.65)
    );

    z-index:2;
}

.hero-content{
    position:relative;
    z-index:3;

    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;

    text-align:center;
}

.top-bar{
    position:absolute;
    top:40px;
    left:0;
    width:100%;

    display:flex;
    justify-content:center;
    align-items:center;

    z-index:4;
}

.names{
    color:#F3ECDD;
    font-size:clamp(3.8rem,9vw,6rem);
    line-height:1.1;
    letter-spacing:.18em;
    text-shadow:0 5px 20px rgba(0,0,0,.45);
}

.amp{
    display:block;
    font-family:'Parisienne', cursive;
    font-size:1.5em;
    line-height:1;
    margin:.15em 0;
}

.date-line{
    margin-top:18px;
    letter-spacing:.35em;
    text-transform:uppercase;
    color:#E9D7B0;
    font-size:.95rem;
}







  .play-song{
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 10px 22px 10px 10px;
    border: 1px solid rgba(243,236,221,0.55);
    border-radius: 999px;
    background: rgba(10,10,10,0.25);
    color: var(--cream);
    text-transform: uppercase;
    letter-spacing: 0.22em;
    font-size: 0.68rem;
    font-family: 'EB Garamond', serif;
    cursor: pointer;
    backdrop-filter: blur(2px);
    align-self: flex-start;
    margin-top: 4px;
  }
  .play-song .disc{
    width: 26px;
    height: 26px;
    border-radius: 50%;
    border: 1px solid rgba(243,236,221,0.7);
    display:flex;
    align-items:center;
    justify-content:center;
    flex-shrink: 0;
  }
  .play-song .disc svg{ width:9px; height:9px; }
  .play-song:hover{ background: rgba(10,10,10,0.45); }
  #cover .top-bar{
    position: absolute;
    top: 30px;
    left: 0; right: 0;
    display:flex;
    justify-content: center;
    z-index: 2;
  }

  #cover .eyebrow{ margin-bottom: 18px; }
  #cover .names{
    font-size: clamp(2.8rem, 8vw, 4.6rem);
    color: var(--cream);
    margin: 0;
    line-height: 1.15;
    letter-spacing: 0.12em;
  }
  #cover .names .amp{
    display:block;
    font-family: 'Parisienne', cursive;
    font-size: 1.6em;
    color: var(--cream);
    margin: 2px 0;
    letter-spacing: 0;
  }
  #cover .date-line{
    margin-top: 20px;
    font-size: 1rem;
    letter-spacing: 0.28em;
    color: var(--cream-dim);
    text-transform: uppercase;
  }
  #cover .invite-line{
    max-width: 480px;
    margin-top: 30px;
    color: var(--cream-dim);
    font-style: italic;
    font-size: 1.05rem;
  }

  /* ---- Countdown ---- */
  #countdown{ background: var(--bg-panel); }
  .count-title{
    font-size: 2rem;
    color: var(--gold-bright);
  }
  .count-grid{
    display:flex;
    gap: 34px;
    margin-top: 30px;
    flex-wrap: wrap;
    justify-content: center;
  }
  .count-item{ min-width: 84px; }
  .count-num{
    font-family: 'Cormorant Garamond', serif;
    font-size: 3rem;
    color: var(--gold);
    line-height: 1;
  }
  .count-label{
    margin-top: 8px;
    font-size: 0.68rem;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    color: var(--cream-dim);
  }

  /* ---- Story ---- */
  #story{ background: var(--bg-deep); }
  #story p{
    max-width: 560px;
    color: var(--cream-dim);
    font-size: 1.15rem;
  }
  #story h2{
    font-size: 2.6rem;
    color: var(--gold-bright);
  }

  /* ---- Details (ceremony & reception) ---- */
  #details{ background: var(--bg-panel); }
  .details-wrap{ max-width: 780px; }
  .details-wrap h2{ font-size: 2.4rem; color: var(--gold-bright); margin-bottom: 6px;}
  .event-cards{
    display:flex;
    gap: 40px;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 40px;
  }
  .event-card{
    width: 280px;
    border: 1px solid var(--line);
    padding: 34px 22px;
    background: rgba(201,166,98,0.03);
  }
  .event-card .icon{
    font-size: 1.6rem;
    color: var(--gold);
    margin-bottom: 10px;
  }
  .event-card h3{
    font-size: 1.5rem;
    color: var(--cream);
    margin: 6px 0 4px;
  }
  .event-card .time{
    color: var(--gold-soft);
    letter-spacing: 0.08em;
    font-size: 0.95rem;
    margin-bottom: 10px;
  }
  .event-card p{
    color: var(--cream-dim);
    font-size: 0.98rem;
    margin: 4px 0;
  }
  .event-card a{
    display:inline-block;
    margin-top: 14px;
    color: var(--gold);
    text-decoration: none;
    border-bottom: 1px solid var(--gold-soft);
    font-size: 0.85rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
  }

  /* ---- Itinerary ---- */
  #itinerary{ background: var(--bg-deep); }
  .timeline{
    max-width: 460px;
    margin-top: 40px;
    text-align: left;
  }
  .t-item{
    display:flex;
    gap: 22px;
    padding: 16px 0;
    border-bottom: 1px solid var(--line);
  }
  .t-item:last-child{ border-bottom: none; }
  .t-time{
    width: 90px;
    flex-shrink:0;
    color: var(--gold);
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.2rem;
    padding-top: 2px;
  }
  .t-label{ color: var(--cream-dim); font-size: 1.02rem; padding-top: 2px;}

  /* ---- Dress code ---- */
  #dresscode{ background: var(--bg-panel); }
  #dresscode h2{ font-size: 2.4rem; color: var(--gold-bright);}
  .palette{
    display:flex;
    gap: 16px;
    margin-top: 26px;
  }
  .swatch{
    width: 34px;
    height: 34px;
    border-radius: 50%;
    border: 1px solid var(--line);
  }

  /* ---- RSVP ---- */
  #rsvp{ background: var(--bg-deep); }
  #rsvp h2{ font-size: 2.6rem; color: var(--gold-bright);}
  #rsvp p{ color: var(--cream-dim); max-width: 460px; }
  form{
    margin-top: 30px;
    display:flex;
    flex-direction: column;
    gap: 18px;
    width: 100%;
    max-width: 380px;
  }
  form input, form select{
    background: transparent;
    border: none;
    border-bottom: 1px solid var(--line);
    color: var(--cream);
    font-family: 'EB Garamond', serif;
    font-size: 1.05rem;
    padding: 10px 4px;
    outline: none;
  }
  form input::placeholder{ color: var(--cream-dim); opacity: 0.7; }
  form input:focus, form select:focus{ border-bottom-color: var(--gold); }
  form button{
    margin-top: 14px;
    background: transparent;
    border: 1px solid var(--gold);
    color: var(--gold-bright);
    padding: 14px;
    font-family: 'EB Garamond', serif;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    font-size: 0.82rem;
    cursor: pointer;
    transition: background 0.3s ease, color 0.3s ease;
  }
  form button:hover{ background: var(--gold); color: var(--bg-deep); }
  form button:focus-visible, a:focus-visible, input:focus-visible{
    outline: 2px solid var(--gold-bright);
    outline-offset: 2px;
  }
  #rsvp-msg{
    margin-top: 16px;
    color: var(--gold-bright);
    font-style: italic;
    min-height: 1.2em;
  }

  footer{
    background: var(--bg-panel-2);
    text-align:center;
    padding: 50px 24px 40px;
    color: var(--cream-dim);
  }
  footer .script{ font-size: 2.2rem; color: var(--gold-bright); }
  footer small{ display:block; margin-top: 10px; letter-spacing: 0.15em; font-size: 0.7rem; text-transform: uppercase; }

  @media (prefers-reduced-motion: reduce){
    html{ scroll-behavior: auto; }
    .reveal{ transition: none; opacity: 1; transform: none; }
  }
</style>
</head>

    <body>

<!-- ============ COVER ============ -->
<section id="cover">

    <div class="cover-photo"></div>

    <div class="overlay"></div>

    <div class="top-bar">
        <button class="play-song" id="playSongBtn" type="button">
            <span class="disc">
                <svg viewBox="0 0 10 10" fill="#F3ECDD">
                    <polygon points="1,0 10,5 1,10"/>
                </svg>
            </span>
            Play la canción
        </button>
    </div>

    <audio id="bgAudio" src="cancion.mp3" loop preload="none"></audio>

    <div class="hero-content reveal in">
        <h1 class="names">
            KENYA
            <span class="amp">&</span>
            OSCAR
        </h1>

        <p class="date-line">
            14 | Agosto 2026
        </p>
    </div>

</section>




<!-- ============ COUNTDOWN ============ -->
<section id="countdown">
  <div class="reveal">
    <p class="eyebrow">Falta poco</p>
    <h2 class="count-title">Cuenta regresiva</h2>
    <div class="count-grid" id="countdownGrid">
      <div class="count-item"><div class="count-num" id="cd-days">00</div><div class="count-label">Días</div></div>
      <div class="count-item"><div class="count-num" id="cd-hours">00</div><div class="count-label">Horas</div></div>
      <div class="count-item"><div class="count-num" id="cd-min">00</div><div class="count-label">Min</div></div>
      <div class="count-item"><div class="count-num" id="cd-sec">00</div><div class="count-label">Seg</div></div>
    </div>
  </div>
</section>

<!-- ============ STORY ============ -->
<section id="story">
  <div class="reveal">
    <p class="eyebrow">ACOMPAÑANOS A CELEBRAR ESTA GRAN HISTORIA DE AMOR</p>
    <h2>Un capítulo que empezó&nbsp;hace&nbsp;tiempo</h2>
    <div class="divider-h"></div>
    <p>CON LA BENDICION DE DIOS Y DE NUESTROS PADRES, HEMOS DECIDIDO UNIR NUESTRAS VIDAS EN MATRIMONIO.</p>
    <br>
    <p>PADRES DE LA NOVIA:<br>
      ROSA ISELA SAENZ SERRANO
      JESUS ARMANDO QUEZADA DOZAL</p>  
    <br>
    <p>PADRES DEL NOVIO:<br>
      MARIA ELENA CHAVEZ CONTRERAS
      JOSE LEON MURIILO ERIVES</p>
  </div>

  <br>

  
</section>

<!-- ============ DETAILS ============ -->
<section id="details" class="frame">
  <div class="corner tl"><svg viewBox="0 0 100 100" fill="none" stroke="#C9A662" stroke-width="1.2"><path d="M4 4 C 30 4, 40 4, 40 30 C 40 45, 55 50, 70 46" /><path d="M4 4 C 4 30, 4 40, 30 40 C 45 40, 50 55, 46 70" /><circle cx="42" cy="30" r="3"/><circle cx="30" cy="42" r="3"/></svg></div>
  <div class="corner tr"><svg viewBox="0 0 100 100" fill="none" stroke="#C9A662" stroke-width="1.2"><path d="M4 4 C 30 4, 40 4, 40 30 C 40 45, 55 50, 70 46" /><path d="M4 4 C 4 30, 4 40, 30 40 C 45 40, 50 55, 46 70" /><circle cx="42" cy="30" r="3"/><circle cx="30" cy="42" r="3"/></svg></div>
  <div class="details-wrap reveal">
    <p class="eyebrow">Cuándo y dónde</p>
    <h2>Detalles del gran día</h2>
    <div class="divider-h"></div>
    <div class="event-cards">
      <div class="event-card">
        <div class="icon">&#10022;</div>
        <h3>Ceremonia</h3>
        <div class="time">3:30PM</div>
        <p>Catedral de Cuauhtémoc</p>
        <p>San Antonio de Pauda</p>
        <p>Miguel Hidalgo, Zona centro</p>
        <p>31500</p>
        <a href="https://maps.app.goo.gl/Vkwoxqii1LshtjKx5" target="_blank" rel="noopener">Ver mapa</a>
      </div>
      <div class="event-card">
        <div class="icon">&#10022;</div>
        <h3>Recepción</h3>
        <div class="time">08:30PM</div>
        <p>SALON DEL CAMINO</p>
        <p>Av. Tecnologico</p>
        <p>Te esperamos para brindar juntos</p>
        <a href="https://maps.app.goo.gl/xcb159zTg29jYucF8" target="_blank" rel="noopener">Ver mapa</a>
      </div>
    </div>
  </div>
</section>

<!-- ============ ITINERARY ============ -->
<section id="itinerary">
  <div class="reveal" style="display:flex; flex-direction:column; align-items:center;">
    <p class="eyebrow">Orden del día</p>
    <h2>Itinerario</h2>
    <div class="timeline">
      <div class="t-item"><div class="t-time">17:00</div><div class="t-label">Ceremonia religiosa</div></div>
      <div class="t-item"><div class="t-time">18:30</div><div class="t-label">Sesión de fotos y cóctel</div></div>
      <div class="t-item"><div class="t-time">19:30</div><div class="t-label">Recepción y cena</div></div>
      <div class="t-item"><div class="t-time">21:00</div><div class="t-label">Primer baile</div></div>
      <div class="t-item"><div class="t-time">22:00</div><div class="t-label">Fiesta</div></div>
      <div class="t-item"><div class="t-time">02:00</div><div class="t-label">Fin de la celebración</div></div>
    </div>
  </div>
</section>

<!-- ============ DRESS CODE ============ -->
<section id="dresscode">
  <div class="reveal">
    <p class="eyebrow">Código de vestimenta</p>
    <h2>Formal</h2>
    <div class="divider-h"></div>
    <p style="color:var(--cream-dim); max-width:420px;">Color reservado: fucsia.</p>
    
  </div>
</section>

<!-- ============ RSVP ============ -->
<section id="rsvp" class="frame">
  <div class="corner tl"><svg viewBox="0 0 100 100" fill="none" stroke="#C9A662" stroke-width="1.2"><path d="M4 4 C 30 4, 40 4, 40 30 C 40 45, 55 50, 70 46" /><path d="M4 4 C 4 30, 4 40, 30 40 C 45 40, 50 55, 46 70" /></svg></div>
  <div class="corner br"><svg viewBox="0 0 100 100" fill="none" stroke="#C9A662" stroke-width="1.2"><path d="M4 4 C 30 4, 40 4, 40 30 C 40 45, 55 50, 70 46" /><path d="M4 4 C 4 30, 4 40, 30 40 C 45 40, 50 55, 46 70" /></svg></div>
  <div class="reveal" style="display:flex; flex-direction:column; align-items:center; width:100%;">
    <p class="eyebrow">Confirmación</p>
    <h2>¿Nos acompañas?</h2>
    <p>Por favor confirma tu asistencia antes del 1 de agosto de 2026.</p>
    <form id="rsvpForm">
      <input type="text" placeholder="Nombre completo" required>
      <select required>
        <option value="" disabled selected>¿Asistirás?</option>
        <option value="si">Sí, ahí estaré</option>
        <option value="no">No podré asistir</option>
      </select>
      <input type="number" min="0" max="10" placeholder="Número de acompañantes">
      <button type="submit">Confirmar asistencia</button>
    </form>
    <p id="rsvp-msg"></p>
  </div>
</section>

<footer>
  <div class="script">Kenya &amp; Oscar</div>
  <small>14 de agosto de 2026 · Chihuahua, México</small>
</footer>

<script>
  // Reveal on scroll
  const revealEls = document.querySelectorAll('.reveal');
  const io = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
      if(e.isIntersecting){ e.target.classList.add('in'); }
    });
  }, { threshold: 0.2 });
  revealEls.forEach(el=> io.observe(el));

  // Countdown — edit the target date below to match the real wedding date
  const weddingDate = new Date('2026-08-14T17:00:00');
  function updateCountdown(){
    const now = new Date();
    let diff = weddingDate - now;
    if(diff < 0) diff = 0;
    const d = Math.floor(diff / (1000*60*60*24));
    const h = Math.floor((diff / (1000*60*60)) % 24);
    const m = Math.floor((diff / (1000*60)) % 60);
    const s = Math.floor((diff / 1000) % 60);
    document.getElementById('cd-days').textContent = String(d).padStart(2,'0');
    document.getElementById('cd-hours').textContent = String(h).padStart(2,'0');
    document.getElementById('cd-min').textContent = String(m).padStart(2,'0');
    document.getElementById('cd-sec').textContent = String(s).padStart(2,'0');
  }
  updateCountdown();
  setInterval(updateCountdown, 1000);

  // Play-song toggle — replace 'cancion.mp3' (in the audio tag above) with the couple's song file
  const audio = document.getElementById('bgAudio');
  const playBtn = document.getElementById('playSongBtn');
  let playing = false;
  playBtn.addEventListener('click', ()=>{
    if(!playing){
      audio.play().catch(()=>{});
      playBtn.setAttribute('aria-pressed','true');
      playBtn.lastChild.textContent = ' Pausar canción';
      playing = true;
    } else {
      audio.pause();
      playBtn.setAttribute('aria-pressed','false');
      playBtn.lastChild.textContent = ' Play a canción';
      playing = false;
    }
  });

  // RSVP form (demo — replace with a real endpoint, e.g. Google Forms, Formspree, etc.)
  document.getElementById('rsvpForm').addEventListener('submit', function(e){
    e.preventDefault();
    document.getElementById('rsvp-msg').textContent = '¡Gracias! Tu confirmación fue registrada.';
    this.reset();
  });
</script>

</body>
</html>
