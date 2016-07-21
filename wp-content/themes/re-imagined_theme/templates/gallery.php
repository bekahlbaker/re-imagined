<?php
/*
Template Name: Gallery Template
*/
?>
<?php get_header(); ?>

<div class="gallery">
	<div class="title">
<!-- 		<h4 style="text-align: center;"><?php the_field('portfolio_title') ?></h4> -->
		<p class="portfolio-message"><?php the_field('portfolio_message') ?></p>
	</div>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div>



<?php get_footer(); ?>
