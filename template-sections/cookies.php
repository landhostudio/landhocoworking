<?php if (get_field('options_cookies_text', option) || get_field('options_cookies_link', option)): ?>
  <div class="cookies">
    <div class="container">
      <div class="layout__row">
        
        <div class="layout__xs__12 layout__sm__8 layout__md__8 layout__lg__8">
          <p class="small"><?php the_field('options_cookies_text', option); ?></p>
        </div>
        
        <div class="layout__xs__12 layout__sm__4 layout__md__4 layout__lg__4">
          <a href="<?php the_field('options_cookies_link', option); ?>" class="button"><?php esc_html_e('Approfondisci', 'landhocoworking'); ?></a>
          <button type="button" class="button button--inverted button--accept"><?php esc_html_e('Accetta', 'landhocoworking'); ?></button>
        </div>

      </div>
    </div>
  </div>
<?php endif; ?>
