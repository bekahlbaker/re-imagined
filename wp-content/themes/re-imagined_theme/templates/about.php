<?php
/*
Template Name: About Template
*/
?>
<?php get_header(); ?>

<div class="about container">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<div class="title">
		<h4><?php the_title( ); ?></h4>
	</div>
	<div class="row">
		<div class="col-md-4 pull-right" style="text-align: center;">
			<div class="profile">
				<?php the_post_thumbnail(); ?>
			</div>
<!-- 			<ul class="social-links">
				<li>facebook</li>
				<li>twitter</li>
				<li>instagram</li>
				<li>email</li>
			</ul> -->
			<a href=""><button>Hire Me</button></a>
		</div>
		<div class="col-md-8 pull-left">
			<p><?php the_content( ); ?></p>
		</div>
	</div>
<?php endwhile; else: ?>
<?php endif; ?>
</div>

<?php get_footer(); ?>