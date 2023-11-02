
<?php require_once("utils/common.php") ?>
<!DOCTYPE html>
<html lang="fr">
<?= require_once(SITE_ROOT."partials/head.php");?>
<body style="background-color: #151231; background-size: 1520px 800px;">
<?= require_once(SITE_ROOT.'partials/header.php')?>


    <main>
        <br>
        <br>
        <div class="block-container" style="justify-content: center;">
            <div class="block" style="width: 70%; height: 47vw;">
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
            <div class="file-upload">
                <label for="file">Choisir une image</label>
                <input type="file" id="file" name="file">
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

