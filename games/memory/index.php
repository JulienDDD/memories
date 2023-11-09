<?php
require_once('../../utils/database.php');
require_once('../../utils/common.php');
require_once('../../utils/funcs.php');

if (isset($_SESSION['user'])) {
} else {
  sendMessage('error', 'Merci de vous connecter.', '../../login.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jeu</title>
  <link rel="stylesheet" href="../../assets/css/main.css">
  <link rel="stylesheet" href="../../assets/css/header.css">
  <link rel="stylesheet" href="../../assets/css/footerindex.css">
  <script src="https://kit.fontawesome.com/fd7b39a087.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: #151231; background-size: 1520px 800px;">
  <div class="under-header" id="top">
    <div class="header">
      <a href="../../index.php" class="lien" style="font-size: 1.5em;">The Power of Memory</a>
      <div class="header-right">
        <a href="../../index.php" class="lien">Accueil</a>
        <a href="index.php" class="lien">Jeu</a>
        <a href="scores.php" class="lien">Scores</a>
        <a href="../../login.php" class="lien">Connexion</a>
        <a href="../../register.php" class="lien">Inscription</a>
        <a href="../../myAccount.php" class="lien">Mon espace</a>
        <a href="../../contact.php" class="lien">Nous contacter</a>
        <?php if (isset($_SESSION['user'])) {
          echo '<a href="../../disconnect.php" class="lien">' . $_SESSION['user']["pseudo"] . '</a>';
        } ?>
      </div>
    </div>
    <br/><br/><br>
    <center>
      <h1 style="margin-top: 0px; display: block;">The Power Of Memory</h1>
    </center>
  </div>
  <br/>
  <div class="choix">
    <div class="choix1et2">
      <select id="theme" onchange="getTheme(this)" style="width: 17vw; margin: 1vw 10vw; background-color: #ec9123; padding: 1vw; color: cornsilk; font-size: 1em; text-align: center; border-radius: 2px;">
        <option value="">Choisissez un thème</option>
        <option value="icon_vg">Thème 1</option>
        <option value="icon_acteur">Thème 2</option>
        <option value="icon_meme">Thème 3</option>
      </select>
    </div>
    <div class="choix1et2">
      <select id="difficulty" onchange="getDifficulty(this)" style="width: 17vw; margin: 1vw 10vw; background-color: #ec9123; padding: 1vw; color: cornsilk; font-size: 1em; text-align: center; border-radius: 2px;">
        <option value="">Choisissez une difficulté</option>
        <option value="4">Difficulté 1</option>
        <option value="6">Difficulté 2</option>
        <option value="8">Difficulté 3</option>
      </select>
    </div>
  </div>
  <div class="global_theme">
    <div class="txt_imgtheme">
      <h4 id="txtheme" class="txt_theme">Exemple du thème 1 : </h4>
      <img src="../../assets/img/ex_theme1.png" class="img_theme">
    </div>
    <div class="txt_imgtheme">
      <h4 class="txt_theme">Exemple du thème 2 :</h4>
      <img src="../../assets/img/icon_acteur/image3.png" class="img_theme">
    </div>
    <div class="txt_imgtheme">
      <h4 class="txt_theme">Exemple du thème 3 :</h4>
      <img src="../../assets/img/icon_meme/image5.png" class="img_theme">
    </div>
  </div>
  <center>
    <button id="startGame" onclick="tableCreate()" style="background-color: #ec9123; text-decoration: none; color: cornsilk; padding: 1.5vw; border-radius: 3px; border: none">LANCER LA PARTIE</button>
  </center>
  <br>
  <center>
    <div class="border_jeu"></div>
  </center>

  <br>
  <center><span style="color: white; font-size: 53px;" id="chronotime">0:0:00 <?php echo $_SESSION['user']['pseudo']; ?></span></center>


  <br>
  <div id="myModal" class="modal">
<div class="modal-content">

  <center><p style="font-size: 32px;"><i style="color: green;" class="fa-solid fa-square-check"></i> Partie terminée
<br><br>
<span style="font-size: 22px;">La partie est désormais terminée, le temps total de la partie est de <span id="totaltime"> 32 s </span></span>
</p>
<br>
<br>
<button id="close-btn" style="width: 60%;background-color: #ec9123; text-decoration:none; color:cornsilk; padding:1.5vw; border-radius: 3px; border : none">Rejouer</button>
</center>
</div>
</div>

<script>
let myModal = document.getElementById('myModal');
let closeModal = document.getElementById('close-btn');

closeModal.addEventListener('click', function(){
  
  myModal.style.display = "none";

});
</script>

  <div class="jeu_carte">
    <div class="ligne_jeu">
      <img src="../../assets/img/dos_carte.png" class="dos_carte">
      <img src="../../assets/img/dos_carte.png" class="dos_carte">
      <img src="../../assets/img/dos_carte.png" class="dos_carte">
      <img src="../../assets/img/dos_carte.png" class="dos_carte">
    </div>
    <div class="ligne_jeu">
      <img src="../../assets/img/dos_carte.png" class="dos_carte">
      <img src="../../assets/img/dos_carte.png" class="dos_carte">
      <img src="../../assets/img/dos_carte.png" class="dos_carte">
      <img src="../../assets/img/dos_carte.png" class="dos_carte">
    </div>
    <div class="ligne_jeu">
      <img src="../../assets/img/dos_carte.png" class="dos_carte">
      <img src="../../assets/img/dos_carte.png" class="dos_carte">
      <img src="../../assets/img/dos_carte.png" class="dos_carte">
      <img src="../../assets/img/dos_carte.png" class="dos_carte">
    </div>
    <div class="ligne_jeu">
      <img src="../../assets/img/dos_carte.png" class="dos_carte">
      <img src="../../assets/img/dos_carte.png" class="dos_carte">
      <img src="../../assets/img/dos_carte.png" class="dos_carte">
      <img src="../../assets/img/dos_carte.png" class="dos_carte">
    </div>
  </div>
  <style>
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  border-color: #EC9123;
  background-color: #151231;
  color: #EC9123;
  margin: 15% auto; 
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 35px;
  font-weight: bold;
 margin-top: -2%;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
    fieldset {
      border: 0;
      margin: 0;
      padding: 0;
    }

    h4,
    h5 {
      line-height: 1.5em;
      margin: 0;
    }

    hr {
      background: #e9e9e9;
      border: 0;
      -moz-box-sizing: content-box;
      box-sizing: content-box;
      height: 1px;
      margin: 0;
      min-height: 1px;
    }

    img {
      border: 0;
      display: block;
      height: auto;
      max-width: 100%;
    }

    input {
      border: 0;
      color: inherit;
      font-family: inherit;
      font-size: 100%;
      line-height: normal;
      margin: 0;
    }

    p {
      margin: 0;
    }

    .clearfix {
      zoom: 1;
    }

    /* For IE 6/7 */
    .clearfix:before,
    .clearfix:after {
      content: "";
      display: table;
    }

    .clearfix:after {
      clear: both;
    }

    /* ---------- LIVE-CHAT ---------- */

    #live-chat {
      bottom: 0;
      font-size: 12px;
      right: 24px;
      position: fixed;
      width: 300px;
    }

    #live-chat header {
      background: #293239;
      border-radius: 5px 5px 0 0;
      color: #fff;
      cursor: pointer;
      padding: 16px 24px;
    }

    #live-chat h4:before {
      background: #1a8a34;
      border-radius: 50%;
      content: "";
      display: inline-block;
      height: 8px;
      margin: 0 8px 0 0;
      width: 8px;
    }

    #live-chat h4 {
      font-size: 12px;
    }

    #live-chat h5 {
      font-size: 10px;
    }

    #live-chat form {
      padding: 24px;
    }

    #live-chat input[type="text"] {
      border: 1px solid #ccc;
      border-radius: 3px;
      padding: 8px;
      outline: none;
      width: 234px;
    }

    .chat-message-counter {
      background: #e62727;
      border: 1px solid #fff;
      border-radius: 50%;
      display: none;
      font-size: 12px;
      font-weight: bold;
      height: 28px;
      left: 0;
      line-height: 28px;
      margin: -15px 0 0 -15px;
      position: absolute;
      text-align: center;
      top: 0;
      width: 28px;
    }

    .chat-close {
      background: #1b2126;
      border-radius: 50%;
      color: #fff;
      display: block;
      float: right;
      font-size: 10px;
      height: 16px;
      line-height: 16px;
      margin: 2px 0 0 0;
      text-align: center;
      width: 16px;
    }

    .chat {
      background: #fff;
    }

    .chat-history {
      height: 252px;
      padding: 8px 24px;
      overflow-y: scroll;
    }

    .chat-message {
      margin: 16px 0;
    }

    .chat-message img {
      border-radius: 50%;
      float: left;
    }

    .chat-message-content {
      margin-left: 56px;
    }

    .chat-time {
      float: right;
      font-size: 10px;
    }

    .chat-feedback {
      font-style: italic;
      margin: 0 0 0 80px;
    }
  </style>
  <div id="live-chat">

    <header class="clearfix">

      <a href="#" style="text-decoration: none;" class="chat-close">X</a>

      <h4>Général</h4>

      <span class="chat-message-counter">3</span>

    </header>

    <?php
    // Récupération des 20 derniers messages 
    $pdo = connectToDbAndGetPdo();

    $stmt = $pdo->prepare('SELECT M.*, P.* 
FROM messages AS M
LEFT JOIN players AS P ON M.id_sender = P.id_player ORDER BY M.date_comment DESC LIMIT 20');
    $messages = $stmt->execute();
    $messages = $stmt->fetchAll();


    if (
      $_SERVER['REQUEST_METHOD'] == "POST"
      && isset($_POST['message'])
    ) {
      if(sendChatMessage($_POST['message'], $_SESSION['user']['id'], $pdo)){

      }
      else{
        
      }
    }


    ?>
    <div class="chat">
      <div class="chat-history">
        <div id="msgscontainer" style="width: 100%;"></div>
        <script>
          function fetchMsgs() {
            $.ajax({
              type: 'POST',
              url: 'getAllMsg.php',
              success: function(data) {
                document.getElementById('msgscontainer').innerHTML = data;
              }
            });
        
          }
          $(document).ready(function() {
            setInterval("fetchMsgs()", 1000);
            //setInterval("saveScore()", 1000);
          });


          setTimeout("fetchMsgs();", 1);

          var idPlayer = "<?php echo $_SESSION['user']['id']; ?>";
          function saveScore(){
            $.ajax({
              type: 'POST',
              url: 'saveScore.php',
              data: {'player_id' : idPlayer, 'tempsTotal' : tempsTotal, 'gamestrength' : gamestrength},
              success: function(data) {
                document.getElementById('myModal').style.display = "block";
              }
            });
            
          }

          
        </script>
        <hr>


      </div> <!-- end chat-history -->


      <form action="#" method="post">

        <fieldset>

          <input type="text" name="message" style="color: black; background-color: white;" placeholder="Saisissez votre message..." autofocus>
          <input type="hidden">

        </fieldset>

      </form>

    </div> <!-- end chat -->

  </div> <!-- end live-chat -->



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
        <div class="pomtitre">
          <h4 style="font-size: 1.4vw; color: white">Power of Memory</h4>
        </div>
        <div class="listpom">
          <ul>
            <li style="color: #ec9123; list-style-type: square;"><a href="jeu.html" class="list">Jouer !</a></li>
            <li style="color: #ec9123; list-style-type: square;"><a href="score.html" class="list">Les scores</a></li>
            <li style="color: #ec9123; list-style-type: square;"><a href="contact.html" class="list">Nous contacter</a></li>
          </ul>
        </div>
      </div>
    </div>
    <br><br><br>
    <p class="mot_gris" style="margin-left: 13.5vw;">Copyright © 2022 Tous droits réservés</p>
    <br>
  </footer>

 



</body>
</html>

<script>


var selectedDifficulty = 0;
var theme; // Déclarer la variable theme en tant que variable globale

function getDifficulty(selectElement) {
  var selectedValue = selectElement.value;
  if (selectedValue === "") {
    alert("Veuillez sélectionner une option !");
  } else {
    selectedDifficulty = selectElement.value;
    console.log("La difficulté sélectionnée est : " + selectedDifficulty);
  }
}

function getTheme(selectElement) {
  theme = selectElement.value; // Mettre à jour la variable globale theme
  if (selectedValue === "") {
    alert("Veuillez sélectionner une option !");
  } else {
    console.log("Le thème sélectionné est : " + theme);
  }
}



function shuffle(array) {
let currentIndex = array.length,randomIndex;

while (currentIndex > 0) {

randomIndex = Math.floor(Math.random() * currentIndex);
currentIndex--;

[array[currentIndex], array[randomIndex]] = [
  array[randomIndex], array[currentIndex]];
}

return array;
}


var cardsFlipped = []; 

var isLocked = false; 

var pairsFound = 0;



function tourne_image(index) {
  if (isLocked) {
    return;
  }

  var carte = event.target;

  if (carte.classList.contains('flipped')) {
    return;
  }

  // Ajoutez la classe 'flipped' pour appliquer l'effet de retournement
  carte.classList.add('flipped');

  setTimeout(function () {
    // Utilisez la variable theme ici
    carte.src = '<?= PROJECT_FOLDER ?>assets/img/' + theme + '/image' + index + '.png';
    cardsFlipped.push(carte);

    if (cardsFlipped.length === 2) {
      isLocked = true;

      if (cardsFlipped[0].src !== cardsFlipped[1].src) {
        setTimeout(function () {
          // Retirez la classe 'flipped' pour annuler l'effet de retournement
          cardsFlipped[0].classList.remove('flipped');
          cardsFlipped[1].classList.remove('flipped');
          cardsFlipped[0].src = '<?= PROJECT_FOLDER ?>assets/img/dos_carte.png';
          cardsFlipped[1].src = '<?= PROJECT_FOLDER ?>assets/img/dos_carte.png';
          cardsFlipped = [];
          isLocked = false;
        }, 1000);
      } else {
        cardsFlipped = [];
        isLocked = false;

        pairsFound++;

        if (pairsFound === (selectedDifficulty * selectedDifficulty) / 2) {
          clearInterval(timerInterval);
          var tempsTotal = timerMinutes + " min " + timerSeconds + " sec " + timerMilliseconds + "00 ms";
          console.log("Toutes les paires ont été trouvées en " + tempsTotal);
        }
      }
    }
  }, 100);
}









var tableauCree = false; 

function tableCreate() {
    if (tableauCree) {
        return; 
    }

    const tableau = document.getElementById('tableauCartes');
    const tbl = document.createElement('table');
    tbl.style.width = '100px';

   
    var selectedDifficulty = document.getElementById('difficulty').value;
    var tab;

    if (selectedDifficulty === "4") {
        tab = [];
        for (let i = 1; i <= 8; i++) {
            tab.push(i);
        }
        tab = tab.concat(tab);
        shuffle(tab);
    } else if (selectedDifficulty === "6") {
        tab = [];
        for (let i = 1; i <= 18; i++) {
            tab.push(i);
        }
        tab = tab.concat(tab);
        shuffle(tab);
    } else {
        tab = [];
        for (let i = 1; i <= 32; i++) {
            tab.push(i);
        }
        tab = tab.concat(tab);
        shuffle(tab);
    }

    for (let i = 0; i < selectedDifficulty; i++) {
        const tr = tbl.insertRow();
        for (let j = 0; j < selectedDifficulty; j++) {
            let index = i * selectedDifficulty + j; 
            let value = tab[index];
            const td = tr.insertCell();
            let img = document.createElement('img');
            img.src = '<?= PROJECT_FOLDER ?>assets/img/dos_carte.png';
            img.className = 'carte ' + index.toString;

            img.style.width = '5vw'; 
            img.style.height = '5vw'; 
            img.style.margin = '0.4vw';
            img.onclick = function() {
                tourne_image(value);
            };

            td.appendChild(img);
        }
    }

    tableau.appendChild(tbl);
    tableauCree = true; 
}





var bouton = document.getElementById("startGame");
bouton.addEventListener("click", function() {
    console.log("Le bouton a été cliqué !");
    isGameStarted = true;
    tableCreate();
    startTimer();
});



var timerInterval;
var timerMinutes = 0;
var timerSeconds = 0;
var timerMilliseconds = 0;
var isGameStarted = false; 

function startTimer() {
    timerMinutes = 0;
    timerSeconds = 0;
    timerMilliseconds = 0;
    updateTimer();

    timerInterval = setInterval(function() {
        if (!isGameStarted) {
            clearInterval(timerInterval); 
            return;
        }
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




</script>
