<header class="heading">
  <div class="container">
    <div class="layout__row layout__row__xs--center layout__row__sm--center layout__row__md--center layout__row__lg--center">
      <div class="layout__xs__12 layout__sm__8 layout__md__8 layout__lg__8">
        <h2 class="h1"><?php the_title(); ?></h2>
        <?php if (get_field('page_lead')): ?>
          <p class="lead"><?php the_field('page_lead'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</header>
