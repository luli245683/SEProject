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

function get_ans_count(){
	$sql = "SELECT i.IssueID , i.IssueName , ii.IssueItemID , ii.context , count(v.UserID) as total FROM `issue` as i
		 	LEFT JOIN `issueitem` as ii ON ii.IssueID = i.IssueID LEFT JOIN `voting` as v ON v.IssueItemID = ii.IssueItemID 
			GROUP BY ii.IssueItemID ";
	$ps = array();
	$rs = $GLOBALS['db']->fetch_array($sql,$ps);
	// print_r($rs);
	$issue_list = get_issue_list();
	$result = array();
	for ($i=0; $i < count($issue_list) ; $i++) { 
		for ($j=0; $j < count($rs); $j++) { 
			if($rs[$j]['IssueID'] == $issue_list[$i]['IssueID'])
				$issue_list[$i]['ItemList'][] = $rs[$j];
		}
		$issue_list[$i]['Sum'] = sum_total($issue_list[$i]['ItemList']);
	}
	return $issue_list;

}


function percentage($IssueID){
	$sql = "SELECT UserID FROM `voting` WHERE IssueID = ? ";
	$ps = array($IssueID);
	$rs = $GLOBALS['db']->fetch_array($sql,$ps);

	for ($i=0; $i < count($UserID) ; $i++) { 
		$result[] = $array[$i]['votesum'];
	}

	return $result;

}

function sum_total($array){
	$tmp = 0;
	for ($i=0; $i < count($array) ; $i++) { 
		$tmp += $array[$i]['total'];
	}
	return $tmp;
}


function publish_issue($issue_info){
	$issue_id = get_key_sequence('issue');

	$sql = array();
	$ps = array();
	$msg = array();
	// append new element to array 
	$sql[] = 'INSERT INTO issue(`IssueID` , `IssueName` , `CategoryID` , `color` , `cdate` , `cuser`)
			  VALUES (? , ? , ? , ? , CURRENT_TIMESTAMP , ? )';
	$ps[] = array($issue_id , $issue_info['IssueName'] , $issue_info['CategoryID'] , $issue_info['colorCode'] , $_SESSION['user']);



	$result = $GLOBALS['db']->transaction($sql , $ps);

	
	if(empty($result)){
		update_sequence('issue');
		$sql = array();
		$ps = array();
		$issue_item_array = $issue_info['IssueItem'];
		for ($i=0; $i < count($issue_item_array) ; $i++) { 
			$issueitemid = $issue_id."_".$issue_item_array[$i]['item_no'];
			$sql[] = 'INSERT INTO issueitem(`IssueItemID` , `context`  , `IssueID`)
			  VALUES (? , ? , ?)';
			$ps[] = array($issueitemid , $issue_item_array[$i]['item_context'] , $issue_id);
		}
		$result = $GLOBALS['db']->transaction($sql , $ps);

		if(empty($result)){
			$msg['is_success'] = 1;
			$msg['message'] = 'Insert Issue&Item user seccessful! ';
		}else{
			$msg['is_success'] = 0;
			$msg['message'] = 'Insert Item Fail '.$result;
		}
		
		return json_encode($msg);
	}else{
		$msg['is_success'] = 0;
		$msg['message'] = 'Insert Issue Fail '.$result;
		return json_encode($msg);
	}
	
}
?>