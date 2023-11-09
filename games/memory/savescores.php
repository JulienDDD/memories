<!DOCTYPE html>
<html lang="fr">
    <head>

    </head>
    <body>
<?php
require('../memories/utils/database.php');
$db = connectToDbAndGetPdo();
$data = $_POST['data'];
$id_player = $_SESSION['id_player'];
$time = $_POST[''];

$db->prepare('insert into scores (id_joueur, score) values ($data)', [$id_player, $data]);
?>



</body>
</html>