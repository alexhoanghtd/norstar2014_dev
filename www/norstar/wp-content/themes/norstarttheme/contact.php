<?php
/*
Template Name: Contact page
*/
get_header();

 ?>
	<div id="main-content">
		<div class="wrapper">
			<div class="page-wrapper" id="contact-page">
				<div class="contact-cover">
					<img src="<?php print IMAGES; ?>/ui/contact_cover.jpg">
				</div>
				<div class="contact-content clearfix row">
					<div class="col-md-7 contact-form">
						<h2 class="contact-header">
							Kontakt os
						</h2>
						<div >
						
							<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
						</div>
					</div>

					<div class="col-md-5">
						<h2 class="contact-header">
							Information
						</h2>
						<div>
							<div class="contact-info-group">
								<span class="group-header">Adresse:</span>
								<ul>
									<li>NORSTAR A/S</li>
									<li>Sintrupvej 12</li>
									<li>DK-8220 Brabrand</li>
								</ul>
							</div>

							<div class="contact-info-group">
								<span class="group-header">Telefon:</span>
								<ul>
									<li>P +45 89 44 22 00</li>
									<li>F +45 86 24 02 39</li>
								</ul>
							</div>

							<div class="contact-info-group">
								<span class="group-header">E-mail:</span>
								<ul>
									<li>info.dk@norstar.eu</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		
	</div>
	<script>
	window.onload = function(){
	$('input[name=your-name]').addClass('contact-name').attr("placeholder", "Navn*");
	$('input[name=your-email]').addClass('contact-email').attr("placeholder", "E-mail*");
	$('textarea[name=your-message]').addClass('contact-message').attr("placeholder", "Besked").css("height","90px")
	$('input[value=Send]').attr("value","Send beskedss");
	};
	</script>
<?php get_footer(); ?>