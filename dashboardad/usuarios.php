<?php require_once "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->
<div class="container">
    <h1 align="center">ADMINISTRADOR</h1>
    <br>


    <?php require_once "vistas/parte_superior.php" ?>

    <div class="container">
        <h3 align="center">ALTA DE RTE</h3>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                    <form id="formUsuario" enctype="multipart/form-data" class="needs-validation" novalidate>

                        <div class="form-group">
                            <label for="cct" class="col-form-label">Clave de Centro de Trabajo:</label>
                            <select class="form-control js-example-basic-single" id="id_cct" name="id_cct">
                                <option value="">Seleccionar...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="escuela" class="col-form-label">Nombre(s):</label>
                            <input type="text" id="escuela" class="form-control" id="nombre" name="nombre" />
                        </div>
                        <div class="form-group">
                            <label for="escuela" class="col-form-label">Primer Apellido:</label>
                            <input type="text" id="escuela" class="form-control" id="primer_apellido" name="primer_apellido" />
                        </div>
                        <div class="form-group">
                            <label for="escuela" class="col-form-label">Segundo Apellido:</label>
                            <input type="text" id="escuela" class="form-control" id="segundo_apellido" name="segundo_apellido" />
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="col-form-label">Telefono Director a 10 digitos:</label>
                            <input type="text" id="telefono" class="form-control" name="telefono" />
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Correo Electrónico:</label>
                            <input type="email" id="email" class="form-control" name="email" require />
                        </div>
                        <div class="form-group">
                            <label for="fh_nacimiento" class="col-form-label">Antigüedad en la Comisión:</label>
                            <input type="date" class="form-control" id="antiguedad_comision" name="antiguedad_comision">
                        </div>
                        <div class="form-group">
                            <label for="zona" class="col-form-label">Horas Comisionadas:</label>
                            <input type="number" class="form-control" min="0" value="0" id="horas_comision" name="horas_comision" />
                        </div>
                        <div class="form-group">
                            <label for="perfil" class="col-form-label">Perfil Profesional:</label>
                            <input type="text" class="form-control" id="perfil" name="perfil">
                        </div>
                </div>
            </div>
            <button type="submit" id="btnGuardar" class="btn btn-success">Guardar</button>
            </form>
            <div>
            </div>
            <br>
        </div>
    </div>
    <!-- Modal HTML -->
    <div id="modalSuccess" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <div class="icon-box">
                        <i class="fas fa-check"></i>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <h4>Genial!</h4>
                    <p>¡Se guardo Exitosamente!.</p>
                    <button class="btn btn-success" id="btnModalOtro"><span>Capturar Otro</span> <i class="fad fa-users"></i></button>
                    <button class="btn btn-return" id="btnRegresar"><span>Regresar</span> <i class="fad fa-arrow-alt-left"></i></button>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div align="right" class="col-lg-12">
            <button a id="btnbuscar" type="submit" class="btn btn-success">Buscar</button>
        </div>
    </div>
</div>
</form>
<br>

<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive mb-5">
                <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th>Escuela</th>
                            <th>Ciclo</th>
                            <th>Turno</th>
                            <th>Funcion</th>
                            <th>Deporte</th>
                            <th>Rama</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="DataResult">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!--Modal para Informes-->



<?php require_once "vistas/parte_inferior.php" ?>
<script>
    function getComboDatos() {
        $.ajax({
            url: baseUrl + "rtes.php",
            type: "GET",
            datatype: "json",
            success: function(data) {
                var datos = JSON.parse(data);
                $.each(datos.escuelas, function(key, escuela) {
                    $("#id_cct").append('<option value=' + escuela.id + '>' + escuela.cct + " - " + escuela.nombre + '</option>');
                });

            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Hubo un error al obtener los datos!'
                });
            }
        });
    }

    function validar() {
        var hasError = true
        $('#formUsuario input, #formUsuario select').each(function() {
            var input = $(this);
            if (input.hasClass('is-invalid')) {
                hasError = false;
            }

        });
        return hasError;
    }
    $("#formUsuario").submit(function(e) {
        e.preventDefault();

        var id_cct = parseInt($("#formUsuario #id_cct").val());
        nombre = $.trim($("#formUsuario #nombre").val());
        primer_apellido = $.trim($("#formUsuario #primer_apellido").val());
        segundo_apellido = $.trim($("#formUsuario #segundo_apellido").val());
        telefono = $.trim($("#formUsuario #telefono").val());
        email = $.trim($("#formUsuario #email").val());
        antiguedad_comision = $.trim($("#antiguedad_comision").val());
        horas_comision = parseInt($("#horas_comision").val());
        perfil = $.trim($("#perfil").val());
        METHOD = "POST";

        if (!id_cct) {
            $('#formUsuario #id_cct').addClass('is-invalid');
        } else {
            $('#formUsuario #id_cct').removeClass('is-invalid');
        }
        if (!nombre) {
            $('#formUsuario #nombre').addClass('is-invalid');
        } else {
            $('#formUsuario input#nombre').removeClass('is-invalid');
        }
        if (!primer_apellido) {
            $('#formUsuario #primer_apellido').addClass('is-invalid');
        } else {
            $('#formUsuario input#primer_apellido').removeClass('is-invalid');
        }
        // if (!telefono) {
        //     $('#formUsuario #telefono').addClass('is-invalid');
        // } else {
        //     $('#formUsuario #telefono').removeClass('is-invalid');
        // }
        // if (!antiguedad_comision) {
        //     $('#formUsuario #antiguedad_comision').addClass('is-invalid');
        // } else {
        //     $('#formUsuario #antiguedad_comision').removeClass('is-invalid');
        // }
        // if (!horas_comision) {
        //     $('#formUsuario #horas_comision').addClass('is-invalid');
        // } else {
        //     $('#formUsuario #horas_comision').removeClass('is-invalid');
        // }
        // if (!perfil) {
        //     $('#formUsuario #perfil').addClass('is-invalid');
        // } else {
        //     $('#formUsuario #perfil').removeClass('is-invalid');
        // }

        usuario = getUsuario();
        formData = new FormData(this);
        formData.append('METHOD', 'POST');
        if (validar()) {
            $.ajax({
                url: baseUrl + "rtes.php",
                type: "POST",
                dataType: "JSON",
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    var datos = data;
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Se ha guardado el registro exitosamente'
                    });

                },
                error: function(data) {
                    var error = data;
                    console.log(error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Error al obtener los datos.'
                    });
                }
            });

        }

    });
    getComboDatos();
</script>