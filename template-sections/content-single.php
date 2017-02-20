<article class="article">

  <?php
    get_template_part('template-parts/content', 'hero');
    get_template_part('template-parts/content', 'heading');
  ?>

  <div class="article__content">
    <div class="container">
      <div class="layout__row layout__row__xs--center layout__row__sm--center layout__row__md--center layout__row__lg--center">
        <div class="layout__xs__12 layout__sm__8 layout__md__8 layout__lg__8">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>

  <aside class="article__share">
    <div class="container">
      <div class="layout__row layout__row__xs--center layout__row__sm--center layout__row__md--center layout__row__lg--center">

        <div class="layout__xs__12 layout__sm__12 layout__md__12 layout__lg__12">
          <h3 class="h4"><?php esc_html_e('Se ti piace condividi', 'landhocoworking'); ?></h3>
        </div>

        <div class="layout__row layout__row__xs--center layout__row__sm--center layout__row__md--center layout__row__lg--center">
          <div class="layout__xs__auto layout__sm__auto layout__md__auto layout__lg__auto">
            <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank" rel="nofollow" class="article__share__icon article__share__icon--facebook">
              <span class="hidden"><?php esc_html_e('Facebook', 'landhocoworking'); ?></span>
              <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use>
              </svg>
            </a>
          </div>

          <div class="layout__xs__auto layout__sm__auto layout__md__auto layout__lg__auto">
            <a href="https://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" target="_blank" rel="nofollow" class="article__share__icon article__share__icon--twitter">
              <span class="hidden"><?php esc_html_e('Twitter', 'landhocoworking'); ?></span>
              <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use>
              </svg>
            </a>
          </div>

          <div class="layout__xs__auto layout__sm__auto layout__md__auto layout__lg__auto">
            <a href="https://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="_blank" rel="nofollow" class="article__share__icon article__share__icon--linkedin">
              <span class="hidden"><?php esc_html_e('LinkedIn', 'landhocoworking'); ?></span>
              <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use>
              </svg>
            </a>
          </div>
        </div>

      </div>
    </div>
  </aside>

  <?php
    $page_for_posts = get_option('page_for_posts');
    if (get_field('posts_banner_if', $page_for_posts)):
  ?>
    <div class="heading heading--contrast">
      <div class="container">
        <div class="layout__row layout__row__xs--center layout__row__sm--center layout__row__md--center layout__row__lg--center">
          <div class="layout__xs__12 layout__sm__8 layout__md__8 layout__lg__8">
            <h3 class="h1"><?php the_field('posts_banner_title', $page_for_posts); ?></h3>
            <p class="lead"><?php the_field('posts_banner_text', $page_for_posts); ?></p>
            <a href="<?php the_field('posts_banner_link', $page_for_posts); ?>" rel="bookmark" class="button"><?php esc_html_e('Altri contenuti', 'landhocoworking'); ?></a>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

</article>
