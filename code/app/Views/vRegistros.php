<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
</head>
<body>
	<br>
	<div class="container">
		<h1><center>Registros actuales</center></h1>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Correo</th>
					<th>Contraseña</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Rol</th>
					<th>Estatus</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($usuarios as $usuario){?>
				<tr>
					 <td><?php echo $usuario['id_usuario']; ?></td>
					 <td><?php echo $usuario['correo']; ?></td>
					 <td><?php echo $usuario['contra']; ?></td>
					 <td><?php echo $usuario['nombre']; ?></td>
					 <td><?php echo $usuario['apellido']; ?></td>
					 <td><?php echo $usuario['rol']; ?></td>
					 <td><?php echo $usuario['estatus']; ?></td>
				</tr>
				<?php }?>
			</tbody>
		</table>
	</div>

	<br/><br/>
</body>
<footer>
	<br>
	<div class="text-center text-dark p-3" style="background-color: rgba(0,0,0,0.2);">
		<i class="bi bi-badge-cc"></i> 2022:
		<a class="text-dark" href="<?php echo base_url();?> /HOME/bienvenida">Home</a>
	</div>
</footer>
</html>