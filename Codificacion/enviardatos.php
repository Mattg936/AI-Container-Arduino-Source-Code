<?php
$conexion = mysqli_connect("localhost", "root", "","contenedor"); //yo no tengo contraseña. por eso hay dos comillas vacias ahi. mi tabla se llama Contenedor con c mayuscula. creo que la tuya era con minuscula.
//mysql_select_db("Contenedor", $conexion);
mysqli_query($conexion,"SET NAMES 'utf8'");

$chipid = $_POST ['chipid'];
$distancia = $_POST ['distancia'];
$estado = $_POST ['estado'];

//mysqli_query($conexion,"DELETE FROM `contenedor`.`distancia`");
mysqli_query($conexion,"INSERT INTO `contenedor`.`distancia` (`id`, `chipid`, `fecha`, `distancia`, `estado`) VALUES (NULL, '$chipid', CURRENT_TIMESTAMP, '$distancia', '$estado');");
//mysqli_query("INSERT INTO `contenedor`.`distancia` (`id`, `chipid`, `fecha`, `distancia`) VALUES (NULL, '$chipid', CURRENT_TIMESTAMP, '$distancia');");
mysqli_close($conexion);

echo "Datos ingresados correctamente.";
?>
