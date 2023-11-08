
<?php
/* 
Fichier comportant des fonctions utiles pour un code + opti
*/

function sendMessage($messagetype, $message, $redirection)
{
    switch ($messagetype) {
        case 'error':
            $message = '<div class="message-error"><p>' . $message . '</p></div>';
            break;

        case 'success':
            $message = '<div class="message-success"><p>' . $message . '</p></div>';
            break;

        case 'warning':
            $message = '<div class="message-warning"><p>' . $message . '</p></div>';
            break;
    }

    $_SESSION['msgsent'] = $message;
    header('Location: ' . $redirection);
    exit();
}

function sendChatMessage($message, $userId, $pdo)
{

    if (strlen($message) > 3) {
        $stmt = $pdo->prepare('INSERT INTO messages(id_game,id_sender,comments,date_comment) VALUES(:idgame, :idsender, :comments, NOW())');
        if ($stmt->execute([
            ':idgame' => "1",
            ':idsender' => $userId,
            ':comments' => $message
        ])) {
            return true;
        } else {
            return false;
        }
    }
}

function getUserPfpPath($userId)
{

    return "userFiles/" . $userId . "/pfp.png";
}




?>
