<?php 
require_once('../../utils/common.php');
require_once(SITE_ROOT.'utils/database.php');
require_once(SITE_ROOT.'utils/funcs.php');
$_SESSION['currentPage'] = "scores";
$pdo = connectToDbAndGetPdo();
if(!isset($_SESSION['user'])){
  sendMessage("error", "Veuillez vous connecter", "../../login.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/header.css">
    <link rel="stylesheet" href="../../assets/css/main_score.css">
    <link rel="stylesheet" href="../../assets/css/footerindex.css">
    <script src="https://kit.fontawesome.com/fd7b39a087.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: #151231; background-size: 1520px 800px;">
    <div class="under-header" id="top">        
    
        <div class="header">
            
        <a href="../../index.php" class="lien" style="font-size: 1.5em;">The Power of memory</a>
        <div class="header-right">
        <a href="../../index.php" class="lien">Accueil</a>
        <a href="index.php" class="lien">Jeu</a>
        <a href="scores.php" class="lien">Scores</a>
        <a href="../../login.php" class="lien">Connexion</a>
        <a href="../../register.php" class="lien">Inscription</a>
        <a href="../../myAccount.php" class="lien">Mon espace</a>
        <a href="../../contact.php" class="lien">Nous contacter</a>
            </div>
            
          </div>
        </br></br></br>
          <center><br><h1 style="margin-top: 0px; display: block;">The Power Of Memory</h1></center>
        </div>

    
      
    </div>
      <section>
      </div>
      <br>



    </div>
    <br>
      


      
      </table>
      </center>

<?php 



?>
<div class="flex-container">
        <form method="GET">
      <input style="font-size: 13px;width: 22.9%;" type="text" placeholder="Recherche par nom d'utilisateur" name="usernametofind">
      <button type="submit" name="submitsearch" style="width: 22.9%; height:40px; border: none; background-color:#ec9123;" class="espace-button"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>
        <div class="flex-row">
          <div class="flex-header">pseudos joueurs</div>
          <div class="flex-header">levels</div>
          <div class="flex-header">scores</div>
          <div class="flex-header">dates</div>
        </div>


        <?php
if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['submitsearch']) && isset($_GET['usernametofind']))
{
$stmt = $pdo->prepare('SELECT *
FROM scores as s
LEFT JOIN players AS p
	ON p.id_player = s.id_player
WHERE p.pseudo LIKE "%":username"%"');
$results = $stmt->execute([
  ":username" => $_GET['usernametofind']
]);
}
else{
  $stmt = $pdo->prepare('SELECT S.*, P.* 
  FROM scores AS S
  LEFT JOIN players AS P ON S.id_player = P.id_player');
  $results = $stmt->execute();

}
$results = $stmt->fetchAll();



foreach($results as $result)
{
  
        ?>
        <div class="flex-row" <?php if($result->id_player == $_SESSION['user']['id']){ echo 'style="background-color: yellow;"'; } ?> >
          <div class="flex-data"><?php echo $result->pseudo; ?></div>
          <div class="flex-data"><?php echo $result->game_strength; ?></div>
          <div class="flex-data"><?php echo $result->game_score; ?></div>
          <div class="flex-data"><?php echo $result->game_date; ?></div>
        </div>
<?php } ?>
       
          </div>
      
      
          </br> </br> </br> </br>   



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