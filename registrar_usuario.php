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
   $smarty->assign("alerta,$alerta");
 }

$smarty->display("header.tpl");
 ?>