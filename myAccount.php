<?php 
require_once('utils/common.php'); 
require_once(SITE_ROOT.'utils/database.php'); 
require_once(SITE_ROOT.'utils/funcs.php');

if(!isset($_SESSION['user'])){
    sendMessage("error", "Veuillez vous connecter", "memories/login.php");
}


$pdo = connectToDbAndGetPdo();

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['editpwd']))
{
    if(!empty($_POST['old_pass']) && !empty($_POST['newpassword']) && !empty($_POST['newpasswordconfirm']) && $_POST['newpassword'] == $_POST['newpasswordconfirm'] )
    {
    // requete pour acceder au mot de passe actuel
     $stmt = $pdo->prepare('SELECT player_password FROM players WHERE id_player=:idp');
     $stmt->execute(
        [   
            ':idp' => $_SESSION['user']['id']
        ]);

        $results = $stmt->fetch();

        if(password_verify($_POST['old_pass'],$results->player_password))
        {
            // SI ANCIEN MDP VALIDE 
            $newPassword = $_POST['newpassword'];
            $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            $stmt = $pdo->prepare('UPDATE players SET player_password = :newpassword WHERE id_player = :idp ');
            $stmt = $stmt->execute(
                [
                    ":newpassword" => $hashedNewPassword,
                    ":idp" => $_SESSION['user']['id']

                ]
                );

            sendMessage('success', 'Un nouveau mot de passe vous a été défini', "myAccount.php");


        }
        else{
            // ERREUR ANCIEN MDP INVALIDE


        }




    }
    else{
        // ERREUR
    }

}

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['editmail']) && !empty($_POST['old_email']) && !empty($_POST['new_email']) )
{

    // requete pour acceder au mot de passe et mail actuel
     $stmt = $pdo->prepare('SELECT player_password, email FROM players WHERE id_player=:idp');
     $stmt->execute(
        [   
            ':idp' => $_SESSION['user']['id']
        ]);
     $results = $stmt->fetch();

        if(password_verify($_POST['passwordconfirmation'],$results->player_password) && $_POST['old_email'] == $results->email)
        {
            // SI MDP VALIDE & ancien mail valide

            $stmt = $pdo->prepare('UPDATE players SET email=:newemail WHERE id_player=:idp');
            $stmt = $stmt->execute(
                 [
                    ":newemail" => $_POST['new_email'],
                    "idp" => $_SESSION['user']['id']

                ]
                );

                sendMessage('success', 'Nouvelle adresse e-mail definie', "myAccount.php");


        }
        else{
            // ERREUR ANCIEN MDP INVALIDE


        }





}





?>
 <?php require_once("utils/common.php");
require_once("utils/funcs.php");

echo getUserPfpPath('13');
if(isset($_SESSION['user']))
{

}
else{
    sendMessage('error', 'Merci de vous connecter.', 'login.php');
}


if(isset($_POST['editpfp']))
{

   $imagetemp = $_FILES['filepfp']['tmp_name'];
   $pfpPath = "userFiles/".$_SESSION['user']['id']."/";


   //Créer le dossier au cas ou il existe pas : 
   $userfilepath = "userFiles/".$_SESSION['user']['id'];
   if(!file_exists($userfilepath)){
    mkdir($userfilepath, 0777, true);
   }


   if(is_uploaded_file($imagetemp)) {
         if(move_uploaded_file($imagetemp, $pfpPath . 'pfp.png')) {
            header('refresh: 0');
         }
         else {
          echo "pas upload";
        }
    }
else {
    echo "pas upload";
}
}

?>
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
    <?php require_once(SITE_ROOT.'partials/header.php'); ?>
        </br></br></br>
          <center><br><h1 style="margin-top: 0px; display: block;">INSCRIPTION</h1></center>
        </div>



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
                    <form  method="POST">
                        <center><p style="color: white; font-size: 1.5em;">Reinitialiser mon mot de passe</p></center>
                        <input style="width: 70%;" type="password" placeholder="Ancien mot de passe" name="old_pass">
                        <br><br>
                        <input style="width: 70%;" type="password" placeholder="Nouveau mot de passe" name="newpassword">
                        <br><br>
                        <input style="width: 70%;" type="password" placeholder="Confirmer nouveau mot de passe" name="newpasswordconfirm">
                        <br><br>
                        <center><button type="submit" name="editpwd" style="width: 60%; height:40px; border: none;" class="espace-button">Modifier mon mot de passe</button></center>
                    </form>
                    <br><br><br><br> 
                </div>
                <div class="divider"></div>
                <div class="emailformcontainer">
                <form  method="POST">
                    <center><p style="color: white; font-size: 1.5em;">Modifier mon adresse e-mail</p></center>
                    <input style="width: 70%;" type="email" placeholder="Ancien email" name="old_email">
                    <br><br>
                    <input style="width: 70%;" type="email" placeholder="Nouvel email" name="new_email">
                    <br><br>
                    <input style="width: 70%;" type="password" placeholder="Mot de passe" name="passwordconfirmation">
                    <br><br>
                    <center><button type="submit" name="editmail" style="width: 60%; height:40px; border: none;" class="espace-button">Modifier mon mot de passe</button></center>
                </form>
                </div>
            </div>
            <form method="POST" enctype="multipart/form-data">
            <div class="file-upload">
                <label for="filepfp">Choisir une image :</label>
                <input type="file" id="filepfp" name="filepfp">
               </div>
               <center><button type="submit" name="editpfp" style="width: 23%; height:40px; border: none;" class="espace-button">Modifier ma photo de profil</button></center>

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

