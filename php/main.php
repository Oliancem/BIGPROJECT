<html lang="en-US">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Oliancem</title>
  <link rel="stylesheet" href="../css/main.css?v=3" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="shortcut icon" href="../images/ABD.svg" type="image/x-icon" />
  <script defer src="../js/main.js?v=5"></script>
</head>
<body>
<div class="wrapper">
  <header>
    <div class="netflixLogo">
      <a id="logo" href="main.php">
        <img src="../images/oliancem_logo.png" alt="Logo Image" />
      </a>
    </div>
    <nav class="main-nav">
      <a href="CV.php">CV</a>
      <a href="game.php">Games</a>
      <a href="contact_form.php">Laisser un message</a>
    </nav>
  </header>
  <section class="main-container">
    <!-- ==================== Programming Section ====================   -->
    <div class="card-container">
      <h1>Projets programmation</h1>
      <div class="card-flex" id="programming-cards"></div>
    </div>

    <!-- ==================== Network Section ====================   -->
    <div class="card-container">
      <h1>Projets réseaux</h1>
      <div class="card-flex" id="network-cards"></div>
    </div>

    <!-- ==================== CyberSecurity Section ====================   -->
    <div class="card-container">
      <h1 id="CV">Projets cybersécurité</h1>
      <div class="card-flex" id="cybersecurity-cards"></div>
    </div>

    <!-- ==================== Social Section ====================   -->

    <section class="link">
      <div class="logos">
        <a href="https://github.com/Oliancem">
          <i class="fab fa-github fa-2x logo"></i>
        </a>
        <a href="https://www.linkedin.com/in/eliott-blanchard-b2b11b220/">
          <i class="fab fa-linkedin fa-2x logo"></i>
        </a>
        <a href="https://tryhackme.com/p/Oliancem">
          <i class="fas fa-cloud fa-2x logo"></i>
        </a>
        <a href="https://www.root-me.org/Oliancem?lang=fr#cf814f988cc7a29b24e2d7c8ca373856">
          <i class="fas fa-skull fa-2x logo"></i>
        </a>
      </div>
    </section>

    <!-- ==================== Footer ====================   -->
    <footer>
      <p>&copy 2023 Oliancem</p>
      <p>Eliott Blanchard &copy 2023</p>
    </footer>
  </section>
</div>

<!-- ==================== Modal ====================   -->
<div id="myModal" class="modal">
  <div class="model-card-wrapper">
    <span class="close">&times;</span>
    <span id="close-mobile" class="close-mobile">&times;</span>
    <div class="model-card-flex">
      <div class="modal-left">
        <img class="modal-content" id="img01" />
      </div>
      <div class="modal-right">
        <h2 id="subject"></h2>
        <h3 id="recommendation"></h3>
        <div class="seasons">
          <span id="episodes"></span>
          <h4 id="season"></h4>
        </div>
      </div>
    </div>
    <div id="caption"></div>
    <div class="modal_socials" id="modal-socials"></div>
  </div>
</div>
</body>
</html>
