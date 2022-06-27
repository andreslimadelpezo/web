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
	<title>Lista de estudiantes lima</title>
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
			background-color:#23B0CC;
			color:#fff;
			font-family:Britannic Bold;
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
		.nuevo{
			background:#23B0CC;
			color:#fff; 
			padding:5px;
			border-radius:5px;
			box-shadow:5px 5px 10px black;
			font-size:15px;
			text-decoration:none;
 
		}

	</style>
</head>
<body>
	<h1><center>Lista Estudiantes Lima Diego</center></h1>
	<a class="nuevo" href ='formulario_estudiantes.php'> Nuevo estudiante</a>
	<table align="center">
		
		 <tr> 
			<th>N</th>
			<th>NOMBRES	</th>
			<th>APELLIDOS</th>
			<th>EDAD</th>
			<th>CIUDAD</th>
			<th>CEDULA</th>
			<th>GENERO</th>
			<th>ACCIONES</th>

		</tr>

  	<?php
  	$x=0;
  	foreach($consulta as $c){
  			$x++;
  	echo "<tr>
  			<td>$x</td>
  			<td>{$c['est_nombres']}</td>
  			<td>{$c['est_apellidos']}</td>
  			<td>{$c['est_edad']}</td>
  			<td>{$c['est_ciudad']}</td>
  			<td>{$c['est_cedula']}</td>
  			<td>{$c['est_genero']}</td>
  			<td>
  			 <a href='formulario_estudiantes.php?est_id={$c["est_id"]}'>
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