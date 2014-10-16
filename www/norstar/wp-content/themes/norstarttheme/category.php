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
						<li><a href="/">Forside </a></li>
						<li><a href="<?php print URLNEWS;?>">Nyheder </a></li>
					</ul>
				</div>

				<div class="news-list">
				
		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
			?>
				<div class="news-item">
						<div class="side-date">
							<?php $date = the_date('d M, Y', '', '', FALSE);?>
							<p><span class="day"><?php echo substr($date, 0, 2);?></span><span class="month"><?php echo trim(substr($date, 2));?></span></p>
						</div>
						<div class="news-content">
							<?php 
								if ( has_post_thumbnail() ) {
							?>
								<div class="news-thumbnail">
									<?php the_post_thumbnail() ?>
								</div>
							<?php } ?>
							
							<div class="news-categories">
								<!--?php
									echo get_category_parents( $cat, true, ', ' ); 
								?-->
								<?php
$categories = get_the_category();
$separator = ' ';
$output = '';

if($categories){	
	foreach($categories as $category) {
		
		$output .= '<a href="'.get_category_link( $category->term_id ).'" >'.$category->cat_name.'</a>'.$separator;
	}
echo $output;//trim($output, $separator);
}

?>
							</div>
							<h2 class="news-header"><?php the_title() ?></h2>
							<p class="news-excerpt">
							<?php the_content()?>
							</p>
							<br/>
							<a href="<?php the_permalink()?>" class="read-news">Læs mere</a>
						</div>
					</div>
			<?php

			endwhile;

			twentytwelve_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

					
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>