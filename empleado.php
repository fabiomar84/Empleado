<?php

class empleado
{
	protected $cargo;
	protected $identificacion;
	protected $nombre;
	protected $salario;

	public function empleado($cargo,$identificacion,$nombre)
		{
		$this->cargo=$cargo;
		$this->identificacion=$identificacion;
		$this->nombre=$nombre;
		
		
		}

	public function getCargo()
	{
	return $this->cargo;
	}
	public function setCargo($valor)
	{
	$this->cargo = $valor;
	}
	public function getIdentificacion()
	{
	return $this->identificacion;
	}
	protected function setIdentificacion($valor)
	{
	$this->identificacion = $valor;
	}
	protected function getNombre()
	{
	return $this->nombre;
	}
	protected function setNombre($valor)
	{
	$this->nombre = $valor;
	}
	protected function getSalario()
	{
	return $this->salario;
	}
	protected function setSalario($valor)
	{
	$this->salario = $valor;
	}
}
?>