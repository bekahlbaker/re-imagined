<?php
/*
Template Name: Home Template
*/
?>
<?php get_header(); ?>
<div class="hero filter" style="background-image: url('<?php the_field('image'); ?>') ; background-size: cover;">
	<div class="container-fluid">
		<div class="content">
			<div class="welcome">
				<h1><?php the_field('welcome') ?></h1>
				<p style="text-transform: uppercase;"><?php the_field('line_1') ?></p>
				<p style="text-transform: uppercase;"><?php the_field('line_2') ?></p>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid main-grid">
	<div class="row">
		<div class="col-md-6 grid">
			<a href="<?php bloginfo('url'); ?>/blog"><h2>Blog</h2></a>
			<p><?php the_field('blog_message') ?></p>
		</div>
		<div class="col-md-6 grid">
			<a href=""><h2>Gallery</h2></a>
			<p><?php the_field('gallery_message') ?></p>
		</div>	
	</div>
	<div class="row">
		<div class="col-md-6 grid">
			<a href=""><h2>Social Media</h2></a>
			<p><?php the_field('social_message') ?></p>
		</div>
		<div class="col-md-6 grid">
			<a href=""><h2>Contact</h2></a>
			<p><?php the_field('contact_message') ?></p>
		</div>
	</div>
</div>

<?php get_footer(); ?>

