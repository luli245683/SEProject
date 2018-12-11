<?php

require_once("includes/init.php"); 
require_once("includes/lib_administrator.php");

$_SESSION["active_page"]='home_queue';


if(empty($_POST["act"])){
	/*$smarty->assign("PatientInfo",get_patient_info());
	$smarty->assign('CurrentMedication',get_current_medication());
	$smarty->assign('OrderDrugs',get_order_drug());*/
	$smarty->display('home_queue.tpl');


}

?>