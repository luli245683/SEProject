<?php
require_once("includes/init.php"); //讓這PHP的檔案程式 跑一次
require_once("includes/lib_administrator.php");
/*function get_user_list($user_id = null){
	if(empty($user_id)){
		$sql = "SELECT * FROM `user` ";
		$ps = array();
	}else{
		$sql = "SELECT * FROM `user` WHERE Account = ? ";
		$ps = array($user_id);
	}

	$rs = $GLOBALS['db']->fetch_array($sql , $ps);
	return $rs;
}

function get_cu_article(){
	$sql="SELECT * FROM  article ";
	$ps=array();

	$rs=$GLOBALS['db']->fetch_array($sql , $ps);
	return $rs;
}*/
function get_Candidate_lay($Candidate_Name = null , $is_member = false){
	if($is_member){
		$sql = "SELECT ci.* , p.paty_name FROM `member_2018` as ci 
				LEFT JOIN paty as p ON p.paty_no = ci.paty_no WHERE ci.name = ? ";
		$ps = array($Candidate_Name);
	}else{
		$sql = "SELECT ci.* , p.paty_name FROM `candidate_info_2018` as ci 
				LEFT JOIN paty as p ON p.paty_no = ci.paty_no WHERE ci.name = ? ";
		$ps = array($Candidate_Name);

	}
		$rs=$GLOBALS['db']->fetch_array($sql , $ps);
		return $rs[0];//讓他變一維陣列 否則 二維陣列前端必須用for each去抓


}


function get_Candidate_Article($Candidate_ID = null){
	if(empty($Candidate_ID)){
		$sql = "SELECT * FROM `article` as ar LEFT JOIN `user` as a ON a.UserID=ar.UserID";
		$ps = array();
	}else{
		$sql = "SELECT * FROM `article` as ar LEFT JOIN `user` as a ON a.UserID=ar.UserID WHERE ar.UserID = ? ";
		$ps = array($Candidate_ID);

	}
		$rs=$GLOBALS['db']->fetch_array($sql , $ps);
		return $rs;

}
function get_article_id($arr){
	$result = array();
	for ($i=0; $i < count($arr); $i++) { 
		$result[] = $arr[$i]['ArticleID'];
	}
	return $result;
}
function get_article_reply($article_id){

		$sql = "SELECT ra.* , b.LastName,b.FirstName FROM article_reply as ra 
				LEFT JOIN article as a ON a.ArticleID = ra.ArticleID
				LEFT JOIN `user` as b on b.UserID=ra.UserID
				WHERE ra.ArticleID = ? ";
		$ps = array($article_id);
		//print_r($rs);
		return $GLOBALS['db']->fetch_array($sql , $ps);
}
function get_praise_Article($article_id,$user_id){


		$sql = "SELECT ra.UserID  FROM article_praise as ra 
				LEFT JOIN article as a ON a.ArticleID = ra.ArticleID
				WHERE ra.ArticleID = ? AND  ra.UserID= ? ";
		$ps = array($article_id,$user_id);
		//print_r($rs);
		return $GLOBALS['db']->fetch_array($sql , $ps);
}

function insert_comment($comment_val,$user_id,$article_id){

		$sql = array();
		$ps = array();
		$msg = array();

		$sql[] = 'INSERT INTO article_reply 
		( Ra_date , Context , ArticleID , UserID ) 
		VALUES(CURRENT_TIMESTAMP,?,?,?);';

		$ps[] = array($comment_val,$article_id,$user_id);
		$result = $GLOBALS['db']->transaction($sql , $ps);

		if(empty($result)){//這是成功的
			$msg['is_success'] = 1;
			$msg['message'] = 'You Comment This! ';
			return json_encode($msg);
		}else{
			$msg['is_success'] = 0;
			$msg['message'] = 'Umm...There is something wrong :( '.$result;
			return json_encode($msg);
		}
}

function insert_praise($article_id){
	$sql = array();
	$ps = array();
	$msg = array();

	$sql[] = 'INSERT INTO article_praise 
		(ArticleID , UserID ) 
		VALUES(?,?);';
	$ps[] = array($article_id,$_SESSION['user']);
	$result = $GLOBALS['db']->transaction($sql , $ps);

	if(empty($result)){//這是成功的
		$msg['is_success'] = 1;
		$msg['message'] = 'You Like This! ';
		return json_encode($msg);
	}else{
		$msg['is_success'] = 0;
		$msg['message'] = 'Umm...There is something wrong :( '.$result;
		return json_encode($msg);
	}

}
function delete_praise($article_id){
	//$_SESSION['user']
	$sql = array();
	$ps = array();
	$msg = array();

	$sql[] = 'DELETE FROM article_praise 
	WHERE ArticleID=? AND UserID=?';
	
	$ps[] = array($article_id,$_SESSION['user']);
	$result = $GLOBALS['db']->transaction($sql , $ps);

	if(empty($result)){//這是成功的
		$msg['is_success'] = 1;
		$msg['message'] = 'Why you do that!? ';
		return json_encode($msg);
	}else{
		$msg['is_success'] = 0;
		$msg['message'] = 'Umm...There is something wrong :( '.$result;
		return json_encode($msg);
	}
}

function article_search($Context_val)
{


	/*if(empty($Context_val)){

	}else{*/
		$Context_val = "%".$Context_val."%";
		$sql = 'SELECT * FROM `article` as ar LEFT JOIN `user` as a ON a.UserID=ar.UserID WHERE ar.Title LIKE ? OR
				CONCAT(a.FirstName,a.LastName) LIKE ?   ';

		//LIKE '%?%' OR ar.Context LIKE '%?%' OR CONCAT(a.FirstName,a.LastName) LIKE '%?%' ";
		//WHERE ar.Title LIKE \'%?%\' OR ar.Context LIKE \'%?%\' OR CONCAT(a.FirstName,a.LastName) LIKE \'%?%\'

		$ps = array($Context_val,$Context_val);
		$result=$GLOBALS['db']->fetch_array($sql , $ps);

		//print_r($sql);
		//return $sql;
		return $result;
	//}
}


function article_submit($Title_text,$Context_text , $category_id){
	//$_SESSION['user'] $_SESSION['role']
	$article_id = get_key_sequence('article');



	$sql = array();
	$ps = array();
	$msg = array();

	$sql[] = 'INSERT INTO article 
		(ArticleID , Title , Type ,cdate, Context , UserID , CategoryCode) 
		VALUES(?,?,?,CURRENT_TIMESTAMP ,?,?,?)';
	$ps[]=array($article_id,$Title_text,$_SESSION['role'],$Context_text,$_SESSION['user'] , $category_id);
	$result = $GLOBALS['db']->transaction($sql , $ps);

	if(empty($result)){//這是成功的
		update_sequence('article');
		$msg['is_success'] = 1;
		$msg['message'] = 'Publish Candicate Article Seccessful! ';
		return json_encode($msg);
	}else{
		$msg['is_success'] = 0;
		$msg['message'] = 'OOPs'.$result;
		return json_encode($msg);
	}
}

?>