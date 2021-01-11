<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/scss/envoie_mail.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <title>Redirection</title>
</head>
<body>



<?php


//sécurisation des caractéres transmis
if(empty($_POST['email']) ||
    empty($_POST['identite']) ||
    empty($_POST['story']) ||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
    echo "No arguments Provided";
    return false;
}

$nom = strip_tags(htmlspecialchars($_POST['identite']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['story']));


//parametre de l'envoie de message

$to = 'dylan.silva.sanches@outlook.fr';
$email_subject = "Portfolio, message de $nom";
$email_body = "Vous avez reçus un mail depuis le formulaire de contact de votre site. \n\n"."Voici les détails: \n\nName: $nom\n\nEmail: $email\n\nMessage:\n$message";
$headers = "From: dylan.silva.sanches@outlook.fr\n";
$headers .="Reply-to: $email";
mail($to, $email_subject, $email_body, $headers);
echo '<div class="msg_mail"><p>Message envoyé ! En cours de redirection ...</p></div>
<div class="loader">

        </div>';
header("Refresh: 3; url=../index.php");
return true;



?>
</body>
</html>