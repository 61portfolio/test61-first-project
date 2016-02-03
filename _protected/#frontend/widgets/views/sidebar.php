<div class="menu-section">
    <a href="javascript:void(0)"><img src="<?= Yii::$app->view->theme->baseUrl ?>/images/atmantan-menu-icon.jpg" class="menu-icon" alt="Menu" title="Menu" /></a>
    <div class="atmantan-menu">
        <div class="close_btn">
             X
        </div>
		<ul class="menu" id="content-3">
			<?php 
				$i=0;
				$j=0;
				foreach($sidebarmenu as $menu)
				{
					if($menu->level==0 && $i!=0)
					{
						echo"</ul></li>";
						$j=0;
						$i=0;
					}
					if($menu->level==0 && $i==0)
					{
						echo '<li class="first sub-menu-parent">';
						?><a href="<?php echo $menu->page->slug; ?>.html"><?php echo $menu->page->name; ?></a><?php
					}
					if($menu->level==1 && $j==0){ ?>
						<ul class="sub-menu">
					<?php $j++; } 
					if($menu->level==1 && $j!=0){ ?>
							<li>
								<a href="<?php echo $menu->page->slug; ?>.html"><?php echo $menu->page->name; ?></a>
							</li>
							
					<?php 	$j++; } ?>
					<?php
				   $i++;
			   }
			?>          
        </ul>
    </div>
</div>
<div class="logo_phill">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="logo-view fade-in one">
					<a title="" href="<?php echo Yii::$app->homeUrl; ?>"> <img src="<?= Yii::$app->view->theme->baseUrl.Yii::$app->params['settings']['innerlogo'] ?>" class="img-responsive" alt="atmantan" /></a>
				</div>
			</div>
		</div>
	</div>	
</div>	