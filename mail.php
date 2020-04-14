<?php
  $destinataire = 'contact@lia-stop-harcelement.fr';
  // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
  $expediteur = $_POST['mail'];

  $objet = $_POST['objet'];

  $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
  $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
  $headers .= 'To: '.$destinataire."\n"; // Mail de reponse
  $headers .= 'From: "Nom_de_destinataire"<'.$expediteur.'>'."\n"; // Expediteur

  $message =  '<div style="width: 100%; text-align: center; font-weight: bold"> Bonjour '.$_POST['nom'].'!<br>
                  '.$_POST['corps'].'</div>';

  if(mail($destinataire, $objet, $message, $headers))
  {
      echo '<script languag="javascript" >alert("Votre message a bien été envoyé ");</script>';
  }
  else // Non envoyé
  {
      echo '<script languag="javascript">alert("Votre message n\'a pas pu être envoyé");</script>';
  }
  header('Location: monformulaire.php');
 ?>
 
