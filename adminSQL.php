<?php

include "connexion.php";

if (!empty($_POST['titre']) && !empty($_POST['contenu'])) {

  try {
    $stmt = $db->prepare('INSERT INTO about (titre, contenu) VALUES (:titre, :contenu)');
    $stmt->execute(array(
      ':titre' => $_POST['titre'],
      ':contenu' => $_POST['contenu']
    ));
  } catch (\Exception $e) {
    echo $e->getMessage();
  }
} else {
  echo "Compléter les 2 champs";
}
?>

<form class="" action="" method="post">
  <label for="titre">Titre</label>
  <input type="text" name="titre" value="">

  <label for="contenu">Contenu</label>
  <textarea name="contenu" rows="10"></textarea>

  <input type="submit" name="submit" value="Envoyer">
</form>
