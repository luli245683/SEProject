<?


function get_candidate_info_list($province_id){

	$sql = " SELECT * FROM `candidate_info_2018` WHERE province = ? ";
	$ps = array("'63");

	$rs = $GLOBALS['db']->fetch_array($sql,$ps);

	return $rs;

}

?>