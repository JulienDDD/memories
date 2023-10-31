<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href ="assets/css/main.css">
    <link rel="stylesheet" href ="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footerindex.css">
    <link rel="stylesheet" href="assets/css/footerindex.css">
    <script src="https://kit.fontawesome.com/fd7b39a087.js" crossorigin="anonymous"></script>
    <title>Z</title>
</head>
<body style="background-color: #151231; background-size: 1520px 800px;">
    <div class="under-header" id="top">        
    
        <div class="header">
            
        <a href="index.php" class="lien" style="font-size: 1.5em;">The Power of memory</a>
        <div class="header-right">
        <a href="index.php" class="lien">Accueil</a>
        <a href="games/memory/index.php" class="lien">Jeu</a>
        <a href="games/memory/scores.php" class="lien">Scores</a>
        <a href="login.php" class="lien">Connexion</a>
        <a href="register.php" class="lien">Inscription</a>
        <a href="myAccount.php" class="lien">Mon espace</a>
        <a href="contact.php" class="lien">Nous contacter</a>
            </div>
            
          </div>
        </br></br></br>
          <center><br><h1 style="margin-top: 0px; display: block;">INSCRIPTION</h1></center>
        </div>



    <main>
        <br>
        <br>
        <div class="block-container" style="justify-content: center;">
            <div class="block" style="width: 70%; height: 600px;">
            <br>
            <br>
            <center><div class="circle-icon"><i class="fa-solid fa-user"></i></div>
            <p style="color: white;">MON ESPACE</p>
            <div class="container-forms">
                <div class="passwordformcontainer">
                    <form action="actions/editpassword.php" method="POST">
                        <center><p style="color: white; font-size: 1.5em;">Reinitialiser mon mot de passe</p></center>
                        <input style="width: 70%;" type="password" placeholder="Ancien mot de passe" name="old_pass">
                        <br><br>
                        <input style="width: 70%;" type="password" placeholder="Nouveau mot de passe" name="newpassword">
                        <br><br>
                        <input style="width: 70%;" type="password" placeholder="Confirmer nouveau mot de passe" name="newpasswordconfirm">
                        <br><br>
                        <center><button type="submit" style="width: 60%; height:40px; border: none;" class="espace-button">Modifier mon mot de passe</button></center>
                    </form>
                    <br><br><br><br> 
                </div>
                <div class="divider"></div>
                <div class="emailformcontainer">
                <form action="actions/editemail.php" method="POST">
                    <center><p style="color: white; font-size: 1.5em;">Modifier mon adresse e-mail</p></center>
                    <input style="width: 70%;" type="email" placeholder="Ancien email" name="old_email">
                    <br><br>
                    <input style="width: 70%;" type="email" placeholder="Nouvel email" name="new_email">
                    <br><br>
                    <input style="width: 70%;" type="password" placeholder="Mot de passe" name="passwordconfirmation">
                    <br><br>
                    <center><button type="submit" style="width: 60%; height:40px; border: none;" class="espace-button">Modifier mon mot de passe</button></center>
                </form>
                </div>
            </div>
            </div>
        </div>
    </main>






 
 


 <footer style="background-color: #0c0b26;">
  <div class="footer-content">
      <div class="info">
          <div class="miniinfo">
              <h4 style="font-size: 1.4vw; color: white">Informations</h4>
              <p class="mot_gris">Quisque commodo facilisis purus,</p>
              <p class="mot_gris"><span class="mot_orange">Tel :</span> 06 66 66 66 66</p>
              <p class="mot_gris"><span class="mot_orange">Email :</span> support@powerofmemory.com</p>
              <p class="mot_gris"><span class="mot_orange">Location :</span> Paris</p>
              <div class="social-media">
                  <button class="logo_marque"><i class="fa-brands fa-facebook"></i></button>
                  <button class="logo_marque"><i class="fa-brands fa-twitter"></i></button>
                  <button class="logo_marque"><i class="fa-brands fa-google"></i></button>
                  <button class="logo_marque"><i class="fa-brands fa-pinterest"></i></button>
                  <button class="logo_marque"><i class="fa-brands fa-instagram"></i></button>
              </div>
          </div>
      </div>
      <div class="pom">
          <div class="pomtitre"> <h4 style="font-size: 1.4vw; color: white">Power of Memory</h4></div>
          <div class="listpom">
              <ul>
                  <li style="color: #ec9123; list-style-type: square;"><a href="jeu.html" class="list">Jouer !</a></li>
                  <li style="color: #ec9123; list-style-type: square;"><a href="score.html" class="list">Les scores</a></li>
                  <li style="color: #ec9123; list-style-type: square;"><a href="contact.html" class="list">Nous contacter</a></li>
              </ul>
          </div>
      </div>
  </div>
  <br>
  <br>
  <div class="ancre"><a href="#top" style="color: #1e1c38; text-align: center; text-decoration: none; font-size: 3vw; padding: 0 1vw;">^</a></div>
  <br>
  <p class="mot_gris" style="margin-left: 13.5vw;">Copyright © 2022 Tous droits réservés</p>
  <br>
</footer>
</body>
</html>

