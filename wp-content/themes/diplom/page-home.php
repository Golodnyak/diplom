<?php
/*
	Template Name: HOME
*/
?>

<?php get_header(); ?>

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