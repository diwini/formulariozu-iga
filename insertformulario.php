<?php
$nombrecontacto = $_POST['cliente'];
$nombreempresa = $_POST['empresa'];
$requerimiento = $_POST['requerimiento'];
$asignacion = $_POST['asignacion'];
$fecharecepcion = strtotime( $_POST['recepcion']);
$fechacompromiso = strtotime($_POST['compromiso']);
$fechacierre = strtotime($_POST['cierre']);
$observacion = $_POST['obs'];
$rut = $_POST['rut'];
$asesoria = $_POST['ase'];
$iva = $_POST['iva'];
$remuneracion = $_POST['rem'];
$balance = $_POST['bala'];
$renta = $_POST['rent'];
$auditoria = $_POST['audi'];

require_once dirname(__FILE__).'/conexionlocal.php';



$query = "INSERT INTO ingresodatos

VALUES (null,
'$nombrecontacto',
'$nombreempresa',
'$requerimiento',
'$fecharecepcion',
'$fechacompromiso',
'$asignacion',
'$fechacierre',
0,
'$observacion',
'$rut',
'$asesoria',
'$iva',
'$remuneracion',
'$balance',
'$renta',
'$auditoria')";

$result = mysql_query($query);
if ($result){
	echo 'Se inserto correctamente';
}

