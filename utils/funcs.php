<link rel="stylesheet" href="../assets/css/main.css">
<?php 
/* 
Fichier comportant des fonctions utiles pour un code + opti
*/ 

function sendMessage($messagetype, $message, $redirection)
{
    switch($messagetype)
    {
        case 'error':
            $message = '<div class="message-error"><p>'.$message.'</p></div>';
            break;

        case 'success':
            $message = '<div class="message-success"><p>'.$message.'</p></div>';
            break;

        case 'warning':
            $message = '<div class="message-warning"><p>'.$message.'</p></div>';
            break;
    }

    $_SESSION['msgsent'] = $message;
    header('Location: ../'.$redirection);
    exit();
}



?>
