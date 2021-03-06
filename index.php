<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Martin Portfolio</title>

  <!-- --------- Scroll Reveal Library --------- -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <!-- --------- Swiper Library --------- -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <!-- --------- Unicons Icons --------- -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <!-- --------- CSS Files --------- -->
  <link rel="stylesheet" href="./css/style-autoprefix.css">
</head>

<body>
  <div class="overlay"></div>
  <header>
    <nav class="container">
      <a href="#" class="logo">Portf<span>olio.</span></a>
      <div class="hamburger">
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
      <div class="links">
        <ul>
          <li>
            <a href="#accueil" class="nav_link">Accueil</a>
          </li>
          <li>
            <a href="#apropos" class="nav_link">à propos</a>
          </li>
          <li>
            <a href="#comp" class="nav_link">Compétences</a>
          </li>
          <li>
            <a href="#projets" class="nav_link">Projets</a>
          </li>
          <li>
            <a href="#contact" class="nav_link">Contact</a>
          </li>
        </ul>
        <i class="uil uil-moon toggle-btn"></i>
      </div>
    </nav> 
  </header>

  <main>
    <!-- --------- Showcase Area Section --------- -->
    <section class="showcase-area section" id="accueil">
      <img src="./assets/square1.png" alt="" class="shape square">
      <div class="container">
        <div class="showcase-info">
          <h3 class="sub-heading">Développeur Logiciel</h3>
          <h1 class="heading">Martin Rouxel</h1>
          <p class="text">je recherche une alternance en tant que développeur, travaillons ensemble !</p>
          <div class="cta">
            <a href="mailto:pro.martinrouxel@gmail.com" class="btn">Contactez moi</a>
            <a href="./assets/Martin_Rouxel_CV.pdf" download class="btn secondary-btn ">Téléchargement CV</a>
          </div>
        </div>
        <div class="showcase-image">
          <img src="./assets/Martino2_2_1.png" class="person" alt="markus">
          <img src="./assets/circle1.png" alt="" class="shape circle">
          <img src="./assets/dots.png" alt="" class="shape dots">
        </div>
      </div>
    </section>
    <!-- --------- About Section --------- -->
    <section class="about section" id="apropos">
      <img src="./assets/triangle.png" alt="" class="shape triangle">
      <div class="container">
        <div class="about-grid">
          <div class="about-card">
            <a target="_blank" href="https://www.saintjosephlannion.fr">
              <img src="./assets/stjo.jpg" class="carte "alt="">
            </a>
            <h3 class="title">Bac S/SI</h3>
          </div>
          <div class="about-card">
            <a  target="_blank"href="https://lycee-joliot-curie-rennes.fr/prepa-ptsipt-psi">
              <img src="./assets/joliot.jpg" alt="" class="carte">
            </a>
            <h3 class="title">CPGE PTSI</h3>
          </div>
          <div class="about-card">
            <a target="_blank" href="https://iut-lannion.univ-rennes1.fr/informatique">
              <img src="./assets/iutlannion.png" alt="" class="carte">
            </a>
            <h3 class="title">BUT Informatique</h3>
          </div>
          <div class="about-card">
            <img src="./assets/cti.png" alt="" class="carte">
            <h3 class="title">Objectif Ingénieur</h3>
          </div>
        </div>
        <div class="about-info">
          <h3 class="sub-heading">A propos de moi</h3>
          <h1 class="heading">19 ans,<br> objectif ingénieur</h1>
          <p class="text">Je suis étudiant en BUT Informatique à l'IUT de Lannion et aspire à me former aux métiers de l'ingénierie en effectuant un apprentissage en alternance avec une école d'ingénieurs. Je suis un étudiant passionné, curieux et toujours motivé à acquérir de nouvelles compétences en étant mis à l'épreuve.</p>
          <div class="cta">
            <a href="mailto:pro.martinrouxel@gmail.com" class="btn">Contactez moi</a>
            <a href="./assets/Martin_Rouxel_CV.pdf" download class="btn secondary-btn ">Téléchargement CV</a>
          </div>
        </div>
      </div>
    </section>
    <!-- --------- Skills Section --------- -->
    <section class="skills section" id="comp">
      <div class="container">
        <div class="skills-box">
          <div class="box-heading">
            <h3 class="sub-heading">Compétences</h3>
            <h1 class="heading">Je peux vous être utile.</h1>
            <div class="box-desc">
              <p class="text">
                Je dispose d'une bonne expérience de travail de groupe grâce à la réalisation d'un bon nombre de projets au cours de ma formation et de mon temps libre. Je dispose d'une grande adaptabilité et de bonnes capacités en autonomie.
              </p>
              <a href="mailto:pro.martinrouxel@gmail.com" class="btn">Contactez moi</a>
            </div>
          </div>
          <div class="skills-wrap">
            <div class="skill">
              <div class="sk-progress">
                <svg>
                  <circle cx="75" cy="75" r="68"/>
                </svg>
                <h2 class="counter">
                  <span data-target="90">0</span>%
                </h2>
              </div>
              <div class="sk-title">Algorithmique</div>
            </div>

            <div class="skill">
              <div class="sk-progress">
                <svg>
                  <circle cx="75" cy="75" r="68"/>
                </svg>
                <h2 class="counter">
                  <span data-target="68">0</span>%
                </h2>
              </div>
              <div class="sk-title">Java / Python</div>
            </div>

            <div class="skill">
              <div class="sk-progress">
                <svg>
                  <circle cx="75" cy="75" r="68"/>
                </svg>
                <h2 class="counter">
                  <span data-target="76">0</span>%
                </h2>
              </div>
              <div class="sk-title">HTML / CSS</div>
            </div>

            <div class="skill">
              <div class="sk-progress">
                <svg>
                  <circle cx="75" cy="75" r="68"/>
                </svg>
                <h2 class="counter">
                  <span data-target="64">0</span>%
                </h2>
              </div>
              <div class="sk-title">Gestion de projet</div>
            </div>
          </div>
          <img src="./assets/dots.png" alt="" class="shape dots">
          <img src="./assets/square1.png" alt="" class="shape square">
        </div>
      </div>
    </section>
    <!-- --------- Services Section --------- -->

    <!-- --------- Portfolio Section --------- -->
    <section class="portfolio section" id="projets">
      <div class="modal">
        <div class="modal-overlay"></div>
        <div class="slider-wrap">
          <div class="prev-btn navigation">
            <i class="uil uil-angle-left-b"></i>
          </div>
          <div class="images">
            <img class="showImage" src="./assets/kohfrais1.jpg" alt="">
            <img src="./assets/Yams1.jpg" alt="">
            <img src="./assets/NapMap.jpg" alt="">
            <img src="./assets/Jedede1.jpg" alt="">
            <img src="./assets/King.jpg" alt="">
            <img src="./assets/Docker.2.jpg" alt="">
          </div>
          <div class="next-btn navigation">
            <i class="uil uil-angle-right-b"></i>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="portfolio-header">
          <div class="portfolio-title">
            <h3 class="sub-heading">Portfolio</h3>
            <h1 class="heading">Projets récents</h1>  
          </div>
          <div class="filter-btns">
            <button class="filter-btn" data-filter="all"">Tous</button>
            <button class="filter-btn" data-filter=".web">Web</button>
            <button class="filter-btn" data-filter=".mobile">Mobile</button>
            <button class="filter-btn" data-filter=".other">Autres</button>
          </div>
        </div>
        <div class="portfolio-gallery">
          <div class="mix prt-card web">
            <div class="prt-image">
              <img src="./assets/kohfrais1.jpg" alt="">
              <div class="prt-overlay">
                <span class="prt-icon zoom-icon" style="--i: 0s">
                  <i class="uil uil-search-plus"></i>
                </span>
                <a target="_blank" href="https://github.com/happizy/koh-frais" class="prt-icon" style="--i: 0.15s">
                  <i class="uil uil-link-h"></i>
                </a>
              </div>
            </div>
            <div class="prt-desc">
              <h3>Site vitrine responsive</h3>
              <a target="_blank" href="https://github.com/happizy/koh-frais" class="btn secondary-btn sm">Plus d'infos</a>
            </div>
          </div>
          <div class="mix prt-card other">
            <div class="prt-image">
              <img src="./assets/Yams1.jpg" alt="">
              <div class="prt-overlay">
                <span class="prt-icon zoom-icon" style="--i: 0s">
                  <i class="uil uil-search-plus"></i>
                </span>
                <a target="_blank" href="https://github.com/happizy/Yams" class="prt-icon" style="--i: 0.15s">
                  <i class="uil uil-link-h"></i>
                </a>
              </div>
            </div>
            <div class="prt-desc">
              <h3>Jeu de Yams en C</h3>
              <a target="_blank" href="https://github.com/happizy/Yams" class="btn secondary-btn sm">Plus d'infos</a>
            </div>
          </div>
          <div class="mix prt-card mobile">
            <div class="prt-image">
              <img src="./assets/NapMap.jpg" alt="">
              <div class="prt-overlay">
                <span class="prt-icon zoom-icon" style="--i: 0s">
                  <i class="uil uil-search-plus"></i>
                </span>
                <a target="_blank" href="https://github.com/happizy/NapMap" class="prt-icon" style="--i: 0.15s">
                  <i class="uil uil-link-h"></i>
                </a>
              </div>
            </div>
            <div class="prt-desc">
              <h3>Réveil géographique</h3>
              <a target="_blank" href="https://github.com/happizy/NapMap" class="btn secondary-btn sm">Plus d'infos</a>
            </div>
          </div>
          <div class="mix prt-card other">
            <div class="prt-image">
              <img src="./assets/Jedede1.jpg" alt="">
              <div class="prt-overlay">
                <span class="prt-icon zoom-icon" style="--i: 0s">
                  <i class="uil uil-search-plus"></i>
                </span>
                <a target="_blank" href="https://github.com/happizy/JeuDeDes" class="prt-icon" style="--i: 0.15s">
                  <i class="uil uil-link-h"></i>
                </a>
              </div>
            </div>
            <div class="prt-desc">
              <h3>Jeu de dés</h3>
              <a target="_blank" href="https://github.com/happizy/JeuDeDes" class="btn secondary-btn sm">Plus d'infos</a>
            </div>
          </div>
          <div class="mix prt-card other">
            <div class="prt-image">
              <img src="./assets/King.jpg" alt="">
              <div class="prt-overlay">
                <span class="prt-icon zoom-icon" style="--i: 0s">
                  <i class="uil uil-search-plus"></i>
                </span>
                <a target="_blank" href="https://github.com/happizy/JeuDeGestion" class="prt-icon" style="--i: 0.15s">
                  <i class="uil uil-link-h"></i>
                </a>
              </div>
            </div>
            <div class="prt-desc">
              <h3>Jeu de gestion</h3>
              <a target="_blank" href="https://github.com/happizy/JeuDeGestion" class="btn secondary-btn sm">Plus d'infos</a>
            </div>
          </div>
          <div class="mix prt-card other">
            <div class="prt-image">
              <img src="./assets/Docker.2.jpg" alt="">
              <div class="prt-overlay">
                <span class="prt-icon zoom-icon" style="--i: 0s">
                  <i class="uil uil-search-plus"></i>
                </span>
                <a target="_blank" href="https://github.com/happizy/OCR-Converter" class="prt-icon" style="--i: 0.15s">
                  <i class="uil uil-link-h"></i>
                </a>
              </div>
            </div>
            <div class="prt-desc">
              <h3>Convertisseur Png/Pdf</h3>
              <a target="_blank" href="https://github.com/happizy/OCR-Converter" class="btn secondary-btn sm">Plus d'infos</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- --------- Testimonials Section --------- -->

    <!-- --------- Contact Section --------- -->

    <section class="contact section" id="contact">
      <img src="./assets/triangle.png" class="shape triangle">
      <img src="./assets/square2.png" class="shape square">
      <div class="container">
        
        <div class="contact-info">
          <h3 class="sub-heading">Me contacter</h3>
          <h1 class="heading">Travaillons ensemble.</h1>
          <p class=" text">Je suis convaincu que mes compétences pourraient s'avérer utiles au sein de votre entreprise et que votre expérience m'apportera la progression que je recherche.
          </p>
          <a href="mailto:pro.martinrouxel@gmail.com" class="mail">pro.martinrouxel@gmail.com <i class="uil uil-arrow-right"></i></a>
        </div>

        <form method="post" action="" class="contact-form">
          <h3>Envoyez moi un message</h3>
          <input type="text" name="nom" placeholder="Votre nom" class="form-input" required>
          <input type="email" name="email" placeholder="Votre email" class="form-input" required>
          <textarea placeholder="Votre message" class="form-input" name="message" required></textarea>
          <input type="submit" value="Envoyer" class="btn">
        </form>
        <?php
        if (isset($_POST['message'])) {
          $entete  = 'MIME-Version: 1.0' . "\r\n";
          $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
          $entete .= 'From: contact@martin-rouxel.com' . "\r\n";
          $entete .= 'Reply-to: ' . $_POST['email'];

          $message = '<h1>Message envoyé depuis le formulaire de contact</h1>
          <p><b>Email : </b>' . $_POST['email'] . '<br>
          <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

          $retour = mail('pro.martinrouxel@gmail.com', $_POST['nom'], nl2br($message), $entete);
        }
        ?>
      </div>
      
    </section>

    <!-- --------- Subscription Section --------- -->
  </main>

  <footer>
    <div class="container">
      <a href="#" class="logo">Portf<span>olio.</span></a>
      <p class="text">&copy; Copyright 2022. Tous droits réservés. <br><a target="_blank" href="./assets/mentions_legales.pdf" class="text linkfooter">mentions légales</a></p>
      <ul class="social-media">
        <li>
          <a target="_blank" href="https://github.com/happizy" class="social-link">
            <i class="uil uil-github"></i>
          </a>
        </li>
        <li>
          <a target="_blank" href="https://twitter.com/LeMartinPro" class="social-link">
            <i class="uil uil-twitter"></i></a>
        </li>
        <li>
          <a target="_blank" href="https://www.linkedin.com/in/martin-rouxel-57820a209/" class="social-link">
            <i class="uil uil-linkedin-alt"></i></a>
        </li>
      </ul>

    </div>
  </footer>
  <div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>
  <!-- JavaScript Files -->
  <script>
    let loader_wrapper = document.querySelector(".loader-wrapper");
    window.addEventListener("load", function(){
      loader_wrapper.parentElement.removeChild(loader_wrapper);
    });
  </script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="./js/mixitup.min.js"></script>
  <script src="./js/app.js"></script>
</body>

</html>