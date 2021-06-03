<style>
    .text-danger {
        color: red;
    }
</style>
<link rel="stylesheet" href="<?= base_url('theme/stylesheets/viewer.min.css') ?>">
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
                            <div class="efecto_sticky">
                                <div class="card">
                                    <a href="javascript:void(0);" style="cursor:pointer">
                                        <div id="galley">
                                            <ul class="pictures">
                                                <li>
                                                    <img data-original="<?= base_url($publicacion_multimedia['url']) ?>" id="imagen-publicacion" class="card-img-top img-responsive" src="<?= base_url($publicacion_multimedia['url']) ?>" alt="Card image cap">
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
                                            <h3 class="m-b-0 text-info">Bs. 100 </h3>
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
                                            <h3 class="m-b-0 text-info">Bs. 200 </h3>
                                            <h5 class="text-muted m-b-0">Costo Colegiatura</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->

                        <!-- Column -->
                        <div class="col-lg-8 col-xlg-9 col-md-7 ">
                            <div class="card ">
                                <!-- bloque de formulario de inscripcio -->
                                <div class="tab-pane active " id="formulario_preinscripcion" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card card-outline-info">
                                                <div class="card-header">
                                                    <h4 class="m-b-0 text-white">FORMULARIO DE INSCRIPCIÓN</h4>
                                                </div>
                                                <div class="card-body" oncopy="return false" onpaste="return false">
                                                    <form action="" novalidate>
                                                        <input type="hidden" id="id_publicacion" name="id_publicacion" value="23">
                                                        <div class="form-body">
                                                            <div class="row p-t-0">
                                                                <div class="col-lg-6 col-xl-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Carnet de Identidad<span class="text-danger"> *</span></label>
                                                                        <div class="controls">
                                                                            <div class="row">
                                                                                <div class="col-lg-6 col-xl-6 col-md-12">
                                                                                    <input type="number" name="ci" class="form-control   text-uppercase" maxlength="50" required autocomplete="off" value="9874182" readonly="readonly" style="height: 34px;">
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
                                                                            <select name="expedido" required class="form-control text-uppercase">
                                                                                <option value="LP" <?php if (!empty($datos_persona[0]['expedido'])) echo ($datos_persona[0]['expedido'] == 'LP' ? 'selected="selected"' : ''); ?>>
                                                                                    LP</option>
                                                                                <option value="CH" <?php if (!empty($datos_persona[0]['expedido'])) echo ($datos_persona[0]['expedido'] == 'CH' ? 'selected="selected"' : ''); ?>>
                                                                                    CH</option>
                                                                                <option value="CB" <?php if (!empty($datos_persona[0]['expedido'])) echo ($datos_persona[0]['expedido'] == 'CB' ? 'selected="selected"' : ''); ?>>
                                                                                    CB</option>
                                                                                <option value="OR" <?php if (!empty($datos_persona[0]['expedido'])) echo ($datos_persona[0]['expedido'] == 'OR' ? 'selected="selected"' : ''); ?>>
                                                                                    OR</option>
                                                                                <option value="PT" <?php if (!empty($datos_persona[0]['expedido'])) echo ($datos_persona[0]['expedido'] == 'PT' ? 'selected="selected"' : ''); ?>>
                                                                                    PT</option>
                                                                                <option value="TJ" <?php if (!empty($datos_persona[0]['expedido'])) echo ($datos_persona[0]['expedido'] == 'TJ' ? 'selected="selected"' : ''); ?>>
                                                                                    TJ</option>
                                                                                <option value="SC" <?php if (!empty($datos_persona[0]['expedido'])) echo ($datos_persona[0]['expedido'] == 'SC' ? 'selected="selected"' : ''); ?>>
                                                                                    SC</option>
                                                                                <option value="BE" <?php if (!empty($datos_persona[0]['expedido'])) echo ($datos_persona[0]['expedido'] == 'BE' ? 'selected="selected"' : ''); ?>>
                                                                                    BE</option>
                                                                                <option value="PD" <?php if (!empty($datos_persona[0]['expedido'])) echo ($datos_persona[0]['expedido'] == 'PD' ? 'selected="selected"' : ''); ?>>
                                                                                    PD</option>
                                                                            </select>
                                                                            <div class="help-block"></div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <!--/span-->
                                                            </div>

                                                            <h4 class="card-title" style="margin-bottom: 0;">Respaldo Digital de tu Carnet de Identidad<span class="text-danger"> *</span></h4>
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
                                                            <h4 class="card-title">DATOS PERSONALES</h4>
                                                            <div class="row p-t-20">
                                                                <!--/input nombre-->
                                                                <div class="col-lg-4 col-xl-4 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Nombre(s)<span class="text-danger"> *</span></label>
                                                                        <div class="controls">
                                                                            <input type="text" name="nombre" id="nombre" class="form-control text-uppercase" maxlength="50" required value="<?php if (!empty($datos_persona[0]['nombre'])) echo $datos_persona[0]['nombre']; ?>" style="height: 34px;">
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                                <!--/input paterno-->
                                                                <div class="col-lg-4 col-xl-4 col-md-6">
                                                                    <div class="form-group ">
                                                                        <label class="control-label">Paterno<span class="text-danger"> *</span></label>
                                                                        <div class="controls">
                                                                            <input type="text" name="paterno" id="paterno" class="form-control   text-uppercase" maxlength="50" required value="<?php if (!empty($datos_persona[0]['paterno'])) echo $datos_persona[0]['paterno']; ?>" style="height: 34px;">
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <!--/input materno-->
                                                                <div class="col-lg-4 col-xl-4 col-md-6">
                                                                    <div class="form-group ">
                                                                        <label class="control-label">Materno<span class="text-danger"> *</span></label>
                                                                        <div class="controls">
                                                                            <input type="text" name="materno" id="materno" class="form-control   text-uppercase" maxlength="50" required value="<?php if (!empty($datos_persona[0]['materno'])) echo $datos_persona[0]['materno']; ?>" style="height: 34px;">
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Género<span class="text-danger"> *</span></label>
                                                                        <div class="controls">
                                                                            <select name="genero" id="genero" required class="form-control  text-uppercase">
                                                                                <option value="" <?php if (!empty($datos_persona[0]['genero'])) echo ($datos_persona[0]['genero'] == '' ? 'selected="selected"' : ''); ?>>
                                                                                    SELECIONE SU GENERO </option>
                                                                                <option value="M" <?php if (!empty($datos_persona[0]['genero'])) echo ($datos_persona[0]['genero'] == 'MASCULINO' ? 'selected="selected"' : ''); ?>>
                                                                                    MASCULINO</option>
                                                                                <option value="F" <?php if (!empty($datos_persona[0]['genero'])) echo ($datos_persona[0]['genero'] == 'FEMENINO' ? 'selected="selected"' : ''); ?>>
                                                                                    FEMENINO</option>

                                                                            </select>
                                                                            <div class="help-block"></div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <!--/input fecha nacimiento-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Fecha Nacimiento<span class="text-danger"> *</span></label>

                                                                        <!-- <div class="controls">
                                                                <div class="controls">
                                                                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control   text-uppercase" placeholder="<?= date("Y-m-d") ?>" value="<?php if (!empty($datos_persona[0]['fecha_nacimiento'])) echo $datos_persona[0]['fecha_nacimiento']; ?>" required> </div>
                                                            </div> -->

                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-6">
                                                                                <div class="controls">
                                                                                    <select name="diax" id="diax" required data-size="6" class="form-control  text-uppercase">
                                                                                        <?php for ($i = 1; $i <= 31; $i++) : ?>
                                                                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                                        <?php endfor; ?>
                                                                                    </select>
                                                                                    <div class="help-block"></div>
                                                                                </div>

                                                                            </div>

                                                                            <div class="col-lg-4 col-md-6">
                                                                                <div class="controls">
                                                                                    <select name="mesx" id="mesx" required data-size="6" class="form-control  text-uppercase">
                                                                                        <?php for ($i = 1; $i <= 12; $i++) : ?>
                                                                                            <?php if ($i < 10) : ?>
                                                                                                <option value="<?php echo '0' . $i; ?>"><?php echo mes_literal($i); ?></option>
                                                                                            <?php else : ?>
                                                                                                <option value="<?php echo $i; ?>"><?php echo mes_literal($i); ?></option>
                                                                                            <?php endif ?>
                                                                                        <?php endfor; ?>
                                                                                    </select>
                                                                                    <div class="help-block"></div>
                                                                                </div>

                                                                            </div>

                                                                            <div class="col-lg-4 col-md-12">
                                                                                <div class="controls">
                                                                                    <select name="aniox" id="aniox" required data-size="8" class="form-control  text-uppercase">
                                                                                        <?php for ($i = intval(date('Y') - 17); $i >= 1920; $i--) : ?>
                                                                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                                        <?php endfor; ?>
                                                                                    </select>
                                                                                    <div class="help-block"></div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>
                                                            <!--/row-->

                                                            <!--/row-->
                                                            <div class="row">
                                                                <!--/input lugar de nacimiento-->
                                                                <div class=" col-lg-8 col-xl-8 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Lugar de Nacimiento (Como indica su Carnet) <span class="text-danger"> *</span></label>
                                                                        <div class="controls">
                                                                            <div class="controls">
                                                                                <input type="text" name="lugar_nacimiento" id="lugar_nacimiento" class="form-control   text-uppercase" maxlength="50" required value="<?php if (!empty($datos_persona[0]['lugar_nacimiento'])) echo $datos_persona[0]['lugar_nacimiento']; ?>" style="height: 34px;">
                                                                            </div>


                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!--/input cuidad donde vive-->
                                                                <div class=" col-lg-4 col-xl-4 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Ciudad donde vive<span class="text-danger"> *</span></label>
                                                                        <div class="controls">
                                                                            <select name="ciudad_donde_vive" id="ciudad_donde_vive" required class="form-control  text-uppercase select2">
                                                                                <option value="">SELECCIONE LA CUIDAD</option>
                                                                                <?php if (isset($datos_persona[0]['ciudad_donde_vive'])) : ?>
                                                                                    <?php foreach ($ciudades as $key => $value) : ?>
                                                                                        <option value="<?= $key ?>" <?= $datos_persona[0]['ciudad_donde_vive'] == $key ? 'selected' : ''; ?>><?= $ciudad_interesado ?></option>
                                                                                    <?php endforeach; ?>
                                                                                <?php endif; ?>



                                                                            </select>
                                                                            <div class="help-block"></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->

                                                            <!--/row-->
                                                            <div class="row">
                                                                <!--/input lugar donde vive-->
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Dirección donde vive <span class="text-danger"> *</span></label>
                                                                        <div class="controls">

                                                                            <div class="controls">
                                                                                <input type="text" name="domicilio" id="domicilio" class="form-control  text-uppercase" maxlength="50" required value="<?php if (!empty($datos_persona[0]['domicilio'])) echo $datos_persona[0]['domicilio']; ?>" style="height: 34px;">
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-3 col-xl-3 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Nacionalidad<span class="text-danger"> *</span></label>
                                                                        <div class="controls">
                                                                            <select name="id_pais_nacionalidad" id="id_pais_nacionalidad" required class="form-control  text-uppercase">
                                                                                <?php foreach ($paises as $key => $value) : ?>
                                                                                    <option value="<?= $value['id_pais'] ?>"><?= $value['nombre_pais'] ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                            <div class="help-block"></div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <!--/input estado civil-->
                                                                <div class="col-lg-3 col-xl-3 col-md-12 ">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Estado Civil<span class="text-danger"> *</span></label>
                                                                        <div class="controls">
                                                                            <select name="estado_civil" id="estado_civil" required class="form-control  text-uppercase">
                                                                                <option value="" <?php if (!empty($datos_persona[0]['estado_civil'])) echo ($datos_persona[0]['estado_civil'] == '' ? 'selected="selected"' : ''); ?>>
                                                                                    SELECCIONE </option>
                                                                                <option value="SOLTERO" <?php if (!empty($datos_persona[0]['estado_civil'])) echo ($datos_persona[0]['estado_civil'] == 'SOLTERO' ? 'selected="selected"' : ''); ?>>
                                                                                    SOLTERO (A)</option>
                                                                                <option value="CASADO" <?php if (!empty($datos_persona[0]['estado_civil'])) echo ($datos_persona[0]['estado_civil'] == 'CASADO' ? 'selected="selected"' : ''); ?>>
                                                                                    CASADO (A)</option>
                                                                                <option value="DIVORCIADO" <?php if (!empty($datos_persona[0]['estado_civil'])) echo ($datos_persona[0]['estado_civil'] == 'DIVORCIADO' ? 'selected="selected"' : ''); ?>>
                                                                                    DIVORCIADO (A)</option>
                                                                                <option value="VIUDO" <?php if (!empty($datos_persona[0]['estado_civil'])) echo ($datos_persona[0]['estado_civil'] == 'VIUDO' ? 'selected="selected"' : ''); ?>>
                                                                                    VIUDO (A)</option>
                                                                                <option value="CONVIVIENTE" <?php if (!empty($datos_persona[0]['estado_civil'])) echo ($datos_persona[0]['estado_civil'] == 'CONVIVIENTE' ? 'selected="selected"' : ''); ?>>
                                                                                    CONVIVIENTE</option>

                                                                            </select>
                                                                            <div class="help-block"></div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <!--/input ocupacion actual-->
                                                                <div class="col-lg-6 col-xl-6 col-md-12 ">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Ocupación actual<span class="text-danger"> *</span></label>
                                                                        <div class="controls">
                                                                            <div class="controls">
                                                                                <input type="text" name="oficio_trabajo" id="oficio_trabajo" class="form-control  texto-varios-espacios-inputmask text-uppercase" maxlength="50" required value="<?php if (!empty($datos_persona[0]['oficio_trabajo'])) echo $datos_persona[0]['oficio_trabajo']; ?>" style="height: 34px;">
                                                                            </div>


                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!--/row-->

                                                            <div class="row p-t-0">
                                                                <!--/input celular-->
                                                                <div class="col-lg-3 col-xl-3 col-md-6  ">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Celular<span class="text-danger"> *</span></label>
                                                                        <div class="controls">
                                                                            <input type="text" name="celular" id="celular" class="form-control  telefono-celular-inputmask text-uppercase" maxlength="8" minlength="8" required data-validation-maxlength-message="Demasiado largo: Máximo de '8' caracteres" data-validation-minlength-message="Demasiado corto: Minimo de '8' digitos" autocomplete="off" value="<?php if (!empty($datos_persona[0]['celular'])) echo $datos_persona[0]['celular']; ?>" style="height: 34px;">
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                                <!--/input telefono-->
                                                                <div class=" col-lg-3 col-xl-3 col-md-6">
                                                                    <div class="form-group ">
                                                                        <label class="control-label">Teléfono (Opcional)</label>
                                                                        <div class="controls">
                                                                            <input type="text" name="telefono" id="telefono" class="form-control  telefono-inputmask text-uppercase" maxlength="50" data-validation-maxlength-message="Demasiado largo: Máximo de '10' caracteres" autocomplete="off" value="<?php if (!empty($datos_persona[0]['telefono'])) echo $datos_persona[0]['telefono']; ?>" style="height: 34px;">
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <!--/input correo electronico-->
                                                                <div class="col-lg-6 col-xl-6 col-md-12">
                                                                    <div class="form-group ">
                                                                        <label class="control-label">Correo Electronico<span class="text-danger"> *</span></label>
                                                                        <div class="controls">
                                                                            <input type="text" name="email" id="email" class="form-control  email-inputmask " maxlength="50" required autocomplete="off" value="<?php if (!empty($datos_persona[0]['email'])) echo $datos_persona[0]['email']; ?>" style="height: 34px;">
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>



                                                            <hr>
                                                            <h3 class="box-title m-t-10">FORMACIÓN ACAD&Eacute;MICA</h3>
                                                            <div id="responsivo_movil">
                                                                <div class="view_all_dt row">
                                                                    <div class="col-lg-6 col-xl-6 col-md-12" style="display: block;margin: auto;">
                                                                        <div class="view_img_left">
                                                                            <div class="view__img">
                                                                                <img src="<?= base_url('assets/img/add_img.jpg') ?>" alt="" id="mostrar_img_respaldo_diploma_academico" name="mostrar_img_respaldo_diploma_academico" onclick="document.getElementById('img_diploma_academico').click()" style="cursor: pointer; width:100%;height:450px;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-xl-6 col-md-12" style="display: block;margin: auto;">
                                                                        <div class="view_img_right">

                                                                            <label class="control-label">Respaldo de Diploma Academico <span class="text-danger"> *</span></label>
                                                                            <p>
                                                                                Toma una Fotograf&iacute;a o carga una imagen de tu Diploma Acad&eacute;mico.
                                                                            </p>

                                                                            <div class="form-group">
                                                                                <button type="button" class="btn btn-block" onclick="document.getElementById('img_diploma_academico').click()" style="height: 34px;"><i class="fa fa-upload"> </i> Cargar Diploma Acad&eacute;mico</button>

                                                                                <div class="controls custom-file" id="diploma_academico" style="display: none;">
                                                                                    <input type="file" class="custom-file-input" id="img_diploma_academico" name="img_diploma_academico" required>
                                                                                    <label id="label_name_img_diploma_academico" class="custom-file-label form-control" for="img_diploma_academico"></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- fin seccion modo responsivo -->

                                                            <h3 class="box-title m-t-40">DATOS DEL DEP&Oacute;SITO BANCARIO</h3>
                                                            <hr>

                                                            <!-- seccion modo responsivo -->
                                                            <h4 class="card-title">Registre su Dep&oacute;sito de Matr&iacute;cula Bs. <?= $publicacion_detalle['monto_matricula'] ?><span class="text-danger"> *</span></h4>
                                                            <!-- <h6 class="card-subtitle">Use Bootstrap's predefined grid classes for horizontal form
                                                    </h6> -->

                                                            <!--/ BLOQUE DEPOSITO DE MATRICULA  -->
                                                            <div id="responsivo_movil">
                                                                <div class="view_all_dt row">
                                                                    <!--/ sector imagen deposito matricula  -->
                                                                    <div class="col-lg-6 col-xl-6 col-md-12" style="display: block;margin: auto;">
                                                                        <div class="view_img_left">
                                                                            <div class="view__img">
                                                                                <img src="<?= base_url('assets/img/add_img.jpg') ?>" alt="" id="mostrar_img_dep_matricula" name="mostrar_img_dep_matricula" onclick="document.getElementById('img_dep_matricula').click()" style="cursor: pointer; width:100%;">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--/ sector input + input file de deposito matricula  -->
                                                                    <div class="col-lg-6 col-xl-6 col-md-12">
                                                                        <div class="view_img_right">
                                                                            <!-- <label class="control-label">Respaldo de Dep&oacute;sito de Matr&iacute;cula Bs. 200 <span class="text-danger"> *</span></label> -->
                                                                            <p>
                                                                                Toma una Fotograf&iacute;a o carga una imagen de tu Dep&oacute;sito de matr&iacute;cula.</p>
                                                                            <div class="form-group">
                                                                                <button type="button" class="btn btn-block" onclick="document.getElementById('img_dep_matricula').click()" style="height: 34px;"><i class="fa fa-upload"> </i> Cargar Dep&oacute;sito de matr&iacute;cula</button>
                                                                                <div class="controls custom-file" id="dep_matricula" style="display: none;">
                                                                                    <input type="file" class="custom-file-input" id="img_dep_matricula" name="img_dep_matricula" required>
                                                                                    <label id="label_img_name_dep_matricula" class="custom-file-label form-control" for="img_dep_matricula"></label>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-xl-12 col-md-12 ">
                                                                                <div class="form-group m-t-20">
                                                                                    <label class="control-label">Numero de Dep&oacute;sito <span class="text-danger"> *</span></label>
                                                                                    <div class="controls">
                                                                                        <div class="controls">
                                                                                            <input type="text" name="numero_deposito_matricula" id="numero_deposito_matricula" class="form-control  numeros-inputmask text-uppercase" maxlength="50" required autocomplete="off" value="<?php if (!empty($datos_persona_preinscrito[0]['nro_deposito_matricula'])) echo $datos_persona_preinscrito[0]['nro_deposito_matricula']; ?>" style="height: 34px;">
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-xl-12 col-md-12">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Fecha de Dep&oacute;sito<span class="text-danger"> *</span></label>
                                                                                    <div class="controls">
                                                                                        <div class="controls">
                                                                                            <input type="date" name="fecha_deposito_matricula" id="fecha_deposito_matricula" class="form-control  text-uppercase" maxlength="50" required value="<?php if (!empty($datos_persona_preinscrito[0]['fecha_deposito_matricula'])) echo $datos_persona_preinscrito[0]['fecha_deposito_matricula']; ?>" style="height: 34px;">
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--/ BLOQUE DEPOSITO CUOTA INICIAL  -->
                                                            <div id="responsivo_movil">
                                                                <h4 class="card-title">Registre su Dep&oacute;sito por Colegiatura (1ra Cuota)<span class="text-danger"> *</span></h4>
                                                                <!-- <h6 class="card-subtitle">Use Bootstrap's predefined grid classes for horizontal form </h6> -->
                                                                <div class="view_all_dt row m-t-20">

                                                                    <!--/ sector input + input file de deposito cuota inicial  -->
                                                                    <div class="col-lg-6 col-xl-6 col-md-12">

                                                                        <div class="view_img_right">
                                                                            <!-- <label class="control-label">Respaldo de la primera cuota <span class="text-danger"> *</span></label> -->

                                                                            <p>
                                                                                Toma una Fotograf&iacute;a o carga una imagen de tu Dep&oacute;sito por colegiatura.
                                                                                .</p>



                                                                            <div class="form-group">
                                                                                <button type="button" class="btn btn-block" onclick="document.getElementById('img_dep_cuota_ini').click()" style="height: 34px;"><i class="fa fa-upload"> </i> Cargar Dep&oacute;sito por colegiatura</button>

                                                                                <div class="controls custom-file" id="dep_cuota_inicial" style="display: none;">
                                                                                    <input type="file" class="custom-file-input" id="img_dep_cuota_ini" name="img_dep_cuota_ini">
                                                                                    <label id="label_name_dep_cuota_ini" class="custom-file-label form-control" for="img_dep_cuota_ini"></label>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-xl-12 col-md-12">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Numero de Dep&oacute;sito <span class="text-danger"> *</span></label>
                                                                                    <div class="controls">
                                                                                        <div class="controls">
                                                                                            <input type="text" name="numero_deposito_cuota_inicial" id="numero_deposito_cuota_inicial" class="form-control  numeros-inputmask text-uppercase" maxlength="50" value="<?php if (!empty($datos_persona_preinscrito[0]['nro_deposito_cuota_ini'])) echo $datos_persona_preinscrito[0]['nro_deposito_cuota_ini']; ?>" style="height: 34px;">
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-xl-12 col-md-12">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Fecha de Dep&oacute;sito <span class="text-danger"> *</span></label>
                                                                                    <div class="controls">
                                                                                        <div class="controls">
                                                                                            <input type="date" name="fecha_deposito_inicial" id="fecha_deposito_inicial" class="form-control  text-uppercase" value="<?php if (!empty($datos_persona_preinscrito[0]['fecha_deposito_cuota_ini'])) echo $datos_persona_preinscrito[0]['fecha_deposito_cuota_ini']; ?>" style="height: 34px;">
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--/ sector imagen deposito cuota inicial  -->
                                                                    <div class="col-lg-6 col-xl-6 col-md-12" style="display: block;margin: auto;">
                                                                        <div class="view_img_left">
                                                                            <div class="view__img">

                                                                                <img src="<?= base_url('assets/img/add_img.jpg') ?>" alt="" id="mostrar_img_dep_cuota_ini" name="mostrar_img_dep_cuota_ini" onclick="document.getElementById('img_dep_cuota_ini').click()" style="cursor: pointer; width:100%;">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/row-->
                                                            </div>

                                                            <!-- fin seccion modo responsivo -->

                                                            <div class="form-actions m-t-40 row">
                                                                <div class="col-md-6">
                                                                    <a href="<?php base_url() ?>" class="btn btn-rounded btn-block btn-outline-warning" id="cancelar_inscripcion_online">CANCELAR </a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <button type="submit" id="enviar_inscripcion" class="btn btn-rounded btn-block" style="height: 34px;"> <i class="fa fa-check-circle"></i> ENVIAR DATOS PARA LA INSCRIPCIÓN</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
<script src="<?= base_url('theme/javascript/viewer.min.js') ?>"></script>
<script>
    $(document).ready(function() {
        $('form').on('submit', function(e) {
            e.preventDefault();
            alert();
        });
    });
    // window.addEventListener('DOMContentLoaded', function() {
    //     var galley = document.getElementById('galley');
    //     var viewer = new Viewer(galley, {
    //         url: 'data-original',
    //         toolbar: {
    //             oneToOne: true,
    //             prev: function() {
    //                 viewer.prev(true);
    //             },
    //             play: true,
    //             next: function() {
    //                 viewer.next(true);
    //             },
    //             download: function() {
    //                 const a = document.createElement('a');
    //                 a.href = viewer.image.src;
    //                 a.download = viewer.image.alt;
    //                 document.body.appendChild(a);
    //                 a.click();
    //                 document.body.removeChild(a);
    //             },
    //         },
    //     });
    // });
    window.addEventListener('DOMContentLoaded', function() {
        var galley = document.getElementById('galley');
        var viewer = new Viewer(galley, {
            url: 'data-original',
            title: function(image) {
                return image.alt + ' (' + (this.index + 1) + '/' + this.length + ')';
            },
            zIndex: 9999999
        });
    });
</script>