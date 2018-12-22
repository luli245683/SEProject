<?php

require_once("includes/init.php"); 
require_once("includes/lib_administrator.php");
require_once("includes/lib_candidate_info.php");

$_SESSION["active_page"]='candidate_info';


if(empty($_GET["act"])){

	$candidate_info_list = get_candidate_info_list($_GET['province_id']);
	$administrative_list = get_administrative($_GET['province_id']);
	$electorate_list = get_administrative($_GET['province_id']);
	// $member_list = get_member_list($_GET['province_id']);
	// $smarty->assign('member_list',$member_list);
	$smarty->assign('electorate_list',$electorate_list);
	$smarty->assign('administrative_list',$administrative_list);
	$smarty->assign('candidate_info_list',$candidate_info_list);
	$smarty->display('candidate_info_by_region.tpl');


}

if($_GET['act'] == 'update_member_list'){

	$member_list = get_member_list($_GET['province_id'],$_GET['electorate_id']);
	$smarty->assign('member_list',$member_list);
	$smarty->display('candidate_info_member_list.tpl');
}

// if($_GET['act'] == 'update_candidate_info'){

// 	// $member_list = get_member_list("$province_id");
// 	$candidate_info_list = get_candidate_info_list("$province_id");
// 	// $smarty->assign('member_list',$member_list);
// 	$smarty->assign('candidate_info_list',$candidate_info_list);
// 	$smarty->display('candidate_info.tpl');
// }



?>