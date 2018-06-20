<?php session_start();
unset($_SESSION['goods']);
unset($_SESSION['count_p']);
unset($_SESSION['price']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style/order_goods.css">
	<?php 
	require_once '/work_to_db/func_db.php';
	$db = DataBase::getDB();
	require_once 'blocks/head.php';
	?>
	<style>
		.discription{
			width: 60%;
			margin: auto;
		}
		.info_order p, .info_order a{
			text-align: center;
		}
	</style>
</head>
<body>
	<?php 
	require_once 'blocks/header.php';
	require_once 'blocks/nav_bar.php';
	?>
	<div class="order_goods container-fluid ">
		
			<p class = "order_cart">Заказ успешно добавлен</p>
			<hr>
	<div class="info_order">
		<p>С Вами свяжутся в течение суток</p>
		<p>
			<a href="/">Вернутся на главную</a><span> | </span>
			<a href="">Перейти к заказам</a>
		</p>
		
	</div>
	

	</div>
	<?php require_once "blocks/discription_order.php" ?>
</body>
</html>