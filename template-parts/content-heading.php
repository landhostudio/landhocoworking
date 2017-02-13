<header class="heading">
  <div class="container">
    <div class="layout__row layout__row__xs--center layout__row__sm--center layout__row__md--center layout__row__lg--center">
      <div class="layout__xs__12 layout__sm__8 layout__md__8 layout__lg__8">

        <?php if (is_category()): ?>

          <h2 class="h1"><?php single_cat_title(); ?></h2>

        <?php elseif (is_tag()): ?>

          <h2 class="h1"><?php single_tag_title(); ?></h2>

        <?php elseif (is_search()): ?>

          <h2 class="h1"><?php esc_html_e('Cerca', 'landhocoworking'); ?></h2>
          <p class="lead"><?php printf(__('Risultati per: %s', 'landhocoworking'), get_search_query()); ?></p>

        <?php elseif (is_home()): ?>

          <h2 class="h1"><?php esc_html_e('News', 'landhocoworking'); ?></h2>

          <?php if (get_field('page_lead', get_option('page_for_posts'))): ?>
            <p class="lead"><?php the_field('page_lead', get_option('page_for_posts')); ?></p>
          <?php endif; ?>

        <?php elseif (is_404()): ?>
          
          <h2 class="h1"><?php esc_html_e('Nessun contenuto', 'landhocoworking'); ?></h2>
          <p class="lead"><?php esc_html_e('Al momento sembra che non ci sia alcun contenuto da poter visualizzarne.', 'landhocoworking'); ?></p>

        <?php elseif (is_single()): ?>

          <h2 class="h1"><?php the_title(); ?></h2>

          <?php if (get_field('post_lead')): ?>
            <p class="lead"><?php the_field('post_lead'); ?></p>
          <?php elseif (get_field('plan_lead')): ?>
            <p class="lead"><?php the_field('plan_lead'); ?></p>
          <?php endif; ?>

        <?php else: ?>

          <h2 class="h1"><?php the_title(); ?></h2>

          <?php if (get_field('page_lead')): ?>
            <p class="lead"><?php the_field('page_lead'); ?></p>
          <?php endif; ?>

        <?php endif; ?>

      </div>
    </div>
  </div>
</header>
