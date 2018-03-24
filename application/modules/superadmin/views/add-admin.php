<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid pt-25">
		<!-- Row -->
		<div class="row">
			<?php echo setSessionsMsg(); ?>
			<div class="col-sm-8 col-sm-offset-2">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Add Admin</h6>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="form-wrap">
								<form class="form-horizontal" method="post" action="<?php echo base_url(A.'/addAdmin'); ?>">
									<div class="form-group">
										<label class="control-label mb-10 col-sm-2">Name:</label>
										<div class="col-sm-10">
											<input type="text" name="name" class="form-control" placeholder="Enter Admin Name">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label mb-10 col-sm-2">Mobile No.:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="mobile_no" placeholder="Enter Mobile No.">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label mb-10 col-sm-2">Email:</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" name="email" placeholder="Enter email">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label mb-10 col-sm-2">City:</label>
										<div class="col-sm-10">
											<select class="form-control" name="city">
												<option>Select City</option>
												<option value="Indore">Indore</option>
												<option value="Bhopal">Bhopal</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label mb-10 col-sm-2">Password:</label>
										<div class="col-sm-10"> 
											<input type="password" class="form-control" name="password" placeholder="Enter password">
										</div>
									</div>
									<div class="form-group mb-0"> 
										<div class="col-sm-offset-2 col-sm-10">
										  <button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Submit</span></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<!-- /Row -->
	</div>