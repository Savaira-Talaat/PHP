<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.css"/>
    <link rel="stylesheet" href="Css/profil.css">
    <title>Login</title>
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
          <a href="#" class="nav-item"><img src="cart.png" alt="panier" width="30px" height="30px"/></a>
          <a href="connexion.php"><img src="userIcon.png" alt="userIcon" width="30px" height="30px"></a>
        </div>
      </nav>
    </header>
    <form action = "profil.php" method = "POST">
        <div class="form">
            <div class="loginBox">
                <div class="loginHeader">
                    <span>ApiKey</span>
                </div>
                <div class="inputBox">
                    <label for="apiKey" class="label"></label>
                    <input type='text' id="apiKey" name="apiKey" class="inputField" placeholder="apiKey" required/>
                    <i class='bx bx-key icon'></i>
                </div>
                <div class="inputBox">
                    <input type ="submit" class="inputSubmit" name="inputSubmit" value="Envoyer">
                </div>       
                <div class="logOut">
                    <span>
                        <a href="deconnexion.php">Se déconnecter</a>
                    </span>
                </div>
            </div>
        </div>
    </form>
?>
</body>
</html>