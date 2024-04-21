<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=my_base3;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$query = "SELECT poster, titre, note, overview, movieid FROM cart";
$stmt = $bdd->prepare($query);
$stmt->execute();

$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (empty($movies)) {
    echo '<div class="col-md-12">';
    echo '<p class="lead text-muted">Votre panier est vide.</p>';
    echo '</div>';
} else {
    foreach ($movies as $movie) {
        $poster_path = $movie["poster"];
        $title = $movie["titre"];
        $vote_average = $movie["note"];
        $overview = $movie["overview"];
        $id = $movie["movieid"];

        echo '<div class="col-md-4">';
        echo '<div class="card mb-4 shadow-sm">';
        echo "<img src=\"$poster_path\" class=\"card-img-top\">";
        echo '<div class="card-body">';
        echo "<h5 class=\"card-title\">$title</h5>";
        echo "<p class=\"card-text\">Note moyenne : $vote_average</p>";
        echo "<p class=\"card-text\">Description : $overview</p>";
        echo '<div class="d-flex justify-content-between align-items-center">';
        echo '<div class="btn-group">';
        echo '<button type="button" class="btn btn-sm btn-outline-secondary">Détails</button>';
        echo "<form action=deletefromcart.php method=POST>";
        echo "<input type=hidden name=movieId value=$id>";
        echo "<button type=submit class=btn btn-sm btn-outline-secondary id=add-to-cart-button>supprimer du panier</button></form>";
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    echo '<div class="col-md-12 text-center">';
    echo '<form action=# method=POST>';
    echo '<button type=submit class="btn btn-primary">Valider le panier</button>';
    echo '</form>';
    echo '</div>';
}
?>