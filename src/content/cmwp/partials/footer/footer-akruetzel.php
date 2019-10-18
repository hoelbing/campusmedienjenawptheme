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
								<a href="tel:+4936419400975"> +49 (0)3641 9-400 975</a>
							</div>
						</li>
<!--						<li>
							<div class="fax">
								<i class="fa fa-fax" aria-hidden="true"></i> </i>
								<a href="tel:+493641930997"> +49 (0)3641 9-30997 (Fax)</a>
							</div>
						</li> -->
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
			<a href="<?php bloginfo('url'); ?>/contact" title="Kontakt">Kontakt</a> |
			<a href="<?php bloginfo('url'); ?>/impressum" title="Impressum">Impressum</a> |
			<a href="<?php bloginfo('url'); ?>/datenschutz" title="Datenschutz">Datenschutz</a> |
			<a href="<?php echo wp_login_url(); ?>" title="Login">Login</a>
		</div>

	</div>
</footer>
