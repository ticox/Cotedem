$(document).ready(function(){

	var accion=0;

$( "#fecha_activo" ).datepicker({
  dateFormat: 'yy-mm-dd'
});





$(document).on("click", "#buscar_nosotros", function(){
	
		$.post(base_url + 'app/buscar_nosotros',
			{
			
			},function(datos){
				alert(datos);	
	           },'json');


});

$(document).on("click", "#radio1", function(){
	
if (this.value=="activar") {

accion="1";
$("#fecha_activo").attr('disabled', 'true');
}
else{

accion="0";
$("#fecha_activo").removeAttr("disabled")

}


});


});