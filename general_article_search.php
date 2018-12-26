<?php

require_once("includes/init.php"); //讓這PHP的檔案程式 跑一次
require_once("includes/lib_administrator.php");
require_once("includes/lib_general.php");
require_once("includes/lib_Candidate.php");
$_SESSION["active_page"]='general_article_search';


if(empty($_GET["act"])){

	$smarty->display('Candidate_assembly_article.tpl');
}

if($_GET["act"]=='start_Article'){
	//$Candidate_ID = $_GET['Candidate_ID'];
	$article_list = get_article_list_by_category($_GET['CategoryCode']);
	$article_id_list = get_article_id($article_list);//將文章資料庫傳過去 回傳文章的id進這變數 所以這樣就有對到相對應的 文章id
	for ($i=0; $i < count($article_id_list); $i++) { 
		$article_list[$i]['reply'] = get_Article_reply($article_id_list[$i]);//在article_list裡再創一個欄位reply 因為回傳是陣列 所以reply裡是陣列
		$article_list[$i]['praise']=get_praise_Article($article_id_list[$i] ,$_SESSION['user']);
	}

	$smarty->assign("general_article", $article_list);
	$smarty->display('general_article.tpl');//display 是回傳tpl資料 ,echo是回傳 變數



}
// if($_GET["act"]=='insert_comment'){
// 	$comment_val=$_GET['comment_val'];
// 	$article_id=$_GET['article_id'];

// 	echo insert_comment($comment_val,$_SESSION['user'],$article_id);


// }
// if($_GET["act"]=='insert_praise'){
// 	$article_id=$_GET['praise_ins'];


// 	echo insert_praise($article_id);
// }	
// if($_GET["act"]=='delete_praise'){
// 	$article_id=$_GET['praise_del'];

// 	echo delete_praise($article_id);
// }

if($_GET["act"]=='article_search'){
	$Context_val=$_GET['Search_Context'];
	$article_list =article_search($Context_val , $_GET['CategoryCode'] , true);
	
	$article_id_list = get_article_id($article_list);
	for ($i=0; $i < count($article_id_list); $i++) { 
		$article_list[$i]['reply'] = get_Article_reply($article_id_list[$i]);

		$article_list[$i]['praise']=get_praise_Article($article_id_list[$i] ,$_SESSION['user']);
	}


	$smarty->assign("candicate_Article", $article_list);
	$smarty->display('Candidate_Article.tpl');
}

?>