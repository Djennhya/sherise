<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SheRise Abonnements</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/abon.css">
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
    <li><a href="abonnement.php" class="active">Abonnement</a></li>
    <li><a href="about.php">A propos</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
  <div class="nav-right">
    <button class="nav-login" onclick="window.location.href='login.php'">Se connecter</button>
    <button class="nav-cta" onclick="window.location.href='begin.php'">Commencer →</button>
  </div>
</nav>

<!-- ══ HERO ══ -->
<section class="hero">
  <div class="hero-bg">
    <img src="assets/home4.png" alt="SheRise Abonnements"
         onerror="this.style.display='none'">
  </div>
  <div class="hero-orb"></div>
  <div class="hero-orb2"></div>

  <div class="hero-content">
    <h1>Choisissez votre plan<br>pour <em>décoller</em></h1>
    <p>Démarrez gratuitement, évoluez à votre rythme. Chaque plan SheRise est conçu pour accompagner les entrepreneures africaines à chaque étape de leur croissance.</p>
</section>

<!-- ══ PRICING ══ -->
<section class="pricing-section" id="pricing">
  <div class="pricing-header">
    <div class="section-label">Abonnements</div>
    <h2 class="section-title">Des plans faits pour <em>vous</em></h2>
    <p class="section-sub">Toutes les fonctionnalités dont vous avez besoin, au prix qui correspond à votre étape.</p>
  </div>

  <div class="plans-grid" id="plansGrid">

    <!-- ── STARTER ── -->
    <div class="plan-card">
      <div class="plan-name">Starter</div>
      <div class="plan-tagline">Pour tester et lancer votre première boutique sans risque.</div>

      <div class="plan-price-wrap">
        <div class="plan-price">
          <span class="price-free">Gratuit</span>
        </div>
        <div class="price-period">Pour toujours · sans carte bancaire</div>
      </div>

      <div class="plan-divider"></div>

      <ul class="plan-features">
        <li><span class="feat-check ok"></span> Boutique en ligne (5 produits)</li>
        <li><span class="feat-check ok"></span> Paiement Mobile Money intégré</li>
        <li><span class="feat-check ok"></span> Accès à la communauté</li>
        <li><span class="feat-check ok"></span> 2 formations offertes</li>
        <li><span class="feat-check ok"></span> Profil professionnel basique</li>
        <li><span class="feat-check no"></span> <span style="opacity:.45">Tableau de bord avancé</span></li>
        <li><span class="feat-check no"></span> <span style="opacity:.45">Accès aux financements</span></li>
        <li><span class="feat-check no"></span> <span style="opacity:.45">Mentorat personnalisé</span></li>
        <li><span class="feat-check no"></span> <span style="opacity:.45">Support prioritaire</span></li>
      </ul>

      <button class="plan-btn plan-btn-ghost" onclick="window.location.href='commencer.html'">Commencer gratuitement</button>
    </div>

    <!-- ── PRO (featured) ── -->
    <div class="plan-card featured">
      <div class="plan-badge">⭐ Plus populaire</div>
      <div class="plan-name">Pro</div>
      <div class="plan-tagline">Pour les entrepreneures prêtes à scaler leur activité.</div>

      <div class="plan-price-wrap">
        <div class="plan-price">
          <span class="price-amount" id="pro-price">9 900</span>
          <div>
            <div class="price-currency">FCFA</div>
            <div class="price-period" style="color:rgba(255,255,255,.35)" id="pro-period">/ mois</div>
          </div>
        </div>
        <div class="price-annual-note" id="pro-annual-note">soit 7 920 FCFA/mois · facturé 95 040 FCFA/an</div>
      </div>

      <div class="plan-divider"></div>

      <ul class="plan-features">
        <li><span class="feat-check ok"></span> Boutique illimitée (produits &amp; photos)</li>
        <li><span class="feat-check ok"></span> Tous modes de paiement</li>
        <li><span class="feat-check ok"></span> Tableau de bord complet</li>
        <li><span class="feat-check ok"></span> Formations illimitées</li>
        <li><span class="feat-check ok"></span> Accès aux opportunités de financement</li>
        <li><span class="feat-check ok"></span> Profil vérifié + lien personnalisé</li>
        <li><span class="feat-check ok"></span> 2 sessions mentorat / mois</li>
        <li><span class="feat-check ok"></span> Analyses & rapports avancés</li>
        <li><span class="feat-check ok"></span> Support prioritaire</li>
      </ul>

      <button class="plan-btn plan-btn-white" onclick="window.location.href='commencer.html'">Choisir Pro →</button>
    </div>

    <!-- ── BUSINESS ── -->
    <div class="plan-card">
      <div class="plan-name">Business</div>
      <div class="plan-tagline">Pour les structures établies qui veulent tout maximiser.</div>

      <div class="plan-price-wrap">
        <div class="plan-price">
          <span class="price-amount" id="biz-price">24 900</span>
          <div>
            <div class="price-currency">FCFA</div>
            <div class="price-period" id="biz-period">/ mois</div>
          </div>
        </div>
        <div class="price-annual-note" id="biz-annual-note">soit 19 920 FCFA/mois · facturé 239 040 FCFA/an</div>
      </div>

      <div class="plan-divider"></div>

      <ul class="plan-features">
        <li><span class="feat-check ok"></span> Tout le plan Pro inclus</li>
        <li><span class="feat-check ok"></span> Multi-boutiques (jusqu'à 3)</li>
        <li><span class="feat-check ok"></span> Équipe (3 collaborateurs)</li>
        <li><span class="feat-check ok"></span> Sessions mentorat illimitées</li>
        <li><span class="feat-check ok"></span> Accompagnement dossier financement</li>
        <li><span class="feat-check ok"></span> Intégrations API (WhatsApp, CRM)</li>
        <li><span class="feat-check ok"></span> Rapports & exports personnalisés</li>
        <li><span class="feat-check ok"></span> Manager dédié SheRise</li>
        <li><span class="feat-check ok"></span> Accès bêta aux nouvelles fonctions</li>
      </ul>

      <button class="plan-btn plan-btn-grad" onclick="window.location.href='commencer.html'">Choisir Business →</button>
    </div>

  </div>
</section>

<div class="divider"></div>

<!-- ══ COMPARATIF ══ -->
<section class="compare-section">
  <div class="compare-header">
    <div class="section-label">Comparatif détaillé</div>
    <h2 class="section-title">Tout <em>comparer</em> en un coup d'œil</h2>
    <p class="section-sub">Choisissez le plan qui correspond exactement à vos besoins actuels — vous pouvez évoluer à tout moment.</p>
  </div>

  <div class="compare-table">
    <!-- Header -->
    <div class="ct-head">
      <div class="ct-head-cell">Fonctionnalités</div>
      <div class="ct-head-cell">Starter</div>
      <div class="ct-head-cell featured-col">Pro</div>
      <div class="ct-head-cell">Business</div>
    </div>

    <!-- Marketplace -->
    <div class="ct-group-label">🛍️ Marketplace</div>
    <div class="ct-row">
      <div class="ct-cell">Produits en ligne</div>
      <div class="ct-cell"><span class="ct-check partial">5 max</span></div>
      <div class="ct-cell featured-col"><span class="ct-check yes">✓</span> Illimité</div>
      <div class="ct-cell"><span class="ct-check yes">✓</span> Illimité</div>
    </div>
    <div class="ct-row">
      <div class="ct-cell">Paiement Mobile Money</div>
      <div class="ct-cell"><span class="ct-check yes">✓</span></div>
      <div class="ct-cell featured-col"><span class="ct-check yes">✓</span></div>
      <div class="ct-cell"><span class="ct-check yes">✓</span></div>
    </div>
    <div class="ct-row">
      <div class="ct-cell">Codes promo & promotions</div>
      <div class="ct-cell"><span class="ct-check no">×</span></div>
      <div class="ct-cell featured-col"><span class="ct-check yes">✓</span></div>
      <div class="ct-cell"><span class="ct-check yes">✓</span></div>
    </div>
    <div class="ct-row">
      <div class="ct-cell">Multi-boutiques</div>
      <div class="ct-cell"><span class="ct-check no">×</span></div>
      <div class="ct-cell featured-col"><span class="ct-check no">×</span></div>
      <div class="ct-cell"><span class="ct-check partial">3 boutiques</span></div>
    </div>

    <!-- Formations -->
    <div class="ct-group-label">🎓 Formations</div>
    <div class="ct-row">
      <div class="ct-cell">Accès aux formations</div>
      <div class="ct-cell"><span class="ct-check partial">2 offertes</span></div>
      <div class="ct-cell featured-col"><span class="ct-check yes">✓</span> Illimité</div>
      <div class="ct-cell"><span class="ct-check yes">✓</span> Illimité</div>
    </div>
    <div class="ct-row">
      <div class="ct-cell">Certificats reconnus</div>
      <div class="ct-cell"><span class="ct-check no">×</span></div>
      <div class="ct-cell featured-col"><span class="ct-check yes">✓</span></div>
      <div class="ct-cell"><span class="ct-check yes">✓</span></div>
    </div>
    <div class="ct-row">
      <div class="ct-cell">Webinaires en direct</div>
      <div class="ct-cell"><span class="ct-check no">×</span></div>
      <div class="ct-cell featured-col"><span class="ct-check yes">✓</span></div>
      <div class="ct-cell"><span class="ct-check yes">✓</span></div>
    </div>

    <!-- Financement -->
    <div class="ct-group-label">💰 Financement</div>
    <div class="ct-row">
      <div class="ct-cell">Accès aux opportunités</div>
      <div class="ct-cell"><span class="ct-check no">×</span></div>
      <div class="ct-cell featured-col"><span class="ct-check yes">✓</span></div>
      <div class="ct-cell"><span class="ct-check yes">✓</span></div>
    </div>
    <div class="ct-row">
      <div class="ct-cell">Accompagnement dossier</div>
      <div class="ct-cell"><span class="ct-check no">×</span></div>
      <div class="ct-cell featured-col"><span class="ct-check no">×</span></div>
      <div class="ct-cell"><span class="ct-check yes">✓</span></div>
    </div>

    <!-- Communauté -->
    <div class="ct-group-label">🤝 Communauté & Mentorat</div>
    <div class="ct-row">
      <div class="ct-cell">Accès communauté</div>
      <div class="ct-cell"><span class="ct-check yes">✓</span></div>
      <div class="ct-cell featured-col"><span class="ct-check yes">✓</span></div>
      <div class="ct-cell"><span class="ct-check yes">✓</span></div>
    </div>
    <div class="ct-row">
      <div class="ct-cell">Sessions mentorat / mois</div>
      <div class="ct-cell"><span class="ct-check no">×</span></div>
      <div class="ct-cell featured-col"><span class="ct-check partial">2 / mois</span></div>
      <div class="ct-cell"><span class="ct-check yes">✓</span> Illimité</div>
    </div>

    <!-- Support -->
    <div class="ct-group-label">⚙️ Support & Équipe</div>
    <div class="ct-row">
      <div class="ct-cell">Support client</div>
      <div class="ct-cell"><span class="ct-check partial">Email</span></div>
      <div class="ct-cell featured-col"><span class="ct-check partial">Prioritaire</span></div>
      <div class="ct-cell"><span class="ct-check yes">✓</span> Manager dédié</div>
    </div>
    <div class="ct-row">
      <div class="ct-cell">Collaborateurs</div>
      <div class="ct-cell"><span class="ct-check no">×</span></div>
      <div class="ct-cell featured-col"><span class="ct-check no">×</span></div>
      <div class="ct-cell"><span class="ct-check partial">3 membres</span></div>
    </div>

  </div>
</section>

<div class="divider"></div>

<!-- ══ TESTIMONIALS ══ -->
<section class="testimonials">
  <div class="testi-header">
    <div class="section-label">Elles nous font confiance</div>
    <h2 class="section-title">Ce qu'elles disent de <em>SheRise</em></h2>
    <p class="section-sub">Des entrepreneures qui ont choisi le bon plan et transformé leur activité.</p>
  </div>

  <div class="testi-grid">
    <div class="testi-card">
      <div class="testi-stars">★★★★★</div>
      <p class="testi-text">"J'ai commencé avec le plan Starter pour tester. En 2 semaines j'avais déjà vendu mes 5 produits et je suis passée en Pro. Le meilleur investissement de mon année !"</p>
      <div class="testi-author">
        <div class="testi-av">👩🏾</div>
        <div>
          <div class="testi-name">Aminata K.</div>
          <div class="testi-role">Créatrice de mode · Abidjan</div>
        </div>
        <span class="testi-plan">Plan Pro</span>
      </div>
    </div>

    <div class="testi-card featured">
      <div class="testi-stars">★★★★★</div>
      <p class="testi-text">"Avec Business, j'ai pu intégrer mes deux boutiques et déléguer à mon assistante. Le manager dédié SheRise m'a aidée à monter mon dossier AFD — financée à 2 millions FCFA !"</p>
      <div class="testi-author">
        <div class="testi-av">👩🏿</div>
        <div>
          <div class="testi-name">Fatou D.</div>
          <div class="testi-role">Artisane & Mentor · Dakar</div>
        </div>
        <span class="testi-plan">Plan Business</span>
      </div>
    </div>

    <div class="testi-card">
      <div class="testi-stars">★★★★★</div>
      <p class="testi-text">"Le plan annuel Pro me revient à moins de 8 000 FCFA par mois. Pour tout ce que j'ai — formations, mentorat, boutique illimitée — c'est vraiment rien du tout."</p>
      <div class="testi-author">
        <div class="testi-av">👩🏽</div>
        <div>
          <div class="testi-name">Efua K.</div>
          <div class="testi-role">Coach Business · Lomé</div>
        </div>
        <span class="testi-plan">Plan Pro Annuel</span>
      </div>
    </div>
  </div>
</section>

<!-- ══ CTA ══ -->
<section class="cta-section">
  <div class="cta-inner">
    <h2>Commencez dès<br><em>aujourd'hui</em></h2>
    <p>Rejoignez 5 000 entrepreneures africaines. Le plan Starter est gratuit, sans carte bancaire, sans engagement.</p>
    <div class="cta-btns">
      <button class="btn-white" onclick="window.location.href='commencer.html'">Démarrer gratuitement →</button>
      <button class="btn-outline-white" onclick="document.getElementById('pricing').scrollIntoView({behavior:'smooth'})">Voir les plans</button>
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
    <li><a href="#">Contact</a></li>
    <li><a href="#">Politique de confidentialité</a></li>
  </ul>
  <div class="footer-copy">© 2026 SheRise. Tous droits réservés.</div>
</footer>

<script>
let isAnnual = false;

const prices = {
  pro:  { monthly: '9 900',  annual: '7 920',  annualNote: 'soit 7 920 FCFA/mois · facturé 95 040 FCFA/an' },
  biz:  { monthly: '24 900', annual: '19 920', annualNote: 'soit 19 920 FCFA/mois · facturé 239 040 FCFA/an' },
};

function switchBilling() {
  isAnnual = !isAnnual;
  const sw = document.getElementById('toggleSwitch');
  const lblM = document.getElementById('lbl-monthly');
  const lblA = document.getElementById('lbl-annual');
  const grid = document.getElementById('plansGrid');

  sw.classList.toggle('annual', isAnnual);
  lblM.classList.toggle('active', !isAnnual);
  lblA.classList.toggle('active', isAnnual);
  grid.classList.toggle('show-annual', isAnnual);

  // Update Pro
  document.getElementById('pro-price').textContent = isAnnual ? prices.pro.annual : prices.pro.monthly;
  document.getElementById('pro-period').textContent = isAnnual ? '/ mois (annuel)' : '/ mois';
  document.getElementById('pro-annual-note').textContent = prices.pro.annualNote;

  // Update Business
  document.getElementById('biz-price').textContent = isAnnual ? prices.biz.annual : prices.biz.monthly;
  document.getElementById('biz-period').textContent = isAnnual ? '/ mois (annuel)' : '/ mois';
  document.getElementById('biz-annual-note').textContent = prices.biz.annualNote;
}
</script>

</body>
</html>