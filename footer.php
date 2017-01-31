    <footer role="contentinfo" class="footer">
      
      <h1>
        <a rel="home" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></span></a>
      </h1>
      
      <?php if (has_nav_menu('footer') || has_nav_menu('social')): ?>
        <nav role="navigation">
          <h2 class="hidden"><?php esc_html_e('Footer menu', 'landhocoworking'); ?></h2>

          <ul>
            <?php wp_nav_menu(array(
              'theme_location' => 'footer',
              'items_wrap' => '%3$s'
            )); ?>
          </ul>
        </nav>
      <?php endif; ?>
      
      <?php if (get_field('options_phone', option) || get_field('options_email', option) || get_field('options_address', option) || get_field('options_facebook', option) || get_field('options_instagram', option)): ?>
        <div class="footer__social">

          <?php if (get_field('options_phone', option)): ?>
            <a href="tel:<?php the_field('options_phone', option); ?>">
              <span><?php esc_html_e('Telefono', 'landhocoworking'); ?></span>
            </a>
          <?php endif; ?>

          <?php if (get_field('options_email', option)): ?>
            <a href="mailto:<?php the_field('options_email', option); ?>">
              <span><?php esc_html_e('Email', 'landhocoworking'); ?></span>
            </a>
          <?php endif; ?>

          <?php if (get_field('options_address', option)): ?>
            <a href="http://maps.google.com/maps?q=<?php the_field('options_address', option); ?>" target="_blank" rel="nofollow">
              <span><?php esc_html_e('Indirizzo', 'landhocoworking'); ?></span>
            </a>
          <?php endif; ?>

          <?php if (get_field('options_facebook', option)): ?>
            <a href="<?php the_field('options_facebook', option); ?>" target="_blank" rel="nofollow">
              <span><?php esc_html_e('Facebook', 'landhocoworking'); ?></span>
            </a>
          <?php endif; ?>

          <?php if (get_field('options_instagram', option)): ?>
            <a href="<?php the_field('options_instagram', option); ?>" target="_blank" rel="nofollow">
              <span><?php esc_html_e('Instagram', 'landhocoworking'); ?></span>
            </a>
          <?php endif; ?>

        </div>
      <?php endif; ?>
      
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> – <?php bloginfo('description'); ?>.</p>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
