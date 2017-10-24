    <footer id="global-footer">
		<div class="container">
	<div class="col-sm-1"> </div>

	<div class="container col-sm-10 bg-white text-color-grey">

			<div class="col-xs-12">

				<div class="col-sm-3"> </div>

				<div class="col-xs-12 col-sm-4">
					<!-- <div class="h4">Anschrift</div> -->
					<address>
						<h1>
							<div class="h4 text-color-grey"><?php bloginfo('name'); ?></div>
						</h1>
						<ul class="list-unstyled h5">
							<li><div class="note">FSU Jena</div></li>
							<li><div class="note">Fürstengraben 1</div></li>
							<li><div class="zip">07743 Jena</div></li>
							<li><div class="tel">
									<i class="fa fa-phone" aria-hidden="true"> </i><a href="tel:+493641930991"> +49 (0)3641 9-30991</a>
								</div></li>
							<li><div class="fax">
									<i class="fa fa-search-plus" aria-hidden="true"></i> </i><a href="tel:+493641930997"> +49 (0)3641 9-30997 (Fax)</a>
								</div></li>
							<li><div class="email">
									<i class="fa fa-envelope-o"> </i>
									redaktion@akruetzel.de
								</div></li>
						</ul>
					</address>
				</div>

				<div class="col-sm-6"> </div>

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
					<a href="<?php bloginfo('url'); ?>/?page_id=18" title="Kontakt">Kontakt</a> |
					<a href="<?php bloginfo('url'); ?>/?page_id=3649" title="Impressum">Impressum</a> |
					<a href="<?php bloginfo('url'); ?>/?page_id=3649" title="Datenschutz">Datenschutz</a> |
					<a href="<?php echo wp_login_url(); ?>" title="Login">Login</a>
				</div>
				<div class="col-sm-2"> </div>
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
			_paq.push(['setSiteId', 13]);
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
