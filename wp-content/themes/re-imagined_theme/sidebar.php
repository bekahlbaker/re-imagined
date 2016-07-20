<div class="sidebar">
<hr>
	<div class="subscribe">
		<h3>Subscribe to Blog</h3>
		<p>Want to be notified when I post a new article?</p>
		<?php es_subbox( $namefield = "YES", $desc = "", $group = "" ); ?>
	</div>
<hr>
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
<hr>
	<h3>Browse by Tags</h3>
	<div class="tags">
	<?php wp_tag_cloud( ); ?>
<!-- 		<?php $tags = get_tags();
		if ($tags) {
		foreach ($tags as $tag) {
		echo '<p><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'</a> </p> ';
		}
		} ?> -->
	</div>
<hr>
</div>
