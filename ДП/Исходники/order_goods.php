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
	</style>
</head>
<body>
	<?php 
	require_once 'blocks/header.php';
	require_once 'blocks/nav_bar.php';
	?>
	<div class="order_goods container-fluid ">
		
			<p class = "order_cart">Корзина</p>
			<hr>
<?php
				 $db = DataBase::getDB();
				 if($_SESSION['goods'] )
				 foreach($_SESSION['goods'] as $k => $val){
				 $P = $db->selectRow("SELECT * FROM goods WHERE id = {?}",[$val]);
				
echo '			<div class="row">	
					<div class = "col-sm-1 col-xl-1 col-lg-1">
							<img src="'.$P['img'].'" alt="">
					</div>
					
					<div class = "col-sm-6 col-xl-6 col-lg-6">
							<span>'.$P['subject'].'</span>
					</div>
					
					<div class = "col-sm-4 col-xl-4 col-lg-4">
					<a class = "count_range" href = "php/count_order.php?id='.$P['id'].'&q=spare">-</a>
						<span class = "order_count">'.$_SESSION['count_p'][$val].'</span>
					<a class = "count_range" href = "php/count_order.php?id='.$P['id'].'&q=add">+</a><span class = "order_price">'.($P['price']*$_SESSION['count_p'][$val]).'руб </span>
					</div>
					
					<div class = "col-sm-1 col-xl-1 col-lg-1">
						
						<a href = "php/delet_goods.php?id='.$P['id'].'"><img style = "width:50%" src = "images/delete.png"></a>
						
					</div>
				</div>
                	<hr>';
				 }
       
?>

<a href="../order_send.php" class = 'order_button'>Далее >></a>
	</div>
    <?php require_once "blocks/discription_order.php" ?>
</body>
</html>