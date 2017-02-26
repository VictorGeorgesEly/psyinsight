<?php require 'php/form_contact.php'; ?>
<div class="row">
  <div class="input-field col s12 m6 l6">
    <i class="material-icons prefix">account_circle</i>
    <input id="icon_prefix" type="text" class="validate" name="nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>">
    <label for="icon_prefix">Nom</label>
  </div>
  <div class="input-field col s12 m6 l6">
    <i class="material-icons prefix">contacts</i>
    <input id="icon_telephone" type="tel" class="validate" name="societe" value="<?php if(isset($_POST['societe'])) { echo $_POST['societe']; } ?>">
    <label for="icon_telephone">Société</label>
  </div>
</div>
<div class="row">
  <div class="input-field col s12 m6 l6">
    <i class="material-icons prefix">email</i>
    <input id="icon_prefix" type="text" class="validate" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>">
    <label for="icon_prefix">Adresse email</label>
  </div>
  <div class="input-field col s12 m6 l6">
    <i class="material-icons prefix">phone</i>
    <input id="icon_telephone" type="tel" class="validate" name="telephone" value="<?php if(isset($_POST['telephone'])) { echo $_POST['telephone']; } ?>">
    <label for="icon_telephone">Téléphone</label>
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <i class="material-icons prefix">mode_edit</i>
    <textarea id="icon_prefix2" class="materialize-textarea" name="message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
    <label for="icon_prefix2">Message</label>
  </div>
</div>
<?php if(isset($msg)){?>
  <div class="row" id="info">
    <div class="col s12 center">
      <h5 class=""><?php echo $msg; ?></h5>
    </div>
  </div>
<?php } ?>
<div class="row">
  <div class="col s12 center">
    <button class="btn waves-effect waves-light" type="submit" name="form_contact">Envoyer
      <i class="material-icons right">send</i>
    </button>
  </div>
</div>
