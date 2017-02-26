<?php
function SendMail() {
  $nom=htmlspecialchars($_POST['nom']);
  $societe=htmlspecialchars($_POST['societe']);
  $email=htmlspecialchars($_POST['email']);
  $telephone=htmlspecialchars($_POST['telephone']);
  $message=htmlspecialchars($_POST['message']);
  $subject = '[PysInsight] Appel d\'offre';
  ob_start();
  include('mail.php');
  $message=ob_get_contents();
  ob_end_clean();
  $header  = 'MIME-Version: 1.0' . "\r\n";
  $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  return mail("service-commercial@psyinsight.com", $subject, $message, $header);
}

function redirect($msg) {
  if ($msg != "") {
    header('Location: /contact?msg='.$msg.'#info');
    return;
  }
  header('Location: /contact');
}

function readJSON($file) {
  $data = file_get_contents($file);
  return json_decode($data, true);
}


function generateTeam() {
  $json = readJSON('data/equipe.json');
  $equipe = $json['equipe'];
  ?><div class="row"><?php
  foreach ($equipe as $index => $membre) {
    ?>
      <div class="col s12 m6 l3">
        <img class="materialboxed responsive-img z-depth-5" src="<?php echo $membre['imageUrl'] ?>">
        <p><?php echo $membre['nom'] ?><br>
        <span class="blue-grey-text"><?php echo $membre['role'] ?></span><br>

        <?php foreach ($membre['links'] as $link): ?>
          <a href="<?php echo $link['url'] ?>" class="url">
            <i class="small material-icons"><?php echo $link['icon'] ?></i>
          </a>
        <?php endforeach; ?>
        </p>
      </div>

      <?php if ($index > 0 && ($index + 1) % 4 == 0): ?>
        </div><div class="row">
      <?php endif; ?>
    <?php
  }
  ?></div><?php
}
