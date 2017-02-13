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

    <?php get_template_part('template-parts/content', 'heading'); ?>

    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

      <?php if (($count % 4) == 0): ?>
        <?php get_template_part('template-sections/content', 'preview-large'); ?>
      <?php else: ?>
        <?php get_template_part('template-sections/content', 'preview'); ?>
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
