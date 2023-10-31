<!DOCTYPE html>
<?php require_once("utils/common.php") ?>
<?php require_once(SITE_ROOT."utils/database.php") ?>
<?php

/* INITIALISATION PDO DB */
$pdo = connectToDbAndGetPdo();
/* REQUETES DE COMPTAGE */
$stmt = $pdo->prepare("SELECT COUNT(*) AS nb_scores FROM scores");
$stmt->execute();
$result = $stmt->fetch();
$nbgames = $result->nb_scores;

$stmt = $pdo->prepare("SELECT COUNT(*) AS nb_players FROM players");
$stmt->execute();
$result = $stmt->fetch();
$nbplayers = $result->nb_players;

$stmt = $pdo->prepare("SELECT MAX(game_score) AS maxscore FROM scores ");
$stmt->execute();
$result = $stmt->fetch();
$maxscore = $result->maxscore;


    
      




?>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Accueil</title>
            <link rel="stylesheet" href="assets/css/headerindex.css">
            <link rel="stylesheet" href="assets/css/mainindex.css">
            <link rel="stylesheet" href="assets/css/footerindex.css">
            <script src="https://kit.fontawesome.com/fd7b39a087.js" crossorigin="anonymous"></script>
        </head>
        <body class="index" style="background-color: #151231;">
            <header>
                <div class="under-header" >
                    <div class="header">
                    <a href="index.php" class="lien" style="font-size: 1.5em;">The Power of memory</a>
                    <div class="header-right">
                    <a href="index.php" class="lien">Accueil</a>
                    <a href="games/memory/index.php" class="lien">Jeu</a>
                    <a href="games/memory/scores.php" class="lien">Scores</a>
                    <a href="login.php" class="lien">Connexion</a>
                    <a href="register.php" class="lien">Inscription</a>
                    <a href="myAccount.php" class="lien">Mon espace</a>
                    <a href="contact.php" class="lien">Nous contacter</a>
                        </div>
                    </div>
                    <br>

                    <div class="titreprinc">
                        <center><h1 style="color: rgb(255, 255, 255); font-size: 5vw;">BIENVENUE DANS <br> NOTRE STUDIO !</h1></center>
                        <center><h3 style="color: #cab8c1; font-size: 1vw;">Venez challenger les cerveaux les plus agiles!</h3></center>
                        <center><a href="inscription.html"><button onclick="window.location.href = '';" class="bouton_jouer" type="button">JOUER !</button></a></center>
                    </div>
                </div>
            </header>
            <main>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="triplepaysages">
                    <div class="paysage1"><img src="assets/img/zelda.jpeg" style="width: 37vw;"></div>
                    <div class="paysage2et3">
                        <div class="paysage2"><img src="assets/img/valorant.webp" style="height: 23vw;"></div>
                        <div class="paysage3"><img src="assets/img/r6.png" style="height: 23vw;"></div>
                    </div>
                </div>

                <div class="text123">
                    <div class="text_number">
                        <div class="number">
                            <h2>01</h2>
                        </div>
                        <div class="text">
                            <h3>Lorem psum</h3>
                            <p style="color:#cab8c1; font-size: 1.1vw;" >Quisque commodo facilisis purus
                                Interdum volutpat arc viverra sed
                                ctlam sodales convallis pretium
                                Aenean pharetra laoreet lorem. Nunc
                                daplous tinciaunt sem a pharetra
                                Duis vitae tristique</p>
                        </div>
                    </div>
                    <div class="text_number">
                        <div class="number">
                            <h2>02</h2>
                        </div>
                        <div class="text">
                            <h3>Lorem psum</h3>
                            <p style="color:#cab8c1; font-size: 1.1vw;">Quisque commodo facilisis purus
                                Interdum volutpat arc viverra sed
                                ctlam sodales convallis pretium
                                Aenean pharetra laoreet lorem. Nunc
                                daplous tinciaunt sem a pharetra
                                Duis vitae tristique</p>
                        </div>
                    </div>
                    <div class="text_number">
                        <div class="number">
                            <h2>03</h2>
                        </div>
                        <div class="text">
                            <h3>Lorem psum</h3>
                            <p style="color:#cab8c1; font-size: 1.1vw;">Quisque commodo facilisis purus
                                Interdum volutpat arc viverra sed
                                ctlam sodales convallis pretium
                                Aenean pharetra laoreet lorem. Nunc
                                daplous tinciaunt sem a pharetra
                                Duis vitae tristique</p>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="stats">
                    <div class="div_img_stats"><img src="assets/img/GTA.jpeg" class="img_stats"></div>
                    <div class="quatrestats">
                        <div class="topstats">
                            <div class="firststat">
                                <h2 style="font-size: 2.5vw;"><?= $nbgames; ?></h2>
                                <h4 style="margin-top: -2vw;">Parties jouées</h4>
                            </div>

                            <div class="secstat">
                                <h2 style="font-size: 2.5vw;">1020</h2>
                                <h4 style="margin-top: -2vw;">Joueurs connectés</h4>
                            </div>
                        </div>
                        <div class="botstats">
                            <div class="thirdstat">
                                <h2 style="font-size: 2.5vw;"><?= $maxscore; ?></h2>
                                <h4 style="margin-top: -2vw;">Meilleur Score</h4>
                            </div>

                            <div class="fourthstat">
                                <h2 style="font-size: 2.5vw;"><?= $nbplayers; ?></h2>
                                <h4 style="margin-top: -2vw;">Joueurs inscrits</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <center><h2 style="font-size: 3vw;">Notre Équipe</h2></center>
                <center><p style="color: #cab8c1; font-size: 1.2vw;">Ouisque commodo facilisis purus, interdum volutoat arcu viverra sed</p></center>
                <center><img src="assets/img/mini_logo.png" style="width: 12vw;"></center>

                <div class="equipe123">
                    <div class="equipe">
                        <div class="container"><img src="assets/img/benoit.png" style="width: 15vw;"></div>
                        <h4 style="font-size: 1.4vw;">Benoit</h4>
                        <h5 style="color: #cab8c1; font-size: 1vw;">Manager de Paris</h5>
                        <i class="fa-brands fa-facebook" style="padding: 0.5vw; font-size: 1.3vw;"></i><i class="fa-brands fa-twitter" style="padding: 0.5vw; font-size: 1.3vw;"></i><i class="fa-brands fa-pinterest" style="padding: 0.5vw; font-size: 1.3vw;"></i>
                    </div>
                    <div class="equipe">
                        <div class="container"><img src="assets/img/Delphine.png " style="width: 15vw;"></div>
                        <h4 style="font-size: 1.4vw;">Delphine</h4>
                        <h5 style="color: #cab8c1; font-size: 1vw;">Responsable Coding Factory</h5>
                        <i class="fa-brands fa-facebook" style="padding: 0.5vw; font-size: 1.3vw;"></i><i class="fa-brands fa-twitter" style="padding: 0.5vw; font-size: 1.3vw;"></i><i class="fa-brands fa-pinterest" style="padding: 0.5vw; font-size: 1.3vw;"></i>
                    </div>
                    <div class="equipe">
                        <div class="container"><img src="assets/img/mayssa.png" style="width: 15vw;"></div>
                        <h4 style="font-size: 1.4vw;">Mayssa</h4>
                        <h5 style="color: #cab8c1; font-size: 1vw;">Assistante pédagogique Paris</h5>
                        <i class="fa-brands fa-facebook" style="padding: 0.5vw;font-size: 1.3vw;"></i><i class="fa-brands fa-twitter" style="padding: 0.5vw; font-size: 1.3vw;"></i><i class="fa-brands fa-pinterest" style="padding: 0.5vw; font-size: 1.3vw;"></i>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </main>
            <footer style="background-color: #0c0b26;">
                <div class="footer-content">
                    <div class="info">
                        <div class="miniinfo">
                            <h4 style="font-size: 1.4vw;">Informations</h4>
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
                        <div class="pomtitre"> <h4 style="font-size: 1.4vw;">Power of Memory</h4></div>
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
                <br>
                <p class="mot_gris" style="margin-left: 13.5vw;">Copyright © 2022 Tous droits réservés</p>
                <br>
            </footer>
        </body>
    </html>
