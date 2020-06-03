<?php get_header(); ?>

<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" width="40" height="30" alt="Site Logo">
      Automacile</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_stylesheet_directory_uri(); ?>/automatisme.php">Automatisme</a>
      </li>
    </ul>
  </div>
</nav>
</div>

<!-- JUMBOTRON -->
<div class="coverlayDeTete">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/industrial-robot-technology-work-future-power_shutterstock_1160699962.jpg" class="img-fluid h-100 d-inline-block" alt="Automacile">
</div>

<div class="container">
    <div class="card-deck">
        <div class="card align">
            <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/instruction.png" alt="Certificat">
            <div class="card-body bg-primary text-white font-weight-bold">
                <h4 class="card-title">Titre 01</h4>
                <p class="card-text">Contenu de la carte 01Contenu de la carte 01Contenu de la carte 01Contenu de la carte 01Contenu de la carte 01Contenu de la carte 01Contenu de la carte 01Contenu de la carte 01Contenu de la carte 01Contenu de la carte 01Contenu de la carte 01Contenu de la carte 01Contenu de la carte 01v</p>
                <a href="#" class="btn btn-secondary btn-block stretched-link">See profile</a>
            </div>
        </div>
        <div class="card ">
            <div class="card-body bg-danger text-white font-weight-bold">
                <h5 class="card-title">Titre 02</h5>
                <p class="card-text">Contenu de la carte 02Contenu de la carte 02Contenu de la carte 02Contenu de la carte 02Contenu de la carte 02Contenu de la carte 02Contenu de la carte 02Contenu de la carte 02Contenu de la carte 02Contenu de la carte 02Contenu de la carte 02Contenu de la carte 02</p>
                <a href="#" class="btn btn-secondary btn-block stretched-link">See profile</a>
            </div>
            <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/certificate.png" alt="Certificat">
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/job.png" alt="Certificat">
            <div class="card-body bg-success text-white font-weight-bold">
                <h5 class="card-title">Titre 03</h5>
                <p class="card-text">Contenu de la carte 03Contenu de la carte 03Contenu de la carte 03Contenu de la carte 03Contenu de la carte 03Contenu de la carte 03Contenu de la carte 03Contenu de la carte 03Contenu de la carte 03Contenu de la carte 03Contenu de la carte  de la carte 03Contenu de la carte 03Contenu de la carte 03 la carte 03Contenu de la carte 03Contenu de la carte 03Contenu de la carte 03Contenu de la carte 03Contenu de la carte 03Contenu de la carte 03</p>
                <a href="#" class="btn btn-secondary btn-block stretched-link">See profile</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <p></p>
</div>
<div class="container">
    <p></p>
</div>

<!-- Carousselle -->
<div class="container">
    <p></p>
    <div id="carouselControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apprenant.jpg" class="d*block w-100" alt="Apprenant">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apprenant2.jpg" class="d*block w-100" alt="Apprenant">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Precedent</span>
        </a>
        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Precedent</span>
        </a>
    </div>  
     <p></p>
</div>


<?php get_footer(); ?>