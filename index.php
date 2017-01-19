<?php

/*
 * Funcion recibe el id de un evento para eliminarlo de la base de datos, retorna
* 1 si success o 0 si fail
*/
require_once dirname(__FILE__).'/conexionlocal.php';
	$query = "SELECT * FROM ingresodatos";
	$result = mysql_query($query);

	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
	{
		echo $row['nombrecontacto'];
		echo "<br>";
		echo $row['nombreempresa'];
	}
	echo " funciono";
	mysql_close($con);
?>