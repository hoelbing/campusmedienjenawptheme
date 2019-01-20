<footer id="global-footer">
	<div class="container">

		<div class="footer-info">

			<div class="footer-adress">
				<address>
					<div class="footer-title bloginfo-name">
						<?php bloginfo('name'); ?>
					</div>
					<ul class="list-unstyled">
						<li>
							<div class="note">Ernst-Abbe-Hochschule Jena</div>
						</li>
						<li>
							<div class="note">Carl-Zeiss-Promenade 2</div>
						</li>
						<li>
							<div class="zip">07745 Jena</div>
						</li>
						<li>
							<div class="tel">
								<i class="fa fa-phone" aria-hidden="true"> </i>
								<a href="tel:+493641205796"> +49 (0)3641 205-796</a>
							</div>
						</li>
						<li>
							<div class="email">
								<i class="fa fa-envelope-o" aria-hidden="true"> </i>
								redaktion@campusradio-jena.de
							</div>
						</li>
					</ul>
				</address>
			</div>

			<div class="footer-sponsor">
				<div class="footer-title">Freunde und F&ouml;rderer</div>
				<ul class="list-unstyled text-decoration-none">
					<li></li>
					<li>
						<a href="http://stura.eah-jena.de/" target="_blank" title="EAH-Stura">EAH-Stura</a>
					</li>
					<li>
						<a href="http://www.stura.uni-jena.de/" target="_blank" title="FSU-Stura">UNI-Stura</a>
					</li>
					<li>
						<a href="http://www.radio-okj.de/" target="_blank" title="Radio OKJ">Radio OKJ</a>
					</li>
					<li>
						<a href="http://www.eah-jena.de/" target="_blank" title="EAH-Jena">EAH Jena</a>
					</li>
					<li>
						<a href="https://www.fsr-kowi.de/" target="_blank" title="FSR KoWi Jena">FSR KoWi Jena</a>
					</li>
				</ul>
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
			<a href="<?php bloginfo('url'); ?>/?page_id=31" title="Kontakt">Kontakt</a> |
			<a href="<?php bloginfo('url'); ?>/?page_id=522" title="Impressum">Impressum</a> |
			<a href="<?php bloginfo('url'); ?>/?page_id=12857" title="Datenschutz">Datenschutz</a> |
			<a href="<?php echo wp_login_url(); ?>" title="Login">Login</a>
		</div>

	</div>
</footer>
