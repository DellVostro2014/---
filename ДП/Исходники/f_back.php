<?php
			require_once 'php/start.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('blocks/head.php'); ?>
    
 	<link rel="stylesheet" type="text/css" href="style/f_back.css">
	 
</head>

<body>
			
			<?php
			 //nav_bar
			require_once('blocks/nav_bar.php');
			?>
			
	

 <form action="" class="contact">
    <fieldset class="contact-inner">
      <p class="contact-input">
        <input type="text" name="name" placeholder="Ваше имя…" autofocus>
      </p>

      <p class="contact-input">
     	<input type="e-mail" value="<? echo $_SESSION['mail'] ?>" name="mail" placeholder="Ваш e-mail…" autofocus>
      </p>
      
       <p class="contact-input">
     	<input type="text" value="" name="theme_msg" placeholder="Тема сообщения…" autofocus>
      </p>

      <p class="contact-input">
        <textarea name="message" placeholder="Ваше сообщение…"></textarea>
      </p>

      <p class="contact-submit">
        <input type="submit" value="Отправить сообщение">
      </p>
      <p>*ответ на ваше сообщение придет на указанный вами e-mail </p>
    </fieldset>
  </form>







<footer class="container-fluid row">
	
</footer>	

			<?php
			   //
			require_once('blocks/js_sript.php');
			?>
</body>
</html>