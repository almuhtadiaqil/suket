<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light ddn-bg-gradient">
	<div class="container p-1">
		<a href="<?= base_url('user'); ?>"><img src="images/logo.png" alt="" style="width: 34px; height: auto;"></a>
		<a href="<?= base_url('user'); ?>" class="btn float-right bg-primary btn-sm text-white"><strong><i class="fas fa-home mr-1"></i>Beranda</strong></a>
	</div>
</nav>
<form action="<?= base_url('coba/gambar'); ?>" method="post" enctype="multipart/form-data">
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
					<div class="form-group">
						<label for="">Upload Gambar</label>
						<input type="file" name="gambar">
					</div>
					<div class="form-group">
						<label for="">Upload Gambar</label>
						<input type="file" name="foto">
					</div>
				</div>
				<button type="submit" class="btn btn-success"><i class="fas fa-send mr-2"></i>Ajukan</button>
			</div>

		</div>
	</div>
</form>
<div class="container-fluid shadow p-3  mb-3 bg-white rounded m-3">
	<table class=" table table-hover">
		<thead>
			<tr>
				<th>NO</th>
				<th>Gambar</th>
				<th>foto</th>
			</tr>
		</thead>
		<?php $i = 1;
		foreach ($gambar as $gambar) : ?>
			<tbody>
				<tr>
					<td><?= $i++; ?></td>
					<td><img src="<?= base_url('uploads/1/') . $gambar['gambar']; ?>" alt=""></td>
					<td><img src="<?= base_url('uploads/2/') . $gambar['foto']; ?>" alt=""></td>
				</tr>
			</tbody>
		<?php endforeach; ?>
	</table>
</div>
