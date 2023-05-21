<?php

add_filter( 'should_load_separate_core_block_assets', '__return_true' );

add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {

	register_block_type( get_template_directory() . '/blocks/example' );

}

?>