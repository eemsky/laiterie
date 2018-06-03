			<!-- footer -->
			<footer class="footer" role="contentinfo">


						<!-- logo -->
						<div class="container">
							<div class="row displayblock justify-content-between">
								<div class="logo  align-self-center">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/laiterie-white.svg" alt="Logo" class="logo-img-footer">
							</a>

							</div>
							<div class="menu-nav align-self-center">

							<nav class="nav" role="navigation">
								<?php
										wp_nav_menu( array(
											'theme_location' => 'menu-top',
											'menu_id'        => 'primary-menu',
										) );
									?>
							</nav>
							</div>
							<div class="container-social-icons align-self-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="Facebook" class="social-icons">
								<img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="Twitter" class="social-icons">
								<img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="Instagram" class="social-icons">
								<img src="<?php echo get_template_directory_uri(); ?>/img/rss.svg" alt="flux rss" class="social-icons">
							</div>
						</div>
						<!-- /logo -->

						<!-- nav -->

						<!-- /nav -->
					</div>


			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
