<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SheRise Connexion</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/login.css">
</head>
<body>

<!-- ══ LEFT : visual ══ -->
<div class="left-panel">
  <div class="orb orb1"></div>
  <div class="orb orb2"></div>
  <div class="orb orb3"></div>

  <div class="left-logo">
    <img src="assets/logo.png" alt="SheRise">
  </div>

  <div class="left-center">
    <h2 class="left-title">Votre succès<br>commence <em>ici</em></h2>
    <p class="left-sub">Des milliers de femmes entrepreneures africaines ont déjà transformé leur activité grâce à SheRise. Rejoignez-les aujourd'hui.</p>
  </div>

  <div class="left-stats">
    <div class="lstat">
      <div class="lstat-val">5k+</div>
      <div class="lstat-lbl">Entrepreneures</div>
    </div>
    <div class="lstat">
      <div class="lstat-val">120+</div>
      <div class="lstat-lbl">Formations</div>
    </div>
    <div class="lstat">
      <div class="lstat-val">40+</div>
      <div class="lstat-lbl">Partenaires</div>
    </div>
  </div>
</div>

<!-- ══ RIGHT : formulaire connexion ══ -->
<div class="right-panel">

  <div class="form-header">
    <div class="form-eyebrow">CONNEXION</div>
    <h1 class="form-title">Soyez les bienvenues sur, <em>SheRise</em></h1>
    <p class="form-sub">Connectez-vous pour accéder à votre espace SheRise.</p>
  </div>

  <!-- Social login -->
  <div class="social-btns">
    <button class="social-btn">
      <span class="google-icon">🔵</span> Google
    </button>
    <button class="social-btn">
      <span class="facebook-icon">📘</span> Facebook
    </button>
  </div>

  <div class="divider-line"><span>ou avec votre email</span></div>

  <!-- Form -->
  <form>
    <div class="form-group">
      <label class="form-label" for="email">Adresse email</label>
      <div class="form-input-wrap">
        <input class="form-input" type="email" id="email" placeholder="votre@email.com">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="password">Mot de passe</label>
      <div class="form-input-wrap">
        <input class="form-input" type="password" id="password" placeholder="Votre mot de passe">
        <span class="input-eye" onclick="togglePw('password',this)">👁️</span>
      </div>
    </div>

    <div class="form-options">
      <label class="remember-check">
        <input type="checkbox"> Se souvenir de moi
      </label>
      <a href="#" class="forgot-link">Mot de passe oublié ?</a>
    </div>

    <button type="submit" class="btn-submit">Se connecter →</button>

    <div class="form-footer-text">
      Pas encore de compte ? <a href="register.php">Créer mon compte</a>
    </div>

    <div class="terms-text">
      En vous connectant, vous acceptez nos <a href="#">Conditions d'utilisation</a> et notre <a href="#">Politique de confidentialité</a>.
    </div>
  </form>

</div>

<script>
function togglePw(id, el) {
  const input = document.getElementById(id);
  if (input.type === 'password') {
    input.type = 'text';
    el.textContent = '🙈';
  } else {
    input.type = 'password';
    el.textContent = '👁️';
  }
}
</script>
</body>
</html>