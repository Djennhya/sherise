<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SheRise – Accueil Djénia</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>

*, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }
html { scroll-behavior:smooth; font-size:16px; }

:root {
  --crimson: #c8115a;
  --rose:    #e0185e;
  --orange:  #f5820a;
  --grad:    linear-gradient(135deg, #c8115a 0%, #f5820a 100%);
  --grad-r:  linear-gradient(135deg, #f5820a 0%, #c8115a 100%);
  --soft:    linear-gradient(135deg, rgba(200,17,90,.08) 0%, rgba(245,130,10,.08) 100%);
  --text:    #111;
  --muted:   #777;
  --light:   #f9f6f4;
  --border:  rgba(0,0,0,.08);
  --white:   #ffffff;
  --sidebar-w: 260px;
}

body {
  background: var(--light);
  color: var(--text);
  font-family: 'DM Sans', sans-serif;
  display: flex;
  min-height: 100vh;
  overflow-x: hidden;
}

/* ══════════════════════════
   SIDEBAR
══════════════════════════ */
.sidebar {
  width: var(--sidebar-w);
  min-height: 100vh;
  background: #fff;
  border-right: 1px solid var(--border);
  display: flex;
  flex-direction: column;
  padding: 0;
  position: fixed;
  top: 0; left: 0; bottom: 0;
  z-index: 100;
  box-shadow: 2px 0 20px rgba(0,0,0,.04);
}

.sidebar-logo {
  padding: 28px 28px 24px;
  border-bottom: 1px solid var(--border);
}
.sidebar-logo img {
  height: 44px;
}

/* user profile block */
.sidebar-user {
  padding: 22px 24px;
  border-bottom: 1px solid var(--border);
  display: flex;
  align-items: center;
  gap: 12px;
}
.sidebar-avatar {
  width: 46px; height: 46px;
  border-radius: 50%;
  background: var(--grad);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.3rem;
  flex-shrink: 0;
  box-shadow: 0 4px 14px rgba(200,17,90,.28);
  overflow: hidden;
}
.sidebar-avatar img {
  width: 100%; height: 100%;
  object-fit: cover;
  border-radius: 50%;
}
.sidebar-user-name {
  font-weight: 700;
  font-size: .95rem;
  color: #111;
  line-height: 1.2;
}
.sidebar-user-role {
  font-size: .75rem;
  color: var(--crimson);
  font-weight: 600;
  background: rgba(200,17,90,.08);
  border-radius: 20px;
  padding: 2px 8px;
  display: inline-block;
  margin-top: 3px;
}

/* nav links */
.sidebar-nav {
  flex: 1;
  padding: 16px 14px;
  display: flex;
  flex-direction: column;
  gap: 4px;
  overflow-y: auto;
}
.nav-item {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 11px 16px;
  border-radius: 12px;
  color: var(--muted);
  font-size: .92rem;
  font-weight: 500;
  cursor: pointer;
  transition: background .2s, color .2s;
  text-decoration: none;
}
.nav-item:hover { background: rgba(200,17,90,.05); color: var(--crimson); }
.nav-item.active {
  background: var(--grad);
  color: #fff;
  font-weight: 600;
  box-shadow: 0 4px 16px rgba(200,17,90,.3);
}
.nav-icon { font-size: 1.1rem; width: 22px; text-align: center; }
.nav-badge {
  margin-left: auto;
  background: var(--crimson);
  color: #fff;
  font-size: .65rem;
  font-weight: 700;
  padding: 2px 7px;
  border-radius: 20px;
  min-width: 20px;
  text-align: center;
}
.nav-item.active .nav-badge { background: rgba(255,255,255,.3); }

.sidebar-footer {
  padding: 16px 14px;
  border-top: 1px solid var(--border);
}
.sidebar-logout {
  display: flex; align-items: center; gap: 10px;
  padding: 11px 16px; border-radius: 12px;
  color: #bbb; font-size: .88rem; font-weight: 500;
  cursor: pointer; transition: background .2s, color .2s;
}
.sidebar-logout:hover { background: rgba(255,0,0,.05); color: #e55; }

/* ══════════════════════════
   MAIN
══════════════════════════ */
.main {
  margin-left: var(--sidebar-w);
  flex: 1;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

/* top bar */
.topbar {
  height: 72px;
  background: #fff;
  border-bottom: 1px solid var(--border);
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 36px;
  position: sticky;
  top: 0;
  z-index: 50;
  box-shadow: 0 2px 14px rgba(0,0,0,.05);
}

.topbar-greeting {
  display: flex;
  flex-direction: column;
}
.topbar-hi {
  font-family: 'Playfair Display', serif;
  font-size: 1.35rem;
  font-weight: 900;
  color: #111;
  line-height: 1;
}
.topbar-hi em {
  font-style: italic;
  background: var(--grad);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.topbar-date {
  font-size: .8rem;
  color: var(--muted);
  margin-top: 3px;
}

.topbar-right {
  display: flex;
  align-items: center;
  gap: 14px;
}
.topbar-search {
  display: flex; align-items: center; gap: 8px;
  background: var(--light);
  border: 1px solid var(--border);
  border-radius: 50px;
  padding: 8px 18px;
  font-family: 'DM Sans', sans-serif;
  font-size: .88rem;
  color: var(--muted);
  width: 220px;
  outline: none;
  transition: border-color .2s;
}
.topbar-search:focus { border-color: rgba(200,17,90,.3); }

.topbar-icon-btn {
  width: 40px; height: 40px;
  border-radius: 50%;
  background: var(--light);
  border: 1px solid var(--border);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.1rem;
  cursor: pointer;
  position: relative;
  transition: background .2s;
}
.topbar-icon-btn:hover { background: rgba(200,17,90,.07); }
.notif-dot {
  position: absolute;
  top: 6px; right: 6px;
  width: 8px; height: 8px;
  background: var(--crimson);
  border-radius: 50%;
  border: 2px solid #fff;
}

.topbar-avatar {
  width: 40px; height: 40px;
  border-radius: 50%;
  background: var(--grad);
  display: flex; align-items: center; justify-content: center;
  font-size: 1rem;
  cursor: pointer;
  box-shadow: 0 3px 12px rgba(200,17,90,.25);
  overflow: hidden;
}
.topbar-avatar img { width:100%; height:100%; object-fit:cover; border-radius:50%; }

/* ══════════════════════════
   PAGE CONTENT
══════════════════════════ */
.page-content {
  padding: 32px 36px;
  display: flex;
  flex-direction: column;
  gap: 28px;
}

/* ── KPI CARDS ── */
.kpi-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 18px;
}
.kpi-card {
  background: #fff;
  border: 1px solid var(--border);
  border-radius: 20px;
  padding: 24px 22px;
  position: relative;
  overflow: hidden;
  transition: transform .25s, box-shadow .25s;
}
.kpi-card:hover { transform: translateY(-4px); box-shadow: 0 14px 40px rgba(200,17,90,.1); }
.kpi-card::after {
  content: '';
  position: absolute; top: 0; left: 0; right: 0; height: 3px;
  background: var(--grad); opacity: 0; transition: opacity .25s;
  border-radius: 20px 20px 0 0;
}
.kpi-card:hover::after { opacity: 1; }

.kpi-card.featured {
  background: var(--grad);
  color: #fff;
  border: none;
  box-shadow: 0 8px 28px rgba(200,17,90,.35);
}
.kpi-card.featured:hover { box-shadow: 0 16px 44px rgba(200,17,90,.45); }
.kpi-card.featured::after { display: none; }

.kpi-top { display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; }
.kpi-icon {
  width: 42px; height: 42px;
  border-radius: 12px;
  background: var(--soft);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.2rem;
}
.kpi-card.featured .kpi-icon { background: rgba(255,255,255,.2); }

.kpi-trend {
  font-size: .72rem;
  font-weight: 700;
  padding: 4px 10px;
  border-radius: 20px;
}
.kpi-trend.up { background: rgba(34,197,94,.12); color: #16a34a; }
.kpi-trend.up::before { content: '↑ '; }
.kpi-card.featured .kpi-trend { background: rgba(255,255,255,.2); color: #fff; }

.kpi-value {
  font-family: 'Playfair Display', serif;
  font-size: 2.1rem;
  font-weight: 900;
  line-height: 1;
  margin-bottom: 4px;
  background: var(--grad);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.kpi-card.featured .kpi-value {
  background: none;
  -webkit-text-fill-color: #fff;
  color: #fff;
}
.kpi-label { font-size: .82rem; color: var(--muted); }
.kpi-card.featured .kpi-label { color: rgba(255,255,255,.75); }

/* ── TWO COLUMNS ── */
.two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 22px; }
.three-col { display: grid; grid-template-columns: 2fr 1fr; gap: 22px; }

.card {
  background: #fff;
  border: 1px solid var(--border);
  border-radius: 20px;
  padding: 24px;
}

.card-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 20px;
}
.card-title {
  font-family: 'Playfair Display', serif;
  font-size: 1.1rem;
  font-weight: 900;
  color: #111;
}
.card-link {
  font-size: .8rem;
  font-weight: 600;
  color: var(--crimson);
  cursor: pointer;
  text-decoration: none;
}
.card-link:hover { text-decoration: underline; }

/* Chart bars */
.chart-area {
  display: flex;
  align-items: flex-end;
  gap: 10px;
  height: 130px;
  padding-bottom: 4px;
}
.chart-col { display: flex; flex-direction: column; align-items: center; gap: 6px; flex: 1; }
.chart-bar {
  width: 100%;
  border-radius: 8px 8px 0 0;
  background: linear-gradient(180deg, #c8115a, #f5820a);
  opacity: .7;
  transition: opacity .2s;
  min-height: 4px;
}
.chart-bar:hover { opacity: 1; }
.chart-bar.today { opacity: 1; box-shadow: 0 4px 14px rgba(200,17,90,.35); }
.chart-label { font-size: .68rem; color: var(--muted); }

/* Orders list */
.order-list { display: flex; flex-direction: column; gap: 10px; }
.order-item {
  display: flex; align-items: center; gap: 12px;
  padding: 13px 14px;
  background: var(--light);
  border-radius: 14px;
  border: 1px solid var(--border);
  transition: border-color .2s;
}
.order-item:hover { border-color: rgba(200,17,90,.2); }
.order-item-icon {
  width: 38px; height: 38px; border-radius: 10px;
  background: var(--soft);
  display: flex; align-items: center; justify-content: center;
  font-size: 1rem; flex-shrink: 0;
}
.order-name { font-size: .88rem; font-weight: 700; color: #111; }
.order-sub  { font-size: .74rem; color: var(--muted); margin-top: 2px; }
.order-price { margin-left: auto; font-size: .88rem; font-weight: 700; color: #111; }
.order-badge {
  font-size: .68rem; font-weight: 700;
  padding: 3px 10px; border-radius: 20px;
}
.ob-green  { background: rgba(34,197,94,.12); color: #16a34a; }
.ob-orange { background: rgba(245,130,10,.12); color: #d97706; }
.ob-pink   { background: rgba(200,17,90,.12); color: var(--crimson); }

/* Formation progress card */
.form-list { display: flex; flex-direction: column; gap: 14px; }
.form-item { }
.form-item-top { display: flex; align-items: center; justify-content: space-between; margin-bottom: 7px; }
.form-item-name { font-size: .88rem; font-weight: 700; color: #111; }
.form-item-pct  { font-size: .78rem; font-weight: 700; color: var(--orange); }
.prog-bg { height: 7px; background: rgba(0,0,0,.07); border-radius: 10px; overflow: hidden; }
.prog-fill { height: 100%; background: var(--grad); border-radius: 10px; transition: width .6s; }

/* Community / quick actions */
.quick-actions { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
.qa-btn {
  display: flex; flex-direction: column; align-items: center; gap: 8px;
  padding: 18px 12px;
  background: var(--light);
  border: 1px solid var(--border);
  border-radius: 16px;
  cursor: pointer;
  transition: border-color .2s, background .2s, transform .2s;
  text-align: center;
}
.qa-btn:hover {
  border-color: rgba(200,17,90,.22);
  background: rgba(200,17,90,.04);
  transform: translateY(-2px);
}
.qa-icon {
  width: 44px; height: 44px; border-radius: 12px;
  background: var(--grad);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.2rem;
  box-shadow: 0 4px 14px rgba(200,17,90,.28);
}
.qa-label { font-size: .8rem; font-weight: 700; color: #111; }

/* Notif / feed */
.feed-list { display: flex; flex-direction: column; gap: 10px; }
.feed-item {
  display: flex; align-items: flex-start; gap: 11px;
  padding: 12px;
  border-radius: 14px;
  border: 1px solid var(--border);
  background: var(--light);
  transition: border-color .2s;
}
.feed-item:hover { border-color: rgba(200,17,90,.18); }
.feed-ico {
  width: 34px; height: 34px; border-radius: 50%;
  background: var(--grad);
  display: flex; align-items: center; justify-content: center;
  font-size: .9rem; flex-shrink: 0;
  box-shadow: 0 3px 10px rgba(200,17,90,.25);
}
.feed-body { flex: 1; }
.feed-title { font-size: .84rem; font-weight: 700; color: #111; margin-bottom: 2px; }
.feed-sub   { font-size: .74rem; color: var(--muted); line-height: 1.4; }
.feed-time  { font-size: .68rem; color: #ccc; margin-top: 4px; }

/* Hero banner inside dashboard */
.welcome-banner {
  background: var(--grad);
  border-radius: 22px;
  padding: 32px 36px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 24px;
  position: relative;
  overflow: hidden;
}
.welcome-banner::before {
  content: '';
  position: absolute; top: -60px; right: -60px;
  width: 260px; height: 260px;
  background: rgba(255,255,255,.1);
  border-radius: 50%;
}
.welcome-banner::after {
  content: '';
  position: absolute; bottom: -80px; left: 30%;
  width: 200px; height: 200px;
  background: rgba(0,0,0,.06);
  border-radius: 50%;
}
.wb-left { position: relative; z-index: 1; }
.wb-label {
  font-size: .75rem; font-weight: 700; color: rgba(255,255,255,.7);
  text-transform: uppercase; letter-spacing: .1em; margin-bottom: 8px;
}
.wb-title {
  font-family: 'Playfair Display', serif;
  font-size: clamp(1.6rem, 2.5vw, 2.4rem);
  font-weight: 900;
  color: #fff;
  line-height: 1.1;
  margin-bottom: 12px;
}
.wb-sub {
  font-size: .92rem;
  color: rgba(255,255,255,.8);
  max-width: 400px;
  line-height: 1.6;
  margin-bottom: 22px;
}
.wb-btn {
  background: #fff;
  color: var(--crimson);
  border: none;
  padding: 12px 28px;
  border-radius: 50px;
  font-family: 'DM Sans', sans-serif;
  font-size: .92rem;
  font-weight: 700;
  cursor: pointer;
  position: relative; z-index: 1;
  box-shadow: 0 6px 20px rgba(0,0,0,.18);
  transition: transform .2s, box-shadow .2s;
}
.wb-btn:hover { transform: translateY(-2px); box-shadow: 0 10px 28px rgba(0,0,0,.24); }

.wb-right {
  position: relative; z-index: 1;
  display: flex;
  gap: 14px;
}
.wb-stat {
  background: rgba(255,255,255,.18);
  border: 1px solid rgba(255,255,255,.25);
  border-radius: 16px;
  padding: 16px 20px;
  text-align: center;
  backdrop-filter: blur(10px);
}
.wb-stat-val {
  font-family: 'Playfair Display', serif;
  font-size: 1.7rem; font-weight: 900; color: #fff; line-height: 1;
}
.wb-stat-lbl { font-size: .72rem; color: rgba(255,255,255,.72); margin-top: 4px; }

/* ── PRODUCT GRID ── */
.product-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; }
.product-card {
  background: var(--light);
  border: 1px solid var(--border);
  border-radius: 16px;
  padding: 16px;
  display: flex; flex-direction: column; gap: 10px;
  transition: transform .2s, box-shadow .2s;
  cursor: pointer;
}
.product-card:hover { transform: translateY(-3px); box-shadow: 0 10px 28px rgba(200,17,90,.1); }
.prod-img {
  width: 100%; aspect-ratio: 1;
  background: var(--soft);
  border-radius: 12px;
  display: flex; align-items: center; justify-content: center;
  font-size: 2.2rem;
}
.prod-name { font-size: .86rem; font-weight: 700; color: #111; }
.prod-price { font-size: .82rem; font-weight: 700; color: var(--orange); }
.prod-stock { font-size: .72rem; color: var(--muted); }

@keyframes fadeUp {
  from { opacity:0; transform:translateY(16px); }
  to   { opacity:1; transform:translateY(0); }
}
.page-content > * {
  animation: fadeUp .5s ease both;
}
.page-content > *:nth-child(1) { animation-delay: .05s; }
.page-content > *:nth-child(2) { animation-delay: .12s; }
.page-content > *:nth-child(3) { animation-delay: .19s; }
.page-content > *:nth-child(4) { animation-delay: .26s; }
.page-content > *:nth-child(5) { animation-delay: .33s; }
</style>
</head>
<body>

<!-- ══════════════════════════════════
     SIDEBAR
══════════════════════════════════ -->
<aside class="sidebar">
  <div class="sidebar-logo">
    <img src="assets/logo.png" alt="SheRise">
  </div>

  <div class="sidebar-user">
    <div class="sidebar-avatar">👩🏾</div>
    <div>
      <div class="sidebar-user-name">Djénia</div>
      <div class="sidebar-user-role">Entrepreneure</div>
    </div>
  </div>

  <nav class="sidebar-nav">
    <a href="#" class="nav-item active">
      <span class="nav-icon">🏠</span> Accueil
    </a>
    <a href="#" class="nav-item">
      <span class="nav-icon">🛍️</span> Ma Boutique
      <span class="nav-badge">3</span>
    </a>
    <a href="#" class="nav-item">
      <span class="nav-icon">📦</span> Commandes
      <span class="nav-badge">5</span>
    </a>
    <a href="#" class="nav-item">
      <span class="nav-icon">🎓</span> Formations
    </a>
    <a href="#" class="nav-item">
      <span class="nav-icon">🤝</span> Communauté
      <span class="nav-badge">2</span>
    </a>
    <a href="#" class="nav-item">
      <span class="nav-icon">💰</span> Financement
    </a>
    <a href="#" class="nav-item">
      <span class="nav-icon">👤</span> Mon Profil
    </a>
    <a href="#" class="nav-item">
      <span class="nav-icon">📊</span> Statistiques
    </a>
    <a href="#" class="nav-item">
      <span class="nav-icon">⚙️</span> Paramètres
    </a>
  </nav>

  <div class="sidebar-footer">
    <div class="sidebar-logout">
      <span>🚪</span> Se déconnecter
    </div>
  </div>
</aside>

<!-- ══════════════════════════════════
     MAIN
══════════════════════════════════ -->
<main class="main">

  <!-- TOPBAR -->
  <header class="topbar">
    <div class="topbar-greeting">
      <div class="topbar-hi">Bonjour, <em>Djénia</em> 👋</div>
      <div class="topbar-date">Jeudi 12 mars 2026 — Bonne journée !</div>
    </div>
    <div class="topbar-right">
      <input class="topbar-search" type="text" placeholder="🔍  Rechercher…">
      <div class="topbar-icon-btn">
        💬
        <span class="notif-dot"></span>
      </div>
      <div class="topbar-icon-btn">
        🔔
        <span class="notif-dot"></span>
      </div>
      <div class="topbar-avatar">👩🏾</div>
    </div>
  </header>

  <!-- PAGE CONTENT -->
  <div class="page-content">

    <!-- ── WELCOME BANNER ── -->
    <div class="welcome-banner">
      <div class="wb-left">
        <div class="wb-label">Tableau de bord</div>
        <div class="wb-title">Bienvenue sur<br>votre espace SheRise</div>
        <div class="wb-sub">Vous avez 5 nouvelles commandes et une opportunité de financement qui vous attend. Continuez comme ça, Djénia !</div>
        <button class="wb-btn">Voir mes commandes →</button>
      </div>
      <div class="wb-right">
        <div class="wb-stat">
          <div class="wb-stat-val">152k</div>
          <div class="wb-stat-lbl">FCFA ce mois</div>
        </div>
        <div class="wb-stat">
          <div class="wb-stat-val">38</div>
          <div class="wb-stat-lbl">Commandes</div>
        </div>
        <div class="wb-stat">
          <div class="wb-stat-val">4.9★</div>
          <div class="wb-stat-lbl">Note boutique</div>
        </div>
      </div>
    </div>

    <!-- ── KPI CARDS ── -->
    <div class="kpi-grid">
      <div class="kpi-card featured">
        <div class="kpi-top">
          <div class="kpi-icon">💵</div>
          <span class="kpi-trend up">+28%</span>
        </div>
        <div class="kpi-value">152 000</div>
        <div class="kpi-label">Revenus ce mois (FCFA)</div>
      </div>
      <div class="kpi-card">
        <div class="kpi-top">
          <div class="kpi-icon">📦</div>
          <span class="kpi-trend up">+12%</span>
        </div>
        <div class="kpi-value">38</div>
        <div class="kpi-label">Commandes du mois</div>
      </div>
      <div class="kpi-card">
        <div class="kpi-top">
          <div class="kpi-icon">👁️</div>
          <span class="kpi-trend up">+41%</span>
        </div>
        <div class="kpi-value">1 240</div>
        <div class="kpi-label">Vues sur ma boutique</div>
      </div>
      <div class="kpi-card">
        <div class="kpi-top">
          <div class="kpi-icon">⭐</div>
          <span class="kpi-trend up">+0.2</span>
        </div>
        <div class="kpi-value">4.9</div>
        <div class="kpi-label">Note moyenne boutique</div>
      </div>
    </div>

    <!-- ── CHART + ORDERS ── -->
    <div class="two-col">

      <!-- Chart ventes -->
      <div class="card">
        <div class="card-header">
          <div class="card-title">📈 Ventes — 7 derniers jours</div>
          <a href="#" class="card-link">Voir tout</a>
        </div>
        <div class="chart-area">
          <div class="chart-col"><div class="chart-bar" style="height:38%"></div><div class="chart-label">Lun</div></div>
          <div class="chart-col"><div class="chart-bar" style="height:62%"></div><div class="chart-label">Mar</div></div>
          <div class="chart-col"><div class="chart-bar" style="height:48%"></div><div class="chart-label">Mer</div></div>
          <div class="chart-col"><div class="chart-bar" style="height:75%"></div><div class="chart-label">Jeu</div></div>
          <div class="chart-col"><div class="chart-bar" style="height:55%"></div><div class="chart-label">Ven</div></div>
          <div class="chart-col"><div class="chart-bar" style="height:88%"></div><div class="chart-label">Sam</div></div>
          <div class="chart-col"><div class="chart-bar today" style="height:100%"></div><div class="chart-label" style="color:var(--crimson);font-weight:700;">Auj.</div></div>
        </div>
      </div>

      <!-- Commandes récentes -->
      <div class="card">
        <div class="card-header">
          <div class="card-title">📦 Commandes récentes</div>
          <a href="#" class="card-link">Tout voir</a>
        </div>
        <div class="order-list">
          <div class="order-item">
            <div class="order-item-icon">👗</div>
            <div>
              <div class="order-name">Robe Wax Premium</div>
              <div class="order-sub">Kofi Ama • il y a 12 min</div>
            </div>
            <div class="order-price">12 500 FCFA</div>
            <span class="order-badge ob-green">Payé</span>
          </div>
          <div class="order-item">
            <div class="order-item-icon">💼</div>
            <div>
              <div class="order-name">Sac Cuir Artisanal</div>
              <div class="order-sub">Mawuli A. • il y a 1h</div>
            </div>
            <div class="order-price">24 000 FCFA</div>
            <span class="order-badge ob-orange">En transit</span>
          </div>
          <div class="order-item">
            <div class="order-item-icon">🧴</div>
            <div>
              <div class="order-name">Soin Naturel Karité</div>
              <div class="order-sub">Efua K. • hier</div>
            </div>
            <div class="order-price">8 000 FCFA</div>
            <span class="order-badge ob-green">Livré</span>
          </div>
          <div class="order-item">
            <div class="order-item-icon">🍯</div>
            <div>
              <div class="order-name">Miel Artisanal Bio</div>
              <div class="order-sub">Aya S. • hier</div>
            </div>
            <div class="order-price">5 500 FCFA</div>
            <span class="order-badge ob-pink">En attente</span>
          </div>
        </div>
      </div>

    </div>

    <!-- ── FORMATIONS + ACTIONS RAPIDES + NOTIFS ── -->
    <div class="two-col">

      <!-- Formations -->
      <div class="card">
        <div class="card-header">
          <div class="card-title">🎓 Mes formations en cours</div>
          <a href="#" class="card-link">Catalogue</a>
        </div>
        <div class="form-list">
          <div class="form-item">
            <div class="form-item-top">
              <span class="form-item-name">Marketing Digital pour Entrepreneures</span>
              <span class="form-item-pct">72%</span>
            </div>
            <div class="prog-bg"><div class="prog-fill" style="width:72%"></div></div>
          </div>
          <div class="form-item">
            <div class="form-item-top">
              <span class="form-item-name">Gestion financière de votre activité</span>
              <span class="form-item-pct">45%</span>
            </div>
            <div class="prog-bg"><div class="prog-fill" style="width:45%"></div></div>
          </div>
          <div class="form-item">
            <div class="form-item-top">
              <span class="form-item-name">Vente en ligne & réseaux sociaux</span>
              <span class="form-item-pct">90%</span>
            </div>
            <div class="prog-bg"><div class="prog-fill" style="width:90%"></div></div>
          </div>
          <div class="form-item">
            <div class="form-item-top">
              <span class="form-item-name">Accès au financement & ONG</span>
              <span class="form-item-pct">20%</span>
            </div>
            <div class="prog-bg"><div class="prog-fill" style="width:20%"></div></div>
          </div>
        </div>
      </div>

      <!-- Activités récentes / Feed -->
      <div class="card">
        <div class="card-header">
          <div class="card-title">🔔 Activité récente</div>
          <a href="#" class="card-link">Tout voir</a>
        </div>
        <div class="feed-list">
          <div class="feed-item">
            <div class="feed-ico">💰</div>
            <div class="feed-body">
              <div class="feed-title">Opportunité de financement</div>
              <div class="feed-sub">ONG She Invest — 500 000 FCFA disponibles pour votre projet</div>
              <div class="feed-time">Il y a 30 min</div>
            </div>
          </div>
          <div class="feed-item">
            <div class="feed-ico">💬</div>
            <div class="feed-body">
              <div class="feed-title">Réponse de votre mentor</div>
              <div class="feed-sub">Fatou D. a répondu à votre question sur la gestion des stocks</div>
              <div class="feed-time">Il y a 2h</div>
            </div>
          </div>
          <div class="feed-item">
            <div class="feed-ico">🌟</div>
            <div class="feed-body">
              <div class="feed-title">Nouvel avis 5 étoiles</div>
              <div class="feed-sub">Kofi Ama a laissé un avis sur votre boutique</div>
              <div class="feed-time">Il y a 3h</div>
            </div>
          </div>
          <div class="feed-item">
            <div class="feed-ico">🤝</div>
            <div class="feed-body">
              <div class="feed-title">Communauté — nouveau sujet</div>
              <div class="feed-sub">"Comment augmenter ses ventes en ligne ?" — 12 réponses</div>
              <div class="feed-time">Il y a 5h</div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- ── MES PRODUITS ── -->
    <div class="card">
      <div class="card-header">
        <div class="card-title">🛍️ Mes produits</div>
        <a href="#" class="card-link">Gérer la boutique →</a>
      </div>
      <div class="product-grid">
        <div class="product-card">
          <div class="prod-img">👗</div>
          <div class="prod-name">Robe Wax Premium</div>
          <div class="prod-price">12 500 FCFA</div>
          <div class="prod-stock">En stock · 8 unités</div>
        </div>
        <div class="product-card">
          <div class="prod-img">💼</div>
          <div class="prod-name">Sac Cuir Artisanal</div>
          <div class="prod-price">24 000 FCFA</div>
          <div class="prod-stock">En stock · 3 unités</div>
        </div>
        <div class="product-card">
          <div class="prod-img">🧴</div>
          <div class="prod-name">Soin Naturel Karité</div>
          <div class="prod-price">8 000 FCFA</div>
          <div class="prod-stock">En stock · 15 unités</div>
        </div>
      </div>
    </div>

  </div><!-- end page-content -->
</main>

</body>
</html>