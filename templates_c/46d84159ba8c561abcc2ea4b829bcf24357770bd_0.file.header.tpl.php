<?php
/* Smarty version 3.1.30, created on 2017-07-24 05:35:45
  from "C:\xampp\htdocs\PRUEBA\smarty PHP\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59756b112e7978_70456394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46d84159ba8c561abcc2ea4b829bcf24357770bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PRUEBA\\smarty PHP\\templates\\header.tpl',
      1 => 1500867341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59756b112e7978_70456394 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="templates/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="templates/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="templates/css/font-awesome.min.css">
</head>
<body>
<div class="container" style="width: 90% ">
<h1 class="container well">Prueba SMARTY</h1>

<div class="default col-md-9">
<div class="panel panel-primary">
<div class="panel panel-heading"><center><b>Agregar usuario</b></center></div>
<div class="panel.body" width="95%">
	<form name="agregar_usuario" method="post">
		<div class="from-group">
			<div class="input-group">
              <span class="input-group-addon">Nombre</span>
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required> 
			</div>
		</div>
			<div class="from-group">
			<div class="input-group">
              <span class="input-group-addon">Apellido</span>
              <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" required> 
			</div>
		</div>
            <div class="from-group">
			<div class="input-group">
              <span class="input-group-addon">Identificacion</span>
              <input type="number" name="Identificacion" id="Identificacion" class="form-control" placeholder="Identificacion" required> 
			</div>
		</div>
			<div class="from-group">
			<div class="input-group">
              <span class="input-group-addon">Direccion</span>
              <input type="text" name="Direccion" id="Direccion" class="form-control" placeholder="Direccion" required> 
			</div>
		</div>
			<div class="from-group">
			<div class="input-group">
              <span class="input-group-addon">Cotraseña</span>
              <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="contraseña" required> 
			</div>
		</div>
			<div class="from-group">
			<div class="input-group">
              <span class="input-group-addon">Contraseña</span>
              <input type="text" name="con_contrasena" id="con_contrasena" class="form-control" placeholder="contraseña" required> 
			</div>
		</div>
		<center>
			<input type="sumit" name="btn_guardar" value="Guardar" class="btn btn-primary">
			<a href="index.php" class="btn btn-danger">Cancelar</a>
		</center>
	</form>
</div>
</div>
</div>
</div>
</body>
</html><?php }
}
