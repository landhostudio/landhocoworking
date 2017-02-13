<?php if (has_post_thumbnail()): ?>
  <div class="hero">
    <div class="container">
      <div class="hero__image">
        <?php the_post_thumbnail('large'); ?>
      </div>
    </div>
  </div>
<?php endif; ?>
