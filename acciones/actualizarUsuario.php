<?php 
include "AccesoDatos.php";

if (isset($_POST['habilitar'])) {
	$usuarioAModificar = $_POST['habilitar'];

	$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
	$update = "UPDATE usuario SET estado = 'Habilitado' WHERE idUsuario = '$usuarioAModificar'";
	
	$modificar = $objetoAccesoDato->RetornarConsulta($update);
	$modificar->execute();

	header ("Location: ../paginas/listarUsuarios.php?actualizar=exito");
}
elseif (isset($_POST['deshabilitar'])) 
{
	$usuarioAModificar = $_POST['deshabilitar'];

	$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
	$update = "UPDATE usuario SET estado = 'Deshabilitado' WHERE idUsuario = '$usuarioAModificar'";

	$modificar = $objetoAccesoDato->RetornarConsulta($update);
	$modificar->execute();

	header ("Location: ../paginas/listarUsuarios.php?actualizar=exito");
}


?>