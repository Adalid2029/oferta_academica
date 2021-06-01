<div class="row page-titles mb-2">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Inscripci&oacute;n Programa</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Inicio</a></li>
            <li class="breadcrumb-item">Inscripci&oacute;n</li>
            <li class="breadcrumb-item active"> <?= strtoupper($publicacion_detalle['nombre_programa']) ?></li>
        </ol>
    </div>

</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="efecto_sticky">
                <div class="card">
                    <a href="<?= route_to('inscripcion.formulario/1') ?>" style="cursor:pointer" target="_blank">
                        <img class="card-img-top img-responsive" src="<?= base_url($publicacion_multimedia['url']) ?>" alt="Card image cap">
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
        <div class="col-lg-8 col-xlg-9 col-md-7 ">
            <div class="card ">
                <div class="tab-pane active " id="formulario_preinscripcion" role="tabpanel">
                    <div class="card card-outline-info">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">FORMULARIO DE INSCRIPCIÓN</h4>
                        </div>
                        <div class="card-body" oncopy="return false" onpaste="return false">
                            <form method="post">
                                <h3 class="card-title text-center">ESCRIBE TU NÚMERO DE CARNET</h3>
                                <hr>
                                <div class="d-flex justify-content-center">
                                    <div class="row p-t-0 d-flex justify-content-center">
                                        <div class="col-lg-12 col-xl-12 col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Carnet de Identidad<span class="text-danger"> *</span></label>
                                                <div class="controls">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-xl-6 col-md-12">
                                                            <input type="text" name="ci" class="form-control form-control-sm ci-inputmask text-uppercase" maxlength="15" minlength="5" required data-validation-required-message="Este campo es requerido" data-validation-maxlength-message="Demasiado largo: Máximo de '15' caracteres" data-validation-minlength-message="Demasiado corto: Minimo de '5' caracteres" autocomplete="off">
                                                        </div>
                                                        <div class="col-lg-6 col-xl-6 col-md-12">
                                                            <button type="submit" id="verificar_carnet" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Inscribirme</button>
                                                        </div>
                                                    </div>
                                                </div>
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
    </div>
</div>