<?php session_start();
if(!$_SESSION['goods']) header("Location: index.php");
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
		.contact_form input{
			padding:5px;
		}
		.contact_form {
			width: 100%;
			padding: 25px;
			font-size: 14pt;
		}
		.contact_form input[type="text"]{
			width: 50%;
		}
		.label_form{
			width: 200px;
			display: inline-block;
		}
	</style>
</head>
<body>
	<?php 
	require_once 'blocks/header.php';
	require_once 'blocks/nav_bar.php';
	?>
	<div class="order_goods container-fluid ">
		
			<p class = "order_cart">Контактные данные</p>
			<hr>
<?php
				 $db = DataBase::getDB();      
?>
	<div class="contact_form"  >
		<form action="order_success.php" method="post">
			<p><span class = "label_form">ФИО:</span><input type="text" placeholder="Ваши фамлия, имя, очество"></p>
			<p><span class = "label_form">Номер телефона:</span><input type="text" placeholder = "Ваш номер"></p>
			<p><span class = "label_form">E-mail:</span><input type="text" placeholder = "Ваша электронная почта"></p>
			<p><span class = "label_form">Адрес:</span><input type="text" placeholder="Здесь ваш адрес"> </p>
			<p><span class = "label_form">Самовывоз </span><input type="checkbox"><span> (В таком случае можно адрес не указывать)</span></p>
			<p><span class = "label_form">Общая сумма:</span><span><?php echo $_SESSION['price'] ?> руб</span></p>
			<input type="submit" class = 'order_button' value="Сделать заказ">
		</form>
	</div>

	</div>
	<?php require_once "blocks/discription_order.php" ?>
</body>
</html>