<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="fr"><![endif]-->
<!--[if gt IE 9 | !IE]><!-->
<html lang="fr">
<!--<![endif]-->
<head>
  <title>PsyInsight - Contact</title>
  <?php include 'require/head.php'; ?>
</head>
<body>
<?php require_once('require/header.php'); ?>
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col s12">
        <h1 class="center">Nous contacter</h1>
        <div id="googleMap" class="google_maps z-depth-5"></div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l6">
        <p style="font-size: 2em">Adresse : </p>
        <p>
        <strong style="font-size: 1.5em">23 rue du Montparnasse, 75006 PARIS</strong></p>
        <p style="font-size: 2em">Mail :</p>
        <p><strong style="font-size: 1.5em">service-commercial@psyinsight.com</strong></p>
      </div>
      <div class="col s12 m12 l6">
        <h5>Contactez nous !</h5>
        <form action="#info" method="post">
          <?php include 'require/form.php'; ?>
        </form>
      </div>
    </div>
  </div>
</section>
<?php require_once('require/footer.php'); ?>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">
  //menu-responsive
  $('.button-collapse').sideNav({
    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
    draggable: true // Choose whether you can drag to open on touch screens
  }
  );
  //google_Maps
  var myCenter = new google.maps.LatLng(48.844192, 2.327491);

  function initialize() {
    var mapProp = {
      center: myCenter,
      zoom: 17,
      scrollwheel: false,
      draggable: false,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

    var marker = new google.maps.Marker({
      position: myCenter,
    });

    marker.setMap(map);
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>
