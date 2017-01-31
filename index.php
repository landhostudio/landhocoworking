<?php get_header(); ?>

<?php
  $args = array(
    'post_type' => 'post',
    'nopaging' => true
  );
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()):
  $count = 1;
?>

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
          
    <?php
      while ($the_query->have_posts()): $the_query->the_post();
    ?>

      <?php if (($count % 4) == 0): ?>
        <?php get_template_part('template-parts/content', 'preview-large'); ?>
      <?php else: ?>
        <?php get_template_part('template-parts/content', 'preview'); ?>
      <?php endif; ?>
      
    <?php
      $count++;
      endwhile;
      wp_reset_postdata();
    ?>

  </section>
        
<?php else: ?>
  <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>


<?php get_footer(); ?>
