<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/libs/Smarty.class.php');
$smarty = new Smarty;
include_once ($_SERVER['DOCUMENT_ROOT'].'/settings/settings.php');
include_once ( $_SERVER['DOCUMENT_ROOT'].'/classes/front_app.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/includes/include_lang.php');
spl_autoload_register(function ($class_name) {
   include "classes/$class_name.php";
});
