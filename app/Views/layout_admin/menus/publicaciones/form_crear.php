<form class="form" id="form-publicaciones-editar" method="post">
    <div class="form-body">

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label font-weight-bold">Nombre Programa</label>
                    <input type="text" id="nombre_programa" class="form-control form-control-sm" name="nombre_programa" placeholder="Ingrese solamente el nombre del programa">
                    <!-- <small class="form-control-feedback"> Ingrese solamente el nombre del programa</small> -->
                </div>
            </div>
            <!--/span-->

            <!--/span-->
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label font-weight-bold">Modalidad</label>
                    <select class="form-control form-control-sm" name="modalidad">
                        <option value="">Seleccione...</option>
                        <option value="PRESENCIAL">PRESENCIAL</option>
                        <option value="SEMI-PRESENCIAL">SEMI-PRESENCIAL</option>
                        <option value="VIRTUAL">VIRTUAL</option>
                        <option value="ESCOLARIZADO">ESCOLARIZADO</option>
                        <option value="NO ESCOLARIZADO">NO ESCOLARIZADO</option>
                        <option value="OPCIONAL">OPCIONAL</option>

                    </select>
                </div>
            </div>
            <!--/span-->
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label font-weight-bold">Grado académico</label>
                    <select class="form-control form-control-sm" name="grado_academico">
                        <option value="">Seleccione...</option>
                        <option value="POST DOCTORADO">POST DOCTORADO</option>
                        <option value="DOCTORADO">DOCTORADO</option>
                        <option value="MAESTRÍA">MAESTRÍA</option>
                        <option value="LICENCIATURA">LICENCIATURA</option>
                        <option value="TÉCNICO SUPERIOR">TÉCNICO SUPERIOR</option>
                        <option value="TÉCNICO MEDIO">TÉCNICO MEDIO</option>
                        <option value="ESPECIALIDAD">ESPECIALIDAD</option>
                        <option value="DIPLOMADO">DIPLOMADO</option>

                    </select>
                </div>
            </div>
            <!--/span-->
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label font-weight-bold">Gestión</label>
                    <select class="form-control form-control-sm" name="id_gestion" data-placeholder="Choose a Category" tabindex="1">

                        <!-- <label class="col-form-label text-right col-lg-3 col-sm-12">Gestion *</label> -->
                        <!-- <div class="col-lg-8 col-md-12 col-sm-12"> -->
                        <!-- <select class="form-control" name="id_gestion" id="kt_select2" style="width: 100%"> -->
                        <option value="">Seleccione...</option>

                        <?php foreach ($lista_gestiones as $gestion) :  ?>

                            <option value=" <?= $gestion['id_gestion']  ?> "> <?= $gestion['gestion']  ?> </option>

                        <?php endforeach; ?>

                        <!-- </select> -->
                        <!-- <span class="form-text text-danger rol_id-error limpiar"></span> -->
                        <!-- </div> -->

                    </select>
                </div>
            </div>
            <!--/span-->
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label font-weight-bold">Sede</label>
                    <select class="form-control form-control-sm" name="sede" id="se">
                        <option>Seleccione...</option>
                        <option>CENTRAL EL ALTO</option>
                        <option>COCHABAMBA</option>
                        <option>CARANAVI</option>
                        <option>LA PAZ</option>

                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label font-weight-bold">Descripci&oacute;n del programa</label>

                    <input type="text" class="form-control form-control-sm" name="descripcion_programa" />

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label font-weight-bold">Monto Matricula</label>

                    <input type="text" class="form-control form-control-sm" name="monto_matricula" />

                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label class="control-label font-weight-bold">Primera Cuota</label>

                    <input type="text" class="form-control form-control-sm" name="primera_cuota" />

                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label class="control-label font-weight-bold">Número de Cuotas</label>

                    <input type="text" class="form-control form-control-sm" name="numero_cuotas" />

                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label class="control-label font-weight-bold">Precio Programa</label>

                    <input type="text" class="form-control form-control-sm" name="precio_programa" />

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label font-weight-bold">Descuento Pago al contado</label>

                    <input type="text" class="form-control form-control-sm" name="descuento_pago_contado" />

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label font-weight-bold">Fecha fin inscripción</label>
                    <input type="date" class="form-control form-control-sm" name="fecha_fin_inscripcion" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label font-weight-bold">Fecha inicio publicación </label>
                    <input type="date" class="form-control form-control-sm" name="fecha_inicio_publicacion" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label font-weight-bold">Fecha fin publicación</label>
                    <input type="date" class="form-control form-control-sm" name="fecha_fin_publicacion" />
                </div>
            </div>
        </div>







        <script type="text/javascript">
            $('#kt_select2').select2({
                placeholder: "Seleccione Gestion",
            });
        </script>