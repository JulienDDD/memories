<script>
function getDifficulty(selectElement) {
  var selectedValue = selectElement.value;
  if (selectedValue === "") {
      alert("Veuillez sélectionner une option !");
  } else {
      console.log("La difficulté sélectionnée est : " + selectedValue);
  }
}

function getTheme(selectElement) {
  var selectedValue = selectElement.value;
  if (selectedValue === "") {
      alert("Veuillez sélectionner une option !");
  } else {
      console.log("Le thème sélectionnée est : " + selectedValue);
  }
}



</script>
<?php 
require_once('../../utils/common.php');
require_once(SITE_ROOT.'utils/database.php');
require_once(SITE_ROOT.'utils/funcs.php'); ?>
<!DOCTYPE html>
  <html lang="fr">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Jeu</title>
      <link rel="stylesheet" href ="../../assets/css/main.css">
      <link rel="stylesheet" href ="../../assets/css/header.css">
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

    
      <br/>
      <div class="choix">
        <div class="choix1et2">
          <select id="theme" onchange="getTheme(this)" style="width: 17vw ;margin: 1vw 10vw; background-color:#ec9123; padding:1vw; color:cornsilk; font-size:1em; text-align:center; border-radius:2px;">
            <option value="">Choisissez un thème</option>
            <option value="1">Thème 1</option>
            <option value="2">Thème 2</option>
            <option value="3">Thème 3</option>
          </select>
        </div>
        <div class="choix1et2">
        <select id="difficulty" onchange="getDifficulty(this)" style="width: 17vw ;margin: 1vw 10vw; background-color:#ec9123; padding:1vw; color:cornsilk; font-size:1em; text-align:center; border-radius:2px;">
            <option value="">Choisissez une difficulté</option>
            <option value="4">Difficulté 1</option>
            <option value="6">Difficulté 2</option>
            <option value="8">Difficulté 3</option>
          </select>
        </div>
      </div>
      <div class="global_theme">
        <div class="txt_imgtheme">
          <h4 class="txt_theme">Exemple du thème 1 :</h4>
          <img src="../../assets/img/ex_theme1.png" class="img_theme">
        </div>
        <div class="txt_imgtheme">
          <h4 class="txt_theme">Exemple du thème 2 : </h4>
          <img src="../../assets/img/ex_theme2.png" class="img_theme">
        </div>
        <div class="txt_imgtheme">
          <h4 class="txt_theme">Exemple du thème 3 : </h4>
          <img src="../../assets/img/ex_theme3.png" class="img_theme">
        </div>
      </div>
      <center><button id="startGame"  onclick="startGame()" style="background-color: #ec9123; text-decoration:none; color:cornsilk; padding:1.5vw; border-radius: 3px; border : none">LANCER LA PARTIE</button></center>
      <br>
      
      <center><div class="border_jeu"></div></center>
      <br><br>

      <div id="timer" style="color: cornsilk; font-size: 1.5em; margin-top: 1.5vw; margin-left:5vw; margin-bottom:2vw"></div>

    <center>
      <div id="tableauCartes"></div>
    </center>
      <br><br>
        <div class="chat-popup" id="chat-popup" style="margin-top: -122px;">
          
          <div class="chat-title"><div style="display: flex;  font-size: 15; width: 200%;"><span style="margin-left: 10px; color: white;margin-top: 2vh;"> Username  <br><span style="color: green; font-size: 9px; top: 50px;"><i class="fa-regular fa-circle-dot"></i> EN LIGNE</span></span> </div>
            <div style="width: 53%;display: flex;"><a id="closebtn" style="margin-top: 2vh;float:right; color: white; font-size: 19px;"><i class="fa-solid fa-circle-xmark"></i></a></div>
          </div>
         
          




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
     

    
       let [milliseconds,seconds,minutes,hours] = [0,0,0,0];
       let timerRef = document.getElementById('chronotime');
       let int = null;

       document.getElementById('startgame').addEventListener('click',  ()=>{
           if(int!==null){
              clearInterval(int);
            }
         int = setInterval(displayTimer,10);
        });


       function displayTimer(){
    milliseconds+=10;
    if(milliseconds == 1000){
        milliseconds = 0;
        seconds++;
        if(seconds == 60){
            seconds = 0;
            minutes++;
            if(minutes == 60){
                minutes = 0;
                hours++;
            }
        }
    }
 let h = hours < 10 ? 0 + hours : hours;
 let m = minutes < 10 ? 0 + minutes : minutes;
 let s = seconds < 10 ? 0 + seconds : seconds;
 let ms = milliseconds < 10 ? 0 + milliseconds : milliseconds < 100 ? 0 + milliseconds : milliseconds;
 timerRef.innerHTML = ` ${m}:${s}:${ms}`;
}


  </script>
</html>

<script>
var bouton = document.getElementById("startGame");
bouton.addEventListener("click", function() {
    console.log("Le bouton a été cliqué !");
});


function startGame() {
    var selectDifficulte = document.getElementById("difficulty");
    var difficulte = selectDifficulte.value;

    if (difficulte == '4'){
      var taille = 8
      var espace = 0.6
    }
    else if (difficulte == '6'){
      var taille = 6
      var espace = 0.5
    }
    else{
      var taille = 4
      var espace = 0.4
    }

    if (difficulte !== "") {
        var tableauCartes = document.getElementById("tableauCartes");
        tableauCartes.innerHTML = ""; 

        var colonnes = difficulte;
        var lignes = difficulte;  

        var tableauHTML = "<table>";

        for (var i = 0; i < lignes; i++) {
            tableauHTML += "<tr>";
            for (var j = 0; j < colonnes; j++) {
                tableauHTML += '<td><img src="../../assets/img/dos_carte.png" alt="" style="width:'+taille+'vw;margin:'+espace+'vw" onclick:"retournerCarte()"></td>';
            }
            tableauHTML += "</tr>";
        }

        tableauHTML += "</table>";

        tableauCartes.innerHTML = tableauHTML;
    }
}



var bouton = document.getElementById("startGame");
bouton.addEventListener("click", function() {
    console.log("Le bouton a été cliqué !");
    startGame(); 
    startTimer(); 
});

var timerInterval; 
var timerMinutes = 0;
var timerSeconds = 0; 
var timerMilliseconds = 0; 

function startTimer() {
    timerMinutes = 0; 
    timerSeconds = 0; 
    timerMilliseconds = 0; 
    updateTimer(); 

    timerInterval = setInterval(function() {
        timerMilliseconds++; 
        if (timerMilliseconds === 10) {
            timerMilliseconds = 0;
            timerSeconds++; 
        }
        if (timerSeconds === 60) {
            timerSeconds = 0;
            timerMinutes++; 
        }
        updateTimer(); 
    }, 100); 
}

function updateTimer() {
    var timerElement = document.getElementById("timer");
    timerElement.innerHTML = "Temps écoulé : " + timerMinutes + " min " + timerSeconds + " sec " + timerMilliseconds + "00 ms";
}

function retournerCarte(){
  
}

</script>