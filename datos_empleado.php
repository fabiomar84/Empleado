<html>
	<head>
		<title>
			SALARIO DEL EMPLEADO
		</title>
	</head>
	<body>
		<h1>CALCULO SALARIO FINAL DEL EMPLEADO</h1>

		<form name="pop" action="empleado_planta.php" method='post'>
			
			IDENTIFICACCION: <input type="text" name="id_empleado">
			<br>
			NOMBRE: <input type="text" name="nombre_empleado">
			<br>
			CARGO: <input type="text" name="cargo_empleado">
			<br>
			SUELDO BASICO: <input type="text" name="sueldo_basico">
			<br>
			VALOR EXTRAS: <input type="text" name="valor_extras">
			<br>
			DEDUCCIONES: <input type="text" name="total_deducciones">
			<br><br>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>