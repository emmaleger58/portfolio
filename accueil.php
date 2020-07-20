

    <?php

    include "header.php";
//     include "connexion.php";
//
//     try {
//   $stmt = $db->query('SELECT titre, contenu FROM about');
//   while ($row = $stmt->fetch()) {
//     echo "<br>" . $row['titre'] . " - " . $row['contenu'];
//
//   }
// } catch (\Exception $e) {
//   echo $e->getMessage();
// }


    ?>



<!-- section1 -->
      <section id="section1" class="image-holder">

      <?php
include 'navbar.php';
       ?>

        <!-- Nice to meet you -->
        <div class="">
        <div id="nice">
          Nice to meet you
        </div>
        <br>
        <div id="em">
          I'm Emma, a web developer
        </div>
      </div>

        <!-- Arrow down -->
        <div class="arrow">
              <a href="#section2"><img width="70" src="img/arrow-down-smaller.png" alt="arrow down"></a>
        </div>
      </section>

<!-- section2 -->
    <section id="section2" class="image-holder">

<!-- Title -->
  <div id="main">Main projects</div>

<!-- carousel -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/firstprobis.PNG" class="d-block w-100" alt="screenshot website gratia">
    </div>
    <div class="carousel-item">
      <img src="img/secondpro.PNG" class="d-block w-100" alt="screenshot website bikeshop">
    </div>
    <div class="carousel-item">
      <img src="img/thirdpro.PNG" class="d-block w-100" alt="screenshot files explorer">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- Button -->
  <div id="show">
    <a href="projets.php"><button type="button" class="btn btn-outline-light">Show more</button></a>
  </div>

<!-- Arrow down -->
<div class="arrow">
        <a href="#section3"><img width="70" src="img/arrow-down-smaller.png" alt="arrow down"></a>
  </div>
</section>

<!-- section 3 -->
<section id="section3" class="image-holder">

  <!-- Contactez-moi -->
  <div id="main">
    Contact me !
  </div>

<div class="enligne">
<!-- formulaire de contact -->
<form class="contact" action="index.html" method="post">
  <div class="libelle">
    <label for="name">Nom :</label>
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
    <button class="btn btn-outline-light" type="submit">Envoyer le message</button>
</div>
</form>


<?php
if (isset($_POST['message'])) {
    $position_arobase = strpos($_POST['email'], '@');
    if ($position_arobase === false)
        echo '<p>Votre email doit comporter un arobase.</p>';
    else {
        $retour = mail('emma.leger58@icloud.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
        if($retour)
            echo '<p>Votre message a été envoyé.</p>';
        else
            echo '<p>Erreur.</p>';
    }
}
?>


<!-- Renseignements -->
<div class="coordonnees center">
<p>Emma Léger</p>
<p>06.49.26.85.20</p>
<p>emma.leger58@icloud.com</p>
</div>

</div>

<!-- Réseaux -->
<div id="social">
  <a class="reseaux" target="_blank" href="https://www.linkedin.com/in/emma-leger/">Linkedin</a>
  <a class="reseaux" target="_blank" href="https://github.com/emmaleger58">Github</a>
</div>

</section>

<?php
include "footer.php";
 ?>
