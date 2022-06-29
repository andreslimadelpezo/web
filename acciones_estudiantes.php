<?php
require_once("Estudiantes.php");
$Estudiantes=new Estudiantes();
$datos=$_REQUEST; //CAPTURA DATOS DEL FORMULARIO
//print_r($Datos);
if(empty($datos['est_id'])){
	$Estudiantes->create($datos['est_nombres'],
						$datos['est_apellidos'],
					 $datos['est_edad'],
					 $datos['est_ciudad'],
					 $datos['est_cedula'],
					 $datos['est_genero']);
}else{

		IF(isset($datos['est_nombres'])){

$Estudiantes->update($datos['est_nombres'],
						$datos['est_apellidos'],
					 $datos['est_edad'],
					 $datos['est_ciudad'],
					 $datos['est_cedula'],
					 $datos['est_genero'],$datos['est_id']);
  }else{
  	$Estudiantes->DELETE($datos['est_id']);
  }
}


//redireccion de archivo php
header('Location:http://localhost/web/lista_estudiantes.php');

?>
