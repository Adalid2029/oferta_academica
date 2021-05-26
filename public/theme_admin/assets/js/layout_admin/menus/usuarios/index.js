

$('#btnNuevoUsuario').on('click',function (event) {
	// 1.- id del modal
	// 2.- poner un titulo al modal
	// 3.- el tamaño del modal
	

	 $.ajax({
            method: "get",
            url: "/usuario/nuevo",
            dataType: "html",
        }).done(function(respuesta) {
        	abrirModal('#modalUsuarioIndex','Crear Nuevo Usuario','lg',false,'static');
        	// en un contenedor que tiene el id modalUsuarioIndex-body ponle mi contenido
          $('#modalUsuarioIndex-body').html(respuesta);          
          
        });
});


$('.nuevo').on('click',function (event) {
	// enviar los datos an controlador store
	 $.ajax({
            method: "post",
            url: "/usuario",
            data:{
            	nombre_usuario: $('[name="nombre_usuario"]').val(),
            	password: $('[name="password"]').val(),
            	email: $('[name="email"]').val(),
            	rol_id: $('[name="rol_id"]').val(),
            	estado: 'activo'
            },
            dataType: "json",
        }).done(function(respuesta) {
        	
          if (respuesta.code == 400) {
          	// nos valide el formulario
				// console.log(respuesta.data);
				var divs = document.getElementsByClassName("limpiar").length;
  				for (i = 0; i < divs ; i++) {
                    $('.limpiar').html('');
                }
				for (const campo in respuesta.data) {
				  // console.log(`${campo}: ${respuesta.data[campo]}`);
				   var mensaje = `El Campo : ${campo} ${respuesta.data[campo]}`;
                    mensajeAlert("info", mensaje, "Notificación");
				  $('.'+campo+'-error').html(respuesta.data[campo]);				  
				}

          }else if(respuesta.code == 200){
          	// me siere el modal y envair mensaje de notificacion

          	$('#modalUsuarioIndex').modal('hide')

          	mensajeAlert('success',respuesta.message,'Completado');


          }
        }).fail(function (error) {
        	console.log(error.responseJSON)

        	 $.ajax({
                url: "/error-server",
                type: "post",
                data: {
                    code:error.responseJSON.code,
	            	message:error.responseJSON.message,
	            	title:error.responseJSON.title,
                },
                dataType: "html",
                success: function(respuesta) {
                    // console.log(respuesta);
                    $('#modalUsuarioIndex').modal('hide');
                    $('.content').hide(0).html(respuesta).fadeIn('slow');
                },
                error: function(error) {
                    // console.log(error.responseJSON.message);
                }
            });

         });

        	

})
