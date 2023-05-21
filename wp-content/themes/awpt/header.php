<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<?php wp_head();?>
		<script src="<?php echo get_bloginfo('template_directory');?>/js/modernizr-custom.js"></script>
	</head>
	<body <?php body_class(); ?> >

		<div class="wrapper">

			<?php echo get_template_part('template-parts/header');?>
