
<div class="container-fluid">
<div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Formulario de inscripci&oacute;n</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <h3 class="card-title">Datos personales</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nombre(s)</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="Ingrese su(s) nombre(s)">
                                                    <!-- <small class="form-control-feedback"> This is inline help </small>  -->
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Apellidos</label>
                                                    <input type="text" id="lastName" class="form-control" placeholder="Ingrese sus apellidos">
                                                    <!-- <small class="form-control-feedback"> This field has error. </small>  -->
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>

                                                ..
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Carnet de identidad</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="Ingrese solo número">
                                                   
                                                    <!-- <small class="form-control-feedback"> Select your gender </small>  -->
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="control-label">Expedido en</label>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="Category 1">CHUQUISACA</option>
                                                        <option value="Category 2">LA PAZ </option>
                                                        <option value="Category 1">COCHABAMBA </option>
                                                        <option value="Category 1">ORURO    </option>
                                                        <option value="Category 1">POTOSI</option>
                                                        <option value="Category 1">TARIJA</option>
                                                        <option value="Category 1">SANTA CRUZ</option>
                                                        <option value="Category 1">BENI</option>
                                                        <option value="Category 1">PANDO</option>
                                                       

                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">G&eacute;nero</label>
                                                    <select class="form-control custom-select">
                                                        <option value="">Femenino</option>
                                                        <option value="">Masculino</option>
                                                    </select>
                                                    <!-- <small class="form-control-feedback"> Select your gender </small>  -->
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Fecha de nacimiento</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/aaaa">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                       
                                        <!--/row-->
                                        <h3 class="box-title m-t-40">Dirección</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Dirección donde vive</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Ciudad</label>
                                                    <select class="form-control custom-select">
                                                        <option>--Seleccione su ciudad--</option>
                                                        <option>        </option>
                                                        <option>Sri Lanka</option>
                                                        <option>USA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Número de celular</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">File Upload2</h4>
                                                    <label for="input-file-now-custom-1">You can add a default value</label>
                                                    <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?= base_url('theme_admin/assets/plugins/dropify/src/images/test-image-1.jpg')?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>               
                                    </div>
                                    <div class="form-actions" style=' display: flex; justify-content: right'>
                                        <button  class="btn btn-primary"> <i class="fa fa-check"></i> <a href="<?= route_to('registro')  ?>" style='color:#fff'>Enviar</a></button>
                                        <button type="button btn-danger" class="btn btn-danger"><a href="<?= route_to('inicio')  ?>" style='color:#fff'>Cancelar</a></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
       <!-- ============================================================== -->
    <script src="<?= base_url('theme_admin/assets/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('theme_admin/assets/plugins/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('theme_admin/assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url('theme_admin/horizontal/js/jquery.slimscroll.js')?>"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('theme_admin/horizontal/js/waves.js')?>"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('theme_admin/horizontal/js/sidebarmenu.js')?>"></script>
    <!--stickey kit -->
    <script src="<?= base_url('theme_admin/assets/plugins/-kit-master/dist/sticky-kit.min.js')?>"></script>
    <script src="<?= base_url('theme_admin/assets/plugins/sparkline/jquery.sparkline.min.js')?>"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('theme_admin/horizontal/js/custom.min.js')?>"></script>
    <!-- ============================================================== -->
    <!-- Plugins for this page -->
    <!-- ============================================================== -->
    <!-- jQuery file upload -->
    <script src="<?= base_url('theme_admin/assets/plugins/dropify/dist/js/dropify.min.js')?>"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();   
            }
        })
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?= base_url('theme_admin/assets/plugins/styleswitcher/jQuery.style.switcher.js') ?>"></script>