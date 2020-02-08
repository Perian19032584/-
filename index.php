<?php
error_reporting(0);
include ( $_SERVER['DOCUMENT_ROOT'].'/includes/autoload.php');
$front_app = new front_app;
$controller=$_GET['controller'];
if($controller){
	$check_include = include_once "controller/$controller.php";
    if($check_include == false){
        //$front_app->error404();
    }
}
//require_once  ( $_SERVER['DOCUMENT_ROOT'].'/view/index.php');
?>