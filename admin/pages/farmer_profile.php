<?php $farmer=get_farmer_info($_GET['farmer']); extract($farmer); $crops=sum_as_total("crops","WHERE farmer_id=".$farmer['id']."","quantity")."kg"; ?>
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> Farmer Information</h4>
					<hr>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-md-11">
							<div class="single-profile p-3">
								<div class="profile-card">
									<div class="row">
										<div class="col-md-10 text-left">
											<div class="user-name">
                                                <h5 class="text-left">FarmerID : <span class="text-primary"><?php echo $farmer_id ?></span><br><small>Name : <span class="text-primary"><?php echo $name ?></span></small></h5>
											</div>
											<div class="user-review">
												<a href="javascript:;" class="review-link first"> Crop Available<span> (<?php echo $crops; ?>) </span></a>
											</div>
											<div class="all-languages">
												<b>Address:</b><br>
                                                <?php echo $address; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>