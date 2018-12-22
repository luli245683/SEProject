<?php

require_once("includes/init.php"); //讓這PHP的檔案程式 跑一次
require_once("includes/lib_administrator.php");
require_once("includes/lib_Candidate.php");
$_SESSION["active_page"]='Candidate_issued_document';


if(empty($_POST["act"])){

	$smarty->display('Candidate_issued_document.tpl');
}
if($_POST["act"]=='article_submit'){

	echo article_submit($_POST['Title_text'],$_POST['Context_text'] , $_POST['Category']);
}


?>