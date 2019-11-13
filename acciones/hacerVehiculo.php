<?php
	include "AccesoDatos.php";

	$miSegundoObjeto = new stdClass();
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$horaIngreso = mktime(); 	

	$miSegundoObjeto->patente = $_GET['inputPatente'];
	$miSegundoObjeto->horaIngreso = $horaIngreso;

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
?>