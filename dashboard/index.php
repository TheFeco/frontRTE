<?php require_once "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->
<div class="container">
    <h1 align="center">Primer Informe Trimestral</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="captura.php" id="btn-captura" class="btn btn-success">Generar informe</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card resultado">
                    <h5 id="header" class="card-header text-center">Informe Trimestral</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <h5 id="title" class="card-title">Descargar Informe</h5>
                                <p id="texto" class="card-text">para firma</p>
                                <a href="#" id="ImprimirPDF" class="btn btn-primary botonm">Descargar informe</a>
                            </div>
                            <div class="col-md-6">
                                <h5 id="title" class="card-title">Subír Informe Firmado</h5>
                                <p id="texto" class="card-text"></p>
                                <form id="formUploadFile" enctype="multipart/form-data" action="#">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <input type="file" class="form-control-file" name="archivo" id="archivo" placeholder="" aria-describedby="fileHelpId">
                                        <small id="fileHelpId" class="form-text text-muted">Archivo PDF</small>
                                        <button type="submit" class="btn btn-primary" value="Submit">Enviar</button>
                                        <input type="hidden" name="id_informe" id="id_informe">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card vacio">
                    <h5 class="card-header"></h5>
                    <div class="card-body">
                        <h5 class="card-title">Informes</h5>
                        <p class="card-text">Por el momento no tiene un informe registrado</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FIN del cont principal-->
<?php require_once "vistas/modalLarge.php" ?>
<?php require_once "vistas/parte_inferior.php" ?>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
    $("#formUploadFile").validate({
        event: "blur",
        rules: {
            archivo: {
                required: true,
                extension: "pdf"
            }
        },
        messages: {
            archivo: {
                required: "Por favor cargue el informe ",
                extension: 'Solo se permiten archivos pdf'
            }
        },
        submitHandler: function(form, event) {
            event.preventDefault();
            $('#loader').show();
            usuario = getUsuario();
            formData = new FormData(form);
            formData.append('usuario', usuario);
            formData.append('METHOD', 'POST');
            $.ajax({
                url: baseUrl + "storePrimerInformeFile.php",
                type: "POST",
                dataType: "JSON",
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    $('#loader').hide();
                    Swal.fire({
                        icon: 'success',
                        title: 'Información',
                        text: 'Se ha guardado exitosamente!!!'
                    });
                    $('#formUploadFile').hide();
                    $("#btn-captura").hide();
                    $('#texto').text("Ya se ha subido su informe!!!");
                },
                error: function(data) {
                    $('#loader').hide();
                    var error = data;
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: error.menssage
                    });
                }
            });

        }
    });
    $('#ImprimirPDF').on('click', function() {
        let id = $('#id_informe').val();
        let usuario = getUsuario();
        formData = new FormData();
        formData.append('usuario', usuario);
        formData.append('id', id);
        formData.append('METHOD', 'POST');
        $.ajax({
            url: baseUrl + "primerInformePDF.php",
            type: "POST",
            dataType: "JSON",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                var a = $("<a />");
                a.attr("href", baseUrl + data.file);
                a.attr("target", "_blank")
                $("body").append(a);
                a[0].click();

            },
            error: function(data) {
                console.log(data);
                Swal.fire({
                    title: 'Lo sentimos',
                    text: 'No se encontró información deseada'
                });
            }
        });
    });
</script>