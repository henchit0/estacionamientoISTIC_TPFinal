<?php 
session_start();

$_SESSION['idDeUsuario'] = NULL;
$_SESSION['perfil'] = NULL;
$_SESSION['horaIngreso'] = NULL;

session_destroy();

header("Location: ../index.php");


