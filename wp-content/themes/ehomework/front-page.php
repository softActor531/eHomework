<?php get_header(); ?>		

	<section class="banner-wrapper">
		<div class="banner width cf">
			<a data-fresco-options=" width: 560, height: 315, youtube: { autoplay: 1, portrait: 0 } " class="fresco video" href="https://www.youtube.com/watch?v=v-easeCG9Ys"><span class="icon-play"></span></a>
			<div class="banner-content">
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/10off.png" alt="$10 off">
				<?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form 1"]' ); ?>
			</div>
		</div>
	</section>

	<section class="home-content-wrapper">
		<div class="home-content width cf">
			<h1><?php the_field('main_headline'); ?></h1>
		</div>
	</section>

	<section class="content-wrapper">
		<div class="content width cf">

			<div class="left cf">
				<article>
					<div class="cf">
						<div class="block-left checklist">
							<?php the_field('block_column_1'); ?>
						</div>
						<div class="block-right checklist">
							<?php the_field('block_column_2'); ?>
						</div>
					</div>
<!-- 					<hr> -->
					<?php the_field('content_block_2'); ?>
				</article>
			</div>

			<aside class="right">
				<div class="widgets">
					<?php dynamic_sidebar( 'home' ); ?>
				</div>
			</aside>

		</div>
	</section>


<?php get_footer(); ?>