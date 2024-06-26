<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil</title>
    <link rel="stylesheet" href="Css/style.css" />
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src=addcart.js></script>
  </head>
  <body>
    <header>
      <nav class="nav-bar">
        <div class="left-items">
          <a href="index.php" class="logo">
            <img src="logo.png" alt="logo" width="30px" height="30px"/>
          </a>
          <a href="index.php" class="nav-item">Accueil</a>
        </div>
        <div class="search">
            <form action="searchHtml.php" method="POST">
                <input type="text" name="search" placeholder="Tapez pour rechercher...">
                <input type="submit" value="Rechercher">
            </form>
        </div>
        <div class="right-items">
          <a href="actionHtml.php" class="nav-item">Action</a>
          <a href="dramaHtml.php" class="nav-item">Drama</a>
          <a href="carthtml.php" class="nav-item"><img src="cart.png" alt="panier" width="30px" height="30px"/></a>
          <a href="connexion.php"><img src="userIcon.png" alt="userIcon" width="30px" height="30px"></a>
        </div>
      </nav>
    </header>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Présentation</h1>
          <p class="lead text-muted">
            <br />
            Bienvenue sur Internet Movies DataBase & co !
            Explorez une sélection impressionnante de films, des classiques aux nouveautés.
            Trouvez facilement votre prochain coup de cœur grâce à notre interface conviviale et notre puissant moteur de recherche.
            Rejoignez-nous dès maintenant pour une expérience cinématographique sans limite !<br />
          </p>
        </div>
      </section>
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <video width="100%" height="100%" controls>
                    <source src="videos/ReadyPlayerOneSP.mp4" type="video/mp4">
                    <source src="videos/ReadyPlayerOneSP.ogg" type="video/ogg">
                </video>
                <div class="card-body">
                  <p class="card-text">
                    Ready Player One<br />
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <form action="detailsHtml.php" method="GET">
                        <input type="hidden" name="movieId" value="333339">
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Détails</button>
                      </form>
                      <form action="addtocart.php" method="POST">
                        <input type="hidden" name="movieId" value="333339">
                        <button type="submit" class="btn btn-sm btn-outline-secondary" id="add-to-cart-button">Ajouter au panier</button>
                      </form>
                      
                    </div>
                    <small>9 min</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <video width="100%" height="100%" controls>
                    <source src="videos/KungFuPanda4.mp4" type="video/mp4">
                    <source src="videos/KungFuPanda4.ogg" type="video/ogg">
                </video>
                <div class="card-body">
                  <p class="card-text">
                    Kung Fu Panda 4<br />
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <form action="detailsHtml.php" method="GET">
                        <input type="hidden" name="movieId" value="1011985">
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Détails</button>
                      </form>
                      <form action="addtocart.php" method="POST">
                        <input type="hidden" name="movieId" value="1011985">
                        <button type="submit" class="btn btn-sm btn-outline-secondary" id="add-to-cart-button">Ajouter au panier</button>
                      </form>
                    </div>
                    <small>9 min</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <video width="100%" height="100%" controls>
                    <source src="videos/GodzillaVSKong.mp4" type="video/mp4">
                    <source src="videos/GodzillaVSKong.ogg" type="video/ogg">
                </video>
                <div class="card-body">
                  <p class="card-text">
                    Godzilla x Kong : le nouvel Empire<br />
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <form action="detailsHtml.php" method="GET">
                        <input type="hidden" name="movieId" value="823464">
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Détails</button>
                      </form>
                      <form action="addtocart.php" method="POST">
                        <input type="hidden" name="movieId" value="823464">
                        <button type="submit" class="btn btn-sm btn-outline-secondary" id="add-to-cart-button">Ajouter au panier</button>
                      </form>
                    </div>
                        <small>9 min</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <video width="100%" height="100%" controls>
                    <source src="videos/DunePartie2.mp4" type="video/mp4">
                    <source src="videos/DunePartie2.ogg" type="video/ogg">
                </video>
                <div class="card-body">
                  <p class="card-text">
                    Dune partie 2<br />
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <form action="detailsHtml.php" method="GET">
                        <input type="hidden" name="movieId" value="693134">
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Détails</button>
                      </form>
                      <form action="addtocart.php" method="POST">
                        <input type="hidden" name="movieId" value="693134">
                        <button type="submit" class="btn btn-sm btn-outline-secondary" id="add-to-cart-button">Ajouter au panier</button>
                      </form>
                    </div>
                    <small>9 min</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <video width="100%" height="100%" controls>
                    <source src="videos/Alienoid.mp4" type="video/mp4">
                    <source src="videos/Alienoid.ogg" type="video/ogg">
                </video>
                <div class="card-body">
                  <p class="card-text">
                    Alienoid<br />
                  </p>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      <form action="detailsHtml.php" method="GET">
                        <input type="hidden" name="movieId" value="601796">
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Détails</button>
                      </form>
                      <form action="addtocart.php" method="POST">
                        <input type="hidden" name="movieId" value="601796">
                        <button type="submit" class="btn btn-sm btn-outline-secondary" id="add-to-cart-button">Ajouter au panier</button>
                      </form>
                    </div>
                    <small>9 min</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <video width="100%" height="100%" controls>
                    <source src="videos/LeSalaireDeLaPeur.mp4" type="video/mp4">
                    <source src="videos/LeSalaireDeLaPeur.ogg" type="video/ogg">
                </video>
                <div class="card-body">
                  <p class="card-text">
                    Le salaire de la peur<br />
                  </p>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      <form action="detailsHtml.php" method="GET">
                        <input type="hidden" name="movieId" value="984324">
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Détails</button>
                      </form>
                      <form action="addtocart.php" method="POST">
                        <input type="hidden" name="movieId" value="984324">
                        <button type="submit" class="btn btn-sm btn-outline-secondary" id="add-to-cart-button">Ajouter au panier</button>
                      </form>
                    </div>
                    <small>9 min</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <video width="100%" height="100%" controls>
                    <source src="videos/AfterThePandemic.mp4" type="video/mp4">
                    <source src="videos/AfterThePandemic.ogg" type="video/ogg">
                </video>
                <div class="card-body">
                  <p class="card-text">
                    After the pandemic<br />
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <form action="detailsHtml.php" method="GET">
                        <input type="hidden" name="movieId" value="935271">
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Détails</button>
                      </form>
                      <form action="addtocart.php" method="POST">
                        <input type="hidden" name="movieId" value="935271">
                        <button type="submit" class="btn btn-sm btn-outline-secondary" id="add-to-cart-button">Ajouter au panier</button>
                      </form>
                    </div>
                    <small>9 min</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <video width="100%" height="100%" controls>
                    <source src="videos/DemonSlayer.mp4" type="video/mp4">
                    <source src="videos/DemonSlayer.ogg" type="video/ogg">
                </video>
                <div class="card-body">
                  <p class="card-text">
                    Demon Slayer : En route vers l'entraînement des piliers<br />
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <form action="detailsHtml.php" method="GET">
                        <input type="hidden" name="movieId" value="1216221">
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Détails</button>
                      </form>
                      <form action="addtocart.php" method="POST">
                        <input type="hidden" name="movieId" value="1216221">
                        <button type="submit" class="btn btn-sm btn-outline-secondary" id="add-to-cart-button">Ajouter au panier</button>
                      </form>
                    </div>
                    <small>9 min</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <video width="100%" height="100%" controls>
                    <source src="videos/FastX.mp4" type="video/mp4">
                    <source src="videos/FastX.ogg" type="video/ogg">
                </video>
                <div class="card-body">
                  <p class="card-text">
                    Fast & Furious X<br />
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <form action="detailsHtml.php" method="GET">
                        <input type="hidden" name="movieId" value="385687">
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Détails</button>
                      </form>
                      <form action="addtocart.php" method="POST">
                        <input type="hidden" name="movieId" value="385687">
                        <button type="submit" class="btn btn-sm btn-outline-secondary" id="add-to-cart-button">Ajouter au panier</button>
                      </form>
                    </div>
                    <small>9 min</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>