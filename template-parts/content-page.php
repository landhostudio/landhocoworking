<article class="page">

  <?php the_post_thumbnail(); ?>

  <h2><?php the_title(); ?></h2>

  <?php if (get_field('lead')): ?>
    <p><?php the_field('lead'); ?></p>
  <?php endif; ?>

  <?php the_content(); ?>

</article>
