<?php
require_once "Conexion.php";

class Registros
{
	private $conn;
	function __construct()
	{
		$this->conn = new Conexion();
        return $this->conn;
	}

	function Duplicado($nombre,$apellidos,$dni,$institucion)
	{
		$sql = "SELECT idpersonal FROM personal WHERE nombre = '$nombre' AND apellidos = '$apellidos' AND dni = '$dni' AND institucion = '$institucion' LIMIT 1;";
		$data = $this->conn->ConsultaArray($sql);
		return $data;
	}

	function Guardar($nombre,$apellidos,$dni,$institucion,$provincia,$distrito)
	{
		$sql = "INSERT INTO personal VALUES (null,'$nombre','$apellidos','$dni','$institucion','$provincia','$distrito');";
		$this->conn->ConsultaSin($sql);

		$sql2 = "SELECT idpersonal FROM personal ORDER BY idpersonal DESC LIMIT 1;";
		$res = $this->conn->ConsultaArray($sql2);
		return $res;
	}

	function GuardarLogin($idpersonal,$dni,$pass)
	{
		$fecha = date('Y-m-d H:i:s');
		$sql = "INSERT INTO login VALUES (null,'$dni','$pass',2,1,'$idpersonal','$fecha');";
		$this->conn->ConsultaSin($sql);
	}
}
