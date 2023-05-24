
<footer class="footer" id="footer">
	<div class="footer__container">

		<a class="footer__logo lazy" data-bg="<?php echo get_bloginfo('template_directory');?>/img/footer__logo.svg" href="/">ТКП</a>

		<div class="footer__author">
			Автор дипломної роботи: Голодняк Роман Вікторович
		</div>

		<?php
			$footerMenuArgs = array(
				'container' => 'ul',
				'container_class' => '',
				'menu' => 'ul',
				'menu_id' => 'footer__menu',
				'menu_class' => 'footer__menu',
				'theme_location' => 'footer__menu'
			);
			wp_nav_menu($footerMenuArgs);
		?>


	</div>
</footer>


