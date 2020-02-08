<?php
$country=mb_strtolower(geoip_country_code_by_name($_SERVER['REMOTE_ADDR']));
$langs=array_diff(scandir($_SERVER['DOCUMENT_ROOT'].'/lang/'),array('.','..'));
if((in_array($country,$langs))&&(!$_SESSION['language'])){//Получает от странны
	$language=$country;
}elseif(!$_SESSION['language']){//Получаем по умолчанию
	$language=$setting['language_default'];
}else{
	$language=$_SESSION['language'];
}
include_once "$_SERVER[DOCUMENT_ROOT]/lang/$language/default.php";