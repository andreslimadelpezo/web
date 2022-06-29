<?php
require_once("Usuarios.php");
$usuarios=new Usuarios();

if(isset($_GET['usu_id'])){
    $datos=$usuarios->edit( $_GET['usu_id'] );
}else{
    $datos['usu_id']=NULL;
    $datos['usu_nombres']=NULL;
    $datos['usu_apellidos']=NULL;
    $datos['usu_edad']=NULL;
    $datos['usu_ciudad']=NULL;
    $datos['usu_apellidos']=NULL;
    $datos['usu_cedula']=NULL;
    $datos['usu_genero']=NULL;




}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width-device-width,initial-scale-1.0">
    <title>Formulario Usuarios</title>
    <style>
        .contenedores{
            margin-top:5px;
            margin-left:100px;


        }
        label{
            width:100px;
            float:left;
            font-family:Bodoni MT ;
            font-size:16px;
            border:solid 1px #ccc;

        }
    </style>
</head>
<body>
    <h1>Formulario</h1>
    <form action='acciones_usuarios.php' method='POST'>
            <input type="hidden" id="usu_id" name="usu_id" value="<?php echo $datos['usu_id']?>">
    <form action="" method="POST">
        <div class="contenedores">
        <label for="usu_nombres">Nombres</label>
        <input type="text" name="usu_nombres" id="usu_nombres"  value="<?php echo $datos['usu_nombres'] ?>">
        </div>
        
        <div class="contenedores" >
        <label for="usu_apellidos">Apellidos</label>
        <input type="text" name="usu_apellidos" id="usu_apellidos" value="<?php echo $datos['usu_apellidos'] ?>" >
        </div>
        
        <div class="contenedores">
        <label for="usu_edad">Edad</label>
        <input type="text" name="usu_edad" id="usu_edad" value="<?php echo $datos['usu_edad'] ?>">
        </div>

        <div class="contenedores">
        <label for="usu_ciudad">Ciudad</label>
        <input type="text" name="usu_ciudad" id="usu_ciudad" value="<?php echo $datos['usu_ciudad'] ?>">
        </div>

        <div class="contenedores">
        <label for="usu_cedula">Cédula</label>
        <input type="text" name="usu_cedula" id="usu_cedula" value="<?php echo $datos['usu_cedula'] ?>">
        </div>

        <div class="contenedores">
        <label for="usu_genero">Género</label>
        <input type="text" name="usu_genero" id="usu_genero" value="<?php echo $datos['usu_genero'] ?>">
     </div>
     <div class="contenedores">
          <button>Guardar</button>
     </div>
    </form>
    
</body>
</html>