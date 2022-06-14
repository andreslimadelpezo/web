<?php
require_once('estudiantes.php');
$Estudiantes=new Estudiantes();//INSTANCIAR
$consulta=$Estudiantes->listar_estudiantes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de estudiantes</title>
	<style >
		th{
			padding:3px	;
			background:black;
			color:white;
		}
		td{
			padding:3px	;
			border:solid 1px #696969;
		}
		table{
			width:80%;
			border-collapse:collapse;
		}
	
		
		img{
			width:20px;
		}
		h1{
			background:#23B0CC;
			color:#fff;
			padding:3px	;
			border-radius:8px;
			box-shadow:5px 5px 10px black;
			font-size:40px;
			font-family:Britannic Bold;
			text-align:center; 
		}
		.volver{
			background:#23B0CC;
			color:#fff; 
			padding:8px;
			border-radius:8px;
			box-shadow:5px 5px 10px black;
			font-size:20px;
			text-decoration:none;
			


		}

	</style>
</head>
<body>
	<h1><center>Lista Estudiantes</center></h1>
	<table align="center">
		
		 <tr> 
			<th>N</th>
			<th>NOMBRES	</th>
			<th>APELLIDOS</th>
			<th>EDAD</th>
			<th>ENFERMADAD</th>
			<th>ACCIONES</th>

		</tr>

  	<?php
  	$x=0;
  	foreach($consulta as $c){
  			$x++;
  	echo "<tr>
  			<td>$x</td>
  			<td>{$c['est_nombre']}</td>
  			<td>{$c['est_apellido']}</td>
  			<td>{$c['est_edad']}</td>
  			<td>{$c['est_enfermedad']}</td>
  			<td>
  			 <a href=''>
  					<img src='edit.png'/>
  					</a>
  				<a href=''>
  				<img src='delete.png'/>
  			  	</a>
  			</td>
  		</tr>";	
  }
   ?>	
	</table>
</body>
<a class="volver" href="index.php">Volver</a>
</html>
