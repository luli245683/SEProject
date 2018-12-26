<?
	function get_article_list_by_category($category_code){
		$sql = "SELECT a.ArticleID , a.Title , a.cdate , CONCAT(u.FirstName , ',' ,u.LastName) as autor , a.Context FROM `article` as a 
				LEFT JOIN `user` as u ON a.UserID = u.UserID
				WHERE a.Type = ? AND a.CategoryCode = ? ;";
		$ps = array("GU" , $category_code);
		return $GLOBALS['db']->fetch_array($sql ,$ps);
	}
	function get_article_by_aid($article_id){
		$sql = "SELECT * FROM `article` as a 
				LEFT JOIN `user` as u ON a.UserID = u.UserID
				WHERE a.ArticleID = ? ;";
		$ps = array($article_id);
		return $GLOBALS['db']->fetch_array($sql ,$ps)[0];
	}
?>