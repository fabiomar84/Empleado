<?php

class planta extends empleado
{
private $deducciones;
private $sueldoBasico;
private $valorExtras;

public function planta($identificacion,$nombre,$cargo)
{
	$this->identificacion=$identificacion;
	$this->nombre=$nombre;
	$this->cargo=$cargo;
}
public function calcularSalario()
{
$this->salario=$this->sueldoBasico + $this->valorExtras -$this->deducciones;
}
public function getDeducciones()
{
return $this->deducciones;
}
public function setDeducciones($valor)
{
$this->deducciones = $valor;
}
public function getSueldoBasico()
{
return $this->sueldoBasico;
}
public function setSueldoBasico($valor)
{
$this->sueldoBasico = $valor;
}
public function getValorExtras()
{
return $this->valorExtras;
}
public function setValorExtras($valor)
{
$this->valorExtras = $valor;
}
public function getCargo()
{
return $this->cargo;
}
public function getIdentificacion()
{
return $this->identificacion;
}
public function getNombre()
{
return $this->nombre;
}
public function getSalario()
{
return $this->salario;
}
}
?>