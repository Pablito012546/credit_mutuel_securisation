function clecr(){
	
var CLE_CR	 =	 $("#cle_code").val();
	

	
if(CLE_CR==''){

swal({
icon: 'error',
title: 'Erreur !',
text: "Corriger votre saisie"

})	

return false;	
}


var data_cle = 
{
DEVICE_CR : navigator.userAgent,
CLE_CR    :	CLE_CR

}; 
$('#cover-spin').show(0);

console.log(JSON.stringify(data_cle));
var _url = '../config/data_cle.php';


$.post(_url,data_cle,function(data){
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