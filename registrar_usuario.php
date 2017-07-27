<?php 
$id="";
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$Identificacion=$_POST['Identificacion'];
$Direccion=$_POST['Direccion'];
$contrasena=$_POST['contrasena'];
$con_contrasena=$_POST['con_contrasena'];


 if ($contrasena!=$con_contrasena) {
   $alerta= "<div class='alert alter-danger'role='alert'>las contraseñas no coinciden</div>"
  
 }else{
     include("config.ini.php");

     $id dechex($id);
     $contrasena=md5($contrasena);
     $con_contrasena=md5($con_contrasena);

    $registro=mysqli_query($conexion,"INSERT INTO usuario(id,nombre,apellido,Identificacion,Direccion,contrasena,con_contrasena)
    	VALUES('$id','$nombre','$apellido','$Identificacion','$Direccion','$contrasena','$con_contrasena')")or die(mysqli_error($consulta));

    if ($registro) {
    	$alerta= "<div class='alert alter-susses'role='alert'>se registro correctamente</div>"
    }else{
    	$alerta= "<div class='alert alter-danger'role='alert'>no se regitro</div>"
    }
 }
$smarty->assign("alerta,$alerta");
$smarty->display("header.tpl");
 ?>