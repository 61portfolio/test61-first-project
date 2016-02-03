<div class="menu-area-left">
	<div class="monogram-logo">
		<div class="atmantan-logo-area">
			<a href="<?php echo Yii::$app->homeUrl; ?>"><img src="<?= Yii::$app->view->theme->baseUrl.'/images/atmantan_-logo.png' ?>" alt="Atmantan" title="Atmantan" /></a>
		</div>
		<div class="menu-sec" id="content-3">
			<ul>
				<?php foreach($sidebarmenu as $menu)
				{	?>
					<li>
						<a href="<?php echo $menu->page->slug; ?>.html"><?php echo $menu->page->name; ?></a>
					</li>
				<?php
				} ?>
			</ul>
		</div>
	</div>
</div>
