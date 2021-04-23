<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon"/>
    <title>Ayúdanos | Latam Rivals</title>
    <script src="https://kit.fontawesome.com/9f65d8e98d.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header class="header"><a class="header__logo-container" href="#"><img class="header__logo" src="./assets/images/logo/LATAM_blanco_logo.png" alt="Latam Rivals"/></a>
      <nav class="nav" id="nav">
        <ul class="nav__list">
          <li class="nav__item"><a class="nav__link" href="index.html">Inicio</a></li>
          <li class="nav__item"><a class="nav__link" href="equipos.html">equipos</a>
          </li>
          <li class="nav__item"><a class="nav__link" href="#">torneos</a><i class="fas fa-caret-down arrow-icon"></i>
            <ul class="subnav__list">
              <li class="subnav__item"><a class="subnav__link" href="valorant.html">Valorant</a></li>
              <li class="subnav__item"><a class="subnav__link" href="league.html">LoL</a></li>
            </ul>
          </li>
          <li class="nav__item"><a class="nav__link" href="novedades.html">novedades</a>
          </li>
          <li class="nav__item"><a class="nav__link" href="calendario.html">calendario</a>
          </li>
        </ul>
      </nav>
      <div class="header-right"><a class="btn-login" href="login.php">Iniciar sesión</a></div>
      <div class="toggle-menu" id="toggle">
        <div class="first-bar"></div>
        <div class="second-bar"></div>
        <div class="third-bar"></div>
      </div>
    </header>
    <main class="main">
      <h1 class="main-section__title">Sugerencias</h1>
      <section class="main-section">
        <form action="suggest.php" method="post">
          <fieldset>
            <legend>Deja tu comentario</legend>
            <div class="form-group">
              <label for="name">Nombre<span class="required">*</span></label>
              <input type="text" name="name" id="name" required="required"/>
            </div>
            <div class="form-group">
              <label for="email">E-mail<span class="required">*</span></label>
              <input type="email" name="email" id="email" required="required"/>
            </div>
            <div class="form-group">
              <label for="comment">Mensaje<span class="required">*</span></label>
              <textarea name="comment" id="comment" cols="30" rows="10" required="required"></textarea>
            </div>
            <input type="submit"/>
          </fieldset>
        </form>
      </section>
    </main>
    <footer class="footer">
      <div class="footer__links">
        <ul class="footer__list">
          <li class="footer__list-item"><a class="footer__list-link" href="help-us.html">Ayúdanos a mejorar</a></li>
          <li class="footer__list-item"><a class="footer__list-link" href="about.html">Acerca de</a></li>
          <li class="footer__list-item"><a class="footer__list-link" href="faq.html">FAQ</a></li>
        </ul>
      </div>
      <div class="footer__logo"><img src="./assets/images/logo/LATAM_blanco.png" alt="Logo Latam Rivals"/></div>
      <div class="footer__social"><a class="footer__social-link" href="https://www.twitch.tv/latamrivals" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitch"></i></a><a class="footer__social-link" href="https://discord.gg/cZr33wYQDx" target="_blank" rel="noopener noreferrer">       <i class="fab fa-discord"></i></a><a class="footer__social-link" href="https://twitter.com/LatamRivals" target="_blank" rel="noopener noreferrer">       <i class="fab fa-twitter-square"></i></a></div>
      <div class="footer__copy"><span>&copy; Latam Rivals Inc. Todos los derechos reservados.</span></div>
    </footer>
    <script src="js/scripts-min.js"></script>
  </body>
</html>