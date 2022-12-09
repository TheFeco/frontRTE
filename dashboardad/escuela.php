<?php require_once "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->
<div class="container">
    <h1 align="center">ADMINISTRADOR</h1>
    <br>


    <?php require_once "vistas/parte_superior.php" ?>

    <div class="container">
        <h3 align="center">ALTA DE ESCUELAS</h3>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                    <form id="formEscuela" enctype="multipart/form-data" class="needs-validation" novalidate>

                        <div class="form-group">
                            <label for="cct" class="col-form-label">Clave de Centro de Trabajo:</label>
                            <input type="text" id="cct" class="form-control" name="cct" />
                        </div>
                        <div class="form-group">
                            <label for="escuela" class="col-form-label">Nombre de Escuela:</label>
                            <input type="text" id="escuela" class="form-control" name="escuela" />
                        </div>
                        <div class="form-group">
                            <label for="turno" class="col-form-label">Turno:</label>
                            <select id="turno" class="form-control" name="turno">
                                <option value="">Seleccionar...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nivel" class="col-form-label">Nivel Educativo:</label>
                            <select id="nivel" class="form-control" name="nivel">
                                <option value="">Seleccionar...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="zona" class="col-form-label">Zona:</label>
                            <input type="number" class="form-control" min="0" max="130" id="zona" name="zona" />
                        </div>
                        <div class="form-group">
                            <label for="sector" class="col-form-label">Sector:</label>
                            <input type="number" class="form-control" min="0" max="130" id="sector" name="sector" />
                        </div>
                        <div class="form-group">
                            <label for="nombredirector" class="col-form-label">Nombre Completo del Director:</label>
                            <input type="text" class="form-control" id="nombredirector" name="nombredirector">
                        </div>
                        <div class="form-group">
                            <label for="telefonodirector" class="col-form-label">Telefono Director a 10 digitos:</label>
                            <input type="text" id="telefonodirector" class="form-control" name="telefonodirector" />
                        </div>

                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="domicilio" class="col-form-label">Domicilio Escuela Calle:</label>
                        <input type="text" id="domicilio" class="form-control" name="domicilio" />
                    </div>
                    <div class="form-group">
                        <label for="domicilio" class="col-form-label">Colonia:</label>
                        <input type="text" id="colonia" class="form-control" name="colonia" />
                    </div>
                    <div class="form-group">
                        <label for="domicilio" class="col-form-label">Localidad:</label>
                        <input type="text" id="localidad" class="form-control" name="localidad" />
                    </div>
                    <div class="form-group">
                        <label for="municipio" class="col-form-label">Municipio:</label>
                        <select id="municipio" class="form-control" name="municipio">
                            <option value="">Seleccionar...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cp" class="col-form-label">Codigo Postal:</label>
                        <input type="number" class="form-control" min="0" max="130" id="cp" name="cp" />
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Correo Electrónico:</label>
                        <input type="email" id="email" class="form-control" name="email" />
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

    <!--Modal para Informes-->


    <?php require_once "vistas/parte_inferior.php" ?>
    <script>
        function getDataCombos() {
            $.ajax({
                url: baseUrl + "escuelas.php",
                type: "GET",
                datatype: "json",
                success: function(data) {
                    var datos = JSON.parse(data);
                    $.each(datos.municipios, function(key, municipio) {
                        $("#municipio").append('<option value=' + municipio.id + '>' + municipio.nombre + '</option>');
                    });

                    $.each(datos.turnos, function(key, turno) {
                        $("#turno").append('<option value=' + turno.id + '>' + turno.nombre + '</option>');
                    });

                    $.each(datos.niveles, function(key, nivel) {
                        $("#nivel").append('<option value=' + nivel.id + '>' + nivel.nombre + '</option>');
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
            $('#formEscuela input, #formEscuela select').each(function() {
                var input = $(this);
                if (input.hasClass('is-invalid')) {
                    hasError = false;
                }

            });
            return hasError;
        }
        // submit
        $("#formEscuela").submit(function(e) {
            e.preventDefault();

            var cct = $.trim($("#formEscuela #cct").val());
            escuela = $.trim($("#formEscuela #escuela").val());
            turno = parseInt($("#formEscuela #turno").val());
            nivel = parseInt($("#formEscuela #nivel").val());
            zona = parseInt($("#formEscuela #zona").val());
            sector = parseInt($("#formEscuela #sector").val());
            nombredirector = $.trim($("#nombredirector").val());
            telefonodirector = $.trim($("#telefonodirector").val());
            domicilio = $.trim($("#domicilio").val());
            colonia = $.trim($("#colonia").val());
            localidad = $.trim($("#localidad").val());
            municipio = parseInt($("#formEscuela #municipio").val());
            cp = $.trim($("#formEscuela #cp").val());
            email = $.trim($("#formEscuela #email").val());
            METHOD = "POST";

            if (!cct) {
                $('#formEscuela #cct').addClass('is-invalid');
            } else {
                $('#formEscuela #cct').removeClass('is-invalid');
            }
            if (!escuela) {
                $('#formEscuela #escuela').addClass('is-invalid');
            } else {
                $('#formEscuela input#escuela').removeClass('is-invalid');
            }
            if (!turno) {
                $('#formEscuela #turno').addClass('is-invalid');
            } else {
                $('#formEscuela input#turno').removeClass('is-invalid');
            }
            if (!nivel) {
                $('#formEscuela #nivel').addClass('is-invalid');
            } else {
                $('#formEscuela #nivel').removeClass('is-invalid');
            }
            if (!zona) {
                $('#formEscuela #zona').addClass('is-invalid');
            } else {
                $('#formEscuela #zona').removeClass('is-invalid');
            }
            if (!sector) {
                $('#formEscuela #sector').addClass('is-invalid');
            } else {
                $('#formEscuela #sector').removeClass('is-invalid');
            }
            // if ($('#cct').inputmask('isComplete')) {
            //     $('#cct').removeClass('is-invalid');
            // }else{
            //     $('#cct').addClass('is-invalid');
            // }
            // if(curpValida(curp.toUpperCase())){
            //     $('#curp').removeClass('is-invalid');
            // }else{
            //     $('#curp').addClass('is-invalid');
            // }
            usuario = getUsuario();
            formData = new FormData(this);
            formData.append('METHOD', 'POST');
            if (validar()) {
                $.ajax({
                    url: baseUrl + "escuelas.php",
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

        getDataCombos();
    </script>