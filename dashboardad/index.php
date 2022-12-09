<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1 align="center" >ADMINISTRADOR</h1>
    <br>
    <form id="formBuscarDeportistas" enctype="multipart/form-data" class="needs-validation" novalidate>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <label for="usuarios" class="col-form-label">CCT:</label>        
                    <select id="usuario" class="form-control requerido" name="usuario">
                        <option value="">Seleccionar...</option>
                    </select> 
                </div>  
                <div class="col-lg-4">
                    <label for="ciclos " class="col-form-label">NOMBRE:</label>          
                    <select id="ciclo" class="form-control requerido" name="ciclo">
                        <option value="">Seleccionar...</option>
                    </select> 
                </div>  
                <div class="col-lg-4">
                    <label for="funciones" class="col-form-label">RTE:</label>          
                    <select id="funcion" class="form-control requerido" name="funcion">
                        <option value="">Seleccionar...</option>
                    </select> 
                </div>  
                <div class="col-lg-4">
                <label for="nivel" class="col-form-label">PERIODO:</label>
                <select id="nivel" class="form-control" name="nivel"> 
                    <option value="">Seleccionar...</option>   
                    <option value="1">PLAN DE TRABAJO</option>   
                    <option value="2">PRIMER INFORME</option>
                    <option value="1">SEGUNDO INFORME</option>   
                    <option value="2">INFORME FINAL</option> 
                </select>
                </div>
            </div>
            <br>
  
            <br>
            <div class="row">
                <div align="right"class="col-lg-12">            
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



