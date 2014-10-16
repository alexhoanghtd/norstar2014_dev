<?php
/*
Template Name: Konkurrence page
*/
get_header();
 ?>
<script type="text/javascript" src="<?php print JSDIRECTORY; ?>/views.catalogue.js"></script>

	<div id="main-content">
		<div class="ipaper-overlay">
		    <div class="close"></div>
		    <div class="clear"></div>
		    <div class="ipaper-content">
		        <iframe src="" frameborder="0" height="100%" width="100%"></iframe>
		    </div>
		</div>

		<div class="wrapper" id="norstar-finish">
			<div class="finish-header page-wrapper clearfix">
				<div class="finish-checkout">
					<button class="done-btn"><img src="<?php print IMAGES; ?>/ui/done-icon.png">FÆRDIG</button>
					<p class="finish-question">Hvordan gør jeg? <span><a href="#"><img src="<?php print IMAGES; ?>/ui/finish-question.png"></a></span></p>
				</div>
			</div>
			<div class="clearfix">
				<div class="col-md-8 area-header">
					<div class="row">
						<div class="part-header"><span class="header-ico"><img src="<?php print IMAGES; ?>/ui/konkurrence-ico.png"></span>KONKURRENCE</div>
						<div class="page-content">
							<p>Her kan du gå på opdagelse i vores nye julekatalog, lave din egen ønskeliste, og deltage i konkurrencen om masser af julegaver. 
							<br />
							<br />
							Du har også mulighed for at sende din ønskeliste til din familie.
							</p>
							<div class="open-catalog">
								<a href="http://ipaper.ipapercms.dk/TopToy/NORSTAR/AW2013/" data-is-catalogue='true' rel="overlay" target="_blank" class="open-btn">Åben katalog</a>
								<img src="<?php print IMAGES; ?>/promo/top-card.png">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 area-header cart-slider-container">
					<div class="row">
						<div class="part-header">DIN ØNSKELISTE</div>
						<div class="cart-slider">
							<div class="slider-content" id="cart-slider">
								<ul class="cart-products">
								
									<li >
										<ul>
											<li class="clearfix product-item">
												<div class="product-thumb">
													<img src="<?php print IMAGES; ?>/ui/slider_sample_product/barbie.png">
												</div>
												<div class="product-info">
													<a href="#">
														<h4>Product name</h4>
														<p>Den lyserøde dukke</p>
													</a>
													
												</div>
											</li>
											<li class="clearfix product-item">
												<div class="product-thumb">
													<img src="<?php print IMAGES; ?>/ui/slider_sample_product/5.png">
												</div>
												<div class="product-info">
													<a href="#">
														<h4>Barbie modeldukke One more line</h4>
														<p>Den lyserøde dukke</p>
													</a>
												</div>
											</li>
											<li class="clearfix product-item">
												<div class="product-thumb">
													<img src="<?php print IMAGES; ?>/ui/slider_sample_product/barbie.png">
												</div>
												<div class="product-info">
													<a href="#">
														<h4>Product name</h4>
														<p>Den lyserøde dukke</p>
													</a>
													
												</div>
											</li>
											<li class="clearfix product-item">
												<div class="product-thumb">
													<img src="<?php print IMAGES; ?>/ui/slider_sample_product/5.png">
												</div>
												<div class="product-info">
													<a href="#">
														<h4>Barbie modeldukke One more line</h4>
														<p>Den lyserøde dukke</p>
													</a>
												</div>
											</li>
											<li class="clearfix product-item">
												<div class="product-thumb">
													<img src="<?php print IMAGES; ?>/ui/slider_sample_product/5.png">
												</div>
												<div class="product-info">
													<a href="#">
														<h4>Barbie modeldukke One more line</h4>
														<p>Den lyserøde dukke</p>
													</a>
												</div>
											</li>
										</ul>
									</li>										
								</ul>
							</div>
							
							<div class="slider-control">
								<div class="slider-navigator">
									<span class="slide-left"><img src="<?php print IMAGES; ?>/ui/slide-left.png"></span>
									<p class="marker">Slide <span class="current">1</span> af <span class="total">5</span></p>
									<span class="slide-right"><img src="<?php print IMAGES; ?>/ui/slide-right.png"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>
	</div>
<?php get_footer(); ?>