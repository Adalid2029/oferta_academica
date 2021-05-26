<form class="form" id="formCrearUsuario" method="post">
    <div class="form-body">
        <h3 class="card-title">Datos del programa</h3>
        <hr>
        <div class="row p-t-20">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Nombre Programa</label>
                    <input type="text" id="nombre_programa" class="form-control" name="nombre_programa"
                        placeholder="Ingrese solamente el nombre del programa">
                    <!-- <small class="form-control-feedback"> Ingrese solamente el nombre del programa</small> -->
                </div>
            </div>
            <!--/span-->

            <!--/span-->
        </div>
        <!--/row-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Modalidad</label>
                    <select class="form-control custom-select" name="modalidad">
                        <option value="">--Seleccione una modalidad--</option>
                        <option value="VIRTUAL">VIRTUAL</option>
                        <option value="SEMIPRESENCIAL">SEMIPRESENCIAL</option>
                        <option value="PRESENCIAL">PRESENCIAL</option>
                        <option value="ESCOLARIZADO">ESCOLARIZADO</option>
                        <option value="NO ESCOLARIZADO">NO ESCOLARIZADO</option>
                    </select>
                </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Grado académico</label>
                    <select class="form-control custom-select" name="grado_academico">
                        <option value="">--Seleccione el grado académico--</option>
                        <option value="DIPLOMADO">DIPLOMADO</option>
                        <option value="MAESTRIA">MAESTRIA</option>
                        <option value="ESPECIALIDAD">ESPECIALIDAD</option>
                        <option value="DOSCTORADO">DOSCTORADO</option>
                        <option value="POSTDOCTORADO">POSTDOCTORADO</option>
                    </select>
                </div>
            </div>
            <!--/span-->
        </div>
        <!--/row-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Gestión</label>
                    <select class="form-control custom-select" name="id_gestion" data-placeholder="Choose a Category"
                        tabindex="1">

                        <!-- <label class="col-form-label text-right col-lg-3 col-sm-12">Gestion *</label> -->
                        <!-- <div class="col-lg-8 col-md-12 col-sm-12"> -->
                        <!-- <select class="form-control" name="id_gestion" id="kt_select2" style="width: 100%"> -->
                        <option value="">Seleccione Gestion</option>

                        <?php foreach($lista_gestiones as $gestion):  ?>

                        <option value=" <?= $gestion['id_gestion']  ?> "> <?= $gestion['gestion']  ?> </option>

                        <?php endforeach; ?>

                        <!-- </select> -->
                        <!-- <span class="form-text text-danger rol_id-error limpiar"></span> -->
                        <!-- </div> -->

                    </select>
                </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
                <div class="form-group">
                    <label>SEDE</label>
                    <select class="form-control custom-select" name="sede" id="se">
                        <option>--Seleccione la sede acad&eacute;mica--</option>
                        <option>CENTRAL EL ALTO</option>
                        <option>COCHABAMBA</option>
                        <option>CARANAVI</option>
                        <option>LA PAZ</option>

                    </select>
                </div>
            </div>
            <!--/span-->
        </div>


        <div class="row p-t-20">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Descripci&oacute;n del programa</label>

                    <input type="text" class="form-control" name="contenido_minimo" id="contenido_minimo"
                        placeholder="Ingrese la descripci&oacute;n del programa" />

                    <!-- <textarea name="textarea"   class="form-control" name="contenido_minimo" id="contenido_minimo"  placeholder="Ingrese la descripci&oacute;n del programa"  rows="10" cols="30"></textarea> -->
                </div>
            </div>
            <!--/span-->

            <!--/span-->
        </div>
        <!--/row-->
        <h3 class="box-title m-t-40">Address</h3>
        <hr>
        <div class="row">
            <div class="col-md-12 ">
                <div class="form-group">
                    <label>Street</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
                <div class="form-group">
                    <label>State</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <!--/span-->
        </div>
        <!--/row-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Post Code</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Country</label>
                    <select class="form-control custom-select">
                        <option>--Select your Country--</option>
                        <option>India</option>
                        <option>Sri Lanka</option>
                        <option>USA</option>
                    </select>
                </div>
            </div>
            <!--/span-->
        </div>
    </div>

</form>






<!-- 



<form class="form" id="formCrearUsuario" method="post">
    <div class="form-group">
        <div class="alert alert-light-primary d-none mb-15" role="alert" id="kt_form_msg">
            <div class="alert-icon">
                <i class="la la-warning"></i>
            </div>
            <div class="alert-text font-weight-bold">
                Oh snap! Change a few things up and try submitting again.
            </div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span><i class="ki ki-close "></i></span>
                </button>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12 text-right"> Nombre Programa*</label>
        <div class="col-lg-8 col-md-12 col-sm-12"> 
            <div class="input-group">
                <input type="text" class="form-control" name="nombre_programa_" placeholder="" id="nombre_programa_" />
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="la la-calendar-check-o"></i>
                    </span>
                </div>
            </div>
            <span class="form-text text-danger nombre_programa-error limpiar"></span>
        </div>
    </div>

    <div class="form-group row fv-plugins-icon-container">
        <label class="col-form-label text-right col-lg-3 col-sm-12">Modalidad *</label>
        <div class="col-lg-8 col-md-12 col-sm-12">
            <select class="form-control" name="modalidad" id="kt_select2" style="width: 100%">
                <option value="">Seleccione un Rol</option>
                <option value="virtual">Virtual</option>
                <option value="semiprsencial">Semiprsencial</option>
                <option value="no escolarizado">No escolarizado</option>
            </select>
            <span class="form-text text-danger modalidad-error limpiar"></span>
        </div>
    </div>




    <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12 text-right">Grado Academico *</label>
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="input-group">
                <input type="text" class="form-control" name="grado_academico" placeholder="........" id="grado_academico" />
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="la la-calendar-check-o"></i>
                    </span>
                </div>
            </div>
            <span class="form-text text-danger grado_academico-error limpiar"></span>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12 text-right">Contenido *</label>
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="........"   />
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="la la-calendar-check-o"></i>
                    </span>
                </div>
            </div>
            <span class="form-text text-danger grado_academico-error limpiar"></span>
        </div>
    </div>


    <div class="form-group row fv-plugins-icon-container">
        <label class="col-form-label text-right col-lg-3 col-sm-12">Gestion *</label>
        <div class="col-lg-8 col-md-12 col-sm-12">
            <select class="form-control" name="id_gestion_" id="kt_select2" style="width: 100%">
                <option value="">Seleccione Gestion</option>
                
                


               
            </select>
            <span class="form-text text-danger rol_id-error limpiar"></span>
        </div>
    </div>
</form> -->

<script type="text/javascript">
$('#kt_select2').select2({
    placeholder: "Seleccione Gestion",
});
</script>