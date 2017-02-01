<article class="example">

  <?php if (has_post_thumbnail()): ?>
    <div class="example__cover">
      <?php the_post_thumbnail('large'); ?>
    </div>
  <?php endif; ?>

  <div class="example__header">
    <h2 class="h1"><?php the_title(); ?></h2>

    <?php if (get_field('page_lead')): ?>
      <p class="lead"><?php the_field('page_lead'); ?></p>
    <?php endif; ?>
  </div>

</article>
