<?php namespace ProcessWire;

// reset variables
$readMore = '';

isset($image)?: $image = true;

// text read more
$textMore = setting('read-more');

// user nick name
$nick_name = $item->createdUser->nick_name;

// if single blog post
if ($item->id == page('id')) {

// Blog Title
	$title = '';

// page body
	$body = $item->body . "\n";

} else {

// blog title
	$title = "<h3><a title='$item->title' href='$item->url'>$item->title</a></h3>";

// page body
	$body = '<p>' . $item->intro . '</p>';

// read more button
	$readMore = "<a class='btn btn--primary margin-bottom-md' href='$item->url' title='$textMore'>$textMore</a>";
}
?>

<article class='blog-article <?= 'article_' . $item->id ?>'>
	<header>
		<?= $title ?>
		<p>
			<?= ukIcon('calendar') . ' ' . $item->date ?>
			<?= ukIcon('user') . ' ' . $nick_name ?>
			<?= countComments($item, ['icon' => ukIcon('comments') ]) ?>
		</p>
	</header>

	<?php if ( count($item->images) && $image == true ): ?>
	<a href='<?= $item->id == page('id') ? $item->images->first->url : $item->url ?>'>
		<figure class='flex-center'>
			<img src='<?= $item->images->first->url ?>' class='transition-bounce-s-small'
				alt='<?= $item->images->first->description ?: $item->meta_title ?>'>
			<figcaption><?= $item->images->first->description ?: $item->title?></figcaption>
		</figure>
	</a>
	<?php endif; ?>

	<?= $body ?>

	<footer class='margin-y-md'>
		<?php if ( count($item->categories) ): ?>

			<p class='text-sm'><?= ukIcon('hashtag') ?>
				<?= $item->categories->each("<a href='{url}'>{title}</a> ") ?></p>

		<?php endif; ?>

		<?php if ( count($item->tags) ): ?>

			<p class='text-sm'><?= ukIcon('tag') ?>
			<?= $item->tags->each("<a href='{url}'>{title}</a> ") ?></p>

		<?php endif; ?>
	</footer>

	<?= $readMore ?>

</article>
