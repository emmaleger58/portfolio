<?php

    include "header.php";

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

<?php include 'contact.php';
include 'reseaux.php';
?>

</section>

<?php
include "footer.php";
 ?>
