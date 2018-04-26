<?php 
include ('conexion.php');
$sal = "@fgz%";
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$email = $_GET['email'];
$contra = md5($_GET['contra'].$sal);
$nomUsuario = $_GET['nomUsuario'];
$login->insertarUsuario($nombre, $apellidos, $email, $contra, $nomUsuario);
 ?>