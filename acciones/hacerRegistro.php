<?php
	include "AccesoDatos.php";

	$miObjeto = new stdClass();
	$miObjeto->usuario = $_GET['inputUsuario'];
	$miObjeto->password = $_GET['inputPassword'];
	$miObjeto->perfil = $_GET['perfilRegistro'];


	$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
	$consulta =$objetoAccesoDato->RetornarConsulta("select * from usuario");
	$consulta->execute();			
	$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);		
	
	foreach ($datos as $usuario ) 
	{
		if ($usuario['usuario'] == $miObjeto->usuario) 
		{	
			header("Location: ../paginas/registro.php?usuariorepetido=falla");
			exit();
		}			
	}

	$select="INSERT INTO usuario (user, clave, perfil) VALUES ('$miObjeto->usuario','$miObjeto->password','$miObjeto->perfil')";
	$consulta =$objetoAccesoDato->RetornarConsulta($select);
	$consulta->execute();

	header("Location: ../paginas/registro.php?exito=exito");
?> 