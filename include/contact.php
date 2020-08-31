<!-- formulaire de contact -->
<div class="enligne">
<form class="contact" method="post">
  <div class="libelle">
    <label for="name">Name :</label>
    <input type="text" id="name" name="name" required pattern="^[A-Za-z '-]+$" maxlength="25">
</div>
<div class="libelle">
    <label for="mail">E-mail :</label>
    <input type="email" id="mail" name="email" required pattern="^[A-Za-z0-9._%-]+@{1}[A-Za-z0-9.-]+\.{1}[A-Za-z]{2,6}$">
</div>
<div class="libelle">
    <label for="msg">Message :</label>
    <textarea id="msg" name="message" required></textarea>
</div>
<div id="button">
    <button class="btn btn-outline-light" type="submit" >Send</button>
</div>
</form>

<!-- Pop up -->
<div id="snackbar">Your message has been sent.</div>
<div id="snackbar2">Error, try again.</div>

<?php
include "include/config.php";

// if (isset($_POST['message'])) {
//     $position_arobase = strpos($_POST['email'], '@');
//     if ($position_arobase === false)
//         echo '<p>Your email must include an at sign.</p>';
//     else {
//         $retour = mail('emma.leger58@icloud.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
//         if($retour){
//              echo '<script type="text/javascript">myFunction();</script>';}
//         else{
//              echo '<script type="text/javascript">myFunctionBis();</script>';}
//
//     }
//     unset($_POST['email']);
//     unset($_POST['message']);
// }
//




if (!isset($_POST["name"]) && !isset($_POST["email"]) && !isset($_POST["message"])){

}
else {
  $nom = valid_donnees($_POST["name"]);
  $email = valid_donnees($_POST["email"]);
  $message = valid_donnees($_POST["message"]);

        if (isset($nom) && strlen($nom) <= 20 && preg_match("#^[A-Za-z '-]+$#",$nom) && isset($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && isset($message)){

$to = "e.leger@codeur.online";
$headers = 'From:'.$nom.'<'.$email.'>';
$subject = "Message de ".$nom."";

            if (mail($to,$subject,$message,$headers)) {
          echo '<script type="text/javascript">myFunction();</script>';

            }
            else {
              echo '<script type="text/javascript">myFunctionBis();</script>';

              }
            }

        else {
          echo "error";

        }
}
        function valid_donnees($donnees){
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = htmlspecialchars($donnees);
            return $donnees;
        }
?>

<!-- Renseignements -->
<div class="coordonnees center">
<p>Emma Léger</p>
<p>06.49.26.85.20</p>
<p>emma.leger58@icloud.com</p>
</div>
</div>
