<?php 
 session_start();
  $old_P=$_SESSION['price'];
 require_once '../work_to_db/func_db.php';
 $db = DataBase::getDB();
 $id = $_GET['id'];
 $P = $db->selectCell("SELECT price FROM goods WHERE id = {?}",[$id]);

 $_SESSION['price']+=$P;

 $_SESSION['count_p'][$id]++;
 $_SESSION ['goods'][$id] = $id; 

 header("Location: ".$_SERVER['HTTP_REFERER']);
?>