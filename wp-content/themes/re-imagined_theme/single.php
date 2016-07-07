<?php get_header(); ?>

<h2><?php the_title(); ?></h2>
<h3><?php the_date(); ?></h3>
<div>
	<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		  the_content();
			endwhile;
		endif; 
	?>
</div>




<?php get_footer(); ?>
