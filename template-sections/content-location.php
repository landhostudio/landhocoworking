<article class="location">

  <?php
    get_template_part('template-parts/content', 'hero');
    get_template_part('template-parts/content', 'heading');
  ?>

  <!--  -->

  <?php if (have_rows('gallery')): ?>
    <div class="gallery">
      <?php while (have_rows('gallery')) : the_row(); ?>
        <div class="board board--gallery<?php if (get_sub_field('gallery__layout') == 'one'): ?> board--one<?php elseif (get_sub_field('gallery__layout') == 'two'): ?> board--two<?php elseif (get_sub_field('gallery__layout') == 'three'): ?> board--three<?php elseif (get_sub_field('gallery__layout') == 'four'): ?> board--four<?php endif; ?>">
          <div class="container">
            <div class="layout__row layout__row--box">

              <div class="group-1 layout__xs__12 layout__sm__6 layout__md__6 layout__lg__6">
                <figure class="card card__1 card--large">
                  <a href="<?php echo wp_get_attachment_image_src(get_sub_field('gallery__large__image'), 'large', false, array())[0]; ?>" class="card__link">
                    <div class="card__container">
                      <div class="card__image">
                        <?php echo wp_get_attachment_image(get_sub_field('gallery__large__image'), 'thumbnail-large', false, array()); ?>
                      </div>
                    </div>
                  </a>
                </figure>
              </div>

              <div class="group-2 layout__xs__12 layout__sm__6 layout__md__6 layout__lg__6">
                <div class="layout__row layout__row--box">

                  <div class="group-2__item-1 layout__xs__12 layout__sm__12 layout__md__12 layout__lg__12">
                    <figure class="card card__2 card--medium">
                      <a href="<?php echo wp_get_attachment_image_src(get_sub_field('gallery__medium__image'), 'large', false, array())[0]; ?>" class="card__link">
                        <div class="card__container">
                          <div class="card__image">
                            <?php echo wp_get_attachment_image(get_sub_field('gallery__medium__image'), 'medium', false, array()); ?>
                          </div>
                        </div>
                      </a>
                    </figure>
                  </div>

                  <div class="group-2__item-2 layout__xs__6 layout__sm__6 layout__md__6 layout__lg__6">
                    <figure class="card card__3 card--small card--image">
                      <a href="<?php echo wp_get_attachment_image_src(get_sub_field('gallery__small__1__image'), 'large', false, array())[0]; ?>" class="card__link">
                        <div class="card__container">
                          <div class="card__image">
                            <?php echo wp_get_attachment_image(get_sub_field('gallery__small__1__image'), 'thumbnail', false, array()); ?>
                          </div>
                        </div>
                      </a>
                    </figure>
                  </div>

                  <div class="group-2__item-3 layout__xs__6 layout__sm__6 layout__md__6 layout__lg__6">
                    <figure class="card card__4 card--small card--image">
                      <a href="<?php echo wp_get_attachment_image_src(get_sub_field('gallery__small__2__image'), 'large', false, array())[0]; ?>" class="card__link">
                        <div class="card__container">
                          <div class="card__image">
                            <?php echo wp_get_attachment_image(get_sub_field('gallery__small__2__image'), 'thumbnail', false, array()); ?>
                          </div>
                        </div>
                      </a>
                    </figure>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>

  <!--  -->

  <?php if (have_rows('banner')): ?>
    <?php while (have_rows('banner')): the_row(); ?>
      <div class="heading heading--banner<?php if (get_sub_field('banner_type') == 'left'): ?> heading--banner-left<?php elseif (get_sub_field('banner_type') == 'right'): ?> heading--banner-right<?php endif; ?>">
        <div class="container">
          
          <div class="heading__content">
            <div class="layout__row layout__row__xs--center<?php if (get_sub_field('banner_type') == 'left'): ?> layout__row__sm--left layout__row__md--left layout__row__lg--left<?php elseif (get_sub_field('banner_type') == 'right'): ?> layout__row__sm--right layout__row__md--right layout__row__lg--right<?php endif; ?>">
              <div class="layout__xs__12 layout__sm__6 layout__md__6 layout__lg__6">
                <h2 class="h1"><?php the_sub_field('banner_title'); ?></h2>
                <p class="lead"><?php the_sub_field('banner_text'); ?></p>
                <a href="<?php the_sub_field('banner_link'); ?>" class="button" target="_blank" rel="nofollow"><?php esc_html_e('Leggi di più', 'landhocoworking'); ?></a>
              </div>
            </div>
          </div>
          
          <div class="heading__image">
            <?php echo wp_get_attachment_image(get_sub_field('banner_image'), 'large', false, array()); ?>
          </div>
          
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

</article>
