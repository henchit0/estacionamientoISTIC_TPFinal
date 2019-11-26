<?php
	include "AccesoDatos.php";

	$miSegundoObjeto = new stdClass();
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$horaIngreso = mktime(); 	

	$miSegundoObjeto->patente = $_GET['inputPatente'];
	$miSegundoObjeto->horaIngreso = $horaIngreso;

	if (strlen($miSegundoObjeto->patente) == 6) 
	{
		$primerSubStr = substr($miSegundoObjeto->patente, 0,3);
		$segundoSubStr = substr($miSegundoObjeto->patente, 3,3);

		if (ctype_alpha($primerSubStr) && ctype_digit($segundoSubStr)) 
		{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select * from vehiculosestacionados");
			$consulta->execute();			
			$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);		
			
			foreach ($datos as $vehiculo ) 
			{
				if ($vehiculo['patente'] == $miSegundoObjeto->patente) 
				{							
					header("Location: ../paginas/ingresoVehiculo.php?vehiculoestacionado=falla");
					exit();
				}			
			}
			
			$select="INSERT INTO `vehiculosestacionados`(`patente`, `horaIngreso`) VALUES ('$miSegundoObjeto->patente','$miSegundoObjeto->horaIngreso')";
			$consulta =$objetoAccesoDato->RetornarConsulta($select);
			$consulta->execute();
			
			header("Location: ../paginas/ingresoVehiculo.php?exito=exito");
			exit();
		} 
		else
		{
			header("Location: ../paginas/ingresoVehiculo.php?falla=patentenovalida");
			exit();
		}				
	}
	elseif (strlen($miSegundoObjeto->patente) == 7) 
	{
		$primerSubStr = substr($miSegundoObjeto->patente, 0,2);
		$segundoSubStr = substr($miSegundoObjeto->patente, 2,3);
		$tercerSubStr = substr($miSegundoObjeto->patente, 5,2);

		if (ctype_alpha($primerSubStr) &&  ctype_digit($segundoSubStr) && ctype_alpha($tercerSubStr)) 
		{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select * from vehiculosestacionados");
			$consulta->execute();			
			$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);		
			
			foreach ($datos as $vehiculo ) 
			{
				if ($vehiculo['patente'] == $miSegundoObjeto->patente) 
				{	
					// var_dump($vehiculo['patente']);
					// var_dump($miSegundoObjeto->patente);
					// die();
					header("Location: ../paginas/ingresoVehiculo.php?vehiculoestacionado=falla");
					exit();
				}			
			}
			
			$select="INSERT INTO `vehiculosestacionados`(`patente`, `horaIngreso`) VALUES ('$miSegundoObjeto->patente','$miSegundoObjeto->horaIngreso')";
			$consulta =$objetoAccesoDato->RetornarConsulta($select);
			$consulta->execute();
			
			header("Location: ../paginas/ingresoVehiculo.php?exito=exito");
			exit();
		}
		else
		{
			header("Location: ../paginas/ingresoVehiculo.php?falla=patentenovalida");
			exit();
		}
		
	}
	else
	{
		header("Location: ../paginas/ingresoVehiculo.php?falla=patentenovalida");
		exit();
	}


	
?>