<?php namespace ProcessWire; ?>

<div class="uk-grid-small uk-child-width-expand@m" data-uk-grid>
	<?php foreach($blogCategories as $category): if (count($category->references())): ?>
	<div>
		<a href="<?= $category->url ?>">
			<div class="uk-card uk-card-default uk-card-medium uk-card-body">
				<h3 class='uk-card-title uk-margin-remove'>
					<?= $category->title ?>
					<span class='text-xs'>( <?= count($category->references()) ?> )</span>
				</h3>
			</div>
		</a>
	</div>
	<?php
		endif;
	endforeach;
	?>
</div>