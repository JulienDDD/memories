<?php
require_once("utils/common.php");
if (isset($_SESSION['user'])) {
    header('Location: myAccount.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
    <?= require_once(SITE_ROOT . "partials/head.php"); ?>
    <body style="background-color: #151231; background-size: 1520px 800px;">
        <?= require_once(SITE_ROOT . 'partials/header.php') ?>
        <br></br>
        <form action="utils/userConnexion.php" method="post">
            <?php if (isset($_GET['error'])) {
                echo '<center> <span style="color: red;">' . $_GET['error'] . '</span></center>';
            } ?>
            <div class="input-container"></div>
            <center>
                <label for="email"></label>
                <input type="text" id="email" name="email" placeholder="  Email" style="height: 2vw; width: 31.5vw; font-size: 1.1vw;" required>
            </center>
            <br>
            <center>
                <label for="pseudo"></label>
                <input type="text" name="pseudo" id="pseudo" placeholder="  Pseudo" style="height: 2vw; width: 31.5vw; font-size: 1.1vw;" />
            </center>
            <br><br>
            <label for="mdp"></label>
            <input type="password" name="passe" id="mdp" onchange="passwordCheck()" placeholder="  Mot de passe" style="height: 2vw; width: 31.5vw; font-size: 1.1vw;" />
            <br>
            <center>
                <label for="comfirm_mdp"></label>
                <input type="password" id="comfirm_mdp" name="comfirm_mdp" placeholder="  Confirmez le mot de passe" style="height: 2vw; width: 31.5vw; font-size: 1.1vw;" required>
            </center>
            <br>
            <center>
                <button type="submit" name="registerme" class="button_validation_inscription" style='height:3em;'>Inscription</button>
                <br><br>
            </center>
        </form>
        <script>
            function passwordCheck() {
                let passwordInput = document.getElementById('mdp');
                let passwordValue = passwordInput.value;
                console.log(passwordValue.length);
                if (passwordValue.length >= 8) {
                    console.log('Supérieur ou égal à 8,');
                } else {
                    console.log("Inférieur à 8,");
                }
            }
        </script>
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
                            <button class "logo_marque"><i class="fa-brands fa-pinterest"></i></button>
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
            <br><br>
            <div class="ancre"><a href="#top" style="color: #1e1c38; text-align: center; text-decoration: none; font-size: 3vw; padding: 0 1vw;">^</a></div>
            <br>
            <p class="mot_gris" style="margin-left: 13.5vw;">Copyright © 2022 Tous droits réservés</p>
        </footer>
    </body>
</html>
