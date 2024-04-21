<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=my_base3;charset=utf8', "root", '');
} catch (Exception $e) {
    die('Erreur :'. $e->getMessage());
}

$username = $_POST['username'];
$password = password_hash($_POST['pwd'], PASSWORD_BCRYPT);
echo "$password";


$requete = "SELECT * FROM users WHERE username = :nom";
$exec = $bdd->prepare($requete);
$exec->execute(["nom" => $username]);
$user = $exec->fetchAll();

if (count($user) > 0) {
    echo "Le username existe déjà !";
} else {
    $query = "INSERT INTO users (username, password) VALUES (:nom, :pass)";
    $exec = $bdd->prepare($query);
    $exec->execute(["nom" => $username, "pass" => $password]);
    echo "Inscription réussie pour l'utilisateur : $username.";
}  
sleep(2);
header("Location: connexion.php");
?>
