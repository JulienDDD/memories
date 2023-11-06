
<?php require_once("utils/common.php") ?>

<!DOCTYPE html>
  <html lang="fr">
    <?= require_once(SITE_ROOT."partials/head.php");?>
    <body style="background-color: #151231; background-size: 1520px 800px;"></body>
      <?= require_once(SITE_ROOT.'partials/header.php')?>
      <section>
        </br> </br> </br> </br>         
        <form method="POST" action="utils/userConnexion.php">
          <?php if(isset($_SESSION['msgsent'])){ echo $_SESSION['msgsent']; unset($_SESSION['msgsent']);} ?>
          <div class="input-container"></div>
          <center><label for="email"></label>
          <input type="email" id="email" name="email" placeholder="  Email" style="height: 25px; width: 450px; font-size: 1.1em; " required> </center>
          </br>
          <center>
          <label for="mdp"></label>
          <input type="password" name="passe" id="mdp" placeholder="  Mot de passe" style="height: 25px; width: 450px; font-size: 1.1em; "/></center>
          </br>
          <center>
          <button type="submit" name="loginme" class="button_validation_inscription" style='height:3em;'>Connexion</button>
          <br><br>
          </center>
          </br> </br> </br> 
        </form>
      </section>
      <?= require_once(SITE_ROOT."partials/footer.php"); ?>
    </body>
  </html>