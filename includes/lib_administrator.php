<?
function is_access($module_name ,  $function_name){
	$combine = $module_name.".".$function_name;
	$sql = "SELECT * FROM `ACLFunction` AS af
			LEFT JOIN `RoleACL` as ra ON af.ACLCode = ra.ACLCode 
			WHERE af.FunctionName = ? AND af.RoleCode = ? ";
	$ps = array($combine , $_SESSION['role']);
	$rs = $GLOBALS["db"]->fetch_array($sql , $ps);
	return count($rs)>>0;
}

function get_key_sequence($table_name , $is_update = false){
	$sql = "SELECT * FROM `keysquence` WHERE `ModuleName` = ? AND `Status` = 'Active'; ";
	$ps = array($table_name);
	$rs = $GLOBALS['db']->fetch_array($sql , $ps);
	if($is_update){
		return $rs[0]['KeySquence'];	
	}else{
		$total_count = 1;
		for($i = 0 ; $i < intval($rs[0]['Digits']) ; $i++)
			$total_count *= 10;
		$current_sequence = intval($rs[0]['KeySquence'])+$total_count;
		$keysquence = substr_replace(strval($current_sequence), $rs[0]['PreWord'], 0, 1);
		return $keysquence;
	}
	
}

function update_sequence($table_name){
	$current_sequence = intval(get_key_sequence($table_name,true));
	$sql = array();
	$ps = array();
	$sql[] = "UPDATE `keysquence` SET KeySquence = ? , LastEditDate = CURRENT_TIMESTAMP , LastEditUser = ? WHERE `ModuleName` = ? ;" ;
	$current_sequence += 1;
	$ps[] = array($current_sequence,$_SESSION['role'],$table_name);
	$rs = $GLOBALS['db']->transaction($sql , $ps);
	return $rs;
}

function get_account_info(){
	$rs = array();
	$ps = array();
	$sql = "SELECT * FROM `user` WHERE UserID = ? ";
	$ps = array($_SESSION['user']);

	$rs = $GLOBALS['db']->fetch_array($sql , $ps);
	return $rs[0];
}

function info_change($user_info){
	$user_id = get_key_sequence('user');

	$sql = array();
	$ps = array();
	$msg = array();

	// append new element to array 
	$sql[] = 'UPDATE `USER` SET password=?,FirstName=?,LastName=?,Email=?,Phone=?,Birthday=? WHERE UserID = ?';
	$ps[] = array($user_info['password'] ,$user_info['FirstName'],$user_info['LastName'],$user_info['Email'],$user_info['Phone'],$user_info['Birth'], $_SESSION['user']);

	$result = $GLOBALS['db']->transaction($sql , $ps);
	
	if(empty($result)){
		update_sequence('user');
		$msg['is_success'] = 1;
		$msg['message'] = 'Register user seccessful! ';
		return json_encode($msg);
	}else{
		$msg['is_success'] = 0;
		$msg['message'] = 'Register user fail! '.$result;
		return json_encode($msg);
	}
	
}


function user_registration($user_info){
	$user_id = get_key_sequence('user');

	$sql = array();
	$ps = array();
	$msg = array();

	// append new element to array 
	$sql[] = 'INSERT INTO `user`(
				`UserID`,
				`Account`,
				`password`,
				`FirstName`,
				`LastName`,
				`Email`,
				`Phone`,
				`Region`,
				`BirthDay`,
				`IDF`,
				`Status`,
				`CDate`,
				`CUser`,
				`RoleCode`
		) VALUES(
			?,?,?,?,?,?,?,?,?,?,"Active",	CURRENT_TIMESTAMP,"Administrator" ,  "GU" 
		)';
	$ps[] = array($user_id , $user_info['Account'] , $user_info['password'] , $user_info['FirstName'] , $user_info['LastName'] ,  $user_info['email'] ,  $user_info['phone'] , 
		$user_info['Region'] , 
		date("Y-m-d", strtotime($user_info['BirthDay'])) , $user_info['IDF']  );

	$result = $GLOBALS['db']->transaction($sql , $ps);
	
	if(empty($result)){
		update_sequence('user');
		$msg['is_success'] = 1;
		$msg['message'] = 'Register user seccessful! ';
		return json_encode($msg);
	}else{
		$msg['is_success'] = 0;
		$msg['message'] = 'Register user fail! '.$result;
		return json_encode($msg);
	}
	
}

function get_country_list(){
	$sql = 'SELECT * FROM county';
	return $GLOBALS['db']->fetch_array($sql,array());
}
function get_region_list($county_code){

	$sql = 'SELECT RegionCode as id , RegionName as text FROM region WHERE CountyCode = ? ';
	$ps = array($county_code);

	
	return $GLOBALS['db']->fetch_array($sql , $ps);
}

function get_user_list($user_id = null){
	if(empty($user_id)){
		$sql = "SELECT * FROM `user` ";
		$ps = array();		
	}else{
		$sql = "SELECT * FROM `user` WHERE UserID = ? ";
		$ps = array($user_id);		
	}

	$rs = $GLOBALS['db']->fetch_array($sql ,$ps);
	return $rs;
}

?>