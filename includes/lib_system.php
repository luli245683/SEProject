<?
require_once("includes/lib_administrator.php");

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
				`Region`,
				`BirthDay`,
				`IDF`,
				`Status`,
				`CDate`,
				`CUser`,
				`RoleCode`
		) VALUES(
			?,?,?,?,?,?,?,?,"Active",	CURRENT_TIMESTAMP,"Administrator" ,  "GU" 
		)';
	$ps[] = array($user_id , $user_info['Account'] , $user_info['password'] , $user_info['FirstName'] , $user_info['LastName'] , $user_info['Region'] , 
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