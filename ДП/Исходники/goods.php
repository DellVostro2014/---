<?php	session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	require_once '/blocks/head.php';
	require_once '/work_to_db/func_db.php';
	?>
	<link rel="stylesheet" type="text/css" href="style/goods.css">
</head>
<?php
	$db = DataBase::getDB();
	$main_get = $_GET['main_id'];
	$sub_get = $_GET['sub_id'];

	//echo "<h1>>>".$main_get."<<</h1>";
if(isset($main_get)){
	$Q = "SELECT * FROM `goods` WHERE main_category = {?}";
	$res  = $db->select($Q,[$main_get]);
}
else {
	$Q = "SELECT * FROM `goods` WHERE category = {?}";
	$res  = $db->select($Q,[$sub_get]);
}

	require_once '/blocks/header.php';
	require_once '/blocks/nav_bar.php';
	//echo "<h1>>>".$main_get[0]['subject']."<<</h1>";
	//echo "<h1>".$sub_get."</h1>";
if(count($res)>0)
for($i=0;$i<count($res);$i++){
echo'	
<div class="all_goods">
	  <div class="goods">
	  	 <img src="'.$res[$i]['img'].'" class = "img_goods">
	  	 	<div class="discription">
	  	 		<p>'.$res[$i]['subject'].'</p>
	  	 		<p>Цена:<span>'.$res[$i]['price'].' руб</span></p>
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
<p></p>

';
}
else echo"<p class = 'no_goods'>Товаров нет</p>";
?>	 
</div>
</html>