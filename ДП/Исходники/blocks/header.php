<!-- Шапка-->
	<header class="">
		<div>
		<?php 
			if(!$_SESSION['login'])
			echo'<nav class="main-nav">
			<ul>
				<!-- ссылки на вызов форм -->
				<li><a class="cd-signin" href="#0">Вход</a></li>
				<li><a class="cd-signup" href="#0">Регистрация</a></li>
			</ul>
		     </nav>'; 
			else echo '
			<nav class="main-nav">
			<ul>
				<li><a class="cd-signin" href = "../user.php?"'.$_SESSION['id'].' > Ваш профиль: '.$_SESSION['login'].'</a></li>
				<li><a class="cd-signin" href="../php/unset.php" style = "color:#ff0000"> Выйти </a></li>
			</ul>
			</nav>';
			?>
		</div>
		
 <div class="clear"></div>
     	  <div class="h-middle">
            <div class="content">
                <a href="nhttps://notebookoff.et/" class="logo"><img src="../images/logo.png" alt="Ремонт ноутбуков в Киеве сервисный центр НоутбукОФФ"></a>
      <div class="popup-basket clr" >
              	<?php
		 //Корзина 
                if($_SESSION['goods'] ){
				 echo '<div class="cart_b">';
                
				 $db = DataBase::getDB();
				 if($_SESSION['goods'] )
			
				 foreach($_SESSION['goods'] as $k => $val){
				 $P = $db->selectRow("SELECT * FROM goods WHERE id = {?}",[$val]);
				 echo '<p>
					 	<img src="'.$P['img'].'" alt=""><span class = "subject_b" >'.$P['subject'].'</span>
						<p class = "over_price">Цена: <span class = "price_b">'.$P['price'].'руб </span><span class = "count_b">x'.$_SESSION['count_p'][$val].'</span></p>
					 </p>
                	<hr>';
				 }
          		
			
				echo '<a href="../php/unset_bask.php" >Очистить </a> <a href="../order_goods.php" >Заказать</a>';
			
			
               echo '</div>';
			 } ?>
		    <strong class="title">Корзина<span class="value" id="cart-total"><? 
			    if($_SESSION['price'])
			    echo $_SESSION['price'];
			    else echo "0"?> руб</span></strong>
		    <span  class="toggle"></span>
	   </div>

		<div class="search clr" id="search"  >
			<form action = "../result_search.php"  method="POST"> 
				<input type="text" class="t-val" name="search" value="" placeholder="Поиск... введите в строку Ваш запрос">
		    <div class="ctrl-btns clr">
			   <button><img src="../images/icon-search.png" alt=""></button>
  		  </div>
  		</form>
		   
 		</div>
	</div>
</div>
	</header>

	<div class="clear"></div>

<?php if(!$_SESSION['login']) require_once 'reg_auth_form.php'; ?>