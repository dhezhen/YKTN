<ul class="nav nav-list">
					<li>
						<a href="<?php echo site_url('admin/beranda');?>">
							<i class="icon-home"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('admin/daftarpeserta');?>">
							<i class="icon-book"></i>
							<span class="menu-text"> Daftar Peserta </span>
						</a>
					</li>

					<li class="active open">
						<a href="">
							<i class="icon-user"></i>
							<span class="menu-text"> Verifikasi Peserta </span>
						</a>
						<ul class="submenu">
							<li class="">
								<a href="<?php echo site_url('admin/belumdiverifikasi');?>">
									<i class=""></i>
									Belum Di verifikasi
								</a>

								
							</li>
						</ul>
						<ul class="submenu">
							<li class="">
								<a href="<?php echo site_url('admin/telahverifikasi');?>">
									<i class=''></i>
									Sudah Di verifikasi
								</a>

							
							</li>
						</ul>

						</li>

					<li>
						<a href="<?php echo site_url('admin/keuangan');?>">
							<i class="icon-money"></i>
							<span class="menu-text"> Verifikasi Keuangan </span>
						</a>
					</li>

					<li class="active open">
						<a href="">
							<i class="icon-group"></i>
							<span class="menu-text">Data Muhaffizh/ah </span>
						</a>
						<ul class="submenu">
							<li class="">
								<a href="<?php echo site_url('staff/daftar_pengajar');?>">
									<i class="icon-male"></i>
										Daftar Pengajar
								</a>

								
							</li>
						</ul>
						<ul class="submenu">
							<li class="">
								<a href="<?php echo site_url('staff/muhaffizh');?>">
									<i class="icon-male"></i>
										Muhaffizh
								</a>

								
							</li>
						</ul>
						<ul class="submenu">
							<li class="">
								<a href="<?php echo site_url('staff/muhaffizhah');?>">
									<i class='icon-female'></i>
									Muhaffizhah
								</a>

							
							</li>
						</ul>

						</li>
					
					

					<li>
						<a href="<?php echo site_url('admin/pengumuman');?>">
							<i class="icon-list"></i>
							<span class="menu-text"> Pengumuman </span>
						</a>
					</li>
					
					<!--
					<li>
						<a href="<?php echo site_url('admin/daftarpesan');?>">
							<i class="icon-list-alt"></i>
							<span class="menu-text"> Pesan </span>
						</a>
					</li>
						--!>									
				</ul>
				<audio src="<?php echo base_url() .'assets/music/opening.wav' ?>" autoplay="autoplay" hidden="hidden"></audio>