<html>
	<head>
		<meta charset="urf-8">
		<link rel = "stylesheet" href= "https://stackpath.bootsrapcdn.com/bootsrap/4.5.2/css/bootsrap.min.css">
		<link rel = "stylesheet" href= "https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
		
	</head>
	
	<body>
		

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> Data Rekap </h1>

    <div class="row">

        <div class="col-md-4">
            <select class="custom-select">
                <option value="0">Pengajuan Surat</option>
                <option value="1">Pendaftaran Akun</option>
            </select>
        </div>
    </div>
	
	<br>


    <div class="card mb-3">

        <div class="card-body">
			<h1 class="h3 mb-4 text-gray-800">SURAT N1</h1>
            <div class="table-responsive" style="overflow-x: hidden;">
                <table class="table table-striped table bordered mydatatable" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th scope="col">No</th>
                            <th scope="col">ID Surat</th>
                            <th scope="col">Jenis Pengajuan</th>
                            <th scope="col">Pengaju</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($surat_n1 as $surat_n1) : ?>
                            <tr>
                                <th scope="col"><?= $i++; ?></th>
                                <th scope="col"><?= $surat_n1['id_surat_n1']; ?></th>
                                <th scope="col"><?= $surat_n1['jenis_surat']; ?></th>
                                <th scope="col"><?= $surat_n1['nama']; ?></th>
                                <th scope="col"><?= $surat_n1['tgl_ajukan_surat']; ?></th>
                                <th scope="col"><span class="badge badge-<?= ($surat_n1['status_surat'] == "Disetujui") ? 'success' : (($surat_n1['status_surat'] == 'Ditolak') ? 'danger' : 'warning');  ?>">
                                        <?= $surat_n1['status_surat']; ?> <i class="fas fa-check-circle"></i> </span></th>
                                <th scope="col"> <a target="_blank"  href="<?= base_url('/Cetak_n1/index/' . $surat_n1['id_surat_n1']); ?>" class="btn btn-success m-1 " name="print" id="print"> Print <i class="fas fa-print"></i> </th>
                                </th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
	
	<br>
	
	    <div class="card mb-3">

        <div class="card-body">
			<h1 class="h3 mb-4 text-gray-800">SURAT N6</h1>
            <div class="table-responsive" style="overflow-x: hidden;">
                <table class="table table-striped table bordered mydatatable" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th scope="col">No</th>
                            <th scope="col">ID Surat</th>
                            <th scope="col">Jenis Pengajuan</th>
                            <th scope="col">Pengaju</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
					    <?php
                        $i = 1;
                        foreach ($surat_n6 as $surat_n6) : ?>
                            <tr>
                                <th scope="col"><?= $i++; ?></th>
                                <th scope="col"><?= $surat_n6['id_surat_n6']; ?></th>
                                <th scope="col"><?= $surat_n6['jenis_surat']; ?></th>
                                <th scope="col"><?= $surat_n6['nama']; ?></th>
                                <th scope="col"><?= $surat_n6['tgl_ajukan_surat']; ?></th>
                                <th scope="col"><span class="badge badge-<?= ($surat_n6['status_surat'] == "Disetujui") ? 'success' : (($surat_n6['status_surat'] == 'Ditolak') ? 'danger' : 'warning');  ?>">
                                        <?= $surat_n6['status_surat']; ?> <i class="fas fa-check-circle"></i> </span></th>
                                <th scope="col"> <a target="_blank"  href="<?= base_url('/Cetak_n6/index/' . $surat_n6['id_surat_n6']); ?>" class="btn btn-success m-1 " name="print" id="print"> Print <i class="fas fa-print"></i>   </th>
                                </th>
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

    <script src = "https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src = "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src = "https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src = "https://stachpath.bootsrapcdn.com/bootsrap/4.5.2/js/bootsrap.min.js"></script>
	<script src = "https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$('.mydatatable').DataTable();
	</script>
    
    

	</body>
</html>


<!-- End of Main Content -->