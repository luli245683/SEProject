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
	$sql = "SELECT * FROM `keysquence` WHERE `ModuleName` = ? AND `Status` = 'Activate'; ";
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
?>