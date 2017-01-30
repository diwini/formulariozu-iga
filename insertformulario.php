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

if ($asesoria == "on"){
	$asesoria = 1;
}
else {
	$asesoria = 0;
}

if ($iva == "on"){
	$iva = 1;
}
else {
	$iva = 0;
}

if ($remuneracion == "on"){
	$remuneracion = 1;
}
else {
	$remuneracion = 0;
}

if ($balance == "on"){
	$balance = 1;
}
else {
	$balance = 0;
}

if ($renta == "on"){
	$renta = 1;
}
else {
	$renta = 0;
}

if ($auditoria == "on"){
	$auditoria = 1;
}
else {
	$auditoria = 0;
}

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
	echo "<br>";
	echo $nombrecontacto;
}	
	header('Location: formulario.php');

	