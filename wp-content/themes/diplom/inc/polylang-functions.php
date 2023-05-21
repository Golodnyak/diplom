<?php

function custom_polylang_langswitcher() {
	$output = '';
	if ( function_exists( 'pll_the_languages' ) ) {
		$args   = [
			'show_flags' => 0,
			'show_names' => 1,
			'echo'       => 0,
		];
		$output = '<ul class="lang-switcher">'.pll_the_languages( $args ). '</ul>';
	}
	return $output;
}
add_shortcode( 'polylang_langswitcher', 'custom_polylang_langswitcher' );

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}


// add_action('init', function() {

// 	pll_register_string('your-name', 'Ваше ім’я');
// 	pll_register_string('phone-number', 'Номер телефону');
// 	pll_register_string('add-file', 'Додати файл');
// 	pll_register_string('add-message', 'Супроводжуючий текст');
// 	pll_register_string('what-to-dl', 'Опишіть, що треба зробити');
// 	pll_register_string('send', 'Відправити');
// 	pll_register_string('more', 'Більше');
// 	pll_register_string('menu', 'Меню');
// 	pll_register_string('services', 'Послуги');
// 	pll_register_string('contacts', 'Контакти');
// 	pll_register_string('short-form', 'Коротка форма');
// 	pll_register_string('full-form', 'Повна форма');

// });