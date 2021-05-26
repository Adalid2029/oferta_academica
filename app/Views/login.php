<!-- <?php // defined('BASEPATH') OR exit('No direct script access allowed'); ?> -->
<?php if (!isset($pie)) $pie = ''; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Posgrado CEFORPI UPEA</title>
    <meta name="title" content="Sistema PSG v2.0" />
    <meta name="description" content="Centro de Estudios y Formación de Posgrado e Investigación de la Universidad Pública de El Alto" />
    <meta name="keywords" content="POSGRADO,CEFORPI,UPEA" />
    <meta name="author" content="Team PSG" />
    <meta name="application-name" content="Sistema PSG" />
    <meta name="robots" content="index, follow">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="<?php echo base_url('theme_admin/assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('theme_admin/assets/plugins/toast-master/css/jquery.toast.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('theme_admin/assets/plugins/sweetalert/sweetalert.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('theme_admin/main/css/style.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('theme_admin/main/css/colors/posgrado.css'); ?>" id="themeposgrado" rel="stylesheet"/>
    <link href="<?php echo base_url('theme_admin/assets/css/posgrado.css'); ?>" rel="stylesheet"/>
    <?php // echo (is_file(FCPATH . 'theme_admin/assets/css/' . $this->router->class . '/' . $this->router->method . '.css')) ? css_tag($this->router->class . '/' . $this->router->method) : ''; ?>
    <link type="image/ico" href="<?php echo base_url("theme_admin/assets/images/favicon.ico"); ?>" rel="shortcut icon"/>
    <link type="image/png" href="<?php echo base_url("theme_admin/assets/images/favicon.png"); ?>" rel="icon"/>
    <link type="image/png" href="<?php echo base_url("theme_admin/assets/images/favicon.png"); ?>" rel="apple-touch-icon"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<section id="wrapper">
    <div class="login-register">
        <div class="login-box card">
            <div class="card-body">
                <form class="floating-labels m-t-20" id="loginform" action="<?php echo base_url('theme_admin/autentificar'); ?>" method="post">
                    <a href="<?php echo base_url('theme_admin/login'); ?>" class="text-center db"><img class="img-responsive" alt="POSGRADO UPEA" src="<?php echo base_url('theme_admin/assets/images/logotipo.png'); ?>"/></a>
                    <hr/>
                    <h3 class="box-title m-b-40">Ingreso al Sistema PSG v2.0</h3>
                    <div class="form-group m-b-30">
                        <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" required>
                        <span class="bar"></span>
                        <label for="nombre_usuario">Nombre de Usuario :</label>
                    </div>
                    <div class="form-group m-b-30">
                        <input type="password" class="form-control" id="clave_usuario" name="clave_usuario" required>
                        <span class="bar"></span>
                        <label for="clave_usuario">Contrase&ntilde;a :</label>
                    </div>
                    <div class="form-group text-center m-t-10">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Ingresar</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-12">
                            <a href="javascript:void(0)" id="to-recover" class="btn btn-link text-dark"><i class="fa fa-lock m-r-5"></i> ¿Ha olvidado su contraseña?</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <div>Si tiene problemas para ingresar al sistema, <a href="javascript:void(0)" class="text-info m-l-5"><b>comun&iacute;quese con el Administrador del Sistema.</b></a></div>
                        </div>
                    </div>
                </form>
                <form class="floating-labels m-t-20" id="recoverform" action="<?php echo base_url('theme_admin/reestablecer'); ?>" method="post">
                    <a href="<?php echo base_url('theme_admin/login'); ?>" class="text-center db"><img class="img-responsive" alt="POSGRADO UPEA" src="<?php echo base_url('theme_admin/assets/images/logotipo.png'); ?>"/></a>
                    <hr/>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Restablecer contrase&ntilde;a</h3>
                            <p class="text-muted">Escriba su direcci&oacute;n de correo para enviarle instrucciones de c&oacute;mo restablecer su contraseña.</p>
                        </div>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="correo_electronico" name="correo_electronico" required>
                        <span class="bar"></span>
                        <label for="correo_electronico">Direcci&oacute;n de correo electr&oacute;nico :</label>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Enviar</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-12">
                            <a href="<?php echo base_url('theme_admin/login'); ?>" id="to-recover" class="btn btn-link text-dark"><i class="fa fa-lock m-r-5"></i> ¿Ha olvidado su contraseña?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url('theme_admin/assets/plugins/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('theme_admin/assets/plugins/bootstrap/js/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('theme_admin/assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('theme_admin/main/js/jquery.slimscroll.js'); ?>"></script>
<script src="<?php echo base_url('theme_admin/main/js/waves.js'); ?>"></script>
<script src="<?php echo base_url('theme_admin/main/js/sidebarmenu.js'); ?>"></script>
<script src="<?php echo base_url('theme_admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js'); ?>"></script>
<script src="<?php echo base_url('theme_admin/assets/plugins/sparkline/jquery.sparkline.min.js'); ?>"></script>
<script src="<?php echo base_url('theme_admin/main/js/custom.min.js'); ?>"></script>
<script src="<?php echo base_url('theme_admin/assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('theme_admin/assets/plugins/sweetalert/sweetalert.min.js'); ?>"></script>
<script src="<?php echo base_url('theme_admin/assets/plugins/toast-master/js/jquery.toast.js'); ?>"></script>
<script src="<?php echo base_url('theme_admin/assets/js/posgrado.js'); ?>"></script>
<?php // echo (is_file(FCPATH . 'thme_admin/assets/js/' . $this->router->class . '/' . $this->router->method . '.js')) ? script_tag($this->router->class . '/' . $this->router->method) : ''; ?>
<?php echo $pie; ?>
</body>
</html>