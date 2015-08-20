$('#buttonRegister').click(function(){

	var nombre 		= 	$('#nombre').val();
	var apellido 	= 	$('#apellidos').val();
	var email 		= 	$('#email').val();
	var edad 		= 	$('#edad').val();


	$.ajax({
	        type:"POST",
	        url:"index.php/welcome/addStudent/",
	        data:{
	        	'nombre': 		nombre,
	        	'apellidos': 	apellido,
	        	'edad': 		edad,
	        	'email': 		email
	        },
	        success:function (data) {
	        	alert("Los datos fueron agregados con exito");
	        	$('#nombre').val(" ");
				$('#apellidos').val(" ");
				$('#email').val(" ");
				$('#edad').val(" ");

       	 	},error:function(jqXHR, textStatus, errorThrown){
				console.log('error:: '+ errorThrown);
			}

    	});
});