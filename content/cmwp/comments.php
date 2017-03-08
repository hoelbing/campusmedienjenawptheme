<?php
	if (is_user_logged_in()) {
		global $current_user;
		$loggedIn = true;
		get_currentuserinfo();
	}
	else {
		$loggedIn = false;
	}
?>

<section id="comments">

	<section id="comments-new">

		<aside class="">
			<h3 id="respond">Sag was dazu!</h3>
			<?php if(function_exists('get_twoclick_buttons')) {get_twoclick_buttons(get_the_ID());}?>
		</aside>

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comments-form">

			 <?php if ( !$loggedIn ): ?>
			<div class="form-group">
				<div class="input-group">
				  <span class="input-group-addon"><i class="fa fa-user"></i></span>
				  <input type="text" name="author" id="author" class="form-control" value="<?php echo $comment_author; ?>" placeholder="Name" tabindex="1">
				</div>
			</div>

			<div class="form-group">
				<div class="input-group">
				  <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
				  <input type="email" name="email" id="email" class="form-control" value="<?php echo $comment_author_email; ?>" placeholder="Email (wird nicht veröffentlicht)" tabindex="2">
				</div>
			</div>

			<?php endif; ?>

			<div class="form-group">
				<textarea class="form-control" rows="5" id="comment" name="comment" tabindex="3" placeholder="Schreibe etwas<?php if ($loggedIn) { echo ', ' .  $current_user->display_name . ' '; } ?>..."></textarea>
			</div>

			<div class="form-group">
				<div class="input-group">
					<input id ="submit" name="submit" type="submit" class="btn btn-default" tabindex="4" value="Abschicken" />
					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
				</div>
			</div>

		   <?php do_action('comment_form', $post->ID); ?>

		</form>

	</section> <!-- /#comments-form -->



	<section id="comments-list">
		<?php foreach ($comments as $comment) : ?>

		<aside class="media comment" id="comment-<?php comment_ID() ?>">
			<a class="media-left" href="#">
					<?php echo get_avatar(get_user_by( 'email', get_comment_author_email())->ID, 90); ?>
			</a>

			<div class="media-body">
				<p class="media-heading comments-meta-name"><?php comment_author_link() ?></p>
				<p class="comments-meta-date"><?php comment_date('j.m.Y') ?> | <?php comment_time('H:i') ?> Uhr</p>

				<?php comment_text() ?>

				<?php if ($comment->comment_approved == '0') : ?>
				<strong>Achtung: Dein Kommentar muss erst noch freigegeben werden.</strong><br />
				<?php endif; ?>
			</div>
		</aside>

	   <?php endforeach; /* end for each comment */ ?>
	</section><!-- /.comments-list -->

</section>
