<?php get_header(); ?>

<?php echo get_template_part('template-parts/breadcrumbs');?>

<section class="news9" id="news9">
	<div class="news9__container container">
		<h2 class="news9__title wow animate__fadeInDown"><?php echo single_tag_title();?></h2>

				<div class="news9__tags wow animate__fadeInDown">

					<h4 class="news9__tags_title"></h4>

					<?php
						$tags = get_tags();
						$html = '<div class="news9__tags_list">';

						foreach ( $tags as $tag ) {
							$tag_link = get_tag_link( $tag->term_id );

							$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='tag btn yellow'>";
							$html .= "{$tag->name}</a>";
						}

						$html .= '</div>';

						echo $html;
					?>

				</div>

		<div class="news9__items">
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$tag = get_queried_object();
				$tagSlug = $tag->slug;
				$args = array(
					'paged' => $paged,
					'orderby' => 'ASC',
					'post_type' => 'post',
					'orderby' => 'date',
					'tag'=> $tagSlug,
					'posts_per_page' => 9
				);
				$the_query = new WP_Query( $args );
			?>
			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<div class="item wow animate__fadeInUp" data-wow-delay="0.1s">
					<a class="item__image lazy" href="<?php the_permalink();?>" data-bg="<?php the_post_thumbnail_url('medium');?>"></a>
					<div class="item__content">
						<h4 class="item__date">
							<b><?php echo get_the_date('d');?></b> <?php echo get_the_date('m.Y');?>
						</h4>
						<h4 class="item__title">
							<a href="<?php the_permalink();?>"><?php the_title();?></a>
						</h4>
					</div>
				</div>

			<?php endwhile; else: ?>
			<?php endif; ?>

			<nav class="pagination">
				<?php
					$big = 999999999;
					echo paginate_links( array(
							'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $the_query->max_num_pages,
							'prev_text' => '&laquo;',
							'next_text' => '&raquo;'
					) );
				?>
			</nav>
			<?php wp_reset_postdata();?>
		</div>
	</div>
</section>

<?php if ( have_rows('tag-page', pll_current_language('slug')) ) : ?>
	<?php while( have_rows('tag-page', pll_current_language('slug')) ) : the_row(); ?>

		<?php if ( have_rows('cta3') ) : ?>
			<?php while( have_rows('cta3') ) : the_row(); ?>

				<?php
					$title = get_sub_field('title');
					$btn = get_sub_field('btn');
					$image = get_sub_field('image');
				?>

				<section class="cta3" id="cta3">
					<div class="cta3__container container">
						<div class="cta3__image wow animate__fadeInLeft lazy" data-bg="<?php echo $image['url'];?>"></div>
						<div class="cta3__content wow animate__fadeInRight">
							<h3 class="cta3__title"><?php echo $title;?></h3>
							<?php if($btn):?>
								<a class="cta3__btn btn yellow" href="<?php echo $btn['url'];?>"><?php echo $btn['title'];?></a>
							<?php endif;?>
						</div>
					</div>
				</section>

			<?php endwhile; ?>
		<?php endif; ?>


		<?php if ( have_rows('contacts') ) : ?>
			<?php while( have_rows('contacts') ) : the_row(); ?>

				<?php

					$title = get_sub_field('title');
					$phones = get_sub_field('phones');
					$email = get_sub_field('email');
					$adress = get_sub_field('adress');
					$btn = get_sub_field('btn');

				?>

				<section class="contacts" id="contacts">
					<iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAMxtlMTR2crijMquZnwGtG-jFUV3jtWcU &amp;q=Space+Needle,Seattle+WA"></iframe>
					<div class="contacts__container container">
						<div class="contacts__content wow animate__fadeInUp">
							<h2 class="contacts__title"><?php echo $title;?></h2>
							<div class="contacts__phones">
								<?php echo $phones;?>
							</div>
							<a class="contacts__email" href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
							<div class="contacts__adress">
								<?php echo $adress;?>
							</div>
							<a class="contacts__btn btn black" href="<?php echo $btn['url'];?>"><?php echo $btn['title'];?></a>
						</div>
					</div>
				</section>

			<?php endwhile; ?>
		<?php endif; ?>


		<section class="google-reviews" id="google-reviews">
			<div class="google-reviews__container container">
				<div class="google-reviews__logos wow animate__fadeInUp">
					<div class="logo google lazy" data-bg="<?php echo get_bloginfo('template_directory');?>/img/google.png"></div>
					<div class="logo google-partner lazy" data-bg="<?php echo get_bloginfo('template_directory');?>img/google-partner.png"></div>
				</div>
				<div class="google-reviews__items">
					<div class="item wow animate__slideInRight">
						<div class="item__review">
							<div class="item__review_raiting lazy" data-bg="img/stars.svg"></div>
							<div class="item__review_text wpe">
								<p>Работаем с ребятами долго и плодотворно – мастера своего дела, в общении исключительно деловой тон как и деловая хватка при решении любых задач.</p>
								<br>
								<p>Сказать что тут профи - ничего не сказать. Спасибо имм за люксовую поддержку и разработку!</p>
							</div>
						</div>
						<div class="item__author">
							<div class="item__author_photo lazy" data-bg="img/rev.png"></div>
							<h4 class="item__author_name">Иван Киржнер</h4>
						</div>
					</div>
					<div class="item wow animate__slideInRight">
						<div class="item__review">
							<div class="item__review_raiting lazy" data-bg="img/stars.svg"></div>
							<div class="item__review_text wpe">
								<p>Очень круто разработали сайт и настроили рекламу в Google Ads. Рекомендую!</p>
							</div>
						</div>
						<div class="item__author">
							<div class="item__author_photo lazy" data-bg="img/rev.png"></div>
							<h4 class="item__author_name">Иван Киржнер</h4>
						</div>
					</div>
					<div class="item wow animate__slideInRight">
						<div class="item__review">
							<div class="item__review_raiting lazy" data-bg="img/stars.svg"></div>
							<div class="item__review_text wpe">
								<p>Работаем с ребятами долго и плодотворно – мастера своего дела, в общении исключительно деловой тон как и деловая хватка при решении любых задач.</p>
								<br>
								<p>Сказать что тут профи - ничего не сказать. Спасибо имм за люксовую поддержку и разработку!</p>
							</div>
						</div>
						<div class="item__author">
							<div class="item__author_photo lazy" data-bg="img/rev.png"></div>
							<h4 class="item__author_name">Иван Киржнер</h4>
						</div>
					</div>
					<div class="item wow animate__slideInRight">
						<div class="item__review">
							<div class="item__review_raiting lazy" data-bg="img/stars.svg"></div>
							<div class="item__review_text wpe">
								<p>Работаем с ребятами долго и плодотворно – мастера своего дела, в общении исключительно деловой тон как и деловая хватка при решении любых задач.</p>
								<br>
								<p>Сказать что тут профи - ничего не сказать. Спасибо имм за люксовую поддержку и разработку!</p>
							</div>
						</div>
						<div class="item__author">
							<div class="item__author_photo lazy" data-bg="img/rev.png"></div>
							<h4 class="item__author_name">Иван Киржнер</h4>
						</div>
					</div>
				</div>
			</div>
		</section>


	<?php endwhile; ?>
<?php endif; ?>






<?php get_footer(); ?>