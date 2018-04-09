<?php
require_once("../database.php");
require_once("../models/objects.php");

$link = db_connect();

if(isset($_GET['action']))
{
	$action = $_GET['action'];
	if(isset($_GET['id']))$id = $_GET['id'];
	if(isset($_GET['img']))$img = $_GET['img'];
}
else 
	$action = "";

if($action == "edit"){
	$object = object_get($link, $id);
	include("../views/objects_edit.php");

}
else if($action == "remove_img")
{
	$result = remove_img($link, $id, $img);
	$object = object_get($link, $id);
	echo $result;
	include("../views/objects_edit.php");
}
else if($action == "remove"){
	remove($link, $id);
	$objects = objects_all($link);
	include("../views/objects_admin.php");

}
else if($action == "add")
{
	include("../views/objects_add.php");
}
else
{
	$objects = objects_all($link);
	include("../views/objects_admin.php");
}
