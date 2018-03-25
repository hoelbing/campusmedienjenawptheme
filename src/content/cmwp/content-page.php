<?php
/**
 * content -> page.
 */
?>

<section class="<?php echo $columnClassForContent; ?>" id="post-<?php the_ID(); ?>">
	<h1 class="page-title">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
			<?php the_title(); ?>
		</a>
	</h1>
	<p class="page-content">
		<?php echo the_content('weiterlesen...'); ?>
	</p>
</section>
