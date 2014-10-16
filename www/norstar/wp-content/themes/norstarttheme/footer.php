<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<footer id="main-footer" class="masthead">
		<div id="footer-top" class="page-wrapper">
			<div class="clearfix footer-links row">
				<div class="col-md-3">
					<ul class="list-group nav">
						<li><a href="#">Information til forældre</a></li>
						<li><a href="#">Information til børn </a></li>
						<li><a href="#">Medlemsregler</a></li>
						<li><a href="#">Privatliv</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="list-group nav">
						<li><a href="#">Information til forældre</a></li>
						<li><a href="#">Information til børn </a></li>
						<li><a href="#">Medlemsregler</a></li>
						<li><a href="#">Privatliv</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="list-group nav">
						<li><a href="#">Information til forældre</a></li>
						<li><a href="#">Information til børn </a></li>
						<li><a href="#">Medlemsregler</a></li>
						<li><a href="#">Privatliv</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="nav navbar-nav social-links">
						<li><a href="<?php print URLInstagram;?>"><img src="<?php print IMAGES; ?>/social/insta.png"></a></li>
						<li><a href="<?php print URLYoutube;?>"><img src="<?php print IMAGES; ?>/social/youtube.png"></a></li>
						<li><a href="<?php print URLFacebook;?>"><img src="<?php print IMAGES; ?>/social/fb.png"></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div id="footer-copyright">
			<div class="page-wrapper"><p>NORSTAR OY - Alle rettigheder forbeholdt</p></div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>