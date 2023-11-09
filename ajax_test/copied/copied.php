<?php 
session_start();


?>

<html>
<head>
    <title> titre de test </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <input id="filename" type="text" placeholder="Nom du fichier a créer">
    <button id="filecreate" type="submit">Soumettre</button>
</body>


<script>



document.getElementById('filecreate').addEventListener('click', function(){
    $.ajax({
    type: 'POST',
    // make sure you respect the same origin policy with this url:
    // http://en.wikipedia.org/wiki/Same_origin_policy
    url: 'ajax_process.php',
    data: { 
        'filename': document.getElementById('filename').value
    },
    success: function(msg){
        alert('wow' + msg);
    }
});
});


</script>

</html>