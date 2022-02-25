<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
</head>
<body background="fondo1.jpg" width="100%" height="100%">
	<br><br><br>
	<h1><center>Registro</center></h1>
	<h2><center>¡¡Bienvenido!!</center></h2>
	<h3><center>Ingrese correctamente sus datos</center></h3>
	<form method="POST" action="../Home/insertarForm">
		<div>	
		<center>Nombre: <input required type="text" name="nombre" id="nombre"></center>
		<br>
		<center>Apellido: <input required type="text" name="apellido" id="apellido"></center>
		<br>
		<center>Correo: <input required type="text" name="correo" id="correo"></center>
		<br>
		<center>Rol: <select name="rol" id="rol" >
        <option value="0">Lector</option>
        <option value="1">Escritor de reseñas</option>
        <option value="2">Critico</option>
    </select></center>
		<center>Contraseña: <input required type="text" name="contra" id="contra"></center>
		<br>
		<center><input type="submit" name="enviar" value="Registrar"></center>
	</form>
	</div>
	<br/><br/>
</body>
</html>
