<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SheRise Commencer</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/begin.css">
</head>
<body>

<!-- HEADER -->
<nav>
  <div>
    <div class="nav-header-title">Commencez votre aventure sur <em>SheRise</em></div>
    <div class="nav-header-sub">Configuration de votre espace en 5 étapes rapides</div>
  </div>
  <div class="nav-right">
    <a href="index.php" class="nav-back">← Retour à l'accueil</a>
    <a href="./admin/dashboard.php" class="nav-skip">Passer cette étape →</a>
  </div>
</nav>

<!-- PROGRESS -->
<div class="progress-bar-wrap">
  <div class="progress-bar-fill" id="progressBar" style="width:20%"></div>
</div>

<!-- STEPS NAV -->
<div class="steps-nav" id="stepsNav">
  <div class="snav-item active" id="snav1">
    <div class="snav-num">1</div>
    <div class="snav-label">Profil</div>
  </div>
  <div class="snav-line" id="sline1"></div>
  <div class="snav-item" id="snav2">
    <div class="snav-num">2</div>
    <div class="snav-label">Boutique</div>
  </div>
  <div class="snav-line" id="sline2"></div>
  <div class="snav-item" id="snav3">
    <div class="snav-num">3</div>
    <div class="snav-label">Intérêts</div>
  </div>
  <div class="snav-line" id="sline3"></div>
  <div class="snav-item" id="snav4">
    <div class="snav-num">4</div>
    <div class="snav-label">Abonnement</div>
  </div>
  <div class="snav-line" id="sline4"></div>
  <div class="snav-item" id="snav5">
    <div class="snav-num">5</div>
    <div class="snav-label">Notifications</div>
  </div>
</div>

<!-- CARD WRAPPER -->
<div class="onboard-wrap">

  <!-- ══ ÉTAPE 1 : Profil ══ -->
  <div class="step-card active" id="step1">
    <div class="card-eyebrow">Étape 1 sur 5</div>
    <h2 class="card-title">Votre <em>profil</em></h2>
    <p class="card-sub">Personnalisez votre identité sur SheRise pour que vos clients et partenaires vous trouvent facilement.</p>

    <div class="photo-upload">
      <div class="photo-circle" onclick="this.innerHTML='👩🏾'">
        <span style="font-size:20px;color:#ccc;margin-top:3px;">Photo</span>
      </div>
      <div class="photo-hint">
        <strong>Ajouter une photo de profil</strong><br>
        Cliquez pour choisir une image.<br>
        <small>JPG, PNG · Max 5 Mo</small>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label class="form-label">Prénom</label>
        <div class="form-input-wrap">
          <input class="form-input" type="text" value="Djénia" placeholder="Prénom">
        </div>
      </div>
      <div class="form-group">
        <label class="form-label">Nom</label>
        <div class="form-input-wrap">
          <input class="form-input" type="text" placeholder="Nom de famille">
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">Votre activité / métier</label>
      <div class="form-input-wrap">
        <input class="form-input" type="text" placeholder="Ex : Créatrice de mode, Coach, Artisane…">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label class="form-label">Pays</label>
        <div class="form-input-wrap">
          <select class="form-select">
            <option>Togo</option>
            <option>Bénin</option>
            <option>Côte d'Ivoire</option>
            <option>Sénégal</option>
            <option>Ghana</option>
            <option>Mali</option>
            <option>Cameroun</option>
            <option>Nigeria</option>
            <option>Burkina Faso</option>
            <option>Autre</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="form-label">Ville</label>
        <div class="form-input-wrap">
          <input class="form-input" type="text" placeholder="Ex : Lomé, Abidjan…">
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">Biographie courte</label>
      <textarea class="form-textarea" placeholder="Décrivez-vous en quelques mots… Ex : Je suis créatrice de mode basée à Lomé, spécialisée dans le tissu wax premium."></textarea>
    </div>

    <div class="btn-row">
      <div></div>
      <button class="btn-next" onclick="goTo(2)">Continuer <span>→</span></button>
    </div>
  </div>

  <!-- ══ ÉTAPE 2 : Boutique ══ -->
  <div class="step-card" id="step2">
    <div class="card-eyebrow">Étape 2 sur 5</div>
    <h2 class="card-title">Votre <em>boutique</em></h2>
    <p class="card-sub">Créez votre vitrine en quelques minutes. Vous pourrez ajouter vos produits après la configuration.</p>

    <div class="form-group">
      <label class="form-label">Nom de votre boutique</label>
      <div class="form-input-wrap">
        <input class="form-input" type="text" placeholder="Ex : Atelier Djénia, Wax & Beauté…">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">Catégorie principale</label>
      <div class="form-input-wrap">
        <select class="form-select">
          <option>Mode & Vêtements</option>
          <option>Beauté & Cosmétiques</option>
          <option>Alimentation & Cuisine</option>
          <option>Artisanat & Décoration</option>
          <option>Services & Consulting</option>
          <option>Formation & Coaching</option>
          <option>Technologie & Digital</option>
          <option>Santé & Bien-être</option>
          <option>Autre</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">Description de votre boutique</label>
      <textarea class="form-textarea" placeholder="Présentez ce que vous vendez et ce qui vous rend unique…"></textarea>
    </div>

    <div class="form-group">
      <label class="form-label">Couleur principale de votre boutique</label>
      <span class="form-sublabel">Cette couleur sera utilisée pour personnaliser votre page.</span>
      <div class="color-swatches">
        <div class="swatch selected" style="background:#c8115a" onclick="selectSwatch(this)"></div>
        <div class="swatch" style="background:#7c3aed" onclick="selectSwatch(this)"></div>
        <div class="swatch" style="background:#1d4ed8" onclick="selectSwatch(this)"></div>
        <div class="swatch" style="background:#059669" onclick="selectSwatch(this)"></div>
        <div class="swatch" style="background:#d97706" onclick="selectSwatch(this)"></div>
        <div class="swatch" style="background:#dc2626" onclick="selectSwatch(this)"></div>
        <div class="swatch" style="background:#0891b2" onclick="selectSwatch(this)"></div>
        <div class="swatch" style="background:#111111" onclick="selectSwatch(this)"></div>
      </div>
    </div>

    <div class="boutique-preview">
      <div class="bp-text">L'aperçu de votre boutique apparaîtra ici une fois configurée.</div>
    </div>

    <div class="btn-row">
      <button class="btn-prev" onclick="goTo(1)"><span>←</span> Retour</button>
      <button class="btn-next" onclick="goTo(3)">Continuer <span>→</span></button>
    </div>
  </div>

  <!-- ══ ÉTAPE 3 : Intérêts ══ -->
  <div class="step-card" id="step3">
    <div class="card-eyebrow">Étape 3 sur 5</div>
    <h2 class="card-title">Vos <em>centres d'intérêt</em></h2>
    <p class="card-sub">Sélectionnez les sujets qui vous intéressent pour que nous personnalisions votre expérience et vos recommandations de formations.</p>

    <div class="info-box">
      <div class="info-box-text">Choisissez au moins <strong>3 thèmes</strong> pour obtenir des recommandations pertinentes. Vous pouvez modifier vos choix à tout moment.</div>
    </div>

    <div class="form-group">
      <label class="form-label" style="margin-bottom:12px">Business & Entrepreneuriat</label>
      <div class="tags-grid">
        <div class="tag-chip selected" onclick="toggleTag(this)">Gestion d'entreprise</div>
        <div class="tag-chip selected" onclick="toggleTag(this)">Croissance & Scaling</div>
        <div class="tag-chip" onclick="toggleTag(this)">Financement</div>
        <div class="tag-chip selected" onclick="toggleTag(this)">Réseautage</div>
        <div class="tag-chip" onclick="toggleTag(this)">Comptabilité</div>
        <div class="tag-chip" onclick="toggleTag(this)">Droit des affaires</div>
      </div>
    </div>

    <div class="form-group" style="margin-top:22px">
      <label class="form-label" style="margin-bottom:12px">Marketing & Ventes</label>
      <div class="tags-grid">
        <div class="tag-chip selected" onclick="toggleTag(this)">Réseaux sociaux</div>
        <div class="tag-chip" onclick="toggleTag(this)">Branding & Design</div>
        <div class="tag-chip selected" onclick="toggleTag(this)">E-commerce</div>
        <div class="tag-chip" onclick="toggleTag(this)">Email marketing</div>
        <div class="tag-chip" onclick="toggleTag(this)">Photographie produit</div>
        <div class="tag-chip" onclick="toggleTag(this)">Vidéo & Contenu</div>
      </div>
    </div>

    <div class="form-group" style="margin-top:22px">
      <label class="form-label" style="margin-bottom:12px">Développement personnel</label>
      <div class="tags-grid">
        <div class="tag-chip" onclick="toggleTag(this)">Leadership féminin</div>
        <div class="tag-chip" onclick="toggleTag(this)">Prise de parole</div>
        <div class="tag-chip selected" onclick="toggleTag(this)">Productivité</div>
        <div class="tag-chip" onclick="toggleTag(this)">Confiance en soi</div>
        <div class="tag-chip" onclick="toggleTag(this)">Développement durable</div>
      </div>
    </div>

    <div class="btn-row">
      <button class="btn-prev" onclick="goTo(2)"><span>←</span> Retour</button>
      <button class="btn-next" onclick="goTo(4)">Continuer <span>→</span></button>
    </div>
  </div>

  <!-- ══ ÉTAPE 4 : Abonnement ══ -->
  <div class="step-card" id="step4">
    <div class="card-eyebrow">Étape 4 sur 5</div>
    <h2 class="card-title">Votre <em>abonnement</em></h2>
    <p class="card-sub">Choisissez le plan qui correspond à votre étape. Vous pouvez commencer gratuitement et évoluer à tout moment.</p>

    <div class="plan-mini-grid">
      <div class="plan-mini selected" onclick="selectPlan(this)">
        <div class="pm-name">Starter</div>
        <div class="pm-price">0</div>
        <div class="pm-period">FCFA / mois</div>
        <div class="pm-check">✓</div>
      </div>
      <div class="plan-mini popular-mini" onclick="selectPlan(this)">
        <div class="pm-popular-tag">Populaire</div>
        <div class="pm-name">Pro</div>
        <div class="pm-price">30.000</div>
        <div class="pm-period">FCFA / mois</div>
        <div class="pm-check">✓</div>
      </div>
      <div class="plan-mini" onclick="selectPlan(this)">
        <div class="pm-name">Business</div>
        <div class="pm-price">50.000</div>
        <div class="pm-period">FCFA / mois</div>
        <div class="pm-check">✓</div>
      </div>
    </div>

    <div class="info-box" style="margin-top:20px">
      <div class="info-box-text">Essayez le plan <strong>Pro gratuitement pendant 14 jours</strong> sans carte bancaire requise. Résiliation libre à tout moment.</div>
    </div>

    <div class="btn-row">
      <button class="btn-prev" onclick="goTo(3)"><span>←</span> Retour</button>
      <button class="btn-next" onclick="goTo(5)">Continuer <span>→</span></button>
    </div>
  </div>

  <!-- ══ ÉTAPE 5 : Notifications ══ -->
  <div class="step-card" id="step5">
    <div class="card-eyebrow">Étape 5 sur 5</div>
    <h2 class="card-title">Vos <em>préférences</em></h2>
    <p class="card-sub">Choisissez quelles notifications vous souhaitez recevoir. Vous pouvez tout modifier dans vos paramètres.</p>

    <div class="notif-list">
      <div class="notif-item">
        <div class="notif-left">
          <div>
            <div class="notif-name">Nouvelles commandes</div>
            <div class="notif-desc">Soyez alertée dès qu'une commande est passée</div>
          </div>
        </div>
        <label class="toggle-sw">
          <input type="checkbox" checked>
          <div class="toggle-track"></div>
          <div class="toggle-thumb"></div>
        </label>
      </div>
      <div class="notif-item">
        <div class="notif-left">
          <div>
            <div class="notif-name">Messages & Mentorat</div>
            <div class="notif-desc">Nouveaux messages de vos mentors ou clients</div>
          </div>
        </div>
        <label class="toggle-sw">
          <input type="checkbox" checked>
          <div class="toggle-track"></div>
          <div class="toggle-thumb"></div>
        </label>
      </div>
      <div class="notif-item">
        <div class="notif-left">
          <div>
            <div class="notif-name">Opportunités de financement</div>
            <div class="notif-desc">Nouvelles offres de financement disponibles</div>
          </div>
        </div>
        <label class="toggle-sw">
          <input type="checkbox" checked>
          <div class="toggle-track"></div>
          <div class="toggle-thumb"></div>
        </label>
      </div>
      <div class="notif-item">
        <div class="notif-left">
          <div>
            <div class="notif-name">Nouvelles formations</div>
            <div class="notif-desc">Formations recommandées selon vos intérêts</div>
          </div>
        </div>
        <label class="toggle-sw">
          <input type="checkbox" checked>
          <div class="toggle-track"></div>
          <div class="toggle-thumb"></div>
        </label>
      </div>
      <div class="notif-item">
        <div class="notif-left">
          <div>
            <div class="notif-name">Newsletter hebdomadaire</div>
            <div class="notif-desc">Résumé des actualités et conseils SheRise</div>
          </div>
        </div>
        <label class="toggle-sw">
          <input type="checkbox">
          <div class="toggle-track"></div>
          <div class="toggle-thumb"></div>
        </label>
      </div>
      <div class="notif-item">
        <div class="notif-left">
          <div>
            <div class="notif-name">Avis & évaluations</div>
            <div class="notif-desc">Quand un client laisse un avis sur votre boutique</div>
          </div>
        </div>
        <label class="toggle-sw">
          <input type="checkbox" checked>
          <div class="toggle-track"></div>
          <div class="toggle-thumb"></div>
        </label>
      </div>
    </div>

    <div class="btn-row">
      <button class="btn-prev" onclick="goTo(4)"><span>←</span> Retour</button>
      <button class="btn-next" onclick="goTo(6)">Terminer la configuration ✓</button>
    </div>
  </div>

  <!-- ══ SUCCÈS ══ -->
  <div class="step-card" id="step6">
    <div class="success-screen">
      <h2 class="success-title">Bienvenue sur<br><em>SheRise, Djénia !</em></h2>
      <p class="success-sub">Votre espace est prêt. Vous faites maintenant partie d'une communauté de femmes qui osent, créent et réussissent ensemble.</p>

      <div class="checklist">
        <div class="check-item"><div class="check-ico">✓</div> Profil créé et configuré</div>
        <div class="check-item"><div class="check-ico">✓</div> Boutique prête à accueillir vos produits</div>
        <div class="check-item"><div class="check-ico">✓</div> Centres d'intérêt enregistrés</div>
        <div class="check-item"><div class="check-ico">✓</div> Préférences de notification définies</div>
        <div class="check-item"><div class="check-ico">✓</div> Accès à toutes les fonctionnalités SheRise</div>
      </div>

      <button class="btn-dashboard" onclick="window.location.href='./admin/dashboard.php'">
        Accéder à mon tableau de bord →
      </button>
    </div>
  </div>

</div><!-- end onboard-wrap -->

<script>
const totalSteps = 5;

function goTo(n) {
  // hide all
  document.querySelectorAll('.step-card').forEach(c => c.classList.remove('active'));
  document.getElementById('step' + n).classList.add('active');
  window.scrollTo({ top: 0, behavior: 'smooth' });

  // update progress
  const pct = n <= totalSteps ? (n / totalSteps) * 100 : 100;
  document.getElementById('progressBar').style.width = pct + '%';

  // update steps nav
  for (let i = 1; i <= totalSteps; i++) {
    const item = document.getElementById('snav' + i);
    const line = document.getElementById('sline' + i);
    item.classList.remove('active', 'done');
    if (line) line.classList.remove('done');

    if (i < n) {
      item.classList.add('done');
      item.querySelector('.snav-num').textContent = '✓';
      if (line) line.classList.add('done');
    } else if (i === n) {
      item.classList.add('active');
      item.querySelector('.snav-num').textContent = i;
    } else {
      item.querySelector('.snav-num').textContent = i;
    }
  }

  // hide steps nav on success screen
  document.getElementById('stepsNav').style.display = n === 6 ? 'none' : 'flex';
}

function toggleTag(el) {
  el.classList.toggle('selected');
}

function selectSwatch(el) {
  document.querySelectorAll('.swatch').forEach(s => s.classList.remove('selected'));
  el.classList.add('selected');
}

function selectPlan(el) {
  document.querySelectorAll('.plan-mini').forEach(p => p.classList.remove('selected'));
  el.classList.add('selected');
}
</script>

</body>
</html>