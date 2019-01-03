<?php

function check_login($account,$pass){
	$rs = get_user($account); //check user account
	//check if there is match account
	if(count($rs)>0){
		if($rs[0]['Status']=="Inactive"){
			$loginResult = -4;
		}elseif($rs[0]['password'] <> $pass){
			//$rs[0]['user_password'] <> Md5($pass)
			$loginResult = -2;
		}else{
			$loginResult = 1;
			$_SESSION['user_name'] = $rs[0]['FirstName'].$rs[0]['LastName'];
			$_SESSION['role'] = $rs[0]['RoleCode'];
			$_SESSION['user'] = $rs[0]['UserID'];
		}
	
	}else{
		$loginResult = -1;
	}
	return $loginResult;
}


function get_user($account){
	$rs = array();
	$ps = array();
	$sql = "SELECT * FROM `user` WHERE Account = ? ";
	$ps[] = $account;
	$rs = $GLOBALS['db']->fetch_array($sql , $ps);
	return $rs;
}

function get_user_return_json($account){

	$rs = array();
	$ps = array();
	$sql = "SELECT * FROM `user` WHERE Account = ? ";
	$ps[] = $account;
	$rs = $GLOBALS['db']->fetch_array($sql , $ps);
	return count($rs);
}
?>