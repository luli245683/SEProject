<?php

require_once("includes/init.php"); 
require_once("includes/lib_administrator.php");
require_once("includes/lib_voting.php");

$_SESSION["active_page"]='vote';


if(empty($_GET["act"])){
	$item_list = get_issue_item_by_id();
	$issue_list = get_issue_list();
	$smarty->assign('item_list',$item_list);
	$smarty->assign('issue_list',$issue_list);
	$smarty->display('vote.tpl');

}

if($_GET["act"] == 'voting'){
	echo voting($_GET['issueitem_id'] , $_GET['IssueID']);
}

?>