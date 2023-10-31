
<?php require_once("utils/common.php") ?>

<!DOCTYPE html>
  <html lang="fr">
   <?= require_once(SITE_ROOT."partials/head.php");?>
    <body style="background-color: #151231; background-size: 1520px 800px;"></body>

    <body>
        <div class="under-header" id="top">        
        
        <div class="header">
          <div id="contentContainer">
          <a href="index.php" class="lien" style="font-size: 1.5em;">The Power of memory</a>
          <div class="header-right">
          <a href="index.php" class="lien">Accueil</a>
          <a href="games/memory/index.php" class="lien">Jeu</a>
          <a href="games/memory/scores.php" class="lien">Scores</a>
          <a href="login.php" class="lien">Connexion</a>
          <a href="register.php" class="lien">Inscription</a>
          <a href="myAccount.php" class="lien">Mon espace</a>
          <a href="contact.php" class="lien">Nous contacter</a>
            </div></div></div>
          </br></br></br></br>
            <center><br><h1 style="margin-top: 0px; display: block;">CONNEXION</h1></center>
          </div>

        
          
        </div>
          <section>
          </div>
          <br>
                  
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
                      <button type="submit" name="loginme" class="button_validation_inscription">Connexion</button>
                      <br><br>

                    
                  </center>
                </br> </br> </br> 

          </form>
          </section>


          <?= require_once(SITE_ROOT."partials/footer.php"); ?>
    </body>


  </html>