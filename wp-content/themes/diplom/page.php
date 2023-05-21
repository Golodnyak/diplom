<?php get_header(); ?>

<?php
	if(!is_front_page()){
		echo get_template_part('template-parts/breadcrumbs');
	}
?>


<section id="single-page-wrap" class="single-page__wrap">
	<div class="single-page__container container">
		<div class="single-page__content">
			<?php while( have_posts() ) : the_post();
				the_content();
				endwhile;
			?>
		</div>
	</div>
</section>


<?php get_footer(); ?>