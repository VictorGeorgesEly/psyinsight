<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="fr"><![endif]-->
<!--[if gt IE 9 | !IE]><!-->
<html lang="fr">
<!--<![endif]-->
<head>
  <title>PsyInsight - Accueil</title>
  <?php require_once('require/head.php'); ?>
</head>
<body>
<?php require_once('require/header.php'); ?>
<section>
  <div class="row">
    <div class="container-fluid">
      <div class="parallax-container">
        <div class="parallax"><img src="img/banniere.png" class="darken1"></div>
        <div class="container">
          <br>
          <h1 class="center h1_white">PsyInsight</h1>
          <h5 class="center white-text">Bienvenue chez nous !</h5>
          <div class="after_button center">
            <a href="contact"><button class="button" style="vertical-align:middle"><span>Contact </span></button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="row center">
    <h1>Nos offres</h1>
    <div class="col s12 m6 l3">
      <a href="prestations#recrutement"><i class="large material-icons color">accessibility</i></a>
      <p class="offres">Recrutement</p>
    </div>
    <div class="col s12 m6 l3">
      <a href="prestations#qualitative"><i class="large material-icons color">description</i></a>
      <p class="offres">Enquêtes Qualitatives</p>
    </div>
    <div class="col s12 m6 l3">
      <a href="prestations#qualitative"><i class="large material-icons color">book</i></a>
      <p class="offres">Enquêtes Quantitatives</p>
    </div>
    <div class="col s12 m6 l3">
      <a href="prestations#tests"><i class="large material-icons color">offline_pin</i></a>
      <p class="offres">Tests</p>
    </div>
  </div>
</section>
<section>
  <div class="row">
    <div class="container-fluid">
      <div class="parallax-container">
        <div class="parallax"><img src="img/banniere1.png" class="darken"></div>
        <div class="container">
          <h1 class="center white-text">Témoignages</h1>
          <div class="col s2">
            <img src="img/victor.jpg" alt="" class="circle responsive-img">
            <p class="center white-text"><span>Victor ELY<br>Trésorier</span></p>
          </div>
          <div class="col s10">
            <p class="center white-text">Ayant signé un partenariat avec Psyinsight, nous avons eu l’occasion de les accueillir lors de nos entretiens de recrutement. Leur regard extérieur et entraîné nous a permis de déceler les profils réellement intéressants. Nous avons remarqué très rapidement la qualité de leur analyse et l’aide que cela nous avait apporté dans le choix de nos nouveaux membres.</p>
            <p class="center white-text">Nous conseillons Psyinsight pour toute mission de recrutement !</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <h1 class="center">Nos partenaires</h1>
      <div class="col s12 m6 l4">
        <img src="img/bnp.png" alt="BNP Paribas" class="responsive-img">
      </div>
      <div class="col s12 m6 l4">
        <img src="img/alten.png" alt="Alten" class="responsive-img">
      </div>
      <div class="col s12 m6 l4">
        <img src="img/juniorisep.png" alt="Junior ISEP" class="responsive-img">
      </div>
      <div class="col s12 m6 l4">
        <img src="img/engie.png" alt="ENGIE" class="responsive-img">
      </div>
      <div class="col s12 m6 l4">
        <img src="img/ey.png" alt="EY" class="responsive-img">
      </div>
      <div class="col s12 m6 l4">
        <img src="img/ecole.png" alt="Ecole de psychologues practiciens" class="responsive-img">
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <h1 class="center sr-partner">Un besoin ?</h1>
      <form class="col s12" action="#info" method="post">
        <?php include 'require/form.php'; ?>
      </form>
    </div>
  </div>
</section>
<?php require_once('require/footer.php'); ?>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/scrollreveal.js"></script>
<script type="text/javascript">
  //menu-responsive
  $('.button-collapse').sideNav({
    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
    draggable: true // Choose whether you can drag to open on touch screens
  }
  );
  //Jquery for parallax
  $(document).ready(function(){
  $('.parallax').parallax();
  });
</script>
<script type="text/javascript">
  function() {
    window.sr = ScrollReveal();
    sr.reveal('.sr-partner', {
        duration: 400,
        scale: 0.3,
        distance: '0px'
    }, 200);
  }
</script>
</body>
</html>
