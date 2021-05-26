<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php if (!isset($total_posgraduantes)) $total_posgraduantes = 0; ?>
<?php if (!isset($total_docentes)) $total_docentes = 0; ?>
<?php if (!isset($total_coordinadores)) $total_coordinadores = 0; ?>
<?php if (!isset($total_personal)) $total_personal = 0; ?>
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h3 class="text-themecolor">Seguridad del Sistema</h3>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h2><?php echo $total_posgraduantes; ?> <i class="ti-user font-14 text-info"></i></h2>
                            <h6>Posgraduantes</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h2><?php echo $total_docentes; ?> <i class="ti-user font-14 text-info"></i></h2>
                            <h6>Docentes</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h2><?php echo $total_coordinadores; ?> <i class="ti-user font-14 text-success"></i></h2>
                            <h6>Coordinadores</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h2><?php echo $total_personal; ?> <i class="ti-user font-14 text-success"></i></h2>
                            <h6>Administrativos</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>