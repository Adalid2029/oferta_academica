<div class="boxed">
    <div class="content">
        <div class="page-title parallax parallax4" style="background-position: 50% 59px;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h2 class="title">INSCRIPCIÓN</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="<?= base_url() ?>">POSGRADO</a></li>
                                <li><?= $publicacion_detalle['nombre_programa'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="main-content blog-posts blog-grid have-sidebar">
            <div class="container">
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
                        </div>
                        <div class="col-lg-8 col-xlg-9 col-md-7 ">
                            <div class="card ">
                                <div class="tab-pane active " id="formulario_preinscripcion" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body" oncopy="return false" onpaste="return false">
                                            <form method="post" id="form-verificar-carnet">
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
                                                                            <input type="hidden" name="id_publicacion" value="<?= $publicacion_detalle['id_publicacion'] ?>">
                                                                            <input type="text" name="ci" class="form-control ci-inputmask" autocomplete="off" value="9874181" style="height: 34px;">
                                                                        </div>
                                                                        <div class="col-lg-6 col-xl-6 col-md-12">
                                                                            <button type="submit" id="verificar_carnet" class="btn" style="height: 34px;"><i class="fa fa-pencil"></i> Inscribirme</button>
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
            </div>
        </section>
    </div>
</div>