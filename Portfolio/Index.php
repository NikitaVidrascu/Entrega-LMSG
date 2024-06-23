<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="script.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>Nikita Vidrascu</title>
</head>

<body>
  <label class="switch">
    <input type="checkbox" id="input">
    <span class="slider"></span>
  </label>
  
  <header class="cabeza">
    <div class="Perfil">
      <img src="IMG/MiCareto.jpg" alt="" class="Imagen_Perfil">
    </div>
    <div class="Texto">
      <h1><span id="text1"></span></h1>
      <h3><span id="text2"></span></h3>
    </div>
  </header>

  <main>
    <div class="skill">
      <h2>Mis habilidades técnicas</h2>
      <div class="skill_container">
        <div class="skill_card skill_java">
          <div class="skill_icon">
            <i class="fab fa-java"></i> <!-- Icono de Java -->
          </div>
          <div class="skill_content">
            <h3>Java</h3>
            <p>Intermedio</p>
          </div>
        </div>

        <div class="skill_card skill_sql">
          <div class="skill_icon">
            <i class="fas fa-database"></i> <!-- Icono de SQL -->
          </div>
          <div class="skill_content">
            <h3>SQL</h3>
            <p>Intermedio</p>
          </div>
        </div>

        <div class="skill_card skill_php">
          <div class="skill_icon">
            <i class="fab fa-php"></i> <!-- Icono de PHP -->
          </div>
          <div class="skill_content">
            <h3>PHP</h3>
            <p>Básico</p>
          </div>
        </div>
      </div>

      <div class="skill_container">
        <div class="skill_card skill_html">
          <div class="skill_icon">
            <i class="fab fa-html5"></i> <!-- Icono de HTML -->
          </div>
          <div class="skill_content">
            <h3>HTML</h3>
            <p>Intermedio</p>
          </div>
        </div>

        <div class="skill_card skill_css">
          <div class="skill_icon">
            <i class="fab fa-css3-alt"></i> <!-- Icono de CSS -->
          </div>
          <div class="skill_content">
            <h3>CSS</h3>
            <p>Intermedio</p>
          </div>
        </div>

        <div class="skill_card skill_js">
          <div class="skill_icon">
            <i class="fab fa-js"></i> <!-- Icono de JavaScript -->
          </div>
          <div class="skill_content">
            <h3>JavaScript</h3>
            <p>Básico</p>
          </div>
        </div>
      </div>
    </div>


    <div class="tarjetas">
      <h2>Proyectos en los que he participado:</h2>
      <div class="cards">
        <div class="cards__inner">
          <div class="cards__card card">
            <p class="card__heading"><img src="IMG/Google.png" alt=""></p>
            <p class="card__price">Clon de Google</p>
            <a class="card__cta cta" href="PROJECTS/Google/Google.html">Ver más...</a>
          </div>
          <div class="overlay cards__inner"></div>
        </div>

        <div class="cards__inner">
          <div class="cards__card card">
            <p class="card__heading"><img src="IMG/Youtube.png" alt=""></p>
            <p class="card__price">Clon de YouTube</p>
            <a class="card__cta cta" href="PROJECTS/Youtube/Youtube.html">Ver más...</a>
          </div>
          <div class="overlay cards__inner"></div>
        </div>

        <div class="cards__inner">
          <div class="cards__card card">
            <p class="card__heading"><img src="IMG/Dronetech3.png" alt=""></p>
            <p class="card__price">Dronetech</p>
            <a class="card__cta cta" href="PROJECTS/dron-del-copon/landingpage.html">Ver más...</a>
          </div>
          <div class="overlay cards__inner"></div>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="Pie">
      <h2>Contáctame!!!</h2>
      <br>

      <?php
      $error = "";
      $error1 = "";
      $error2 = "";
      $error3 = "";

      if ($_POST) {
        if (!$_POST['email']) {
          $error1 = "Correo electrónico vacío";
        }
        if (!$_POST['textarea']) {
          $error2 = "Área de texto vacía";
        }
        if ($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
          $error3 = "Correo electrónico inválido";
        }
      }
      ?>
      <div class="form-container">
        <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="text" name="email" id="email">
            <div class="error" style="color: red;"><?php echo $error1;
                                                    echo $error3; ?></div>
          </div>
          <div class="form-group">
            <label for="textarea">¿Con qué le puedo ayudar?</label>
            <textarea name="textarea" cols="50" rows="10" id="textarea"></textarea>
            <div class="error" style="color: red;"><?php echo $error2; ?></div>
          </div>
          <button type="submit" class="form-submit-btn">Enviar</button>
        </form>
      </div>

      <div class="card-RedSocial">
        <a class="social-link1">
          <img src="IMG/Instagram.png" alt="">
        </a>
        <a class="social-link2">
          <img src="IMG/Twitter.png" alt="">
        </a>
        <a class="social-link3">
          <img src="IMG/Discord.png" alt="">
        </a>
        <a class="social-link4">
          <img src="IMG/Whatsapp.png" alt="">
        </a>
      </div>
    </div>
  </footer>
</body>

</html>