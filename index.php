<?php

require_once("includes/init.php"); 


$_SESSION["active_page"]='index';


if(empty($_POST["act"])){

	/*$smarty->assign("PatientInfo",get_patient_info());
	$smarty->assign('CurrentMedication',get_current_medication());
	$smarty->assign('OrderDrugs',get_order_drug());
	$smarty->display('index.tpl');*/
	
	header("location:login.php");


}

?>