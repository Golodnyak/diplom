<section id="breadcrumbs" class="breadcrumbs">
	<div class="container breadcrumbs__container">
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p>','</p>' );
			}
		?>
	</div>
</section>