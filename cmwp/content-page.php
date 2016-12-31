<?php
/**
 * content -> page.
 */
?>

<section class="main main-post">
	<article class="post blog-<?php echo $blog_id_origin ?>" id="post-<?php the_ID(); ?>">
		<section class="post-top">
			<section class="post-content <?php echo $columnClassForContent; ?>">
				<h1 class="post-title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				<?php echo the_content('weiterlesen...'); ?>
			</section>
		</section>

	</article><!-- /.post-->
</section><!-- /.main-->
