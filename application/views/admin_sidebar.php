    <div class="wrapper  theme-5-active pimary-color-green">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap" style="padding-top:0px;">
						<a href="index.html">
							<img class="brand-img" src="<?php echo base_url('assets/admin/dist/img/logo.png'); ?>" alt="brand" style="width:200px;"/>
							<!-- <span class="brand-text">FTDC</span> -->
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown">FTDC</a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="<?php echo base_url(A); ?>"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="<?php echo base_url(A.'-logout'); ?>"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>	
		</nav>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="active" href="<?php echo base_url(A); ?>">
						<div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i>
							<span class="right-nav-text">Dashboard</span>
						</div>
					</a>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="icon-user-following mr-20"></i><span class="right-nav-text">Admin</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
						<div class="clearfix"></div>
					</a>
					<ul id="ecom_dr" class="collapse collapse-level-1">
						<li>
							<a href="<?php echo base_url(A.'/add-admin'); ?>">Add New</a>
						</li>
						<li>
							<a href="<?php echo base_url(A.'/admin-list'); ?>">Admin List</a>
						</li>
					</ul>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li>
					<a href="<?php echo base_url(A.'/docket-no'); ?>"><div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span class="right-nav-text">Docket No. </span></div><div class="clearfix"></div></a>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#addbooking"><div class="pull-left"><i class="icon-user-following mr-20"></i><span class="right-nav-text">Booking</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
						<div class="clearfix"></div>
					</a>
					<ul id="addbooking" class="collapse collapse-level-1">
						<li>
							<a href="<?php echo base_url(A.'/add-booking'); ?>">Add Booking</a>
						</li>
						<li>
							<a href="<?php echo base_url(A.'/booking-list'); ?>">Booking List</a>
						</li>
					</ul>
				</li>
				<!-- <li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>component</span> 
					<i class="zmdi zmdi-more"></i>
				</li> -->
				<li><hr class="light-grey-hr mb-10"/></li>
				<li>
					<a href="<?php echo base_url(A.'/forwarding'); ?>"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">Forwarding</span></div><div class="clearfix"></div></a>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li>
					<a href=""><div class="pull-left"><i class="zmdi zmdi-edit mr-20"></i><span class="right-nav-text">Booking Search</span></div><div class="clearfix"></div></a>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li>
					<a href=""><div class="pull-left"><i class="zmdi zmdi-chart-donut mr-20"></i><span class="right-nav-text">DRS </span></div><div class="clearfix"></div></a>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
			</ul>
		</div>
		<!-- /Left Sidebar Menu -->