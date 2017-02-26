<!DOCTYPE html>
<html>
 <head>
  <title>Appel d'offre</title>
  <meta charset="utf-8">
 </head>
 <body style="font-family: Helvetica, Arial;">
  <h1>Un client vient de formuler une demande !</h1>
  <p>Voici les composantes de cette nouvelle requête pleine d'avenir :</p>

  <p><i>Nom de l'entreprise :</i>
  <?php echo $societe ?></p>

  <p><i>Nom du client :</i>
  <?php echo $nom ?></p>

  <p><i>Email :</i>
  <?php echo $email ?></p>

  <p><i>Teléphone :</i>
  <?php echo $telephone ?></p>

  <p><i>Description du projet :</i>
  <?php echo $message ?></p>

  <p>Avec tous nos voeux pour la réussite de cet appel d'offre,</p>
  <p>L'équipe de développement du site PsyInsight</p>
</body>
</html>
