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
        <?php get_cliente_data($con); ?>
        <!-- Funcion trae data de la tabla -->
        </tbody>
      </table>
<!-- Fin Contenido -->
<!-- Inicio footer -->
<?php require_once 'footer.php';?>
<!-- Final footer -->