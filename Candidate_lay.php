<?php

require_once("includes/init.php"); //讓這PHP的檔案程式 跑一次
require_once("includes/lib_administrator.php");
require_once("includes/lib_Candidate.php");
$_SESSION["active_page"]='Candidate_lay';


if(empty($_GET["act"])){
	//$user_id = $_GET['Candidate_Name'];
	//$cu_Candidate=get_Candidate_lay();
	//echo $_SESSION['user'];
	//$smarty->assign("test_console","What happen?");


	//$user_id=$_SESSION['user'];
	$Candidate_Name = $_GET['Candidate_Name'];
	$smarty->assign("candicate_info", get_Candidate_lay($Candidate_Name , $_GET['is_member']));
	// $smarty->display('Candidate_info.tpl');//display 是回傳tpl資料 ,echo是回傳 變數
	$smarty->assign("my_user_id", $_SESSION['user']);
	$smarty->display('Candidate_lay.tpl');
}
if($_GET["act"]=='start_Candidate'){

}

if($_GET["act"]=='start_Article'){
	$Candidate_Name = $_GET['Candidate_Name'];
	
	$article_list = get_Candidate_Article($Candidate_Name);//取得{柯文哲}文章資料庫
	$article_id_list = get_article_id($article_list);//將文章資料庫傳過去 回傳文章的id進這變數 所以這樣就有對到相對應的 文章id
	for ($i=0; $i < count($article_id_list); $i++) { 
		$article_list[$i]['reply'] = get_article_reply($article_id_list[$i]);//在article_list裡再創一個欄位reply 因為回傳是陣列 所以reply裡是陣列
		$article_list[$i]['praise']=get_praise_Article($article_id_list[$i] ,$_SESSION['user']);
		//if($article_list[$i]['praise']==null){$article_list[$i]['praise']='0';}
	}
	//print_r($article_list);
	$smarty->assign("candicate_Article", $article_list);
	$smarty->display('Candidate_Article.tpl');//display 是回傳tpl資料 ,echo是回傳 變數
	//$smarty->echo($candicate_Article);



}
if($_GET["act"]=='insert_comment'){
	$comment_val=$_GET['comment_val'];
	$article_id=$_GET['article_id'];

	echo insert_comment($comment_val,$_SESSION['user'],$article_id);


}
if($_GET["act"]=='insert_praise'){
	$article_id=$_GET['praise_ins'];


	echo insert_praise($article_id);
}	
if($_GET["act"]=='delete_praise'){
	$article_id=$_GET['praise_del'];

	echo delete_praise($article_id);
}	
?>