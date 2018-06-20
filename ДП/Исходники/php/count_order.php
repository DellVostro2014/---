<?php 
 session_start();
 require_once '../work_to_db/func_db.php';
 $db = DataBase::getDB();
 $id = $_GET['id'];
 $P = $db->selectCell("SELECT price FROM goods WHERE id = {?}",[$id]);
 
 $q = $_GET['q'];
 if ($q =='spare' && $_SESSION['count_p'][$id]!=1){
	$_SESSION['count_p'][$id]--;
	$_SESSION['price']-=$P;
 }
 if($q =='add') {
	$_SESSION['count_p'][$id]++; 
	 $_SESSION['price']+=$P;
 }
//echo 'ID->'.$id.' Query:->'.$q.' Price:->'.$P;
header("Location: ".$_SERVER['HTTP_REFERER']);
?>