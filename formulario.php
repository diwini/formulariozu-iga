<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/styles.css"  media="screen,projection"/>
	<!-- Google Maps Api -->
	<link href="https://developers.google.com/maps/documentation/javascript/examples/default.css" rel="stylesheet">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<input type="submit" value="Base de datos" onclick = "location='formulario.php'"/>
 <div class="row">
    <form method="post" action="insertformulario.php" class="col s10">
      <div class="row">
        <div class="input-field col s5">
          <input placeholder="Cliente" id="cliente" type="text" class="validate" name="cliente" required>
          <label for="cliente">Nombre cliente</label>
        </div>        
      	<div class="row">
        <div class="input-field col s5">
          <input placeholder="Empresa" id="empresa" type="text" class="validate" name="empresa" required>
          <label for="empresa">Nombre empresa</label>
        </div>        
      </div>
      <div class="row">
        <div class="input-field col s5">
          <textarea id="requerimiento" class="materialize-textarea" name="requerimiento" required></textarea>
          <label for="requerimiento">Requerimiento</label>
        </div>
      </div>
            <div class="row">
        <div class="input-field col s5">
          <input id="asignacion" type="text" class="validate" name="asignacion" required>
          <label for="asignacion">Asignacion</label>
        </div>        
      </div>
      <div class="row">
      <div class="input-field col s5">
          <input type="date" class="datepicker" name="recepcion" required>
          <label for="asignacion">Fecha recepcion</label>
        </div>     
       <div class="input-field col s5">
          <input type="date" class="datepicker" name="compromiso" required>
          <label for="asignacion">Fecha compromiso</label>
        </div>       
      </div>
      <div class= "row">
       <div class="input-field col s5">
          <input type="date" class="datepicker" name="cierre" required>
          <label for="asignacion">Fecha cierre</label>
        </div> 
           </div> 
             <div class= "row">
         <div class="input-field col s5">
          <textarea id="obs" class="materialize-textarea" name="obs" required></textarea>
          <label for="obs">Observacion</label>
       </div>
         </div>
       <div class="row">
        <div class="input-field col s5">
          <input placeholder="Sin puntos ni guion" id="rut" type="text" class="validate" name="rut" required>
          <label for="rut">Rut</label>
        </div>        
      </div>
     <FONT size="2" COLOR="gray">Asesoria </FONT>
     
    <p> 
      <input name="ase" type="radio" id="ase1" required/>
      <label for="ase1">Si</label>
    </p>
    <p>
      <input name="ase" type="radio" id="ase2" required/>
      <label for="ase2">No</label>
    </p>
  <FONT size="2" COLOR="gray">IVA </FONT>
    <p>
      <input name="iva" type="radio" id="iva1" required/>
      <label for="iva1">Si</label>
    </p>
    <p>
      <input name="iva" type="radio" id="iva2" required/>
      <label for="iva2">No</label>
    </p>
  <FONT size="2" COLOR="gray">Remuneracion </FONT>
    <p>
      <input name="rem" type="radio" id="rem1" required/>
      <label for="rem1">Si</label>
    </p>
    <p>
      <input name="rem" type="radio" id="rem2" required/>
      <label for="rem2">No</label>
    </p>
  <FONT size="2" COLOR="gray">Balance </FONT>
    <p>
      <input name="bala" type="radio" id="bala1" required/>
      <label for="bala1">Si</label>
    </p>
    <p>
      <input name="bala" type="radio" id="bala2" required/>
      <label for="bala2">No</label>
    </p>
  <FONT size="2" COLOR="gray">Renta </FONT>
    <p>
      <input name="rent" type="radio" id="rent1" required/>
      <label for="rent1">Si</label>
    </p>
    <p>
      <input name="rent" type="radio" id="rent2" required/>
      <label for="rent2">No</label>
    </p>
  <FONT size="2" COLOR="gray">Auditoria</FONT>
    <p>
      <input name="audi" type="radio" id="audi1" required/>
      <label for="audi1">Si</label>
    </p>
    <p>
      <input name="audi" type="radio" id="audi2" required/>
      <label for="audi2">No</label>
    </p>
  </div>
  </div>
 <button class="btn waves-effect waves-light" type="submit" name="action">Ingresar
    <i class="material-icons right">send</i>
  </button>
</form>
  <script>  
$(document).ready(function() {
    Materialize.updateTextFields();
    $('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 15, // Creates a dropdown of 15 years to control year
	    format: 'dd-mm-yyyy'
	  });
  });
</script>