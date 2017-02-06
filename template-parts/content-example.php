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

  <div class="container">

    <div class="layout__row">
      <div class="layout__mb__2 example">Mobile: 2</div>
      <div class="layout__mb__10 example">Mobile: 10</div>
    </div>

    <hr>

    <div class="layout__row">
      <div class="layout__mb__1 example">Mobile: 1</div>
      <div class="layout__mb__1 example">Mobile: 1</div>
      <div class="layout__mb__1 example">Mobile: 1</div>
      <div class="layout__mb__1 example">Mobile: 1</div>
      <div class="layout__mb__1 example">Mobile: 1</div>
      <div class="layout__mb__1 example">Mobile: 1</div>
      <div class="layout__mb__1 example">Mobile: 1</div>
      <div class="layout__mb__1 example">Mobile: 1</div>
      <div class="layout__mb__1 example">Mobile: 1</div>
      <div class="layout__mb__1 example">Mobile: 1</div>
      <div class="layout__mb__1 example">Mobile: 1</div>
      <div class="layout__mb__1 example">Mobile: 1</div>
    </div>

    <hr>

    <div class="layout__row">
      <div class="layout__mb__2 example">Mobile: 2</div>
      <div class="layout__mb__2 example">Mobile: 2</div>
      <div class="layout__mb__2 example">Mobile: 2</div>
      <div class="layout__mb__2 example">Mobile: 2</div>
      <div class="layout__mb__2 example">Mobile: 2</div>
      <div class="layout__mb__2 example">Mobile: 2</div>
    </div>

    <hr>

    <div class="layout__row">
      <div class="layout__mb__6 example">Mobile: 6</div>
      <div class="layout__mb__6 example">Mobile: 6</div>
    </div>

    <div class="layout__row">
      <div class="layout__sm__1 example">Small: 1</div>
      <div class="layout__sm__1 example">Small: 1</div>
      <div class="layout__sm__1 example">Small: 1</div>
      <div class="layout__sm__1 example">Small: 1</div>
      <div class="layout__sm__1 example">Small: 1</div>
      <div class="layout__sm__1 example">Small: 1</div>
      <div class="layout__sm__1 example">Small: 1</div>
      <div class="layout__sm__1 example">Small: 1</div>
      <div class="layout__sm__1 example">Small: 1</div>
      <div class="layout__sm__1 example">Small: 1</div>
      <div class="layout__sm__1 example">Small: 1</div>
      <div class="layout__sm__1 example">Small: 1</div>
    </div>

    <div class="layout__row">
      <div class="layout__md__1 example">Medium: 1</div>
      <div class="layout__md__1 example">Medium: 2</div>
      <div class="layout__md__1 example">Medium: 3</div>
      <div class="layout__md__1 example">Medium: 4</div>
      <div class="layout__md__1 example">Medium: 5</div>
      <div class="layout__md__1 example">Medium: 6</div>
      <div class="layout__md__1 example">Medium: 7</div>
      <div class="layout__md__1 example">Medium: 8</div>
      <div class="layout__md__1 example">Medium: 9</div>
      <div class="layout__md__1 example">Medium: 10</div>
      <div class="layout__md__1 example">Medium: 11</div>
      <div class="layout__md__1 example">Medium: 12</div>
    </div>

    <div class="layout__row">
      <div class="layout__lg__1 example">Large: 1</div>
      <div class="layout__lg__1 example">Large: 2</div>
      <div class="layout__lg__1 example">Large: 3</div>
      <div class="layout__lg__1 example">Large: 4</div>
      <div class="layout__lg__1 example">Large: 5</div>
      <div class="layout__lg__1 example">Large: 6</div>
      <div class="layout__lg__1 example">Large: 7</div>
      <div class="layout__lg__1 example">Large: 8</div>
      <div class="layout__lg__1 example">Large: 9</div>
      <div class="layout__lg__1 example">Large: 10</div>
      <div class="layout__lg__1 example">Large: 11</div>
      <div class="layout__lg__1 example">Large: 12</div>
    </div>

  </div>

</article>
