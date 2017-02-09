    <footer role="contentinfo" class="footer">
      <div class="container">
        <div class="layout__row">

          <div class="footer__logo layout__xs__12 layout__sm__3 layout__md__3 layout__lg__3">
            <h2 class="footer__logo__title h5">
              <a rel="home" href="<?php echo esc_url(home_url('/')); ?>">
                <span class="hidden"><?php bloginfo('name'); ?></span>
                <svg>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                </svg>
              </a>
            </h2>
          </div>

          <?php if (has_nav_menu('footer') || has_nav_menu('social')): ?>
            <nav role="navigation" class="footer__navigation layout__xs__12 layout__sm__4 layout__md__4 layout__lg__4">
              <h2 class="hidden"><?php esc_html_e('Footer menu', 'landhocoworking'); ?></h2>

              <ul class="layout__row layout__row__xs--center layout__row__xs--column">
                <?php wp_nav_menu(array(
                  'theme_location' => 'footer',
                  'items_wrap' => '%3$s',
                  'walker' => new walkerFooterMenu()
                )); ?>
              </ul>
            </nav>
          <?php endif; ?>

          <?php if (get_field('options_phone', option) || get_field('options_email', option) || get_field('options_address', option) || get_field('options_facebook', option) || get_field('options_instagram', option)): ?>
            <div class="footer__social layout__xs__12 layout__sm__5 layout__md__5 layout__lg__5">

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

          <div class="footer__copyright layout__xs__12 layout__sm__12 layout__md__12 layout__lg__12">
            <small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> – <?php bloginfo('description'); ?>.</small>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
