<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid pt-25">
		<!-- Row -->
		<div class="row">
			<div class="col-sm-12">
				<?php echo setSessionsMsg(); ?>
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Admin List</h6>
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
												<th>Name</th>
												<th>Mobile No.</th>
												<th>Email</th>
												<th>Password</th>
												<th>Type</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php if(isset($adminlist) && !empty($adminlist)){ 
												foreach ($adminlist as $key => $value) {
											?>
											<tr>
												<td><?php echo $key+1; ?></td>
												<td><?php echo $value['name']; ?></td>
												<td><?php echo $value['mobile_no']; ?></td>
												<td><?php echo $value['email']; ?></td>
												<td><?php echo $value['plain_password']; ?></td>
												<td><?php echo $value['admin_type']; ?></td>
												<td>
													<a href="<?php echo base_url(A."/edit-admin/".$value['id']); ?>" class="text-inverse pr-10" title="" data-toggle="tooltip" data-original-title="Edit"><i class="zmdi zmdi-edit txt-warning"></i></a>
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