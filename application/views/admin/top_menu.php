<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="" class="brand">
						<small>
							<i class="icon-leaf"></i>
							SISINFO YKTN
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						
						
						

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url('assets/images/logo.png');?>" alt="Jason's Photo" />
								<span class="user-info">
									<small>Ahlan Wasahlan</small>
										<?php echo $this->session->userdata('nama_lengkap');?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								
								<li>
									<a href="<?php echo site_url('admin/logout');?>">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>