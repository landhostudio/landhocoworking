<article class="plan">

  <?php get_template_part('template-parts/content', 'heading'); ?>

  <div class="plan__content">
    <div class="container">
      <div class="layout__row">
        <?php
          $form_object = get_field('plan_form');
          if ($form_object):
        ?>
          <div class="layout__xs__12 layout__sm__4 layout__md__4 layout__lg__4">

            <div class="form">
              <p class="h3"><?php the_title(); ?></p>
              <p class="h5 normalized"><?php the_field('plan_price'); ?></p>
              <?php echo do_shortcode('[gravityform id="' . $form_object['id'] . '" title="false" description="false" ajax="true"]'); ?>
            </div>

          </div>
        <?php endif; ?>

        <div class="layout__xs__12 layout__sm__8 layout__md__8 layout__lg__8">
          <div class="plan__body">

            <?php if (has_post_thumbnail()): ?>
              <div class="hero">
                <div class="hero__image">
                  <?php the_post_thumbnail('medium'); ?>
                </div>
              </div>
            <?php endif; ?>

            <?php the_field('plan_text'); ?>
            
            <?php if (have_rows('plan_features')): ?>

              <hr>

              <div class="plan__features">

                <h3 class="hidden"><?php esc_html_e('Caratteristiche', 'landhocoworking'); ?></h3>
                <ul class="plan__features__items layout__row">
                  <?php while (have_rows('plan_features')) : the_row(); ?>
                    <li class="plan__features__item layout__xs__12 layout__sm__6 layout__md__6 layout__lg__6">
                      <h4 class="h3"><?php the_sub_field('plan_features_title'); ?></h4>
                      <p class="small"><?php the_sub_field('plan_features_text'); ?></p>
                    </li>
                  <?php endwhile; ?>
                </ul>

              </div>
            <?php endif; ?>
            
          </div>
        </div>
      </div>
    </div>
  </div>

</article>
