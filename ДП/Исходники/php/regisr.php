<?php
    session_start();
    require_once '../work_to_db/func_db.php';
	$login = $_POST['login'];
	$mail = $_POST['mail'];
	$pass = $_POST['password'];
  $db = DataBase::getDB();
	
	

   $array =[$login,$pass,$mail];
   $query = "INSERT INTO `users`(`login`,`password`,`e-mail`) values({?},{?},{?})";
   $db->query($query,$array);
   $_SESSION['login']=$login;
  
   header('Location: ../index.php');
   header('Location: ../auth.php');


//selectCell()
  
?>