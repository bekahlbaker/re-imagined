<?php
/*
Template Name: Gallery Template
*/
?>
<?php get_header(); ?>

<div class="gallery container">
<div id="gallery" class="container-fluid">
<?php if(have_rows('gallery')) : ?>
	<ul class="gallery row">
		<?php while(have_rows('gallery')) : the_row(); ?>
			<li class="col-xs-4 col-sm-4 col-md-2 img">
			<div class="one">
				<a href="" data-featherlight="<?php the_sub_field('image'); ?>"><img src="<?php the_sub_field('image'); ?>"></a>
				<div class="description">
					<a href="" data-featherlight="<?php the_sub_field('image'); ?>"><p><?php the_sub_field('description'); ?> <i class="fa fa-search-plus" aria-hidden="true"></i></p></a>
				</div>
			</div>
			</li>	
		<?php endwhile; ?>
	</ul>
<?php endif; ?>
</div>
</div>



<?php get_footer(); ?>