<!DOCTYPE html>
  <html lang="fr">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Jeu</title>
      <link rel="stylesheet" href ="assets/css/main.css">
      <link rel="stylesheet" href ="assets/css/header.css">
      <link rel="stylesheet" href="assets/css/footerindex.css">
      <script src="https://kit.fontawesome.com/fd7b39a087.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-color: #151231;; background-size: 1520px 800px;">
      <div class="under-header">        
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
        <div><center><h1 class="couleur1">LE JEU</h1></center></div>
      </div>
    
      <br/>
      <div class="choix">
        <div class="choix_diff_global">
          <div class="txtdiff"><h2>Choisissez une difficulté :</h2></div>
          <div class="choixdiff123">
            <div class="choixdiff">
              <button class="button_choixdiff">4 x 4</button>
            </div>
            <div class="choixdiff">
              <button class="button_choixdiff">8 x 8</button>
            </div>
            <div class="choixdiff">
              <button class="button_choixdiff">12 x 12</button>
            </div>
          </div>
        </div>
        <div class="choix_theme_global">
          <div class="txttheme"><h2>Choisissez un thème :</h2></div>
          <div class="choixtheme123">
            <div class="choixtheme">
              <button class="button_choixtheme">Thème 1</button>
            </div>
            <div class="choixtheme">
              <button class="button_choixtheme">Thème 2</button>
            </div>
            <div class="choixtheme">
              <button class="button_choixtheme">Thème 3</button>

            </div>
          </div>
        </div>
      </div>
      <div class="global_theme">
        <div class="txt_imgtheme">
          <h4 class="txt_theme">Exemple du thème 1 : </h4>
          <img src="assets/img/ex_theme1.png" class="img_theme">
        </div>
        <div class="txt_imgtheme">
          <h4 class="txt_theme">Exemple du thème 2 : </h4>
          <img src="assets/img/ex_theme2.png" class="img_theme">
        </div>
        <div class="txt_imgtheme">
          <h4 class="txt_theme">Exemple du thème 3 : </h4>
          <img src="assets/img/ex_theme3.png" class="img_theme">
        </div>
      </div>
      <center><div class="border_jeu"></div></center>

  


  
      
   
      
      <br><br>
      <div class="jeu_carte">
        <div class="ligne_jeu">
          <img src="assets/img/dos_carte.png" class="dos_carte">
          <img src="assets/img/dos_carte.png" class="dos_carte">
          <img src="assets/img/dos_carte.png" class="dos_carte">
          <img src="assets/img/dos_carte.png" class="dos_carte">

        </div>
        <div class="jeu_carte">
          <div class="ligne_jeu">
            <img src="assets/img/dos_carte.png" class="dos_carte">
            <img src="assets/img/dos_carte.png" class="dos_carte">
            <img src="assets/img/dos_carte.png" class="dos_carte">
            <img src="assets/img/dos_carte.png" class="dos_carte">
          </div>
          <div class="ligne_jeu">
            <img src="assets/img/dos_carte.png" class="dos_carte">
            <img src="assets/img/dos_carte.png" class="dos_carte">
            <img src="assets/img/dos_carte.png" class="dos_carte">
            <img src="assets/img/dos_carte.png" class="dos_carte">
          </div>
          <div class="ligne_jeu">
            <img src="assets/img/dos_carte.png" class="dos_carte">
            <img src="assets/img/dos_carte.png" class="dos_carte">
            <img src="assets/img/dos_carte.png" class="dos_carte">
            <img src="assets/img/dos_carte.png" class="dos_carte">
          </div>
        </div>
        </div>
      
        <div class="chat-popup" id="chat-popup" style="margin-top: -122px;">
          
          <div class="chat-title"><div style="display: flex;  font-size: 15; width: 200%;"><span style="margin-left: 10px; color: white;margin-top: 2vh;"> Username  <br><span style="color: green; font-size: 9px; top: 50px;"><i class="fa-regular fa-circle-dot"></i> EN LIGNE</span></span> </div>
            <div style="width: 53%;display: flex;"><a id="closebtn" style="margin-top: 2vh;float:right; color: white; font-size: 19px;"><i class="fa-solid fa-circle-xmark"></i></a></div>
          </div>
         
          <div class="bubble left">Salut comment tu vas ?</div>
      <div class="bubble right">Ca va et toi</div>
      <div class="bubble left">Ca va</div>
      <div class="bubble right">Super</div>
      <div class="bubble right">Parfait alors</div>
      




      <input type="text" style="width: 94.5%;border-radius: 0px;  position: fixed; bottom: 0;" placeholder="Saisissez votre message...">
        </div>

      

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
        <br>
        <p class="mot_gris" style="margin-left: 13.5vw;">Copyright © 2022 Tous droits réservés</p>
        <br>
    </footer>
    </body>

    <script>
      let closebtn = document.getElementById("closebtn");
      let popup = document.getElementById("chat-popup");
  
      closebtn.addEventListener("click", () => {

        if(popup.style.display != "none")
        {
       
        popup.style.display = 'none'; 
        }

        else{
          popup.style.display = 'grid'; 
        }


       });
  </script>
    </html>
