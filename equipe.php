<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="fr"><![endif]-->
<!--[if gt IE 9 | !IE]><!-->
<html lang="fr">
<!--<![endif]-->
<head>
  <title>PsyInsight - Equipe</title>
  <?php include 'require/head.php'; ?>
</head>
<body>
<?php require_once('require/header.php'); ?>
<?php require_once 'php/fonctions.php'; ?>
<section>
  <div class="container">
    <div class="row">
      <h1 class="center">Notre équipe</h1>
    </div>
    <?php generateTeam() ?>
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
  //zoom photo
  $(document).ready(function(){
  $('.materialboxed').materialbox();
  });
</script>
</body>
</html>
