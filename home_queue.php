<?php

require_once("includes/init.php"); 
require_once("includes/lib_administrator.php");
require_once("includes/lib_system.php");
$_SESSION["active_page"]='home_queue';


if(empty($_GET["act"])){
	$smarty->assign('user_list' ,  get_user_list());
	$smarty->display('home_queue.tpl');

}

if($_GET['act'] == 'update_user_list'){
	$smarty->assign('user_list' ,  get_user_list($_GET['user_id']));
	$smarty->display('home_queue_user_table.tpl');
	//echo template
}


?>