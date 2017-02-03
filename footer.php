    <footer role="contentinfo" class="footer">
      
      <h2>
        <a rel="home" href="<?php echo esc_url(home_url('/')); ?>">
          <span class="hidden"><?php bloginfo('name'); ?></span>
          <svg>
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
          </svg>
        </a>
      </h2>
      
      <?php if (has_nav_menu('footer') || has_nav_menu('social')): ?>
        <nav role="navigation">
          <h2 class="hidden"><?php esc_html_e('Footer menu', 'landhocoworking'); ?></h2>

          <ul>
            <?php wp_nav_menu(array(
              'theme_location' => 'footer',
              'items_wrap' => '%3$s',
              'walker' => new walkerFooterMenu()
            )); ?>
          </ul>
        </nav>
      <?php endif; ?>
      
      <?php if (get_field('options_phone', option) || get_field('options_email', option) || get_field('options_address', option) || get_field('options_facebook', option) || get_field('options_instagram', option)): ?>
        <div class="footer__social">

          <?php if (get_field('options_phone', option)): ?>
            <a href="tel:<?php the_field('options_phone', option); ?>">
              <span class="hidden"><?php esc_html_e('Telefono', 'landhocoworking'); ?></span>
              <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#phone"></use>
              </svg>
            </a>
          <?php endif; ?>

          <?php if (get_field('options_email', option)): ?>
            <a href="mailto:<?php the_field('options_email', option); ?>">
              <span class="hidden"><?php esc_html_e('Email', 'landhocoworking'); ?></span>
              <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#email"></use>
              </svg>
            </a>
          <?php endif; ?>

          <?php if (get_field('options_address', option)): ?>
            <a href="http://maps.google.com/maps?q=<?php the_field('options_address', option); ?>" target="_blank" rel="nofollow">
              <span class="hidden"><?php esc_html_e('Indirizzo', 'landhocoworking'); ?></span>
              <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#location"></use>
              </svg>
            </a>
          <?php endif; ?>

          <?php if (get_field('options_facebook', option)): ?>
            <a href="<?php the_field('options_facebook', option); ?>" target="_blank" rel="nofollow">
              <span class="hidden"><?php esc_html_e('Facebook', 'landhocoworking'); ?></span>
              <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use>
              </svg>
            </a>
          <?php endif; ?>

          <?php if (get_field('options_instagram', option)): ?>
            <a href="<?php the_field('options_instagram', option); ?>" target="_blank" rel="nofollow">
              <span class="hidden"><?php esc_html_e('Instagram', 'landhocoworking'); ?></span>
              <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#instagram"></use>
              </svg>
            </a>
          <?php endif; ?>

        </div>
      <?php endif; ?>
      
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> – <?php bloginfo('description'); ?>.</p>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
