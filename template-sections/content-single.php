<article class="single">

  <?php
    get_template_part('template-parts/content', 'hero');
    get_template_part('template-parts/content', 'heading');
  ?>

  <div class="single__content">
    <?php the_content(); ?>
  </div>
  
  <aside class="single__share">
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

  </aside>

  <?php
    $page_for_posts = get_option('page_for_posts');
    if (get_field('posts_banner_if', $page_for_posts)):
  ?>
    <footer class="single__banner">
      <h3 class="h1"><?php the_field('posts_banner_title', $page_for_posts); ?></h3>
      <p class="lead"><?php the_field('posts_banner_text', $page_for_posts); ?></p>
      <a href="<?php the_field('posts_banner_link', $page_for_posts); ?>" rel="bookmark" class="button"><?php esc_html_e('Altri contenuti', 'landhocoworking'); ?></a>
    </footer>
  <?php endif; ?>

</article>
