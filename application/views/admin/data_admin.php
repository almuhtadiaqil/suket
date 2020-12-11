<html>

<head>
	<meta charset="urf-8">
	<link rel="stylesheet" href="https://stackpath.bootsrapcdn.com/bootsrap/4.5.2/css/bootsrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

</head>

<body>

	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800"> Data Admin </h1>

		<div class="row">
			<div class="col-md-7">
				<a class="btn btn-primary" href="<?= base_url('admin/tambah_admin') ?>">+ Tambah Admin</a>
			</div>
		</div>

		<br>


		<div class="card mb-3">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-striped table bordered mydatatable" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama Lengkap</th>
								<th scope="col">Jabatan</th>
								<th scope="col">No HP</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$i = 1;
							foreach ($admin as $admin) : ?>
								<tr>
									<th scope="col"><?= $i++; ?></th>
									<th scope="col"><?= $admin['nama_lengkap']; ?></th>
									<th scope="col"><?= $admin['jabatan']; ?></th>
									<th scope="col"><?= $admin['no_hp']; ?></th>
									<th scope="col"><a href="<?= base_url('admin/detail_admin/' . $admin['id']) ?>" class="btn btn-success m-1"> Detail <i class="fas fa-search"></i></a> </th>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>



	</div>
	<!-- /.container-fluid -->

	</div>
	<!-- End of Main Content -->


	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src="https://stachpath.bootsrapcdn.com/bootsrap/4.5.2/js/bootsrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$('.mydatatable').DataTable();
	</script>



</body>

</html>