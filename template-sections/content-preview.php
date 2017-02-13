<article class="preview">
  <a href="<?php the_permalink(); ?>" rel="bookmark">

    <div class="preview__content">
      <h3><?php the_title(); ?></h3>
      <?php the_excerpt(); ?>
    </div>

    <?php if (has_post_thumbnail()): ?>
      <div class="preview__image">
        <?php the_post_thumbnail('medium'); ?>
      </div>
    <?php endif; ?>

  </a>
</article>
