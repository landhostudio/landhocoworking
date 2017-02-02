<?php

function cptui_register_my_cpts_piano() {

	$labels = array(
		"name" => __('Piani', ''),
		"singular_name" => __('Piano', ''),
		"all_items" => __('Tutti i piani', ''),
		"add_new" => __('Aggiungi piano', ''),
		"add_new_item" => __('Aggiungi piano', ''),
		"edit_item" => __('Modifica piano', ''),
		"new_item" => __('Nuovo piano', ''),
		"view_item" => __('Visualizza piano', ''),
		"view_items" => __('Visualizza piani', ''),
		"search_items" => __('Cerca piani', ''),
		"not_found" => __('Nessun piano trovato', ''),
		"not_found_in_trash" => __('Nessun piano trovato', ''),
	);

	$args = array(
		"label" => __('Piani', ''),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "page",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array(
      "slug" => "piano",
      "with_front" => false
    ),
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-slides",
		"supports" => array("title"),
	);

	register_post_type('piano', $args);
}

add_action('init', 'cptui_register_my_cpts_piano');
