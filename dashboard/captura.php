<?php require_once "vistas/parte_superior.php" ?>

<div class="container-fluid">
    <h1 align="center">Captura de datos</h1>
    <br>
    <div class="container-fluid">
        <form id="formPI" enctype="multipart/form-data" class="needs-validation">
            <table style="width: 100%;" border="2" cellpadding="15">
                <tbody>
                    <tr>
                        <td style="color: white; font-weight: bold; background: #651D32; text-align: center;" colspan="6">PRIMER INFORME TRIMESTRAL DEL USO Y APROVECHAMIENTO DE LOS RECURSOS TECNOL&Oacute;GICOS</td>
                    </tr>
                    <tr>
                        <td style="color: white; font-weight: bold; background: #651D32; text-align: center;" colspan="6">CICLO ESCOLAR 2022-2023</td>
                    </tr>
                    <tr>
                        <td style="color: white; font-weight: bold; background: #651D32; text-align: center;" colspan="6">INSTRUCCIONES: 1) LLENAR, IMPRIMIR, FIRMAR AL CALCE Y DIGITALIZAR 2) SUBIR EN
                            tecnologiaeducativa.sepyc.gob.mx</td>
                    </tr>
                    <tr>
                        <td>NOMBRE DEL CENTRO DE TRABAJO:</td>
                        <td style="width: 30%;" class="escuela">&nbsp;</td>
                        <td>CCT:</td>
                        <td class="cct">&nbsp;</td>
                        <td>ZONA:</td>
                        <td class="zona">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>NOMBRE DEL RTE QUE REPORTA:</td>
                        <td class="rteNombre">&nbsp;</td>
                        <td>TURNO</td>
                        <td class="turno">&nbsp;</td>
                        <td>SECTOR</td>
                        <td class="sector">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p>ANTIGUEDAD DE LA COMISIÓN:</p>
                            <div class="form-group">
                                <input type="date" class="form-control" name="antiguedadComision" id="antiguedadComision" placeholder="" required>
                            </div>
                        </td>
                        <td colspan="3">HORAS COMISIONADAS AL AULA DE MEDIOS</td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="hotasComision" id="hotasComision" placeholder="" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; text-align: center;" colspan="6">DESGLOSE DE ACTIVIDADES POR COMPONENTE</td>
                    </tr>
                </tbody>
            </table>
            <br />
            <table id="tablaControl" style="width: 100%;" border="2" cellpadding="15">
                <tbody>
                    <tr style="color: white; font-weight: bold; background: #651D32; text-align: center;">
                        <td colspan="10">CONTROL</td>
                    </tr>
                    <tr>
                        <td colspan="10" style="text-align: center; font-weight: bold;">Cantidad de alumnos atendidos con rezago educativo en el aula de medios, primer trimestre</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Fortalecimiento de Campo Formativo</td>
                        <td colspan="6">Cantidad de alumnos atendidos con rezago educativo</td>
                        <td>Participan en proyectos colaborativos</td>
                        <td colspan="2">
                            <div>
                                <label class="radio" for="si">
                                    <input class="radio-Input" type="radio" id="si" name="proyectoColabortivo" value="Sí" />
                                    Sí
                                </label>

                                <label class="radio" for="no">
                                    <input class="radio-Input" type="radio" checked="checked" id="no" name="proyectoColabortivo" value="No" />
                                    No
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1&deg;</td>
                        <td>2&deg;</td>
                        <td>3&deg;</td>
                        <td>4&deg;</td>
                        <td>5&deg;</td>
                        <td>6&deg;</td>
                        <td colspan="3">Especifique cuales:</td>
                    </tr>
                    <tr>
                        <td>Lenguaje y Comunicaci&oacute;n</td>
                        <td><input id="lc_1" name="lc_1" class="alumnos" style="width: 50px;" type="number" min="0" value="0" /></td>
                        <td><input id="lc_2" name="lc_2" class="alumnos" style="width: 50px;" type="number" min="0" value="0" /></td>
                        <td><input id="lc_3" name="lc_3" class="alumnos" style="width: 50px;" type="number" min="0" value="0" /></td>
                        <td><input id="lc_4" name="lc_4" class="alumnos" style="width: 50px;" type="number" min="0" value="0" /></td>
                        <td><input id="lc_5" name="lc_5" class="alumnos" style="width: 50px;" type="number" min="0" value="0" /></td>
                        <td><input id="lc_6" name="lc_6" class="alumnos" style="width: 50px;" type="number" min="0" value="0" /></td>
                        <td colspan="3">
                            <div class="form-group">
                                <label for=""></label>
                                <select class="form-control pc" name="pc_1" id="pc_1">
                                    <option value="">Seleccione...</option>
                                    <option value="LOS ANIMALES">LOS ANIMALES</option>
                                    <option value="CONOCIENDO LA BASURA">CONOCIENDO LA BASURA</option>
                                    <option value="NUESTRO CUERPO CAMBIA">NUESTRO CUERPO CAMBIA</option>
                                    <option value="LABORATORIO DE ENERGÍAS RENOVABLES">LABORATORIO DE ENERGÍAS RENOVABLES</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pensamiento Matem&aacute;tico</td>
                        <td><input id="pm_1" name="pm_1" class="alumnos" style="width: 50px;" type="number" min="0" value="0" /></td>
                        <td><input id="pm_2" name="pm_2" class="alumnos" style="width: 50px;" type="number" min="0" value="0" /></td>
                        <td><input id="pm_3" name="pm_3" class="alumnos" style="width: 50px;" type="number" min="0" value="0" /></td>
                        <td><input id="pm_4" name="pm_4" class="alumnos" style="width: 50px;" type="number" min="0" value="0" /></td>
                        <td><input id="pm_5" name="pm_5" class="alumnos" style="width: 50px;" type="number" min="0" value="0" /></td>
                        <td><input id="pm_6" name="pm_6" class="alumnos" style="width: 50px;" type="number" min="0" value="0" /></td>
                        <td colspan="3">
                            <div class="form-group">
                                <label for=""></label>
                                <select class="form-control  pc" name="pc_2" id="pc_2">
                                    <option value="">Seleccione...</option>
                                    <option value="LOS ANIMALES">LOS ANIMALES</option>
                                    <option value="CONOCIENDO LA BASURA">CONOCIENDO LA BASURA</option>
                                    <option value="NUESTRO CUERPO CAMBIA">NUESTRO CUERPO CAMBIA</option>
                                    <option value="LABORATORIO DE ENERGÍAS RENOVABLES">LABORATORIO DE ENERGÍAS RENOVABLES</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="otro" id="otro" placeholder="Otro (Especifique):" value="">
                            </div>

                        </td>
                        <td><input id="otro_1" name="otro_1" class="alumnos inputOtro" style="width: 50px;" type="number" min="0" value="0" disabled /></td>
                        <td><input id="otro_2" name="otro_2" class="alumnos inputOtro" style="width: 50px;" type="number" min="0" value="0" disabled /></td>
                        <td><input id="otro_3" name="otro_3" class="alumnos inputOtro" style="width: 50px;" type="number" min="0" value="0" disabled /></td>
                        <td><input id="otro_4" name="otro_4" class="alumnos inputOtro" style="width: 50px;" type="number" min="0" value="0" disabled /></td>
                        <td><input id="otro_5" name="otro_5" class="alumnos inputOtro" style="width: 50px;" type="number" min="0" value="0" disabled /></td>
                        <td><input id="otro_6" name="otro_6" class="alumnos inputOtro" style="width: 50px;" type="number" min="0" value="0" disabled /></td>
                        <td colspan="3">
                            <div class="form-group">
                                <label for=""></label>
                                <select class="form-control  pc" name="pc_3" id="pc_3">
                                    <option value="">Seleccione...</option>
                                    <option value="LOS ANIMALES">LOS ANIMALES</option>
                                    <option value="CONOCIENDO LA BASURA">CONOCIENDO LA BASURA</option>
                                    <option value="NUESTRO CUERPO CAMBIA">NUESTRO CUERPO CAMBIA</option>
                                    <option value="LABORATORIO DE ENERGÍAS RENOVABLES">LABORATORIO DE ENERGÍAS RENOVABLES</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>TOTAL EN EL TRIMESTRE</td>
                        <td class="resultado_1">&nbsp;</td>
                        <td class="resultado_2">&nbsp;</td>
                        <td class="resultado_3">&nbsp;</td>
                        <td class="resultado_4">&nbsp;</td>
                        <td class="resultado_5">&nbsp;</td>
                        <td class="resultado_6">&nbsp;</td>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr style="width: 28%; text-align: center;">
                        <td>
                            <p>OBSERVACIONES (Indicar situaciones particulares del aula de medios.)</p>
                            <p>Ejemplos: Conectividad, falta de mobiliario, equipo de c&oacute;mputo etc.</p>
                        </td>
                        <td colspan="9"><textarea class="observaciones" style="width: 100%;" cols="2" rows="10" id="ctl_observaciones" name="ctl_observaciones" require></textarea></td>
                    </tr>
                </tbody>
            </table>
            <!-- DivTable.com -->
            <table id="tablaImplementacion" style="width: 100%;" border="2" cellpadding="15">
                <tbody>
                    <tr style="color: white; font-weight: bold; background: #651D32; text-align: center;">
                        <td colspan="6">IMPLEMENTACIÓN</td>
                    </tr>
                    <tr>
                        <td colspan="6" style="text-align: center; font-weight: bold;">Temáticas abordadas por Grado (Indique 3 de las más relevantes en el primer trimestre).</td>
                    </tr>
                    <tr>
                        <td style="width: 10%;  text-align: center;">1°</td>
                        <td colspan="5"><textarea class="im" style="width: 100%;" cols="2" rows="3" id="im_1" name="im_1" required></textarea></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;  text-align: center;">2°</td>
                        <td colspan="5"><textarea class="im" style="width: 100%;" cols="2" rows="3" id="im_2" name="im_2" required></textarea></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;  text-align: center;">3°</td>
                        <td colspan="5"><textarea class="im" style="width: 100%;" cols="2" rows="3" id="im_3" name="im_3" required></textarea></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;  text-align: center;">4°</td>
                        <td colspan="5"><textarea class="im" style="width: 100%;" cols="2" rows="3" id="im_4" name="im_4"></textarea></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;  text-align: center;">5°</td>
                        <td colspan="5"><textarea class="im" style="width: 100%;" cols="2" rows="3" id="im_5" name="im_5"></textarea></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;  text-align: center;">6°</td>
                        <td colspan="5"><textarea class="im" style="width: 100%;" cols="2" rows="3" id="im_6" name="im_6"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="6" rowspan="2">
                            <p>¿Cuáles son las páginas educativas (link)) que más usan en tu escuela como apoyo a los aprendizajes esperados?</p>
                            <div><textarea class="im_ob" style="width: 100%;" cols="2" rows="5" id="im_ob" name="im_ob"></textarea></div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- DivTable.com -->
            <table id="tablaGestion" style="width: 100%;" border="2" cellpadding="15">
                <tbody>
                    <tr style="color: white; font-weight: bold; background: #651D32; text-align: center;">
                        <td colspan="6">Gestion</td>
                    </tr>
                    <tr>
                        <td colspan="6" style="text-align: center; font-weight: bold;">Tecnologías/Recursos más usados por cada grupo en el primer trimestre ( separado por ,)</td>
                    </tr>
                    <tr>
                        <td style="width: 10%;  text-align: center;">1°</td>
                        <td colspan="5"><textarea class="gs_1" style="width: 100%;" cols="2" rows="3" id="gs_1" name="gs_1" required></textarea></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;  text-align: center;">2°</td>
                        <td colspan="5"><textarea class="gs_2" style="width: 100%;" cols="2" rows="3" id="gs_2" name="gs_2" required></textarea></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;  text-align: center;">3°</td>
                        <td colspan="5"><textarea class="gs_3" style="width: 100%;" cols="2" rows="3" id="gs_3" name="gs_3" required></textarea></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;  text-align: center;">4°</td>
                        <td colspan="5"><textarea class="gs_4" style="width: 100%;" cols="2" rows="3" id="gs_4" name="gs_4"></textarea></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;  text-align: center;">5°</td>
                        <td colspan="5"><textarea class="gs_5" style="width: 100%;" cols="2" rows="3" id="gs_5" name="gs_5"></textarea></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;  text-align: center;">6°</td>
                        <td colspan="5"><textarea class="gs_6" style="width: 100%;" cols="2" rows="3" id="gs_6" name="gs_6"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="6" rowspan="2">
                            <p style="text-align:center;">Necesidades del aula de medios (Describa brevemente las necesidades surgidas en el desarrollo de las actividades didácticas durante el primer trimestre)</p>
                            <div><textarea class="gs_ob" style="width: 100%;" cols="2" rows="5" id="gs_ob" name="gs_ob" required></textarea></div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- DivTable.com -->
            <div style="margin-top: 15px ;">
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>

        </form>
    </div>
    <br>
</div>
<?php require_once "vistas/parte_inferior.php" ?>

<script>
    getDatosUsuario();
    var cambioHorasComision, cambioFechaComosion;

    $('.pc').change(function() {

    });

    $("#otro").bind("change paste keyup", function() {
        if ($(this).val() != "") {
            $(".inputOtro").removeAttr("disabled");
        } else {
            $(".inputOtro").attr("disabled", true)
            $(".inputOtro").val(0);
            calcularAlumnos();
        }

    });
    $(".alumnos").bind("change paste keyup", function() {
        calcularAlumnos();
    });

    function calcularAlumnos() {
        let resultado1 = parseInt($('#lc_1').val()) + parseInt($('#pm_1').val()) + parseInt($('#otro_1').val());
        $('.resultado_1').text(resultado1);
        let resultado2 = parseInt($('#lc_2').val()) + parseInt($('#pm_2').val()) + parseInt($('#otro_2').val());
        $('.resultado_2').text(resultado2);
        let resultado3 = parseInt($('#lc_3').val()) + parseInt($('#pm_3').val()) + parseInt($('#otro_3').val());
        $('.resultado_3').text(resultado3);
        let resultado4 = parseInt($('#lc_4').val()) + parseInt($('#pm_4').val()) + parseInt($('#otro_4').val());
        $('.resultado_4').text(resultado4);
        let resultado5 = parseInt($('#lc_5').val()) + parseInt($('#pm_5').val()) + parseInt($('#otro_5').val());
        $('.resultado_5').text(resultado5);
        let resultado6 = parseInt($('#lc_6').val()) + parseInt($('#pm_6').val()) + parseInt($('#otro_6').val());
        $('.resultado_6').text(resultado6);
    }

    jQuery.extend(jQuery.validator.messages, {
        required: 'Este campo es requerido!'
    });

    $("#formPI").validate({
        event: "blur",
        rules: {
            'antiguedadComision': "required",
            'hotasComision': "required",
            'ctl_observaciones': "required"
        },
        messages: {
            'antiguedadComision': "Por favor, indica tu antigüedad comisión",
            'hotasComision': "Por favor, indica sus horas en la comisión",
            'ctl_observaciones': "Por favor, dime algo!"
        },
        submitHandler: function(form, event) {
            event.preventDefault();
            $('#loader').show();
            usuario = getUsuario();
            formData = new FormData(form);
            formData.append('usuario', usuario);
            formData.append('cambioFechaComosion', cambioFechaComosion);
            formData.append('cambioHorasComision', cambioHorasComision);
            formData.append('METHOD', 'POST');
            $.ajax({
                url: baseUrl + "storePrimerInforme.php",
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
                    window.location.href = "./index.php";
                },
                error: function(data) {
                    $('#loader').hide();
                    var error = JSON.parse(data);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: error.menssage
                    });
                }
            });

        }
    });

    function getDatosUsuario() {
        $('#loader').show();
        let url = "getRtes.php?id=" + getUsuario();
        $.ajax({
            url: baseUrl + url,
            type: "GET",
            datatype: "json",
            success: function(data) {
                let datos = JSON.parse(data);
                let usuario = datos['usuario'][0];
                console.log(usuario);
                let nombreUsuario = $.trim(usuario.nombre + " " + usuario.primer_apellido + " " + usuario.segundo_apellido);
                let antiguedadComision = new Date(usuario.antiguedad_comision).toISOString().split('T')[0]
                $('.escuela').text(usuario.escuela);
                $('.cct').text(usuario.cct);
                $('.zona').text(usuario.zona);
                $('.rteNombre').text(nombreUsuario);
                $('.turno').text(usuario.turno);
                $('.sector').text(usuario.sector);
                $('#hotasComision').val(usuario.horas_comision);
                horasComision = usuario.horas_comision;
                if (usuario.antiguedad_comision != null) {
                    fechaComosion = antiguedadComision;
                    $('#antiguedadComision').val(antiguedadComision);
                }
                calcularAlumnos();

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
</script>