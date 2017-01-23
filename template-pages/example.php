<?php
/**
 * Template Name: Example
 */
get_header(); ?>

<?php while (have_posts()): the_post(); ?>
	<?php get_template_part('template-parts/content', 'example'); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
