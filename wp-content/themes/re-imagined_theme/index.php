<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<!-- <?php get_the_date(); ?>
<?php get_the_author(); ?>
<?php get_the_category(); ?> -->
<?php the_excerpt(); ?>
<?php endwhile; else: ?>
<?php endif; ?>

<?php get_footer(); ?>
