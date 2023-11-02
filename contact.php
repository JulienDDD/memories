<?php require_once("utils/common.php");

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submitcontact']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['nom']) && !empty($_POST['message']))
{
$to = "EMAIL DE L ADMIN";
$headers = "From: ".$_POST['nom']."<".$_POST['email'].">";
$subject = $_POST['subject'];
$message = $_POST['message'];

mail($to, $subject, $message, $headers);


}


?>
<!DOCTYPE html>
<html lang="fr">
<?= require_once(SITE_ROOT."partials/head.php");?>
        <body style="background-color: #151231; background-size: 1520px 800px;">
        <?= require_once(SITE_ROOT.'partials/header.php')?>
        <br>
                
            </br>


        <div class="block-container" style="justify-content: center;">
            <div class="block">
                <br><br>
                <center><div class="circle-icon"><i class="fa-solid fa-mobile-screen"></i></div>
                    
                    <p style="color: white;">06 05 04 03 02</p>

                    
                </center>
            

            </div>


            

            <div class="block">
                <br><br>
                <center><div class="circle-icon"><i class="fa-solid fa-envelope"></i></div>
                
                    <p style="color: white;">support@powerofmemory.com</p>
                </center>

            </div>
            <div class="block">
                <br><br>
                <center><div class="circle-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <p style="color: white;">Paris</p>
                </center>

            </div>
        


            
        </div>
        <form method="POST">
        <div class="contact-form" style="margin-left: 8.7%;">
            <div class="namemail">
                <input type="text" placeholder="Nom" name="nom">
                <input type="text" placeholder="Email" name="email">
            </div>
        <br>
            <input style="width: 36.7%;" type="text" placeholder="Sujet" name="subject">
            <br><br>
            <textarea style="width: 37.7%; color: white; padding: 10px;" name="message" placeholder="Message" class="namemail"></textarea>
            <br>
            <button type="submit" name="submitcontact" class="button1234">Envoyer</button>
        <br><br>
        </div> 
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
    </html>

