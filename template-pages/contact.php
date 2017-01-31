<?php
/**
 * Template Name: Contatti
 */
get_header(); ?>

<?php while (have_posts()): the_post(); ?>
	<?php get_template_part('template-parts/content', 'contact'); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
