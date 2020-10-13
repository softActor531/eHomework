<?php get_header(); ?>
	<section class="title-wrapper">
		<div class="title width cf">
			<p><?php the_title(); ?></p>
		</div>
	</section>

	<section class="content-wrapper">
		<div class="content width cf">

			<div class="left cf">
				<article>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile;?>
				<?php endif; ?>
				</article>
			</div>

			<aside class="right">
				<div class="widgets">
					<?php dynamic_sidebar( 'sidebar' ); ?>
				</div>
			</aside>

		</div>
	</section>

<?php get_footer(); ?>