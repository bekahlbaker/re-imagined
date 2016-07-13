<?php
/*
Template Name: Social Template
*/
?>
<?php get_header(); ?>

<div class="social container">
	<div class="instagram">
		<?php echo do_shortcode('[instagram-feed]' ); ?>
	</div>
	<div class="facebook">
		<?php echo do_shortcode('[fts_facebook id=reimaginedbyLindsay posts=5 posts_displayed=page_only type=page]' ); ?>
	</div>
</div>



<?php get_footer(); ?>