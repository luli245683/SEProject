<?php

require_once("includes/init.php"); 
require_once("includes/lib_administrator.php");
require_once("includes/lib_Candidate.php");
require_once("includes/lib_candidate_info.php");
require_once("includes/lib_general.php");
require_once("includes/lib_map.php");
require_once("includes/lib_voting.php");


if(empty($_GET["act"])){
	#display corresponding view
	$smarty->display('UnitTest.tpl');
}

if($_GET['act'] == 'action1'){
	#do the right things of action1
}

if($_GET['act'] == 'action2'){
	#do the right things of action2
}

if($_GET['act'] == "testing"){
	$function_array = split('###', $_GET['function_name']);
	$result = $function_array[0](
		$function_array[1]
	);

    $smarty->assign('total' , $time_total);
	$smarty->assign('result' , $result);
	$smarty->display('UnitTest_Result.tpl');
}

?>