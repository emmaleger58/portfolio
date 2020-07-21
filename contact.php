<!-- formulaire de contact -->
<div class="enligne">
<form class="contact" action="accueil.php#section3" method="post">
  <div class="libelle">
    <label for="name">Name :</label>
    <input type="text" id="name" name="name" required>
</div>
<div class="libelle">
    <label for="mail">E-mail :</label>
    <input type="email" id="mail" name="email" required>
</div>
<div class="libelle">
    <label for="msg">Message :</label>
    <textarea id="msg" name="message" required></textarea>
</div>
<div id="button">
    <button class="btn btn-outline-light" type="submit" >Envoyer le message</button>
</div>
</form>

<!-- Pop up -->
<div id="snackbar">Your message has been sent.</div>
<div id="snackbar2">Error, try again.</div>

<?php
if (isset($_POST['message'])) {
    $position_arobase = strpos($_POST['email'], '@');
    if ($position_arobase === false)
        echo '<p>Your email must include an at sign.</p>';
    else {
        $retour = mail('emma.leger58@icloud.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
        if($retour){
             echo '<script type="text/javascript">myFunction();</script>';}
        else{
             echo '<script type="text/javascript">myFunctionBis();</script>';}

    }
    unset($_POST['email']);
    unset($_POST['message']);
}
?>

<!-- Renseignements -->
<div class="coordonnees center">
<p>Emma Léger</p>
<p>06.49.26.85.20</p>
<p>emma.leger58@icloud.com</p>
</div>
</div>
