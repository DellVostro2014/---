<?php
    session_start();
	require_once '../work_to_db/func_db.php';
	$db = DataBase::getDB();

   $id = $_GET['d_id'];
   $Q = "DELETE FROM `goods` WHERE `id` = {?}";
   $db->query($Q,[$id]);
   header("Location: ".$_SERVER['HTTP_REFERER']);
 ?>