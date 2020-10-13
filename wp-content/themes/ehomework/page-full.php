<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>
	<section class="title-wrapper">
		<div class="title width cf">
			<p><?php the_title(); ?></p>
		</div>
	</section>

	<section class="content-wrapper">
		<div class="content full width cf">
			<article class="cf">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile;?>
				<?php endif; ?>
			</article>
	</section>

<?php get_footer(); ?>