<?php
require_once('Conection.php');//importar
	class Estudiantes extends Conection{

		function listar_estudiantes(){
		$resultado=$this->con->query('SELECT * FROM estudiantes');
		return $resultado->fetch_all(MYSQLI_ASSOC);//
	 }

}

?>