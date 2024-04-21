<?php
$movieId = $_POST['movieId'];                 
if (!isset($_COOKIE['apiKey'])) {
    header("Location: index.php");
    exit;
}
$apiKey = "api_key=" . $_COOKIE['apiKey'];
$apiURL = "https://api.themoviedb.org/3/movie/$movieId?$apiKey&language=fr-FR";
$data = file_get_contents($apiURL);
$movie = json_decode($data, true);
$poster_path = $movie['poster_path'];
$base_url = "https://image.tmdb.org/t/p/w500";
$title = $movie['title'];
$vote_average = $movie['vote_average'];
$overview = $movie['overview'];
$poster_url = $base_url . $poster_path;
try {
    $bdd = new PDO('mysql:host=localhost;dbname=my_base3;charset=utf8', "root", '');
}
catch (Exception $e) {
    die('Erreur :'. $e->getMessage());
}
    $query = "INSERT INTO cart (poster, titre, note, overview, movieid) VALUES (:poster, :titre, :note, :overview, :movieid)";
    $stmt = $bdd->prepare($query);
    $stmt->bindParam(':poster', $poster_url);
    $stmt->bindParam(':titre', $title);
    $stmt->bindParam(':note', $vote_average);
    $stmt->bindParam(':overview', $overview);
    $stmt->bindParam(':movieid', $movieId);
    $stmt->execute();  
    header("Location: index.php");
?>