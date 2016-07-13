<?php
/*
Template Name: About Template
*/
?>
<?php get_header(); ?>

<div class="about container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_title(); ?>
		<?php the_content( ); ?>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div>



<?php get_footer(); ?>