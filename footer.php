<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package first_site
 */

?>

<footer>
	<section id="block4" >
	<div id="contacts" class="contacts uk-container uk-margin-medium-top" ><h2 class="title_me uk-margin-medium-top">Contact me</h2>
	<div class="uk-flex" >
		
		<div class="bg_for_message uk-flex" data-uk-grid>
			<div class="uk-width-2-5@s uk-padding-remove uk-flex" >
			<div class="">
				<img src="<?php echo get_template_directory_uri();?>/images/b012b097-88ab-42d9-b54b-8ecbb731eb67.jpg" alt="">
				<p class="uk-text-center" style="color: #000;font-weight: 600;">if you have questions or just<br> want to get in touch, use the<br>form below. I look forward to<br> hearing from you!</p>
			</div>
		
			
			
		
			</div>
			<div class=" uk-width-3-5@s  bg_for_form" >
				<h2 class="form_title">Message me</h2>

	<form class="form_size uk-container">
		<!-- Hidden Required Fields -->
		<input type="hidden" name="project_name" value="Site Name">
		<input type="hidden" name="admin_email" value="kulenko.jhenia@gmail.com">
		<input type="hidden" name="form_subject" value="Form Subject">
		<!-- END Hidden Required Fields -->
		<div class="place_name  uk-margin-small-top">
			<div class=" uk-margin-small-top">
			
			<input type="text" class="form_info" name="Name" placeholder="Your name..." required>
		</div>
		<div class=" uk-margin-small-top">
			<input type="text" class="form_info" name="E-mail" placeholder="Your E-mail..." required>
		</div>
		<div class=" uk-margin-small-top">
			
			<input type="text" class="form_info" name="Phone" placeholder="Your phone...">
		</div>
			<div class="uk-margin-small-top">
				<textarea name="message" class="message_text" placeholder="Message..."></textarea>
			</div>
			
		<button class="button">Send</button>
			<div class="social_media">
			<ul class="list_social">
				<li><a class="social" href="https://www.instagram.com/jhenia.kulenko/"><i class="fab fa-instagram"></i></a></li>
				<li><a class="social" href="https://www.facebook.com/profile.php?id=100013214479403"><i class="fab fa-facebook"></i></a></li>
				<li><a class="social" href="mailto:kulenko.jhenia@gmail.com"><i class="fab fa-google "></i></a></li>
				<li><a class="social" href="tel:+38(095)428-20-84"><i class="fas fa-phone"></i></a></li>
			</ul>


			</div>

		</div>
		
		</form>
			</div>
		</div>
		
	</div>
		
			
			
	</div>
</section>
</footer>

<!-- Contacts -->






</content>


</body>
</html>

