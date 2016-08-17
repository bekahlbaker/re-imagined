<?php get_header(); ?>
<div class="blog" style="overflow-x: hidden;">
<div class="row">
<div class="index container col-md-8">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="content-block post row">
			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<p class="description">
				<?php echo get_the_date('l, F j, Y'); ?> | <?php the_category( ' ', $parents, $post_id ); ?> | <a href="<?php comment_link(); ?>"><?php comments_number(); ?></a>
			</p>
			<div class="col-md-5">
				<div class="thumbnail">
					<?php the_post_thumbnail( ); ?>
				</div>
			</div>
			<div class="col-md-7">
				<div class="excerpt">
					<?php the_excerpt(); ?>
				</div>
			</div>
		</div>
<?php endwhile; else: ?>
<?php endif; ?>
<div class="pagination">
	<div class="nav-previous pull-left"><?php next_posts_link( '< older posts' ); ?></div>
	<div class="nav-next pull-right"><?php previous_posts_link( 'newer posts >' ); ?></div>
</div>
</div>
<div class=" container col-md-4">
<?php get_sidebar( ); ?>
</div>
</div>
</div>
<?php get_footer(); ?>