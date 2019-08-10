<?php namespace ProcessWire; ?>

<div class="<?= $class ?>__content uk-grid-small uk-child-width-expand@m" data-uk-grid>
	<?php foreach($item->rep_card as $card): ?>
	<div>
		<div class="uk-card uk-card-default uk-card-body">
			<h3><?= $card->text_1 ?></h3>
			<p><?= $card->body ?></p>
		</div>
	</div>
	<?php endforeach; ?>
</div>
