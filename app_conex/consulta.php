<?php
include('conexion.php');
$nomUsuario = $_GET['nomUsuario'];
$sal = "@fgz%";
$contra = md5($_GET['contra'].$sal);
$info = $login->consultarInfo($nomUsuario, $contra);
/*$userData = array();*/
/*var_dump($info);*/
while($row=$info->fetch(PDO::FETCH_NUM)){
	//echo $row;
	echo json_encode($row);
	/*$userData[] = $row;*/
}

?>


