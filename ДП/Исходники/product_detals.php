<?php	session_start();?>
<!DOCTYPE html>
<html>
<head>

	<?php	
	    require_once '/work_to_db/func_db.php';
		$db = DataBase::getDB();

		
		$Q = "SELECT * FROM `goods` WHERE id = {?}";
		$res = $db-> select($Q,[$_GET['id']]);
		$title = $res[0]['subject'];
		require_once '/blocks/head.php';
	?>
	<link rel="stylesheet" href="style/product_detals.css">
</head>
<body>
	<?php
		require_once '/blocks/header.php';
		require_once '/blocks/nav_bar.php';
	?>
		<div class="product">
			
			
			
			
			<div class = 'detals'>
				<span class = 'subject'><? echo $res[0]['subject']; ?></span><br>
				<hr>
				<img class = "image" src=<? echo"'".$res[0]['img']."'"?>>
				
				
				<p>Описание:</p>
				<hr>
				<span class = 'discription'><? echo $res[0]['description']; ?></span>
				<div style = 'clear: both;'></div>
				<hr>
				<div class = "bar_operation">
					<p class = 'price'>Цена: <span class="price_value"><? echo $res[0]['price']; ?></span><span> руб</span></p>
				
				<span class = "operation"><a href="php/add_basck.php?id=<? echo $res[0]['id'] ?> ">Добавить в корзину</a></span>	
				</div>
				
			</div>
		
			<?php 
			if ($_SESSION['status']=='admin') 
				echo'<span class = "admin_operation"><a href="">Редактировать</a></span>
				<span class = "admin_operation"><a href="">Удалить</a></span>'; ?>
				
		</div>
<script type="text/javascript">
	$(document).ready(function() { // Ждём загрузки страницы

$(".image").click(function(){	// Событие клика на маленькое изображение
var img = $(this);	// Получаем изображение, на которое кликнули
var src = img.attr('src'); // Достаем из этого изображения путь до картинки
$("body").append("<div class='popup'>"+ //Добавляем в тело документа разметку всплывающего окна
				 "<div class='popup_bg'></div>"+ // Блок, который будет служить фоном затемненным
				 "<img src="+src+" class='popup_img' />"+ // Само увеличенное фото
				 "</div>"); 
$(".popup").fadeIn(800); // Медленно выводим изображение
$(".popup_bg").click(function(){	// Событие клика на затемненный фон	   
	$(".popup").fadeOut(800);	// Медленно убираем всплывающее окно
	setTimeout(function() {	// Выставляем таймер
	  $(".popup").remove(); // Удаляем разметку высплывающего окна
	}, 800);
});
});

});

		</script>
</body>
</html>