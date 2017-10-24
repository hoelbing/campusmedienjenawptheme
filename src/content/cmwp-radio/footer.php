<footer id="global-footer">
	<div class="container">

	 <div class="container col-sm-10 col-sm-offset-1 bg-white text-color-grey">
	   <div class="row">
			<div class="col-xs-12">

				<div class="col-xs-12 col-sm-4 col-sm-offset-3">
					<!-- <div class="h4">Anschrift</div> -->
					<address>
						<h1><div class="h4 text-color-grey"><?php bloginfo('name'); ?></div></h1>
						<ul class="list-unstyled h5">
							<li><div class="note">Ernst-Abbe-Hochschule Jena</div></li>
							<li><div class="note">Carl-Zeiss-Promenade 2</div></li>
							<li><div class="zip">07745 Jena</div></li>
							<li><div class="tel">
									<i class="fa fa-phone" aria-hidden="true"> </i><a href="tel:+493641205796"> +49 (0)3641 205-796</a>
								</div></li>
							<li><div class="email">
									<i class="fa fa-envelope-o" aria-hidden="true"> </i>
									redaktion@campusradio-jena.de
								</div></li>
						</ul>
					</address>
				</div>

				<div class="col-xs-12 col-sm-4">
					<div class="footer-header text-color-grey">Freunde und F&ouml;rderer</div>
	         <?php
            wp_nav_menu ( array (
              'menu'              => 'footer-menu',
              'theme_location'    => 'footer-menu',
              'depth'             => 2,
              'container'         => false,//'div',
              'container_class'   => 'ul',
              'container_id'      => 'footer-menu',
              'menu_class'        => 'li',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker(),
            ) );
          ?>
					<ul class="list-unstyled h5 text-decoration-none">
						<li></li>
						<li><a href="http://stura.eah-jena.de/" target="_blank" title="EAH-Stura">EAH-Stura</a></li>
						<li><a href="http://www.stura.uni-jena.de/" target="_blank" title="FSU-Stura">UNI-Stura</a></li>
						<li><a href="http://www.radio-okj.de/" target="_blank" title="Radio OKJ">Radio OKJ</a></li>
						<li><a href="http://www.eah-jena.de/" target="_blank" title="EAH-Jena">EAH Jena</a></li>
						<li><a href="https://www.fsr-kowi.de/" target="_blank" title="FSR KoWi Jena">FSR KoWi Jena</a></li>
					</ul>
				</div>

				<div class="col-sm-2"> </div>

			</div>

			<div class="col-xs-12 row">
				<div class="col-xs-2"> </div>
					<ul class="list-unstyled col-sm-8 h6">
						<li class="center-block">Copyright &copy; <?php echo date("Y") ?> <a href="<?php home_url(); ?>" title="Home"><?php bloginfo('name'); ?></a>. All rights reserved.
							<?php echo get_template() ?> Theme by <a href="http://www.hoelbing.net/" title="Carsten Hoelbing">Carsten H&ouml;lbing</a>
						</li>
					</ul>
					<div class="col-xs-2"> </div>
			</div>

			<div class="col-sm-12 row">
				<div class="col-sm-4"> </div>
				<div class="col-xs-12 col-sm-6 h5 center-block">
					<a href="<?php bloginfo('url'); ?>/?page_id=31" title="Kontakt">Kontakt</a> |
					<a href="<?php bloginfo('url'); ?>/?page_id=522" title="Impressum">Impressum</a> |
					<a href="<?php bloginfo('url'); ?>/?page_id=12857" title="Datenschutz">Datenschutz</a> |
					<a href="<?php echo wp_login_url(); ?>" title="Login">Login</a>
				</div>
				<div class="col-sm-2"> </div>
			</div>

		</div>
  </div>
	<div class="col-sm-1"> </div>

		</div>
	</footer>

	<?php
	/**
	 * Code from Piwik
	 * (Hardcode)
	 */
	 ?>

	<!-- Piwik -->
	<script type="text/javascript">
		var _paq = _paq || [];
		_paq.push(["setDoNotTrack", true]);
		_paq.push(['trackPageView']);
		_paq.push(['enableLinkTracking']);
		(function() {
			var u = "//stats.stura.uni-jena.de/";
			_paq.push(['setTrackerUrl', u + 'piwik.php']);
			_paq.push(['setSiteId', 12]);
			var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
			g.type = 'text/javascript';
			g.async = true;
			g.defer = true;
			g.src = u + 'piwik.js';
			s.parentNode.insertBefore(g, s);
		})();
	</script>
	<noscript><p><img src="https://stats.stura.uni-jena.de/piwik.php?idsite=12" style="border:0;" alt="piwik" title="piwik"/></p></noscript>
	<!-- End Piwik Code -->

	<?php wp_footer(); ?>
  </body>
</html>
