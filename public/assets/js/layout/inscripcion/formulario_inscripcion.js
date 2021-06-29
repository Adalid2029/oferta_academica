$(document).ready(function () {
	let multimedia_diploma_academico = new Array();
	let multimedia_matricula = new Array();
	let multimedia_colegiatura = new Array();

	$('form').on('submit', function (e) {
		e.preventDefault();
		alert();
	});
	window.eliminarArchivo = function (archivos, posicion, tamanoMaximoSubida, elementoTamanoTotal, elementoListar, elementoEliminar) {
		console.log(elementoTamanoTotal);
		archivos.splice(posicion, 1);
		listarArchivos(archivos, tamanoMaximoSubida, elementoListar, elementoEliminar, elementoTamanoTotal);
		actualizarTamanoTotalArchivos($(`#${elementoTamanoTotal}`), tamanoTotalArchivos(archivos), tamanoMaximoSubida, archivos);
	};

	$('#multimedia_diploma_academico').on('change', function (e) {
		tamanoMaximoSubida = 15;
		tamanoMaximoArchivo = 15;
		cantidadMaximaAdjuntoArchivos = 15;
		tiposArchivoPermitido = ['.png', '.jpeg', '.jpg', '.PNG', '.JPEG', '.JPG'];
		// archivo = e.target.files[0];
		// console.log(e.target.files[0]);
		$.each(e.target.files, function (index, archivo) {
			respuesta = verificarArchivo(archivo, tamanoMaximoArchivo, tiposArchivoPermitido);
			// console.log(respuesta);
			if (respuesta === true) {
				tamanoTotal = Math.round((tamanoTotalArchivos(multimedia_diploma_academico) + e.target.files[0].size / 1000000) * 100) / 100;
				if (multimedia_diploma_academico.length < cantidadMaximaAdjuntoArchivos) {
					if (tamanoTotal <= tamanoMaximoSubida) {
						multimedia_diploma_academico.push(archivo);
						listarArchivos(multimedia_diploma_academico, tamanoMaximoSubida, 'multimedia-diploma-academico-listar', 'multimedia-diploma-academico-eliminar', 'multimedia-diploma-academico-tamano-total');
						actualizarTamanoTotalArchivos($('#multimedia-diploma-academico-tamano-total'), tamanoTotal, tamanoMaximoSubida, multimedia_diploma_academico);
					} else swal({ html: true, title: 'INFORMACIÓN', text: `No puede adicionar más Archivos, excede el tamaño máximo de envió ${tamanoMaximoSubida} MB`, type: 'error' });
				} else {
					swal({ html: true, title: 'INFORMACIÓN', text: `No puede adicionar más Archivos, excede la cantidad máximo de envió`, type: 'error' });
					return -1;
				}
			} else swal({ html: true, title: 'INFORMACIÓN', text: respuesta, type: 'error' });
		});
		$('#multimedia_diploma_academico').val('');
	});
	$('#multimedia_matricula').on('change', function (e) {
		tamanoMaximoSubida = 15;
		tamanoMaximoArchivo = 15;
		cantidadMaximaAdjuntoArchivos = 15;
		tiposArchivoPermitido = ['.png', '.jpeg', '.jpg', '.PNG', '.JPEG', '.JPG'];
		// archivo = e.target.files[0];
		// console.log(e.target.files[0]);
		$.each(e.target.files, function (index, archivo) {
			respuesta = verificarArchivo(archivo, tamanoMaximoArchivo, tiposArchivoPermitido);
			// console.log(respuesta);
			if (respuesta === true) {
				tamanoTotal = Math.round((tamanoTotalArchivos(multimedia_matricula) + e.target.files[0].size / 1000000) * 100) / 100;
				if (multimedia_matricula.length < cantidadMaximaAdjuntoArchivos) {
					if (tamanoTotal <= tamanoMaximoSubida) {
						abrirModal('#modal-deposito', 'Datos del Comprobante de Pago', 'modal-lg', false, 'static');
						vaciarFormularioDeposito();
						$('#guardar-deposito').click(function () {
							seGuardo = guardarDeposito(multimedia_matricula, archivo, `${$('#anio').val()}/${$('#mes').val()}/${$('#dia').val()}`, $('#numero_deposito').val(), $('#monto_deposito').val());
							if (seGuardo == true) {
								listarArchivos(multimedia_matricula, tamanoMaximoSubida, 'multimedia-matricula-listar', 'multimedia-matricula-eliminar', 'multimedia-matricula-tamano-total');
								actualizarTamanoTotalArchivos($('#multimedia-matricula-tamano-total'), tamanoTotal, tamanoMaximoSubida, multimedia_matricula);
								$('#modal-deposito').modal('hide');
								$('#guardar-deposito').off('click');
							} else swal({ html: true, title: 'INFORMACIÓN', text: seGuardo, type: 'error' });
						});
						var datosImagen = new FileReader();
						datosImagen.readAsDataURL(archivo);
						$(datosImagen).on('load', function (event) {
							$('#respaldo-deposito').attr('src', event.target.result);
							$('#respaldo-deposito').attr('data-original', event.target.result);
							new Viewer(document.getElementById('imagen-deposito'), {
								url: 'data-original',
								title: function (image) {
									return image.alt + ' (' + (this.index + 1) + '/' + this.length + ')';
								},
								zIndex: 9999999,
							});
						});
					} else swal({ html: true, title: 'INFORMACIÓN', text: `No puede adicionar más Archivos, excede el tamaño máximo de envió ${tamanoMaximoSubida} MB`, type: 'error' });
				} else {
					swal({ html: true, title: 'INFORMACIÓN', text: `No puede adicionar más Archivos, excede la cantidad máximo de envió`, type: 'error' });
					return -1;
				}
			} else swal({ html: true, title: 'INFORMACIÓN', text: respuesta, type: 'error' });
		});
		$('#multimedia_matricula').val('');
	});
	$('#multimedia_colegiatura').on('change', function (e) {
		tamanoMaximoSubida = 15;
		tamanoMaximoArchivo = 15;
		cantidadMaximaAdjuntoArchivos = 15;
		tiposArchivoPermitido = ['.png', '.jpeg', '.jpg', '.PNG', '.JPEG', '.JPG'];
		// archivo = e.target.files[0];
		// console.log(e.target.files[0]);
		$.each(e.target.files, function (index, archivo) {
			respuesta = verificarArchivo(archivo, tamanoMaximoArchivo, tiposArchivoPermitido);
			// console.log(respuesta);
			if (respuesta === true) {
				tamanoTotal = Math.round((tamanoTotalArchivos(multimedia_colegiatura) + e.target.files[0].size / 1000000) * 100) / 100;
				if (multimedia_colegiatura.length < cantidadMaximaAdjuntoArchivos) {
					if (tamanoTotal <= tamanoMaximoSubida) {
						abrirModal('#modal-deposito', 'Datos del Comprobante de Pago', 'modal-lg', false, 'static');
						vaciarFormularioDeposito();
						$('#guardar-deposito').click(function () {
							seGuardo = guardarDeposito(multimedia_colegiatura, archivo, `${$('#anio').val()}/${$('#mes').val()}/${$('#dia').val()}`, $('#numero_deposito').val(), $('#monto_deposito').val());
							if (seGuardo == true) {
								listarArchivos(multimedia_colegiatura, tamanoMaximoSubida, 'multimedia-colegiatura-listar', 'multimedia-colegiatura-eliminar', 'multimedia-colegiatura-tamano-total');
								actualizarTamanoTotalArchivos($('#multimedia-colegiatura-tamano-total'), tamanoTotal, tamanoMaximoSubida, multimedia_colegiatura);
								$('#modal-deposito').modal('hide');
								$('#guardar-deposito').off('click');
							} else swal({ html: true, title: 'INFORMACIÓN', text: seGuardo, type: 'error' });
						});
						var datosImagen = new FileReader();
						datosImagen.readAsDataURL(archivo);
						$(datosImagen).on('load', function (event) {
							$('#respaldo-deposito').attr('src', event.target.result);
							$('#respaldo-deposito').attr('data-original', event.target.result);
							new Viewer(document.getElementById('imagen-deposito'), {
								url: 'data-original',
								title: function (image) {
									return image.alt + ' (' + (this.index + 1) + '/' + this.length + ')';
								},
								zIndex: 9999999,
							});
						});
					} else swal({ html: true, title: 'INFORMACIÓN', text: `No puede adicionar más Archivos, excede el tamaño máximo de envió ${tamanoMaximoSubida} MB`, type: 'error' });
				} else {
					swal({ html: true, title: 'INFORMACIÓN', text: `No puede adicionar más Archivos, excede la cantidad máximo de envió`, type: 'error' });
					return -1;
				}
			} else swal({ html: true, title: 'INFORMACIÓN', text: respuesta, type: 'error' });
		});
		$('#multimedia_colegiatura').val('');
	});

	function guardarDeposito(multimedia, archivo, fecha_deposito, numero_deposito, monto_deposito) {
		alertas = [];
		if (!verificarFecha(fecha_deposito)) alertas.push('Seleccione una fecha correcta');
		if (monto_deposito.replace(/\s/g, '') == '') alertas.push('El campo monto deposito es obligatorio');
		if (numero_deposito.replace(/\s/g, '') == '') alertas.push('El campo numero deposito es obligatorio');
		if (alertas.length == 0) {
			multimedia.push([archivo, [fecha_deposito, numero_deposito, monto_deposito]]);
			return true;
		} else return listarAlertas(alertas, ['<p>', '</p>']);
	}
	const listarAlertas = (elementos, etiqueta) => {
		cadenaFinal = '';
		elementos.forEach((element) => {
			cadenaFinal += `${etiqueta[0]}${element}${etiqueta[1]}`;
		});
		return cadenaFinal;
	};
	const vaciarFormularioDeposito = () => {
		$('#anio').val('').change();
		$('#mes').attr('disabled', true);
		$('#mes').val('').change();
		$('#dia').attr('disabled', true);
		$('#dia').children().remove();
		$('#numero_deposito').val('');
		$('#monto_deposito').val('');
	};

	window.verificarFecha = function (fecha) {
		fecha = new Date.parse(fecha);
		return fecha instanceof Date && !isNaN(fecha);
	};

	function actualizarTamanoTotalArchivos(elemento, tamanoTotal, tamanoMaximoSubida, archivos) {
		elemento.html(`<h6 class="text-danger">Total seleccionados <small class="text-dark">${archivos.length}</small>,  Tama&ntildeo de Subida Total: <small class="text-dark">${tamanoTotal} MB</small>  de  ${tamanoMaximoSubida} MB</h6>`);
	}

	function verificarArchivo(archivo, tamanoMaximo, tipos) {
		console.log(archivo, tamanoMaximo, tipos);
		extension = /[.]/.exec(archivo.name) ? /[^.]+$/.exec(archivo.name) : undefined;
		tamano = Math.round((archivo.size / 1000000) * 100) / 100;
		if (tipos.includes(`.${extension[0]}`)) {
			if (tamano <= tamanoMaximo) {
				return true;
			} else return `El archivo ${archivo.name} demasiado grande (${archivo.size}). Tamaño maximo: ${tamanoMaximo} MB.`;
		} else return `No puede cargar archivos de este tipo ${archivo.name}.`;
	}
	function tamanoTotalArchivos(archivos) {
		tamanoTotal = 0;
		$.each(archivos, function (index, value) {
			console.log(index, value);
			tamanoTotal = tamanoTotal + value[0].size;
		});
		return Math.round((tamanoTotal / 1000000) * 100) / 100;
	}
	function listarArchivos(archivos, tamanoMaximoSubida, elementoListar, elementoEliminar, elementoTamanoTotal) {
		var archivos_html = '';
		$.each(archivos.reverse(), function (i, file) {
			// console.log(file, i);
			extension = /[.]/.exec(file[0].name) ? /[^.]+$/.exec(file[0].name) : undefined;
			archivos_html += `<li class="list-group-item justify-content-between align-items-center text-center">
				<div class="row">
					<div class="col-lg-3">
						<p class="p-multimedia small" title="${file[0].name}">${file[0].name}</p>
					</div>
					<div class="col-lg-2">
						<p class="p-multimedia small" title=".${file[1][0]}">.${file[1][0]}</p>
					</div>
					<div class="col-lg-3">
						<p class="p-multimedia small" title="${file[1][1]}">${file[1][1]}</p>
					</div>
					
					<div class="col-lg-4">
						<a href="#" class="btn btn-sm btn-info" data-id-editar="${i}"> 
							<i class="fa fa-pencil" title="Editar ${file[0].name}"></i> Editar
						</a>
						<a href="#" class="btn btn-sm btn-danger ${elementoEliminar}" data-id-eliminar="${i}"> 
							<i class="fa fa-times-circle-o" title="Eliminar ${file[0].name}"></i> Eliminar
						</a>
					</div>
				</div>
			</li>`;
		});
		$(`#${elementoListar}`).html(archivos_html);

		$(`.${elementoEliminar}`).one('click', function (e) {
			e.preventDefault();
			e.stopImmediatePropagation();
			eliminarArchivo(archivos, $(this).data('id-eliminar'), tamanoMaximoSubida, elementoTamanoTotal, elementoListar, elementoEliminar);
		});
	}

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

	$('#anio').on('change', function (e) {
		$('#mes').removeAttr('disabled');
	});
	$('#mes').on('change', function (e) {
		$('#dia').removeAttr('disabled');
	});
	$('#fecha').on('change', '#mes, #anio', function (e) {
		if ($('#anio').val() != '') recargarDias($('#anio'), $('#mes'), $('#dia'));
		else $(dia).children().remove();
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
		$('.numero-deposito').inputmask('9{1,20}'),
		$('.monto-deposito').inputmask('9{1,5}'),
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
	new Viewer(document.getElementById('imagen-programa'), {
		url: 'data-original',
		title: function (image) {
			return image.alt + ' (' + (this.index + 1) + '/' + this.length + ')';
		},
		zIndex: 9999999,
	});
});
