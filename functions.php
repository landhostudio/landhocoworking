<?php

  if (!function_exists('landhostarter_setup')) {

    function landhostarter_setup() {
      
      // Let WordPress manage the document title -------------------------------
			
      add_theme_support('title-tag');

			// Enable support for Post Thumbnails on posts and pages -----------------
			
      add_theme_support('post-thumbnails');

			// Enables dynamic navigation --------------------------------------------

      register_nav_menus( array(
				'menu' => 'Menu'
			));

      // Load the assets -------------------------------------------------------
			
			function init_assets() {

        wp_enqueue_style('all-css', get_template_directory_uri() . '/dist/css/all.css', true, '1.0', false);

        wp_register_script('all-js', get_template_directory_uri() . '/dist/js/all.js', array(), '1.0', true);
        wp_enqueue_script('all-js');

			}
			add_action('wp_enqueue_scripts', 'init_assets');
      
      // Content Width ---------------------------------------------------------
      
      if (!isset($content_width)) $content_width = 1280;

      // Soil ------------------------------------------------------------------
      
      get_template_part('inc/soil');
      
    }

  }
  add_action('after_setup_theme', 'landhostarter_setup');
