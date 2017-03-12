<!-- Header -->
<?php require_once 'header.php';?>
<!-- Header -->
<!-- locallib -->
<?php require_once 'locallib.php';?>
<!-- locallib -->
<!-- Conexion BBDD -->
<?php require_once 'conexionlocal.php';?>
<!-- Conexion BBDD -->
<!-- Inicio Contenido -->
<?php 
	$select = $_POST['select'];

	$input = $_POST['input'];
	if($select == null){
		$select = -1;
	}
?>
<div class="row">
<h5>Buscador</h5>
<form method="post" action="lista.php" class="col s12">
      <div class="row">
        <div class="input-field col s4">
    <select name="select" id="buscadorselect">
      <option value="" disabled selected>Seleccione una columna</option>
      <option value="1">Nombre</option>
      <option value="2">Empresa</option>
      <option value="3">Requerimiento</option>
      <option value="4">Asignacion</option>
      <option value="5">Fecha recepcion</option>
      <option value="6">Fecha compromiso</option>
      <option value="7">Fecha cierre</option>
      <option value="8">Observacion</option>
      <option value="9">Rut</option>
    </select>
  </div>
        <div id="tipoinput"class="input-field col s4">
          <input id="last_name" type="text" class="validate" disabled>
          <label for="last_name">Seleccione columna</label>
        </div>
       <button class="btn waves-effect waves-light" type="submit" name="action">Buscar
    <i class="material-icons right">send</i>
  </button>
  </form>
</div>
</div>

<div class= "row">
<table class="striped">
        <thead>
          <tr>
              <th data-field="id">id</th>
              <th data-field="cliente">Cliente</th>
              <th data-field="empresa">Empresa</th>
              <th data-field="requerimiento">Requerimiento</th>
              <th data-field="fecha recepcion">Fecha recepcion</th>
              <th data-field="fecha compromiso">Fecha compromiso</th>
              <th data-field="asignacion">Asignacion</th>
              <th data-field="fecha cierre">Fecha cierre</th>
              <th data-field="estado tarea">Estado tarea</th>
              <th data-field="observacion">Observacion</th>
              <th data-field="rut">Rut Empresa</th>
              <th data-field="asesoria">Asesoria</th>
              <th data-field="iva">IVA</th>
              <th data-field="remuneracion">Remuneracion</th>
              <th data-field="balance">Balance</th>
              <th data-field="renta">Renta</th>
              <th data-field="auditoria">Auditoria</th>
          </tr>
        </thead>

        <tbody>
        <!-- Funcion trae data de la tabla -->
        <?php 
        if($select == -1){
        get_cliente_data($con);
        }
		?>
        <!-- Funcion trae data de la tabla -->
        </tbody>
      </table>
<!-- Fin Contenido -->
<!-- Inicio footer -->
<?php require_once 'footer.php';?>
<!-- Final footer -->
<script>
$(document).ready(function() {
    $('select').material_select();
    $('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 15, // Creates a dropdown of 15 years to control year
	    format: 'dd-mm-yyyy'
	  });
    $('#buscadorselect').on('change', function() {
    	if(this.value == 1 || this.value == 2 || this.value == 4 || this.value == 9){
        $('#tipoinput').html("<input placeholder='Ingrese Texto' id='cliente' type='text' class='validate' name='input' required>");
    	}
    	if(this.value == 3 || this.value == 8){
            $('#tipoinput').html("<textarea placeholder='Ingrese Texto' id='obs' class='materialize-textarea' name='input' required></textarea>");
        }
    	if(this.value == 5 || this.value == 6 || this.value == 7){
    		$('#tipoinput').html("<input placeholder='Click Aqui' type='date' class='datepicker' name='input' required><script>$('.datepicker').pickadate({selectMonths: true, selectYears: 15, format: 'dd-mm-yyyy'});");
    	}
    })
  });
</script>