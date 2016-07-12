<?php
/*
Template Name: ContactTemplate
*/
?>
<?php get_header(); ?>

<div class="contact container">
	<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
</div>



<?php get_footer(); ?>