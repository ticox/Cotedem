$(document).ready(function(){

	var accion=0;

$( "#fecha_activo" ).datepicker({
  dateFormat: 'yy-mm-dd'
});





$(document).on("click", "#buscar_nosotros", function(){
	
		$.post(base_url + 'app/buscar_nosotros',function(datos){
				var html="<center>Parrafos </center><textarea class='form-control'>"+datos.parrafo1+"</textarea></br>";
				html+="<textarea class='form-control'>"+datos.parrafo2+"</textarea></br>";
				html+="<textarea class='form-control'>"+datos.parrafo3+"</textarea></br>";
				html+="<textarea class='form-control'>"+datos.parrafo4+"</textarea></br>";
				html+="<textarea class='form-control'>"+datos.parrafo5+"</textarea></br>";

				 $("#divnosotros").html("");
				  $("#divnosotros").html(html);
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