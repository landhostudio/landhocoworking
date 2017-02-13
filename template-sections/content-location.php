<article class="location">

  <?php
    get_template_part('template-parts/content', 'hero');
    get_template_part('template-parts/content', 'heading');
  ?>

  <?php if (have_rows('location_gallery')): ?>
    <div class="location__gallery">
      <?php while (have_rows('location_gallery')): the_row(); ?>

        <?php if (get_row_layout() == 'location_image_large'): ?>

          <div class="card card--large<?php if (get_sub_field('location_image_large_type') == 'video'): ?> card--video<?php endif; ?>">
            <a href="<?php echo wp_get_attachment_image_src(get_sub_field('location_image_large_image'), 'large')[0]; ?>">

              <?php if (get_sub_field('location_image_large_type') == 'video'): ?>
                <div class="card__play">
                  <!-- TODO: place play icon here -->
                </div>
              <?php endif; ?>

              <div class="card__image">
                <?php echo wp_get_attachment_image(get_sub_field('location_image_large_image'), 'medium', false, array()); ?>
              </div>
              
              <?php if (get_sub_field('location_image_large_type') == 'video'): ?>
                <div class="card__video">
                  <video controls>
                    <source src="<?php the_sub_field('location_image_large_video'); ?>" type="video/mp4">
                  </video>
                </div>
              <?php endif; ?>

            </a>
          </div>

        <?php elseif (get_row_layout() == 'location_image_medium'): ?>

          <div class="card card--medium<?php if (get_sub_field('location_image_medium_type') == 'video'): ?> card--video<?php endif; ?>">
            <a href="<?php echo wp_get_attachment_image_src(get_sub_field('location_image_medium_image'), 'large')[0]; ?>">

              <?php if (get_sub_field('location_image_medium_type') == 'video'): ?>
                <div class="card__play">
                  <!-- TODO: place play icon here -->
                </div>
              <?php endif; ?>

              <div class="card__image">
                <?php echo wp_get_attachment_image(get_sub_field('location_image_medium_image'), 'medium', false, array()); ?>
              </div>
              
              <?php if (get_sub_field('location_image_medium_type') == 'video'): ?>
                <div class="card__video">
                  <video controls>
                    <source src="<?php the_sub_field('location_image_medium_video'); ?>" type="video/mp4">
                  </video>
                </div>
              <?php endif; ?>

            </a>
          </div>

        <?php elseif (get_row_layout() == 'location_image_small'): ?>

          <div class="card card--small<?php if (get_sub_field('location_image_small_type') == 'video'): ?> card--video<?php endif; ?>">
            <a href="<?php echo wp_get_attachment_image_src(get_sub_field('location_image_small_image'), 'large')[0]; ?>">

              <?php if (get_sub_field('location_image_small_type') == 'video'): ?>
                <div class="card__play">
                  <!-- TODO: place play icon here -->
                </div>
              <?php endif; ?>

              <div class="card__image">
                <?php echo wp_get_attachment_image(get_sub_field('location_image_small_image'), 'thumbnail', false, array()); ?>
              </div>
              
              <?php if (get_sub_field('location_image_small_type') == 'video'): ?>
                <div class="card__video">
                  <video controls>
                    <source src="<?php the_sub_field('location_image_small_video'); ?>" type="video/mp4">
                  </video>
                </div>
              <?php endif; ?>

            </a>
          </div>

        <?php endif; ?>

      <?php endwhile; ?>
    </div>
  <?php endif; ?>

  <?php if (have_rows('location_banner_new')): ?>
    <?php while (have_rows('location_banner_new')): the_row(); ?>
      <div class="heading heading--banner<?php if (get_sub_field('location_banner_type') == 'left'): ?> heading--banner-left<?php elseif (get_sub_field('location_banner_type') == 'right'): ?> heading--banner-right<?php endif; ?>">
        <div class="container">
          
          <div class="heading__content">
            <div class="layout__row layout__row__xs--center<?php if (get_sub_field('location_banner_type') == 'left'): ?> layout__row__sm--left layout__row__md--left layout__row__lg--left<?php elseif (get_sub_field('location_banner_type') == 'right'): ?> layout__row__sm--right layout__row__md--right layout__row__lg--right<?php endif; ?>">
              <div class="layout__xs__12 layout__sm__6 layout__md__6 layout__lg__6">
                <h2 class="h1"><?php the_sub_field('location_banner_title'); ?></h2>
                <p class="lead"><?php the_sub_field('location_banner_text'); ?></p>
                <a href="<?php the_sub_field('location_banner_link'); ?>" class="button button--inverted" target="_blank" rel="nofollow"><?php esc_html_e('Leggi di più', 'landhocoworking'); ?></a>
              </div>
            </div>
          </div>
          
          <div class="heading__image">
            <?php echo wp_get_attachment_image(get_sub_field('location_banner_image'), 'large', false, array()); ?>
          </div>
          
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php if (have_rows('location_banner')): ?>
    <div class="location__banners">
      <?php while (have_rows('location_banner')): the_row(); ?>

        <?php if (get_row_layout() == 'location_banner_left'): ?>

          <div class="banner banner--left">

            <div class="banner__content">
              <h3 class="h1"><?php the_sub_field('location_banner_left_title'); ?></h3>
              <p><?php the_sub_field('location_banner_left_text'); ?></p>
              <a href="<?php the_sub_field('location_banner_left_link'); ?>" class="button" target="_blank" rel="nofollow"><?php esc_html_e('Leggi di più', 'landhocoworking'); ?></a>
            </div>
            
            <div class="banner__image">
              <?php echo wp_get_attachment_image(get_sub_field('location_banner_left_image'), 'large', false, array()); ?>
            </div>

          </div>

        <?php elseif (get_row_layout() == 'location_banner_right'): ?>

          <div class="banner banner--right">

            <div class="banner__content">
              <h3 class="h1"><?php the_sub_field('location_banner_right_title'); ?></h3>
              <p><?php the_sub_field('location_banner_right_text'); ?></p>
              <a href="<?php the_sub_field('location_banner_right_link'); ?>" class="button" target="_blank" rel="nofollow"><?php esc_html_e('Leggi di più', 'landhocoworking'); ?></a>
            </div>
            
            <div class="banner__image">
              <?php echo wp_get_attachment_image(get_sub_field('location_banner_right_image'), 'large', false, array()); ?>
            </div>

          </div>

        <?php endif; ?>

      <?php endwhile; ?>
    </div>
  <?php endif; ?>

</article>
