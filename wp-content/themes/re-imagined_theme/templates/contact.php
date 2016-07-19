<?php
/*
Template Name: ContactTemplate
*/
?>
<?php get_header(); ?>

<div class="contact container">
	<div class="title">
		<h4><?php the_title( ); ?></h4>
	</div>
	<div class="message">
		<p>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; else: ?>
		<?php endif; ?>
		<p>
	</div>
	<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
</div>



<?php get_footer(); ?>