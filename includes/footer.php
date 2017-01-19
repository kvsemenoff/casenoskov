<section class="section db-footer">
	<ul class="db-footer-ul">
		<li><a href="#">Доставка и гарантия</a></li>
		<li><a href="#">Контакты</a></li>
		<li><a href="#">Оплата</a></li>
		<li><a href="#">Шерстяные</a></li>
		<li><a href="#">Хлопок 100%</a></li>
		<li><a href="#">В кейсах</a></li>
		<li><a href="#">Оптом</a></li>
		<li><a href="#">От производителя</a></li>
		<li><a href="#">По фасону</a></li>
		<li><a href="#">Кейсы носков</a></li>
		<li><a href="#">По цветам</a></li>
		<li><a href="#">Носки на год</a></li>
	</ul>
	
</section>


<div id="mask"></div>
<div id="log-in" class="window">
	<div class="dd-form-wrap">
		<form class="form1" action="#" method="post">
			<div class="form-wrap-main">
				<div class="dd-close"></div>
				<div class="dd-input-wrap dd-padding-bottom">
					<div class="pop-title">
						<span>Оставьте заявку</span><br>
						<span>и мы перезвоним Вам!</span>
					</div>
					<input class="width100" type="text" placeholder="Ваше имя" name="uname">
					<input class="mtop phone width100" type="text" placeholder="8(___)___-__-__"  name="phone">
				</div>
				<input class="button-1 button-1_orange button-1_font_2 mtt" type="submit" name="submit" value="Заказать">	
			</div>
		</form>
	</div>
</div>
<div id="thanks" class="window">
	<div class="form-wrap-main">
		<div class="dd-close"></div>
		<div class="form-title">
			Спасибо за заявку!
		</div>
		<div class="dd-form-txt">
			Наш менеджер свяжется с вами в ближайшее время!
		</div>
	</div>
</div>
<a href="#thanks" name="modal"></a>

<script>
	$(function() {
		$("#js-nav a, #js-nav2 a ").click(function(e){
			e.preventDefault();
			var currentBlock = $(this).attr("href");
			currentBlockoffset = $(currentBlock).offset().top;
			$("html, body").animate({
				scrollTop: currentBlockoffset
			}, 500);
		});
	});   
</script> 