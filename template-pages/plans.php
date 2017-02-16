<?php
/**
 * Template Name: Piani
 */
get_header(); ?>

<article class="plans">

  <?php
    get_template_part('template-parts/content', 'hero');
    get_template_part('template-parts/content', 'heading');
  ?>

  <?php
    $args = array(
      'post_type' => 'piano',
      'orderby' => 'menu_order',
      'nopaging' => true
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()):
  ?>
    <div class="plans__items">
      <div class="container">
        <div class="layout__row layout__row__xs--column">
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <?php get_template_part('template-sections/content', 'plan-preview'); ?>
          <?php
            endwhile;
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  <?php else: ?>
    <?php get_template_part('template-sections/content', 'none'); ?>
  <?php endif; ?>

  <?php if (have_rows('plans_partners')): ?>
    <div class="heading heading--contrast">
      <div class="container">

        <div class="layout__row layout__row__xs--center layout__row__sm--center layout__row__md--center layout__row__lg--center">
          <div class="layout__xs__12 layout__sm__8 layout__md__8 layout__lg__8">
            <h3 class="h1"><?php the_field('plans_banner_title'); ?></h3>
            <p class="lead"><?php the_field('plans_banner_text'); ?></p>
          </div>
        </div>

        <?php if (have_rows('plans_partners')): ?>
          <div class="heading__partners layout__row layout__row__xs--center layout__row__sm--center layout__row__md--center layout__row__lg--center">
            <?php while (have_rows('plans_partners')) : the_row(); ?>
              <article class="heading__partners__item layout__xs__auto layout__sm__auto layout__md__auto layout__lg__auto">
                <a href="<?php the_sub_field('plans_partners_link'); ?>" target="_blank" rel="nofollow">
                  <h4 class="hidden"><?php the_sub_field('plans_partners_title'); ?></h4>
                  <img src="<?php the_sub_field('plans_partners_image'); ?>" alt="" width="256" height="256">
                </a>
              </article>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
        
        <div class="partners layout__row layout__row__xs--center layout__row__sm--center layout__row__md--center layout__row__lg--center">
          <div class="layout__xs__12 layout__sm__12 layout__md__12 layout__lg__12">
            <a href="<?php the_field('plans_banner_link'); ?>" rel="bookmark" class="button"><?php esc_html_e('Contattaci', 'landhocoworking'); ?></a>
          </div>
        </div>

      </div>
    </div>
  <?php endif; ?>
  
</article>

<?php get_footer(); ?>
