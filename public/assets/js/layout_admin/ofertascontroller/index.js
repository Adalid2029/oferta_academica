$('#btnNuevoPublicacion').click(function (e) {
	//alert("Boton funcionando");
	abrirmodal('#modalPublicacionIndex', 'Crear nueva publicacion', 'modal-xl', false, 'static');

	$.ajax({
		// la URL para la petición
		url: '/publicacion/nuevo',

		// la información a enviar
		// (también es posible utilizar una cadena de datos)
		// data : { id : 123 },

		// especifica si será una petición POST o GET
		type: 'GET',

		// el tipo de información que se espera de respuesta
		dataType: 'html',

		// código a ejecutar si la petición es satisfactoria;
		// la respuesta es pasada como argumento a la función

		///** */
		success: function (respuesta) {
			// console.log(respuesta);
			$('#modalPublicacionIndex-body').html(respuesta);
		},

		// código a ejecutar si la petición falla;
		// son pasados como argumentos a la función
		// el objeto de la petición en crudo y código de estatus de la petición
		error: function (xhr, status) {
			alert('Disculpe, existió un problema');
		},

		// código a ejecutar sin importar si la petición falló o no
	});
});

$('.guardar').click(function (e) {
	//     //alert("Boton funcionando");
	$.ajax({
		// la URL para la petición
		url: '/publicacion',

		// la información a enviar
		// (también es posible utilizar una cadena de datos)
		data: {
			nombre_programa: $('[name="nombre_programa"]').val(),
			modalidad: $('[name="modalidad"]').val(),
			grado_academico: $('[name="grado_academico"]').val(),
			contenido_minimo: $('[name="contenido_minimo"]').val(),
			id_gestion: $('[name="id_gestion"]').val(),
		},

		// especifica si será una petición POST o GET
		type: 'POST',

		// el tipo de información que se espera de respuesta
		dataType: 'json',

		// código a ejecutar si la petición es satisfactoria;
		// la respuesta es pasada como argumento a la función

		///** */

		// código a ejecutar sin importar si la petición falló o no
	})
		.done(function (respuesta) {
			//console.log(respuesta);
			//console.log(respuesta.message);
			if (respuesta.code == 200) {
				//AQUI SE CERRARA EL MODAL UNA VEZ GUARDADO
				$('#modalPublicacionIndex').modal('hide');
			} else {
				alert('No se guardo');
			}
		})
		.fail(function (error) {
			alert('Se cometio un error al ejecutar');
			//alert(data);
		});
});
