<?php
$_SESSION['currentPage'] = $_SERVER['REQUEST_URI'];
?>
<div class="under-header" id="top">
  <div class="header " style="margin-top:-13vw">
    <a href="index.php" class="lien" style="font-size: 1.5em;">The Power of memory</a>
    <div class="header-right">
      <a href="index.php" class="lien">Accueil</a>
      <a href="games/memory/index.php" class="lien" >Jeu</a>
      <a href="games/memory/scores.php" class="lien">Scores</a>
      <a href="login.php" class="lien" <?php if($_SESSION['currentPage'] == '/COURSES/powerofmemory/memories/login.php'): ?> style="color: #EC9224;" <?php endif ?>>Connexion</a>
      <a href="register.php" class="lien" <?php if($_SESSION['currentPage'] == '/COURSES/powerofmemory/memories/register.php'): ?> style="color: #EC9224;" <?php endif ?>>Inscription</a>
      <a href="myAccount.php" class="lien" <?php if($_SESSION['currentPage'] == '/COURSES/powerofmemory/memories/myAccount.php'): ?> style="color: #EC9224;" <?php endif ?>>Mon espace</a>
      <a href="contact.php" class="lien" <?php if($_SESSION['currentPage'] == '/COURSES/powerofmemory/memories/contact.php'): ?> style="color: #EC9224;" <?php endif ?>>Nous contacter</a>
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