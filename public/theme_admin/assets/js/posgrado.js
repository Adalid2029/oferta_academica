$.extend(true, $.fn.dataTable.defaults, {
    "searching": true,
    "ordering": true,
    "responsive": true,
    "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "Todos"]],
    "pageLength": 5,
    "language": {
        "url": "/assets/plugins/datatables/lang/Spanish.json",
    }
});
$(document).ready(function () {
    $('.psg-menu').on('click', 'a.link-menu', function (event) {
        event.preventDefault();
        event.stopPropagation();
        let enlace = $(this);
        let contenedor = $('.' + (enlace.data('dest') === undefined ? 'psg-contenedor' : enlace.data('dest')));
        let url = $(this).attr('href');
        let n = url.indexOf(".upea.bo");
        url = url.substring(n === -1 ? 0 : n + 8);
        if (url !== '') {
            let contenido = '';
            $.ajax({
                cache: false,
                method: 'POST',
                dataType: 'html',
                url: (url.substring(0, 1) === '/' ? '' : '/') + url
            }).done(function (resultado) {
                contenido = resultado;
            }).fail(function(xhr, estado, error){
                if (xhr.status === 404) {
                    contenido = '<div class="alert alert-warning"><i class="fa fa-warning"></i> Error 404: ' + error + '</div>';
                } else {
                    contenido = '<div class="alert alert-danger"><i class="fa fa-warning"></i> Error: ' + error + '</div>';
                }
            }).always(function() {
                $('#sidebarnav li.active, #sidebarnav a.active').removeClass('active');
                enlace.addClass('active').parents('li').addClass('active');
                if (contenido === "false") {
                    alert('Su sesión ha expirado. Escriba su Nombre de Usuario y su Clave de Acceso, para continuar.');
                    $('#psg20').attr('href', '/login')[0].click();
                } else {
                    contenedor.hide(0).html(contenido).fadeIn('slow');
                }
            });
        } else {
            contenedor.html('<div class="alert alert-warning"><i class="fa fa-warning"></i> No se encuentra disponible el contenido solicitado.</div>');
        }
        if (screen.width < 768) {
            $('.mdi-close').click();
        }
    });
    setInterval(function () {
        const ahora = new Date();
        $("label#ahora").html('<i class="fa fa-clock-o"></i> ' + (ahora.getHours() < 10 ? "0" : "") + ahora.getHours() + ":" + (ahora.getMinutes() < 10 ? "0" : "") + ahora.getMinutes() + ":" + (ahora.getSeconds() < 10 ? "0" : "") + ahora.getSeconds());
    }, 1000);
}).on('keydown', function (e) {
    if ((e.which || e.keyCode) === 116) e.preventDefault();
});