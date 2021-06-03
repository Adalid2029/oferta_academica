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

                    <h6 class="card-subtitle">Add<code>.table-bordered</code>for borders on all sides of the table and cells.</h6>



                    <button data-toggle="modal" data-target="#responsive-modal">aea</button>

                    <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">Modal Content is Responsive</h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">Recipient:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>


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
                                <tr>
                                    <td>EDUCACIÓN SUPERIOR</td>
                                    <td>XVI</td>
                                    <td>VIRTUAL</td>
                                    <td>DIPLOMADO</td>
                                    <td>2021</td>
                                    <td>CENTRAL - EL ALTO</td>

                                    <td>
                                        <div class="progress progress-xs margin-vertical-10 ">
                                            <div class="progress-bar bg-danger" style="width: 35%; height:6px;"></div>
                                        </div>
                                    </td>
                                    <td>May 15, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                        <a href="<?= route_to('programas.detalle') ?>" data-toggle="tooltip" data-original-title="Ver programa"> <i class="fa fa-eye text-eye"></i> </a>

                                        <a href=" <?= route_to('inscritos.index') ?>  " data-toggle="tooltip" data-original-title="Ver preinscritos"> <i class="fa fa-user text-user"></i> </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Dream successful plan</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <td>
                                        <div class="progress progress-xs margin-vertical-10 ">
                                            <div class="progress-bar bg-warning" style="width: 50%; height:6px;"></div>
                                        </div>
                                    </td>
                                    <td>July 1, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Office automatization</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <td>
                                        <div class="progress progress-xs margin-vertical-10 ">
                                            <div class="progress-bar bg-success" style="width: 100%; height:6px;"></div>
                                        </div>
                                    </td>

                                    <td>Apr 12, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>The sun climbing plan</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <td>

                                        <div class="progress progress-xs margin-vertical-10 ">
                                            <div class="progress-bar bg-primary" style="width: 70%; height:6px;"></div>
                                        </div>
                                    </td>
                                    <td>Aug 9, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Open strategy</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <td>

                                        <div class="progress progress-xs margin-vertical-10 ">
                                            <div class="progress-bar bg-info" style="width: 85%; height:6px;"></div>
                                        </div>
                                    </td>
                                    <td>Apr 2, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <td>
                                        <div class="progress progress-xs margin-vertical-10 ">
                                            <div class="progress-bar bg-inverse" style="width: 50%; height:6px;"></div>
                                        </div>
                                    </td>
                                    <td>July 11, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>