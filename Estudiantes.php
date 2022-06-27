<?php
require_once('Conection.php');//importar
	class Estudiantes extends Conection{

		function listar_estudiantes(){
		$resultado=$this->con->query('SELECT * FROM estudiantes order by est_apellidos');
		return $resultado->fetch_all(MYSQLI_ASSOC);//
	 }

	 	function create($est_nombres,$est_apellidos,$est_edad,$est_ciudad,$est_cedula,$est_genero){
	 		$this->con->query("INSERT INTO estudiantes (est_nombres,
	 													est_apellidos,
	 													est_edad,
	 													est_ciudad,
	 													est_cedula,
	 													est_genero)
	 							VALUES('$est_nombres',
	 									'$est_apellidos',
	 									'$est_edad',
	 									'$est_ciudad',
	 									'$est_cedula',
	 									'$est_genero')
	 					");








	 	}
      function edit($est_id){
             $resultado=$this->con->query("SELECT * FROM estudiantes WHERE est_id=$est_id "); 
             return $resultado->fetch_all(MYSQLI_ASSOC)[0];
      }
    }


?>