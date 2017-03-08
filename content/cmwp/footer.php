    <footer id="global-footer">
		<div class="container">
			<section class="breadcrumbs">
				<section class="breadcrumbs-column">
					<?php the_breadcrumb(); ?>
				</section>
			</section>

			<!-- HOTLINKS -->
			<section class="hotlinks">
				<section class="hotlinks-column">
					<p class="hotlink-blog"><?php echo get_blog_details(6) -> blogname ?></p>

					<?php
						global $switched;
						switch_to_blog(6);
						wp_nav_menu( array('container_class' => 'menu-footer footer-cm', 'theme_location' => 'third') );
						restore_current_blog();
					?>
				</section>
				<section class="hotlinks-column">
					<p class="hotlink-blog"><?php echo get_blog_details(5) -> blogname ?></p>

					<?php
						switch_to_blog(5);
						wp_nav_menu( array('container_class' => 'menu-footer footer-cr', 'theme_location' => 'fourth') );
						restore_current_blog();
					?>
				</section>
				<section class="hotlinks-column">
					<p class="hotlink-blog"><?php echo get_blog_details(2) -> blogname ?></p>

					<?php
						switch_to_blog(2);
						wp_nav_menu( array('container_class' => 'menu-footer footer-ak', 'theme_location' => 'fifth') );
						restore_current_blog();
					?>
				</section>
				<section class="hotlinks-column">
					<p class="hotlink-blog"><?php echo get_blog_details(4) -> blogname ?></p>

					<?php
						switch_to_blog(4);
						wp_nav_menu( array('container_class' => 'menu-footer footer-ctv', 'theme_location' => 'sixth') );
						restore_current_blog();
					?>
				</section>
			</section>

			<!-- PRIMARY PARTNER -->
<!--
			<section class="primary-partner">
				<section class="primary-partner-column">
					Primary Partner
				</section>
			</section>
-->

			<!-- SECONDARY PARTNER -->
			<section class="secondary-partner">
				<section class="secondary-partner-column">
					<h4>Partner</h4>
					<?php
						// switch to root blog
						//switch_to_blog(1);

						$pq = new WP_Query(array(
							'post_type' 	=> 'secondarypartner'//,
							//'showposts' 	=> '1',
						  	//'meta_key'	=> 'aktuelle_ausgabe',
							//'meta_value'	=> 1
							));

						if( $pq->have_posts() ) : ?>
						<ul class="secondarypartner-list">
							<?php while($pq->have_posts()) : $pq->the_post(); ?>
								<li>
									<a href="<?php the_field('partnerwebsite'); ?>" target="_blank">
										<?php the_title(); ?>

	<!--									<?php the_post_thumbnail();?>-->
									</a>
								</li>
							<?php wp_reset_query(); endwhile; ?>
						</ul>
						<?php endif; ?>

						<?php
							// go back to curren blog
							//restore_current_blog();
						?>
				</section>

				<section class="bar-column">
					<?php
					if ( is_active_sidebar( 'footer_bar' ) ) : ?>

					<?php dynamic_sidebar( 'footer_bar' ); ?>

					<?php endif; ?>
				</section>
			</section>
		</div>
	</footer>

    <?php wp_footer(); ?>
  </body>
</html>
