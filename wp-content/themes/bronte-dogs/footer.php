	</main>
	<footer>
		<div class="container">
			<?php wp_nav_menu(
				[
					'theme_location' => 'footer-menu',
					'container' => '',
					'menu_class' => 'menu menu-footer',
					'depth' => 1,
				]
			); ?>

			<p class="container__copyrights">&copy; 2010 - <?php echo date('Y');
            $copyrights = get_field('footer_copyright', 'options');
        	if(!empty($copyrights)):
            echo $copyrights;
            endif; ?>
			</p>

		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>

	</html>