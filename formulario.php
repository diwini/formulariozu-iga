<!-- Header -->
<?php require_once 'header.php';?>
<!-- Header -->
<!-- Inicio Formulario -->
<style>
 /* label color */
   .input-field label {
     color: #000;
   }
   /* valid color */
   .input-field input[type=text].valid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #000;
   }
</style>
<h3>Formulario</h3>
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
          <textarea placeholder="Ingrese Requerimiento" id="requerimiento" class="materialize-textarea" name="requerimiento" required></textarea>
          <label for="requerimiento">Requerimiento</label>
        </div>
      </div>
            <div class="row">
        <div class="input-field col s5">
          <input placeholder="Ingrese Asignacion" id="asignacion" type="text" class="validate" name="asignacion" required>
          <label for="asignacion">Asignacion</label>
        </div>        
      </div>
      <div class="row">
      <div class="input-field col s5">
          <input placeholder="Click Aqui" type="date" class="datepicker" name="recepcion" required>
          <label for="asignacion">Fecha recepcion</label>
        </div>     
       <div class="input-field col s5">
          <input placeholder="Cick Aqui" type="date" class="datepicker" name="compromiso" required>
          <label for="asignacion">Fecha compromiso</label>
        </div>       
      </div>
      <div class= "row">
       <div class="input-field col s5">
          <input placeholder="Click Aqui" type="date" class="datepicker" name="cierre" required>
          <label for="asignacion">Fecha cierre</label>
        </div> 
           </div> 
             <div class= "row">
         <div class="input-field col s5">
          <textarea placeholder="Ingrese Observaciones" id="obs" class="materialize-textarea" name="obs" required></textarea>
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
<!-- Inicio footer -->
<?php require_once 'footer.php';?>
<!-- Final footer -->
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