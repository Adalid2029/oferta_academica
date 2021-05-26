$('#btnNuevoPublicacion').click(function(e){
    

    $.ajax({
        // la URL para la petición
        url : '/publicacion/nuevo',    
        // especifica si será una petición POST o GET
        type : 'GET',    
        // el tipo de información que se espera de respuesta
        dataType : 'html',    
        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success : function(respuesta) {
        // console.log(respuesta);
        // abrir modal
        abrirModal('#modalPublicacionIndex','Crear Publicación','lg', false, 'static');
        // poner en el contenido del modal
       $('#modalPublicacionIndex-body').html(respuesta);
        },    
        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto de la petición en crudo y código de estatus de la petición
        error : function(xhr, status) {
            alert('Disculpe, existió un problema');
            
        }
    });
})

$('.nuevo').click(function(e){
   
    $.ajax({
        url: '/publicacion',
        type: 'post',
        data: {
            nombre_programa :  $('[name="nombre_programa"]').val(),
            modalidad :  $('[name="modalidad"]').val(),
            grado_academico :  $('[name="grado_academico"]').val(),
            contenido_minimo :  $('[name="contenido_minimo"]').val(),
            id_gestion :  $('[name="id_gestion"]').val(),
        },
        dataType: 'json',
    }).done(function(data) {
        // $('#modalCargoIndex').modal('hide');
        console.log(data);
        // if (data.code == 400) {
        //     var messages = document.getElementsByClassName("limpiar");
        //     for (i = 0; i < messages.length; i++) {
        //         $('.limpiar').html('');
        //     }
        //     for (const property in data.data) {
        //         // console.log(property);
        //         var mensaje = `El Campo : ${property} ${data.data[property]}`;
        //         mensajeAlert("info", mensaje, "Warning");
        //         $('.' + property + '-error').html(data.data[property]);
        //     }
        // } else if (data.code == 200) {

        //     $('#modalUsuarioIndex').modal('hide');

        //     mensaje = 'Usuario Creado Con Éxito'
        //     mensajeAlert("success", mensaje, "exito");
        //     $("#tblUsuarios").DataTable().draw();
        // } 
     
    }).fail(function(jqXHR, textStatus) {
       
        // mensajeAlert(jqXHR.statusText, jqXHR.status, 'error');
        console.log(jqXHR);

       


    });
})