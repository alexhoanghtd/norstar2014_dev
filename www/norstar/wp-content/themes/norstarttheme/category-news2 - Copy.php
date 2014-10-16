<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="main-content">
		<div class="wrapper">
			<div class="page-wrapper">

				<div class="breadcrumb">
					<ul>
						<li><a href="#">Forside </a></li>
						<li><a href="#">Nyheder </a></li>
					</ul>
				</div>

				<div class="news-list">
1111111111111111111
					<?php if ( have_posts() ) : ?>
		
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				
			endwhile;

			
			?>
<?php else : ?>
No content here
			
		<?php endif; ?>
					
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>