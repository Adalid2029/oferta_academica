window.loading = $('#preloader').show();
$(window).on('load', function () {
	loading.hide();
});
$(document)
	.ready(function () {
		window.abrirModal = function (idModal, titulo, tamano, onEscape, backdrop) {
			$(idModal + '-title').html(titulo);
			$(idModal + '-dialog').removeClass('modal-lg');
			$(idModal + '-dialog').removeClass('modal-xl');
			$(idModal + '-dialog').addClass(tamano);
			$(idModal).modal({
				backdrop: backdrop,
				keyboard: onEscape,
				focus: true,
				show: true,
			});
		};

		window.mensajeAlert = function (tipo, mensaje, titulo) {
			toastr.options = {
				closeButton: false,
				debug: false,
				newestOnTop: false,
				progressBar: true,
				positionClass: 'toast-top-right',
				preventDuplicates: false,
				onclick: null,
				showDuration: '300',
				hideDuration: '1000',
				timeOut: '5000',
				extendedTimeOut: '1000',
				showEasing: 'swing',
				hideEasing: 'linear',
				showMethod: 'fadeIn',
				hideMethod: 'fadeOut',
			};
			toastr[tipo](mensaje, titulo);
		};
	})
	.on('keydown', function (e) {
		if ((e.which || e.keyCode) === 116) e.preventDefault();
	});
