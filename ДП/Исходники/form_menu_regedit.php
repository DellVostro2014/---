<?	session_start();
	require_once '/blocks/head.php';
	require_once '/work_to_db/func_db.php';
	 $db = DataBase::getDB();
?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style/form_reg_edit.css">
<head>
<body>
<?php require_once '/blocks/header.php';
	 require_once '/blocks/nav_bar.php';
	?>
<div class="wrapp">
 <div class = "form">
	<form action = "php/add_category.php" method="post">
		  
		  <p>Имя категории:</p>
		  <input name = "category" type = "text">
		  <br>
		  <br>
		  <input type = "submit"  value = "Добавить категорию">
	  </form>

<hr>
   <form action = "php/add_subcategory.php" method="post">
	   <p>Выберите категорию:</p>
	   <select name = "category" id = "change_category">
			<?
			 $Q="SELECT * FROM main_categorys ORDER BY categorys";
			 $result = $db->select($Q);
			    for($i=0;$i<count($result);$i++)
				  echo'<option>'.$result[$i]['categorys'].'</option>';
			 ?>
	  </select>
	  <p>Имя подкатегории:</p>
		  <input name = "subcategory" type = "text">
		  <br>
		  <br>
	  <input type = "submit" value = "Добавить подкатегорию">
  </form>
  </div>
  <div class="form">
  	<? 
	 $Q="SELECT * FROM main_categorys  ORDER BY categorys";
	 $result = $db->select($Q);
	    for($i=0;$i<count($result);$i++){
		  echo'<div class = "dropdown">';
		  echo'<a class = "deleted" href="php/deleted_categorys.php?id='.$result[$i]['id'].'&query=main">Удалить</a>
			  <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown" >'.$result[$i]['categorys'].'</button>
			  <ul class="dropdown-menu"> ';
			$id = [$main_res[$i]['id']];
			$sub_res = $db->select($Q = "SELECT * FROM categorys WHERE main_category ={?}",$id);

		    for($j=0;$j<count($sub_res);$j++){
			  echo'<li><a href="#">'.$sub_res[$j]['category'].'</a ><a class = "deleted del_sub" href="php/deleted_categorys.php?id='.$sub_res[$j]['id'].'&query=sub">[x]</a></li>';
		    }
		  echo'</ul>
			 </div>';
		    }
	 ?>
  </div>
</div>
</body>
<html>
