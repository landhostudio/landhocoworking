<?php get_header(); ?>

<?php if (have_posts()): ?>

  <section class="index">

    <?php if (is_category()): ?>
      <h2><?php single_cat_title(); ?></h2>
    <?php elseif (is_tag()): ?>
      <h2><?php single_tag_title(); ?></h2>
    <?php elseif (is_search()): ?>
      <h2><?php printf( __( 'Search Results for: %s', 'landhocoworking' ), get_search_query() ); ?></h2>
    <?php else: ?>
      <h2><?php esc_html_e('News', 'landhocoworking'); ?></h2>
    <?php endif; ?>
          
    <?php while (have_posts()): the_post(); ?>
      <?php get_template_part('template-parts/content', 'preview'); ?>
    <?php endwhile; ?>

  </section>
        
<?php else: ?>
  <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>


<?php get_footer(); ?>
