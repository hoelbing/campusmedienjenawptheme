<footer id="global-footer">
	<div class="container">

		<div class="footer-info">

			<div class="footer-adress-akruetzel">
				<address>
					<div class="footer-title bloginfo-name">
						<?php bloginfo('name'); ?>
					</div>
					<ul class="list-unstyled">
						<li>
							<div class="note">FSU Jena</div>
						</li>
						<li>
							<div class="note">Fürstengraben 1</div>
						</li>
						<li>
							<div class="zip">07743 Jena</div>
						</li>
						<li>
							<div class="tel">
								<i class="fa fa-phone" aria-hidden="true"> </i>
								<a href="tel:+493641930991"> +49 (0)3641 9-30991</a>
							</div>
						</li>
						<li>
							<div class="fax">
								<i class="fa fa-fax" aria-hidden="true"></i> </i>
								<a href="tel:+493641930997"> +49 (0)3641 9-30997 (Fax)</a>
							</div>
						</li>
						<li>
							<div class="email">
								<i class="fa fa-envelope-o" aria-hidden="true"> </i>
								redaktion@akruetzel.de
							</div>
						</li>
					</ul>
				</address>
			</div>

		</div>

		<div class="footer-copyright">
			Copyright &copy;
			<?php echo date("Y") ?>
			<a href="<?php home_url(); ?>" title="Home">
				<?php bloginfo('name'); ?>
			</a>. All rights reserved.
			<?php echo get_template() ?> Theme by
			<a href="http://www.hoelbing.net/" title="Carsten Hoelbing">Carsten H&ouml;lbing</a>
		</div>

		<div class="footer-toIntern">
			<a href="<?php bloginfo('url'); ?>/?page_id=18" title="Kontakt">Kontakt</a> |
			<a href="<?php bloginfo('url'); ?>/?page_id=3649" title="Impressum">Impressum</a> |
			<a href="<?php bloginfo('url'); ?>/?page_id=3649" title="Datenschutz">Datenschutz</a> |
			<a href="<?php echo wp_login_url(); ?>" title="Login">Login</a>
		</div>

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
		(function () {
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
	<noscript>
		<p>
			<img src="https://stats.stura.uni-jena.de/piwik.php?idsite=13" style="border:0;" alt="piwik" title="piwik" />
		</p>
	</noscript>
	<!-- End Piwik Code -->

	<?php wp_footer(); ?>
	</body>

	</html>
