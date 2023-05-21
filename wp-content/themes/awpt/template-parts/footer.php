<?php if ( have_rows('footer', 'options') ) : ?>
	<?php while( have_rows('footer', 'options') ) : the_row(); ?>

		<footer class="footer" id="footer">
			<div class="footer__container">

				<a class="footer__logo lazy" data-bg="<?php echo get_bloginfo('template_directory');?>/img/footer__logo.svg" href="<?php echo pll_home_url();?>"></a>

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

	<?php endwhile; ?>
<?php endif; ?>

