<?php namespace ProcessWire; ?>

<div class='uk-margin-medium-top'>
	<?php
		// Get Comments
		$comments = page()->comments;
		// comment list
		if (count($comments)) {
			echo ukHeading3(setting('comment-text'), "icon=comments");
			echo ukComments($comments);
		}
		// comment form
		echo ukHeading3(setting('post-comment'), "icon=comment");
		echo ukCommentForm($comments);
	?>
</div>
