<?php if ( have_rows('header', 'options') ) : ?>
	<?php while( have_rows('header', 'options') ) : the_row(); ?>

		<header class="header" id="header">
			<div class="header__container">
				<a class="header__logo" href="<?php echo pll_home_url();?>"></a>

				<?php
					$headerMenuArgs = array(
						'container' => 'ul',
						'container_class' => '',
						'menu' => 'ul',
						'menu_id' => 'header__menu',
						'menu_class' => 'header__menu',
						'theme_location' => 'header__menu'
					);
					wp_nav_menu($headerMenuArgs);
				?>

				<div class="header__lang">
						<?php echo do_shortcode('[polylang_langswitcher]'); ?>
				</div>

				<?php $btn = get_sub_field('btn');?>
				<a class="header__btn btn" href="<?= $btn['url'];?>"><?= $btn['title'];?></a>

				<div class="header__burger">
					<span></span>
					<span></span>
					<span></span>
				</div>

			</div>
		</header>

	<?php endwhile; ?>
<?php endif; ?>

