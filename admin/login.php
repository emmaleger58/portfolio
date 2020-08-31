

<?php
include "../include/header.php";
require('../include/config.php');
session_start();

if (isset($_POST['user'])){
  $user = stripslashes($_REQUEST['user']);
  $_SESSION['user'] = $user;
  $password = stripslashes($_REQUEST['password']);
    $query = $db->prepare("SELECT * FROM `admin` WHERE user='$user'");
    $query->execute();

    $usertypes = $query->fetchAll();
    // vérifier si l'utilisateur est un administrateur ou un utilisateur
    foreach ($usertypes as $usertype) {
    }


        if (password_verify($password, $usertype['password'])) {
        echo 'Le mot de passe est valide !';
        if ($usertype['type'] == 'admin') {
          header('location: home.php');
        }
    } else {
        echo '<div class="sucess">Le mot de passe est invalide.';
      }



}


?>
<link rel="stylesheet" href="css/admin.css">
</head>
<body class='bodylog'>
<form class="box" action="" method="post" name="login">
<h1 class="box-title">Connexion</h1>
<div class="m-4">

<input type="text" class="box-input" name="user" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
</div>


<p> <a href="../accueil.php">Accueil</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</div>


<?php include '../include/footer.php'; ?>
