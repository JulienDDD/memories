<?php 
 require_once('../../utils/database.php');
 require_once('../../utils/common.php');
 require_once('../../utils/funcs.php');

if(isset($_POST['player_id'], $_POST['tempsTotal'], $_POST['gamestrength']))
{
    $pdo = connectToDbAndGetPdo();

    $stmt = $pdo->prepare('INSERT INTO scores(id_player, id_game, game_strength, game_score, game_date) VALUES(:idplayer, :idgame, :gamestrength, :gamescore, NOW()');
    $stmt->execute([
        ':idplayer' => $_POST['player_id'],
        ':idgame' => "1",
        ':gamestrength' => $_POST['gamestrength'], 
        ':gamescore' => $_POST['tempsTotal']
    ]);
    
}

?>