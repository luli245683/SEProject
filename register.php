<?php
$is_login_page = true;
require_once("includes/init.php"); 
require_once("includes/lib_system.php");
if(empty($_GET["act"])){
	$smarty->assign('county_list' , get_country_list());

	$smarty->display('register.tpl');
}
if($_GET["act"]=='get_region'){
	echo json_encode(get_region_list($_GET['CountyCode']));
}
if($_GET["act"]=='register'){
	echo user_registration($_GET['register_info']);
}


?>