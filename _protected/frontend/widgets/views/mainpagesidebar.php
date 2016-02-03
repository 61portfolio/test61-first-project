<?php

use yii\helpers\Url;
$s=1;
?>
<ul class="menu-sec fade-in three">
	<?php foreach($sidebarmenus as $sidebarmenu1){ ?>
			<li><a href="<?= $sidebarmenu1->link ?>"><?= $sidebarmenu1->name ?></a>
			<?php if($s == 1){ ?>
				<ul class="submenu">
					<li><a href="real-pistachio.html">Real Pistachio</a></li>  
					<li><a href="real-walnut.html">Real Walnut</a></li>
					<li><a href="real-almond.html">Real Almond</a></li>
				</ul>
			<?php } ?>
			
			</li>
	<?php $s++; } ?>										
</ul>												

												

							
