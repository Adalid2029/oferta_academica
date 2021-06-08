$(document).ready(function () {
	$('form').on('submit', function (e) {
		e.preventDefault();
		alert();
	});

	$('#anio-nacimiento').on('change', function (e) {
		$('#mes-nacimiento').removeAttr('disabled');
	});
	$('#mes-nacimiento').on('change', function (e) {
		$('#dia-nacimiento').removeAttr('disabled');
	});
	$('#fecha-nacimiento').on('change', '#mes-nacimiento, #anio-nacimiento', function (e) {
		recargarDias($('#anio-nacimiento'), $('#mes-nacimiento'), $('#dia-nacimiento'));
	});

	$('#anio-matricula').on('change', function (e) {
		$('#mes-matricula').removeAttr('disabled');
	});
	$('#mes-matricula').on('change', function (e) {
		$('#dia-matricula').removeAttr('disabled');
	});
	$('#fecha-matricula').on('change', '#mes-matricula, #anio-matricula', function (e) {
		recargarDias($('#anio-matricula'), $('#mes-matricula'), $('#dia-matricula'));
	});

	$('#anio-colegiatura').on('change', function (e) {
		$('#mes-colegiatura').removeAttr('disabled');
	});
	$('#mes-colegiatura').on('change', function (e) {
		$('#dia-colegiatura').removeAttr('disabled');
	});
	$('#fecha-colegiatura').on('change', '#mes-colegiatura, #anio-colegiatura', function (e) {
		recargarDias($('#anio-colegiatura'), $('#mes-colegiatura'), $('#dia-colegiatura'));
	});
	const recargarDias = (anio, mes, dia) => {
		$(dia).children().remove();
		let opcion = '';
		for (let i = 1; i <= Date.getDaysInMonth($(anio).val(), $(mes).val() - 1); i++) {
			opcion += "<option value='" + i + "'>" + i + '</option>';
		}
		$(dia).append(opcion);
	};

	$('.email-inputmask').inputmask({
		mask: '*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]',
		greedy: !1,
		onBeforePaste: function (n, a) {
			return (e = e.toLowerCase()).replace('mailto:', '');
		},
		definitions: {
			'*': {
				validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
				cardinality: 1,
				casing: 'lower',
			},
		},
	}),
		$('.telefono-inputmask').inputmask('9{1,10}'),
		$('.telefono-celular-inputmask').inputmask('9{1,8}'),
		$('.numeros-inputmask').inputmask('9{1,50}'),
		$('.texto-espacio-inputmask').inputmask({
			mask: '*{1,24}[ *{1,25}]',
			greedy: false,
			definitions: {
				'*': {
					validator: '[ A-Za-záéíóúñÁÉÍÓÚÑ]',
					cardinality: 1,
					casing: 'upper',
				},
			},
		}),
		$('.texto-varios-espacios-inputmask').inputmask({
			mask: '*{1,24}[ *{1,25}][ *{1,25}][ *{1,25}][ *{1,25}][ *{1,25}][ *{1,25}]',
			greedy: false,
			definitions: {
				'*': {
					validator: '[A-Za-záéíóúàèìòùÁÉÍÓÚÀÈÌÒÙ]',
					cardinality: 1,
					casing: 'upper',
				},
			},
		}),
		$('.texto-inputmask').inputmask({
			mask: '*{1,50}',
			greedy: false,
			definitions: {
				'*': {
					validator: '[ A-Za-záéíóúñÁÉÍÓÚÑ]',
					cardinality: 1,
					casing: 'upper',
				},
			},
		});
});
window.addEventListener('DOMContentLoaded', function () {
	var galley = document.getElementById('galley');
	var viewer = new Viewer(galley, {
		url: 'data-original',
		title: function (image) {
			return image.alt + ' (' + (this.index + 1) + '/' + this.length + ')';
		},
		zIndex: 9999999,
	});
});
