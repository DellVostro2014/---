<?
session_start();
	require_once '../work_to_db/func_db.php';
	$login = $_POST['login'];
	$password = $_POST['password'];
     $db = DataBase::getDB(); // Создаём объект базы данных
     $query = "SELECT * FROM `users` WHERE login = {?} AND password = {?}";
     $result = $db->selectRow($query, array($login,$password)); 

 if($result){
 	$_SESSION['login'] = $result['login'];
 	$_SESSION['status'] = $result['status'];
 	$_SESSION['id'] = $result['id'];
 	header("Location: ".$_SERVER['HTTP_REFERER']);
 }
header("Location: ".$_SERVER['HTTP_REFERER']);
?>