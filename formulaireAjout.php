<?php
include 'header.php';
include 'connexion.php';
?>


    <div class="container px-3 py-3">
      <?php
      //if form has been submitted process it
      if(isset($_POST['submit'])){
        //collect form data
        extract($_POST);

        if($title ==''){
          $error[] = 'Veuillez entrer un titre.';
        }

        if($content ==''){
          $error[] = 'Veuillez entrer un texte';
        }

        if(!isset($error)){
          try {
            $stmt = $db->prepare('INSERT INTO article (Titre, Commentaire, image) VALUES (:Titre, :Commentaire, :image)');
            $filename = $_FILES['image']['name'];
            $target_files = 'img/'.$filename;
            $file_extension = pathinfo($target_files,PATHINFO_EXTENSION);
            $file_extension = strtolower($file_extension); // convertir notre chaine de character en miniscule
            $valid_extension = array('png','jpg','jpeg');
            // on vérifie si le fichier a une extension valide
            if (in_array($file_extension,$valid_extension)) {
              if (move_uploaded_file($_FILES['image']['tmp_name'],$target_files)) {
              $stmt->execute(array(
                ':Titre' => $title,
                ':Commentaire' => $content,
                ':image' => $target_files
                ));
              }
            }

          }
          catch(PDOException $e) {
            echo $e->getMessage();
          }
        }
        if(isset($error)){
          foreach($error as $error){
            echo '<div style="color: red; font-weight: bold; text-align: center;">'.$error.'</div>';
          }
        }
      }
      ?>

      <h2>Ajouter un projet</h2>

        <form class="" action="" method="post" enctype="multipart/form-data">
         <div class="form-group">
           <label for="title">title</label>
           <input type="text" name="title" class="form-control" id="title">
         </div>
         <div class="form-group">
           <label for="content">content</label>
           <textarea name="content" class="form-control" id="content" rows="10"></textarea>
         </div>
          <div class="text-right">
            <button type='reset' class="btn btn-secondary">Annuler</button>
            <button type='submit' class="btn btn-primary" name='submit'>Ajouter</button>
          </div>
          <input type="file" name="image" value="">
      </form>

    </div>


<?php

include 'footer.php';
 ?>
