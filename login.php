<?php
$is_login_page = true;
require_once("includes/init.php"); 


if($_POST["act"]=="login"){
	//Get login user check result
	$_SESSION["is_login"]=check_login($_POST["userid"],$_POST["userpw"]);
	//login 
	//$_SESSION["is_login"]=1;
	if($_SESSION["is_login"]>0){
		$_SESSION["account"]=$_POST["userid"];
		header("location:home_queue.php");
		return;
	}
}

if($_GET["act"]=="logout"){
	session_destroy();
}

if(empty($_POST["act"]) and $_SESSION["is_login"]>0){
	header("location:home_queue.php");
	return;
}

$msg = "";
if($_SESSION["is_login"]==-1) 
	$msg = "Login fail , This account [".$_POST["userid"]."] does not exit";
elseif($_SESSION["is_login"]==-2) 
	$msg = "Login fail , Password is wrong";
elseif($_SESSION["is_login"]==-3) 
	$msg = '';
elseif($_SESSION['is_login']==-4)
	$msg = "This account[ ".$_POST["userid"]." ] has been disabled.";


$is_login = ($_SESSION['is_login'] >0 ? true : false);

	
$smarty->assign("login_msg", $msg);
$smarty->assign("is_login", $is_login);
$smarty->assign("test_console" , "success");
$smarty->display('login.tpl');

?>