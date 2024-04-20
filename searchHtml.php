<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil</title>
    <link rel="stylesheet" href="Css/search.css" />
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"/>
  </head>
  <body>
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
                <a href="#" class="nav-item"><img src="cart.png" alt="panier" width="30px" height="30px"/></a>
                <a href="connexion.php"><img src="userIcon.png" alt="userIcon" width="30px" height="30px"></a>
            </div>
        </nav>
    </header>
    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php include('search.php'); ?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>