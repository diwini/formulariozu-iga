<?php 
function get_cliente_data($con, $select = null, $input = null){
	if($select = 1){
		$query = "SELECT * FROM ingresodatos WHERE nombrecontacto LIKE '%$input%'";
	}
	elseif($select = 2){
		$query = "SELECT * FROM ingresodatos WHERE nombreempresa LIKE '%$input%'";
	}
	elseif($select = 3){
		$query = "SELECT * FROM ingresodatos WHERE requerimiento LIKE '%$input%'";
	}
	elseif($select = 4){
		$query = "SELECT * FROM ingresodatos WHERE asignacion LIKE '%$input%'";
	}
	elseif($select = 8){
		$query = "SELECT * FROM ingresodatos WHERE observacion LIKE '%$input%'";
	}
	elseif($select = 9){
		$query = "SELECT * FROM ingresodatos WHERE rut LIKE '%$input%'";
	}else{
	$query = "SELECT * FROM ingresodatos";
	}
		$result = mysql_query($query);
	
		while($row = mysql_fetch_array($result, MYSQL_ASSOC))
			{
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['nombrecontacto']."</td>";
				echo "<td>".$row['nombreempresa']."</td>";
				echo "<td>".$row['requerimiento']."</td>";
				echo "<td>".$row['fecharecepcion']."</td>";
				echo "<td>".$row['fechacompromiso']."</td>";
				echo "<td>".$row['asignacion']."</td>";
				echo "<td>".$row['fechacierre']."</td>";
				if($row['estadotarea'] == 1){
					echo "<td><i class='small material-icons'>done</i></td>";
				}else{
					echo "<td><i class='small material-icons'>not_interested</i></td>";
				}
				echo "<td>".$row['observacion']."</td>";
				echo "<td>".$row['rut']."</td>";
				if($row['asesoria'] == 1){
					echo "<td><i class='small material-icons'>done</i></td>";
				}else{
					echo "<td><i class='small material-icons'>not_interested</i></td>";
				}
				if($row['iva'] == 1){
					echo "<td><i class='small material-icons'>done</i></td>";
				}else{
					echo "<td><i class='small material-icons'>not_interested</i></td>";
				}
				if($row['remun'] == 1){
					echo "<td><i class='small material-icons'>done</i></td>";
				}else{
					echo "<td><i class='small material-icons'>not_interested</i></td>";
				}
				if($row['balance'] == 1){
					echo "<td><i class='small material-icons'>done</i></td>";
				}else{
					echo "<td><i class='small material-icons'>not_interested</i></td>";
				}if($row['renta'] == 1){
					echo "<td><i class='small material-icons'>done</i></td>";
				}else{
					echo "<td><i class='small material-icons'>not_interested</i></td>";
				}
				if($row['auditoria'] == 1){
					echo "<td><i class='small material-icons'>done</i></td>";
				}else{
					echo "<td><i class='small material-icons'>not_interested</i></td>";
				}
				echo "</tr>";
			}
		mysql_close($con);
}
?>