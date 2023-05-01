<?php
require_once "../models/registro.model.php";

if(isset($_REQUEST['btnGuardar']))
{
	$nombre      = trim(strtoupper($_REQUEST['nombre']));
	$apellidos   = trim(strtoupper($_REQUEST['apellidos']));
	$dni         = trim($_REQUEST['dni']);
	$institucion = trim(strtoupper($_REQUEST['institucion']));
	$email       = trim(strtoupper($_REQUEST['email']));
	$distrito    = trim(strtoupper($_REQUEST['distrito']));
	$pass1       = trim(strtolower($_REQUEST['pass1']));
	$pass2       = trim(strtolower($_REQUEST['pass2']));

	if($pass1 == $pass2)
	{
		#echo "Claves iguales";
		$registros = new Registros();
		$res1 = $registros->Duplicado($nombre,$apellidos,$dni,$institucion);

		if(!is_null($res1))
		{
			#echo "Duplicado";
			header("Location: ../mensaje.php?r=3");
		}else{
			#echo "Ninguno, Registra todo";
			$res2 = $registros->Guardar($nombre,$apellidos,$dni,$institucion,$provincia,$distrito);
			$idpersonal = $res2['idpersonal'];
			$registros->GuardarLogin($idpersonal,$dni,$pass1);
			header("Location: ../mensaje.php?r=1");
		}


	}else{
		#echo "Las contraseñas no son iguales";
		header("Location: ../mensaje.php?r=2");
	}
}else{
	header("Location: ../index.html");
}



