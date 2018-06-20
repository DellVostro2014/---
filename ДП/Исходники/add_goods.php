<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php	
     
	require_once '/blocks/head.php';
	require_once '/work_to_db/func_db.php';
?>
<link rel="stylesheet" href="style/add_goods.css">
<head>
<body>
<?	require_once '/blocks/header.php';
	require_once '/blocks/nav_bar.php';?>
<div class="wrapp">
 <div class = "form">
	<form enctype="multipart/form-data" action="php/add_goods.php" method="POST">
	 <div class = "sub_form_block">  
		  <p>Наимнование:</p>
		  <input  class = "sub_key" name = "subject" type = "text">
		  <br>
		  <p>Описание:</p>
		  <textarea name = "description" type = "text"></textarea><br>
		  <p>Ключевые слова:</p>
		  <input class = "sub_key"  name = "keywords" type = "text">
		  <p>Цена:</p>
		  <input name = "price" type="text">
		  <span>(руб)</span>
		   <p>На складе:</p>
		  <input name = "stock" type="text">
		   <span>(шт)</span>
		
	   </div>
	   <div class = "sub_form_block">
		  <p>Выберите категорию:</p>

	<? 
	 $Q="SELECT * FROM main_categorys  ORDER BY categorys";
	 $result = $db->select($Q);
	    for($i=0;$i<count($result);$i++){
		  echo'<div class = "dropdown">';
		  echo'<input type="radio" class = "radi" value = "'.$result[$i]['categorys'].'" name = "main_category" class = "change_category" >
			  <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown" >'.$result[$i]['categorys'].'</button>
			  <ul class="dropdown-menu">';
			$id = [$main_res[$i]['id']];
			$sub_res = $db->select($Q = "SELECT * FROM categorys WHERE main_category ={?}",$id);

		    for($j=0;$j<count($sub_res);$j++){
			  echo'<li><input type="radio" class = "radi" value ="'.$sub_res[$j]['category'].'" name = "sub_category" class = "sub_category" ><a href="#">'.$sub_res[$j]['category'].'</a></li>';
		    }
		  echo'</ul>
			 </div>';
		    }
	 ?>

			<br>
		  <hr>
		  <p>Добавить фото:</p>
		  <input name = "img" type = "file">
		 
		</div>
		<div class="clear"></div>
		<input type = "submit" value = "Добавить товар">
	  </form>
  </div>
</div>
</body>
</html>