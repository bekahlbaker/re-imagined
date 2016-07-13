<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9">
<title>
  <?php
    if( ! is_home() ):
      wp_title( '|', true, 'right' );
    endif;
    bloginfo( 'name' );
  ?>
</title>
<?php wp_head(); ?>
</head>

<!--[if IE 9]>
 <body class="ie9">
<![endif]-->
<!--[if !IE]>-->
<body <?php body_class(); ?> >
<!--<![endif]-->

<header class="background-home">
	<div class="container-fluid">
		<a class="logo" href="<?php bloginfo('url'); ?>">
				<p>lindsay aggen</p>
		</a>
		<div class="nav-menu">
				<?php
					$defaults = array(
						'theme_location' => 'main-nav',
						'container' => false,
						'depth' => 1
					);
					wp_nav_menu($defaults);
				?>	
		</div>
	</div>
</header>