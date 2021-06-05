$(document).ready(function () {
	$('#form-verificar-carnet').on('submit', function (e) {
		e.preventDefault();
		event = this;
		swal(
			{
				title: `¿Verifique su Número de Identidad?<br>${$('[name="ci"]').val()}`,
				text: 'Por favor tómese el tiempo necesario para verificar su número',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#DD6B55',
				confirmButtonText: 'Continuar',
				cancelButtonText: 'Deseo revisar',
				closeOnConfirm: true,
				html: true,
			},
			function () {
				$.post('/inscripcion/verificar_identidad', $(event).serialize(), function (r) {
					if (typeof r.redireccionar != 'undefined') {
						window.location.replace(`${window.location.origin}${r.redireccionar.url}`);
					}
				});
			}
		);
	});
	$('.ci-inputmask').inputmask({
		mask: '9{1,15}[-*{1,2}]',
		greedy: false,
		definitions: {
			'*': {
				validator: '[0-9A-Za-zÑñ]',
				cardinality: 1,
				casing: 'upper',
			},
		},
	});
});
