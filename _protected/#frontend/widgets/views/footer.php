<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
?>
   
   <footer class="footer">
    <div class="left-footer">
     <ul>
      <li> <a href="http://www.61designstreet.com/" title="Home 61designstreet" target="_blank">
	  <svg version="1.1" baseProfile="tiny" id="logo_ds" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="88.926px" height="107.551px" viewBox="0 0 88.926 107.551" xml:space="preserve"><g>
        <path fill-rule="evenodd" id="logo_in" fill="#858585" d="M9.024,97.787c5.997,5.4,13.276,7.332,21.144,7.76c2.24,0.123,3.322-0.666,4.258-2.68
										c9.936-21.395,19.976-42.74,29.973-64.105c0.313-0.669,0.483-1.404,0.968-2.836c-2.071,0.563-3.57,0.88-5.008,1.375
										c-6.296,2.168-12.559,4.434-18.872,6.545c-1.211,0.404-2.602,0.271-4.509,0.438c3.342-7.01,6.503-13.313,9.344-19.757
										c1.16-2.63,2.776-3.92,5.549-4.681c12.292-3.376,23.586-8.939,34.527-16.455c-1.193-0.387-1.822-0.688-2.482-0.789
										c-2.454-0.379-4.91-0.804-7.383-1.016C61.804,0.329,47.927,3.035,36.417,12.65C16.247,29.499,5.157,51.568,1.794,77.438
										C0.801,85.071,2.962,92.328,9.024,97.787z"/>
        <path fill-rule="evenodd" id="logo_out" fill="#858585" d="M86.652,51.52c-7.11,15.141-13.932,29.67-20.895,44.497
										C78.897,88.974,89.749,66.176,86.652,51.52z"/>
       </g>
       </svg> </a> </li>
      <li><a href="contact-us.html">Contact Us</a></li>
		<li>
           <ul>
				<?php if(!empty(Yii::$app->params['settings']['facebook'])){ ?>				
					<li class="fb"><a target="_blank" href="" rel="nofollow"> <svg enable-background="new 0 0 32 32" id="" version="1.0" viewBox="0 0 32 32"  xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M18,32V18h6l1-6h-7V9c0-2,1.002-3,3-3h3V0c-1,0-3.24,0-5,0c-5,0-7,3-7,8v4H6v6h6v14H18z" fill="#3B5998" id="f_1_"/><g/><g/><g/><g/><g/><g/></svg> </a></li>
				<?php } ?>
			
				<?php if(!empty(Yii::$app->params['settings']['twitter'])){ ?>
					<li class="tw"><a target="_blank" href="" rel="nofollow"> <svg enable-background="new 0 0 32 32" id="Layer_1" version="1.0" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.993,6.077C30.816,6.6,29.552,6.953,28.223,7.11c1.355-0.812,2.396-2.098,2.887-3.63  c-1.269,0.751-2.673,1.299-4.168,1.592C25.744,3.797,24.038,3,22.149,3c-3.625,0-6.562,2.938-6.562,6.563  c0,0.514,0.057,1.016,0.169,1.496C10.301,10.785,5.465,8.172,2.227,4.201c-0.564,0.97-0.888,2.097-0.888,3.3  c0,2.278,1.159,4.286,2.919,5.464c-1.075-0.035-2.087-0.329-2.972-0.821c-0.001,0.027-0.001,0.056-0.001,0.082  c0,3.181,2.262,5.834,5.265,6.437c-0.55,0.149-1.13,0.23-1.729,0.23c-0.424,0-0.834-0.041-1.234-0.117  c0.834,2.606,3.259,4.504,6.13,4.558c-2.245,1.76-5.075,2.811-8.15,2.811c-0.53,0-1.053-0.031-1.566-0.092  C2.905,27.913,6.355,29,10.062,29c12.072,0,18.675-10.001,18.675-18.675c0-0.284-0.008-0.568-0.02-0.85  C30,8.55,31.112,7.395,31.993,6.077z" fill="#55ACEE"/><g/><g/><g/><g/><g/><g/></svg> </a></li>
				<?php } ?>
				
				<?php if(!empty(Yii::$app->params['settings']['linkedin'])) { ?>
					<li class="tm"><a target="_blank" href="" rel="nofollow"> <svg enable-background="new 0 0 32 32" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Flat_copy"><path d="M32,31.292V19.46c0-6.34-3.384-9.29-7.896-9.29c-3.641,0-5.273,2.003-6.182,3.409v-2.924h-6.86   c0.091,1.937,0,20.637,0,20.637h6.86V19.767c0-0.615,0.044-1.232,0.226-1.672c0.495-1.233,1.624-2.509,3.518-2.509   c2.483,0,3.475,1.892,3.475,4.666v11.041H32V31.292z M3.835,7.838c2.391,0,3.882-1.586,3.882-3.567   c-0.044-2.024-1.49-3.564-3.836-3.564S0,2.246,0,4.271c0,1.981,1.489,3.567,3.792,3.567H3.835z M7.265,31.292V10.655H0.406v20.637   H7.265z"/></g></svg> </a></li>
				<?php } ?>
				<?php if(!empty(Yii::$app->params['settings']['instagram'])){ ?>
					<li class="be"><a target="_blank" href="" rel="nofollow"> <svg enable-background="new 0 0 32 32" id="" version="1.0" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M28,0H4C1.741,0,0,1.741,0,4v24c0,2.258,1.741,4,4,4h24c2.258,0,4-1.742,4-4V4C32,1.741,30.258,0,28,0z   M16.023,9.714c3.549,0,6.425,2.787,6.425,6.226c0,3.437-2.876,6.226-6.425,6.226c-3.546,0-6.423-2.789-6.423-6.226  C9.601,12.501,12.478,9.714,16.023,9.714z M28,27c0,0.701-0.3,1-1,1H5c-0.699,0-1-0.299-1-1V13l2.493,0.542  c-0.267,0.87-0.413,1.79-0.413,2.745c0,5.318,4.454,9.634,9.943,9.634c5.492,0,9.944-4.315,9.944-9.634  c0-0.955-0.145-1.875-0.412-2.745L28,13V27z M28,9c0,0.553-0.447,1-1,1h-4c-0.553,0-1-0.447-1-1V5c0-0.553,0.447-1,1-1h4  c0.553,0,1,0.447,1,1V9z" fill="#316699"/><g/><g/><g/><g/><g/><g/></svg> </a></li>	
				<?php } ?>		
				<?php if(!empty(Yii::$app->params['settings']['pinterest'])){ ?>
					<li class="be"><a target="_blank" href="" rel="nofollow"> <svg enable-background="new 0 0 32 32" id="" version="1.0" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M28,0H4C1.741,0,0,1.741,0,4v24c0,2.258,1.741,4,4,4h24c2.258,0,4-1.742,4-4V4C32,1.741,30.258,0,28,0z   M16.023,9.714c3.549,0,6.425,2.787,6.425,6.226c0,3.437-2.876,6.226-6.425,6.226c-3.546,0-6.423-2.789-6.423-6.226  C9.601,12.501,12.478,9.714,16.023,9.714z M28,27c0,0.701-0.3,1-1,1H5c-0.699,0-1-0.299-1-1V13l2.493,0.542  c-0.267,0.87-0.413,1.79-0.413,2.745c0,5.318,4.454,9.634,9.943,9.634c5.492,0,9.944-4.315,9.944-9.634  c0-0.955-0.145-1.875-0.412-2.745L28,13V27z M28,9c0,0.553-0.447,1-1,1h-4c-0.553,0-1-0.447-1-1V5c0-0.553,0.447-1,1-1h4  c0.553,0,1,0.447,1,1V9z" fill="#316699"/><g/><g/><g/><g/><g/><g/></svg> </a></li>	
				<?php } ?>					
			</ul>
		</li>
     </ul>
     <ul class="list-item">
		<?php 
		foreach($leftmenu as $menu){
		?>
			<li><a href="<?= $menu->link ?>"><?= $menu->name ?></a></li>
		<?php
		}
		?>
     </ul>
    </div>
    <div class="right-footer">
     <ul>
		<?php 
		$reservation = array();
		foreach($rightmenu as $menu){
			if($menu->class_name != ''){
				$reservation = $menu;
				continue;
			}				
		?>
			<li><a href="<?= $menu->link ?>"><?= $menu->name ?></a></li>
		<?php
		}
		?>
     </ul>
     <span class="<?= $reservation->class_name ?>"><a href="<?= $reservation->link ?>"><?= $reservation->name ?></a></span> </div>
    <div class="clearfix"></div>
   </footer>