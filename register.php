<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SheRise Inscription</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/register.css">
</head>
<body>

<!-- ══ LEFT PANEL ══ -->
<div class="left-panel">
  <div class="orb orb1"></div>
  <div class="orb orb2"></div>
  <div class="orb orb3"></div>

  <div class="left-logo">
    <img src="assets/logo.png" alt="SheRise">
  </div>

  <div class="left-center">
    <h2 class="left-title">Créez votre<br>avenir <em>aujourd'hui</em></h2>
    <p class="left-sub">Rejoignez des milliers d'entrepreneures africaines qui transforment leur passion en activité florissante grâce à SheRise.</p>
  </div>

  <div class="left-steps">
    <div class="lstep done">
      <div class="lstep-num">1</div>
      <div class="lstep-label">Choisissez votre profil</div>
      <div class="lstep-check">✅</div>
    </div>
    <div class="lstep done">
      <div class="lstep-num">2</div>
      <div class="lstep-label">Renseignez vos informations</div>
      <div class="lstep-check">✅</div>
    </div>
    <div class="lstep">
      <div class="lstep-num">3</div>
      <div class="lstep-label">Configurez votre boutique</div>
      <div class="lstep-check">✅</div>
    </div>
    <div class="lstep">
      <div class="lstep-num">4</div>
      <div class="lstep-label">Commencez à vendre</div>
      <div class="lstep-check">✅</div>
    </div>
  </div>
</div>

<!-- ══ RIGHT PANEL ══ -->
<div class="right-panel">

  <!-- Progress indicator -->
  <div class="reg-steps">
    <div class="reg-step done">
      <div class="step-num">✓</div>
      <span>Profil</span>
    </div>
    <div class="step-line done"></div>
    <div class="reg-step active">
      <div class="step-num">2</div>
      <span>Informations</span>
    </div>
    <div class="step-line"></div>
    <div class="reg-step">
      <div class="step-num">3</div>
      <span>Boutique</span>
    </div>
    <div class="step-line"></div>
    <div class="reg-step">
      <div class="step-num">4</div>
      <span>Confirmation</span>
    </div>
  </div>

  <div class="form-header">
    <div class="form-eyebrow">Inscription</div>
    <h1 class="form-title">Créez votre <em>compte gratuitement</em></h1>
    <p class="form-sub">Choisissez votre rôle et renseignez vos informations pour commencer.</p>
  </div>

  <!-- Social signup -->
  <div class="social-btns">
    <button class="social-btn"><span>🔵</span> Google</button>
    <button class="social-btn"><span>📘</span> Facebook</button>
  </div>
  <div class="divider-line"><span>ou avec votre email</span></div>

  <!-- Role selector -->
  <div style="margin-bottom:8px;">
    <div class="form-label">Je suis…</div>
  </div>
  <div class="role-grid" id="roleGrid">
    <div class="role-card selected" onclick="selectRole(this)">
      <div class="role-ico">👩‍💼</div>
      <div class="role-name">Entrepreneure</div>
      <div class="role-desc">Je vends mes produits & services</div>
    </div>
    <div class="role-card" onclick="selectRole(this)">
      <div class="role-ico">🧑‍🏫</div>
      <div class="role-name">Mentor</div>
      <div class="role-desc">Je partage mon expertise</div>
    </div>
    <div class="role-card" onclick="selectRole(this)">
      <div class="role-ico">🛒</div>
      <div class="role-name">Client</div>
      <div class="role-desc">J'achète des produits</div>
    </div>
  </div>

  <!-- Form fields -->
  <form onsubmit="return false">
    <div class="form-row">
      <div class="form-group">
        <label class="form-label" for="prenom">Prénom</label>
        <div class="form-input-wrap">
          <input class="form-input" type="text" id="prenom" placeholder="Djénia">
        </div>
      </div>
      <div class="form-group">
        <label class="form-label" for="nom">Nom</label>
        <div class="form-input-wrap">
          <input class="form-input" type="text" id="nom" placeholder="TOUKOULA">
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="email">Adresse email</label>
      <div class="form-input-wrap">
        <input class="form-input" type="email" id="email" placeholder="votre@email.com">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="tel">Numéro de téléphone</label>
      <div class="form-input-wrap">
        <input class="form-input" type="tel" id="tel" placeholder="+228 90 00 00 00">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="password">Mot de passe</label>
      <div class="form-input-wrap">
        <input class="form-input" type="password" id="password" placeholder="Minimum 8 caractères" oninput="checkPw(this.value)">
        <span class="input-eye" onclick="togglePw('password',this)">👁️</span>
      </div>
      <div class="pw-strength">
        <div class="pw-bar" id="bar1"></div>
        <div class="pw-bar" id="bar2"></div>
        <div class="pw-bar" id="bar3"></div>
        <div class="pw-bar" id="bar4"></div>
      </div>
      <div class="pw-hint" id="pwHint">Choisissez un mot de passe sécurisé</div>
    </div>

    <div class="form-group">
      <label class="form-label" for="confirm">Confirmer le mot de passe</label>
      <div class="form-input-wrap">
        <input class="form-input" type="password" id="confirm" placeholder="Répétez votre mot de passe">
        <span class="input-eye" onclick="togglePw('confirm',this)">👁️</span>
      </div>
    </div>

    <label class="terms-check">
      <input type="checkbox">
      J'accepte les <a href="#">Conditions d'utilisation</a> et la <a href="#">Politique de confidentialité</a> de SheRise.
    </label>

    <button type="submit" class="btn-submit">Créer mon compte →</button>

    <div class="form-footer-text">
      Déjà un compte ? <a href="login.html">Se connecter</a>
    </div>
  </form>

</div>

<script>
function selectRole(el) {
  document.querySelectorAll('.role-card').forEach(c => c.classList.remove('selected'));
  el.classList.add('selected');
}

function togglePw(id, el) {
  const input = document.getElementById(id);
  input.type = input.type === 'password' ? 'text' : 'password';
  el.textContent = input.type === 'password' ? '👁️' : '🙈';
}

function checkPw(val) {
  const bars = [document.getElementById('bar1'), document.getElementById('bar2'), document.getElementById('bar3'), document.getElementById('bar4')];
  const hint = document.getElementById('pwHint');
  bars.forEach(b => { b.className = 'pw-bar'; });

  let score = 0;
  if (val.length >= 8) score++;
  if (/[A-Z]/.test(val)) score++;
  if (/[0-9]/.test(val)) score++;
  if (/[^A-Za-z0-9]/.test(val)) score++;

  const cls = score <= 1 ? 'weak' : score <= 2 ? 'medium' : 'strong';
  const labels = { weak: 'Faible', medium: 'Moyen', strong: 'Fort 💪' };
  const txtCls = { weak: 'weak-txt', medium: 'medium-txt', strong: 'strong-txt' };

  for (let i = 0; i < score; i++) bars[i].classList.add(cls);
  hint.textContent = val.length ? labels[cls] : 'Choisissez un mot de passe sécurisé';
  hint.className = 'pw-hint ' + (val.length ? txtCls[cls] : '');
}
</script>
</body>
</html>