<?php 
include "AccesoDatos.php";

$usuarioAEliminar = $_POST['eliminar'];

$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
$delete = "DELETE FROM usuario WHERE nombre = '$usuarioAEliminar'";
$borrar = $objetoAccesoDato->RetornarConsulta($delete);
$borrar->execute();			

header ("Location: ../paginas/listarUsuarios.php?eliminar=exito");

 ?>