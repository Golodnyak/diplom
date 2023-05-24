<?php get_header(); ?>

<?php echo get_template_part('template-parts/breadcrumbs');?>

<?php $s=get_search_query();?>

<section id="search-results" class="theme search-results">
	<div class="theme__container container">
		<h2 class="theme__title search-results__title">
			Результати пошуку за запитом: <?=$s;?>
		</h2>
		<div class="theme__items">
			<?php

				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					's' =>$s,
					'order' => 'DESC',
					'orderby' => 'date',
					'posts_per_page' => 8,
					'paged' => $paged,
				);
				$the_query = new WP_Query( $args );
			?>
			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="item">

					<div class="item__tags">
						<?php
							$post_tags = get_the_tags();
						?>
						<?php if($post_tags):?>
							<?php foreach ($post_tags as $tag):?>
								<?php
									$link = get_tag_link($tag->term_id);
									$name = $tag->name;
									$slug = $tag->slug;
								?>
								<a class="item__tag item__tag--<?=$slug;?>" href="<?=$link;?>"><?=$name?></a>
							<?php endforeach; ?>
						<?php endif;?>

					</div>

					<div class="item__content">
						<h4 class="item__title" >
							<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
						</h4>
						<!-- <div class="item__excerpt"><?php // the_excerpt();?></div> -->
					</div>


				</div>
			<?php endwhile; else: ?>
			<?php endif; ?>
			<?php wp_reset_postdata();?>

		</div>
	</div>
</section>



<?php get_footer(); ?>