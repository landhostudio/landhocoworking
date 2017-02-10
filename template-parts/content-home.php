<article class="home">

  <?php if (has_post_thumbnail()): ?>
    <div class="cover">
      <div class="container">
        <div class="cover__image">
          <?php the_post_thumbnail('large'); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <header class="heading">
    <div class="container">
      <div class="layout__row layout__row__xs--center layout__row__sm--center layout__row__md--center layout__row__lg--center">
        <div class="layout__xs__12 layout__sm__8 layout__md__8 layout__lg__8">
          <h2 class="h1"><?php the_title(); ?></h2>
          <?php if (get_field('page_lead')): ?>
            <p class="lead"><?php the_field('page_lead'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </header>

  <?php
    if (have_rows('board')):
    while (have_rows('board')) : the_row();
  ?>
    <div class="board<?php if (get_sub_field('board__layout') == 'one'): ?> board--one<?php elseif (get_sub_field('board__layout') == 'two'): ?> board--two<?php elseif (get_sub_field('board__layout') == 'three'): ?> board--three<?php elseif (get_sub_field('board__layout') == 'four'): ?> board--four<?php endif; ?>">
      <div class="container">
        <div class="layout__row layout__row--box">

          <div class="layout__xs__12 layout__sm__6 layout__md__6 layout__lg__6">
            <article class="card card__1 card--large">
              <a href="<?php the_sub_field('board__large__link'); ?>" rel="bookmark" class="card__link">
                <div class="card__container">
                  <div class="card__image">
                    <?php echo wp_get_attachment_image(get_sub_field('board__large__image'), 'thumbnail-large', false, array()); ?>
                  </div>
                  <div class="card__content">
                    <h3><?php the_sub_field('board__large__title'); ?></h3>
                    <p><?php the_sub_field('board__large__text'); ?></p>
                  </div>
                </div>
              </a>
            </article>
          </div>

          <div class="layout__xs__12 layout__sm__6 layout__md__6 layout__lg__6">
            <div class="layout__row layout__row--box">

              <div class="layout__xs__12 layout__sm__12 layout__md__12 layout__lg__12">
                <article class="card card__2 card--medium">
                  <a href="<?php the_sub_field('board__medium__link'); ?>" rel="bookmark" class="card__link">
                    <div class="card__container">
                      <div class="card__image">
                        <?php echo wp_get_attachment_image(get_sub_field('board__medium__image'), 'medium', false, array()); ?>
                      </div>
                      <div class="card__content">
                        <h3 class="normalized bold"><?php the_sub_field('board__medium__title'); ?></h3>
                      </div>
                    </div>
                  </a>
                </article>
              </div>

              <div class="layout__xs__6 layout__sm__6 layout__md__6 layout__lg__6">
                <article class="card card__3 card--small<?php if (get_sub_field('board__small__1__type') == 'image'): ?> card--image<?php elseif (get_sub_field('board__small__1__type') == 'video'): ?> card--video<?php elseif (get_sub_field('board__small__1__type') == 'text'): ?> card--text<?php endif; ?>">
                  <a href="<?php the_sub_field('board__small__1__link'); ?>" rel="bookmark" class="card__link">
                    <div class="card__container">
                      <?php if (get_sub_field('board__small__1__type') == 'video'): ?>
                        <div class="card__play">
                          <!-- TODO: place play icon here -->
                        </div>
                      <?php endif; ?>

                      <?php if (get_sub_field('board__small__1__type') == 'image'): ?>
                        <div class="card__image">
                          <?php echo wp_get_attachment_image(get_sub_field('board__small__1__image'), 'thumbnail', false, array()); ?>
                        </div>
                      <?php endif; ?>

                      <div class="card__content<?php if (get_sub_field('board__small__1__type') == 'text'): ?> card__content--truncate<?php endif; ?>">
                        <?php if (get_sub_field('board__small__1__type') == 'image' || get_sub_field('board__small__1__type') == 'video'): ?>
                          <h3 class="normalized bold"><?php the_sub_field('board__small__1__title'); ?></h3>
                        <?php endif; ?>

                        <?php if (get_sub_field('board__small__1__type') == 'text'): ?>
                          <h3><?php the_sub_field('board__small__1__title'); ?></h3>
                          <p><?php the_sub_field('board__small__1__text'); ?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                  </a>
                </article>
              </div>

              <div class="layout__xs__6 layout__sm__6 layout__md__6 layout__lg__6">
                <article class="card card__4 card--small<?php if (get_sub_field('board__small__2__type') == 'image'): ?> card--image<?php elseif (get_sub_field('board__small__2__type') == 'video'): ?> card--video<?php elseif (get_sub_field('board__small__2__type') == 'text'): ?> card--text<?php endif; ?>">
                  <a href="<?php the_sub_field('board__small__2__link'); ?>" rel="bookmark" class="card__link">
                    <div class="card__container">
                      <?php if (get_sub_field('board__small__2__type') == 'video'): ?>
                        <div class="card__play">
                          <svg>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#play"></use>
                          </svg>
                        </div>
                      <?php endif; ?>

                      <?php if (get_sub_field('board__small__2__type') == 'image' || get_sub_field('board__small__2__type') == 'video'): ?>
                        <div class="card__image">
                          <?php echo wp_get_attachment_image(get_sub_field('board__small__2__image'), 'thumbnail', false, array()); ?>
                        </div>
                      <?php endif; ?>

                      <div class="card__content<?php if (get_sub_field('board__small__2__type') == 'text'): ?> card__content--truncate<?php endif; ?>">
                        <?php if (get_sub_field('board__small__2__type') == 'image' || get_sub_field('board__small__2__type') == 'video'): ?>
                          <h3 class="normalized bold"><?php the_sub_field('board__small__2__title'); ?></h3>
                        <?php endif; ?>

                        <?php if (get_sub_field('board__small__2__type') == 'text'): ?>
                          <h3><?php the_sub_field('board__small__2__title'); ?></h3>
                          <p><?php the_sub_field('board__small__2__text'); ?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                  </a>
                </article>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  <?php
    endwhile;
    endif;
  ?>

</article>
