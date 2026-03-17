<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SheRise Services</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/services.css">
</head>
<body>

<!-- ══ NAVBAR ══ -->
<nav>
  <div class="nav-logo">
    <img src="assets/logo.png" alt="SheRise">
  </div>
  <ul class="nav-links">
    <li><a href="index.php">Accueil</a></li>
    <li><a href="services.php" class="active">Services</a></li>
    <li><a href="abonnement.php">Abonnement</a></li>
    <li><a href="about.php">A propos</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
  <div class="nav-right">
    <button class="nav-login" onclick="window.location.href='login.php'">Se connecter</button>
    <button class="nav-cta" onclick="window.location.href='begin.php'">Commencer →</button>
  </div>
</nav>

<!-- ══ HERO — FULLSCREEN BACKGROUND ══ -->
<section class="services-hero">

  <!-- Background image -->
  <div class="hero-bg">
    <img src="assets/home5.png" alt="SheRise Services"
         onerror="this.style.display='none'">
    <!-- If no image, fallback gradient -->
    <style>
      .hero-bg img[style*="display:none"] ~ * { display:none; }
      .hero-bg:not(:has(img:not([style*="display:none"])))::before {
        content:'';
        position:absolute; inset:0;
        background: linear-gradient(135deg, #1a0a14 0%, #2d0d1e 40%, #1a0810 100%);
      }
    </style>
  </div>
  <div class="hero-orb"></div>
  <div class="hero-bg-bottom"></div>

  <div class="hero-left-col">
    <div class="hero-content">
      <h1>Tous les outils<br>pour <em>réussir</em></h1>
      <p>SheRise regroupe en un seul endroit tout ce dont une femme entrepreneure africaine a besoin de la vente en ligne aux formations, du financement au mentorat.</p>
      <div class="hero-btns">
        <button class="btn-primary" onclick="window.location.href='begin.php'">Démarrer gratuitement →</button>
        <button class="btn-ghost-dark" onclick="document.getElementById('services-tabs').scrollIntoView({behavior:'smooth'})">Explorer les services</button>
      </div>
    </div>

    <!-- Stats strip at bottom of hero -->
    <div class="hero-stats-strip">
      <div class="hstat">
        <div class="hstat-val">5 000+</div>
        <div class="hstat-lbl">Entrepreneures actives</div>
      </div>
      <div class="hstat">
        <div class="hstat-val">120+</div>
        <div class="hstat-lbl">Formations</div>
      </div>
      <div class="hstat">
        <div class="hstat-val">40+</div>
        <div class="hstat-lbl">Partenaires</div>
      </div>
      <div class="hstat">
        <div class="hstat-val">4.9★</div>
        <div class="hstat-lbl">Note boutiques</div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ══ TABS ══ -->
<section class="tabs-section" id="services-tabs">
  <div class="tabs-bar">
    <button class="tab-btn active" onclick="showTab('marketplace',this)"><span class="tab-icon">🛍️</span> Marketplace</button>
    <button class="tab-btn" onclick="showTab('dashboard',this)"><span class="tab-icon">📊</span> Tableau de bord</button>
    <button class="tab-btn" onclick="showTab('formations',this)"><span class="tab-icon">🎓</span> Formations</button>
    <button class="tab-btn" onclick="showTab('financement',this)"><span class="tab-icon">💰</span> Financement</button>
    <button class="tab-btn" onclick="showTab('communaute',this)"><span class="tab-icon">🤝</span> Communauté</button>
    <button class="tab-btn" onclick="showTab('profil',this)"><span class="tab-icon">👤</span> Profil Pro</button>
  </div>
</section>

<!-- ══ SERVICE : MARKETPLACE ══ -->
<section class="service-section active" id="tab-marketplace">
  <div class="svc-grid">
    <div class="svc-text">
      <div class="section-label">Marketplace</div>
      <h2 class="section-title">Vendez vos produits<br>au monde <em>entier</em></h2>
      <p class="section-sub">Créez votre boutique en ligne en quelques minutes et commencez à recevoir des commandes dès aujourd'hui. Sans compétences techniques requises.</p>

      <div class="svc-features">
        <div class="svc-feat">
          <div class="svc-feat-ico">🛒</div>
          <div>
            <div class="svc-feat-name">Boutique personnalisée</div>
            <div class="svc-feat-desc">Page dédiée à votre activité avec vos couleurs, photos et description.</div>
          </div>
        </div>
        <div class="svc-feat">
          <div class="svc-feat-ico">💳</div>
          <div>
            <div class="svc-feat-name">Paiement sécurisé intégré</div>
            <div class="svc-feat-desc">Mobile Money, carte bancaire, virement — tous les modes de paiement locaux.</div>
          </div>
        </div>
        <div class="svc-feat">
          <div class="svc-feat-ico">📦</div>
          <div>
            <div class="svc-feat-name">Gestion des commandes</div>
            <div class="svc-feat-desc">Suivez chaque commande en temps réel, gérez les livraisons et les retours.</div>
          </div>
        </div>
        <div class="svc-feat">
          <div class="svc-feat-ico">🔍</div>
          <div>
            <div class="svc-feat-name">Visibilité & référencement</div>
            <div class="svc-feat-desc">Vos produits apparaissent dans les recherches de milliers de clients.</div>
          </div>
        </div>
      </div>
      <button class="btn-svc" onclick="window.location.href='begin.php'">Créer ma boutique →</button>
    </div>

    <!-- ── Atelier Djénia — carte avec grande photo ── -->
    <div class="svc-visual">
      <div class="svc-card-deco"></div>

      <!-- Boutique card — image plein cadre, aucun texte -->
      <div class="svc-card-boutique" style="border-radius:26px; overflow:hidden; position:relative; z-index:2; box-shadow:0 20px 60px rgba(200,17,90,.09), 0 2px 8px rgba(0,0,0,.05); aspect-ratio:4/5; min-height:480px;">
        <img
          src="assets/service.png"
          alt="Atelier Djénia"
          style="width:100%; height:100%; object-fit:cover; display:block; transition:transform .5s ease;"
          onmouseover="this.style.transform='scale(1.04)'"
          onmouseout="this.style.transform='scale(1)'"
          onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
        >
      </div>
    </div>
  </div>

  <div class="sub-grid">
    <div class="sub-card"><div class="sub-card-icon">🌍</div><h4>Vente locale & internationale</h4><p>Atteignez des clients dans toute l'Afrique et au-delà grâce à notre marketplace transfrontalière.</p></div>
    <div class="sub-card"><div class="sub-card-icon">📸</div><h4>Galerie photos & vidéos</h4><p>Mettez en valeur vos produits avec une galerie visuelle professionnelle facilement configurable.</p></div>
    <div class="sub-card"><div class="sub-card-icon">⭐</div><h4>Avis & évaluations</h4><p>Construisez votre réputation grâce aux avis vérifiés de vos clients et augmentez votre confiance.</p></div>
    <div class="sub-card"><div class="sub-card-icon">🏷️</div><h4>Promotions & codes promo</h4><p>Créez des offres spéciales, soldes saisonnières et codes de réduction pour fidéliser vos clients.</p></div>
    <div class="sub-card"><div class="sub-card-icon">🚚</div><h4>Livraison intégrée</h4><p>Partenariats avec les services de livraison locaux pour une expérience fluide de bout en bout.</p></div>
    <div class="sub-card"><div class="sub-card-icon">📊</div><h4>Analyses des ventes</h4><p>Visualisez vos produits best-sellers, saisonnalités et comportements d'achat de vos clients.</p></div>
  </div>
</section>

<!-- ══ SERVICE : DASHBOARD ══ -->
<section class="service-section" id="tab-dashboard">
  <div class="svc-grid reverse">
    <div class="svc-text">
      <div class="section-label">Tableau de bord</div>
      <h2 class="section-title">Pilotez votre activité<br>en temps <em>réel</em></h2>
      <p class="section-sub">Un espace de gestion complet qui centralise toutes vos données — ventes, commandes, formations, messages — pour prendre les bonnes décisions.</p>
      <div class="svc-features">
        <div class="svc-feat"><div class="svc-feat-ico">📈</div><div><div class="svc-feat-name">Statistiques en direct</div><div class="svc-feat-desc">Revenus, nombre de commandes, taux de conversion et vues boutique en temps réel.</div></div></div>
        <div class="svc-feat"><div class="svc-feat-ico">🔔</div><div><div class="svc-feat-name">Notifications intelligentes</div><div class="svc-feat-desc">Alertes instantanées pour les nouvelles commandes, messages et opportunités.</div></div></div>
        <div class="svc-feat"><div class="svc-feat-ico">📅</div><div><div class="svc-feat-name">Agenda & rappels</div><div class="svc-feat-desc">Gérez vos rendez-vous mentors, échéances de formation et tâches importantes.</div></div></div>
      </div>
      <button class="btn-svc" onclick="window.location.href='dashboard.html'">Voir mon tableau de bord →</button>
    </div>
    <div class="svc-visual">
      <div class="svc-card-deco"></div>
      <div class="fdeco fd1"><div class="fdeco-val">+340%</div><div class="fdeco-lbl">Croissance moyenne</div></div>
      <div class="svc-card-main">
        <div style="font-size:.72rem;text-transform:uppercase;letter-spacing:.1em;color:#bbb;margin-bottom:4px;">Activité récente</div>
        <div style="font-family:'Playfair Display',serif;font-size:1.5rem;font-weight:900;color:#111;margin-bottom:16px;">Votre boutique 🌸</div>
        <div class="svc-row"><div class="svc-row-ico">🛍️</div><div><div class="svc-row-name">Nouvelle commande</div><div class="svc-row-sub">Robe Wax – Kofi Ama</div></div><span class="svc-row-badge bg">Payé</span></div>
        <div class="svc-row"><div class="svc-row-ico">🎓</div><div><div class="svc-row-name">Formation Marketing</div><div class="svc-row-sub">Module 4 débloqué</div></div><span class="svc-row-badge bo">En cours</span></div>
        <div class="svc-row"><div class="svc-row-ico">💬</div><div><div class="svc-row-name">Message mentor</div><div class="svc-row-sub">Réponse de Fatou D.</div></div><span class="svc-row-badge bp">Nouveau</span></div>
        <div class="svc-row"><div class="svc-row-ico">💰</div><div><div class="svc-row-name">Opportunité financement</div><div class="svc-row-sub">ONG She Invest – 500k FCFA</div></div><span class="svc-row-badge bg">Ouvert</span></div>
      </div>
      <div class="fdeco fd2"><div class="svc-row-name" style="font-size:.82rem;font-weight:700;color:#111">5 200 entrepreneures actives</div></div>
    </div>
  </div>
  <div class="sub-grid">
    <div class="sub-card"><div class="sub-card-icon">💹</div><h4>Graphiques de performance</h4><p>Visualisez l'évolution de vos ventes semaine après semaine avec des graphiques clairs.</p></div>
    <div class="sub-card"><div class="sub-card-icon">📋</div><h4>Gestion des stocks</h4><p>Suivez vos niveaux de stock en temps réel et recevez des alertes avant rupture.</p></div>
    <div class="sub-card"><div class="sub-card-icon">👥</div><h4>Base clients</h4><p>Consultez l'historique de vos clients, leurs commandes passées et leurs préférences.</p></div>
    <div class="sub-card"><div class="sub-card-icon">📤</div><h4>Export & rapports</h4><p>Téléchargez vos données en PDF ou Excel pour votre comptabilité et vos bilans.</p></div>
    <div class="sub-card"><div class="sub-card-icon">🔗</div><h4>Intégrations</h4><p>Connectez WhatsApp Business, réseaux sociaux et outils comptables en quelques clics.</p></div>
    <div class="sub-card"><div class="sub-card-icon">📱</div><h4>Version mobile</h4><p>Gérez tout depuis votre téléphone avec l'application SheRise disponible sur iOS et Android.</p></div>
  </div>
</section>

<!-- ══ SERVICE : FORMATIONS ══ -->
<section class="service-section" id="tab-formations">
  <div class="svc-grid">
    <div class="svc-text">
      <div class="section-label">Formations</div>
      <h2 class="section-title">Apprenez, grandissez,<br><em>réussissez</em></h2>
      <p class="section-sub">Un catalogue de plus de 120 formations créées par des expertes africaines et internationales — accessibles en ligne, à votre rythme.</p>
      <div class="svc-features">
        <div class="svc-feat"><div class="svc-feat-ico">🎬</div><div><div class="svc-feat-name">Vidéos & modules interactifs</div><div class="svc-feat-desc">Contenus de qualité studio avec quiz, exercices pratiques et ressources téléchargeables.</div></div></div>
        <div class="svc-feat"><div class="svc-feat-ico">🏆</div><div><div class="svc-feat-name">Certificats reconnus</div><div class="svc-feat-desc">Obtenez des certificats valorisables dans votre profil et auprès des partenaires financeurs.</div></div></div>
        <div class="svc-feat"><div class="svc-feat-ico">📶</div><div><div class="svc-feat-name">Accès hors-ligne</div><div class="svc-feat-desc">Téléchargez vos modules et continuez d'apprendre même sans connexion internet.</div></div></div>
      </div>
      <button class="btn-svc" onclick="window.location.href='commencer.html'">Explorer le catalogue →</button>
    </div>
    <div class="svc-visual">
      <div class="svc-card-deco"></div>
      <div class="fdeco fd1"><div class="svc-row-name" style="font-size:.82rem;font-weight:700;color:#111">🏆 Certificat obtenu !</div><div class="svc-row-sub" style="font-size:.7rem;color:#aaa">Marketing Digital</div></div>
      <div class="svc-card-main">
        <div style="font-size:.72rem;text-transform:uppercase;letter-spacing:.1em;color:#bbb;margin-bottom:14px;">Mes formations</div>
        <div class="svc-row"><div class="svc-row-ico">📱</div><div><div class="svc-row-name">Marketing Digital</div><div class="svc-row-sub">72% complété · 8 modules</div></div><span class="svc-row-badge bo">En cours</span></div>
        <div class="svc-row"><div class="svc-row-ico">💰</div><div><div class="svc-row-name">Gestion Financière</div><div class="svc-row-sub">45% complété · 12 modules</div></div><span class="svc-row-badge bo">En cours</span></div>
        <div class="svc-row"><div class="svc-row-ico">🎨</div><div><div class="svc-row-name">Branding & Design</div><div class="svc-row-sub">100% · Certifié ✓</div></div><span class="svc-row-badge bg">Terminé</span></div>
        <div class="svc-row"><div class="svc-row-ico">🛍️</div><div><div class="svc-row-name">E-commerce Avancé</div><div class="svc-row-sub">Nouveau · 10 modules</div></div><span class="svc-row-badge bp">Nouveau</span></div>
      </div>
      <div class="fdeco fd2"><div class="fdeco-val">120+</div><div class="fdeco-lbl">Formations disponibles</div></div>
    </div>
  </div>
  <div class="sub-grid">
    <div class="sub-card"><div class="sub-card-icon">🌐</div><h4>Toutes disciplines</h4><p>Marketing, vente, finance, leadership, design, e-commerce, droit des affaires et bien plus.</p></div>
    <div class="sub-card"><div class="sub-card-icon">🎤</div><h4>Formateurs experts</h4><p>Des professionnelles reconnues qui ont elles-mêmes réussi leur parcours entrepreneurial.</p></div>
    <div class="sub-card"><div class="sub-card-icon">🗓️</div><h4>Webinaires en direct</h4><p>Sessions live interactives avec les formateurs pour poser vos questions en temps réel.</p></div>
    <div class="sub-card"><div class="sub-card-icon">👯</div><h4>Groupes d'étude</h4><p>Apprenez avec d'autres entrepreneures, partagez vos expériences et avancez ensemble.</p></div>
    <div class="sub-card"><div class="sub-card-icon">🔁</div><h4>Accès à vie</h4><p>Une fois achetée, la formation vous appartient — revenez la consulter autant de fois que vous voulez.</p></div>
    <div class="sub-card"><div class="sub-card-icon">🌍</div><h4>En français & langues locales</h4><p>Contenu disponible en français, anglais, et prochainement en Ewe, Dioula et Wolof.</p></div>
  </div>
</section>

<!-- ══ SERVICE : FINANCEMENT ══ -->
<section class="service-section" id="tab-financement">
  <div class="svc-grid reverse">
    <div class="svc-text">
      <div class="section-label">Financement</div>
      <h2 class="section-title">Accédez aux fonds<br>pour <em>grandir</em></h2>
      <p class="section-sub">SheRise vous connecte directement aux investisseurs, ONG et programmes de subventions qui soutiennent les femmes entrepreneures africaines.</p>
      <div class="svc-features">
        <div class="svc-feat"><div class="svc-feat-ico">🏦</div><div><div class="svc-feat-name">Microcrédits & subventions</div><div class="svc-feat-desc">Accédez à des financements allant de 50 000 à plusieurs millions de FCFA.</div></div></div>
        <div class="svc-feat"><div class="svc-feat-ico">📝</div><div><div class="svc-feat-name">Dossier guidé</div><div class="svc-feat-desc">Construisez votre dossier de financement étape par étape avec nos modèles prêts à l'emploi.</div></div></div>
        <div class="svc-feat"><div class="svc-feat-ico">🤝</div><div><div class="svc-feat-name">Mise en relation directe</div><div class="svc-feat-desc">Entrez en contact direct avec les décideurs des ONG et fonds d'investissement partenaires.</div></div></div>
      </div>
      <button class="btn-svc" onclick="window.location.href='commencer.html'">Voir les opportunités →</button>
    </div>
    <div class="svc-visual">
      <div class="svc-card-deco"></div>
      <div class="fdeco fd1"><div class="fdeco-val">40+</div><div class="fdeco-lbl">Partenaires financeurs</div></div>
      <div class="svc-card-main">
        <div style="font-size:.72rem;text-transform:uppercase;letter-spacing:.1em;color:#bbb;margin-bottom:14px;">Opportunités disponibles</div>
        <div class="svc-row"><div class="svc-row-ico">🏢</div><div><div class="svc-row-name">ONG She Invest</div><div class="svc-row-sub">Jusqu'à 500 000 FCFA</div></div><span class="svc-row-badge bg">Ouvert</span></div>
        <div class="svc-row"><div class="svc-row-ico">🌍</div><div><div class="svc-row-name">Fonds AFD Women</div><div class="svc-row-sub">Jusqu'à 2 000 000 FCFA</div></div><span class="svc-row-badge bg">Ouvert</span></div>
        <div class="svc-row"><div class="svc-row-ico">💎</div><div><div class="svc-row-name">Microcrédit BSIC</div><div class="svc-row-sub">200 000 – 1 000 000 FCFA</div></div><span class="svc-row-badge bo">Bientôt</span></div>
        <div class="svc-row"><div class="svc-row-ico">🚀</div><div><div class="svc-row-name">Accélérateur Orange</div><div class="svc-row-sub">Programme + 5M FCFA</div></div><span class="svc-row-badge bp">Candidature</span></div>
      </div>
      <div class="fdeco fd2"><div class="svc-row-name" style="font-size:.82rem;font-weight:700;color:#111">12 dossiers acceptés ce mois</div></div>
    </div>
  </div>
  <div class="sub-grid">
    <div class="sub-card"><div class="sub-card-icon">📊</div><h4>Scoring & éligibilité</h4><p>Découvrez en 5 minutes quelles opportunités correspondent à votre profil et votre activité.</p></div>
    <div class="sub-card"><div class="sub-card-icon">📄</div><h4>Business plan guidé</h4><p>Construisez votre plan d'affaires avec nos modèles validés par des investisseurs.</p></div>
    <div class="sub-card"><div class="sub-card-icon">🔔</div><h4>Alertes personnalisées</h4><p>Soyez notifiée dès qu'une nouvelle opportunité correspondant à votre profil est disponible.</p></div>
    <div class="sub-card"><div class="sub-card-icon">🎓</div><h4>Formation financement</h4><p>Apprenez à monter un dossier solide et à convaincre les investisseurs avec nos formations dédiées.</p></div>
    <div class="sub-card"><div class="sub-card-icon">🤝</div><h4>Réseau d'investisseurs</h4><p>Accédez à notre annuaire d'investisseurs actifs dans l'entrepreneuriat féminin africain.</p></div>
    <div class="sub-card"><div class="sub-card-icon">✅</div><h4>Suivi de candidature</h4><p>Suivez l'avancement de chaque dossier et recevez les retours directement sur la plateforme.</p></div>
  </div>
</section>

<!-- ══ SERVICE : COMMUNAUTÉ ══ -->
<section class="service-section" id="tab-communaute">
  <div class="svc-grid">
    <div class="svc-text">
      <div class="section-label">Communauté & Mentorat</div>
      <h2 class="section-title">Ensemble, on va<br><em>plus loin</em></h2>
      <p class="section-sub">Rejoignez une communauté vivante de femmes qui s'entraident, partagent leurs expériences et s'élèvent mutuellement vers le succès.</p>
      <div class="svc-features">
        <div class="svc-feat"><div class="svc-feat-ico">💬</div><div><div class="svc-feat-name">Forum & groupes thématiques</div><div class="svc-feat-desc">Échangez sur des sujets précis — mode, beauté, alimentation, tech, finance, et plus.</div></div></div>
        <div class="svc-feat"><div class="svc-feat-ico">🧑‍🏫</div><div><div class="svc-feat-name">Mentorat personnalisé</div><div class="svc-feat-desc">Trouvez une mentore expérimentée dans votre domaine et bénéficiez de son accompagnement.</div></div></div>
        <div class="svc-feat"><div class="svc-feat-ico">🎉</div><div><div class="svc-feat-name">Événements & meetups</div><div class="svc-feat-desc">Participez à des rencontres virtuelles et en présentiel organisées par SheRise et ses partenaires.</div></div></div>
      </div>
      <button class="btn-svc" onclick="window.location.href='commencer.html'">Rejoindre la communauté →</button>
    </div>
    <div class="svc-visual">
      <div class="svc-card-deco"></div>
      <div class="fdeco fd1"><div class="svc-row-name" style="font-size:.82rem;font-weight:700;color:#111">🌟 Mentor du mois</div><div class="svc-row-sub" style="font-size:.7rem;color:#aaa">Fatou D. · Marketing</div></div>
      <div class="svc-card-main">
        <div style="font-size:.72rem;text-transform:uppercase;letter-spacing:.1em;color:#bbb;margin-bottom:14px;">Activité communauté</div>
        <div class="svc-row"><div class="svc-row-ico">💬</div><div><div class="svc-row-name">Augmenter ses ventes en ligne</div><div class="svc-row-sub">24 réponses · il y a 2h</div></div><span class="svc-row-badge bp">Actif</span></div>
        <div class="svc-row"><div class="svc-row-ico">🤝</div><div><div class="svc-row-name">Session mentorat Fatou D.</div><div class="svc-row-sub">Demain à 10h00</div></div><span class="svc-row-badge bo">Confirmé</span></div>
        <div class="svc-row"><div class="svc-row-ico">🎉</div><div><div class="svc-row-name">Meetup Lomé — Mars 2026</div><div class="svc-row-sub">48 participantes inscrites</div></div><span class="svc-row-badge bg">Inscrit</span></div>
        <div class="svc-row"><div class="svc-row-ico">📣</div><div><div class="svc-row-name">Défi 30 jours de ventes</div><div class="svc-row-sub">312 participantes</div></div><span class="svc-row-badge bp">En cours</span></div>
      </div>
      <div class="fdeco fd2"><div class="fdeco-val">5k+</div><div class="fdeco-lbl">Membres actives</div></div>
    </div>
  </div>
  <div class="sub-grid">
    <div class="sub-card"><div class="sub-card-icon">🗺️</div><h4>Réseau africain</h4><p>Connectez-vous avec des entrepreneures de toute l'Afrique francophone et anglophone.</p></div>
    <div class="sub-card"><div class="sub-card-icon">🧭</div><h4>Annuaire des mentors</h4><p>Parcourez les profils de nos mentors certifiées et choisissez celle qui correspond à vos besoins.</p></div>
    <div class="sub-card"><div class="sub-card-icon">📡</div><h4>Lives & podcasts</h4><p>Accédez aux sessions en direct et au catalogue de podcasts inspirants de femmes qui ont réussi.</p></div>
    <div class="sub-card"><div class="sub-card-icon">🏅</div><h4>Système de badges</h4><p>Gagnez des badges en participant à la communauté, en terminant des formations et en aidant les autres.</p></div>
    <div class="sub-card"><div class="sub-card-icon">📰</div><h4>Newsletter communauté</h4><p>Recevez chaque semaine les meilleures histoires, conseils et opportunités de vos pairs.</p></div>
    <div class="sub-card"><div class="sub-card-icon">🤲</div><h4>Parrainage & entraide</h4><p>Parrainez une nouvelle membre et gagnez des avantages exclusifs sur votre abonnement.</p></div>
  </div>
</section>

<!-- ══ SERVICE : PROFIL PRO ══ -->
<section class="service-section" id="tab-profil">
  <div class="svc-grid reverse">
    <div class="svc-text">
      <div class="section-label">Profil Professionnel</div>
      <h2 class="section-title">Votre vitrine<br>digitale <em>complète</em></h2>
      <p class="section-sub">Créez un profil professionnel qui impressionne — vos clients, vos partenaires et les investisseurs en un seul coup d'œil.</p>
      <div class="svc-features">
        <div class="svc-feat"><div class="svc-feat-ico">🎨</div><div><div class="svc-feat-name">Design personnalisable</div><div class="svc-feat-desc">Choisissez vos couleurs, votre photo de couverture et la mise en page de votre profil.</div></div></div>
        <div class="svc-feat"><div class="svc-feat-ico">🔗</div><div><div class="svc-feat-name">Lien partageable</div><div class="svc-feat-desc">Votre profil a une URL unique à partager sur WhatsApp, Instagram et vos cartes de visite.</div></div></div>
        <div class="svc-feat"><div class="svc-feat-ico">📊</div><div><div class="svc-feat-name">Statistiques de visibilité</div><div class="svc-feat-desc">Suivez combien de personnes visitent votre profil et quels produits attirent le plus l'attention.</div></div></div>
      </div>
      <button class="btn-svc" onclick="window.location.href='commencer.html'">Créer mon profil →</button>
    </div>
    <div class="svc-visual">
      <div class="svc-card-deco"></div>
      <div class="fdeco fd1"><div class="svc-row-name" style="font-size:.82rem;font-weight:700;color:#111">👁️ 1 240 vues ce mois</div></div>
      <div class="svc-card-main">
        <div style="display:flex;align-items:center;gap:14px;margin-bottom:16px;">
          <div style="width:52px;height:52px;border-radius:50%;background:var(--grad);display:flex;align-items:center;justify-content:center;font-size:1.4rem;box-shadow:0 4px 14px rgba(200,17,90,.3);">👩🏾</div>
          <div>
            <div style="font-weight:800;font-size:1.05rem;color:#111;">Djénia Mensah</div>
            <div style="font-size:.78rem;color:#aaa;">Créatrice de mode · Lomé, Togo</div>
          </div>
        </div>
        <div class="svc-row"><div class="svc-row-ico">⭐</div><div><div class="svc-row-name">Note boutique</div><div class="svc-row-sub">Basée sur 47 avis</div></div><span class="svc-row-badge bg">4.9 / 5</span></div>
        <div class="svc-row"><div class="svc-row-ico">🏅</div><div><div class="svc-row-name">Badges & certifications</div><div class="svc-row-sub">Marketing · Branding · Ventes</div></div><span class="svc-row-badge bo">3 badges</span></div>
        <div class="svc-row"><div class="svc-row-ico">🛍️</div><div><div class="svc-row-name">Produits en vitrine</div><div class="svc-row-sub">12 produits actifs</div></div><span class="svc-row-badge bg">En ligne</span></div>
      </div>
      <div class="fdeco fd2"><div class="fdeco-val">TOP 10%</div><div class="fdeco-lbl">Vendeuses du mois</div></div>
    </div>
  </div>
  <div class="sub-grid">
    <div class="sub-card"><div class="sub-card-icon">📋</div><h4>CV entrepreneurial</h4><p>Présentez votre parcours, vos expériences et vos réussites de manière professionnelle.</p></div>
    <div class="sub-card"><div class="sub-card-icon">🖼️</div><h4>Portfolio visuel</h4><p>Une galerie photos et vidéos pour montrer vos créations et votre univers de marque.</p></div>
    <div class="sub-card"><div class="sub-card-icon">💌</div><h4>Messagerie directe</h4><p>Vos clients et partenaires peuvent vous contacter directement depuis votre profil.</p></div>
    <div class="sub-card"><div class="sub-card-icon">🔍</div><h4>Référencement SheRise</h4><p>Votre profil apparaît dans les recherches de la plateforme et sur les moteurs de recherche.</p></div>
    <div class="sub-card"><div class="sub-card-icon">🌟</div><h4>Profil vérifié</h4><p>Obtenez le badge "Vérifié" pour inspirer confiance à vos clients et partenaires.</p></div>
    <div class="sub-card"><div class="sub-card-icon">📊</div><h4>Rapport d'audience</h4><p>Comprenez qui visite votre profil — localisation, âge, sources — pour cibler mieux.</p></div>
  </div>
</section>

<div class="divider"></div>

<!-- ══ TESTIMONIALS ══ -->
<section class="testimonials">
  <div class="testimonials-header">
    <div class="section-label">Témoignages</div>
    <h2 class="section-title">Elles ont <em>transformé</em> leur activité</h2>
    <p class="section-sub">Des milliers de femmes entrepreneures font confiance à SheRise chaque jour.</p>
  </div>
  <div class="testi-grid">
    <div class="testi-card">
      <div class="testi-stars">★★★★★</div>
      <p class="testi-text">"Grâce à la Marketplace SheRise, j'ai triplé mes ventes en seulement 3 mois. La plateforme est intuitive et les clients viennent à moi !"</p>
      <div class="testi-author">
        <div class="testi-av">👩🏾</div>
        <div><div class="testi-name">Aminata K.</div><div class="testi-role">Créatrice de mode · Abidjan</div></div>
      </div>
    </div>
    <div class="testi-card featured">
      <div class="testi-stars">★★★★★</div>
      <p class="testi-text">"Le programme de financement m'a permis d'obtenir 800 000 FCFA pour développer mon atelier. Sans SheRise, je n'aurais jamais su que cette opportunité existait."</p>
      <div class="testi-author">
        <div class="testi-av">👩🏿</div>
        <div><div class="testi-name">Fatou D.</div><div class="testi-role">Artisane & Mentor · Dakar</div></div>
      </div>
    </div>
    <div class="testi-card">
      <div class="testi-stars">★★★★★</div>
      <p class="testi-text">"Les formations sont vraiment adaptées à notre réalité africaine. J'ai complété 5 certifications et mes clients font maintenant vraiment confiance à mon expertise."</p>
      <div class="testi-author">
        <div class="testi-av">👩🏽</div>
        <div><div class="testi-name">Efua K.</div><div class="testi-role">Coach Business · Lomé</div></div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ══ FAQ ══ -->
<section class="faq">
  <div class="faq-header">
    <div class="section-label">Questions fréquentes</div>
    <h2 class="section-title">Vous avez des <em>questions</em> ?</h2>
    <p class="section-sub">Tout ce que vous devez savoir sur les services SheRise.</p>
  </div>
  <div class="faq-grid">
    <div class="faq-item open" onclick="toggleFaq(this)">
      <div class="faq-q">Les services sont-ils vraiment gratuits au départ ? <span class="faq-arrow">▼</span></div>
      <div class="faq-a">Oui ! Le plan Starter est totalement gratuit et vous permet de créer votre boutique avec jusqu'à 5 produits, accéder à la communauté et suivre 2 formations. Vous passez au plan payant quand vous êtes prête à scaler.</div>
    </div>
    <div class="faq-item" onclick="toggleFaq(this)">
      <div class="faq-q">Est-ce que je peux utiliser SheRise depuis n'importe quel pays ? <span class="faq-arrow">▼</span></div>
      <div class="faq-a">Oui, SheRise est accessible partout en Afrique et dans le monde. Nos services de paiement sont optimisés pour les pays d'Afrique de l'Ouest et du Centre, avec prise en charge du Mobile Money local.</div>
    </div>
    <div class="faq-item" onclick="toggleFaq(this)">
      <div class="faq-q">Combien de temps faut-il pour créer ma boutique ? <span class="faq-arrow">▼</span></div>
      <div class="faq-a">Votre boutique peut être en ligne en moins de 15 minutes. Notre assistant de configuration vous guide pas à pas sans aucune compétence technique requise.</div>
    </div>
    <div class="faq-item" onclick="toggleFaq(this)">
      <div class="faq-q">Comment accéder aux opportunités de financement ? <span class="faq-arrow">▼</span></div>
      <div class="faq-a">Depuis votre tableau de bord, consultez la section Financement, remplissez votre profil entrepreneur, et le système vous suggère automatiquement les opportunités pour lesquelles vous êtes éligible.</div>
    </div>
    <div class="faq-item" onclick="toggleFaq(this)">
      <div class="faq-q">Les formations sont-elles disponibles en langues locales ? <span class="faq-arrow">▼</span></div>
      <div class="faq-a">Actuellement disponibles en français et anglais. Nous travaillons activement sur des versions en Ewe, Dioula, Wolof et Hausa — prévu pour fin 2026.</div>
    </div>
    <div class="faq-item" onclick="toggleFaq(this)">
      <div class="faq-q">Puis-je changer d'abonnement à tout moment ? <span class="faq-arrow">▼</span></div>
      <div class="faq-a">Absolument. Vous pouvez monter ou descendre d'offre à tout moment depuis vos paramètres. La facturation est ajustée au prorata du mois en cours, sans frais supplémentaires.</div>
    </div>
  </div>
</section>

<!-- ══ CTA ══ -->
<section class="cta-section">
  <div class="cta-inner">
    <h2>Prête à faire décoller<br>votre <em>activité</em> ?</h2>
    <p>Rejoignez des milliers de femmes entrepreneures africaines qui utilisent SheRise pour vendre, apprendre et grandir.</p>
    <button class="btn-white" onclick="window.location.href='commencer.html'">Commencer gratuitement →</button>
  </div>
</section>

<!-- ══ FOOTER ══ -->
<footer>
  <img src="assets/logo.png" alt="SheRise">
  <ul class="footer-links">
    <li><a href="sherise.html">Accueil</a></li>
    <li><a href="services.html">Services</a></li>
    <li><a href="sherise.html#abonnements">Abonnements</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="#">Politique de confidentialité</a></li>
  </ul>
  <div class="footer-copy">© 2026 SheRise. Tous droits réservés.</div>
</footer>

<script>
function showTab(id, btn) {
  document.querySelectorAll('.service-section').forEach(s => s.classList.remove('active'));
  document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
  document.getElementById('tab-' + id).classList.add('active');
  btn.classList.add('active');
  document.getElementById('services-tabs').scrollIntoView({ behavior:'smooth', block:'start' });
}

function toggleFaq(el) {
  const isOpen = el.classList.contains('open');
  document.querySelectorAll('.faq-item').forEach(f => f.classList.remove('open'));
  if (!isOpen) el.classList.add('open');
}
</script>
</body>
</html>