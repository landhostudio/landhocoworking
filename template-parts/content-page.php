<article class="page">

  <?php
    get_template_part('template-parts/content', 'hero');
    get_template_part('template-parts/content', 'heading');
  ?>

  <div class="page__content">
    <?php the_content(); ?>
  </div>

</article>
