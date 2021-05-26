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
        <label class="col-form-label col-lg-3 col-sm-12 text-right"> Nombre Programa *</label>
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="input-group">
                <input type="text" class="form-control" name="nombre_programa" placeholder="" id="nombre_programa" />
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


    <div class="form-group row fv-plugins-icon-container">
        <label class="col-form-label text-right col-lg-3 col-sm-12">Gestion *</label>
        <div class="col-lg-8 col-md-12 col-sm-12">
            <select class="form-control" name="id_gestion" id="kt_select2" style="width: 100%">
                <option value="">Seleccione un Rol</option>

            </select>
            <span class="form-text text-danger rol_id-error limpiar"></span>
        </div>
    </div>
</form>

<script type="text/javascript">
    $('#kt_select2').select2({
        placeholder: "Seleccione Una Opcion",
    });
</script>