<?php
/*
	Template Name: Single
*/
?>
<?php get_header(); ?>

<?php echo get_template_part('template-parts/breadcrumbs');?>

<?php while( have_posts() ) : the_post();
the_content();
endwhile; ?>


<?php get_footer(); ?>