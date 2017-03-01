<?php 
function get_cliente_data(){
	
	$query = "SELECT * FROM ingresodatos";
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
					echo "<td><i class='large material-icons'>done</i></td>";
				}else{
					echo "<td><i class='large material-icons'>not_interested</i></td>";
				}
				echo "<td>".$row['observacion']."</td>";
				echo "<td>".$row['rut']."</td>";
				if($row['asesoria'] == 1){
					echo "<td><i class='large material-icons'>done</i></td>";
				}else{
					echo "<td><i class='large material-icons'>not_interested</i></td>";
				}
				if($row['iva'] == 1){
					echo "<td><i class='large material-icons'>done</i></td>";
				}else{
					echo "<td><i class='large material-icons'>not_interested</i></td>";
				}
				if($row['remun'] == 1){
					echo "<td><i class='large material-icons'>done</i></td>";
				}else{
					echo "<td><i class='large material-icons'>not_interested</i></td>";
				}
				if($row['balance'] == 1){
					echo "<td><i class='large material-icons'>done</i></td>";
				}else{
					echo "<td><i class='large material-icons'>not_interested</i></td>";
				}if($row['renta'] == 1){
					echo "<td><i class='large material-icons'>done</i></td>";
				}else{
					echo "<td><i class='large material-icons'>not_interested</i></td>";
				}
				if($row['auditoria'] == 1){
					echo "<td><i class='large material-icons'>done</i></td>";
				}else{
					echo "<td><i class='large material-icons'>not_interested</i></td>";
				}
				echo "</tr>";
			}
		mysql_close($con);
}
?>