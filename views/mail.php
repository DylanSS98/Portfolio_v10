<?php

$identite = $_POST['identité'];
$mail = $_POST['email'];
$message = $_POST['story'];




$destinataire = 'dylan.silva.sanches@outlook.fr';
// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
$expediteur = $mail;
$headers = 'MIME-Version: 1.0' . "\n"; // Version MIME
$headers .= 'Content-type: text/html; charset=ISO-8859-1' . "\n"; // l'en-tete Content-type pour le format HTML
$headers .= 'Reply-To: ' . $expediteur . "\n"; // Mail de reponse
$headers .= 'From: "Nom_de_expediteur"<' . $expediteur . '>' . "\n"; // Expediteur
$headers .= 'Delivered-to: ' . $destinataire . "\n"; // Destinataire
$message = '<div style="width: 100%; text-align: center; font-weight: bold"> Bonjour' . $identite . '! \n' . $message . '</div>';
if (mail($expediteur, $message, $headers)) // Envoi du message
{
    echo '<div class="alert alert-success" role="alert">
  Envoyer avec succés !
</div>';
} else // Non envoyé
{
    echo '<div class="alert alert-danger" role="alert">
  Probléme lors de l\'envoi !
</div>';
}
