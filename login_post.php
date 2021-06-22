<?php
session_start(); 


if (isset($_POST['login']) && isset($_POST['mdp'])) {
    require 'connexion.php';

    $bdd = pdo_connect_mysql();
   
    $requete = "SELECT * FROM utilis WHERE LoginUtil=? AND PassUtil=?";
    $resultat = $bdd->prepare($requete);
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $resultat->execute(array($login, $mdp));
    if ($resultat->rowCount() == 1) {
       
        $_SESSION['login'] = $login;
        $_SESSION['mdp'] = $mdp;
       
        $authOK = true;
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />

</head>
<body>
    <h1>Résultat de l'authentification</h1>
    <?php
    if (isset($authOK)) {
        echo "<p>Authentification reussi vous êtes " . ($login) . "</p>";
        echo '<a href="index.php">Vers accueil</a>';
    }
    else { ?>
        <p>Qui êtes vous ? Information incorrecte </p>
        <p><a href="login.php">Try again </p>
    <?php } ?>
</body>
</html>