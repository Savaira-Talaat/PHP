<?php
    $apiKey = "api_key=33b4bbc1ba6dc5bb288f0601ace54e33";
    $apiURL = "https://api.themoviedb.org/3/discover/movie?$apiKey&with_genres=28&language=fr-FR";
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
                echo "<img src=\"$img_URL$poster_path\"><br>";
                echo "Titre: $title <br>";
                echo "Description: $overview<br>";
                echo "Note moyenne: $vote_average<br>";
                echo "ID: $id<br>";
                echo "<hr>";
            } else {
                echo "Certaines informations sont manquantes pour ce film.<br>";
            }
        }
    } else {
        echo "Aucun film trouvé.";
    }
?>