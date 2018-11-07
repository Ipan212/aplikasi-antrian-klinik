<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="<?php echo base_url('DashboardAdmin'); ?>" ><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
				<li><a href="<?php echo base_url('Admin/pegawai'); ?>" class=""><i class="lnr lnr-users "></i> <span>Atur Pegawai</span></a></li>
				<li><a class="active" href="<?php echo base_url('Layanan/index'); ?>" class=""><i class="lnr lnr-bookmark "></i> <span>Atur Layanan</span></a></li>
				<li><a href="<?php echo base_url('Jadwal/index'); ?>" class=""><i class="lnr lnr-user "></i> <span>Atur Jadwal</span></a></li>
				<li><a href="<?php echo base_url('User/index'); ?>" class=""><i class="lnr lnr-user "></i> <span>Atur Akun Pengguna</span></a></li>
			</ul>
		</nav>
	</div>
</div>
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Input Jaminan Kesehatan</h3>
			<div class="row">
				<div class="col-md-12">
					<!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
						</div>
						<div class="panel-body">
							<form action="<?php echo base_url('Jamkes/insertJamkes'); ?>" method="POST">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nama">Nama Jamkes</label>
									<input id="nama" name="nama_jamkes" type="text" class="form-control" placeholder="Nama" required="">
								</div>
								<div class="form-group">
									<label for="singkatan">Singkatan</label>
									<input id="singkatan" maxlength="16" name="singkatan" type="text" class="form-control" placeholder="Singkatan" style="width:30%" required="">
								</div>
							</div>
							<div class="col-md-12">
								<input class="btn btn-success btn-lg" type="submit" value="Input">
							</div>
						</div>
					</div>
					<!-- END INPUTS -->
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
