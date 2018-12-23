<?php

require_once("includes/init.php"); 
require_once("includes/lib_administrator.php");
$_SESSION["active_page"]='edit_account';


if(empty($_GET["act"])){
	/*$smarty->assign("PatientInfo",get_patient_info());
	$smarty->assign('CurrentMedication',get_current_medication());
	$smarty->assign('OrderDrugs',get_order_drug());*/
	$account_info=get_account_info();
	$smarty->assign('list',$account_info);

	$smarty->display('edit_account.tpl');
}
if($_GET["act"]=='change'){
	echo info_change($_GET['account_info']);
}

?>