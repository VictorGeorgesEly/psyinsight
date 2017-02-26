<?php
require_once 'php/fonctions.php';

if(isset($_POST['form_contact']))
{
  if (!empty($_POST['nom']) &&
      !empty($_POST['societe']) &&
      !empty($_POST['email']) &&
      !empty($_POST['message'])
    )
  {
    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
    {
      if(SendMail()){
        $msg="Votre message a bien été envoyé !";
      }
    }
    else{
      $msg="L'adresse mail n'est pas valide";
    }
  }
  else
  {
    $msg="Tous les champs doivent être complétés !";
  }
}
