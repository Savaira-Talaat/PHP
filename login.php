<?php
session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=my _base3;charset=utf8', "root", '');
}
catch (Exception $e) {
    die('Erreur :'. $e->getMessage());
}

$username = $_POST['username'];

$requete = "SELECT * FROM users WHERE username = :nom";
$exec = $bdd->prepare($requete);
$exec ->execute(["nom" => $username]);
echo "test";
$user = $exec->fetch();

if ($user) {
    if (password_verify($_POST['pwd'], $user['password'])) {
        echo "Connexion réussie";
        $_SESSION['username']=$username;
        header("Location: profilHtml.php");
    }
    else {
        echo "Mot de passe incorrect.";
    }
} else {
    echo "Username n'existe pas";
}

?>