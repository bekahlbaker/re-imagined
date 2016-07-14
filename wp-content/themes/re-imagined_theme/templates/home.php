<?php
/*
Template Name: Home Template
*/
?>
<?php get_header('home'); ?>
<div class="hero filter" style="background-image: url('<?php the_field('image'); ?>') ; background-size: cover;">
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
					<a href=""><h2>About</h2></a>
				</div>
				<div class="back">
					<p><?php the_field('gallery_message') ?></p>
				</div>
			</div>
		</div>	
		<div class="col-md-3 grid flip-container ">
			<div class="circle background flipper">
				<div class="front">
					<a href=""><h2>About</h2></a>
				</div>
				<div class="back">
					<p><?php the_field('gallery_message') ?></p>
				</div>
			</div>
		</div>
		<div class="col-md-3 grid flip-container ">
			<div class="circle background flipper">
				<div class="front">
					<a href=""><h2>About</h2></a>
				</div>
				<div class="back">
					<p><?php the_field('gallery_message') ?></p>
				</div>
			</div>
		</div>
		<div class="col-md-3 grid flip-container ">
			<div class="circle background flipper">
				<div class="front">
					<a href=""><h2>About</h2></a>
				</div>
				<div class="back">
					<p><?php the_field('gallery_message') ?></p>
				</div>
			</div>
		</div>			

	</div>
</div>

<?php get_footer('home'); ?>

