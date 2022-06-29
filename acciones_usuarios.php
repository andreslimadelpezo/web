<?php
require_once("Usuarios.php");
$Usuarios=new Usuarios();
$datos=$_REQUEST; //CAPTURA DATOS DEL FORMULARIO
//print_r($Datos);
if(empty($datos['usu_id'])){
	$Usuarios->create($datos['usu_nombres'],
						$datos['usu_apellidos'],
					 $datos['usu_edad'],
					 $datos['usu_ciudad'],
					 $datos['usu_cedula'],
					 $datos['usu_genero']);
}else{
	IF(isset($datos['usu_nombres'])){


$Usuarios->update($datos['usu_nombres'],
						$datos['usu_apellidos'],
					 $datos['usu_edad'],
					 $datos['usu_ciudad'],
					 $datos['usu_cedula'],
					 $datos['usu_genero'],$datos['usu_id']);
}else{
	$Usuarios->DELETE($datos['usu_id']);
}
}


//redireccion de archivo php
header('Location:http://localhost/web/lista_Usuarios.php');

?>
