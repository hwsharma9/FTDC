<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid pt-25">
		<!-- Row -->
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Add Booking</h6>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="form-wrap">
								<form class="form-horizontal">
									<div class="form-group">
										<label class="control-label mb-10 col-sm-2">Docket No:</label>
										<div class="col-sm-10">
											<input type="text" name="docket_no" class="form-control" value="1001" readonly>
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
										<label class="control-label mb-10 col-sm-2">Pincode:</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" name="pincode" placeholder="Enter Pincode">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label mb-10 col-sm-2">Weight:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="weight" placeholder="Enter Weight">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label mb-10 col-sm-2">Mode:</label>
										<div class="col-sm-10"> 
											<input type="radio" class="radio-inline" name="mode" value="Air"> Air
											<input type="radio" class="radio-inline" name="mode" value="Surface"> Surface
										</div>
									</div>
									<div class="form-group">
										<label class="control-label mb-10 col-sm-2">Customer Mob. No.:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="cust_mob_no" placeholder="Enter Customer Mob. No.">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label mb-10 col-sm-2">Customer Name:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="customer_name" placeholder="Enter Customer Name">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label mb-10 col-sm-2">Price:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="price" placeholder="Enter Price">
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