<?php namespace ProcessWire; ?>

<footer id='main-footer' class='container-full main-footer padding-x-sm padding-y-lg'
		style='background-color: var(--color-contrast-higher-a80);'>

	<a id="to-top" title='to-top' class='main-footer__to-top uk-float-right color-warning' href="#"
					data-uk-totop data-uk-scroll></a>

	<p class='main-footer__social-profiles uk-text-center uk-width-1-1'>
		<?= socialProfiles(pages()->get('/options/social-profiles/')->children()) ?>
	</p>

	<div id="search-form" class='main-footer__search-form uk-container uk-width-1-2@m margin-y-lg'>
		<?= files()->render('views/parts/_search-form.php') ?>
	</div>

	<p id='copy-text' class="main-footer__copy-text uk-text-center uk-text-muted">
		<?php echo files()->render('views/parts/_footer-demo-copyright.php') ?>
		<?php // echo files()->render('views/parts/_footer-copyright.php') ?>
	</p>

</footer>

<!-- OFF CANVAS NAV -->
<a href="#off-overlay" id='offcanvas-toggle' aria-label='Off Canvas Menu'
	class='uk-position-top-right uk-position-fixed uk-padding-small'  style='background:  var(--color-contrast-higher-a80);' data-uk-toggle>
	<?= ukIcon('menu', ['ratio' => 2]) ?>
</a>

<div id="off-overlay" data-uk-offcanvas="overlay: true; flip: true;">

	<div class="uk-offcanvas-bar">

		<button class="uk-offcanvas-close" type="button" data-uk-close></button>
		<h3 class='uk-h4'><a aria-label='Home' href='<?= setting('home')->url ?>'><?= pages('options')->site_name ?></a></h3>
			<?php
				// example of caching generated markup (for 600 seconds/10 minutes)
				echo cache()->get('offcanvas-nav', 10, function() {
				return ukNav(pages('/')->children(), [
					'depth' => 2,
					'accordion' => true,
					// 'blockParents' => [ 'blog' ],
					'repeatParent' => true,
					'noNavQty' => 20,
					'maxItems' => 16,
				]);
				});
			?>
	</div>

</div>

<script src='<?= urls()->templates ?>assets/js/scripts.js'></script>

<pw-region id='bottom-region'></pw-region>
</body>
</html>