<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="views/style/style_object.css">

	<link rel="stylesheet" type="text/css" href="views/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="views/slick/slick-theme.css"/>

	<link rel="stylesheet" type="text/css" href="magnific-popup/magnific-popup.css">	
</head>
<body>
	

	<nav id="menu">
    	<div class="hamburger"><img src="images/burger.png"></div>
    	<div class="hide-menu">
    		<img src="images/logo.png">
    		<a href="index.php">Главная</a>
	    	<a href="index.php#about">О нас</a>
	    	<a href="index.php#objects">Наши Объекты</a>
	    	<a href="index.php#reviews">Отзывы</a>
	    	<a href="index.php#contacts">Контакты</a>
	    	<a href="#form">Написать нам</a>
	    </div>

	    <div class="mob-menu">
	    	<a href="index.php">Главная</a>
	    	<a href="index.php#about">О нас</a>
	    	<a href="index.php#objects">Наши Объекты</a>
	    	<a href="index.php#reviews">Отзывы</a>
	    	<a href="index.php#contacts">Контакты</a>
	    	<a href="#form">Написать нам</a>
	    </div>
    </nav>



    <div class="container">
    	<div class="row">
    		<div class="slider col-md-12">
    			<?php 
	    			$images = explode(",",$object['img']);
                    foreach ($images as $img){
				?>
    					<div class="images">
    						<img src="images/<?=$img?>">
    					</div>
    			<?php }?>
    		</div>
    	</div>
    </div>

	<div class="container">
	    <div class="row">
	    	<div class="info">
		    	<h4>Площадь: <?=$object['space']?></h4>
		    	<h4>Цена: <?=$object['price']?></h4>
		    	<p><?=$object['description']?></p>
		    	<button class="contacts-button">
	        		Написать нам
	        	</button>
        	</div>
	    </div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-4 copyright">
					<h5>
						<img src="images/daqwin.png"> Design by daqwin
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
					<a href="#" id="vk"></a>
					<a href="#" id="instagram"></a>
					<a href="#" id="twitter"></a>
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
			  $('.slider').slick({
			  	adaptiveHeight: true,
			  	dots:true,
			  	slidesToShow: 3,
			  	slidesToScroll: 1,
			  	responsive:[
			  		{
				  		breakpoint: 1000,
				  		settings:{
				  			slidesToShow:2
				  		}
				  	},
				  	{
				  		breakpoint: 768,
				  		settings:{
				  			slidesToShow:1
				  		}
				  	}
			  	]
			  });
			});
	</script>
	<script type="text/javascript">
        		$(document).ready(function(){
        			$(".popup").magnificPopup();

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

            $('.hamburger').click(function(){
            	if($('.mob-menu').is(':visible'))
            		$('.mob-menu').hide();
            	else
            		$('.mob-menu').show();
            })

            $(document).scroll(function(){
	            	if($(document).scrollTop() > $('header').height() + 10)
	            		$('nav').addClass('fixed');
	            	else
	            		$('nav').removeClass('fixed');
            });

            window.onresize = function(event){
            	$('.mob-menu').hide();
            }
      	</script>
</body>
</html>