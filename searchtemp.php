<?php
$cookie_name = "apiKey";
    if (!isset($_COOKIE['apiKey'])) {
        header("Location: index.php");
    }
    $baseURL = "https://api.themoviedb.org/3/search/person?$apiKey&language=en-US&query=";
    $director = isset($_POST["search"]) ? urlencode($_POST["search"]) : '';
    if (!empty($director)) {
        $apiURL = "$baseURL$director&include_adult=false";
        $data = file_get_contents($apiURL);
        $result = json_decode($data, true);
        if (isset($result["results"])) {
            $directors = array_filter($result["results"], function ($person) {
                return $person["known_for_department"] === "Directing";
            });
            if (count($directors) > 0) {
                //var_dump($directors);
                foreach ($directors as $director) {
                    echo "<h2>Movies directed by : $director[name]⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀</h2>";
                    foreach ($director["known_for"] as $movie) {
                        //var_dump($movie);
                        if(isset($movie["poster_path"], $movie["title"], $movie["vote_average"], $movie["overview"], $movie["id"])) {
                            $poster_path = $movie["poster_path"];
                            $title = $movie["title"];
                            $vote_average = $movie["vote_average"];
                            $overview = $movie["overview"];
                            $id = $movie["id"];
                            $overview = substr($overview, 0, 200) . "...";
                            echo '<div class="col-md-4">';
                            echo '<div class="card mb-4 shadow-sm">';
                            echo "<img src=\"$img_URL$poster_path\" class=\"card-img-top\">";
                            echo '<div class="card-body">';
                            echo "<h5 class=\"card-title\">$title</h5>";
                            echo "<p class=\"card-text\">Note moyenne : $vote_average</p>";
                            echo "<p class=\"card-text\">Description : $overview</p>";
                            echo '<div class="d-flex justify-content-between align-items-center">';
                            echo '<div class="btn-group">';
                            echo '<button type="button" class="btn btn-sm btn-outline-secondary">Détails</button>';
                            echo '<button type="button" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        } else {
                            echo "Certaines informations sont manquantes pour ce film.<br>";  
                        }
                    }
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "No movies found for director $director.";
            }
        } else {
            echo "No directors found for search term $director.";
        }
    }
?>