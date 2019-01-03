<?php

require_once("includes/init.php"); 
require_once("includes/lib_administrator.php");
require_once("includes/lib_voting.php");

$_SESSION["active_page"]='vote';


if(empty($_GET["act"])){
	$item_list = get_issue_item_by_id();
	$issue_list = get_issue_list();
	$ans_count = get_ans_count();
	$smarty->assign('item_list',$item_list);
	$smarty->assign('issue_list',$issue_list);
	$smarty->assign('ans_count',$ans_count);
	$smarty->display('vote.tpl');

}

if($_GET["act"] == 'voting'){

	#voting.php?act=voting&issueitem_id=?&IssueID=?
	$result = array();
	$result['message'] = voting($_GET['issueitem_id'] , $_GET['IssueID']);
	$ans_count = get_ans_count();
	$smarty->assign('ans_count',$ans_count);
	$result['html'] = $smarty->fetch('voting_result.tpl');

	echo json_encode($result);
}

if($_GET["act"] == 'publish'){
	$smarty->display('vote_publish_issue.tpl');
}

if($_GET["act"] == 'publish_issue'){
	echo publish_issue($_GET['issue_info']);
}
?>