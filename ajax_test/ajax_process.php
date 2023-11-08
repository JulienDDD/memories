<?php
if(isset($_POST['filename']))
{

    $fp = fopen("myText.txt","wb");
    fwrite($fp,$_POST['filename']);
    fclose($fp);

}

?>