<?php

	/**
	 * Example Block Template.
	 *
	 * @param   array $block The block settings and attributes.
	 * @param   string $content The block inner HTML (empty).
	 * @param   bool $is_preview True during backend preview render.
	 * @param   int $post_id The post ID the block is rendering content against.
	 *          This is either the post ID currently being displayed inside a query loop,
	 *          or the post ID of the post hosting this block.
	 * @param   array $context The context provided to the block by the post or it's parent block.
	 */

	// $background_color = $block['backgroundColor'];
	// $text_color = $block['textColor'];

	$id = 'example-' . $block['id'];
	if( !empty($block['anchor']) ) {
			$id = $block['anchor'];
	}

	$class_name = 'example';
	if ( ! empty( $block['className'] ) ) {
			$class_name .= ' ' . $block['className'];
	}

	// Build a valid style attribute for background and text colors.
	// $styles = array( 'background-color: ' . $background_color, 'color: ' . $text_color );
	// $style  = implode( '; ', $styles );

	// show preview image in admin panel for block
	global $pagenow;
	$preview_image = get_template_directory_uri(  ) . "/blocks/example/preview.png";
	if ($pagenow == 'admin-ajax.php') {
		echo '<img src="' . $preview_image .'" style="width: 100%;height: 100%;">';
	}

	// ACF FIELDS

	$title = get_field('title');
	$text = get_field('text');
	$image = get_field('image');

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr( $class_name ); ?>" >
	<div class="example__container">
		<?php if($title):?>
			<p class="example__title"><?=$title?></p>
		<?php endif;?>
		<?php if($text):?>
			<div class="example__text"><?=$text?></div>
		<?php endif;?>
		<?php if($image):?>
			<div class="example__image" style="background-image: url(<?=$image['url'];?>);"></div>
		<?php endif;?>
	</div>
</section>

