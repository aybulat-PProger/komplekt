<?php
	require_once("database.php");
	require_once("models/objects.php");

	$link = db_connect();

	if(isset($_GET['action']))
	{
		$action = $_GET['action'];
		$id = $_GET['id'];
	}
	else 
		$action = "";

	if($action == "getobj"){
		$object = object_get($link, $id);
		include("views/object.php");
	}
?>