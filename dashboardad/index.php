<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1 align="center" >ADMINISTRADOR</h1>
    <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <label for="cct" class="col-form-label">CCT:</label>        
                    <select id="cct" class="form-control js-example-basic-single" name="cct">
                        <option value="">Seleccionar...</option>
                    </select> 
                </div>
                <div class="col-lg-4">
                    <label for="rte" class="col-form-label">RTE:</label>          
                    <select id="rte" class="form-control js-example-basic-single" name="rte">
                        <option value="">Seleccionar...</option>
                    </select> 
                </div>  
                <div class="col-lg-4">
                <label for="ciclo" class="col-form-label">PERIODO:</label>
                <select id="ciclo" class="form-control" name="ciclo"> 
                    <option value="">Seleccionar...</option>
                    <option value="2022-2023">2022-2023</option>
                </select>
                </div>
            </div>
            <br>
  
            <br>
            <div class="row">
                <div align="right"class="col-lg-12">            
                    <button id="btnbuscar" type="submit" class="btn btn-success" onclick="searchInforme()">Buscar</button>    
                </div>
            </div>
        </div>
    <br>
   
    <br>
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive mb-5">        
                        <table id="tablaInforme" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th style="width:10%">Index</th>
                                <th>Clave</th>
                                <th>RTE</th>
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



<!--Modal para Comenarios-->
<div class="container">
    <div class="row">
        <div class="col-md-12" >  
            <button type="button" id="btnCedula" class="btn btn-success">Imprimir Cedula</button>
            <button type="button" id="btnGafete" class="btn btn-success">Imprimir Gafete</button>
            <button type="button" id="btnExcel" class="btn btn-success">Exportar Excel</button>
        </div>
    </div>
</div>
<br>
<br>
    
</div>
<!--FIN del cont principal-->
<?php require_once "vistas/modalLarge.php"?>
<?php require_once "vistas/parte_inferior.php"?>
<script>
    getInformes();
    getCombo();
    $('#tablaInformes').DataTable();
    function getInformes() {
    $.ajax({
      url: baseUrl + "getAdminInformes.php",
      type: "GET",
      datatype: "json",
      success: function (data) {

        var informes = JSON.parse(data);
        $("#DataResult").html('');
        llenaTablaInformesAdmin(informes.informes)
      },
      error: function () {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Hubo un error al obtener los datos!",
        });
      },
    });
  }
  function getCombo() {
    $.ajax({
      url: baseUrl + "getAdminInformesCombos.php",
      type: "GET",
      datatype: "json",
      success: function (data) {
        var datos = JSON.parse(data);
                $.each(datos.escuelas, function(key, escuela) {
                    $("#cct").append('<option value=' + escuela.id + '>' + escuela.cct + " - " + escuela.nombre + '</option>');
                });
                $.each(datos.rtes, function(key, rte) {
                    $("#rte").append('<option value=' + rte.id + '>' + rte.nombre + " " + rte.primer_apellido + " " + rte.segundo_apellido + '</option>');
                });
      },
      error: function () {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Hubo un error al obtener los datos!",
        });
      },
    });
  }

  function searchInforme(){
        let escuela = $('#cct').val();
        let rte = $('#rte').val();
        let ciclo = $('#ciclo').val();
        formData = new FormData();
        formData.append('escuela', escuela);
        formData.append('rte', rte);
        formData.append('ciclo', ciclo);
        formData.append('METHOD', 'POST');
        $.ajax({
        url: baseUrl + "getAdminInformes.php",
        type: "POST",
        dataType: "JSON",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            let informes = data.informes;
            
            $("#DataResult").html('');
            llenaTablaInformesAdmin(informes)
        },
        error: function () {
            Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Hubo un error al obtener los datos!",
            });
        },
        });
        

  }
    function llenaTablaInformesAdmin(data) {
    var html;
    $.each(data, function (key, informe) {
      html += "<tr>";
      html +=
        "<td >" +
        (key+1) +
        "</td>" +
        "<td >" +
        informe.usuario +
        "</td>" +
        "<td >" +
        informe.nombre+ " " + informe.primer_apellido + " " + informe.segundo_apellido +
        "</td>";
        if(informe.url_archivo){
            html+="<td>"+
            '<div class="btn-group" role="group" aria-label=""> <button data-id="'+informe.id_informe+'" type="button" class="btn btn-primary" onclick="descargar('+informe.id_informe+','+informe.id+')" >Descargar informe</button> <a href="' + baseUrl + informe.url_archivo + '"  class="btn btn-primary" target="_blank">informe firmado</a> <button type="button" class="btn btn-danger btn-eliminar" onclick="borrar('+informe.id_informe+')">borrar</button> </div>'+

        "</td>"
        }else{
            html+="<td>"+
            '<div class="btn-group" role="group" aria-label=""> <button data-id="'+informe.id_informe+'" type="button" class="btn btn-primary" onclick="descargar('+informe.id_informe+','+informe.id+')" >Descargar informe</button> <button type="button" class="btn btn-danger btn-eliminar" onclick="borrar('+informe.id_informe+')">borrar</button> </div>'+

        "</td>";
        }
      html += "</tr>";
    });
    $("#DataResult").html(html);
  }
  function descargar(informe,usuario){
    formData = new FormData();
        formData.append('usuario', usuario);
        formData.append('id', informe);
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
    }
    function borrar(informe){
        let id_informe = informe;
        Swal.fire({
        title: "Usted Desea eliminar este registro?",
        text: "¡No podrás revertir esto!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "¡Sí, bórralo!",
        }).then((result) => {
            if (result.value) {
                deleteInforme(id_informe);
            }
        });
    }
    function deleteInforme(id) {
        METHOD = "DELETE";
        formData = new FormData();
        formData.append("METHOD", METHOD);
        formData.append('id', id);
        let url = "primerInformeDelete.php?id=" + id;
        $.ajax({
        url: baseUrl + url,
        type: "POST",
        dataType: "json",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function () {
            Swal.fire(
                'Excelente',
                'Se elimino el informe',
                'success'
            );
            $("#DataResult").html('');
            getInformes();
        },
        });
    }
</script>



