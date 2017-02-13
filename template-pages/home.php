<?php
/**
 * Template Name: Home
 */
get_header(); ?>

<?php while (have_posts()): the_post(); ?>
	<?php get_template_part('template-sections/content', 'home'); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
