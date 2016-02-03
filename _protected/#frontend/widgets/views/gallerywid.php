<!-- atm box -->

<div class="atm_box">

	<div class="phill_div">

		<div class="container-fluid">

			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dirctr-headng">

				<!-- top-content -->

					<h1>ATMANTAN GALLERY</h1>
					<div class="baguetteBoxOne">
						<div class="content-gallery">
							<div class="cards">
								
								<?php
							foreach($imggallery as $gal)
							{ ?>
								<div class="card">
									<div class="card-wrapper">
										<div class="card-image">
											<a href="<?= $gal->image_path; ?>" data-caption="<?= $gal->Image_name; ?>">
												<img src="<?= $gal->image_path; ?>">
											</a>
										</div>
									</div>
								</div>												
					 <?php } ?>
								
							</div>
						</div> 
					</div>
					<!-- top-content --> 

				</div>

				</div>

			</div>

		</div>

	</div>
