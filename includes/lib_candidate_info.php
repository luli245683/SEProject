<?


function get_candidate_info_list($province_id){

	$sql = " SELECT * FROM `candidate_info_2018` as c LEFT JOIN `paty` as p on c.paty_no = p.paty_no WHERE province = ?  ORDER BY c.`no` ASC ";
	$ps = array($province_id);

	$rs = $GLOBALS['db']->fetch_array($sql,$ps);
    
	return $rs;

}



function get_member_list($province_id,$electorate_id){
	echo $province_id."  ".$electorate_id;
	$sql = " SELECT * FROM `member_2018` as m LEFT JOIN `paty` as p on m.paty_no = p.paty_no WHERE province = ? AND electorate = ? ORDER BY m.`no` ASC ";
	$ps = array($province_id, $electorate_id);

	$rs = $GLOBALS['db']->fetch_array($sql,$ps);

	return $rs;

}



function get_electorate_list($province_id){

	$sql = "SELECT electorate FROM `administrative_2018` WHERE  province = ? and electorate <> ? GROUP BY electorate ;";
	$ps = array($province_id,  "'00" );
	$rs = $GLOBALS['db']->fetch_array($sql , $ps);

	return $rs;

}

//三維

function get_administrative($province_id){
	$sql = "SELECT electorate FROM `administrative_2018` WHERE  province = ? and electorate <> ? GROUP BY electorate ;";
	$ps = array($province_id,  "'00" );
	$rs = $GLOBALS['db']->fetch_array($sql , $ps); //該省市有多少個選區
	$ele_list = transformat_electorate_list($rs);
	for ($i=0; $i < count($ele_list); $i++) { 
		$rs[$i]['electorate'] = remove_first($rs[$i]['electorate']);
		$rs[$i]['TOWN'] =  get_Township_by_electorate($province_id,$ele_list[$i]);
	}	
	// print_r($rs);
	return  $rs;
}


//該選區內的區域名稱

function get_Township_by_electorate($province_id,$electorate){
	$sql = " SELECT administrative_name FROM administrative_2018 WHERE province = ? and electorate = ? and village = ? and Township <> ? ; ";
	$ps = array($province_id , $electorate , "'0000" , "'000");
	return $GLOBALS['db']->fetch_array($sql , $ps);
}


//換選區01到結束

function transformat_electorate_list($array){
	$result = array();
	for ($i=0; $i < count($array) ; $i++) { 
		$result[] = $array[$i]['electorate'];
	}
	return $result;
}

function remove_first($string){
	return substr($string, 1);
}

?>