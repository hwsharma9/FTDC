<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid pt-25">
    	<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Add Docket No.</h6>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="form-wrap">
								<form class="form-inline">
								   <div class="form-group mr-15">
										<label class="control-label mr-10" for="email_inline">Docket Start No.:</label>
										<input type="text" class="form-control" name="docket_start_no">
									</div>
									<div class="form-group mr-15">
										<label class="control-label mr-10" for="pwd_inline">Docket End No.:</label>
										<input type="text" class="form-control" name="docket_end_no">
									</div>
									<button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Row -->
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Docket No. List</h6>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="table-wrap">
								<div class="table-responsive">
									<table id="datable_1" class="table table-hover display  pb-30" >
										<thead>
											<tr>
												<th>ID</th>
												<th>Start No.</th>
												<th>End No.</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php if(isset($docketlist) && !empty($docketlist)){ 
												foreach ($docketlist as $key => $value) {
											?>
											<tr>
												<td><?php echo $key+1; ?></td>
												<td><?php echo $value['name']; ?></td>
												<td><?php echo $value['mobile_no']; ?></td>
												<td>
													<a href="javascript:void(0)" class="text-inverse pr-10" title="" data-toggle="tooltip" data-original-title="Edit"><i class="zmdi zmdi-edit txt-warning"></i></a>
													<a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="zmdi zmdi-delete txt-danger"></i></a>
												</td>
											</tr>
											<?php } } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!-- /Row -->
	</div>