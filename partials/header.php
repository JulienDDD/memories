<div class="under-header" id="top">

    <div class="header">

    <a href="index.php" class="lien" style="font-size: 1.5em; <?php if($_SESSION['currentPage'] == 'acceuil'){ echo 'color: gray;'; } ?>">The Power of memory</a>
    <div class="header-right">
    <a href="index.php" class="lien">Accueil</a>
    <a href="games/memory/index.php" class="lien" style="<?php if($_SESSION['currentPage'] == 'Jeu'){ echo 'color: #EC9224;'; } ?>">Jeu</a>
    <a href="games/memory/scores.php" class="lien" style="<?php if($_SESSION['currentPage'] == 'scores'){ echo 'color: #EC9224;'; } ?>">Scores</a>
    <a href="login.php" class="lien" style="<?php if($_SESSION['currentPage'] == 'connexion'){ echo 'color: #EC9224;'; } ?>">Connexion</a>
    <a href="register.php" class="lien" style="<?php if($_SESSION['currentPage'] == 'inscription'){ echo 'color: #EC9224;'; } ?>">Inscription</a>
    <a href="myAccount.php" class="lien" style="<?php if($_SESSION['currentPage'] == 'espace'){ echo 'color: #EC9224;'; } ?>">Mon espace</a>
    <a href="contact.php" class="lien" style="<?php if($_SESSION['currentPage'] == 'contact'){ echo 'color: #EC9224;'; } ?>">Nous contacter</a>
    <?php 
    if (isset($_SESSION['user'])) {
        echo '<a href="disconnect.php" class="lien">'.$_SESSION['user']['pseudo'].'</a>';
    }
    ?>
        </div>

      </div>
    </br></br></br>
      <center><br><h1 style="margin-top: 0px; display: block;">The Power Of Memory</h1></center>
    </div>
