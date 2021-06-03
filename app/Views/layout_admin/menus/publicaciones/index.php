<h1>Estas en VISTA oferta académica</h1>
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">programas</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">pages</li>
            <li class="breadcrumb-item active">Table basic</li>
        </ol>
    </div>
    <div>
        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Listado de programas</h4>




                    <button id="btnNuevoPublicacion" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#modalPublicacionIndexs">Nueva publicaci&oacute;n</button>



                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NOMBRE PROGRAMA</th>
                                    <th>VERSIÓN</th>
                                    <th>MODALIDAD</th>
                                    <th>GRADO</th>
                                    <th>GESTION</th>
                                    <th>SEDE</th>
                                    <th>ESTADO</th>
                                    <th>FINALIZACION</th>


                                    <th class="text-nowrap">OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($programas as $key => $value) : ?>
                                    <tr>
                                        <td><?= $value['nombre_programa'] ?></td>
                                        <td><?= $value['numero_version'] ?></td>
                                        <td><?= $value['modalidad'] ?></td>
                                        <td><?= $value['grado_academico'] ?></td>
                                        <td><?= $value['id_gestion'] ?></td>
                                        <td><?= $value['sede'] ?></td>
                                        <td><?= $value['estado_publicacion'] ?></td>
                                        <td><?= $value['fecha_fin_publicacion'] ?></td>
                                        <td class="text-nowrap">
                                            <a href="#" data-toggle="tooltip" data-original-title="Editar" data-id-publicacion="<?= $value['id_publicacion'] ?>"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                            <a href="<?= route_to('programas.detalle') ?>" data-toggle="tooltip" data-original-title="Ver programa"> <i class="fa fa-eye text-eye"></i> </a>

                                            <a href=" <?= route_to('inscritos.index') ?>  " data-toggle="tooltip" data-original-title="Ver preinscritos"> <i class="fa fa-user text-user"></i> </a>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div id="modalPublicacionIndex" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div id="modalPublicacionIndex-dialog" class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div id="modalPublicacionIndex-header" class="modal-header">
                <h4 id="modalPublicacionIndex-title" class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div id="modalPublicacionIndex-body" class="modal-body">
                <!-- PONER CONTENIDO -->



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success waves-effect waves-light m-r-10 guardar">Guardar</button>
            </div>
        </div>
    </div>
</div>