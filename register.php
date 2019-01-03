<?php
$is_login_page = true;
require_once("includes/init.php"); 
require_once("includes/lib_administrator.php");
require_once("includes/lib_common.php");
if(empty($_GET["act"])){
	$smarty->assign('county_list' , get_country_list());
	$smarty->assign('luli' , 'I am LULI!');
	$smarty->display('register.tpl');
}
if($_GET["act"]=='get_region'){
	echo json_encode(get_region_list($_GET['CountyCode']));
}
if($_GET["act"]=='register'){
	echo user_registration($_GET['register_info']);
}
if($_GET["act"]=='check_exist'){
	echo get_user_return_json($_GET['account']);
}

?>