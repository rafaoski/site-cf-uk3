<?php namespace ProcessWire;

if (page()->hasChildren): ?>
<div id='main-content' data-pw-append>

<h3 class='uk-h2'><?= setting('more-topic') ?>:</h3>

	<div class="body__content uk-grid-small uk-child-width-expand@m" data-uk-grid>
		<?php foreach(page()->children as $item): ?>
		<div>
			<div class='uk-card uk-card-default uk-card-body'>
				<h3 class='text-md'><?= $item->title ?></h3>
				<p class='text-sm'><?= $item->intro ?></p>
				<a class='uk-button uk-button-primary uk-margin-small' href="<?= $item->url ?>">
					<?=  setting('read-more') . ' ' . ukIcon('arrow-right') ?>
				</a>
			</div>
		</div>

		<?php endforeach; ?>
	</div>

</div>
<?php endif;