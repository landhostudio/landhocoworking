<article class="example">

  <?php the_post_thumbnail(); ?>

  <h2 class="h1"><?php the_title(); ?></h2>

  <?php if (get_field('page_lead')): ?>
    <p class="lead"><?php the_field('page_lead'); ?></p>
  <?php endif; ?>

</article>
