<article class="single">

  <?php if (has_post_thumbnail()): ?>
    <div class="single__cover">
      <?php the_post_thumbnail('large'); ?>
    </div>
  <?php endif; ?>

  <header class="single__header">
    <h2 class="h1"><?php the_title(); ?></h2>

    <?php if (get_field('post_lead')): ?>
      <p class="lead"><?php the_field('post_lead'); ?></p>
    <?php endif; ?>
  </header>

  <div class="single__content">
    <?php the_content(); ?>
  </div>
  
  <footer class="single__share">
    <h3 class="h4"><?php esc_html_e('Se ti piace condividi', 'landhocoworking'); ?></h3>
    
    <p>

      <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank" rel="nofollow" class="single__share__facebook">
        <span><?php esc_html_e('Facebook', 'landhocoworking'); ?></span>
      </a>

      <a href="https://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" target="_blank" rel="nofollow" class="single__share__twitter">
        <span><?php esc_html_e('Twitter', 'landhocoworking'); ?></span>
      </a>

      <a href="https://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="_blank" rel="nofollow" class="single__share__linkedin">
        <span><?php esc_html_e('LinkedIn', 'landhocoworking'); ?></span>
      </a>

    </p>

  </footer>

</article>
