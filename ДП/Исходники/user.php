<?
session_start();
require_once "/work_to_db/func_db.php";
require_once "blocks/head.php";

$id = $_GET['id'];
?>

<link rel="stylesheet" href="../style/mega_menu.css">

<style>


#main {
 background-color: #f2f2f2;
 padding: 20px;
-webkit-border-radius: 4px;
 -moz-border-radius: 4px;
 -ms-border-radius: 4px;
 -o-border-radius: 4px;
 border-radius: 4px;
 border-bottom: 4px solid #ddd;
}
#real-estates-detail #author img {
 -webkit-border-radius: 100%;
 -moz-border-radius: 100%;
 -ms-border-radius: 100%;
 -o-border-radius: 100%;
 border-radius: 100%;
 border: 5px solid #ecf0f1;
 margin-bottom: 10px;
}
#real-estates-detail .sosmed-author i.fa {
 width: 30px;
 height: 30px;
 border: 2px solid #bdc3c7;
 color: #bdc3c7;
 padding-top: 6px;
 margin-top: 10px;
}
.panel-default .panel-heading {
 background-color: #fff;
}
#real-estates-detail .slides li img {
 height: 450px;
}
.prof_foto input[type='submit']
	{
    width: 90%;
	padding: 10px ;
	background:#1c3657; 
	border-style: none;
	color: #fff;
	font-size: 14pt;
	}
</style>

<?php require_once "/blocks/nav_bar.php" ?>
<div class="container">
<div id="main">


 <div class="row" id="real-estates-detail">
 <div class="col-lg-4 col-md-4 col-xs-12">
 <div class="panel panel-default">
 <div class="panel-heading">
 
 </div>
 <div class="panel-body">
 <div class="text-center" id="author">
 <img src="images/user.png">
 <h3><?php echo $_SESSION['login']; ?></h3>
 <hr>
 <form class = 'prof_foto'>
 	<input type="file" name="foto_profile" ><br>
 	<input type="submit" value = "Обновить фото" name="">
 </form>
 

 
 </div>
 </div>
 </div>
 </div>
 <div class="col-lg-8 col-md-8 col-xs-12">
 <div class="panel">
 <div class="panel-body">
 <ul id="myTab" class="nav nav-pills">
 <li class="active"><a href="#detail" data-toggle="tab">О пользователе</a></li>
 </ul>
 <div id="myTabContent" class="tab-content">
<hr>
	 <div class="tab-pane fade active in" id="detail">
	 <h4> Профиль</h4>
		 <table class="table table-th-block">
			 <tbody>
			 
				 <tr><td class="active">Статус:</td><td><?php echo $_SESSION['status']; ?></td></tr>
				 <tr><td class="active">Почта:</td><td><?php echo $_SESSION['mail']; ?></td></tr>
				 <tr><td class="active">ID:</td><td><?php echo $_SESSION['id']; ?></td></tr>
			</tbody>
		 </table>
	 </div>

 </div>
 </div>
 </div>
 </div>
 </div>
</div>

</div><!-- /.main -->
</div><!-- /.container -->
