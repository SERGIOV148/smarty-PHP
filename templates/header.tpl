<!DOCTYPE html>
<html>
<head>
	<title>{$titulo}</title>
	<link rel="stylesheet" type="text/css" href="templates/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="templates/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="templates/css/font-awesome.min.css">
</head>
<body>
<div class="container" style="width: 90% ">
<h1 class="container well">PRUEBA SMARTY</h1>

<div class="default col-md-9">
<div class="panel panel-danger">
<div class="panel panel-heading"><center><b>Agregar usuario</b></center></div>
<div class="panel.body" width="95%">
	<form name="agregar_usuario" method="post">

	{$alerta}
		<div class="from-group">
			<div class="input-group">
              <span class="input-group-addon">Nombre</span>
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" value="{$smarty.post.nombre}" required="nombre"> 
			</div>
		</div>
			<div class="from-group">
			<div class="input-group">
              <span class="input-group-addon">Apellido</span>
              <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" value="{$smarty.post.apellido}"  required="apellido">
			</div>
		</div>
            <div class="from-group">
			<div class="input-group">
              <span class="input-group-addon">Identificacion</span>
              <input type="number" name="Identificacion" id="Identificacion" class="form-control" placeholder="Identificacion" value="{$Identificacion}" required="Identificacion"> 
			</div>
		</div>
			<div class="from-group">
			<div class="input-group">
              <span class="input-group-addon">Direccion</span>
              <input type="text" name="Direccion" id="Direccion" class="form-control" placeholder="Direccion" value="{$smarty.post.Direccion}" required="Direccion"> 
			</div>
		</div>
			<div class="from-group">
			<div class="input-group">
              <span class="input-group-addon">Cotraseña</span>
              <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="contraseña" required="contrasena"> 
			</div>
		</div>
			<div class="from-group">
			<div class="input-group">
              <span class="input-group-addon">Repetir Contraseña</span>
              <input type="text" name="con_contrasena" id="con_contrasena" class="form-control" placeholder="Repetir contraseña" required="con_contrasena"> 
			</div>
		</div>
		<center>
			<input type="sumit" name="btn_guardar" value="Guardar" class="btn btn-danger">
			<a href="index.php" class="btn btn-danger">Cancelar</a><
		</center>
	</form>
</div>
</div>
</div>
</div>
<tr>
	<td>id</td>
	<td>Nombre</td>
	<td>Apellido</td>
	<td>Identificacion</td>
	<td>Direccion</td>


</tr>

</body>
</html>