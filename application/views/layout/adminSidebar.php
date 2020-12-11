<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker3.css')?>"/>
<!-- Sidebar <link rel="stylesheet" href="<?php echo base_url() ?>admin/login/css/style.css"> -->
<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark shadow accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<br><br>
	<a class="sidebar-brand d-flex align-items-center justify-content-center;" href="<?= base_url('admin'); ?>"><img class="img-fluid" src=" <?= base_url('assets/admin/img/logo.png') ?> " style="width: 130px; height: 116px; margin-left: 30px; top: 50px; right: 100px; position: center">
		<div class="sidebar-brand-icon"></div>
		<div class="sidebar-brand-text mx-3"></div>
	</a>

	<!-- Divider 
	<hr class="sidebar-divider">-->

	<br><br>

	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('admin'); ?>">
			<i class="fas fa-home" style="color: #000000"></i>
			<span style="color: #000000"> Homepage</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Profile -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('admin/profile'); ?>">
			<i> <img src=" <?= base_url('assets/admin/img/group.svg') ?> " style="height : 24px; width :18.41px"> </i>
			<span style="color: #000000">Data Warga</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Profile -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('admin/data_admin'); ?>">
			<i class="fas fa-fw fa-user" style="color: #000000"></i>
			<span style="color: #000000">Data Admin</span></a>
	</li>


	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Profile -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('admin/menu'); ?>">
			<i> <img src="<?= base_url('assets/admin/img/folder (1).svg') ?>" style="height : 24px; width :18.41px"> </i>
			<span style="color: #000000">Data Rekap</span></a>
	</li>


	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Profile -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('auth/adlogout'); ?>">
			<i class="fas fa-fw fa-sign-out-alt" style="color: #000000"></i>
			<span style="color: #000000">Logout</span></a>
	</li>


	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>"></script>
    <script>
        $(document).ready(function () {
            $('.tanggal').datepicker({
                format: "yyyy-mm-dd",
                autoclose:true
            });
        });
    </script>