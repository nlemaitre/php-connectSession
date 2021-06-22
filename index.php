<?php
// Start une session 
session_start();  


if (isset($_SESSION['login']) && isset($_SESSION['mdp'])) {
    $login = $_SESSION['login'];
    $mdp = $_SESSION['mdp'];
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Accueil du site</title>
    </head>
    <body>
        <?php
        if (isset($login) && isset($mdp)) {
            echo "Bienvenue, " . ($login) . ". Votre mot de passe est " . ($mdp) . ".";
            echo "<h1>Accueil du site</h1>";
        }
        else { ?>
           <p>L'accès à cette page est réservé aux utilisateurs authentifiés</p>
           <p><a href="login.php">Se connecter</a></p>
        <?php } ?>
    </body>
</html>