<div class="layout__xs__12 layout__sm__4 layout__md__4 layout__lg__4<?php if (get_field('plan_featured')): ?> layout__xs--first<?php endif; ?>">
  <article class="plans__item plans__item--preview<?php if (get_field('plan_featured')): ?> plans__item--featured<?php endif; ?>">
    <h2 class="h3"><?php the_title(); ?></h2>
    <p class="small"><?php the_field('plan_price'); ?></p>

    <a href="<?php the_permalink(); ?>" rel="bookmark" class="button"><?php esc_html_e('Leggi di più', 'landhocoworking'); ?></a>
    
    <?php if (have_rows('plan_features')): ?>
      <ul>
        <?php while (have_rows('plan_features')) : the_row(); ?>
          <li>
            <h3 class="h6 normalized"><?php the_sub_field('plan_features_title'); ?></h3>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
  </article>
</div>
