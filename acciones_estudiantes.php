<?php
require_once("Estudiantes.php");
$Estudiantes=new Estudiantes();
$datos=$_REQUEST; //CAPTURA DATOS DEL FORMULARIO
//print_r($Datos);
$Estudiantes->create($datos['est_nombres'],
				     $datos['est_apellidos'],
					 $datos['est_edad'],
					 $datos['est_ciudad'],
					 $datos['est_cedula'],
					 $datos['est_genero']);

//redireccion de archivo php
header('Location:http://localhost/web/lista_estudiantes.php');
exit();
?>
