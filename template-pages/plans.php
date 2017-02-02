<?php
/**
 * Template Name: Piani
 */
get_header(); ?>

<?php
  $args = array(
    'post_type' => 'piano',
    'orderby' => 'menu_order',
    'nopaging' => true
  );
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()):
?>

  <section class="plans">
  
    <div class="plans__header">
      <h2 class="h1"><?php the_title(); ?></h2>

      <?php if (get_field('page_lead')): ?>
        <p class="lead"><?php the_field('page_lead'); ?></p>
      <?php endif; ?>
    </div>

    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
      <?php get_template_part('template-parts/content', 'plan-preview'); ?>
    <?php
      endwhile;
      wp_reset_postdata();
    ?>

  </section>

  <?php if (have_rows('plans_partners')): ?>
    <section class="plans__banner">

      <h3 class="h1"><?php the_field('plans_banner_title'); ?></h3>
      <p class="lead"><?php the_field('plans_banner_text'); ?></p>
      
      <?php if (have_rows('plans_partners')): ?>
        <div class="plans_partners">
          <?php while (have_rows('plans_partners')) : the_row(); ?>

            <article class="plans__partner">
              <a href="<?php the_sub_field('plans_partners_link'); ?>" target="_blank" rel="nofollow">
                <h4 class="hidden"><?php the_sub_field('plans_partners_title'); ?></h4>
                <img src="<?php the_sub_field('plans_partners_image'); ?>" alt="" width="256" height="256">
              </a>
            </article>

          <?php endwhile; ?>
        </div>
      <?php endif; ?>
      
      <a href="<?php the_field('plans_banner_link'); ?>" rel="bookmark" class="button"><?php esc_html_e('Contattaci', 'landhocoworking'); ?></a>

    </section>
  <?php endif; ?>

<?php else: ?>
  <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>

<?php get_footer(); ?>
