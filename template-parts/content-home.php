<article class="home">

  <?php the_post_thumbnail(); ?>

  <h2 class="h1"><?php the_title(); ?></h2>

  <?php if (get_field('page_lead')): ?>
    <p class="lead"><?php the_field('page_lead'); ?></p>
  <?php endif; ?>

  <?php if (have_rows('home_board')): ?>
    <div class="home__board">
      <?php while (have_rows('home_board')): the_row(); ?>

        <?php if (get_row_layout() == 'home_card_large'): ?>

          <div class="card card--large">
            <a href="<?php the_sub_field('home_card_large_link'); ?>" rel="bookmark">

              <div class="card__content">
                <h3><?php the_sub_field('home_card_large_title'); ?></h3>
                <p><?php the_sub_field('home_card_large_text'); ?></p>
              </div>

              <div class="card__image">
                <?php echo wp_get_attachment_image(get_sub_field('home_card_large_image'), 'medium', false, array()); ?>
              </div>

            </a>
          </div>

        <?php elseif (get_row_layout() == 'home_card_medium'): ?>

          <div class="card card--medium">
            <a href="<?php the_sub_field('home_card_medium_link'); ?>" rel="bookmark">

              <div class="card__content">
                <h3><?php the_sub_field('home_card_medium_title'); ?></h3>
              </div>

              <div class="card__image">
                <?php echo wp_get_attachment_image(get_sub_field('home_card_medium_image'), 'medium', false, array()); ?>
              </div>

            </a>
          </div>

        <?php elseif (get_row_layout() == 'home_card_small'): ?>

          <div class="card card--small<?php if (get_sub_field('home_card_small_type') == 'image'): ?> card--image<?php elseif (get_sub_field('home_card_small_type') == 'video'): ?> card--video<?php elseif (get_sub_field('home_card_small_type') == 'text'): ?> card--text<?php endif; ?>">
            <a href="<?php the_sub_field('home_card_small_link'); ?>" rel="bookmark">

              <div class="card__content">
                <h3><?php the_sub_field('home_card_small_title'); ?></h3>

                <?php if (get_sub_field('home_card_small_type') == 'text'): ?>
                  <p><?php the_sub_field('home_card_small_text'); ?></p>
                <?php endif; ?>
              </div>
              
              <?php if (get_sub_field('home_card_small_type') == 'video'): ?>
                <div class="card__play">
                  <!-- TODO: place play icon here -->
                </div>
              <?php endif; ?>
              
              <?php if (get_sub_field('home_card_small_type') == 'image' || get_sub_field('home_card_small_type') == 'video'): ?>
                <div class="card__image">
                  <?php echo wp_get_attachment_image(get_sub_field('home_card_small_image'), 'thumbnail', false, array()); ?>
                </div>
              <?php endif; ?>

            </a>
          </div>

        <?php endif; ?>

      <?php endwhile; ?>
    </div>
  <?php endif; ?>

</article>
