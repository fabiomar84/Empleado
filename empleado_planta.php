<?php
include ('empleado.php');
include "planta.php";
echo "Calcular Salario Empleado";
echo "<br>";

$identificacion=$_POST['id_empleado'];
$nombre=		$_POST['nombre_empleado'];
$cargo =		$_POST['total_deducciones'];
$SueldoBasico = $_POST['sueldo_basico'];
$valorExtras=	$_POST['valor_extras'];
$deducciones=	$_POST['total_deducciones'];

$objPlanta = new Planta($identificacion,$nombre,$cargo);

$objPlanta->setSueldoBasico($SueldoBasico);
$objPlanta->setValorExtras($valorExtras);
$objPlanta->setDeducciones($deducciones);

echo "<br>id_empleado: " 		. $objPlanta->getIdentificacion();
echo "<br>nombre empleado: " 	. $objPlanta->getNombre();
echo "<br>cargo empleado: " 	. $objPlanta->getCargo();
echo "<br>sueldo basico: $" 	. $objPlanta->getSueldoBasico();
echo "<br>valor extras: $" 		. $objPlanta->getValorExtras();
echo "<br>total deducciones: $" . $objPlanta->getDeducciones();

echo "<br> <br> RESULTADOS <br><br>";

$objPlanta->calcularSalario($SueldoBasico,$valorExtras,$deducciones);

echo "<br>id_empleado: " 			. $objPlanta->getIdentificacion();
echo "<br>nombre empleado: " 		. $objPlanta->getNombre();
echo "<br>cargo empleado: " 		. $objPlanta->getCargo();
echo "<br>SALARIO NETO A RECIBIR: $" . $objPlanta->getSalario();
?>