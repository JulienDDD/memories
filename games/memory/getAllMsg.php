<?php 
 require_once('../../utils/database.php');
 require_once('../../utils/common.php');
 require_once('../../utils/funcs.php');

$pdo = connectToDbAndGetPdo();

$stmt = $pdo->prepare('SELECT M.*, P.* 
FROM messages AS M
LEFT JOIN players AS P ON M.id_sender = P.id_player ORDER BY M.date_comment DESC LIMIT 20');
$messages = $stmt->execute();
$messages = $stmt->fetchAll();


foreach($messages as $message)
{
print '<div class="chat-message clearfix">
<div class="chat-message-content clearfix">
    <span class="chat-time">'.$message->date_comment.'</span>
    <h5>'.$message->pseudo.'</h5>
    <p>'.$message->comments.'</p>
  </div>
</div>';
}
