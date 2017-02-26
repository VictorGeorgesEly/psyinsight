<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="fr"><![endif]-->
<!--[if gt IE 9 | !IE]><!-->
<html lang="fr">
<!--<![endif]-->
<head>
  <title>PsyInsight - Prestations</title>
  <?php include 'require/head.php'; ?>
</head>
<body>
<?php require_once('require/header.php'); ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h1 class="center" id="recrutement">Nos prestations</h1>
      </div>
    </div>
    <div class="row">
      <div class="col s2">
        <i class="large material-icons color prestations">search</i>
      </div>
      <div class="col s10">
        <h3>Recrutement</h3>
        <p id="qualitative">En tant que véritable expert de l’humain nous vous accompagnons pour choisir les meilleurs talents, en adéquation avec vos attentes et les valeurs de votre entreprise. Notre service comprend la rédaction de l’offre, la recherche, la sélection par entretiens téléphoniques et la prise de références pour toujours vous proposer les profils les plus adaptés à votre demande.</p>
      </div>
    </div>
    <div class="row">
      <div class="col s10">
        <h3>Enquête de climat social</h3>
        <p>Cette prestation à la fois qualitative et quantitative vous permet d’obtenir une base de donnée précise et variée. Exercice régulièrement pratiqué par les réalisateurs de missions, vous obtiendrez un travail de qualité.</p>
      </div>
      <div class="col s2">
        <i class="large material-icons color prestations">description</i>
      </div>
    </div>
    <div class="row">
      <div class="col s2">
        <i class="large material-icons color">face</i>
      </div>
      <div class="col s10">
        <h3>Enquête de satisfaction</h3>
        <p>Là où un client satisfait partage son expérience à 3 personnes, un client insatisfait parle de son mécontentement à 10 personnes. L’outil le plus rapide à mettre en place et le plus efficace reste la réalisation et l’analyse d’une enquête de satisfaction client.</p>
      </div>
    </div>
    <div class="row">
      <div class="col s10">
        <h3>Enquête d’insertion professionnelle</h3>
        <p>Vous investirez dans de forts arguments pour obtenir les meilleurs élèves : un réel moyen de rassurer et motiver vos futurs étudiants sur l’insertion professionnelle de votre école ou université. Quoi de mieux pour donner une meilleure représentation de votre établissement et sa situation dans le monde du travail ?</p>
      </div>
      <div class="col s2">
        <i class="large material-icons color prestations">thumb_up</i>
      </div>
    </div>
    <div class="row">
      <div class="col s2">
        <i class="large material-icons color prestations">sentiment_very_satisfied</i>
      </div>
      <div class="col s10">
        <h3>Satisfaction, évaluation et entretien de sortie des employés</h3>
        <p>Se pencher sur le bon fonctionnement de son service, sur le bien-être au travail et l’accompagnement des salariés suite à une rupture de contrat est une des meilleures approches pour garantir la motivation et par conséquent le bon rendement des employés.</p>
      </div>
    </div>
    <div class="row">
      <div class="col s10" id="tests">
        <h3>Analyse de tests</h3>
        <h5>Recherche</h5>
        <p>Formés par les professionnels du métier les plus compétents, nos réalisateurs vous proposent l’administration et la cotation de tests cliniques (Rorschach, TAT, Patte Noire, …) dans un contexte clinique ou de recherche.</p>
        <h5>Outils de recrutement</h5>
        <p>Nous vous proposons la passation et l’interprétation du test de personnalité SOSIE pour vos évaluations internes et vos recrutements. Nous garantissons une déontologie dans l’utilisation des résultats, avec un retour systématique pour le candidat.</p>
      </div>
      <div class="col s2">
        <i class="large material-icons color prestations">playlist_add_check</i>
      </div>
    </div>
    <div class="col s12 center">
      <a class="waves-effect waves-light btn" href="contact"><i class="material-icons right">cloud</i>Contacter</a>
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
</script>
</body>
</html>
