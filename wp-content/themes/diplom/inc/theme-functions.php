<?php
	// add_theme_support( 'html5', array( 'search-form' ) );

	// Editor Styles
	add_theme_support( 'editor-styles' );
	add_editor_style( '/css/blocks.css' );

	function my_styles(){
		wp_enqueue_style( 'libs', get_template_directory_uri() . '/css/libs.css');
		wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
	}
	add_action( 'wp_enqueue_scripts', 'my_styles' );

	function my_scripts() {
		wp_enqueue_script('jq', get_template_directory_uri() . '/js/jquery.min.js');
		wp_enqueue_script('cookie', get_template_directory_uri() . '/js/cookie.js');
		wp_enqueue_script('jquery.cookie', get_template_directory_uri() . '/js/jquery.cookie.js');
		wp_enqueue_script('validator', get_template_directory_uri() . '/js/validator.js');
		wp_enqueue_script('popup_script', get_template_directory_uri() . '/js/popup_script.js');
		wp_enqueue_script('intlTelInput', get_template_directory_uri() . '/js/intlTelInput.js');
		wp_enqueue_script('lazyload', get_template_directory_uri() . '/js/lazyload.js');
		wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper-bundle.js');
		wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
	}

	function footer_enqueue_scripts(){
		remove_action('wp_head','my_scripts');
		add_action('wp_footer','my_scripts',8);
	}
	add_action('after_setup_theme','footer_enqueue_scripts');


	add_action('after_setup_theme', 'remove_admin_bar');
	function remove_admin_bar() {
		show_admin_bar(false);
	}

	add_theme_support( 'post-thumbnails' );

	function register_my_menus() {
		register_nav_menus(
		array(
			'header__menu' => __( 'header__menu' ),
			'footer__menu' => __( 'footer__menu' ),
			)
		);
	}
	add_action( 'init', 'register_my_menus' );

	function add_additional_class_on_li($classes, $item, $args) {
			if(isset($args->add_li_class)) {
					$classes[] = $args->add_li_class;
			}
			return $classes;
	}
	add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


	add_filter('body_class', 'acme_add_body_class');
	function acme_add_body_class($classes){
		if (!empty(get_post_meta(get_the_ID(), '_wp_page_template', true))) {
				$templateName = basename(get_page_template_slug(get_the_ID()));
				$templateName = str_ireplace('template-', '', basename(get_page_template_slug(get_the_ID()), '.php'));
				$classes[] = $templateName;
		}

		return array_filter($classes);
	}


	function my_acf_block_category( $categories, $post) {
		$my_categories = array(
			array(
				'slug' => 'theme-blocks',
				'title' => 'Theme blocks',
				'icon' => 'schedule',
			)
		);
		$categories = array_merge($my_categories, $categories);
		return $categories;
	}
	add_filter('block_categories_all', 'my_acf_block_category', 10, 2);

/**
 * Отключение редактора gutenberg для шаблонов
 */
// add_filter( 'use_block_editor_for_post_type', 'remove_gutenberg_for_page_templat', 25 );
// function remove_gutenberg_for_page_templat($can_edit) {
// 		if( empty( $_GET[ 'post' ] ) ) {
// 				return $can_edit;
// 		}
// 		// list op templates without guttenberg
// 		$excluded_templates = array(
// 				'page-main.php'
// 		);
// 		$template = get_page_template_slug( intval( $_GET[ 'post' ] ) );
// 		if( in_array( $template, $excluded_templates ) ) {
// 				$can_edit = false;
// 		}
// 		return $can_edit;
// }

/**
 * Disable gutenberg editor for cuctom post type
 */
// add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
// function prefix_disable_gutenberg($current_status, $post_type)
// {
// 		// Use your post type key instead of 'product'
// 		if ($post_type === 'custom_post_type') return false;
// 		return $current_status;
// }


/**
 * add options page without polylang
 */
// if( function_exists('acf_add_options_page') ) {
// 	acf_add_options_page();
// }
