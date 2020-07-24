<?php
include 'header.php';
include 'connexion.php';

$stmt = $db->prepare("SELECT * FROM article ORDER BY Id DESC");
$stmt->execute();
$project_section = $stmt->fetchAll();
foreach ($project_section as $row) {
  echo $row['Titre'] . '<br>';
  echo $row['Commentaire'] . '<br>';
  echo "<img src='".$row['image']."'";
}

include 'footer.php';
    ?>
