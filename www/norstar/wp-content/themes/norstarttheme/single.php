<?php
get_header();
$post = $wp_query->post;
if ( in_category('2') ) {
   ?>
   <div id="main-content">
		<div class="wrapper">
			<div class="page-wrapper">

				<div class="breadcrumb">
					<ul>
						<li><a href="#">Forside </a></li>
						<li><a href="#">Nyheder </a></li>
					</ul>
				</div>

				<div class="news-container">
<?php while ( have_posts() ) : the_post(); ?>

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
							<div></div>
							<p class="news-excerpt">
							<?php the_content() ?>
							</p>
							
						</div>
					</div>

<?php endwhile; // end of the loop. ?>
					
				</div>
			</div>
		</div>
	</div>
   <?php
}
else
{
?>
Default view
   <?php
}
?>
<?php get_footer(); ?>