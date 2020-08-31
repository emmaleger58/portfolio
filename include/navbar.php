<?php
include 'header.php';
 ?>

 <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light">
     <a id="nome" class="navbar-brand" href="accueil.php">Emma Léger</a>
     <a id="scendi" style="display: none" class="navbar-brand" href="accueil.php">SCROLL DOWN!!</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
       <ul class="navbar-nav mt-2 mt-lg-0">
         <li class="nav-item">
           <a class="nav-link" href="projets.php">Projects</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="about.php">About</a>
         </li>
       </ul>
     </div>
   </nav>

   <?php
   include 'footer.php';
    ?>
