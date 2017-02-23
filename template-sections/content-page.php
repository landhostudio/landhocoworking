<article class="page">

  <?php
    get_template_part('template-parts/content', 'hero');
    get_template_part('template-parts/content', 'heading');
  ?>

  <div class="page__content">
    <div class="container">
      <div class="layout__row layout__row__xs--center layout__row__sm--center layout__row__md--center layout__row__lg--center">
        <div class="layout__xs__12 layout__sm__8 layout__md__8 layout__lg__8">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>

</article>
