<?php
/**
 * content -> page.
 */
?>
<div class="content content-single">
	<section class="main">
		<article class="post" id="post-<?php the_ID(); ?>">
			<section class="post-top">
				<section class="post-content">
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
					<p><?php echo the_content(); ?></p>
				</section>
			</section>
		</article>
	</section>
</div>
