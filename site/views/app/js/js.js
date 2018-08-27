$(document).ready(function(){

	var accion=0;

$( "#fecha_activo" ).datepicker({
  dateFormat: 'yy-mm-dd'
});

$('#div_usuario').hide(); //muestro mediante id

$('#div_servicio').hide();




/*--------------------- Modificar Nosotros ---------------------*/

$(document).on("click", "#buscar_nosotros", function(){
	
		$.post(base_url + 'app/buscar_nosotros',function(datos){
				var html="<center>Parrafos </center><textarea id='parrafo1' class='form-control'>"+datos.parrafo1+"</textarea></br>";
				html+="<textarea id='parrafo2' class='form-control'>"+datos.parrafo2+"</textarea></br>";
				html+="<textarea id='parrafo3' class='form-control'>"+datos.parrafo3+"</textarea></br>";
				html+="<textarea id='parrafo4' class='form-control'>"+datos.parrafo4+"</textarea></br>";
				html+="<textarea id='parrafo5' class='form-control'>"+datos.parrafo5+"</textarea></br>";
				html+="<input type='hidden'id='id_nosotros' value="+datos.id_nosotros+"> </br>";

				 $("#divnosotros").html("");
				  $("#divnosotros").html(html);
	           },'json');

});



$(document).on('click', '#guardar_nosotros', function() 
	{
	 		
	 		alertify.confirm( "¿Esta realmente seguro de modificar?", function (e) {
			    if (e) {
			    	$.post(base_url+'app/guardar_nosotros',{

						parrafo1:$("#parrafo1").val(),
						parrafo2:$("#parrafo2").val(),
						parrafo3:$("#parrafo3").val(),
						parrafo4:$("#parrafo4").val(),
						parrafo5:$("#parrafo5").val(),
						id:$("#id_nosotros").val()

						},function() {
						alertify.success('Modificacion relizada satisfactoriamente');
					});
			        
			    } else {
			       alertify.error('Ha cancelado la operación');
			    }
			});
			
		
	});

/*--------------------- Modificar Mision ---------------------*/

$(document).on("click", "#buscar_mision", function(){
	
		$.post(base_url + 'app/buscar_informacion',function(datos){
				var html="<center>Misión </br> </center><textarea id='textmision' class='form-control'>"+datos.mision+"</textarea></br>";
				html+="<input type='hidden'id='id_informacion' value="+datos.id_informacion+"> </br>";

				 $("#divmision").html("");
				  $("#divmision").html(html);
	           },'json');

});


$(document).on('click', '#guardar_mision', function() 
	{
	 		
	 		alertify.confirm( "¿Esta realmente seguro de modificar?", function (e) {
			    if (e) {
			    	$.post(base_url+'app/guardar_mision',{

						mision:$("#textmision").val(),
						id:$("#id_informacion").val()

						},function() {
						alertify.success('Modificación relizada satisfactoriamente');
					});
			        
			    } else {
			       alertify.error('Ha cancelado la operación');
			    }
			});
			
		
	});


/*--------------------- Modificar Vision ---------------------*/

$(document).on("click", "#buscar_vision", function(){
	
		$.post(base_url + 'app/buscar_informacion',function(datos){
				var html="<center>Visión</br> </center><textarea id='textvision' class='form-control'>"+datos.vision+"</textarea></br>";
				html+="<input type='hidden'id='id_informacion' value="+datos.id_informacion+"> </br>";

				 $("#divvision").html("");
				  $("#divvision").html(html);
	           },'json');

});


$(document).on('click', '#guardar_vision', function() 
	{
	 		
	 		alertify.confirm( "¿Esta realmente seguro de modificar?", function (e) {
			    if (e) {
			    	$.post(base_url+'app/guardar_vision',{

						vision:$("#textvision").val(),
						id:$("#id_informacion").val()

						},function() {
						alertify.success('Modificación relizada satisfactoriamente');
					});
			        
			    } else {
			       alertify.error('Ha cancelado la operación');
			    }
			});
			
		
	});


/*--------------------- Modificar Preview ---------------------*/

$(document).on("click", "#buscar_preview", function(){
	
		$.post(base_url + 'app/buscar_informacion',function(datos){
				var html="<center>Preview</br> </center><textarea id='textpreview' class='form-control'>"+datos.preview+"</textarea></br>";
				html+="<input type='hidden'id='id_informacion' value="+datos.id_informacion+"> </br>";

				 $("#divpreview").html("");
				  $("#divpreview").html(html);
	           },'json');

});


$(document).on('click', '#guardar_preview', function() 
	{
	 		
	 		alertify.confirm( "¿Esta realmente seguro de modificar?", function (e) {
			    if (e) {
			    	$.post(base_url+'app/guardar_preview',{

						preview:$("#textpreview").val(),
						id:$("#id_informacion").val()

						},function() {
						alertify.success('Modificación relizada satisfactoriamente');
					});
			        
			    } else {
			       alertify.error('Ha cancelado la operación');
			    }
			});
			
		
	});



/*--------------------- Modificar Titulo ---------------------*/

$(document).on("click", "#buscar_titulo", function(){
	
		$.post(base_url + 'app/buscar_informacion',function(datos){
				var html="<center>Titulo</br> </center><textarea id='texttitulo' class='form-control'>"+datos.titulo+"</textarea></br>";
				html+="<input type='hidden'id='id_informacion' value="+datos.id_informacion+"> </br>";

				 $("#divtitulo").html("");
				  $("#divtitulo").html(html);
	           },'json');

});


$(document).on('click', '#guardar_titulo', function() 
	{
	 		
	 		alertify.confirm( "¿Esta realmente seguro de modificar?", function (e) {
			    if (e) {
			    	$.post(base_url+'app/guardar_titulo',{

						titulo:$("#texttitulo").val(),
						id:$("#id_informacion").val()

						},function() {
						alertify.success('Modificación relizada satisfactoriamente');
					});
			        
			    } else {
			       alertify.error('Ha cancelado la operación');
			    }
			});
			
		
	});


$(document).on('click', '#guardar_servicio', function() 
	{
	 		
	 		alertify.confirm( "¿Esta realmente seguro de guardar este servicio?", function (e) {
			    if (e) {
			    	$.post(base_url+'app/guardar_servicio',{

						titulo:$("#titulo_servicio").val(),
						descripcion:$("#descripcion").val()

						},function() {
						alertify.success('Servicio guardado satisfactoriamente');
					});
			        
			    } else {
			       alertify.error('Ha cancelado la operación');
			    }
			});
			
		
	});






/*--------------------- Crear Usuarios ---------------------*/

$(document).on("click", "#crear_usuarios", function(){

	$('#div_usuario').show(2000); //muestro mediante id

});


$(document).on("click", "#cancelar_crearusuario", function(){

	$('#div_usuario').hide(1500); //muestro mediante id

});


$("#confirmar_contraseña").focusout(function(){

	if($('#contraseña').val() != $('#confirmar_contraseña').val()){
		alertify.alert("Las claves no coinciden");
	}else{

		  $('#crear_usuario').removeAttr("disabled");
	}
  
});


$("#contraseña").focus( function(){

$('#crear_usuario').attr("disabled","true");


});


$(document).on('click', '#crear_usuario', function() {
	 		
	 		alertify.confirm( "¿Esta realmente seguro de crear este usuario?", function (e) {
			    if (e) {
			    	$.post(base_url+'app/guardar_usuario',{

						usuario:$("#usuario").val(),
						clave:$("#contraseña").val()

						},function() {
						alertify.success('Usuario Creado satisfactoriamente');

						$('#div_usuario').hide(1500); //muestro mediante id
						$("#contraseña").val("");
						$("#usuario").val("");
						$("#confirmar_contraseña").val("");
					});
			        
			    } else {
			       alertify.error('Ha cancelado la operación');
			    }
			});
			
		
	});




/*--------------------- Editar Servicios ---------------------*/

$(document).on("click", "#editar_servicio", function(){

	$('#div_servicio').show(2000); //muestro mediante id

});


$(document).on("click", "#cancelar_editarservicio", function(){

	$('#div_usuario').hide(1500); //Oculto mediante id

});




$(document).on("click", "#cancelar_editarservicio", function(){

	$('#div_usuario').hide(1500); //Oculto mediante id

});

});