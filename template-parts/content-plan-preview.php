<article class="plan plan--preview<?php if (get_field('plan_featured')): ?> plan--featured<?php endif; ?>">

    <h2><?php the_title(); ?></h2>
    <p><?php the_field('plan_price'); ?></p>

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
