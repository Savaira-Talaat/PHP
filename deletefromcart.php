<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=my _base3;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$movieId = $_POST['movieId'];

$query = "DELETE FROM cart WHERE movieid = :movieid";
$stmt = $bdd->prepare($query);
$stmt->bindParam(':movieid', $movieId);
$stmt->execute();
sleep(1);
header('Location: carthtml.php');
?>