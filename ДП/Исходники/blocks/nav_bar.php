
<script type="text/javascript">

		</script>
 
	<div id="navigation">
	<nav class="top_m container-fluid" id="mainmenu">
	 
		 <ul class="nav navbar-nav " id="menu">
			 <li class="item_nav"><a href="/">ГЛАВНАЯ</a></li>
			 <li class="item_nav"><a href="">О НАС</a></li>
			 <li class="parent"><a href="">товары</a>
                <ul>

    					 <?php require_once '/view_menu.php'; ?>

                </ul>
            </li>
                
		   
			 <li class="item_nav" ><a href="">СЕРВЕСНЫЙ ЦЕНТР</a></li>
			 <li class="item_nav"><a href="/f_back.php">ОБРАТНАЯ СВЯЗЬ</a></li>
			
		 
		 <? if($_SESSION['status']=='admin')
		 echo'
		 <li class="nav navbar-nav parent"><a href="User.php">Cообщения(0)</a>
		 	<ul>
			 <li class="item_nav"><a href="add_goods.php">Заказы на товар(0)</a></li>
			 <li class="item_nav"><a href="form_menu_regedit.php">Заявки на ремонт(0)</a></li>		 
		 </ul>
		 </li>
		 <li class="nav navbar-nav parent "  ><a href="">Дополнительно</a>
		 <ul>
			 <li class="item_nav"><a href="User.php">ПОЛЬЗОВАТЕЛИ</a></li>
			 <li class="item_nav"><a href="add_goods.php">Работа с товаром</a></li>
			 <li class="item_nav"><a href="form_menu_regedit.php">Работа с меню</a></li> 
		 </ul>
		 </li>';
		 ?>
		</ul>
		</div>
	</nav>
</div>

		