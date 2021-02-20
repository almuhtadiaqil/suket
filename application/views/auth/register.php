<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin my-5">
				<div class="card-body text-center">
					<img src="<?= base_url('assets/'); ?>/user/images/munding.png" alt="" style="width:70px; height:auto;" class="text-center pb-3">
					<h5 class="card-title text-center">Pendaftaran Akun</h5>
					<?= $this->session->flashdata('message'); ?>
					<form class="user form-signin text-left" action="<?= base_url('auth/regis'); ?>" method="POST">

						<div class="form-label-group ">
							<input type="no_kk" class="form-control" name="no_kk" id="no_kk" placeholder="" value="<?= set_value('no_kk'); ?>">
							<label for="no_kk">No. KK</label>
							<div class="error-message">
								<?= form_error('no_kk', '<small 
                                        class="text-danger">', '</small>'); ?>
							</div>
						</div>

						<div class="form-label-group">
							<input type="no_nik" class="form-control " name="no_nik" id="no_nik" placeholder="" value="<?= set_value('no_nik'); ?>">
							<label for="no_nik">NIK</label>
							<div class="error-message">
								<?= form_error('no_nik', '<small 
                                        class="text-danger">', '</small>'); ?>
							</div>
						</div>

						<div class="form-label-group">
							<input type="nama" class="form-control" name="nama" id="nama" placeholder="" value="<?= set_value('nama'); ?>" required>
							<label for="nama">Nama Lengkap</label>
						</div>

						<div class="form-label-group">
							<input type="jenis_kelamin" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="" value="<?= set_value('jenis_kelamin'); ?>" required>
							<label for="jenis_kelamin">Jenis Kelamin</label>
						</div>

						<div class="form-row">
							<div class="form-label-group col-md-4">
								<input type="tempat_lahir" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="" value="<?= set_value('tempat_lahir'); ?>">
								<label for="tempat_lahir">Tempat Lahir</label>
							</div>

							<div class="form-label-group col-md-8">
								<input type="date" name="tanggal_lahir" class="form-control" id="tgl" required value="<?= set_value('tanggal_lahir'); ?>">
								<label>Tanggal Lahir</label>
							</div>
						</div>

						<div class="form-row">
							<div class="form-label-group col-md-6">
								<input type="agama" class="form-control" name="agama" id="agama" value="<?= set_value('agama'); ?>" placeholder="">
								<label for="agama">Agama</label>
							</div>

							<div class="form-label-group col-md-6">
								<input type="pekerjaan" class="form-control" name="pekerjaan" id="pekerjaan" value="<?= set_value('pekerjaan'); ?>" placeholder="">
								<label for="pekerjaan">Pekerjaan</label>
							</div>
						</div>

						<div class="form-row">
							<div class="form-label-group col-md-3">
								<input type="number" name="rt" class="form-control" id="rt" placeholder="" required value="<?= set_value('rt'); ?>">
								<label>RT</label>
							</div>

							<div class="form-label-group col-md-3">
								<input type="number" name="rw" class="form-control" id="rw" placeholder="" required value="<?= set_value('rw'); ?>">
								<label>RW</label>
							</div>

							<div class="form-label-group col-md-6">
								<input type="desa" class="form-control" name="desa" id="desa" value="<?= set_value('desa'); ?>" placeholder="">
								<label for="desa">Desa / Kelurahan</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-label-group col-md-6">
								<input type="kecamatan" class="form-control" name="kecamatan" id="kecamatan" value="<?= set_value('kecamatan'); ?>" placeholder="">
								<label for="kecamatan">Kecamatan</label>
							</div>
							<div class="form-label-group col-md-6">
								<input type="kab_kota" class="form-control" name="kab_kota" id="kab_kota" value="<?= set_value('kab_kota'); ?>" placeholder="">
								<label for="kab_kota">Kabupaten / Kota</label>
							</div>
						</div>

						<div class="form-label-group">
							<input type="alamat" class="form-control" name="alamat" id="alamat" placeholder="" value="<?= set_value('alamat'); ?>" required>
							<label for="alamat">Alamat</label>
						</div>

						<div class="form-label-group">
							<input type="password" class="form-control" name="password" id="password" placeholder="">
							<label for="password">Masukan Password</label>
							<div class="error-message">
								<?= form_error('password', '<small 
                                        class="text-danger">', '</small>'); ?>
							</div>
						</div>
						<button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase">Sign In</button>
						<hr class="my-4">
						<p class="text-center">Sudah punya akun ? Sign in<a href="<?= base_url('auth'); ?>" class="ml-2"><i class="fas fa-arrow-right"></i></a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
