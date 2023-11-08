    <?php require_once("utils/common.php") ?>
    <!DOCTYPE html>
    <html lang="fr">
    <?= require_once(SITE_ROOT."partials/head.php");?>
    <body style="background-color: #151231; background-size: 1520px 800px;">
    <?= require_once(SITE_ROOT.'partials/header.php')?>
    <br>
            
        </br>
        <form action="utils/userConnexion.php" method="post">

        <?php if(isset($_GET['error'])){ echo '<center> <span style="color: red;">'.$_GET['error'].'</span></center>'; }?>
    <div class="input-container"></div>
    <center><label for="email"></label>
        <input type="text" id="email" name="email" placeholder="  Email" style="height: 2vw; width: 31.5vw; font-size: 1.1vw; " required> </center>
    </br>

    <center><label for="pseudo"></label>
        <input type="text" name="pseudo" id="pseudo" placeholder="  Pseudo" style="height: 2vw; width: 31.5vw; font-size: 1.1vw; " />
    </br></br>

        <label for="mdp"></label>
        <input type="password" name="passe" id="mdp" onchange="afficherResultat()" placeholder="  Mot de passe" style="height: 2vw; width: 31.5vw; font-size: 1.1vw; "/></center> 
        <center><p id="resultat" style="color: white;"></p></center>
        <br>
        <center><label for="comfirm_mdp"></label>
            <input type="password" id="comfirm_mdp" name="comfirm_mdp" placeholder="  confirmez le mot de passe" style="height: 2vw; width: 31.5vw; font-size: 1.1vw; " required></center>

            </br>

            <center>
            <button type="submit" name="registerme" class="button_validation_inscription">Inscription</button>
            <br><br>
            </center>
    </center>
    </form>
    </form>

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

    <script>

    function longueurmdp(password) {
        return password.length >= 8;
    }

    function verifeCaractereSpeciale(password) {
        const specialCharacterRegex = /[!@#\$%\^&\*\(\)_\+\-=\[\]{};':"\\|,.<>\/?]+/;
        return specialCharacterRegex.test(password);
    }

    function contientMajuscule(password) {
        const regexMajuscule = /[A-Z]/;
        return regexMajuscule.test(password);
    }


    function verifieChiffre(password) {
        const regexChiffre = /[0-9]/; 
        return regexChiffre.test(password);
    }

    function MotDePasseFort() {
        var motDePasse = document.getElementById('mdp');
        return longueurmdp(motDePasse.value) && verifeCaractereSpeciale(motDePasse.value) && contientMajuscule(motDePasse.value) && verifieChiffre(motDePasse.value);
    }
    function MotDePassemoyen() {
        var motDePasse = document.getElementById('mdp');
        return longueurmdp(motDePasse.value) && contientMajuscule(motDePasse.value) && verifieChiffre(motDePasse.value);

    }
            

        function afficherResultat() {
    var motDePasse = document.getElementById('mdp');
    var resultat = document.getElementById('resultat');
    
    if (MotDePasseFort()) {
        resultat.innerText = "Mot de passe fort";
        resultat.className = 'text-fort'; 
    } else if (MotDePassemoyen()) {
        resultat.innerText = "Mot de passe moyen";
        resultat.className = 'text-moyen'; 
    } else {
        resultat.innerText = "Mot de passe faible";
        resultat.className = 'text-faible';
    }
}


    </script>

    </html>
