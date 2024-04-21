<?php
    $cookie_name = "apiKey";
    if (!isset($_COOKIE['apiKey'])) {
        header("Location: index.php");
    }
    $apiKey = "api_key=$_COOKIE[$cookie_name]";
    $apiURL = "https://api.themoviedb.org/3/discover/movie?$apiKey&with_genres=18&language=fr-FR";
    $data = file_get_contents($apiURL);
    $result = json_decode($data, true);
    $img_URL = "https://image.tmdb.org/t/p/w500/";

    if(isset($result["results"])) {
        foreach($result["results"] as $movie) {
            if(isset($movie["poster_path"], $movie["title"], $movie["vote_average"], $movie["overview"], $movie["id"])) {
                $poster_path = $movie["poster_path"];
                $title = $movie["title"];
                $vote_average = $movie["vote_average"];
                $overview = $movie["overview"];
                $id = $movie["id"];
                echo '<div class="col-md-4">';
                echo '<div class="card mb-4 shadow-sm">';
                echo "<img src=\"$img_URL$poster_path\" class=\"card-img-top\">";
                echo '<div class="card-body">';
                echo "<h5 class=\"card-title\">$title</h5>";
                echo "<p class=\"card-text\">Note moyenne : $vote_average</p>";
                echo "<p class=\"card-text\">Description : $overview</p>";
                echo '<div class="d-flex justify-content-between align-items-center">';
                echo '<div class="btn-group">';
                echo "<form action=addtocart.php method=POST>";
                echo "<input type=hidden name=movieId value=$id>";
                echo "<button style='border: solid 1px;' type=submit class=btn btn-sm btn-outline-secondary id=add-to-cart-button>Ajouter au panier</button></form>";
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            } else {
                echo "Certaines informations sont manquantes pour ce film.<br>";
            }
        }
    } else {
        echo "Aucun film trouvé.";
    }
?>