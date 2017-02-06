<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="pinterest" content="nopin">
    <?php wp_head(); ?>
  </head>
  <body>
    <?php echo file_get_contents(get_template_directory_uri() . '/dist/img/icons.svg'); ?>

    <header role="banner" class="header">
      <div class="container">

        <div class="header__logo">
          <h1 class="header__logo__title h5">
            <a rel="home" href="<?php echo esc_url(home_url('/')); ?>">
              <span class="hidden"><?php bloginfo('name'); ?></span>
              <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
              </svg>
            </a>
          </h1>
        </div>

        <div class="header__menu">
          <button type="button" class="button button--nav">
            <span class="hidden"><?php esc_html_e('Menu', 'landhocoworking'); ?></span>
            <span class="button--nav-bar"></span>
            <span class="button--nav-bar"></span>
            <span class="button--nav-bar"></span>
          </button>
        </div>

        <?php if (get_field('options_phone', option) || get_field('options_contact', option)): ?>
          <div class="header__info">

            <?php if (get_field('options_phone', option)): ?>
              <a href="tel:<?php the_field('options_phone', option); ?>" class="button button--phone">
                <span><?php the_field('options_phone', option); ?></span>
                <svg>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#phone"></use>
                </svg>
              </a>
            <?php endif; ?>

            <?php if (get_field('options_contact', option)): ?>
              <a href="<?php the_field('options_contact', option); ?>" class="button button--contact">
                <span><?php esc_html_e('Prenota', 'landhocoworking'); ?></span>
                <svg>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#email"></use>
                </svg>
              </a>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        
        <?php if (has_nav_menu('header')): ?>
          <nav role="navigation" class="header__navigation">
            <h2 class="hidden"><?php esc_html_e('Header menu', 'landhocoworking'); ?></h2>

            <ul>
              <?php wp_nav_menu(array(
                'theme_location' => 'header',
                'items_wrap' => '%3$s',
                'walker' => new walkerHeaderMenu()
              )); ?>
            </ul>
          </nav>
        <?php endif; ?>

      </div>
    </header>
