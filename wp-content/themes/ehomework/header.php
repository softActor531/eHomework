<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/imgs/favicon.png" type="image/x-icon">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript">
	<![endif]-->
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class( $class ); ?>>
	
	<header>
		<div class="header width cf">
			<div class="logo">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" alt="logo"></a>
			</div>
			<div class="slogan">
				<p>All Subject / Original / Expert<br>
				<span>Essay Writing</span></p>
			</div>
			<div class="contactContainer cf">
				<div class="contactText">
					<p>Email Us: <a href="mailto:info@ehomework.ca">info@ehomework.ca</a><br>
						Call or Text Us: <a href="tel:9058088551">(905) 808-8551</a></p>
				</div>
				<div class="smList">
					<ul class="cf">
						<li><a class="tw" href="https://twitter.com/ehomework" target="_blank"></a></li>
						<li><a class="fb" href="https://www.facebook.com/buyURessay" target="_blank"></a></li>
						<li><a class="skype" href="mailto:info@ehomework.ca" target="_blank">Email <span>Us</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<div class="nav-wrapper">
		<nav class="width cf">	
			<a class="mobileMenuToggle" href="#">Menu +</a>
			<?php

				$args = array(
					'theme_location'  => 'primary',
					'menu' => 'main-menu',
					'menu_class' => 'menu',
					'container' => false
				);
	
				wp_nav_menu( $args );
	
			?>
		</nav>
		<div class="mobileMenu">
				<?php

					$args = array(
						'theme_location'  => 'primary',
						'menu' => 'main-menu',
						'menu_class' => 'menu',
						'container' => false
					);
		
					wp_nav_menu( $args );
		
				?>
			</div>
	</div>
