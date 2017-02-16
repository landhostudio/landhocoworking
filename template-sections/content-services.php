<article class="services">

  <?php
    get_template_part('template-parts/content', 'hero');
    get_template_part('template-parts/content', 'heading');
  ?>

  <?php if (have_rows('services')): ?>
    <div class="services__items">
      <div class="container">
        <div class="layout__row layout__row--space">
          <?php while (have_rows('services')): the_row(); ?>
            <div class="services__item layout__xs__12 layout__sm__6 layout__md__4 layout__lg__4">
              <?php echo wp_get_attachment_image(get_sub_field('services_image'), 'medium', false, array()); ?>
              <h3><?php the_sub_field('services_title'); ?></h3>
              <p><?php the_sub_field('services_text'); ?></p>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (get_field('services_banner_if')): ?>
    <div class="heading heading--contrast">
      <div class="container">
        <div class="layout__row layout__row__xs--center layout__row__sm--center layout__row__md--center layout__row__lg--center">
          <div class="layout__xs__12 layout__sm__8 layout__md__8 layout__lg__8">

            <h3 class="h1"><?php the_field('services_banner_title'); ?></h3>
            <p class="lead"><?php the_field('services_banner_text'); ?></p>
            <a href="<?php the_field('services_banner_link'); ?>" rel="bookmark" class="button"><?php esc_html_e('Leggi di più', 'landhocoworking'); ?></a>

          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

</article>
