	<footer>
		<div class="footer width cf">
			<div class="footerMenu cf">
				<?php
		
						$args = array(
							'theme_location'  => 'footer',
							'menu' => 'footer-menu',
							'menu_class' => 'footer-nav',
							'container' => false
						);
			
						wp_nav_menu( $args );
			
					?>
			</div>
			<div class="copyright cf">
				<p>Copyright &copy; eHomework All Rights Reserved</p>
				<p class="shout-out"> Designed by <a href="http://mcmillanfreelance.ca" target="_blank">McMillan Freelance</a></p>
			</div>

		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>