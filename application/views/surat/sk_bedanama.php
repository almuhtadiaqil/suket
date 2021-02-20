<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light ddn-bg-gradient">
	<div class="container p-1">
		<a href="<?= base_url('user'); ?>"><img src="images/logo.png" alt="" style="width: 34px; height: auto;"></a>
		<a href="<?= base_url('user'); ?>" class="btn float-right bg-primary btn-sm text-white"><strong><i class="fas fa-home mr-1"></i>Beranda</strong></a>
	</div>
</nav>
<form action="<?php echo base_url() . 'Surat/add_sk_bedanama'; ?>" method="post">
	<div class="row text-left">
		<div class="col-lg-12">
			<div class="block-heading">
				<h2>FORM SURAT KETERANGAN BEDA NAMA</h2>
			</div>
			<!-- Isian Form 1-->
			<div class="container-fluid shadow p-3  mb-3 bg-white rounded m-3">
				<p class="text-left" style="font-size: 25px;">Form 1 Identitas Diri</p>
				<hr>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama anda" value="<?= $user['nama']; ?>" required>
					</div>
					<input type="text" name="no_nik" class="form-control" id="no_nik" placeholder="Masukan NIK anda" value="<?= $user['no_nik']; ?>" hidden required>
				</div>
				<h3>Kartu Keluarga</h3>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Nama</label>
						<input type="text" name="nama_kk" class="form-control" id="nama_kk" placeholder="Nama Kartu Keluarga" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Tempat Lahir</label>
						<input type="text" name="tempat_lahir_kk" class="form-control" id="tempat" placeholder="Masukan Tempat Lahir Anda" required>
					</div>
					<div class="form-group col-md-3">
						<label>Tanggal Lahir</label>
						<input type="date" name="tanggal_lahir_kk" class="form-control" id="tgl" required>
					</div>
					<div class="form-group col-md-3">
						<label>Jenis Kelamin</label>
						<input name="jenis_kelamin_kk" id="jk" class="form-control" required>
					</div>
				</div>
				<h3>Kartu Tanda Penduduk</h3>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Nama</label>
						<input type="text" name="nama_ktp" class="form-control" id="nama_ktp" placeholder="Nama KTP" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Tempat Lahir</label>
						<input type="text" name="tempat_lahir_ktp" class="form-control" id="tempat" placeholder="Masukan Tempat Lahir Anda" required>
					</div>
					<div class="form-group col-md-3">
						<label>Tanggal Lahir</label>
						<input type="date" name="tanggal_lahir_ktp" class="form-control" id="tgl" required>
					</div>
					<div class="form-group col-md-3">
						<label>Jenis Kelamin</label>
						<input name="jenis_kelamin_ktp" id="jk" class="form-control" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Keperluan</label>
						<input type="text" name="keperluan" class="form-control" id="keperluan" placeholder="digunakan untuk persyaratan apa" required>
					</div>
				</div>
				<div class="text-center">
					<a href="<?= base_url('user') ?>" type="button" class="btn btn-danger mr-2"><i class="fas fa-times mr-2"></i>Batal</a>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPrint"><i class="fas fa-send mr-2"></i>Ajukan</button>
				</div>
				<div class="modal fade" id="modalPrint" tabindex="-1" role="dialog" aria-labelledby="modalPrint" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<i class="fas fa-send mb-4 mt-4" style="color: green; font-size:44px"></i>
								<h5>Apakah anda yakin data anda sudah benar ?</h5>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
								<button type="submit" class="btn btn-primary">Yakin</button>
							</div>
						</div>
					</div>
				</div>

</form>



<footer class="footer text-center">
	<div class="container">
		<p class="text-muted small mb-0">Copyright © Teknik Informatika UIN Bandung</p>
		<p class="text-muted small mb-0">Kelurahan Muarasanding Kecamatan Garut Kota Kabupaten Garut</p>
	</div>
</footer>
