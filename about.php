<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SheRise À propos</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/about.css">
</head>
<body>

<!-- ══ NAVBAR ══ -->
<nav>
  <div class="nav-logo">
    <img src="assets/logo.png" alt="SheRise">
  </div>
  <ul class="nav-links">
    <li><a href="index.php">Accueil</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="abonnement.php">Abonnement</a></li>
    <li><a href="about.php" class="active">A propos</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
  <div class="nav-right">
    <button class="nav-login" onclick="window.location.href='login.php'">Se connecter</button>
    <button class="nav-cta" onclick="window.location.href='begin.php'">Commencer →</button>
  </div>
</nav>

<!-- ══ HERO ══ -->
<section class="hero">

  <!-- Colonne gauche : texte fondatrice -->
  <div class="hero-left">
    <div class="hero-eyebrow">
      <span class="hero-eyebrow-dot"></span>
      <span>Fondatrice & CEO · SheRise</span>
    </div>
    <h1>Djénia <em>TOUKOULA</em></h1>

    <p class="hero-bio-short">
      Entrepreneuse Centrafricaine passionnée par la tech et l'innovation, Djénia TOUKOULA a créé SheRise avec une conviction profonde : chaque femme africaine porte en elle le potentiel d'une entreprise qui change sa vie il lui faut simplement les bons outils pour l'exprimer.
    </p>

    <div class="expertise-tags">
      <span class="tag"><span class="tag-icon"></span> Tech & Numérique</span>
      <span class="tag"><span class="tag-icon"></span> Entrepreneuriat</span>
      <span class="tag"><span class="tag-icon"></span> Empowerment féminin</span>
    </div>
  </div>

  <!-- Colonne droite : photo pleine hauteur, forme naturelle préservée -->
  <div class="hero-right">
    <img
      src="assets/dje3.png"
      alt="Djénia TOUKOULA — Fondatrice SheRise"
      onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
    >
  </div>

</section>

<div class="divider"></div>

<!-- ══ BIO COMPLÈTE ══ -->
<section class="bio-section">
  <div class="bio-grid">

    <!-- Photo colonne sticky : portrait taille naturelle, non recadré -->
    <div class="bio-photo-col">
      <div class="bio-photo-frame">
        <img
          src="assets/dje3.png"
          alt="Djénia TOUKOULA"
          onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
        >
        <div class="bio-photo-frame-placeholder" style="display:none;">
          <div class="ph-txt">assets/dje1.png</div>
        </div>
      </div>

      <div class="bio-photo-badge">
        <div>
          <div class="bio-badge-name">Djénia TOUKOULA</div>
          <div class="bio-badge-role">Fondatrice & CEO · SheRise</div>
        </div>
        <div class="bio-badge-dot"></div>
      </div>
    </div>

    <!-- Texte biographie -->
    <div class="bio-text-col">
      <span class="section-label">Biographie</span>
      <h2>Djénia TOUKOULA</h2>
      <p class="bio-subtitle">Fondatrice & CEO de <strong>SheRise</strong> · Lomé, Togo</p>

      <p class="bio-para">
        Djénia TOUKOULA est une entrepreneuse Centrafricaine spécialisée dans la tech, l'innovation numérique et l'entrepreneuriat féminin. Originaire de Centrafrique, elle a construit son parcours à l'intersection de la technologie et du développement économique africain, animée par la certitude que le numérique est le levier le plus puissant pour transformer le quotidien des femmes du continent.
      </p>
      <p class="bio-para">
        Fort de son expérience dans l'écosystème entrepreneurial africain, elle observe un paradoxe persistant : des milliers de femmes talentueuses, créatives et déterminées se heurtent aux mêmes obstacles accès aux marchés, visibilité, financement, formation. C'est de ce constat qu'est née <strong>SheRise</strong>, une plateforme tout-en-un pensée et construite pour répondre précisément à ces besoins.
      </p>
      <p class="bio-para">
        Sous sa direction, SheRise est devenu en peu de temps un écosystème de référence pour les femmes entrepreneures d'Afrique francophone, réunissant plus de 5 000 membres actives, 40 partenaires institutionnels et plus de 120 formations spécialisées. Sa vision : faire de chaque femme africaine une entrepreneuse digitale souveraine.
      </p>

      <!-- Chiffres clés -->
      <div class="bio-highlights">
        <div class="bio-hl">
          <div class="bio-hl-val">5 000+</div>
          <div class="bio-hl-lbl">Membres SheRise</div>
        </div>
        <div class="bio-hl">
          <div class="bio-hl-val">40+</div>
          <div class="bio-hl-lbl">Partenaires</div>
        </div>
        <div class="bio-hl">
          <div class="bio-hl-val">3 ans</div>
          <div class="bio-hl-lbl">d'impact</div>
        </div>
      </div>

      <p class="bio-para">
        Djénia intervient régulièrement comme conférencière sur les thèmes du numérique, de l'entrepreneuriat féminin et de l'inclusion économique en Afrique. Elle croit fermement que l'avenir du continent se construira par et pour ses femmes et que la technologie en sera le catalyseur.
      </p>

      <div class="bio-expertise">
        <span class="tag"><span class="tag-icon"></span> Tech & Numérique</span>
        <span class="tag"><span class="tag-icon"></span> Entrepreneuriat & Innovation</span>
        <span class="tag"><span class="tag-icon"></span> Empowerment féminin</span>
        <span class="tag"><span class="tag-icon"></span> Conférencière</span>
      </div>
    </div>

  </div>
</section>

<div class="divider"></div>

<!-- ══ MISSION & HISTOIRE ══ -->
<section class="mission-section">
  <div class="mission-grid">

    <div class="mission-text">
      <span class="section-label">Notre mission</span>
      <h2>Créées pour <em>servir</em><br>les femmes africaines</h2>
      <p>SheRise est née d'une conviction simple : une femme qui maîtrise les outils numériques peut bâtir une entreprise prospère, quel que soit son point de départ.</p>
      <p>Notre mission est de supprimer les obstacles à l'entrepreneuriat féminin en Afrique — en regroupant en un seul endroit la marketplace, les formations, le financement, la communauté et les outils de gestion dont chaque entrepreneuse a besoin pour réussir.</p>
      <p>Nous construisons une plateforme qui comprend les réalités africaines : connexion parfois instable, paiement mobile, langues locales, proximité communautaire. Parce que les solutions doivent être pensées d'ici pour ici.</p>
    </div>

    <!-- Citation fondatrice -->
    <div class="mission-quote">
      <blockquote>
        "En Afrique, chaque femme est déjà entrepreneuse dans son cœur. SheRise lui donne simplement le podium qu'elle mérite."
      </blockquote>
      <div class="mission-quote-author">
        <div class="mqa-avatar">
          <img src="assets/dje3.png" alt="Djénia TOUKOULA"
            onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'mqa-avatar-fallback\'>👩🏾</div>'">
        </div>
        <div>
          <div class="mqa-name">Djénia TOUKOULA</div>
          <div class="mqa-title">Fondatrice & CEO, SheRise</div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ══ TIMELINE HISTOIRE ══ -->
<section class="story-section">
  <div style="text-align:center; margin-bottom:56px;">
    <span class="section-label">Notre histoire</span>
    <h2 style="font-family:'Playfair Display',serif;font-size:clamp(2rem,3vw,2.8rem);font-weight:900;color:#111;line-height:1.1;">
      De l'idée à l'<em style="font-style:italic;background:var(--grad);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">impact</em>
    </h2>
  </div>

  <div class="story-timeline">
    <div class="story-item">
      <div class="story-dot-wrap">
        <div class="story-dot"></div>
        <div class="story-year">2022</div>
      </div>
      <div class="story-content">
        <h4>L'étincelle</h4>
        <p>Après avoir observé des dizaines de femmes entrepreneures à Lomé peiner à vendre en ligne faute d'outils adaptés, Djénia TOUKOULA pose les premières lignes de code de ce qui deviendra SheRise.</p>
      </div>
    </div>

    <div class="story-item">
      <div class="story-dot-wrap">
        <div class="story-dot"></div>
        <div class="story-year">2023</div>
      </div>
      <div class="story-content">
        <h4>Le lancement</h4>
        <p>SheRise ouvre ses portes avec ses premières 200 entrepreneures pionnières au Togo. La marketplace et les premières formations sont mises en ligne. Les retours sont immédiatement enthousiastes.</p>
      </div>
    </div>

    <div class="story-item">
      <div class="story-dot-wrap">
        <div class="story-dot"></div>
        <div class="story-year">2024</div>
      </div>
      <div class="story-content">
        <h4>L'expansion africaine</h4>
        <p>SheRise s'ouvre à l'Afrique de l'Ouest avec l'arrivée de membres en Côte d'Ivoire, au Sénégal et au Cameroun. Les partenariats de financement avec les ONG et fonds d'investissement se multiplient.</p>
      </div>
    </div>

    <div class="story-item">
      <div class="story-dot-wrap">
        <div class="story-dot"></div>
        <div class="story-year">2025</div>
      </div>
      <div class="story-content">
        <h4>5 000 entrepreneures</h4>
        <p>La communauté SheRise franchit le cap des 5 000 membres actives. Le catalogue atteint 120 formations, 40 partenaires institutionnels rejoignent l'écosystème et les premières versions mobiles sont déployées.</p>
      </div>
    </div>

    <div class="story-item">
      <div class="story-dot-wrap">
        <div class="story-dot"></div>
        <div class="story-year">2026</div>
      </div>
      <div class="story-content">
        <h4>Aujourd'hui & demain</h4>
        <p>SheRise continue de grandir avec de nouveaux services, des formations en langues locales et l'ambition de devenir la plateforme de référence de l'entrepreneuriat féminin africain à l'horizon 2030.</p>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ══ VALEURS ══ -->
<section class="values-section">
  <div class="values-header">
    <span class="section-label">Ce qui nous guide</span>
    <h2 style="font-family:'Playfair Display',serif;font-size:clamp(2rem,3vw,3rem);font-weight:900;color:#111;line-height:1.1;margin-bottom:16px;">
      Nos <em style="font-style:italic;background:var(--grad);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">valeurs</em>
    </h2>
    <p class="section-sub">Les principes qui orientent chaque décision chez SheRise.</p>
  </div>

  <div class="values-grid">
    <div class="value-card">
      <div class="value-icon">🌍</div>
      <h3>Ancrage africain</h3>
      <p>Nous construisons pour l'Afrique, depuis l'Afrique. Chaque fonctionnalité est pensée pour les réalités locales — Mobile Money, langues, connectivité, culture.</p>
    </div>
    <div class="value-card">
      <div class="value-icon">🤝</div>
      <h3>Solidarité féminine</h3>
      <p>Chez SheRise, les femmes s'élèvent ensemble. La communauté, le mentorat et l'entraide sont au cœur de tout ce que nous faisons.</p>
    </div>
    <div class="value-card">
      <div class="value-icon">🚀</div>
      <h3>Innovation continue</h3>
      <p>Nous ne nous contentons pas de l'existant. Chaque retour de notre communauté nourrit une plateforme en amélioration permanente.</p>
    </div>
    <div class="value-card">
      <div class="value-icon">🔓</div>
      <h3>Accessibilité</h3>
      <p>L'entrepreneuriat ne doit pas être réservé à celles qui ont déjà des ressources. SheRise Starter est gratuit, et toujours le sera.</p>
    </div>
    <div class="value-card">
      <div class="value-icon">💡</div>
      <h3>Autonomisation</h3>
      <p>Notre objectif n'est pas de créer une dépendance mais de donner les compétences, les outils et la confiance pour voler de ses propres ailes.</p>
    </div>
    <div class="value-card">
      <div class="value-icon">🔒</div>
      <h3>Confiance & transparence</h3>
      <p>Paiements sécurisés, données protégées, tarifs clairs. La confiance de nos membres est notre bien le plus précieux.</p>
    </div>
  </div>
</section>

<!-- ══ CTA ══ -->
<section class="cta-section">
  <div class="cta-inner">
    <h2>Prête à rejoindre<br>l'aventure <em>SheRise</em> ?</h2>
    <p>Rejoignez 5 000 femmes entrepreneures africaines qui ont choisi SheRise pour bâtir leur avenir numérique.</p>
    <div class="cta-btns">
      <button class="btn-white" onclick="window.location.href='commencer.html'">Commencer gratuitement →</button>
      <button class="btn-outline-white" onclick="window.location.href='services.html'">Découvrir les services</button>
    </div>
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
    <li><a href="#">Contact</a></li>
    <li><a href="#">Confidentialité</a></li>
  </ul>
  <div class="footer-copy">© 2026 SheRise · Créé par Djénia TOUKOULA</div>
</footer>

</body>
</html>