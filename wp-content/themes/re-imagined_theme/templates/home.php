<?php
/*
Template Name: Home Template
*/
?>
<?php get_header('home'); ?>
<div class="hero filter" style="background-image: url('<?php the_field('main_image'); ?>') ; background-size: cover; background-position: center center;">
	<div class="container-fluid">
		<div class="content">
			<div class="welcome">
				<h1><?php the_field('welcome') ?></h1>
				<p style="text-transform: uppercase;"><?php the_field('line_1') ?></p>
				<p style="text-transform: uppercase;"><?php the_field('line_2') ?></p>
				<button><a href="">Contact Me</a></button>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid main-grid">
	<div class="row">

		<div class="col-md-3 grid flip-container ">
			<div class="circle background flipper">
				<div class="front">
					<a href="<?php bloginfo(url) ?>/about"><h2>About</h2></a>
				</div>
				<div class="back">
					<a href="<?php bloginfo(url) ?>/about"><p><?php the_field('about_message') ?></p></a>
				</div>
			</div>
		</div>	
		<div class="col-md-3 grid flip-container ">
			<div class="circle background flipper">
				<div class="front">
					<a href="<?php bloginfo(url) ?>/blog"><h2>Blog</h2></a>
				</div>
				<div class="back">
					<a href="<?php bloginfo(url) ?>/blog"><p><?php the_field('blog_message') ?></p></a>
				</div>
			</div>
		</div>
		<div class="col-md-3 grid flip-container ">
			<div class="circle background flipper">
				<div class="front">
					<a href="<?php bloginfo(url) ?>/gallery"><h2>Portfolio</h2></a>
				</div>
				<div class="back">
					<a href="<?php bloginfo(url) ?>/gallery"><p><?php the_field('gallery_message') ?></p></a>
				</div>
			</div>
		</div>
		<div class="col-md-3 grid flip-container ">
			<div class="circle background flipper">
				<div class="front">
					<a href="<?php bloginfo(url) ?>/social-media"><h2>Social Media</h2></a>
				</div>
				<div class="back">
					<a href="<?php bloginfo(url) ?>/social-media"><p><?php the_field('social_message') ?></p></a>
				</div>
			</div>
		</div>			

	</div>
</div>

<?php get_footer('home'); ?>

