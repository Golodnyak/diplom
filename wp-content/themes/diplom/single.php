<?php
/*
	Template Name: Single
*/
?>
<?php get_header(); ?>

<?php echo get_template_part('template-parts/breadcrumbs');?>

<section class="post">
	<div class="post__container">
		<div class="post__content">
			<?php while( have_posts() ) : the_post();
			the_content();
			endwhile; ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>