<?php
session_start();
require_once '../work_to_db/func_db.php';
	 $db = DataBase::getDB();
	 $id = $_GET['id'];
	 $query = $_GET['query'];
    
	if($query=='main'){
		$Q1 = "DELETE FROM `categorys` WHERE `main_category` = {?}";
     	$Q2 = "DELETE FROM `main_categorys` WHERE `id` = {?}";
		$db->query($Q1,[$id]);	
		$db->query($Q2,[$id]);	
	}
    else {
	     $Q = "DELETE FROM `categorys` WHERE `id` = {?}";
		$db->query($Q,[$id]); 
    }
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>