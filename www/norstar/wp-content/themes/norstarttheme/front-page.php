<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>

	<div id="main-content">
		<div class="page-wrapper">
			<div id="home-page-wrapper">
				<!-- top promo card -->
				<div class="promo-card  clearfix top-card">
					<div class="promo-picture col-md-6">
						<img src="<?php print IMAGES; ?>/promo/top-card.png">
					</div>
					<div class="promo-content col-md-6">
						<h1>SE VORES NYE JULEKATALOG</h1>
						<p>Vores julekatalog er på gaden med en lang række nyt og spændende legetøj. Her kan du læse kataloget, og få inspiration  til dine juleønsker.</p>
						<a href="#" class="readmore">Se den digitale versions</a>
					</div>
				</div>

				<!-- GRID PROMO CARDS -->
				<div class="clearfix row">
					<div class="col-md-5">
						<div class="promo-card col-xs-12" id="wishlist-card">
							<h1>Lav din egen <span>Ønskeseddel</span></h1>
							<p>Gå på opdagelse i kataloget, og lav din helt egen ønskeseddel til din familie.</p>
							<a href="#" class="readmore">Gå til Ønskeseddel</a>
						</div>
						<div class="promo-card col-xs-12" id="promo-video">
							<img src="<?php print IMAGES; ?>/promo/video.png">
							<div>
								<h1>Video</h1>
								<p>Her kan du få inspiration til ønskelisten, med spændende videoer fra vores yandling-</p>
								<a href="#" class="readmore">Gå til videosiden</a>
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="promo-card col-xs-12" id="event-card">
							<div>
								<h1>Stor konkurrence</h1>
								<p>Lav din personlige ønskeseddel,<br /> og deltag i konkurrencen om <br />masser af julegaver.</p>
								<a href="<?php print URLKonkurrence;?>" class="readmore">
									Gå til konkurrencen
								</a>
							</div>
							<div><img src="<?php print IMAGES; ?>/promo/event.png" class="event-image"></div>
						</div>
					</div>
				</div>

				<!-- popular product -->
				<div>
					<h1>Mest populære gaveideer</h1>

					<div class="popular-product promo-card girl als-container" id="pop-girl-product">
						<span class="als-prev"><img src="<?php print IMAGES; ?>/left-arrow.png" alt="prev" title="previous" /></span>
						<div class="als-viewport">
						    <ul class="als-wrapper">
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/1.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/2.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/3.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/4.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/5.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/1.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/2.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/3.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/4.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/5.png" alt="orange" ></li>
						    </ul>
						</div>
						<span class="als-next"><img src="<?php print IMAGES; ?>/right-arrow.png" alt="next" title="next" /></span>
					</div>

					<div class="popular-product promo-card boy als-container" id="pop-boy-product">
						<span class="als-prev"><img src="<?php print IMAGES; ?>/left-arrow.png" alt="prev" title="previous" /></span>
						<div class="als-viewport">
						    <ul class="als-wrapper">
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/1.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/2.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/3.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/4.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/5.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/1.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/2.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/3.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/4.png" alt="orange" ></li>
						      <li class="als-item"><img src="<?php print IMAGES; ?>/girl_toys/5.png" alt="orange" ></li>
						    </ul>
						</div>
						<span class="als-next"><img src="<?php print IMAGES; ?>/right-arrow.png" alt="next" title="next" /></span> 						

					</div>
				</div>
				<script type="text/javascript">
					$(document).ready(function(){
						$("#pop-girl-product").als({
							visible_items: 5,
							scrolling_items: 2,
							orientation: "horizontal",
							circular: "no",
							autoscroll: "no"
						});
					});

					$(document).ready(function(){
						$("#pop-boy-product").als({
							visible_items: 5,
							scrolling_items: 2,
							orientation: "horizontal",
							circular: "no",
							autoscroll: "no"
						});
					});				
				</script>
				<!-- Game and facebook -->
				<div class="clearfix row" style="padding-top: 30px;">
					<div class="col-md-5" >
						<div class="promo-card social-card" id="game-card">
							<h1>Spil</h1>
							<p>Fusce hendrerit rhoncus sapien,<br /> vitae placerat massa vehicula <br />ut. Morbi sodales consectetur </p>
							<a href="#" class="readmore">Gå til spilsiden</a>
							<div class="promo-picture"><img src="<?php print IMAGES; ?>/promo/game.png"></div>
						</div>
						
					</div>
					<div class="col-md-7" >
						<div class="promo-card social-card" id="facebook-card">
							<h1>Facebook</h1>
							<p>Fusce hendrerit rhoncus sapien,<br /> vitae placerat massa vehicula <br />ut. Morbi sodales consectetur </p>
							<a href="#" class="readmore">Gå til spilsiden</a>
							<div class="promo-picture"><img src="<?php print IMAGES; ?>/promo/facebook.png"></div>
						</div>
						
					</div>
				</div>

			</div>
		</div>
	</div>
	<?php get_footer(); ?>