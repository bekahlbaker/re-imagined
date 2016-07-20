<?php
/*
Template Name: Gallery Template
*/
?>
<?php get_header(); ?>

<div class="gallery">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div>



<?php get_footer(); ?>
