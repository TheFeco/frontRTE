<?php require_once 'vistas/parte_superior.php'; ?>

<!--INICIO del cont principal-->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Exportar a excel</h1>
    <form>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Informe Trimestral</label>
                    <select class="form-control" name="informe" id="informe">
                        <option value="">seleccionar...</option>
                        <option value="1">Primer Informe</option>
                        <option value="2">Segundo Informe</option>
                        <option value="3">Tercer Informe</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Ciclo</label>
                    <select class="form-control" name="ciclo" id="ciclo">
                        <option value="">seleccionar...</option>
                        <option value="2022-2023">2022-2023</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="button" id="exportar" class="btn btn-primary">Exportar</button>
            </div>
        </div>
    </form>
  </div>
</div>

<?php require_once 'vistas/parte_inferior.php'; ?>
<script>
$('#exportar').click(function(){

    let informe = $("#informe").val();
    let ciclo = $("#ciclo").val();
    let url = "";
    //alert(informe);

    if( informe == "" || ciclo == "" ){
        Swal.fire(
            '',
            'Favor de seleccionar un ciclo y/o informe trimestral a buscar',
            'warning'
        );
        return;
    }

    switch (informe) {
        case "1":
            url = 'primerInformeExcel.php';
            console.log(informe);
            break;
        case "2":
            url = "segundoInformeExcel.php";
            break;
        case "3":
            url = "tercerInformeExcel.php";
            break;
    }

    formData = new FormData();
    formData.append('ciclo', ciclo);
    formData.append('METHOD', 'POST');
    $.ajax({
        url: baseUrl + url,
        type: "POST",
        dataType: "JSON",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            if (data.length != 0) {
            var a = $("<a />");
            a.attr("href", baseUrl + data.file);
            a.attr("target", "_blank");
            $("body").append(a);
            a[0].click();
            } else {
            Swal.fire({
                title: "Lo sentimos",
                text: "No se encontró información deseada",
            });
            }
        },
        error: function (error) {
            console.log(error);
            Swal.fire({
            title: "Lo sentimos",
            text: "Hubo un error al obtener los datos",
            });
        }
    });
});
</script>