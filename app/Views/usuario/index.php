<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if (!isset($usuario)) $usuario = ''; ?>
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h3 class="text-themecolor">Datos del Usuario</h3>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30"> <img src="<?php echo base_url('assets/images/personas/' . $usuario['imagen_persona']); ?>" class="img-circle" width="150" />
                        <h4 class="card-title m-t-10"><?php echo $usuario['nombre']; ?><br/><?php echo $usuario['paterno'] . ' ' . $usuario['materno']; ?></h4>
                        <h6 class="card-subtitle"><?php echo $usuario['ci'] . ' ' . $usuario['expedido']; ?></h6>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">4</font></a></div>
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">5</font></a></div>
                        </div>
                    </center>
                </div>
                <div>
                    <hr>
                </div>
                <div class="card-body">
                    <small class="text-muted">Correo Electr&oacute;nico : </small>
                    <h6><?php echo $usuario['email']; ?></h6>
                    <small class="text-muted p-t-30 db">Tel&eacute;fono / Celular :</small>
                    <h6><?php echo $usuario['telefono'] . ' ' . $usuario['celular']; ?></h6>
                    <small class="text-muted p-t-30 db">Direcci&oacute;n :</small>
                    <h6><?php echo $usuario['domicilio']; ?></h6>
                    <small class="text-muted p-t-30 db">Redes Sociales</small>
                    <br/>
                    <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                    <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                    <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Datos Personales</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Seguridad</a> </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="profile" role="tabpanel">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Nombre Completo</strong>
                                    <br>
                                    <p class="text-muted"><?php echo $usuario['nombre']; ?><br/><?php echo $usuario['paterno'] . ' ' . $usuario['materno']; ?></p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>C.I.</strong>
                                    <br>
                                    <p class="text-muted"><?php echo $usuario['ci'] . ' ' . $usuario['expedido']; ?></p>
                                </div>
                                <div class="col-md-3 col-xs-6"> <strong>Fecha de Nacimiento</strong>
                                    <br>
                                    <p class="text-muted"><?php echo $usuario['fecha_nacimiento']; ?></p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Tel&eacute;fono / Celular</strong>
                                    <br>
                                    <p class="text-muted"><?php echo $usuario['telefono'] . ' ' . $usuario['celular']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="settings" role="tabpanel">
                        <div class="card-body">
                            <h4 class="font-medium m-t-30">Cambio de Contrase&ntilde;a</h4>
                            <hr>
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <label class="col-md-12">Contrase&ntilde;a anterior</label>
                                    <div class="col-md-12">
                                        <input type="password" value="" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Contrase&ntilde;a nueva</label>
                                    <div class="col-md-12">
                                        <input type="password" value="" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Repetir Contrase&ntilde;a nueva</label>
                                    <div class="col-md-12">
                                        <input type="password" value="" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="button" class="btn btn-success">Cambiar</button>
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