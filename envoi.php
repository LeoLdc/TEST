<?php
$nom='';
$nom=$POST['nom'];
echo $nom;
$mail=$HTTP_POST_VARS['mail'];
$objet=$HTTP_POST_VARS['objet'];
$message=$HTTP_POST_VARS['message'];
$sexe=$HTTP_POST_VARS['sexe'];
/////voici la version Mine
$headers = "MIME-Version: 1.0\r\n";

//////ici on détermine le mail en format text
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

////ici on détermine l'expediteur et l'adresse de réponse
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP";

$subject="$objet";
$destinataire="ledocq.leo@laposte.net"; //remplacez "webmaster@votre-site.com" par votre adresse e-mail
$body="$message";
if (mail($sexe,$destinataire,$subject,$body,$headers)) {
echo "Votre mail a été envoyé";
} else {
echo "Une erreur s'est produite";
}
?></p>
<p align="center">Vous allez bientot etre redirigé vers la page d'acceuil<br>
Si vous n'etes pas redirigé au bout de 5 secondes cliquez <a href="http://www.votre-site.com">ici
</a></p>
