<?


function get_voting_list(){

	$sql = " SELECT * FROM `voting` ";
	$ps = array();

	$rs = $GLOBALS['db']->fetch_array($sql,$ps);

	return $rs;

}

function get_issue_list(){

	$sql = " SELECT * FROM `issue` ";
	$ps = array();

	$rs = $GLOBALS['db']->fetch_array($sql,$ps);


	return $rs;

}

function get_issue_item_by_id(){
	 $sql = "SELECT * FROM issueitem";
	 $ps = array($issue_id);
	 return $GLOBALS['db']->fetch_array($sql , $ps);
}

function voting($issueitem_id , $IssueID ){

	$sql = array();
	$ps = array();
	if(check_is_voted($IssueID)){
		$sql[] = "UPDATE voting SET IssueItemID = ? WHERE UserID = ? AND IssueID = ?";
		$ps[] = array($issueitem_id , $_SESSION['user'] , $IssueID);
	}else{
		$sql[] = "INSERT INTO voting(UserID ,IssueItemID , IssueID) VALUES( ? , ? , ?);";
		$ps[] = array($_SESSION['user'] , $issueitem_id ,$IssueID);	
	}

	$result = $GLOBALS['db']->transaction($sql , $ps);
	
	if(empty($result)){
		$msg['is_success'] = 1;
		$msg['message'] = 'Register user seccessful! ';
		return json_encode($msg);
	}else{
		$msg['is_success'] = 0;
		$msg['message'] = 'Register user fail! '.$result;
		return json_encode($msg);
	}
}

function check_is_voted($IssueID){
	$sql = "SELECT * FROM `voting` as v
			WHERE v.IssueID = ? AND v.UserID = ? ";
	$ps = array($IssueID , $_SESSION['user']);
	$rs =  $GLOBALS['db']->fetch_array($sql , $ps);
	return count($rs)>0;
}
?>