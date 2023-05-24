<header class="header" id="header">
	<div class="header__container">
		<a class="header__logo" href="/"> ТКП </a>

		<div class="header__search">
			<?php echo get_search_form();?>
		</div>

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



		<!-- <div class="header__burger">
			<span></span>
			<span></span>
			<span></span>
		</div> -->

	</div>
</header>


