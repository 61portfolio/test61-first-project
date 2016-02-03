<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>			
       <div class="atm_box">
    <div class="phill_div">
         <div class="container-fluid">
      <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dirctr-headng"> 
        
        <!-- top-content -->
        
        <div class="contact-area">
             <div class="contact-form">
						  <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

								<span id="Success">
									<div class="thank-msg"><div class="revert-msg"><span> <label>We will revert to you shortly,</label> Atmantan thanks you for your time </span></div></div>
								</span>

						<?php else: ?>
						 <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

							<h1>Contact Us</h1>
							   <?= $form->field($model, 'subject')->textInput(['value'=>'Contact Us','type'=>'hidden'])->label(false) ?>
							<div class="input-fields">
							<?= $form->field($model, 'name')->textInput(['placeholder' => 'name','class' => ''])->label(false) ?>	
							</div>

							<div class="input-fields">
							<?= $form->field($model, 'email')->textInput(['placeholder' => 'Email*','class' => ''])->label(false) ?>	

							</div>

							<div class="input-fields">

								<div class="inner-field2">
								<?= $form->field($model, 'code')->textInput(['placeholder' => 'STD/ISD code*','class' => ''])->label(false) ?>	
								</div>

								<div class="inner-field">
									<?= $form->field($model, 'phone')->textInput(['placeholder' => 'Phone*','class' => ''])->label(false) ?>	
								</div>

								

								<div class="clearfix"></div>

							</div>

							<div class="input-fields">
							<?= $form->field($model, 'country')->textInput(['placeholder' => 'Country*','class' => ''])->label(false) ?>
							</div>

							<div class="input-fields">
							<?= $form->field($model, 'body')->textArea(['rows' => 6 , 'placeholder' => 'Comment*','class' => ''])->label(false)  ?>
							</div>
								<input type="submit" name="submit" id="submit" value="Send" />
							
							
						<?php ActiveForm::end(); ?>

						<?php endif; ?>

						</div>

						<div class="contact-details">

							<div class="contact-detl">

								<h3>Contact Information</h3>

								<label><img src="images/atmantan-information-icon.png" alt="Information" /> <a href="mailto:info@atmantan.com">info@atmantan.com </a>

								<a href="mailto:careers@atmantan.com">careers@atmantan.com </a></label>

								<p><img src="images/atmantan-location-icon.png" alt="Location" />

								<span>ATMANTAN WELLNESS RESORT<br /> Mulshi, <br/> Pune - 412108, <br />Maharashtra, India. 

								</span></p>

								<p><img src="images/atmantan-phone-icon.png" alt="Telephone" /> <span>Tel: +91 20 66766666</span></p>                                             

								<p><span class="nxt-adrs">Pune Sales Office: <br /> SPARSH INFRATECH PVT. LTD. <br />3, Queens Garden, Pune – 411001</span></p>

								<p><img src="images/atmantan-phone-icon.png" alt="Telephone" /><span> Tel: +91 20  2636 2222 <br />Ext: 278 </span></p>

							</div>

						</div>

					</div>

				<!-- top-content --> 

				 </div>

				

				<div class="clearfix"></div>

				</div>

			</div>

		</div>

	</div>
