<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="libs/wow/animate.css">
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/wow/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>

	<script>
    	new WOW().init();
    </script>

	<script src="js/responsiveTabs.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/common.js"></script>


<!-- Top header -->
<section class="dd-top-header" id="js-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="dd-header-top-left">
					<a href="index.php"><img class="img-responsive" src="img/logo.png" alt=""></a>
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

<section class="section section_padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 df-margin">
				<h2 class="df-comfort__caption df-comfort__caption_view">В чем удобство?</h2>
				<div class="df-comfort df-comfort_view df-margin-right">
					<span class="df-comfort__before df-comfort__before_view">До...</span>
					<div class="df-comfort__img df-comfort__img_view">
						<img src="img/df-comfort1.png" class="img-responsive" alt="">
					</div>
					<div class="df-comfort__text df-comfort__text_view">
						<span>Куча разных целых и рваных носков.</span>
						<span>Каждый день надо искать пару</span>
						<span>Высокие цены в магазинах (от 100 руб.)</span>
					</div>
				</div>
				<div class="df-comfort df-comfort_view">
					<span class="df-comfort__after df-comfort__after_view">После...</span>
					<div class="df-comfort__img df-comfort__img_view2">
						<img src="img/df-comfort2.png" class="img-responsive" alt="">
					</div>
					<div class="df-comfort__text df-comfort__text_view df-comfort__text_2">
						<span>От 30 до 100 пар носков в кейсе</span>
						<span>Все носки собраны в одном месте</span>
						<span>Низкая цена (от 25 руб. за пару)</span>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</section>	

<section class="section section_background-db section_padding-db" id="js-keys">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="center">
					<h2 class="h2_white center_position-db">Как выглядит кейс?</h2>
				</div>
			</div>
			<div class="clearfix"></div>
				<div class="col-md-4">
					<div class="db-case-content__case1">
						<img src="img/db-case.png" alt="img">
					</div>
				</div>
				<div class="col-md-4">
					<ul class="db-case-content__check db-case-content__check_view">
						<li>Солидно</li>
						<li>Стильно</li>
						<li>Качественно</li>
					</ul>
				</div>
				<div class="col-md-4">
					<div class="db-case-content__case2">
						<img src="img/db-case2.png" alt="img">
					</div>
				</div>	
					
				<div class="col-md-12">
						<p class="db-text db-text_view">
							От 30 до 100 пар носков упаковываются в черный лакированный кейс из твердого картона. <br>
							Он будет удобен при переносе и отлично подойдет для хранения носков. <br>
							Такой кейс носков внешне выглядит по-настоящему мужским подарком.
						</p>
				</div>
				<div class="clearfix"></div>
		</div>
	</div>
</section>

<section class="section section_padding" id="js-socks">
	<div class="container">
		<div class="row">
			<div class="col-md-12 df-view">
				<h2 class="df-case-caption df-case-caption_view">Кейсы носков</h2>
				<div class="df-top-block df-top-block_view">
					<span>Все носки одинаковые</span>
					<span>Гладкие, без рисунка</span>
					<span>Умеренно тянутся</span>
					<span>Резинка не жмет</span>
				</div>

				<div class="df-blocksocks df-blocksocks_view">
					<div class="df-blocksocks__absolute df-blocksocks__absolute_view">Выгодно</div>
					<div class="df-blocksocks__image df-blocksocks__image_view">
						<img src="img/df-case1.png" class="img-responsive" alt="">
					</div>
					<div class="df-blocksocks__text-block df-blocksocks__text-block_view">
						<h4 class="df-blocksocks__cap df-blocksocks__cap_view">Кейс носков <span>«Натуральный Хлопок»</span></h4>
						<div class="df-blocksocks__char">
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Состав: 100% хлопок</span>
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Производство: Белоруссия </span>
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Размеры: 25, 27, 29, 31</span>
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" checked>
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">30 пар</span>
							<span>1400 руб.</span>
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" >
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">50 пар</span>
							<span>1800 руб.</span>
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" >
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">100 пар</span>
							<span>2500 руб.</span>
						</div>

						<span class="df-blocksocks__price df-blocksocks__price_view">Сумма: <span>2500 руб.</span></span>

						<div class="df-blocksocks__order df-blocksocks__order_view">
							<form method="post" class="form1" >
								<input type="text" class="phone" name="phone" placeholder="8(___)___-__-__">
								<input type="submit" class="df-but" name="submit" value="ЗАКАЗАТЬ">


								<input type="hidden" name="product" value="«Натуральный Хлопок»" class="product">
								<input type="hidden" name="par" class="par" value="1">
								<input type="hidden" name="price" class="price" value="1">
							</form>
						</div>
					</div>
				</div>

				<div class="df-blocksocks df-blocksocks_view">
					<div class="df-blocksocks__absolute df-blocksocks__absolute_view2">Бизнес Класс</div>
					<div class="df-blocksocks__image df-blocksocks__image_view">
						<img src="img/df-case2.png" class="img-responsive" alt="">
					</div>
					<div class="df-blocksocks__text-block df-blocksocks__text-block_view">
						<h4 class="df-blocksocks__cap df-blocksocks__cap_view">Кейс носков <span>«Бамбуковые носки»</span></h4>
						<div class="df-blocksocks__char">
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Состав: 85% бамбук, 15% хлопок</span>
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Производство: Белоруссия </span>
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Размеры: 25, 27, 29, 31</span>
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" checked>
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">30 пар</span>
							<span>1400 руб.</span>
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" >
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">50 пар</span>
							<span>1800 руб.</span>
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" >
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">100 пар</span>
							<span>2500 руб.</span>
						</div>

						<span class="df-blocksocks__price df-blocksocks__price_view">Сумма: <span>2500 руб.</span></span>

						<div class="df-blocksocks__order df-blocksocks__order_view">
							<form method="post" class="form1">
								<input type="text" class="phone" name="phone" placeholder="8(___)___-__-__">
								<input type="submit" class="df-but" name="submit" value="ЗАКАЗАТЬ">
								<input type="hidden" name="product" value="«Натуральный Хлопок»" class="product">
								<input type="hidden" name="par" class="par" value="1">
								<input type="hidden" name="price" class="price" value="1">
							</form>
						</div>
					</div>
				</div>

				<div class="df-blocksocks df-blocksocks_view">
					<div class="df-blocksocks__absolute df-blocksocks__absolute_view3">Люкс</div>
					<div class="df-blocksocks__image df-blocksocks__image_view">
						<img src="img/df-case3.png" class="img-responsive" alt="">
					</div>
					<div class="df-blocksocks__text-block df-blocksocks__text-block_view">
						<h4 class="df-blocksocks__cap df-blocksocks__cap_view">Кейс носков <span>«Хлопок Люкс»</span></h4>
						<div class="df-blocksocks__char df-blocksocks__char_2">
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Состав: 100%  хлопок</span>
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Производство: Белоруссия </span>
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Размеры: 25, 27, 29, 31</span>
							<span class="df-blocksocks__characteristics-text_view">При изготовлении используется хлопок высшего качества, обработанный 
							по новейшей технологии, что придает ему еще больше прочности и благородный внешний вид</span>
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" checked>
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">30 пар</span>
							<span>1400 руб.</span>
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" >
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">50 пар</span>
							<span>1800 руб.</span>
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" >
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">100 пар</span>
							<span>2500 руб.</span>
						</div>

						<span class="df-blocksocks__price df-blocksocks__price_view">Сумма: <span>2500 руб.</span></span>

						<div class="df-blocksocks__order df-blocksocks__order_view">
							<form method="post" class="form1">
								<input type="text" class="phone" name="phone" placeholder="8(___)___-__-__">
								<input type="submit" class="df-but" name="submit" value="ЗАКАЗАТЬ">
								<input type="hidden" name="product" value="«Натуральный Хлопок»" class="product">
								<input type="hidden" name="par" class="par" value="1">
								<input type="hidden" name="price" class="price" value="1">
							</form>
						</div>
					</div>
				</div>

				<div class="df-blocksocks df-blocksocks_view">
					<div class="df-blocksocks__absolute df-blocksocks__absolute_view4">Для лета и спорта</div>
					<div class="df-blocksocks__image df-blocksocks__image_view df-bg-img">
						<img src="img/df-case4.png" class="img-responsive" alt="">
					</div>
					<div class="df-blocksocks__text-block df-blocksocks__text-block_view">
						<h4 class="df-blocksocks__cap df-blocksocks__cap_view">Кейс носков <span>«Бамбуковые носки MIX»</span></h4>
						<div class="df-blocksocks__char df-blocksocks__char_2">
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Состав: 85% бамбук, 15% хлопок</span>
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Цвет: черный, серый, белый </span>
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Производство: Белоруссия </span>
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Размеры: 25, 27, 29, 31</span>
							
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" checked>
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">30 пар</span>
							<span>1400 руб.</span>
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" >
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">50 пар</span>
							<span>1800 руб.</span>
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" >
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">100 пар</span>
							<span>2500 руб.</span>
						</div>

						<span class="df-blocksocks__price df-blocksocks__price_view">Сумма: <span>2500 руб.</span></span>

						<div class="df-blocksocks__order df-blocksocks__order_view">
							<form method="post" class="form1">
								<input type="text" class="phone" name="phone" placeholder="8(___)___-__-__">
								<input type="submit" class="df-but" name="submit" value="ЗАКАЗАТЬ">
								<input type="hidden" name="product" value="«Натуральный Хлопок»" class="product">
								<input type="hidden" name="par" class="par" value="1">
								<input type="hidden" name="price" class="price" value="1">
							</form>
						</div>
					</div>
				</div>

				<div class="df-blocksocks df-blocksocks_view">
					<div class="df-blocksocks__absolute df-blocksocks__absolute_view5">Удобно</div>
					<div class="df-blocksocks__image df-blocksocks__image_view df-bg-img">
						<img src="img/df-case5.png" class="img-responsive" alt="">
					</div>
					<div class="df-blocksocks__text-block df-blocksocks__text-block_view">
						<h4 class="df-blocksocks__cap df-blocksocks__cap_view">Кейс носков <span>«Носки ХБ MIX»</span></h4>
						<div class="df-blocksocks__char">
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Состав: 100% Хлопок </span>
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Цвет: черный, серый, белый </span>
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Производство: Белоруссия </span>
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Размеры: 25, 27, 29, 31</span>
							
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" checked>
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">30 пар</span>
							<span>1400 руб.</span>
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" >
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">50 пар</span>
							<span>1800 руб.</span>
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" >
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">100 пар</span>
							<span>2500 руб.</span>
						</div>

						<span class="df-blocksocks__price df-blocksocks__price_view">Сумма: <span>2500 руб.</span></span>

						<div class="df-blocksocks__order df-blocksocks__order_view">
							<form method="post" class="form1">
								<input type="text" class="phone" name="phone" placeholder="8(___)___-__-__">
								<input type="submit" class="df-but" name="submit" value="ЗАКАЗАТЬ">
								<input type="hidden" name="product" value="«Натуральный Хлопок»" class="product">
								<input type="hidden" name="par" class="par" value="1">
								<input type="hidden" name="price" class="price" value="1">
							</form>
						</div>
					</div>
				</div>

				<div class="df-blocksocks df-blocksocks_view">
					<div class="df-blocksocks__absolute df-blocksocks__absolute_view6">Идеально для зимы</div>
					<div class="df-blocksocks__image df-blocksocks__image_view">
						<img src="img/df-case6.png" class="img-responsive" alt="">
					</div>
					<div class="df-blocksocks__text-block df-blocksocks__text-block_view">
						<h4 class="df-blocksocks__cap df-blocksocks__cap_view">Кейс носков <span>«Шерстяные»</span></h4>
						<div class="df-blocksocks__char">
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Состав: 73% шерсть, 27% акрил</span>							
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Производство: Белоруссия </span>
							<span class="df-blocksocks__characteristics df-blocksocks__characteristics_view">Размеры: 25, 27, 29, 31</span>							
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" checked>
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">30 пар</span>
							<span>1400 руб.</span>
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" >
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">50 пар</span>
							<span>1800 руб.</span>
						</div>
						<div class="df-blocksocks__inputs df-blocksocks__inputs_view">
							<label>
								<input class="checkbox" type="radio" name="checkbox-test" >
					   			<span class="checkbox-custom"></span>
					   			<span class="label"></span>
				   			</label>
							<span class="dfpar">100 пар</span>
							<span>2500 руб.</span>
						</div>

						<span class="df-blocksocks__price df-blocksocks__price_view">Сумма: <span>2500 руб.</span></span>

						<div class="df-blocksocks__order df-blocksocks__order_view">
							<form method="post" class="form1">
								<input type="text" class="phone" name="phone" placeholder="8(___)___-__-__">
								<input type="submit" class="df-but" name="submit" value="ЗАКАЗАТЬ">
								<input type="hidden" name="product" value="«Натуральный Хлопок»" class="product">
								<input type="hidden" name="par" class="par" value="1">
								<input type="hidden" name="price" class="price" value="1">
							</form>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>		

<section class="section section_padding section__bg-df" id="js-summer">
	<div class="container">
		<div class="row">			
			<h2 class="df-questions__caption df-questions__caption_view">Часто задаваемые вопросы</h2>
			<div class="df-questions-all df-questions-all_view">
				<div class="df-questions-all__image df-questions-all__image_view">
					<img src="img/df-question.png" class="img-responsive" alt="">
				</div>
				<div class="df-question df-question_view">
					<h4 class="df-question__cap df-question__cap_view">Как угадать с размером? Вдруг носки не подойдут?</h4>
					<span class="df-question__answer df-question__answer_view">Ответ:</span>
					<p class="df-question__text df-question__text_view">Вам не придется угадывать! Просто сообщите менеджеру размер обуви, и мы подберем для Вас нужную 
					маркировку носков. Они точно подойдут, так как один размер носков подходит на два размера по обуви 
					(например,  39-40, 41-42 и т.д. ). Более того, после стирок носки не вытягиваются и не садятся, сохраняя 
					свою форму и длину в изначальном виде
					</p>
				</div>
				<div class="df-question df-question_view">
					<h4 class="df-question__cap df-question__cap_view">На носках есть узоры или рисунки?</h4>
					<span class="df-question__answer df-question__answer_view">Ответ:</span>
					<p class="df-question__text df-question__text_view">Рисунков и узоров нет. Все носки гладкие и одинаковые, что избавит вас от сложностей подбора нужной 
					пары после стирки
					</p>
				</div>
				<div class="df-question df-question_view">
					<h4 class="df-question__cap df-question__cap_view">Они прочные? Быстро рвутся?</h4>
					<span class="df-question__answer df-question__answer_view">Ответ:</span>
					<p class="df-question__text df-question__text_view">Все носки изготавливаются из качественных материалов, поэтому  каждая пара выдерживает  до 3-4 
						месяцев постоянной носки с учетом многократных стирок
					</p>
				</div>
				<div class="df-question df-question_view">
					<h4 class="df-question__cap df-question__cap_view">Носки красят ноги?</h4>
					<span class="df-question__answer df-question__answer_view">Ответ:</span>
					<p class="df-question__text df-question__text_view">Конечно, нет. Все ткани и нити, из которых изготавливаются носки, проходят специальную обработку на 
					фабрике,  что исключает их перекрашивание и выцветание
					</p>
				</div>
				<div class="df-question df-question_view">
					<h4 class="df-question__cap df-question__cap_view">Почему цена существенно ниже, чем в рознице?</h4>
					<span class="df-question__answer df-question__answer_view">Ответ:</span>
					<p class="df-question__text df-question__text_view">Мы напрямую работаем с фабрикой-производителем, поэтому избегаем многократных наценок оптовиков 
					и перекупщиков, и имеем возможность  работать практически без наценки
					</p>
				</div>
			</div>			
		</div>
	</div>
</section>		

<section class="section section_pay-view" id="js-dostavka">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<h2 class="db-h2-pay db-h2-pay_margin">Доставка и оплата</h2>
				
				<ul class="db-ul-pay db-ul-pay_view">
					<li class="db-one"><span  class="db-orange">Доставка по Москве </span>осуществляется курьерской службой. Сроки доставки: 1-2 дня. </li>
					<li class="db-two"><span  class="db-orange">Доставка по России </span>осуществляется курьерской службой или почтой России (в зависимости от региона). Сроки доставки 2-12 дней.</li>
					<li class="db-three"><span  class="db-orange">Стоимость доставки </span>– от 350 р. (в зависимости от региона).</li>
					<li class="db-four">Точные <span class="db-orange">стоимость и сроки доставки </span>обсуждаются индивидуально с менеджером при подтверждении заказа.</li>
					<li class="db-five"><span  class="db-orange">Оплата </span>производится наличными при получении заказа или предоплатой на банковский счет и электронные кошельки.
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>			
</section>

<section class="section section-gifts-db-fon">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="db-center-gifts">подарки</h2>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-3">
				<div class="db-imgbox-left">
					<img src="img/gifts-1.png" alt="img">
				</div>
			</div>
			<div class="col-md-8">
				<div class="db-block-one">
					<span class="db-span-view">Две пары стелек в подарок к каждому заказу!</span>
					<p class="db-p-view">Войлочные фольгированные стельки. Изготовлены из натуральной войлочной основы 
						коричневого цвета. Размерный ряд стелек - в ассортименте. Фольгированная основа 
						удерживает тепло внутри обуви и не пропускает холод. Надежно фиксируется внутри обуви. 
						Сохранят тепло ваших ног, а вас от простуды.</p>
					</div>
				</div>
				
				<div class="clearfix"></div>
				<div class="db-container-two">
					<div class="col-md-1"></div>
					<div class="col-md-8">
						<div class="db-block-two">
							<span class="db-span-view">Фирменное автопортмоне CarWallet</span>
							<p class="db-p-view">Портмоне CarWallet - это стильный мужской аксессуар, в который легко помещаются 
								документы, деньги и мобильный телефон, т.е. всё самое необходимое для повседневной 
								жизни современного мужчины. Именно это портмоне было разработано Европейскими 
								дизайнерами специально для мужчин, с учетом всех их пожеланий и потребностей! После 
								запуска первой лимитированной коллекции данный кошелёк сразу стал лидером продаж 
								в своём сегменте в странах Европы и США! Портмоне CarWallet - это сочетание качества, 
								надежности, высокого стиля и практичности.</p>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="db-imgbox-right">
								<img src="img/gifts-2.png" alt="img">
							</div>	
						</div>

					</div>
					<div class="clearfix"></div>
					<div class="db-container-three">
						<div class="col-md-1"></div>
						<div class="col-md-3">
							<div class="db-imgbox-left">
								<img src="img/gifts-3.png" alt="img">
							</div>
						</div>
						<div class="col-md-8">
							<div class="db-block-three">
								<span class="db-span-view">Стильные японские часы Curren</span>
								<p class="db-p-view">Ключевые составляющие  часов Curren – это японский кварцевый механизм, 
									высококачественные комплектующие и всегда оригинальный дизайн. Эти часы с легкостью 
									можно надеть как на деловую встречу, так и взять их в спорт зал. Этот двойной дизайн очень 
									практичен в наше время. Благодаря совокупности перечисленных достоинств часы Curren 
									быстро завоевывают популярность во всем мире.</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</section>
			
<section class="section section_padding section_padding-dc_view">
	<div class="container">		
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		    <div class="row">		

		        <div class="responses">
			
				    <h2 class="responses__header">ОТЗЫВЫ</h2>
			
					<div class="responses__slider slider-db">
					    <div class="item">
					        <div class="responses__slider_padding">
						        <div class="responses__slider_border">
	                                <img class="responses__slider_image" src="../img/dc-slider-1.png">
	                            </div>
	                        </div>
					        <div class="responses__slider_title">
					        	Екатерина, 32 года, Дмитров
					        </div>
					        <div class="responses__slider_text">
					        	Невероятно доступные по цене носки, раньше найти такие нигде не удавалось. Качеством продукции более чем довольна, одну пару, с учетом каждодневной стирки, муж носит около месяца. По моим подсчетам 100 пар хватит на целый год, к концу которого обязательно закажем следующий набор
					        </div>
		                </div>
		                <div class="item">
					        <div class="responses__slider_padding">
						        <div class="responses__slider_border">
	                                <img class="responses__slider_image" src="../img/dc-slider-2.png">
	                            </div>
	                        </div>
					        <div class="responses__slider_title">
					        	Виктор, 30 лет, Люберцы
					        </div>
					        <div class="responses__slider_text">
					        	Стоимость набора «100% хлопок» приятно порадовала. Качеству порадовался еще больше, носки довольно приятны телу. Заказал набор из 100 пар, привезли набитый доверху кейс. Думаю, этого набора мне хватит надолго.
					        </div>
		                </div>
		                <div class="item">
					        <div class="responses__slider_padding">
						        <div class="responses__slider_border">
	                                <img class="responses__slider_image" src="../img/dc-slider-3.png">
	                            </div>
	                        </div>
					        <div class="responses__slider_title">
					        	Павел, 28 лет, Ярославль
					        </div>
					        <div class="responses__slider_text">
					        	Этот магазин советуют каждому мужчине: идеальное сочетание качества и стоимости, нигде раньше подобное мне не встречалось. Всегда задавался вопросом, почему носки настолько дорого стоят. Зайдя на сайт и увидев их предложение, сразу начал в голове работать «калькулятор». Решив несложную задачку, я понял, что, заказывая кейс со 100 парами «100% хлопок», стоимость одной пары составляет плюс/минус 25 рублей. Это получается в три раза дешевле!!! Тут же заказал этот удивительный кейс и больше не задумываюсь о том, сколько носков у меня на полке.
					        </div>
		                </div>
		                <div class="item">
					        <div class="responses__slider_padding">
						        <div class="responses__slider_border">
	                                <img class="responses__slider_image" src="../img/dc-slider-4.png">
	                            </div>
	                        </div>
					        <div class="responses__slider_title">
					        	Валерия, 30 лет, Москва
					        </div>
					        <div class="responses__slider_text">
					        	Все думала, что подарить мужу, а тут подружка во время чаепития поведала про наборы носков, упакованные в оригинальные кейсы. Раньше о таком вообще не доводилось слышать! Нашла в интернете ссылку на ваш сайт, ознакомилась с продукцией более подробно и не раздумывая заказала носки «100% хлопок». Подарок порадовал мужа, а меня его цена: покупая целым набором выходит приличная экономия)))
					        </div>
		                </div>
		                <div class="item">
					        <div class="responses__slider_padding">
						        <div class="responses__slider_border">
	                                <img class="responses__slider_image" src="../img/dc-slider-5.png">
	                            </div>
	                        </div>
					        <div class="responses__slider_title">
					        	Владимир, 37 лет, Чехов
					        </div>
					        <div class="responses__slider_text">
					        	Добрый день всем! Заказал на этом сайте самый дешевый вариант: набор из 100 пар носков под названием «100% хлопок». Качество во много раз превзошло стоимость, что приятно порадовало. На каждый день - это самый лучший вариант.
					        </div>
		                </div>
		                <div class="item">
					        <div class="responses__slider_padding">
						        <div class="responses__slider_border">
	                                <img class="responses__slider_image" src="../img/dc-slider-6.png">
	                            </div>
	                        </div>
					        <div class="responses__slider_title">
					        	Александр, 29 лет, Москва
					        </div>
					        <div class="responses__slider_text">
					        	Увидев рекламу сайта, сразу подумал о каком-то розыгрыше. Никогда не встречал набор из 100 пар сразу. Но, внимательно изучив предложение, ознакомившись с отзывами покупателей, решил и себе непременно заказать набор «100% хлопок». Заказ прибыл довольно быстро. И теперь, представляете, я себе позволяю каждый день надевать новую пару носков!
					        </div>
		                </div>
		                <div class="item">
					        <div class="responses__slider_padding">
						        <div class="responses__slider_border">
	                                <img class="responses__slider_image" src="../img/dc-slider-7.png">
	                            </div>
	                        </div>
					        <div class="responses__slider_title">
					        	Оксана, 24 года, Санкт-Петербург
					        </div>
					        <div class="responses__slider_text">
					        	К Новому году своему любимому мальчику взяла в вашем магазине набор из 30 пар «100% хлопок». Получив столь экстраординарный презент, мой молодой человек засмеялся, сказав, что это самое лучше, что доводилось получать за все его годы. Как оказалось, носки практичны, приятны к телу и износоустойчивы. А, если порвались, то не жалко выбросить)
					        </div>
		                </div>
		                <div class="item">
					        <div class="responses__slider_padding">
						        <div class="responses__slider_border">
	                                <img class="responses__slider_image" src="../img/dc-slider-8.png">
	                            </div>
	                        </div>
					        <div class="responses__slider_title">
					        	Виталий, 36 лет, Истра
					        </div>
					        <div class="responses__slider_text">
					        	Всегда хотел, чтобы в комоде лежало много носков, но цена на одну пару не позволяла закупить сразу пар 20. Обнаружив ваш сайт и ознакомившись с выгодным предложением, не мешкая заказал себе 100 пар. Теперь как олигарх каждый день надеваю новую пару. Из личного опыта: самая низкая цена и прекрасное качество.
					        </div>
		                </div>
		            </div>            
                </div>
            </div>
	    </div>
	</div>
</section>	
<section class="section section_padding section_background-dc">
	<div class="container">
		<div class="row">
			<div class="order">
    		    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
	                <div class="order__want">
	                     Хотите узнать наличие Вашего размера?
	                     <br>
				         Наш менеджер перезвонит через 12 минут!
				    </div>
				    <form action="#" class="order__form form1" method="POST">
				    	<div class="row">
				    		<div class="col-md-6">
				    			<input class="phone dc-phone" type="text" placeholder="8(___)___-__-__"  name="phone">
				    		</div>
				    		<div class="col-md-6">
				    			<input class="dc-button-1" type="submit" name="order_button" value="">
				    		</div>
				    	</div>
				            
                            
				    </form>

				    <div class="order__garant">				        
                        <span class="order__garant_text">  
				            Мы гарантируем сохранность персональных данных
				        </span>
				    </div>     
				</div>
			</div>
		</div>
	</div>
</section>	
<section class="section" id="js-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="db-h2">
					<h2>контакты</h2>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-2"></div>
			<div class="col-md-4">
				<div class="db-rezim">
					<p class="db-rezim-p1">Режим работы</p>
					<p class="db-rezim-p2">Заявки - круглосуточно. <br>
						Доставка с 10.00 до 22.00 <br>
						Без выходных.</p>

						<div class="db-img-box1">
							<img src="img/db-clock.png" alt="img">
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="db-contacts">
						<p class="db-contacts-p1">Контакты</p>
						<p class="db-contacts-p2">Тел.: +7(499)348-23-18 <br> 
							E-mail: info@casenoskov.ru </p>
							<div class="db-button">
								<a href="#log-in" name="modal" class="button-1 button-1_orange  button-1_font_2 db-button-db">Заказать обратный звонок</a>
							</div>
							<div class="db-img-box2">
								<img src="img/db-phone.png" alt="img">
							</div>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
		</section>
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

	
</body>
</html>

