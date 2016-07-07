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
				<p><?php the_field('message') ?></p>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 grid">
			<a href="<?php bloginfo('url'); ?>/blog"><h2>Blog</h2></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque voluptas, expedita vitae id, inventore unde cumque esse illo numquam porro. Veritatis nesciunt, tempora facere molestias hic laboriosam voluptate temporibus eligendi!</p>
		</div>
		<div class="col-md-6 grid">
			<a href=""><h2>Gallery</h2></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum enim qui odio praesentium aspernatur tempora, rem, recusandae quos nobis numquam, atque minima libero minus perspiciatis amet error. Aperiam labore, esse?</p>
		</div>	
	</div>
	<div class="row">
		<div class="col-md-6 grid">
			<a href=""><h2>Social Media</h2></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, cum officiis quam aliquam, quis assumenda natus sunt dolore consectetur laudantium eius omnis accusantium necessitatibus pariatur.</p>
		</div>
		<div class="col-md-6 grid">
			<a href=""><h2>Contact</h2></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eum ipsum ipsa perspiciatis aperiam. Saepe laudantium dignissimos quod animi. Repellat quam explicabo incidunt similique dolorem.</p>
		</div>
	</div>
</div>



<?php get_footer(); ?>