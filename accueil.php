<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Emma Léger">
    <link rel="stylesheet" href="main.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Portfolio</title>
  </head>
  <body>

    <?php
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

        <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#section1">Emma Léger</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="projets.php">Projects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="articles.php">Articles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
              </ul>
            </div>
          </nav>

        <!-- Nice to meet you -->
        <div id="nice">
          Nice to meet you
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
    Contactez-moi !
  </div>

<!-- formulaire de contact -->
<form class="contact" action="index.html" method="post">
  <div class="libelle">
    <label for="name">Nom :</label>
    <input type="text" id="name" name="user_name">
</div>
<div class="libelle">
    <label for="mail">E-mail :</label>
    <input type="email" id="mail" name="user_mail">
</div>
<div class="libelle">
    <label for="msg">Message :</label>
    <textarea id="msg" name="user_message"></textarea>
</div>
<div id="button">
    <button class="btn btn-outline-light" type="submit">Envoyer le message</button>
</div>
</form>

<!-- Réseaux -->
<div id="social">
  <a class="reseaux" target="_blank" href="https://www.linkedin.com/in/emma-leger/">Linkedin</a>
  <a class="reseaux" target="_blank" href="https://github.com/emmaleger58">Github</a>
</div>

</section>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
