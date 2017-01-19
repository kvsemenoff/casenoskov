
<!-- Top header -->
<section class="dd-top-header" id="js-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="dd-header-top-left">
					<a href="#"><img class="img-responsive" src="img/logo.png" alt=""></a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="karta-wrap">
					<div class="dd-karta">
						<span>Доставка по Всей России</span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dd-header-top-tel">
					<span class="dd-sp1">Звоните<span> +7() ****????</span></span><br>
					<span class="dd-sp2">время работы<span> 10:00 - 21:00</span></span>
					<div class="dd-button-wrap">
						<a href="#log-in" name="modal" class="button-1 button-1_grey button-1_font_1">Заказать обратный звонок</a>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>

<!-- Middle header -->
<section class="dd-middle-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="middle-header-title">
					<span>Купи КЕЙС НОСКОВ</span><br>
					<span class="dd-next-span">по очень выгодной цене сегодня - и получи <span> 3 подарка!</span></span>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Bottom header -->
<section class="dd-bottom-header">
	<div class="container rel">
		<div class="row">
			
			<div class="dd-keys-wrap">
				<div class="dd-keys-img">
					<img class="img-responsive" src="img/keys.png" alt="">
				</div>
			</div>
			<div class="dd-actsia">
				<span>Внимание!</span><br>
				<span>Акция</span>
			</div>
			<!-- Товары по акции -->
			<div class="dd-actions-wrap">
				<div class="dd-actions margin">
					<span>К каждому заказу – 2 пары<br>
						войлочных  фольгированных<br> 
						стелек в <span> ПОДАРОК</span></span>
						<div class="dd-number">
							<img src="img/one.png" alt="">
						</div>
						<div class="dd-podarok">
							<img src="img/stelki.png" alt="">
						</div>
					</div>
					<div class="dd-actions margin">
						<span>При покупке от 2600 руб -<br>
							2 пары стелек + портмоне<br> 
							Carwallet в <span> ПОДАРОК</span></span>
							<div class="dd-number">
								<img src="img/two.png" alt="">
							</div>
							<div class="dd-podarok position">
								<img src="img/port.png" alt="">
							</div>
						</div>
						<div class="dd-actions margin">
							<span>При покупке от 4000 руб - 2 пары<br>
								стелек + портмоне Carwallet +<br> 
								часы Curren в <span> ПОДАРОК</span></span>
								<div class="dd-number">
									<img src="img/three.png" alt="">
								</div>
								<div class="dd-podarok position">
									<img src="img/clock.png" alt="">
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<!-- Timer -->
						<div class="relative">
							<div class="timer-container">
								<div class="dd-timer">
									<div class="dd-timer-txt">
										<span>До конца акции осталось:</span>
									</div>
									<div class="dd-timer-all-wrap">
										<div class="dd-timer">
											<div class="dd-times">
												<div class="dd-div">

													<span id="dd-days">02</span>
												</div>
												<div class="dd-div">

													<span id="dd-hours"></span>
												</div>
												<div class="dd-div">

													<span id="dd-min"></span>
												</div>
												<div class="dd-div">

													<span id="dd-sec"></span>
												</div>
												<div class="dd-time-txt">
													<span>дней</span>
												</div>
												<div class="dd-time-txt dd-time-txt1">
													<span>часов</span>
												</div>
												<div class="dd-time-txt dd-time-txt2">
													<span>минут</span>
												</div>
												<div class="dd-time-txt dd-time-txt3">
													<span>секунд</span>
												</div>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<!-- Конец Таймер -->

						<div class="dd-form-relative">
							<div class="dd-header-form-wrap-all">
								<div class="dd-header-form-wrap">
									<form class="form1" method="post" action="#">
										<div class="dd-input-wrap">
											<input class="mtop phone" type="text" placeholder="8(___)___-__-__"  name="phone">
										</div>
										<div class="dd-header-button-wrap">
										<input class="button-1 button-1_orange button-1_font_2" type="submit" name="submit" value="Заказать">	
											<!-- <a class="button-1 button-1_orange button-1_font_2" href="#">Заказать</a> -->
										</div>
										<div class="dd-txt-but">
											<span>Мы гарантируем сохранность персональных данных</span>
										</div>
									</form>
									<div class="dd-watch-the-case" id="js-nav2">
										<a href="#js-keys">Посмотреть Кейсы</a>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</section>

			<!-- Меню хедер -->
			<section class="dd-menu-header">
				<div class="container">
					<div class="row">
						<div class="dd-menu-header-container">
							<ul id="js-nav">
								<li class="dd-first"><a class="active" href="#js-header">Главная</a></li>
								<li><a href="#js-socks">Кейсы носков</a></li>
								<li><a href="#js-summer">Вопросы</a></li>
								<li><a href="#js-dostavka">Доставка</a></li>
								<li><a href="#js-contact">Контакты</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<script>

				var count = 8;
				var minutes = 46;
				var hours = 18;

				var end = 0;

				if (count < 10) {
					$("#dd-sec").html('0'+count);
				}
				else {
					$("#dd-sec").html(count);
				}
				if (minutes < 10) {
					$("#dd-min").html('0'+minutes);
				}
				else {
					$("#dd-min").html(minutes);
				}
				if (hours < 10) {
					$("#dd-hours").html('0'+hours);
				}
				else {
					$("#dd-hours").html(hours);
				}

	var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

	function timer()
	{
		count = count - 1;
		if (count<10) {
			$("#dd-sec").html('0'+count);
		} else {
			$("#dd-sec").html(count);
		}
		if (count == 0) {
			minutes = minutes - 1;
			if (minutes < 10 && minutes >= 0) {
				$("#dd-min").html('0'+minutes);
			}
			if (minutes > 10) {
				$("#dd-min").html(minutes);
			}
			if (minutes < 0) {
				hours = hours - 1;
				if (hours < 10 && hours >=0) {
					$("#dd-hours").html('0'+hours);
				}
				if (hours>10) {
					$("#dd-hours").html('0'+hours);
				}
				if (hours < 0 ) {
					
					end = 1;
					clearTimeout(counter);
				}
				if (end) { minutes = '00';}
				else {
					minutes = 59;
				}
				$("#dd-min").html(minutes);
			}
			if (end) { count = '00';}
			else {
				count = 59;
			}
			
			$("#dd-sec").html(count);
		}
	}

	
</script>