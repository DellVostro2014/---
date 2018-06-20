<? session_start(); ?>
<!DOCTYPE html>
<html>
<head>
   <?php

   	require_once 'work_to_db/func_db.php';
   	require_once 'blocks/head.php';
   	$db = DataBase::getDB(); // Создаём объект базы данных
   ?>
   	<link rel="stylesheet" type="text/css" href="style/goods.css">
</head>
<body>
	<?php
	$S = $_POST['search'];
	$S = "%".$S."%";
   	require_once 'blocks/header.php';
   	require_once 'blocks/nav_bar.php';
   	$Q ="select * from `goods` where `key_words` like {?}";
   	$res = $db->select($Q,[$S]);
   	if(count($res)>0)
   	for($i=0;$i<count($res);$i++){
   			echo'	
<div class="all_goods">
	  <div class="goods">
	  	 <img src="'.$res[$i]['img'].'" class = "img_goods">
	  	 	<div class="discription">
	  	 		<p>'.$res[$i]['subject'].'</p>
	  	 		<p>Цена:<span>'.$res[$i]['price'].'</span></p>
	  	 	</div>
	  	 	<div class = "operation">
	  	 	<a href="/product_detals.php?id='.$res[$i]['id'].'">Подробнее</a> 
	  	 	<a href="php/add_basck.php?id='.$res[$i]['id'].'">Добавить в корзину</a>';
	  	 	if($_SESSION['status']=='admin')
	  	 	echo'<a href="php/deleted.php?d_id='.$res[$i]['id'].'">Удалить</a>';
	  echo'</div>
	  </div>
</div>
<div style = "clear:both;">
<p></p>';
}
else echo"<p class = 'no_goods'>Поиск не дал результатов</p>";
?>


</body>
</html>