<?php
include ('empleado.php');
include "contratista.php";

echo "Calcular Salario Contratista ";
echo "<br>";

$identificacion =		$_POST ['ID_EMPLEADO'];
$nombre =				$_POST['NOMBRE_EMPLEADO'];
$cargo =		 		$_POST['CARGO_EMPLEADO'];
$valorHoraTrabajada =	$_POST['VALOR'];
$totalHorasTrabajadas = $_POST['TOTAL_HORAS_TRABAJADAS'];

$objContratista = new Contratista($identificacion,$nombre,$cargo);

$objContratista->setvalorHora($valorHoraTrabajada);
$objContratista->setTotalHoras($totalHorasTrabajadas);

echo "<br>ID EMPLEADO: " 			. $objContratista->getIdentificacion();
echo "<br>NOMBRE EMPLEADO: " 		. $objContratista->getNombre();
echo "<br>CARGO EMPLEADO: " 		. $objContratista->getCargo();
echo "<br>VALOR DE LA HORA: $" 		. $objContratista->getValorHora();
echo "<br>TOTAL HORAS TRABAJADAS: " . $objContratista->getTotalHoras();
echo "<br> <br> RESULTADOS <br><br>";

$objContratista->calcularSalario($valorHoraTrabajada,$totalHorasTrabajadas);

echo "<br>ID EMPLEADO: " 			. $objContratista->getIdentificacion();
echo "<br>NOMBRE EMPLEADO: " 		. $objContratista->getNombre();
echo "<br>CARGO EMPLEADO " 			. $objContratista->getCargo();
echo "<br>SALARIO FINAL A RECIBIR: ". $objContratista->getSalario();
?>