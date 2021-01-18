 <!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Заявки</title>
		<meta name="description" content=""/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="favicon.png" />
		<link rel="stylesheet" href="/css/style.css" />
		<link rel="stylesheet" href="/css/slider.css" />
		<link rel="stylesheet" href="/libs/fancybox/jquery.fancybox.css" />
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118286720-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-118286720-1');
</script>
	</head>
	<body>
		
		<div id="badm">
		<?php debug($this->Session->flash('bad')); ?>
		<?php debug($this->Session->flash('good')); ?>
		<?//=$_SESSION['Message']['bad']['message']?>
			
		</div>
		<?php echo $this->Session->flash('good'); ?>
		<?php echo $this->Session->flash('bad'); ?>
		<?php //echo $this->element('header'); ?>
		<div class="city-part">
			<div class="container">
				<span class="city-part__heading">Выберите ваш город</span>
				<ul class="city-list">
					<li class="active">
						<a href="#">Астана</a>
					</li>
					<li>
						<a href="#">Алматы</a>
					</li>
					<li>
						<a href="#">Шымкент</a>
					</li>
					<li>
						<a href="#">Караганда</a>
					</li>
					<li>
						<a href="#">Актобе</a>
					</li>					
					<li>
						<a href="#">Атырау</a>
					</li>
					<li>
						<a href="#">Костанай</a>
					</li>
					<li>
						<a href="#">Тараз</a>
					</li>
					<li>
						<a href="#">Кызылорда</a>
					</li>
				</ul>
				<div class="city-close"></div>
			</div>
		</div>
		
		
		
		<div class="section-part section-part--partners">
			<div class="container">
				<span class="section-heading section-heading--blue">
					123
				</span>
				
			</div>
		</div>	
		<footer class="footer">
			<div class="container">
				<div class="footer-left">
					<div class="social">
						<span class="social__text">Мы в социальных сетях</span>
						<div class="social-link">
							<a class="social-link__item" href="#"></a>
							<a class="social-link__item social-link__item--fb" href="#"></a>
							<a class="social-link__item social-link__item--vk" href="#"></a>
							<a class="social-link__item social-link__item--gplus" href="#"></a>
							<a class="social-link__item social-link__item--ytube" href="#"></a>
						</div>
					</div>
					<div class="footer-link">
						<a href="#">Договора</a>
						<a href="#">Публичная оферта</a>
						<a href="#">Карьера</a>
					</div>
				</div>
				<div class="created">
					<a class="created__link" target="_blank" href="https://astanacreative.kz">
						<span>Создание сайтов в Астана</span>  | <span>Astana Creative</span>
					</a>
					<span class="created__copyright">
						© Все права защищены
					</span>
				</div>
			</div>
		</footer>
		<div id="feedback" style="width:350px;display: none;">
			<div class="popup">	
				<span class="popup__heading">Оставить заявку</span>
				<div class="popup-row">
					<input class="popup-row__input" placeholder="Ваше Имя" type="text">
				</div>
				<div class="popup-row">
					<input class="popup-row__input" placeholder="Телефон" type="text">
				</div>
				<div class="popup-row">
					<textarea class="popup-row__textarea" placeholder="Сообщение" type="text"></textarea>
				</div>
				<div class="popup__centr">
					<button class="btn" type="submit">Отрпавить</button>
				</div>										
			</div>
		</div>		
		<!--[if lt IE 9]>
		<script src="libs/html5shiv/es5-shim.min.js"></script>
		<script src="libs/html5shiv/html5shiv.min.js"></script>
		<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
		<script src="libs/respond/respond.min.js"></script>
		<![endif]-->
		<script src="js/jquery-3.0.0.min.js"></script>	
		<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
		<script src="js/script.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>		
		<script src="js/slick.min.js"></script>
		<script>
		  $( function() {
		    $( "#slider-range-min" ).slider({
		      range: "min",
		      value: 37,
		      min: 1,
		      max: 700,
		      slide: function( event, ui ) {
		        $( "#amount" ).val( "$" + ui.value );
		      }
		    });
		    $( "#amount" ).val( "$" + $( "#slider-range-min" ).slider( "value" ) );
		  } );
		</script>
		<script>
			$('.partner-slider').slick({
			  slidesToShow: 3,
			  slidesToScroll: 1,
			  autoplay: true,
			  arrows:true,
			  autoplaySpeed: 2000,
			});
		</script>
	</body>
</html>