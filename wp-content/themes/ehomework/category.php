<?php get_header(); ?>

	<section class="title-wrapper">
		<div class="title width cf">

			<?php if( is_category() ) { ?><p>Category: <?php single_cat_title(); ?></p><?php } ?>
		</div>
	</section>

	<section class="content-wrapper">
		<div class="content width-offset cf">

			<div class="left cf">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article class="post">
						<a class="featured-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<time><?php the_time('M jS, Y'); ?></time>
						<?php the_excerpt(); ?>
						<a class="read-more" href="<?php the_permalink(); ?>">Read More &raquo;</a>
					</article>
				<?php endwhile; else:?>
				<p>Sorry, no articles were found.</p>
				<?php endif; ?>

				<div class="pagination">
					<?php wp_pagenavi(); ?>
				</div>
			</div>

			<aside class="right">
				<div class="widgets">
					<?php dynamic_sidebar( 'sidebar' ); ?>
				</div>
			</aside>

		</div>
	</section>

<?php get_footer(); ?>