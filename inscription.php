<?php
    session_start();
    if (isset($_SESSION['username'])) {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.css"/>
    <link rel="stylesheet" href="Css/inscription.css">
    <title>Inscription</title>
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
            <form action="form.php" method="POST">
                <input type="text" name="search" placeholder="Tapez pour rechercher...">
                <input type="submit" value="Rechercher">
            </form>
        </div>
        <div class="right-items">
          <a href="#" class="nav-item">Action</a>
          <a href="#" class="nav-item">Drama</a>
          <a href="#" class="nav-item"><img src="cart.png" alt="panier" width="30px" height="30px"/></a>
          <a href="connexion.php"><img src="userIcon.png" alt="userIcon" width="30px" height="30px"></a>
        </div>
      </nav>
    </header>
    <form action = "signUp.php" method = "POST">
        <div class="form">
            <div class="signUpBox">
                <div class="signUpHeader">
                    <span>Inscription</span>
                </div>
                <div class="inputBox">
                    <label for="username" class="label"></label>
                    <input type='text' id="username" class="inputField" placeholder="Username" required/>
                    <i class="bx bx-user icon"></i>
                </div>
                    <br>
                    <br>
                <div class="inputBox">
                    <label for="pwd" class="label"></label>
                    <input type="password" name="pwd" class="inputField" placeholder="Mot de Passe" required/>
                    <i class="bx bx-lock-alt icon"></i>
                </div>                
                    <br>
                    <br>
                <div class="inputBox">
                    <input type ="submit" class="inputSubmit" value="Envoyer">
                </div>
        </div>  
    </form>    
</body>
</html>