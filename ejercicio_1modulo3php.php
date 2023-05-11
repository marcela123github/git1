<!DOCTYPE html>
<html>
<head>
	<title>Resultado de Verificación</title>
</head>
<body>
	<h1>Resultado de Verificación</h1>
	<?php
    include 'ejercicio_1modulo3.html';
		$calificacion = $_POST["calificacion"];
		$asistencias = $_POST["asistencias"];
		if ($asistencias >= 80 && $calificacion >= 6) {
			echo "El alumno ha aprobado.";
		} else {
			echo "El alumno ha reprobado.";
		}
	?>
</body>
</html>