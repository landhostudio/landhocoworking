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

    <div class="container">
      <div class="layout__row layout__row--box">
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          
          <div class="layout__xs__12<?php if (($count % 3) == 0): ?> layout__sm__12 layout__md__4 layout__lg__4<?php elseif (($count % 4) == 0): ?> layout__sm__6 layout__md__12 layout__lg__12<?php else: ?> layout__sm__6 layout__md__4 layout__lg__4<?php endif; ?>">

            <article class="card card--large card--preview<?php if (($count % 3) == 0): ?> card--preview-md<?php elseif (($count % 4) == 0): ?> card--preview-lg<?php endif; ?>">
              <a href="<?php the_permalink(); ?>" rel="bookmark" class="card__link">
                <div class="card__container">

                  <?php if (has_post_thumbnail()): ?>
                    <div class="card__image">
                      <?php if (($count % 4) == 0): ?>
                        <?php the_post_thumbnail('thumbnail-large'); ?>
                      <?php else: ?>
                        <?php the_post_thumbnail('thumbnail'); ?>
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>

                  <div class="card__content card__content--truncate">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                  </div>

                </div>
              </a>
            </article>

          </div>
        <?php
          $count++;
          endwhile;
          wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
        
<?php else: ?>
  <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>

<?php get_footer(); ?>
