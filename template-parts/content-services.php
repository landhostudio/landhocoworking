<article class="services">

  <?php the_post_thumbnail(); ?>

  <h2><?php the_title(); ?></h2>

  <?php if (get_field('lead')): ?>
    <p><?php the_field('lead'); ?></p>
  <?php endif; ?>

  <?php if (have_rows('services')): ?>
    <div class="services__items">
      <?php while (have_rows('services')): the_row(); ?>
        <div class="services__item">
          <?php echo wp_get_attachment_image(get_sub_field('services_image'), 'medium', false, array()); ?>
          <h3><?php the_sub_field('services_title'); ?></h3>
          <p><?php the_sub_field('services_text'); ?></p>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>

  <?php if (get_field('services_banner_if')): ?>
    <div class="services__banner">
      <h3 class="h1"><?php the_field('services_banner_title'); ?></h3>
      <p><?php the_field('services_banner_text'); ?></p>
      <a href="<?php the_field('services_banner_link'); ?>" rel="bookmark" class="button"><?php esc_html_e('Leggi di più', 'landhocoworking'); ?></a>
    </div>
  <?php endif; ?>

</article>
