<style>
    .text-danger {
        color: red;
    }
</style>
<div class="boxed">
    <div class="content">
        <div class="page-title parallax parallax4" style="background-position: 50% 59px;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h2 class="title">INSCRIPCIÓN</h2>
                        </div><!-- /.page-title-heading -->
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="<?= base_url() ?>">POSGRADO</a></li>
                                <li><?= $publicacion_detalle['nombre_programa'] ?></li>
                            </ul>
                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <section class="main-content blog-posts blog-grid have-sidebar">
            <div class="container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-xlg-3 col-md-5">
                            <div class="card">
                                <a href="javascript:void(0);" style="cursor:pointer">
                                    <div id="imagen-programa">
                                        <ul class="pictures">
                                            <li>
                                                <?php if (isset($publicacion_multimedia['url'])) : ?>
                                                    <img data-original="<?= base_url($publicacion_multimedia['url']) ?>" id="imagen-publicacion" class="card-img-top img-responsive" src="<?= base_url($publicacion_multimedia['url']) ?>" alt="Card image cap">
                                                <?php endif ?>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                                <div class="card-body text-center">
                                    <center>
                                        <h4 class="font-normal"><?= $publicacion_detalle['grado_academico'] ?> EN:</h4>
                                        <p class="m-b-0 m-t-10"><?= $publicacion_detalle['nombre_programa'] ?></p>
                                    </center>
                                </div>
                            </div>

                            <div class="card ">
                                <div class="d-flex flex-row">
                                    <div class="p-10 bg-info">
                                        <h3 class="text-white box m-b-0"><i class="ti-wallet"></i></h3>
                                    </div>
                                    <div class="align-self-center m-l-20">
                                        <h3 class="m-b-0 text-info">Bs. <?= $publicacion_detalle['monto_matricula'] ?> </h3>
                                        <h5 class="text-muted m-b-0">Costo Matr&iacute;cula</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="card ">
                                <div class="d-flex flex-row">
                                    <div class="p-10 bg-warning">
                                        <h3 class="text-white box m-b-0"><i class="ti-wallet"></i></h3>
                                    </div>
                                    <div class="align-self-center m-l-20">
                                        <h3 class="m-b-0 text-info">Bs. <?= $publicacion_detalle['precio_programa'] ?> </h3>
                                        <h5 class="text-muted m-b-0">Costo Colegiatura</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->

                        <!-- Column -->
                        <div class="col-lg-8 col-xlg-9 col-md-7 ">
                            <!-- bloque de formulario de inscripcio -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card-header">
                                        <h2 class="m-b-0 text-white">FORMULARIO DE INSCRIPCIÓN</h2>
                                        <div class="alert alert-info">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                            <h3 class="text-info"><i class="fa fa-exclamation-circle"></i> Lea por favor</h3>
                                            <?php foreach ($mensaje as $key => $value) : ?>
                                                <li><?= $value[1] ?></li>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <form action="">
                                        <div class="row">
                                            <div class="col-lg-6 col-xl-6 col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Carnet de Identidad<span class="text-danger"> *</span></label>
                                                    <div class="controls">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-xl-6 col-md-12">
                                                                <input type="text" name="ci" class="form-control" required value="<?= $ci ?>" readonly="readonly" style="height: 34px;">
                                                            </div>
                                                            <div class="col-lg-6 col-xl-6 col-md-12">
                                                                <button href="<?= route_to('inscripcion.formulario/1') ?>" class="btn" style="height: 34px;">
                                                                    <i class="fa fa-refresh"></i> Reiniciar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-6 col-md-12">
                                                <div class="form-group ">
                                                    <label class="control-label">Expedido En<span class="text-danger"> *</span></label>
                                                    <div class="controls">
                                                        <select name="expedido" required class="form-control">
                                                            <?php foreach (['LP', 'CH', 'CB', 'OR', 'PT', 'TJ', 'SC', 'BE', 'PD'] as $key => $value) : ?>
                                                                <option value="<?= $value ?>" <?= isset($inscripcion['expedido']) ? ($inscripcion['expedido'] == $value ?  'selected' : '') : ''; ?>><?= $value ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h4 style="margin-bottom: 0;">Respaldo Digital de tu Carnet de Identidad<span class="text-danger"> *</span></h4>
                                        <div class="row">
                                            <!--/ bloque carnet anverso -->
                                            <div class="col-lg-6 col-xl-6 col-md-12" style="display: block;margin: auto;">
                                                <img src="<?= base_url('assets/img/add_img.jpg') ?>" alt="" id="mostrar_img_ci_delante" name="mostrar_img_ci_delante" onclick="document.getElementById('img_ci_delante').click()" style="cursor: pointer; width:100%;">
                                                <!--/ sector de input file  -->
                                                <div class="view_img_right">
                                                    <!-- <label class="control-label">Saque una Foto o Imagen de la cara de su Carnet <span class="text-danger"> *</span></label> -->
                                                    <p>Toma una Fotograf&iacute;a o carga una imagen del lado anverso de tu carnet de identidad.</p>
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-block" onclick="document.getElementById('img_ci_delante').click()" style="height: 34px;"><i class="fa fa-upload"> </i> Cargar lado ANVERSO</button>
                                                        <div class="controls custom-file" id="ci_delante" style="display: none;">
                                                            <input type="file" class="custom-file-input " id="img_ci_delante" name="img_ci_delante" required>
                                                            <label id="label_img_name_ci_delante" class="custom-file-label form-control" for="img_ci_delante"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--/ bloque carnet reverso -->
                                            <div class="col-lg-6 col-xl-6 col-md-12" style="display: block;margin: auto;">
                                                <img src="<?= base_url('assets/img/add_img.jpg') ?>" alt="" id="mostrar_img_ci_atras" name="mostrar_img_ci_atras" onclick="document.getElementById('img_ci_atras').click()" style="cursor: pointer; width:100%;">
                                                <!-- <label class="control-label">Saque una foto o suba una Imagen de la parte de atras de su carnet <span class="text-danger"> *</span></label> -->
                                                <p>Toma una Fotograf&iacute;a o carga una imagen del lado reverso de tu carnet de identidad.</p>
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-block" onclick="document.getElementById('img_ci_atras').click()" style="height: 34px;"><i class="fa fa-upload"> </i> Cargar lado REVERSO</button>

                                                    <div class="controls custom-file" id="ci_atras" style="display: none;">
                                                        <input type="file" class="custom-file-input" id="img_ci_atras" name="img_ci_atras" required>
                                                        <label id="label_img_name_ci_atras" class="custom-file-label form-control" for="img_ci_atras"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h3>DATOS PERSONALES</h3>
                                        <div class="row p-t-20">
                                            <!--/input nombre-->
                                            <div class="col-lg-4 col-xl-4 col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Nombre(s)<span class="text-danger"> *</span></label>
                                                    <div class="controls">
                                                        <input type="text" name="nombre" id="nombre" class="form-control" maxlength="50" required value="<?= isset($inscripcion['nombre']) ?  $inscripcion['nombre'] : '' ?>" style="height: 34px;">
                                                    </div>
                                                </div>
                                            </div>

                                            <!--/input paterno-->
                                            <div class="col-lg-4 col-xl-4 col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Paterno<span class="text-danger"> *</span></label>
                                                    <div class="controls">
                                                        <input type="text" name="paterno" id="paterno" class="form-control  " maxlength="50" required value="<?= isset($inscripcion['paterno']) ?  $inscripcion['paterno'] : '' ?>" style="height: 34px;">
                                                    </div>

                                                </div>
                                            </div>

                                            <!--/input materno-->
                                            <div class="col-lg-4 col-xl-4 col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Materno<span class="text-danger"> *</span></label>
                                                    <div class="controls">
                                                        <input type="text" name="materno" id="materno" class="form-control  " maxlength="50" required value="<?= isset($inscripcion['materno']) ?  $inscripcion['materno'] : '' ?>" style="height: 34px;">
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Género<span class="text-danger"> *</span></label>
                                                    <div class="controls">
                                                        <select name="genero" id="genero" required class="form-control ">
                                                            <?php foreach (['F', 'M'] as $key => $value) : ?>
                                                                <option value="<?= $value ?>" <?= isset($inscripcion['genero']) ? ($inscripcion['genero'] == $value ?  'selected' : '') : ''; ?>><?= $value ?></option>
                                                            <?php endforeach ?>


                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>

                                                </div>
                                            </div>

                                            <!--/input fecha nacimiento-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Fecha Nacimiento<span class="text-danger"> *</span></label>
                                                    <div class="row" id="fecha-nacimiento">
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="controls">
                                                                <select name="anio-nacimiento" id="anio-nacimiento" required data-size="8" class="form-control">
                                                                    <option value="">AÑO</option>
                                                                    <?php for ($i = intval(date('Y') - 17); $i >= 1920; $i--) : ?>
                                                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                                                    <?php endfor; ?>
                                                                </select>
                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="controls">
                                                                <select name="mes-nacimiento" id="mes-nacimiento" required data-size="6" class="form-control" disabled>
                                                                    <option value="">MES</option>
                                                                    <?php for ($i = 1; $i <= 12; $i++) : ?>
                                                                        <option value="<?= $i; ?>"><?= mes_literal($i); ?></option>
                                                                    <?php endfor; ?>
                                                                </select>
                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="controls">
                                                                <select name="dia-nacimiento" id="dia-nacimiento" required data-size="6" class="form-control" disabled>
                                                                    <option value="">D&Iacute;A</option>
                                                                    <?php for ($i = 1; $i <= 31; $i++) : ?>
                                                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                                                    <?php endfor; ?>
                                                                </select>
                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-xl-4 col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Ciudad donde vive<span class="text-danger"> *</span></label>
                                                    <div class="controls">
                                                        <select name="ciudad_donde_vive" id="ciudad_donde_vive" required class="form-control  select2">
                                                            <option value="">SELECCIONE LA CUIDAD</option>
                                                            <?php foreach ($ciudades as $key => $value) : ?>
                                                                <option value="<?= $value['nombre_ciudad'] ?>" <?= isset($inscripcion['ciudad']) ? ($inscripcion['ciudad'] == $value['nombre_ciudad'] ?  'selected' : '') : ''; ?>><?= $value['nombre_ciudad'] ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-8 col-xl-8 col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Dirección donde vive <span class="text-danger"> *</span></label>
                                                    <div class="controls">
                                                        <input type="text" name="domicilio" id="domicilio" class="form-control" maxlength="50" required value="<?= isset($inscripcion['domicilio']) ? $inscripcion['domicilio'] : ''; ?>" style="height: 34px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-lg-4 col-xl-4 col-md-12 ">
                                                <div class="form-group">
                                                    <label class="control-label">Estado Civil<span class="text-danger"> *</span></label>
                                                    <div class="controls">
                                                        <select name="estado_civil" id="estado_civil" required class="form-control ">
                                                            <option value=""></option>
                                                            <?php foreach (['SOLTERO', 'CASADO', 'DIVORCIADO', 'VIUDO', 'CONVIVIENTE', 'SOLTERA'] as $key => $value) : ?>
                                                                <option value="<?= $value ?>" <?= isset($inscripcion['estado_civil']) ? ($inscripcion['estado_civil'] == $value ?  'selected' : '') : ''; ?>><?= $value ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-xl-12 col-md-12 ">
                                                <div class="form-group">
                                                    <label class="control-label">Ocupación actual<span class="text-danger"> *</span></label>
                                                    <div class="controls">
                                                        <input type="text" name="oficio_trabajo" id="oficio_trabajo" class="form-control" maxlength="50" required value="<?= isset($inscripcion['oficio_trabajo']) ? $inscripcion['oficio_trabajo'] : '' ?>" style="height: 34px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!--/input celular-->
                                            <div class="col-lg-4 col-xl-4 col-md-6  ">
                                                <div class="form-group">
                                                    <label class="control-label">Celular<span class="text-danger"> *</span></label>
                                                    <div class="controls">
                                                        <input type="text" name="celular" id="celular" class="form-control telefono-celular-inputmask" maxlength="8" minlength="8" autocomplete="off" value="<?= isset($inscripcion['celular']) ? $inscripcion['celular'] : '' ?>" style="height: 34px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/input correo electronico-->
                                            <div class="col-lg-8 col-xl-8 col-md-12">
                                                <div class="form-group ">
                                                    <label class="control-label">Correo Electronico<span class="text-danger"> *</span></label>
                                                    <div class="controls">
                                                        <input type="text" name="email" id="email" class="form-control email-inputmask " maxlength="50" required autocomplete="off" value="<?= isset($inscripcion['correo']) ? $inscripcion['correo'] : '' ?>" style="height: 34px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h3>FORMACIÓN ACAD&Eacute;MICA</h3>
                                        <label class="control-label">Respaldo de Diploma Academico <span class="text-danger"> *</span></label>
                                        <p>Toma una Fotograf&iacute;a o carga una imagen de tu Diploma Acad&eacute;mico.</p>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="multimedia-diploma-academico alert alert-warning" data-tamano-archivo="10" data-tamano-archivos-total="20" data-tipos=".png, .jpeg, .jpg, .PNG, .JPEG, .JPG">
                                                    <div id="multimedia-diploma-academico-agregar">
                                                        <input type="file" id="multimedia_diploma_academico" class="inputfile" accept=".png, .jpeg, .jpg, .PNG, .JPEG, .JPG" />
                                                        <label class="label-multimedia" for="multimedia_diploma_academico">
                                                            <ul class="list-group">
                                                                <li id="elemento_dropzone text-center" class="list-group-item d-flex justify-content-center bounce animated" style="cursor:pointer; cursor: hand; border: 3px dotted; border-radius: 8px">
                                                                    <i class="fa fa-cloud-upload i-multimedia"></i><br>
                                                                    <span class="note needsclick">(Arrastra los archivos aquí o <strong>haz clic para subirlos</strong>.)</span>
                                                                </li>
                                                            </ul>
                                                        </label>
                                                    </div>
                                                    <div id="multimedia-diploma-academico-listar">
                                                    </div>
                                                    <div id="multimedia-diploma-academico-tamano-total">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <h3 class="box-title m-t-40">DATOS DEL DEP&Oacute;SITO BANCARIO</h3>
                                            <h4 class="h4">M&eacute;todo de Pago <span class="text-danger"> *</span></h4>
                                            <div class="row text-center" style="margin-top: 10px;">
                                                <div class=" col-md-6">
                                                    <input type="radio" name="metodo_pago[]" id="pago-contado"> <label for="pago-contado"> Pago al contado</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="radio" name="metodo_pago[]" id="pago-cuotas"> <label for="pago-cuotas"> Pago en coutas</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h4 class="h4">Registre su Dep&oacute;sito de Matr&iacute;cula Bs. <?= $publicacion_detalle['monto_matricula'] ?><span class="text-danger"> *</span></h4>
                                            <p>Toma una Fotograf&iacute;a o carga una imagen de tu Dep&oacute;sito de matr&iacute;cula.</p>
                                            <div class="col-md-12 text-center">
                                                <div class="multimedia-matricula alert alert-warning" data-tamano-archivo="10" data-tamano-archivos-total="20" data-tipos=".png, .jpeg, .jpg, .PNG, .JPEG, .JPG">
                                                    <div id="multimedia-matricula-agregar">
                                                        <input type="file" id="multimedia_matricula" class="inputfile" accept=".png, .jpeg, .jpg, .PNG, .JPEG, .JPG" />
                                                        <label class="label-multimedia" for="multimedia_matricula">
                                                            <ul class="list-group">
                                                                <li id="elemento_dropzone text-center" class="list-group-item d-flex justify-content-center bounce animated" style="cursor:pointer; cursor: hand; border: 3px dotted; border-radius: 8px">
                                                                    <i class="fa fa-cloud-upload i-multimedia"></i><br>
                                                                    <span class="note needsclick">(Arrastra los archivos aquí o <strong>haz clic para subirlos</strong>.)</span>
                                                                </li>
                                                            </ul>
                                                        </label>
                                                    </div>
                                                    <div id="multimedia-matricula-listar">
                                                    </div>
                                                    <div id="multimedia-matricula-tamano-total">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <h4 class="h4">Registre su Dep&oacute;sito por Colegiatura (1ra Cuota)<span class="text-danger"> *</span></h4>
                                            <p>Toma una Fotograf&iacute;a o carga una imagen de tu Dep&oacute;sito por colegiatura.</p>
                                            <div class="row m-t-20">
                                                <div class="col-md-12 text-center">
                                                    <div class="multimedia-colegiatura alert alert-warning" data-tamano-archivo="10" data-tamano-archivos-total="20" data-tipos=".png, .jpeg, .jpg, .PNG, .JPEG, .JPG">
                                                        <div id="multimedia-colegiatura-agregar">
                                                            <input type="file" id="multimedia_colegiatura" class="inputfile" accept=".png, .jpeg, .jpg, .PNG, .JPEG, .JPG" />
                                                            <label class="label-multimedia" for="multimedia_colegiatura">
                                                                <ul class="list-group">
                                                                    <li id="elemento_dropzone text-center" class="list-group-item d-flex justify-content-center bounce animated" style="cursor:pointer; cursor: hand; border: 3px dotted; border-radius: 8px">
                                                                        <i class="fa fa-cloud-upload i-multimedia"></i><br>
                                                                        <span class="note needsclick">(Arrastra los archivos aquí o <strong>haz clic para subirlos</strong>.)</span>
                                                                    </li>
                                                                </ul>
                                                            </label>
                                                        </div>
                                                        <div id="multimedia-colegiatura-listar">
                                                        </div>
                                                        <div id="multimedia-colegiatura-tamano-total">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-actions m-t-40 row">
                                                    <div class="col-md-6">
                                                        <a href="<?php base_url() ?>" class="btn btn-rounded btn-block btn-outline-warning" id="cancelar_inscripcion_online">CANCELAR </a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="submit" id="enviar_inscripcion" class="btn btn-rounded btn-block" style="height: 34px;"> <i class="fa fa-check-circle"></i> ENVIAR DATOS PARA LA INSCRIPCIÓN</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /row -->
        </section>
    </div>
</div>


<!-- Modal -->
<div class="modal" id="detalle-programa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow-y: scroll;">
    <div id="detalle-programa-dialog" class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div id="detalle-programa-header" class="modal-header bg-color-psg">
                <h5 id="detalle-programa-title" class="modal-title font-weight-bold text-white"></h5>
                <button type="button" class="close btn-warning" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="detalle-programa-body" class="modal-body">
            </div>
        </div>
    </div>
</div>

<div id="modal-deposito" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div id="modal-deposito-dialog" class="modal-dialog">
        <div id="modal-deposito-content" class="modal-content">
            <div id="modal-deposito-header" class="modal-header">
                <h4 id="modal-deposito-title" class="modal-title">Detalles del Deposito</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div id="modal-deposito-body" class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-12">
                        <div id="imagen-deposito" style="cursor:pointer">
                            <ul class="pictures">
                                <img id="respaldo-deposito" style="width: 100%; height: 100%;">
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-12">
                        <div class=" form-group">
                            <label class="control-label">Fecha de Dep&oacute;sito <span class="text-danger"> *</span></label>
                            <div class="row" id="fecha">
                                <div class="col-lg-4 col-md-12">
                                    <div class="controls">
                                        <select id="anio" required class="form-control">
                                            <option value="">AÑO</option>
                                            <?php for ($i = intval(date('Y')); $i >= intval(date('Y')); $i--) : ?>
                                                <option value="<?= $i; ?>"><?= $i; ?></option>
                                            <?php endfor; ?>
                                        </select>
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="controls">
                                        <select id="mes" required class="form-control" disabled>
                                            <option value="">MES</option>
                                            <?php for ($i = 1; $i <= 12; $i++) : ?>
                                                <option value="<?= $i; ?>"><?= mes_literal($i); ?></option>
                                            <?php endfor; ?>
                                        </select>
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="controls">
                                        <select id="dia" required class="form-control" disabled>
                                            <option value="">D&Iacute;A</option>
                                            <?php for ($i = 1; $i <= 31; $i++) : ?>
                                                <option value="<?= $i; ?>"><?= $i; ?></option>
                                            <?php endfor; ?>
                                        </select>
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Numero Deposito<span class="text-danger"> *</span></label>
                            <div class="controls">
                                <input type="text" id="numero_deposito" class="form-control numero-deposito" maxlength="50" required="" value="" style="height: 34px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Monto Deposito<span class="text-danger"> *</span></label>
                            <div class="controls">
                                <input type="text" id="monto_deposito" class="form-control monto-deposito" maxlength="50" required="" value="" style="height: 34px;">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="modal-deposito-footer" class="modal-footer">
                <button type="button" id="guardar-deposito" class="btn btn-rounded btn-block" style="height: 34px;">
                    <i class="fa fa-check-circle"></i> ACEPTAR
                </button>
                <a type="button" class="btn btn-rounded btn-block" data-dismiss="modal" style="height: 34px;">
                    <i class="fa fa-times-circle"></i> CANCELAR
                </a>
            </div>
        </div>
    </div>
</div>