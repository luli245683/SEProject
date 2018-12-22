<?php

require_once("includes/init.php"); 
require_once("includes/lib_administrator.php");
require_once("includes/lib_general.php");
require_once("includes/lib_Candidate.php");

$_SESSION["active_page"]='general_forum';


if(empty($_GET["act"])){
	/*$smarty->assign("PatientInfo",get_patient_info());
	$smarty->assign('CurrentMedication',get_current_medication());
	$smarty->assign('OrderDrugs',get_order_drug());*/
	$smarty->display('general_forum_menu.tpl');
}

if($_GET["act"] == 'Forumpage'){
	$article_list = get_article_list_by_category($_GET['CategoryCode']);
	$smarty->assign('article_list' , $article_list);
	$smarty->display('general_forum.tpl');
}
if($_GET["act"] == 'get_article'){
	$article = get_article_by_aid($_GET['article_id']);
	$article['reply'] = get_Article_reply($_GET['article_id']);
	$article['praise']=get_praise_Article($_GET['article_id'] ,$_SESSION['user']);
	$result = array();
	$smarty->assign('article' , $article);
	$result['html'] = $smarty->fetch('general_forum_article.tpl');	
	$result['article_id'] = $_GET['article_id'];
	echo json_encode($result);
}
?>