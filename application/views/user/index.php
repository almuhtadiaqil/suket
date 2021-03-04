<!--  -->
<!-- Navigation -->
<div class="logo">
	<img src="<?= base_url('assets/'); ?>/user/images/munding.png" alt="" style="width: 34px; height: auto;">
</div>
<a class="menu-toggle rounded" href="#">
	<i class="fa fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
	<ul class="sidebar-nav">
		<li class="sidebar-brand">
			<a class="smooth-scroll" href="#Header"></a>
		</li>
		<li class="sidebar-nav-item">
			<a class="smooth-scroll" href="#jenis">JENIS SURAT</a>
		</li>
		<li class="sidebar-nav-item">
			<a class="smooth-scroll" href="#riwayat">RIWAYAT SURAT</a>
		</li>
		<br><br><br>
		<li>
			<hr class="bg-light ml-3 mr-3 p-0">
		</li>
		<li class="sidebar-nav-item text-white text-center">
			<div class="row">
				<div class="col-md-3 col-lg-3 p-0">
					<img class="img-circle smooth-scroll ml-3 mr-3" src="<?= base_url('assets/'); ?>user/images/default.jpg" alt="" style="width: 40px; border-radius: 50%;">

				</div>
				<div class="col-md-9 col-lg-9 text-left p-0 mr-10">
					<strong><?= $user['nama']; ?></strong>
				</div>
			</div>
		</li>
		<li>
			<hr class="bg-light ml-3 mr-3">
		</li>
		<li class="sidebar-nav-item">
			<a class="btn-primary btn-sm ml-3 mb-1 mt-2 text-center p-1 mr-1 col-6" href="<?= base_url('user/profil'); ?>">Ubah Profil</a>
			<a class="btn-primary btn-sm ml-3 mb-1 mt-2 text-center p-1 mr-1 col-6" href="<?= base_url('user/ganti_password'); ?>">Ganti Password</a>
			<a class="btn-danger btn-sm ml-3 mb-1 mt-2 text-center p-1 col-6" href="<?= base_url('auth/logout'); ?>">Logout</a>
		</li>
</nav>

<!-- Header Starts -->
<section id="Banner" class="content-section">
	<div class="container content-wrap text-center">
		<h1>Selamat Datang</h1>
		<h3><?= $user['nama']; ?></h3>
		<h3>
			<em>di Website Persuratan Kelurahan Muarasanding</em>
		</h3>
		<a class="btn btn-primary btn-xl smooth-scroll" href="#tentang">JELAJAHI</a>
	</div>
	<div class="overlay"></div>
</section>
<!-- Header Ends -->

<!-- Tentang Kami -->
<section id="tentang" class="content-section">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-12">
				<div class="block-heading">
					<h2>TENTANG KAMI</h2>
				</div>
				<p class="lead">WEB Persuratan Kelurahan Muarasanding berfungsi untuk mempermudah warga Muarasanding dalam pembuatan surat, dengan mudah,cepat dan efisien.</p>
			</div>
		</div>
	</div>
</section>

<!-- Jenis Surat -->
<section id="jenis" class="content-section text-center">
	<div class="container">
		<div class="block-heading">
			<h2>JENIS SURAT</h2>
			<p>pilih jenis surat yang akan anda ajukan</p>
		</div>
		<div class="card-deck m-3">
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SKU</h5>
					<p>Surat Keterangan Usaha</p>
					<hr>
					<a href="<?= base_url('user/sk_usaha'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">BELUM</h5>
					<p>Surat Keterangan Domisili</p>
					<hr>
					<a href="<?= base_url('user/sk_kelakuanbaik'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">BELUM</h5>
					<p>Surat Keterangan Bepergian</p>
					<hr>
					<a href="<?= base_url('user/sk_bedanama'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">BELUM</h5>
					<p>Surat Keterangan Ahli Waris</p>
					<hr>
					<a href="<?= base_url('user/sk_waris'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
		</div>
		<div class="card-deck m-3">
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SKBB</h5>
					<p>Surat Keterangan Belum Bekerja</p>
					<hr>
					<a href="<?= base_url('user/sk_belumkerja'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SKBMR</h5>
					<p>Surat Keterangan Belum Memiliki Rumah</p>
					<hr>
					<a href="<?= base_url('user/sk_bmr'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SKBM</h5>
					<p>Surat Keterangan Belum Menikah</p>
					<hr>
					<a href="<?= base_url('user/sk_belummenikah'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SKBN</h5>
					<p>Surat Keterangan Beda Nama</p>
					<hr>
					<a href="<?= base_url('user/sk_bedanama'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
		</div>
		<div class="card-deck m-3">
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SKBP</h5>
					<p>Surat Keterangan Biaya Penguburan</p>
					<hr>
					<a href="<?= base_url('user/sk_bp'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SKKB</h5>
					<p>Surat Keterangan Kelakuan Baik</p>
					<hr>
					<a href="<?= base_url('user/sk_kelakuanbaik'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SKKH</h5>
					<p>Surat Keterangan Kehilangan</p>
					<hr>
					<a href="<?= base_url('user/sk_kehilangan'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SKJ</h5>
					<p>Surat Keterangan Janda</p>
					<hr>
					<a href="<?= base_url('user/sk_janda'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
		</div>
		<div class="card-deck m-3">
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SKPH</h5>
					<p>Surat Keterangan Penghasilan</p>
					<hr>
					<a href="<?= base_url('user/sk_penghasilan'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SKPTT</h5>
					<p>Surat Keterangan Pernikahan Tidak Tercatat</p>
					<hr>
					<a href="<?= base_url('user/sk_ptt'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SKRB</h5>
					<p>Surat Keterangan Rumah Rubuh</p>
					<hr>
					<a href="<?= base_url('user/sk_rumahrubuh'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">BELUM</h5>
					<p>Surat Keterangan Taksiran Harga Tanah</p>
					<hr>
					<a href="<?= base_url('user/sk_janda'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
		</div>
		<div class="card-deck m-3">
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">upload gambar</h5>
					<p>Coba Upload Gambar</p>
					<hr>
					<a href="<?= base_url('coba'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<!-- Riwayat Pengajuan -->
<section id="riwayat" class="content-section">
	<div class="container">
		<div class="block-heading">
			<h2>RIWAYAT PENGAJUAN</h2>
			<p>Pengajuan yang telah anda ajukan</p>
		</div>
	</div>
	<div class="container">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Surat Yang diajukan</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Status</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<th><b>Surat Keterangan Usaha</b></th>
				<?php
				$i = 1;
				foreach ($data_sku as $data_sku) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $data_sku['jenis_surat'] ?></td>
						<td><?= $data_sku['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($data_sku['status_surat'] == 'Diterima') ? 'success' : (($data_sku['status_surat'] == 'Ditolak' || $data_sku['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $data_sku['status_surat'] ?></span></td>
						<?php if ($data_sku['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_sku_batal/' . $data_sku['id_surat_sku']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				<tr>
					<th><b>Surat Keterangan Kelakuan Baik</b></th>
				</tr>
				<?php
				foreach ($data_skb as $data_skb) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $data_skb['jenis_surat'] ?></td>
						<td><?= $data_skb['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($data_skb['status_surat'] == 'Diterima') ? 'success' : (($data_skb['status_surat'] == 'Ditolak' || $data_skb['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $data_skb['status_surat'] ?></span></td>
						<?php if ($data_skb['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_skb_batal/' . $data_skb['id_surat_kelakuanbaik']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				<tr>
					<th><b>Surat Keterangan Ahli Waris</b></th>
				</tr>
				<tr>
					<th><b>Surat Keterangan Beda Nama</b></th>
				</tr>
				<?php
				foreach ($data_bedanama as $data_bedanama) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $data_bedanama['jenis_surat'] ?></td>
						<td><?= $data_bedanama['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($data_bedanama['status_surat'] == 'Diterima') ? 'success' : (($data_bedanama['status_surat'] == 'Ditolak' || $data_bedanama['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $data_bedanama['status_surat'] ?></span></td>
						<?php if ($data_bedanama['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_bedanama_batal/' . $data_bedanama['id_surat_bedanama']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				<tr>
					<th><b>Surat Keterangan Belum Kerja</b></th>
				</tr>
				<?php
				foreach ($data_belumkerja as $data_belumkerja) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $data_belumkerja['jenis_surat'] ?></td>
						<td><?= $data_belumkerja['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($data_belumkerja['status_surat'] == 'Diterima') ? 'success' : (($data_belumkerja['status_surat'] == 'Ditolak' || $data_belumkerja['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $data_belumkerja['status_surat'] ?></span></td>
						<?php if ($data_belumkerja['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_belumkerja_batal/' . $data_belumkerja['id_surat_belumkerja']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				<tr>
					<th><b>Surat Keterangan Belum Memiliki Rumah</b></th>
				</tr>
				<?php
				foreach ($data_bmr as $data_bmr) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $data_bmr['jenis_surat'] ?></td>
						<td><?= $data_bmr['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($data_bmr['status_surat'] == 'Diterima') ? 'success' : (($data_bmr['status_surat'] == 'Ditolak' || $data_bmr['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $data_bmr['status_surat'] ?></span></td>
						<?php if ($data_bmr['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_bmr_batal/' . $data_bmr['id_surat_bmr']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				<tr>
					<th><b>Surat Keterangan Belum Menikah</b></th>
				</tr>
				<?php
				foreach ($data_belummenikah as $data_belummenikah) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $data_belummenikah['jenis_surat'] ?></td>
						<td><?= $data_belummenikah['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($data_belummenikah['status_surat'] == 'Diterima') ? 'success' : (($data_belummenikah['status_surat'] == 'Ditolak' || $data_belummenikah['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $data_belummenikah['status_surat'] ?></span></td>
						<?php if ($data_belummenikah['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_belummenikah_batal/' . $data_belummenikah['id_surat_belummenikah']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				<tr>
					<th><b>Surat Keterangan Bepergian</b></th>
				</tr>
				<tr>
					<th><b>Surat Keterangan Biaya Penguburan</b></th>
				</tr>
				<?php
				foreach ($data_bp as $data_bp) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $data_bp['jenis_surat'] ?></td>
						<td><?= $data_bp['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($data_bp['status_surat'] == 'Diterima') ? 'success' : (($data_bp['status_surat'] == 'Ditolak' || $data_bp['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $data_bp['status_surat'] ?></span></td>
						<?php if ($data_bp['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_bp_batal/' . $data_bp['id_surat_bp']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				<tr>
					<th><b>Surat Keterangan Domisili</b></th>
				</tr>
				<tr>
					<th><b>Surat Keterangan Janda</b></th>
				</tr>
				<tr>
					<th><b>Surat Keterangan Kehilangan</b></th>
				</tr>
				<?php
				foreach ($data_kehilangan as $data_kehilangan) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $data_kehilangan['jenis_surat'] ?></td>
						<td><?= $data_kehilangan['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($data_kehilangan['status_surat'] == 'Diterima') ? 'success' : (($data_kehilangan['status_surat'] == 'Ditolak' || $data_kehilangan['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $data_kehilangan['status_surat'] ?></span></td>
						<?php if ($data_kehilangan['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_kehilangan_batal/' . $data_kehilangan['id_surat_kehilangan']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				<tr>
					<th><b>Surat Keterangan Pernikahan Tidak Tercatat</b></th>
				</tr>
				<?php
				foreach ($data_ptt as $data_ptt) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $data_ptt['jenis_surat'] ?></td>
						<td><?= $data_ptt['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($data_ptt['status_surat'] == 'Diterima') ? 'success' : (($data_ptt['status_surat'] == 'Ditolak' || $data_ptt['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $data_ptt['status_surat'] ?></span></td>
						<?php if ($data_ptt['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_ptt_batal/' . $data_ptt['id_surat_ptt']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
			</tbody>

			<!-- Modal -->
			<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="modalDetail" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalDetailTitle">Informasi</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Untuk melakukan pencetakan, silahkan datang ke bagian Tata Usaha Kantor Desa Cinunuk dengan menyebutkan Nama Lengkap Anda. <br><br>

							Berkas-berkas yang harus dibawa pada saat pengambilan Surat Pengantar Nikah (N1) adalah: <br>
							• Surat Persetujuan Dua Calon Pengantin <a href="<?= base_url('user/p_n4'); ?>">buat N4</a> <br>
							• Surat pengatar dari RT/RW <br>
							• Fotokopi KTP <br>
							• Fotokopi akta kelahiran atau ijazah terakhir <br>
							• Fotokopi kartu keluarga <br>
							• Pasfoto 2x3 = 3 lembar berlatar belakang biru <br>
							• pasfoto 3x4 = 4 lembar berlatar belakang biru <br>
							• Surat pernyataan belum pernah menikah (Bagi Anda yang belum pernah menikah ) <br>
							• Surat Izin Orang tua (Bagi anda yang masih dibawah umur, Laki-laki < 25th | Perempuan < 21th) <a href="<?= base_url('user/p_n5'); ?>">buat N5</a> <br>
								• Fotokopi Akta Cerai (Bagi Anda yang berstatus pernikahan Cerai Hidup ) <br>
								• Fotokopi Akta Kematian (Bagi Anda yang berstatus pernikahan Cerai Mati ) <br><br>

								Terima Kasih atas perhatiannya, silahkan datang kembali.
						</div>
					</div>
				</div>
			</div>

		</table>
	</div>
</section>

<footer class="footer text-center">
	<div class="container">
		<p class="text-muted small mb-0">Copyright © KKN UIN Bandung 2020</p>
		<p class="text-muted small mb-0">Desa Cinunuk Kec.Cileunyi Kab.Bandung</p>
	</div>
</footer>
