<?php

  if (!function_exists('landhocoworking_setup')) {

    function landhocoworking_setup() {
      
      // Let WordPress manage the document title -------------------------------
			
      add_theme_support('title-tag');

			// Enable support for Post Thumbnails on posts and pages -----------------
			
      add_theme_support('post-thumbnails');
      add_image_size('thumbnail-large', 960, 960, true);

			// Enables dynamic navigation --------------------------------------------

      register_nav_menus( array(
				'header' => 'Header',
        'footer' => 'Footer',
        'social' => 'Social'
			));

      // Load the assets -------------------------------------------------------
			
			function init_assets() {
        wp_enqueue_style('all-css', get_template_directory_uri() . '/dist/css/all.css', array(), '1.0.0');
        
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/dist/js/jquery.js', array(), '3.1.1');
        
        wp_enqueue_script('plugins', get_template_directory_uri() . '/dist/js/plugins.js', array('jquery'), '1.0.0', true);

        if (is_page_template('template-pages/contact.php')) {
      		wp_enqueue_script('google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBsLJ9ehLPiECFfRDQtgtOh51GDlqXKAGE', array(), '1.0.0', true);
      	}

        wp_enqueue_script('scripts', get_template_directory_uri() . '/dist/js/scripts.js', array('jquery'), '1.0.0', true);
			}
			add_action('wp_enqueue_scripts', 'init_assets');
      
      // Content Width ---------------------------------------------------------
      
      if (!isset($content_width)) $content_width = 1280;

      // SVG support -----------------------------------------------------------

      function svg_upload($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
      }
      add_filter('upload_mimes', 'svg_upload');

      // Soil ------------------------------------------------------------------
      
      get_template_part('inc/soil');
      
      // Menu walker -----------------------------------------------------------
      
      get_template_part('inc/menu');
      
      // Custom Post Types -----------------------------------------------------

      get_template_part('inc/plans');

      // Remove Gravity Forms Add button ---------------------------------------
      
      add_filter('gform_display_add_form_button', function() { return false; });

      // ACF -------------------------------------------------------------------

      if (function_exists('acf_add_options_page')) {

        acf_add_options_page(array(
      		'page_title' 	=> 'Opzioni',
      		'menu_title'	=> 'Opzioni',
      		'menu_slug' 	=> 'theme-options'
      	));
        
      }

      get_template_part('inc/acf-gravity-forms/acf-gravity_forms');
      get_template_part('inc/acf');
      
    }

  }
  add_action('after_setup_theme', 'landhocoworking_setup');
