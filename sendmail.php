<?php
//
// *** To Email ***
$to = 'contact@oPADALIA.fr';
//
// *** Subject Email ***
$name=$_POST['name'];

$mail=$_POST['email'];

$msg=$_POST['message'];

$subject = "Message de contact à propos de Ôpadalia";

$content = "Objet : Message de contact à propos de Ôpadalia.

Bonjour,

Je suis $name et je suis intéressé(e) par vos produits/services et j’aimerais en savoir plus. Pouvez-vous m’envoyer des informations supplémentaires, notamment sur un sujet spécifique.

Voici mon message: $msg

Je suis également disponible pour discuter plus en détail de mes besoins et de la façon dont vos produits/services pourraient répondre à mes besoins. Merci de me contacter à l’adresse email suivante : $mail.

Je vous remercie pour votre temps et j’attends avec impatience votre réponse.

Cordialement,

$name";








//$subject = $_POST['project'];
//
// *** Content Email ***

//$content =$_POST['message'] ;
//
//*** Head Email ***
$headers = "From: $mail ;Content-type: text/plain; charset=UTF-8\r\n";
//$headers .= "\r\n";

//
//*** Show the result... ***
if (mail($to, $subject, $content, $headers))
{
	echo "Success !!!";
	header("location:remerciement.html");
} 
else 
{
   	echo "ERROR";
}