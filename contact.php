<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SheRise Contact</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>

*, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }
html { scroll-behavior:smooth; font-size:17px; }

:root {
  --crimson: #c8115a;
  --orange:  #f5820a;
  --grad:    linear-gradient(135deg, #c8115a 0%, #f5820a 100%);
  --soft:    linear-gradient(135deg, rgba(200,17,90,.07) 0%, rgba(245,130,10,.07) 100%);
  --text:    #111111;
  --muted:   #666666;
  --light:   #f9f6f4;
  --border:  rgba(0,0,0,.08);
  --shadow-h: 0 16px 50px rgba(200,17,90,.12);
}

body {
  background: #fff;
  color: var(--text);
  font-family: 'DM Sans', sans-serif;
  overflow-x: hidden;
  line-height: 1.6;
}

@keyframes fadeUp {
  from { opacity:0; transform:translateY(26px); }
  to   { opacity:1; transform:translateY(0); }
}
@keyframes bob {
  0%,100% { transform:translateY(0); }
  50%      { transform:translateY(-8px); }
}
@keyframes pulse {
  0%,100%{opacity:1;transform:scale(1);}
  50%{opacity:.4;transform:scale(1.5);}
}

/* ══ NAVBAR ══ */
nav {
  position: fixed; top:0; left:0; right:0; z-index:300;
  height: 76px;
  display: flex; align-items: center; justify-content: space-between;
  padding: 0 68px;
  background: rgba(255,255,255,.97);
  backdrop-filter: blur(16px);
  border-bottom: 1px solid rgba(200,17,90,.1);
  box-shadow: 0 2px 20px rgba(0,0,0,.06);
}
.nav-logo img { height: 50px; }
.nav-links { display:flex; list-style:none; gap:4px; }
.nav-links a {
  display:block; padding:9px 20px; border-radius:50px;
  color:var(--muted); text-decoration:none;
  font-size:1rem; font-weight:500;
  transition:color .2s, background .2s;
}
.nav-links a:hover { color:var(--text); background:rgba(0,0,0,.04); }
.nav-links a.active { color:var(--crimson); font-weight:700; background:rgba(200,17,90,.07); }
.nav-right { display:flex; align-items:center; gap:10px; }
.nav-login {
  background:transparent; color:var(--crimson);
  border:1.5px solid rgba(200,17,90,.35);
  padding:10px 24px; border-radius:50px;
  font-family:'DM Sans',sans-serif; font-size:.95rem; font-weight:600;
  cursor:pointer; transition:background .2s, border-color .2s;
}
.nav-login:hover { background:rgba(200,17,90,.05); border-color:var(--crimson); }
.nav-cta {
  background:var(--grad); color:#fff; border:none;
  padding:10px 26px; border-radius:50px;
  font-family:'DM Sans',sans-serif; font-size:.95rem; font-weight:600;
  cursor:pointer; box-shadow:0 4px 18px rgba(200,17,90,.32);
  transition:opacity .2s, transform .2s;
}
.nav-cta:hover { opacity:.88; transform:translateY(-1px); }

/* ══ HERO ══ */
.hero {
  padding-top: 76px;
  position: relative;
  min-height: 62vh;
  display: flex;
  flex-direction: column;
  overflow: hidden;
}
.hero-bg {
  position: absolute; inset: 0; z-index: 0;
}
.hero-bg img {
  width: 100%; height: 100%;
  object-fit: cover; object-position: center 40%;
  display: block;
}
.hero-bg::after {
  content: '';
  position: absolute; inset: 0;
  background: linear-gradient(
    115deg,
    rgba(10,4,12,.9) 0%,
    rgba(18,5,16,.72) 55%,
    rgba(200,17,90,.18) 100%
  );
}
.hero-orb {
  position: absolute; width: 600px; height: 600px; border-radius: 50%;
  background: radial-gradient(circle, rgba(200,17,90,.2) 0%, transparent 70%);
  top: -180px; right: -60px; z-index: 1; pointer-events: none;
}

.hero-content {
  position: relative; z-index: 2;
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 80px 68px 70px;
  animation: fadeUp .7s ease both;
}
.hero-badge {
  display:inline-flex; align-items:center; gap:9px;
  background:rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.22);
  border-radius:50px; padding:7px 20px 7px 12px;
  margin-bottom:26px; backdrop-filter:blur(10px);
}
.badge-dot { width:8px; height:8px; border-radius:50%; background:#ff6b9d; animation:pulse 2s infinite; flex-shrink:0; }
.hero-badge span { font-size:.76rem; font-weight:700; color:rgba(255,255,255,.9); letter-spacing:.1em; text-transform:uppercase; }

.hero-content h1 {
  font-family:'Playfair Display',serif;
  font-size:clamp(2.8rem,5vw,5.2rem);
  font-weight:900; line-height:1.06; color:#fff;
  margin-bottom:18px;
  text-shadow:0 2px 40px rgba(0,0,0,.3);
}
.hero-content h1 em {
  font-style:italic;
  background:var(--grad);
  -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;
}
.hero-content p {
  font-size:1.08rem; color:rgba(255,255,255,.7);
  line-height:1.8; max-width:540px;
}

/* Stats strip */
.hero-stats {
  position: relative; z-index: 2;
  display: flex;
  background: rgba(10,5,15,.88);
  backdrop-filter: blur(20px);
  border-top: 1px solid rgba(255,255,255,.07);
  padding: 0 68px;
}
.hstat { padding:20px 40px 20px 0; margin-right:40px; border-right:1px solid rgba(255,255,255,.08); }
.hstat:last-child { border-right:none; }
.hstat-val {
  font-family:'Playfair Display',serif; font-size:1.7rem; font-weight:900; line-height:1;
  background:var(--grad); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;
}
.hstat-lbl { font-size:.72rem; color:rgba(255,255,255,.4); text-transform:uppercase; letter-spacing:.08em; margin-top:4px; }

/* ══ MAIN CONTACT SECTION ══ */
.contact-section {
  padding: 100px 68px;
  background: #fff;
}
.contact-grid {
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: 72px;
  align-items: start;
  max-width: 1100px;
  margin: 0 auto;
}

/* ── Left col : infos ── */
.contact-info-col {}
.contact-info-col .section-label { margin-bottom: 12px; }
.contact-info-col h2 {
  font-family: 'Playfair Display', serif;
  font-size: clamp(1.9rem, 2.8vw, 2.6rem);
  font-weight: 900; line-height: 1.1; color: #111;
  margin-bottom: 16px;
}
.contact-info-col h2 em {
  font-style: italic;
  background: var(--grad);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
}
.contact-info-col > p {
  font-size: .98rem; color: var(--muted); line-height: 1.8;
  margin-bottom: 36px; max-width: 380px;
}

/* Info cards */
.info-cards { display: flex; flex-direction: column; gap: 14px; margin-bottom: 36px; }
.info-card {
  display: flex; align-items: center; gap: 16px;
  padding: 18px 20px;
  background: var(--light); border: 1px solid var(--border);
  border-radius: 18px;
  transition: border-color .2s, box-shadow .2s, transform .2s;
  cursor: pointer; text-decoration: none;
}
.info-card:hover {
  border-color: rgba(200,17,90,.22);
  box-shadow: var(--shadow-h);
  transform: translateX(4px);
}
.info-card-ico {
  width: 46px; height: 46px; border-radius: 14px; flex-shrink: 0;
  background: var(--grad);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.2rem;
  box-shadow: 0 4px 14px rgba(200,17,90,.28);
}
.info-card-label {
  font-size: .72rem; font-weight: 700; color: #aaa;
  text-transform: uppercase; letter-spacing: .09em; margin-bottom: 3px;
}
.info-card-value {
  font-size: .95rem; font-weight: 700; color: #111;
}
.info-card-arrow {
  margin-left: auto; font-size: 1rem; color: #ccc;
  transition: color .2s, transform .2s;
}
.info-card:hover .info-card-arrow { color: var(--crimson); transform: translateX(3px); }

/* Réseaux sociaux */
.social-label {
  font-size: .72rem; font-weight: 700; color: #aaa;
  text-transform: uppercase; letter-spacing: .1em;
  margin-bottom: 14px;
}
.socials-row { display: flex; gap: 10px; }
.social-btn {
  width: 46px; height: 46px; border-radius: 14px;
  background: var(--light); border: 1px solid var(--border);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.2rem; cursor: pointer; text-decoration: none;
  transition: background .2s, border-color .2s, transform .2s, box-shadow .2s;
}
.social-btn:hover {
  background: rgba(200,17,90,.08);
  border-color: rgba(200,17,90,.25);
  transform: translateY(-3px);
  box-shadow: 0 6px 18px rgba(200,17,90,.15);
}

/* Temps de réponse badge */
.response-badge {
  display: inline-flex; align-items: center; gap: 9px;
  background: rgba(34,197,94,.08); border: 1px solid rgba(34,197,94,.2);
  border-radius: 50px; padding: 8px 16px;
  margin-top: 20px;
}
.rdot { width: 8px; height: 8px; border-radius: 50%; background: #22c55e; animation: pulse 2s infinite; }
.response-badge span { font-size: .8rem; font-weight: 700; color: #16a34a; }

/* ── Right col : formulaire ── */
.contact-form-col {
  background: #fff;
  border: 1px solid var(--border);
  border-radius: 28px;
  padding: 44px 40px;
  box-shadow: 0 20px 60px rgba(0,0,0,.05);
  position: relative;
  overflow: hidden;
}
.contact-form-col::before {
  content: '';
  position: absolute; top: 0; left: 0; right: 0; height: 4px;
  background: var(--grad);
  border-radius: 28px 28px 0 0;
}

.form-title {
  font-family: 'Playfair Display', serif;
  font-size: 1.45rem; font-weight: 900; color: #111;
  margin-bottom: 6px;
}
.form-sub { font-size: .88rem; color: var(--muted); margin-bottom: 28px; }

/* Subject pills */
.subject-pills {
  display: flex; flex-wrap: wrap; gap: 8px;
  margin-bottom: 24px;
}
.pill {
  padding: 7px 16px; border-radius: 50px;
  background: var(--light); border: 1.5px solid var(--border);
  font-family: 'DM Sans', sans-serif; font-size: .82rem; font-weight: 600;
  color: var(--muted); cursor: pointer;
  transition: all .2s;
}
.pill:hover { border-color: rgba(200,17,90,.3); color: var(--crimson); background: rgba(200,17,90,.05); }
.pill.active {
  background: rgba(200,17,90,.08);
  border-color: var(--crimson);
  color: var(--crimson);
}

/* Form fields */
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 14px; }
.form-group { display: flex; flex-direction: column; gap: 7px; margin-bottom: 14px; }
.form-group label {
  font-size: .8rem; font-weight: 700; color: #555;
  text-transform: uppercase; letter-spacing: .07em;
}
.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  padding: 13px 16px;
  border: 1.5px solid var(--border);
  border-radius: 14px;
  font-family: 'DM Sans', sans-serif; font-size: .95rem; color: #111;
  background: #fff;
  outline: none;
  transition: border-color .2s, box-shadow .2s;
  -webkit-appearance: none;
}
.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  border-color: var(--crimson);
  box-shadow: 0 0 0 4px rgba(200,17,90,.08);
}
.form-group input::placeholder,
.form-group textarea::placeholder { color: #ccc; }
.form-group textarea { resize: vertical; min-height: 120px; }

.form-submit {
  width: 100%; padding: 15px;
  background: var(--grad); color: #fff; border: none;
  border-radius: 50px;
  font-family: 'DM Sans', sans-serif; font-size: 1rem; font-weight: 700;
  cursor: pointer;
  box-shadow: 0 6px 22px rgba(200,17,90,.38);
  transition: transform .2s, box-shadow .2s;
  margin-top: 6px;
  display: flex; align-items: center; justify-content: center; gap: 10px;
}
.form-submit:hover { transform: translateY(-2px); box-shadow: 0 12px 32px rgba(200,17,90,.5); }
.form-submit:disabled { opacity: .6; cursor: not-allowed; transform: none; }

.form-note {
  text-align: center; font-size: .78rem; color: #bbb;
  margin-top: 14px; line-height: 1.6;
}

/* Success state */
.form-success {
  display: none;
  flex-direction: column; align-items: center; justify-content: center;
  text-align: center; padding: 40px 20px; gap: 16px;
}
.success-ico {
  width: 72px; height: 72px; border-radius: 50%;
  background: rgba(34,197,94,.1); border: 2px solid rgba(34,197,94,.25);
  display: flex; align-items: center; justify-content: center;
  font-size: 2rem;
}
.form-success h3 {
  font-family: 'Playfair Display', serif;
  font-size: 1.5rem; font-weight: 900; color: #111;
}
.form-success p { font-size: .92rem; color: var(--muted); line-height: 1.7; max-width: 300px; }
.form-success .btn-back {
  background: var(--grad); color: #fff; border: none;
  padding: 12px 28px; border-radius: 50px;
  font-family: 'DM Sans', sans-serif; font-size: .9rem; font-weight: 700;
  cursor: pointer; box-shadow: 0 4px 16px rgba(200,17,90,.3);
  transition: transform .2s;
}
.form-success .btn-back:hover { transform: translateY(-2px); }

/* ══ MAP SECTION ══ */
.map-section {
  padding: 0 68px 90px;
  background: #fff;
}
.map-inner {
  border-radius: 28px; overflow: hidden;
  position: relative;
  box-shadow: 0 12px 50px rgba(0,0,0,.08);
  border: 1px solid var(--border);
}
.map-placeholder {
  height: 380px;
  background: linear-gradient(135deg, #f0e8ec 0%, #fce8e0 100%);
  display: flex; flex-direction: column;
  align-items: center; justify-content: center; gap: 14px;
  position: relative; overflow: hidden;
}
/* Decorative grid lines */
.map-placeholder::before {
  content: '';
  position: absolute; inset: 0;
  background-image:
    linear-gradient(rgba(200,17,90,.05) 1px, transparent 1px),
    linear-gradient(90deg, rgba(200,17,90,.05) 1px, transparent 1px);
  background-size: 40px 40px;
}
.map-pin {
  width: 60px; height: 60px; border-radius: 50% 50% 50% 0;
  background: var(--grad); transform: rotate(-45deg);
  display: flex; align-items: center; justify-content: center;
  box-shadow: 0 8px 24px rgba(200,17,90,.4);
  position: relative; z-index: 1;
  animation: bob 3s ease-in-out infinite;
}
.map-pin span { transform: rotate(45deg); font-size: 1.4rem; }
.map-label {
  position: relative; z-index: 1; text-align: center;
}
.map-label h4 {
  font-family: 'Playfair Display', serif;
  font-size: 1.2rem; font-weight: 900; color: #111; margin-bottom: 4px;
}
.map-label p { font-size: .86rem; color: var(--muted); }

/* Pin circles */
.map-circle {
  position: absolute; border-radius: 50%;
  background: rgba(200,17,90,.08); border: 1px solid rgba(200,17,90,.15);
  pointer-events: none;
}
.mc1 { width: 120px; height: 120px; top: 50%; left: 50%; transform: translate(-50%,-50%); }
.mc2 { width: 220px; height: 220px; top: 50%; left: 50%; transform: translate(-50%,-50%); }
.mc3 { width: 340px; height: 340px; top: 50%; left: 50%; transform: translate(-50%,-50%); }

/* Map overlay card */
.map-card {
  position: absolute; bottom: 20px; left: 24px;
  background: rgba(255,255,255,.97);
  border: 1px solid rgba(200,17,90,.14);
  border-radius: 18px; padding: 16px 20px;
  box-shadow: 0 8px 28px rgba(0,0,0,.1);
  backdrop-filter: blur(12px);
  z-index: 5;
}
.map-card h5 { font-size: .92rem; font-weight: 800; color: #111; margin-bottom: 4px; }
.map-card p  { font-size: .78rem; color: var(--muted); line-height: 1.5; }
.map-card-dot { display: flex; align-items: center; gap: 7px; margin-top: 8px; }
.mcdot { width: 8px; height: 8px; border-radius: 50%; background: #22c55e; }
.map-card-dot span { font-size: .75rem; font-weight: 700; color: #16a34a; }

/* ══ CTA ══ */
.cta-section { padding: 80px 68px; background: var(--light); }
.cta-inner {
  background: #111; border-radius: 28px;
  padding: 72px; text-align: center;
  position: relative; overflow: hidden;
}
.cta-inner::before {
  content: ''; position: absolute; width: 500px; height: 500px; border-radius: 50%;
  background: radial-gradient(circle, rgba(200,17,90,.25) 0%, transparent 70%);
  top: -150px; left: -100px;
}
.cta-inner::after {
  content: ''; position: absolute; width: 400px; height: 400px; border-radius: 50%;
  background: radial-gradient(circle, rgba(245,130,10,.18) 0%, transparent 70%);
  bottom: -120px; right: -80px;
}
.cta-inner h2 {
  font-family:'Playfair Display',serif;
  font-size:clamp(2rem,3.8vw,3.2rem); font-weight:900; color:#fff;
  line-height:1.1; margin-bottom:14px; position:relative; z-index:1;
}
.cta-inner h2 em { font-style:italic; background:var(--grad); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
.cta-inner p { font-size:1.02rem; color:rgba(255,255,255,.58); line-height:1.78; margin-bottom:36px; max-width:460px; margin-left:auto; margin-right:auto; position:relative; z-index:1; }
.btn-white {
  background:#fff; color:var(--crimson); border:none;
  padding:15px 38px; border-radius:50px;
  font-family:'DM Sans',sans-serif; font-size:1rem; font-weight:700;
  cursor:pointer; box-shadow:0 6px 22px rgba(0,0,0,.2);
  transition:transform .2s, box-shadow .2s; position:relative; z-index:1;
}
.btn-white:hover { transform:translateY(-2px); box-shadow:0 12px 32px rgba(0,0,0,.28); }

/* ══ FOOTER ══ */
footer {
  background:#fff; padding:40px 68px;
  border-top:1px solid var(--border);
  display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:20px;
}
footer img { height:38px; }
.footer-links { display:flex; list-style:none; gap:6px; flex-wrap:wrap; }
.footer-links a { color:var(--muted); text-decoration:none; font-size:.88rem; padding:6px 14px; border-radius:50px; transition:color .2s,background .2s; }
.footer-links a:hover { color:var(--crimson); background:rgba(200,17,90,.06); }
.footer-copy { font-size:.82rem; color:#bbb; }

.section-label { font-size:.78rem; font-weight:700; letter-spacing:.14em; text-transform:uppercase; color:var(--crimson); margin-bottom:12px; }
.divider { height:1px; background:linear-gradient(90deg,transparent,rgba(200,17,90,.15),transparent); margin:0 68px; }

</style>
</head>
<body>

<!-- ══ NAVBAR ══ -->
<nav>
  <div class="nav-logo">
    <img src="assets/logo.png" alt="SheRise">
  </div>
  <ul class="nav-links">
    <li><a href="sherise.html">Accueil</a></li>
    <li><a href="services.html">Services</a></li>
    <li><a href="abonnements.html">Abonnements</a></li>
    <li><a href="about.html">À propos</a></li>
    <li><a href="contact.html" class="active">Contact</a></li>
  </ul>
  <div class="nav-right">
    <button class="nav-login" onclick="window.location.href='login.html'">Se connecter</button>
    <button class="nav-cta" onclick="window.location.href='commencer.html'">Commencer →</button>
  </div>
</nav>

<!-- ══ HERO ══ -->
<section class="hero">
  <div class="hero-bg">
    <img src="assets/home1.png" alt="Contact SheRise"
         onerror="this.style.display='none'">
  </div>
  <div class="hero-orb"></div>

  <div class="hero-content">
    <div class="hero-badge">
      <span class="badge-dot"></span>
      <span>Réponse sous 24h · Équipe disponible</span>
    </div>
    <h1>Parlons de votre<br><em>projet</em></h1>
    <p>Une question, un problème technique, une idée de partenariat ? Notre équipe est là pour vous accompagner à chaque étape.</p>
  </div>

  <div class="hero-stats">
    <div class="hstat"><div class="hstat-val">&lt; 24h</div><div class="hstat-lbl">Temps de réponse</div></div>
    <div class="hstat"><div class="hstat-val">7j/7</div><div class="hstat-lbl">Support disponible</div></div>
    <div class="hstat"><div class="hstat-val">Lomé</div><div class="hstat-lbl">Togo · Afrique</div></div>
    <div class="hstat"><div class="hstat-val">5k+</div><div class="hstat-lbl">Membres accompagnées</div></div>
  </div>
</section>

<!-- ══ CONTACT MAIN ══ -->
<section class="contact-section">
  <div class="contact-grid">

    <!-- ── Infos ── -->
    <div class="contact-info-col">
      <div class="section-label">Nous contacter</div>
      <h2>On est là<br>pour <em>vous</em></h2>
      <p>Que ce soit pour un support technique, une question sur votre abonnement ou une collaboration, écrivez-nous — nous vous répondons personnellement.</p>

      <div class="info-cards">
        <a class="info-card" href="mailto:contact@sherise.africa">
          <div class="info-card-ico">✉️</div>
          <div>
            <div class="info-card-label">Email</div>
            <div class="info-card-value">contact@sherise.africa</div>
          </div>
          <span class="info-card-arrow">→</span>
        </a>

        <a class="info-card" href="tel:+00000000000">
          <div class="info-card-ico">📞</div>
          <div>
            <div class="info-card-label">Téléphone</div>
            <div class="info-card-value">+228 XX XX XX XX</div>
          </div>
          <span class="info-card-arrow">→</span>
        </a>

        <a class="info-card" href="#">
          <div class="info-card-ico">💬</div>
          <div>
            <div class="info-card-label">WhatsApp Support</div>
            <div class="info-card-value">+228 XX XX XX XX</div>
          </div>
          <span class="info-card-arrow">→</span>
        </a>

        <div class="info-card" style="cursor:default;">
          <div class="info-card-ico">📍</div>
          <div>
            <div class="info-card-label">Adresse</div>
            <div class="info-card-value">Lomé, Togo · Afrique de l'Ouest</div>
          </div>
        </div>
      </div>

      <!-- Réseaux sociaux -->
      <div class="social-label">Retrouvez-nous sur</div>
      <div class="socials-row">
        <a class="social-btn" href="#" title="Instagram">📸</a>
        <a class="social-btn" href="#" title="Facebook">👥</a>
        <a class="social-btn" href="#" title="LinkedIn">💼</a>
        <a class="social-btn" href="#" title="Twitter / X">🐦</a>
        <a class="social-btn" href="#" title="TikTok">🎵</a>
      </div>

      <div class="response-badge">
        <span class="rdot"></span>
        <span>Équipe en ligne · Réponse moyenne en 4h</span>
      </div>
    </div>

    <!-- ── Formulaire ── -->
    <div class="contact-form-col">
      <div id="formContent">
        <div class="form-title">Envoyez-nous un message</div>
        <div class="form-sub">Choisissez le sujet et remplissez le formulaire — nous vous répondons rapidement.</div>

        <!-- Sujet pills -->
        <div class="subject-pills">
          <button class="pill active" onclick="setPill(this)">🛠️ Support technique</button>
          <button class="pill" onclick="setPill(this)">💳 Abonnement</button>
          <button class="pill" onclick="setPill(this)">🤝 Partenariat</button>
          <button class="pill" onclick="setPill(this)">💡 Suggestion</button>
          <button class="pill" onclick="setPill(this)">📋 Autre</button>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label>Prénom</label>
            <input type="text" placeholder="Votre prénom" id="f-prenom">
          </div>
          <div class="form-group">
            <label>Nom</label>
            <input type="text" placeholder="Votre nom" id="f-nom">
          </div>
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" placeholder="votre@email.com" id="f-email">
        </div>

        <div class="form-group">
          <label>Téléphone (optionnel)</label>
          <input type="tel" placeholder="+228 XX XX XX XX" id="f-tel">
        </div>

        <div class="form-group">
          <label>Message</label>
          <textarea placeholder="Décrivez votre question ou problème en détail..." id="f-msg"></textarea>
        </div>

        <button class="form-submit" onclick="submitForm()" id="submitBtn">
          <span>Envoyer le message</span>
          <span>→</span>
        </button>

        <p class="form-note">🔒 Vos données sont protégées et ne seront jamais partagées.</p>
      </div>

      <!-- Success state -->
      <div class="form-success" id="formSuccess">
        <div class="success-ico">✅</div>
        <h3>Message envoyé !</h3>
        <p>Merci pour votre message. Notre équipe vous répondra dans les 24 heures.</p>
        <button class="btn-back" onclick="resetForm()">Envoyer un autre message</button>
      </div>
    </div>

  </div>
</section>

<div class="divider"></div>

<!-- ══ MAP ══ -->
<section class="map-section">
  <div class="map-inner">
    <div class="map-placeholder">
      <!-- Decorative circles -->
      <div class="map-circle mc3"></div>
      <div class="map-circle mc2"></div>
      <div class="map-circle mc1"></div>

      <div class="map-pin"><span>📍</span></div>
      <div class="map-label">
        <h4>SheRise · Lomé, Togo</h4>
        <p>Afrique de l'Ouest · Plateforme 100% digitale</p>
      </div>

      <!-- Overlay card -->
      <div class="map-card">
        <h5>SheRise HQ</h5>
        <p>Lomé, Togo<br>Afrique de l'Ouest</p>
        <div class="map-card-dot">
          <span class="mcdot"></span>
          <span>Bureau ouvert · Lun – Ven</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ CTA ══ -->
<section class="cta-section">
  <div class="cta-inner">
    <h2>Pas encore membre<br>de <em>SheRise</em> ?</h2>
    <p>Rejoignez 5 000 entrepreneures africaines et commencez à vendre, apprendre et grandir — gratuitement.</p>
    <button class="btn-white" onclick="window.location.href='commencer.html'">Commencer gratuitement →</button>
  </div>
</section>

<!-- ══ FOOTER ══ -->
<footer>
  <img src="assets/logo.png" alt="SheRise">
  <ul class="footer-links">
    <li><a href="sherise.html">Accueil</a></li>
    <li><a href="services.html">Services</a></li>
    <li><a href="abonnements.html">Abonnements</a></li>
    <li><a href="about.html">À propos</a></li>
    <li><a href="contact.html">Contact</a></li>
    <li><a href="#">Confidentialité</a></li>
  </ul>
  <div class="footer-copy">© 2026 SheRise · Créé par Djénia TOUKOULA</div>
</footer>

<script>
// ── Pills ──
function setPill(el) {
  document.querySelectorAll('.pill').forEach(p => p.classList.remove('active'));
  el.classList.add('active');
}

// ── Form submit ──
function submitForm() {
  const prenom = document.getElementById('f-prenom').value.trim();
  const email  = document.getElementById('f-email').value.trim();
  const msg    = document.getElementById('f-msg').value.trim();

  if (!prenom || !email || !msg) {
    // Shake empty fields
    [
      { id:'f-prenom', val:prenom },
      { id:'f-email',  val:email  },
      { id:'f-msg',    val:msg    },
    ].forEach(f => {
      if (!f.val) {
        const el = document.getElementById(f.id);
        el.style.borderColor = 'var(--crimson)';
        el.style.boxShadow   = '0 0 0 4px rgba(200,17,90,.12)';
        el.addEventListener('input', () => {
          el.style.borderColor = '';
          el.style.boxShadow   = '';
        }, { once: true });
      }
    });
    return;
  }

  const btn = document.getElementById('submitBtn');
  btn.disabled = true;
  btn.innerHTML = '<span>Envoi en cours…</span>';

  setTimeout(() => {
    document.getElementById('formContent').style.display = 'none';
    const suc = document.getElementById('formSuccess');
    suc.style.display = 'flex';
  }, 1200);
}

function resetForm() {
  document.getElementById('formContent').style.display = 'block';
  document.getElementById('formSuccess').style.display = 'none';
  document.getElementById('submitBtn').disabled = false;
  document.getElementById('submitBtn').innerHTML = '<span>Envoyer le message</span><span>→</span>';
  ['f-prenom','f-nom','f-email','f-tel','f-msg'].forEach(id => {
    document.getElementById(id).value = '';
  });
  document.querySelectorAll('.pill').forEach((p,i) => p.classList.toggle('active', i===0));
}
</script>

</body>
</html>