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

    <header role="banner" class="header">
      <h1>
        <a rel="home" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></span></a>
      </h1>

      <?php if (has_nav_menu('header')): ?>
        <nav role="navigation">
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
      
      <div class="header__info">

        <?php if (get_field('options_phone', option)): ?>
          <a href="tel:<?php the_field('options_phone', option); ?>"><?php the_field('options_phone', option); ?></a>
        <?php endif; ?>
        
        <?php if (get_field('options_contact', option)): ?>
          <a href="<?php the_field('options_contact', option); ?>"><?php esc_html_e('Prenota', 'landhocoworking'); ?></a>
        <?php endif; ?>

      </div>

    </header>
