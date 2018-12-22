<?php

require_once("includes/init.php"); //讓這PHP的檔案程式 跑一次
require_once("includes/lib_administrator.php");
require_once("includes/lib_Candidate.php");
$_SESSION["active_page"]='Candidate_issued_document';


if(empty($_GET["act"])){

	$smarty->display('Candidate_issued_document.tpl');
}
if($_GET["act"]=='article_submit'){

	echo article_submit($_GET['Title_text'],$_GET['Context_text']);
}


?>