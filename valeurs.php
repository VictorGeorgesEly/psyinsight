<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="fr"><![endif]-->
<!--[if gt IE 9 | !IE]><!-->
<html lang="fr">
<!--<![endif]-->
<head>
  <title>PsyInsight - Valeurs</title>
  <?php include 'require/head.php'; ?>
</head>
<body>
<?php require_once('require/header.php'); ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h1 class="center">Nos valeurs</h1>
        <p class="center">PsyInsight, junior de l’Ecole de Psychologues Praticiens de Paris est la seule junior de France en psychologie.
        Depuis 2013 nous avons à cœur de vous accompagner dans vos projets que ce soit du recrutement, des enquêtes de terrain (enquête qualitative et quantitatif) ou de la cotation de tests (dans le milieu de la recherche ou de l’entreprise).
        Nous mettons à votre service les psychologues de demain, leurs expertises et leurs dynamismes afin de satisfaire l’ensemble de vos attentes.</p>
      </div>
    </div>
    <div class="row center">
      <div class="col s12 m6 l3">
        <i class="large material-icons color">hearing</i>
        <h5>Ecoute</h5>
        <p>Fort de notre parcours à l’Ecole des Psychologues Praticiens, l’écoute est notre premier outil de travail. Nous l’utiliserons tout au long de l’accompagnement de votre projet, aussi bien dans sa création, sa réalisation ou dans son analyse.</p>
      </div>
      <div class="col s12 m6 l3">
        <i class="large material-icons color">person_outline</i>
        <h5>Ethique</h5>
        <p>Digne de confiance, nous tenons à respecter le code de déontologie des psychologues, fondement même de la morale. Nous nous engageons à tenir cette ligne de conduite sur l’ensemble de nos projets.<br><br></p>
      </div>
      <div class="col s12 m6 l3">
        <i class="large material-icons color">group</i>
        <h5>Humain</h5>
        <p>En tant que futur psychologue, l’humain est au centre de nos préoccupations. C’est pourquoi nous avons à cœur de vous proposer notre expertise dans ce domaine.</p>
      </div>
      <div class="col s12 m6 l3">
        <i class="large material-icons color">search</i>
        <h5>Rigueur</h5>
        <p>Psyinsight s’implique auprès de chacun de ses clients, afin d’assurer un suivi rigoureux, personnalisé et de qualité. Tout au long de la mission, l’équipe met tout en œuvre pour vous accompagner et répondre à tous vos besoins.</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="row">
    <div class="parallax-container">
      <div class="parallax"><img src="img/banniere.png" class="darken"></div>
      <div class="container">
        <h1 class="center h1_white">L'école</h1>
        <p class="center white-text">Fondée en <span class="orange-text text-darken-4">1951</span>, l’Ecole de Psychologues Praticiens prépare à l’exercice des métiers du psychologue dans les domaines de l’entreprise, de la santé, de l’éducation et de la justice.  Elle délivre, suite à un cursus de 5 années dont <span class="orange-text text-darken-4">3 années d’alternance</span>, une formation pluridisciplinaire de haut-niveau notamment en psychologie des ressources humaines. La <span class="orange-text text-darken-4">spécialisation entreprise</span> donne accès à des apprentissages dans la gestion des ressources humaines, management et formation et forme aux différentes approches psychologiques du marketing. Le psychologue est considéré à l’Ecole de Psychologues Praticiens comme un <span class="orange-text text-darken-4">expert relationnel</span> et un <span class="orange-text text-darken-4">ingénieur social</span>.</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h1 class="center">Le mouvement</h1>
        <p class="center">La Confédération Nationale des Junior-Entreprises est une association loi 1901 et premier mouvement étudiant confédéré de France. Elle s’engage depuis plus de 47 ans dans les domaines de l’économie et de l’entrepreneuriat, de la formation et de l’insertion professionnelle des jeunes. En France, la CNJE est titulaire des marques Junior-Entreprise, J.E., Junior-Création, Pépinière Junior-Entreprise, Junior-Initiative et Junior-Entrepreneur. Le concept, créé en France, est aujourd’hui présent à l’international avec notamment une forte présence au Brésil.</p>
      </div>
    </div>
    <div class="row">
      <div class="col s12 center">
        <a class="waves-effect waves-light btn" href="contact"><i class="material-icons right">cloud</i>Contacter</a>
      </div>
    </div>
  </div>
</section>
<?php require_once('require/footer.php'); ?>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">
  //menu-responsive
  $('.button-collapse').sideNav({
    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
    draggable: true // Choose whether you can drag to open on touch screens
  }
  );
  //parallax
  $(document).ready(function(){
  $('.parallax').parallax();
  });
</script>
</body>
</html>
