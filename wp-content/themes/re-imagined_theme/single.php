<?php get_header(); ?>

<div class="single_post container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="single content-block">	
			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<p class="description">by <?php the_author(); ?> | <?php echo get_the_date('l, F j, Y'); ?> | <?php the_category( ' ', $parents, $post_id ); ?> | <a href="<?php comment_link(); ?>"><?php comments_number(); ?></a></p>
			
			<div class="post">
				<div class="featured">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="post_content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
</div>
<div class="comments container">
	<?php comments_template(); ?>
</div>

<?php endwhile; else: ?>
<?php endif; ?>

<?php get_footer(); ?>
