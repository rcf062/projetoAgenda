<?php 
	if($_GET)
	{
		$controle = $_GET["controle"];
		$metodo = $_GET["metodo"];
		require_once "Controllers/". $controle . ".class.php";
		$obj = new $controle();
		$obj->$metodo();
	}
	else
	{
		require_once "Controllers/contatoControl.class.php";
		$obj = new contatoControl();
		$obj->mostrar();
	}
?>