<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package first_site
 */

get_header();
?>

<!-- header -->
<content>
	<!-- About me -->
	<section id="block2" class="nav">
		<div class="about" id="about nav">
		<div class="uk-margin-medium-top"><h2 class="title_me ">About me</h2></div>
		<div class=" uk-flex uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-1@s uk-container" style="margin: 0 auto;" data-uk-grid>
			<div class="" ><img src="<?php echo get_template_directory_uri()?>/images/77aac117-6090-4e2c-9034-548d1e529c88.jpg"></div>
			<div class="" style="padding:10px"><div class="dop_info_about_me"><p>I am web developer (junior web-developer) from Bila Tserkva, Ukraine.</p><p>I work only less than two years and enjoy building everything from small business sites to rich interactive web apps.</p>
				<p>Right now I'm learning different languages, that like PHP and JavaScript(Jquery), CMS systems Joomla and WordPress.</p> <p>if you do businessin the internet seeking a web presence or an employer looking to hire, you can get in touch with me here.</p></div></div>
			
			
				<div class="uk-visible@s">
					
					<div class="my_skill">

							<p>HTML</p>
					<div class="container">
					  <div class="skills html">90%</div>
					</div>

					<p>CSS</p>
					<div class="container">
					  <div class="skills css">80%</div>
					</div>

					<p>JavaScript</p>
					<div class="container">
					  <div class="skills js">65%</div>
					</div>

					<p>PHP</p>
					<div class="container">
					  <div class="skills php">60%</div>
					</div>
					<p>CMS(Joomla)</p>
					<div class="container">
					  <div class="skills joomla">70%</div>
					</div>
					</div>
				
				</div>
			
		
				
		</div>
		</div>
	</section>
	<!-- About me -->

<!-- Portfolio -->
<section id="block3" class="nav" >
	<div id="portfolio" class="uk-margin-medium-top portfolio nav">
			<h2  class="title_me">Portfolio</h2>
	<div class="my_works  uk-container uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-2@s uk-flex-center"  data-uk-grid>
			<div class="uk-padding-small">
				<div class="descr_block"><span class="descr"><div class="descr_title">
					<div class="descr_box" data-uk-lightbox style="margin-bottom: 25px;">
						<a href="<?php echo get_template_directory_uri();?>/images/Screenshot_4.png" >Открыть большую картинку</a>
					</div>
					<a href="https://mebel-star.com/">Перейти на сайт</a></div></span><img src="<?php echo get_template_directory_uri();?>/images/Screenshot_4.png" alt=""></div>
			</div>
			<div class=" uk-padding-small">
				<div class="descr_block"><span class="descr"><div class="descr_title">
					<div class="descr_box" data-uk-lightbox style="margin-bottom: 25px;"><a href="<?php echo get_template_directory_uri();?>/images/Screenshot_3.png" >Открыть большую картинку</a></div>	
					<a href="http://web.am-studio.com.ua/">Перейти на сайт</a></div></span><img src="<?php echo get_template_directory_uri();?>/images/Screenshot_3.png" alt=""></div>
			</div>
			<div class="uk-padding-small ">
				<div class="descr_block " ><span class="descr"><div class="descr_title">
					<div class="descr_box" data-uk-lightbox style="margin-bottom: 25px;"><a href="<?php echo get_template_directory_uri()?>/images/Screenshot_5.png"  >Открыть большую картинку</a></div>
				
					<a href="https://senam.ua/">Перейти на сайт</a></div></span><img src="<?php echo get_template_directory_uri()?>/images/Screenshot_5.png" alt=""></div>
			</div>
			<div class="uk-padding-small ">
				<div class=" descr_block" ><span class="descr"><div class="descr_title">
					<div class="descr_box" data-uk-lightbox style="margin-bottom: 25px;"><a href="<?php echo get_template_directory_uri()?>/images/Screenshot_6.png" >
				Открыть большую картинку</a></div>
					
				<a href="#">Перейти на сайт</a></div></span><img src="<?php echo get_template_directory_uri()?>/images/Screenshot_6.png" alt=""></div>
			</div>				
			
	</div>
</div>
</section>
<?php
	get_footer();
	?>

