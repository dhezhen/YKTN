<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="" class="brand">
						<small>
							<i class="icon-leaf"></i>
							SISINFO YKTN  | <?php echo $this->session->userdata('nama_p');?>
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						
						
					
						<li class="light-blue">
					<!-- 	<a href="< ?php echo site_url('admin/logout');?>">
 -->
								<img class="nav-user-photo" href="javascript:void(0);"  onclick='dialog()'src="<?php echo base_url('assets/images/logout.png');?>" alt="Jason's Photo" />
					<!-- 		</a> -->
								
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>
		
		<script type="text/javascript">
		var url="<?php echo base_url();?>";
			function dialog(){
				var r=confirm("Yakin Mau Keluar?")
					if (r==true)
						window.location = url+"pengajar/logout";
					else
					return false;
					} 
</script>