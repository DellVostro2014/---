<div id="hardware" class="container">
	<div class ="row hardware" >
		<div class="icon_block col-lg-4 col-md-4 col-sm-12"> 
			<p class = "cell_icon_hardware"><img src="img/icon-body.png" alt=""><a href="">Детали корпуса</a></p>
			<p class = "cell_icon_hardware"><img src="img/icon-cooler.png" alt=""><a href="">Кулера</a></p>
		</div>
		
		<div class="icon_block col-lg-4 col-md-4 col-sm-12"> 
			<p class = "cell_icon_hardware"><img src="img/icon-matrix.png" alt=""><a href="">Матрицы</a></p>
			<p class = "cell_icon_hardware"><img src="img/icon-keyboard.png" alt=""><a href="">Клавиатуры</a></p>
		</div>
		<div class="icon_block col-lg-4 col-md-4 col-sm-12"> 
			<p class = "cell_icon_hardware"><img src="img/icon-power.png" alt=""><a href="">Блоки питания</a></p>
			<p class = "cell_icon_hardware"><img src="img/icon-ram.png" alt=""><a href="">Оперативная память
			</a></p>
		</div>
	</div>
</div>


<script type="text/javascript">
 $(document).ready(function(){
    $("#service").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
});
</script>