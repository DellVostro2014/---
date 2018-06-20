<?php
	require_once '../work_to_db/func_db.php';
	$db = DataBase::getDB();
	$cat = Array($_POST['category']);
	
	$Q = "INSERT INTO main_categorys(categorys) VALUES ({?})";
	$db->query($Q,$cat);
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>