<?php

require_once("includes/init.php"); 
require_once("includes/lib_administrator.php");
require_once("includes/lib_system.php");
$_SESSION["active_page"]='home_queue';


if(empty($_GET["act"])){

	$smarty->display('home_queue.tpl');

}




?>