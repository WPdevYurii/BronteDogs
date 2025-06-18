	</main>
	<footer>
		<div class="container">
			<div class="f-wrap">
				<div class="f-wrap__top">
					<div class="f-wrap__logo">
						<?php 
						$logo = get_field('footer_logo', 'options');
						$button_1 = get_field('button_1', 'options');
						$button_2 = get_field('button_2', 'options');
                        if(!empty($logo)): ?>
                            <a href="<?= get_home_url(); ?>">
                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                            </a>
                        <?php endif; ?>
					</div>
					<div class="f-wrap__buttons">
						<div class="buttons">
							<div class="buttons__wrap">
								<?php if(!empty($button_1)): ?>
									<button class="button buttons__green"><?php echo esc_html($button_1['title']); ?></button>
								<?php endif; ?>

								<?php if(!empty($button_2)): ?>
								<button class="button buttons__white"><?php echo esc_html($button_2['title']); ?></button>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<p class="container__copyrights">&copy; 2010 - <?php echo date('Y');
				$copyrights = get_field('footer_copyright', 'options');
				if(!empty($copyrights)):
				echo $copyrights;
				endif; ?>
				</p>
			</div>
			
		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>

	</html>