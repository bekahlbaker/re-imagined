<?php get_header(); ?>
<div class="row">
<div class="index container col-xs-8">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="content-block post">
			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<p class="description">by <?php the_author(); ?> | <?php echo get_the_date('l, F j, Y'); ?> | <?php the_category( ' ', $parents, $post_id ); ?> | <a href="<?php comment_link(); ?>"><?php comments_number(); ?></a></p>
			<div class="thumbnail">
				<?php the_post_thumbnail( ); ?>
			</div>
			<div class="excerpt">
				<?php the_excerpt(); ?>
			</div>
		</div>
<?php endwhile; else: ?>
<?php endif; ?>
</div>
<div class="sidebar col-xs-4">
<h3>Browse by Category</h3>
	<div class="categories">
		<?php $categories = get_categories( array(
		    'orderby' => 'name',
		    'parent'  => 0
		) );
		 
		foreach ( $categories as $category ) {
		    printf( '<a href="%1$s">%2$s</a><br />',
		        esc_url( get_category_link( $category->term_id ) ),
		        esc_html( $category->name )
		    );
		} ?>
	</div>

<h3>Browse by Tags</h3>
	<div class="tags">
		<?php $tags = get_tags();
		if ($tags) {
		foreach ($tags as $tag) {
		echo '<p><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'</a> </p> ';
		}
		} ?>
	</div>
	<div class="subscribe">
		<h3>Subscribe to Blog</h3>
		<p>Want to be notified when I post a new article?</p>
		<?php es_subbox( $namefield = "YES", $desc = "", $group = "" ); ?>
	</div>
</div>
</div>
<?php get_footer(); ?>