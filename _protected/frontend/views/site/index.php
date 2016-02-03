<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\widgets\MainPageSidebar;
use frontend\widgets\SliderWid;
use common\models\Slider;
/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name);

$modelgallery = new Slider();
$imggallery = $modelgallery->getSlider(67);
?>

			<?= SliderWid::widget(['imggallery'=> $imggallery ]) ?>
			
					<!-- swipper-slider -->
				<div class="swiper-slide">
						<img src="images/elmhurst-harvest-nuts-milk.jpg" class="img-responsive swipe-height">
						<div class="nuts-milk-content">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div class="banner-content-sec">
										<div class="banner-content box" data-nekoanim="bounceInLeft" data-nekodelay="200">
											<div class="banner-heading">We're nuts about milk!</div> 
											<p>We took a look down the alter<br />native milk aisle and noticed it</br> was missing something...</p>
										</div>
										<div class="almond">
											<ul>
												<li class="box" data-nekoanim="bounceInUp" data-nekodelay="450"><a href="javascript:void(0)"><img src="images/real-almon-chocolate.png" class="img-responsive"></a></li>
												<li class="box" data-nekoanim="bounceInUp" data-nekodelay="700"><a href="javascript:void(0)"><img src="images/elmhurst-harvest-real-almonds-originals.png" class="img-responsive"></a></li>
												<li class="box" data-nekoanim="bounceInUp" data-nekodelay="950"><a href="javascript:void(0)"><img src="images/real-almond.png" class="img-responsive"></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>	
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
						
					</div>
					<!-- swipper-slider -->
					<!-- swipper-slider -->
				<div class="swiper-slide">
					<img src="images/elmhurst-harvest-milk_shakes.jpg" class="img-responsive swipe-height">
					   <div class="nuts-milk-content">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 elmhusrt-btl">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div class="almond-bottle box" data-nekoanim="bounceInUp" data-nekodelay="300">
										<img src="images/elmhurst-harvest-real-almonds.png" alt="Elmhurst Harvest Almonds" title="Elmhurst Harvest Almonds" />
									</div>
								</div>	
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div class="banner-content-sec">
											<div class="third-content box" data-nekoanim="bounceInRight" data-nekodelay="200">
												<div class="third-heading">Best milk for your shakes</div> 
												<p>We took a look down the alter<br />native milk aisle and noticed it</br> was missing something...</p>
											</div>
											<div class="third-almond">
												<ul>
													<li class="box" data-nekoanim="bounceInRight" data-nekodelay="450"><a href="javascript:void(0)"><img src="images/real-almond.png" class="img-responsive"></a></li>
													<li class="box" data-nekoanim="bounceInRight" data-nekodelay="700"><a href="javascript:void(0)"><img src="images/elmhurst-harvest-real-almonds-originals.png" class="img-responsive"></a></li>
													<li class="box" data-nekoanim="bounceInRight" data-nekodelay="950"><a href="javascript:void(0)"><img src="images/real-almon-chocolate.png" class="img-responsive"></a></li>
												</ul>
											</div>
										</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
					   </div>
					
					</div>
					<!-- swipper-slider -->
					<!-- swipper-slider -->
				<div class="swiper-slide"><!-- Process starts -->
						<div class="nuts-milk-content">
							<div class="our-process">
								<h1>OUR PROCESS</h1>
								<h6>elmhurst harvest milking process</h6>
								<div class="all-process">
									<div class="status-item box" data-nekoanim="bounceInDown" data-nekodelay="200">
										<img src="images/milk-collecting.png" class="img-responsive">
										<h4>Milk collecting </h4>
									</div> 
									<div class="status-item box" data-nekoanim="bounceInDown" data-nekodelay="450">
										<img src="images/milk-puring.png" class="img-responsive">
										<h4>milk-puring</h4>
									</div>
									<div class="status-item box" data-nekoanim="bounceInDown" data-nekodelay="700">
										<img src="images/milk-testing.png" class="img-responsive">
										<h4>milk-testing </h4>
									</div>
									<div class="status-item box" data-nekoanim="bounceInDown" data-nekodelay="950">
										<img src="images/milk-packing.png" class="img-responsive">
										<h4>milk-packing</h4>
									</div>
									<div class="status-item box" data-nekoanim="bounceInDown" data-nekodelay="1200">
										<img src="images/delivering.png" class="img-responsive">
										<h4>delivering</h4>
									</div>
								</div>
								
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="all-milk">
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
											<div class="deliver-health">
												<h2>Delivering most health </h2>
												<h3>Milk to America</h3>
												<img src="images/milk-to-america.jpg">
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 box" data-nekoanim="bounceInDown" data-nekodelay="1500"><img src="images/milk.jpg" class="img-responsive"></div>
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<div class="all-milk-right">
													<h5>Our Partners</h5>
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 all-milk-img box" data-nekoanim="bounceInRight" data-nekodelay="450"><a href="javascript:void(0)"><img src="images/steuben.jpg" class="img-responsive"></a></div>
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 all-milk-img box" data-nekoanim="bounceInRight" data-nekodelay="700"><a href="javascript:void(0)"><img src="images/cold-stone.jpg" class="img-responsive"></a></div>
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 all-milk-img box" data-nekoanim="bounceInRight" data-nekodelay="950"><a href="javascript:void(0)"><img src="images/steubens.jpg" class="img-responsive"></a></div>
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 all-milk-img box" data-nekoanim="bounceInRight" data-nekodelay="1200"><a href="javascript:void(0)"><img src="images/milk-shakers.jpg" class="img-responsive"></a></div>
														<div class="clearfix"></div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="clearfix"></div>
									   </div>
								   
								</div>
								<div class="clearfix"></div>
				
			   </div>
			   </div>
			<!-- Process ends -->
			</div>
					<!-- swipper-slider -->
					<!-- swipper-slider -->
				<div class="swiper-slide"><!-- Next-banner starts -->
					<div class="nuts-milk-content">
				   <div class="fourth-banner">
					  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
							 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-our-story box" data-nekoanim="bounceInDown" data-nekodelay="300">
								<div class="our-story-area">
								   <div class="our-story-area-heading">Our Story</div>
								   <p>Elmhurst Dairy® has been providing fresh quality milk to New Yorkers since 1920 when brothers Max and Arthur Schwartz began bottling and delivering milk from their family’s cows.</p>
									<p>Max Schwartz's son, Henry Schwartz, began Steuben Foods Inc. in 1980.</p>
									<p>And now, after 95 years in the milk industry, Steuben Consumer Products is proud to launch Elmhurst Harvest™</p>
									<p>Elmhurst Harvest™ is a new and innovative line of non-dairy milk alternatives from a family steeped in dairy history.</p>
									<p>Dairy Free - Soy Free</p>
									<p>Made from GMO Free Ingredients</p>
									<p>Guilt Free</p>
								</div>
							 </div>
							 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 home-form box" data-nekoanim="bounceInUp" data-nekodelay="400">
							 <div class="form-area">
							 <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

								<div class="alert alert-success">
									Thank you for contacting us. We will respond to you as soon as possible.
								</div>
							<?php else: ?>
							<?php $form = ActiveForm::begin(['id' => 'contact-form','class' => 'home-contact-form']); ?>
								<div class="home-contact-form-hading">Your Opinion Matters!<br /> Let us know what you think.</div>
									  <div class="home-name-field">
									
											<?= $form->field($model, 'name')->textInput(['maxlength' => true , 'class' => 'form-control' ,'placeholder' => 'Name'])->label(false); ?>
									
									  </div>
									<div class="home-name-field2"> 
									
											<?= $form->field($model, 'email')->textInput(['maxlength' => true ,'class' => 'form-control' ,'placeholder' => 'EMAIL'])->label(false); ?>
									
									</div>
									<div class="clearfix"></div>
						   
								
									<?= $form->field($model, 'body')->textArea(['rows' => 8, 'class' => 'form-control' ,'placeholder' => 'Your suggestions'])->label(false); ?>
									
								
								<?= Html::submitButton('Submit', ['class' => 'second-button', 'name' => 'contact-button']) ?>
								<?php ActiveForm::end(); ?>
							<?php endif; ?>
 
							 <div class="clearfix"></div>
							 </div>
							 <div class="form-think">We're not socially awkward...we don't think.</div>
							 </div>
					  </div>
				   </div>
				   </div>
				   
				<!-- Next-banner ends -->
				</div>

	 <!-- swipper-slider -->
				
		





