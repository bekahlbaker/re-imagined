<?php
/*
Template Name: About Template
*/
?>
<?php get_header(); ?>

<div class="about container">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<!-- 	<div class="title">
		<h4><?php the_field('about_title') ?></h4>
	</div> -->
	<div class="row">
		<div class="col-md-4 " >
			<div class="profile">
				<?php the_post_thumbnail(); ?>
			</div>
			<a href=""><button>Contact Me</button></a>
		</div>
		<div class="col-md-8 ">
			<p style="text-align: left!important;"><?php the_content( ); ?></p>
		</div>
	</div>
<?php endwhile; else: ?>
<?php endif; ?>
</div>

<?php get_footer(); ?>