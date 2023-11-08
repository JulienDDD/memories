
<?php
require_once("common.php");
require_once(SITE_ROOT . "utils/funcs.php");
require_once(SITE_ROOT . "utils/database.php");
if (
    $_SERVER['REQUEST_METHOD'] == "POST" &&
    isset($_POST['registerme'], $_POST['email'], $_POST['pseudo'], $_POST['passe'], $_POST['comfirm_mdp']) &&
    !empty($_POST['email']) &&
    !empty($_POST['pseudo']) &&
    !empty($_POST['passe']) &&
    !empty($_POST['comfirm_mdp']) &&
    filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) &&
    $_POST['passe'] == $_POST['comfirm_mdp'] &&
    strlen($_POST['pseudo']) >= 4 &&
    strlen($_POST['passe']) >= 8 &&
    strtolower($_POST['passe']) != $_POST['passe'] &&
    preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/', $_POST['passe'])
) {
    // RECUP VARIABLE PDO
    $pdo = connectToDbAndGetPdo();

    // SELECTIONNER LE PSEUDO ENTRER POUR POUVOIR SAVOIR SI IL A DEJA UTILISER LE PSEUDO OU NON
    $stmt = $pdo->prepare('SELECT * FROM players WHERE pseudo=:pseudo');
    $stmt->execute([
        ':pseudo' => $_POST['pseudo']
    ]);
    // COMPTER LE NOMBRE DE LIGNE POUR SAVOIR SI OUI OU NON IL Y A DEJA UN UTILISATEUR AVEC CE PSEUDONYME
    if ($stmt->rowCount() === 0) {
        $emailToRegister = $_POST['email'];
        $usernameToRegister = $_POST['pseudo'];
        $unencryptedPassword = $_POST['passe'];
        // HASHER LE MOT DE PASSE DE L'UTILISATEUR POUR LA SECU
        $hashedPassword = password_hash($unencryptedPassword, PASSWORD_DEFAULT);


        // ENVOYER LA REQUETE D'ENREGISTREMENT
        $registerRequete = $pdo->prepare('INSERT INTO players(email,player_password,pseudo,date_sign_up, date_last_login) VALUES(:email, :hashedpass, :username, NOW(), NOW())');
        $registerRequete->execute([
            ":email" => $emailToRegister,
            ":hashedpass" => $hashedPassword,
            ":username" => $usernameToRegister,

        ]);


     

        

        sendMessage('success', 'Votre compte a été créer !', '../login.php');
    } else {

        echo 'Il existe deja un utilisater portant ce pseudonyme';
    }

} elseif (
    $_SERVER['REQUEST_METHOD'] == "POST" &&
    isset($_POST['loginme']) &&
    !empty($_POST['email']) && !empty($_POST['passe'])
) {
    // SINON SI L UTILISATEUR SE CONNECTE
    $pdo = connectToDbAndGetPdo();
    $stmt = $pdo->prepare('SELECT * FROM players WHERE email=:email');
    $stmt->execute([
        ":email" => $_POST['email']
    ]);
    $concernedUser = $stmt->fetch();
    $hashedPassword = $concernedUser->player_password;
    $userPseudo = $concernedUser->pseudo;
    $userId = $concernedUser->id_player;
    if (password_verify($_POST['passe'], $hashedPassword)) {
        $_SESSION['user'] = [
            "id" => $userId,
            "pseudo" => $userPseudo
        ];

        $userfilepath = "../userFiles/".$_SESSION['user']['id'];
        if(!file_exists($userfilepath)){
         mkdir($userfilepath, 0777, true);
         copy('sample.png', $userfilepath.'/pfp.png');
        }
        
        sendMessage('success', 'Vous êtes connecté', '../myAccount.php');
    }
    else{

    }







} else {
    echo 'Les donnés reçus sont incorrectes';
}
