<?php
$to = $_POST['email'];
$subject = "Bonnes fêtes de fin d'année et meilleurs voeux!";
$from = 'christmas@tyronczich.dev';

// Pour envoyer du courrier HTML, l'en-tête Content-type doit être défini.
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Créer les en-têtes de courriel
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Composer un simple message électronique HTML
$message = '<html><body>';
$message .= '<h1>Bonjour ' . $_POST['for'] . '!</h1>';
$message .= '<p>Vous avez reçu une carte de voeux de la part de <b>' . $_POST['name'] . '</b>!<br>
Cliquez sur le lien ci-dessous pour afficher la carte de voeux <br><a href="https://tyronczich.dev/demo/christmas/carte.php?for=' . $_POST['for'] . '&name=' . $_POST['name'] . '&message=' . $_POST['message'] . '"><b>Ouvrir</b></a></p>';
$message .= '</body></html>';

// Envoi d'email
if(mail($to, $subject, $message, $headers)){
    echo json_encode(['message' => 'Votre message a été envoyé avec succès.']);
} else{
    echo json_encode(['message' => 'Impossible d\'envoyer des courriels. Veuillez réessayer.']);
}
