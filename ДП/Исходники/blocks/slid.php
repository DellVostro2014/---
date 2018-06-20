<div id="service" class="prev_content" >
	<div class="slide">
			<p><a href="">Нужен ремонт?</a></p>
			<img src="../images/repair.jpg" alt="">			
	</div>
	
	<div class="slide">
		 
		<p><a href="#hardware">Ищете комплетующие?</a></p>
			<img src="../images/hardware.jpg" alt="">
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
	var H = $(window).innerHeight();
	H/=2;
	H = Math.round(H);
   
	var doc = $('.slide img').css('height',H);
	console.log(H);
	});
</script>