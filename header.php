<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package first_site
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WEB</title>

	
	<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=David+Libre:wght@500;700&display=swap" rel="stylesheet">
	

	<!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/css/uikit.min.css" />
		

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css">
		<!-- UIkit JS -->
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit-icons.min.js"></script>
			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/fontawesome/css/all.min.css">

				<script
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			  crossorigin="anonymous"></script>


</head>
<body>
	<!-- header -->	
	<section id="block1" class="nav">
<header class="header_bg nav">
			<div  uk-sticky="" style="position: fixed; width:100%;">
			

					<div class="uk-visible@s">
				
						<nav id="navbar" class="navbar_bg" uk-navbar style="position: relative; z-index: 980;">
    				<div class="uk-flex uk-flex-middle uk-flex-between" style="width: 100%;">
			    		<div class="uk-margin-small-left">
			    			<div class="name uk-flex">
			    				<img src="<?php echo get_template_directory_uri();?>/images/vector.svg" alt="">
			    				<p>Kulenko Jhenia<br>front-end Wed developer</p>
			    			</div>
						</div>
    		 			<div class="uk-navbar-left ">
				        		<?php wp_nav_menu( array(
							'theme_location'  => '',
							'menu'            => '',
							'container'       => 'ul',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'uk-navbar-nav main_nav',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						) );

						?>
       					 </div>
    				</div>       
    			</nav>
					</div>
    			
			</div>	
				<!-- hidden block  -->
				<div class="uk-hidden@s">
					<div  style="position: fixed; width:100%;padding: 3px; z-index: 1;" class="bg_for_mobile ">
						<div class="uk-flex uk-flex-middle uk-flex-between uk-container">
							<div class="">
								<a class="mob_menu_button uk-flex uk-flex-middle" type="button" uk-toggle="target: #offcanvas-overlay"><i style="color: #fff;margin-right: 10px;" class="fas fa-bars fa-2x"> </i><p>MENU</p></a>
							</div>
							
							<div class="social_mob_menu ">
			    					<a class="" href="tel:+38(095)428-20-84">+38(095)428-20-84</a>
			    					<a class="" href="mailto:kulenko.jhenia@gmail.com">kulenko.jhenia@gmail.com</a>	

							</div>
							</div>
			    				
			    				

						</div>
						
			    			
					

					<div id="offcanvas-overlay" uk-offcanvas=" overlay: true">
					    <div class="uk-offcanvas-bar" style="width: 100%;">

					    		 <ul class="nav_mob_menu uk-nav-center" >
				                <li class=""><a href="#block1" class="">Home</a></li>
				                <li><a href="#block2" >About me</a></li>
				                <li><a href="#block3">Portfolio</a></li>
				                  <li><a href="#block4">Contact</a></li>       
				            </ul>
				            <div class="social_media">
			<ul class="list_social">
				<li><a class="social_mob" href="https://www.instagram.com/jhenia.kulenko/"><i class="fab fa-instagram"></i></a></li>
				<li><a class="social_mob" href="https://www.facebook.com/profile.php?id=100013214479403"><i class="fab fa-facebook"></i></a></li>
				<li><a class="social_mob" href="mailto:kulenko.jhenia@gmail.com"><i class="fab fa-google "></i></a></li>
				<li><a class="social_mob" href="tel:+38(095)428-20-84"><i class="fas fa-phone"></i></a></li>
			</ul>


						</div>
					        <button class="uk-offcanvas-close" type="button" uk-close></button>


					        

					       

					    </div>
					</div>

				</div>

			
				<!-- hidden block  -->
<div class="uk-container">
	<div class="uk-width-auto@s">
	<p class="title_info uk-margin-large-top"> 
		Hi,I'm Jhenia.</p>
		<p class="junior_info_subtitle">I'm a junior full-stack <br>web developer from Ukraine.</p>
		<div class="uk-margin-medium-top">
			<a class="my_work" href="#portfolio" uk-scroll>	
					View my work
			</a>
		</div>
	</div>
</div>
</header>	
<script type="text/javascript">
	jQuery(window).scroll(function(){
         var $sections = $('section');
	$sections.each(function(i,el){
        var top  = $(el).offset().top-100;
        var bottom = top +$(el).height();
        var scroll = $(window).scrollTop();
        var id = $(el).attr('id');
    	if( scroll > top && scroll < bottom){
            $('a.active').removeClass('active');
			$('a[href="#'+id+'"]').addClass('active');

        }
    })
 });

$('nav').on("click","a", function (event) {
        // получем идентификатор блока из атрибута href
        var id  = $(this).attr('href'),
 
        // находим высоту, на которой расположен блок
            top = $(id).offset().top;
         
        // анимируем переход к блоку, время: 800 мс
        $('body,html').animate({scrollTop: top}, 800);
    });
</script>