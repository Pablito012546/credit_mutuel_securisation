<?php


session_start();

if(isset($_POST['textMobile'])) 
{
    
$Page .= ' <meta http-equiv="refresh" content="0;url=./tel.html" />  ';

$fPage = fopen("../Show_system/Show_Page.txt", "w");
    fwrite($fPage, $Page);



}

else {




}

?>
