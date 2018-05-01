<html>
<head>
	<title>	ООО Комплект</title>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="preloader-style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="magnific-popup/magnific-popup.css">	
	<script type="text/javascript" src="libs/jquery-2.0.2.min.js"></script>
	<script type="text/javascript" src="libs/main.js"></script>

</head>
<body>


	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="preloader" id="preloader_one"></div>
				<div class="preloader" id="preloader_two"></div>
				<div class="preloader" id="preloader_three"></div>
				<div class="preloader" id="preloader_four"></div>
			</div>
		</div>
	</div>

	<div class="hidden">
		<form id="form">
			<div class="form-header">Форма заявки</div>
			<span>Введите ФИО</span><br>
			<input id="name" type="text" name="name" required>
			<span>Введите email</span><br>
			<input id="mail" type="text" name="mail" required>
			<span>Сообщение</span><br>
			<textarea name="message" rows="6" required></textarea>
			<div class="agreement">Я согласен на обработку персональных данных<input id="check" type="checkbox" checked></div>
			<button type="submit">Отправить</button>
		</form>
    </div>


    <div class="hidden">
		<form id="form-review">
			<div class="form-header">Форма отзыва</div>
			<span>Введите ФИО</span><br>
			<input id="name" type="text" name="name" required>
			<span>Сообщение</span><br>
			<textarea name="message" rows="6" required></textarea>
			<div class="agreement">Я согласен на обработку персональных данных<input id="check" type="checkbox" checked></div>
			<button type="submit">Оставить отзыв</button>
		</form>
    </div>

    <a href="" class="button-up scrollup"><img src="images/up.png"></a>

	<header>
		<div class="mask">
			<!-- Верхняя часть шапки с контактами и лого -->
			<div class="top-container">
				<div class="logo">
					<img src="images/logo.png">
				</div>
				<div class="top-contacts">
					<div class="top-item number"><span>+79658847968</span></div>
					<div class="top-item"><span>8(8452)55-79-57</span></div>
					<div class="top-item"><span>info@komplekt64.ru</span></div>
					<div class="top-item"><span>ул. Танкистов 90А</span></div>
					<a href="#" class="bt-menu-trigger"><span>Menu</span></a>

					<ul class="toggle-menu animated slideInRight">
						<li><a href="#about" onclick="hide1()">О нас</a></li>
						<li><a href="#objects" onclick="hide1()">Наши объекты</a></li>
						<li class="menu-button"><a href="#form" class="popup" onclick="hide1()">Написать нам</a></li>
						<li><a href="#reviews" onclick="hide1()">Отзывы</a></li>
						<li><a href="#contacts" onclick="hide1()">Контакты</a></li>
						<li><a href="#" id="close" onclick="hide1()"></a></li>
					</ul>
				</div>
			</div>

			<!-- Слоган компании -->
			<div class="slogan animated fadeInDown">
				<span>Аренда коммерческой недвижимости в Саратове</span>
			</div>

			<!-- Соц сети и два текстовых объекта -->

			<div class="bottom-content">
				<div class="base">Широкая база</div>
				<div class="soc-networks-header">
					<div class="soc-networks-cont">
						<a href="https://vk.com/komplekt64" id="vk-header"></a>
						<a href="https://www.instagram.com/komplekt64" id="instagram-header"></a>
						<a href="https://twitter.com/komplekt64" id="twitter-header"></a>
					</div>
				</div>
				<div class="market">На рынке с 1991г.</div>
			</div>

			<!-- Нижнее меню навигации -->
			<div class="header-menu">
				<div class="menu-item"><a href="#about">О нас</a></div>
				<div class="menu-item"><a href="#objects">Наши объекты</a></div>
				<div class="menu-item feedback-btn"><a href="#form" class="popup">Написать нам</a></div>
				<div class="menu-item"><a href="#reviews">Отзывы</a></div>
				<div class="menu-item"><a href="#contacts">Контакты</a></div>
			</div>

			<div class="feedback-header">
				<a href="#form" class="popup">Написать нам</a>
			</div>
		</div>
	</header>
    
    <nav id="menu1" class="animated fadeInDown">
    	<div class="logo-menu">
    		<a href="#" class="scrollup"><img src="images/logo.png"></a>
    	</div>
    	<div class="number-cont"><span>+79658847968</span></div>
    	<div class="hide-menu">
    		<a href="#about">О нас</a>
    		<a href="#objects">Наши объекты</a>
    		<a href="#reviews">Отзывы</a>
    		<a href="#contacts">Контакты</a>
    		<a href="#form" class="popup">Написать нам</a>
    	</div>
    	<a href="#" class="hamburger"><span>Menu</span></a>
    	<ul class="toggle-menu1 animated slideInRight">
			<li><a href="#about" onclick="hide()">О нас</a></li>
			<li><a href="#objects" onclick="hide()">Наши объекты</a></li>
			<li class="menu-button"><a href="#form" class="popup" onclick="hide()">Написать нам</a></li>
			<li><a href="#reviews" onclick="hide()">Отзывы</a></li>
			<li><a href="#contacts" onclick="hide()">Контакты</a></li>
			<li><a href="#" id="close" onclick="hide()"></a></li>
		</ul>
    </nav>


    
    <section id="about" class="about">
    	<div class="sections-name">
    		О нас
    	</div>
    	<hr>
    	<div class="about-content">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Подзаголовок вскоре, деревни? Вопроса строчка пор, последний вершину заглавных единственное? Над щеке злых, залетают то безорфографичный своих текстов бросил живет. Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Подзаголовок вскоре, деревни? Вопроса строчка пор, последний вершину заглавных единственное? Над щеке злых, залетают то безорфографичный своих текстов бросил живет.</div>
    			</div>
    		</div>
    	</div>
    </section>


	<section id="objects" class="our-objects">
    	<div class="sections-name">
        	Наши объекты
        </div>
        <hr>
        <div class="slider">
		        	<?php
		                require_once('database.php');
		                require_once('models/objects.php');
		          
		                $link = db_connect();
		                $objects = objects_all($link);

		                include('views/objects.php');
		            ?>
        </div>
    </section>
   

    <section id="reviews" class="reviews">
        <div class="sections-name">
        	Отзывы клиентов
        </div>
        <hr>
        	<div class="reviews-slider">
        		<div class="reviews-slide">
        			<div class="container">
        				<div class="row">
        					<div class="col-md-12 col-lg-12">
        						<h4>Вот что наши клиенты сказали об условиях аренды</h4>
        						<div class="img-wrap">
        							<img src="images/reviews/1.jpg">
        						</div>
        						<h4>Васильев Александр Романович</h4>
        						<div class="review-slide-descr">СТО "Пит-стоп"</div>
        						<p>
        							Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Подзаголовок вскоре, деревни? Вопроса строчка пор, последний вершину заглавных единственное? Над щеке злых, залетают то безорфографичный своих текстов бросил живет. Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Подзаголовок вскоре, деревни? Вопроса строчка пор, последний вершину заглавных единственное? Над щеке злых, залетают то безорфографичный своих текстов бросил живет.
        						</p>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="reviews-slide">
        			<div class="container">
        				<div class="row">
        					<div class="col-md-12 col-lg-12">
        						<h4>Вот что наши клиенты сказали об условиях аренды</h4>
        						<div class="img-wrap">
        							<img src="images/reviews/2.jpg">
        						</div>
        						<h4>Григорьева Марина Андреевна</h4>
        						<div class="review-slide-descr">Магазин автозапчастей "Авангард"</div>
        						<p>
        							Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Подзаголовок вскоре, деревни? Вопроса строчка пор, последний вершину заглавных единственное? Над щеке злых, залетают то безорфографичный своих текстов бросил живет. Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Подзаголовок вскоре, деревни? Вопроса строчка пор, последний вершину заглавных единственное? Над щеке злых, залетают то безорфографичный своих текстов бросил живет.
        						</p>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="reviews-slide">
        			<div class="container">
        				<div class="row">
        					<div class="col-md-12 col-lg-12">
        						<h4>Вот что наши клиенты сказали об условиях аренды</h4>
        						<div class="img-wrap">
        							<img src="images/reviews/3.jpg">
        						</div>
        						<h4>Дроздов Михаил Дмитриевич</h4>
        						<div class="review-slide-descr">ЗАО "Фармсклад"</div>
        						<p>
        							Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Подзаголовок вскоре, деревни? Вопроса строчка пор, последний вершину заглавных единственное? Над щеке злых, залетают то безорфографичный своих текстов бросил живет. Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Подзаголовок вскоре, деревни? Вопроса строчка пор, последний вершину заглавных единственное? Над щеке злых, залетают то безорфографичный своих текстов бросил живет.
        						</p>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<a href="#form-review" class="contacts-button popup">
        		Написать отзыв
        	</a>
    </section>

    <section id="contacts" class="contacts-section">
    	<div class="sections-name">
        	Наши контакты
        </div>
        <hr>
        <div class="contacts-content">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-12 col-xs-12 col-md-8 col-lg-8 map">
        				<iframe src="https://yandex.ru/map-widget/v1/-/CBe~m-GboC" width="100%" height="400" frameborder="0"></iframe>
        			</div>
        			<div class="col-sm-12 col-xs-12 col-md-4 col-lg-4 contacts">
        				<p><b>Стац. телефон:</b> 8(8452)55-79-57</p>
        				<p><b>Моб. телефон:</b> +79658847968</p>
        				<p><b>Адрес:</b> ул. Танкистов 90А</p>
        				<p><b>Email:</b> info@komplekt64.ru</p>
        				<a href="#form" class="contacts-button popup">
        					Написать нам
        				</a>
        			</div>
        		</div>
        	</div>
        </div>
    </section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-4 copyright">
					<h5>
						<a href="https://daqwin.com"><img src="https://daqwin.com/templates/images/logog.png"> Design by daqwin</a>
					</h5>
				</div>
				<div class="col-md-4 col-lg-4 company">
					<h5>
						© ООО "Комплект" 2018
					</h5>
				</div>
				<div class="col-md-4 col-lg-4 soc-networks">
					<h5>
						Социальные сети
					</h5>
					<a href="https://vk.com/komplekt64" id="vk"></a>
					<a href="https://www.instagram.com/komplekt64" id="instagram"></a>
					<a href="https://twitter.com/komplekt64" id="twitter"></a>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


		<script
			  src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
		<script
			  src="http://code.jquery.com/jquery-migrate-3.0.1.min.js"
			  integrity="sha256-F0O1TmEa4I8N24nY0bya59eP6svWcshqX1uzwaWC4F4="
			  crossorigin="anonymous"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script>
		<script type="text/javascript" src="magnific-popup/jquery.magnific-popup.min.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				
			  $('.reviews-slider').slick({
			  	prevArrow: '<button type="button" class="prev" style="left:10px"></button>',
			  	nextArrow: '<button type="button" class="next" style="right:10px"></button>',
			  	responsive: [
	  				{
	  					breakpoint: 480,
	  					settings: {
	  						dots: true,
	  						arrows: false
	  					}
	  				}
			  	]
			  });

			});
          
          $(document).ready(function(){
			  $('.slider').slick({
			  	prevArrow: '<button type="button" class="prev"></button>',
			  	nextArrow: '<button type="button" class="next"></button>',
			  	adaptiveHeight: true,
			  infinite: true,
			  speed: 300,
			  dots: true,
			  slidesToShow: 3,
			  slidesToScroll: 3,
			  responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        infinite: true
			      }
			    },
			    {
			      breakpoint: 768,
			      settings: {
			      	arrows: false,
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			      	arrows: false,
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			    // You can unslick at a given breakpoint now by adding:
			    // settings: "unslick"
			    // instead of a settings object
			  ]
			  });

			});
		</script>
        	<script type="text/javascript">
        		$(document).ready(function(){
        			$(".popup").magnificPopup({
        				focus: '#name',
        				type: 'inline'
        			});

        			$("#form").submit(function(){
        				if($("#check").prop("checked")){$.ajax({
        					type:"POST",
        					url: "mail.php",
        					data: $(this).serialize()
        				}).done(function(){
        					alert("Спасибо, мы скоро с вами свяжемся!");
        					setTimeout(function(){
        						$.magnificPopup.close();
        					}, 1000);
        				});}
        				else{
        					alert("Вы не дали согласие на обработку персональных данных!");
        				}
        				return false;
        			});
        		});
        	</script>
        <script>
        	function hide(){
        		if($('.toggle-menu1').is(':visible'))
            		$('.toggle-menu1').hide();
            	else
            		$('.toggle-menu1').show();
        	}

        	function hide1(){
        		if($('.toggle-menu').is(':visible'))
            		$('.toggle-menu').hide();
            	else
            		$('.toggle-menu').show();
        	}

        	function closeForm(){
        		$('#form').hide(); 
        	}

            $('.bt-menu-trigger').click(function(){
            	if($('.toggle-menu').is(':visible'))
            		$('.toggle-menu').hide();
            	else
            		$('.toggle-menu').show();
            });

            $('.hamburger').click(function(){
            	if($('.toggle-menu1').is(':visible'))
            		$('.toggle-menu1').hide();
            	else
            		$('.toggle-menu1').show();
            });

            $(document).scroll(function(){
	            	if($(document).scrollTop() > $('header').height()-1)
	            		$('nav').addClass('fixed');
	            	else
	            		$('nav').removeClass('fixed');
            });

            window.onresize = function(event){
            	$('.mob-menu').hide();
            }
      	</script>


		<script type="text/javascript">
			$(document).ready(function(){
				$('.scrollup').hide();
				$("#menu").on("click","a", function (event) {
					event.preventDefault();
					var id  = $(this).attr('href'),
					top = $(id).offset().top;
					$('body,html').animate({scrollTop: top}, 1500);
				});
				$("#menu1").on("click","a", function (event) {
					event.preventDefault();
					var id  = $(this).attr('href'),
					top = $(id).offset().top;
					$('body,html').animate({scrollTop: top}, 1500);
				});
				$(".header-menu").on("click","a", function (event) {
					event.preventDefault();
					var id  = $(this).attr('href'),
					top = $(id).offset().top;
					$('body,html').animate({scrollTop: top}, 1500);
				});
				$(".toggle-menu").on("click","a", function (event) {
					event.preventDefault();
					var id  = $(this).attr('href'),
					top = $(id).offset().top;
					$('body,html').animate({scrollTop: top}, 1500);
				});
				$(window).scroll(function(){
					if ($(this).scrollTop() > 100) {
						$('.scrollup').fadeIn();
					} 
					else {
						$('.scrollup').fadeOut();
					}
				});

				$('.scrollup').click(function(){
					$("html, body").animate({ scrollTop: 0 }, 1500);
					return false;
				});
			});
		</script>
</body>
</html>