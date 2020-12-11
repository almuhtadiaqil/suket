<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light ddn-bg-gradient">
  <div class="container p-1">
    <img src="<?= base_url('assets/'); ?>/user/images/logo.png" alt="" style="width: 34px; height: auto;">
    <a href="<?= base_url('user'); ?>" class="btn float-right bg-primary btn-sm text-white"><strong><i class="fas fa-home mr-1"></i>Home</strong></a>
  </div>
</nav>

<section class="mt-5">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-12">
        <div class="block-heading">
          <h2>UBAH PROFIL</h2>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mt-5">
  <div class="container text-center">
    <form action="<?= base_url('user/update/' . $user['no_nik']); ?>" method="POST">
      <div class="container-fluid shadow p-3  mb-3 bg-white rounded">
        <p class="text-left" style="font-size: 25px;">Form 1 Identitas Diri</p>
        <hr>

        <div class="form-row">
          <div class="form-group col-12">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama anda">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>NIK</label>
            <input class="form-control" name="no_nik" type="text" placeholder="Masukan nik anda" value="<?= $user['no_nik']; ?>" readonly>
          </div>
          <div class="form-group col-md-6">
            <label>Agama</label>
            <select name="agama" id="agama" class="form-control">
              <option selected>Islam</option>
              <option>Kristen</option>
              <option>Katholik</option>
              <option>Hindu</option>
              <option>Budha</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" id="tempat" placeholder="Masukan Tempat Lahir Anda" required>
          </div>
          <div class="form-group col-md-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" id="tgl" required>
          </div>
          <div class="form-group col-md-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jk" class="form-control">
              <option>Laki-Laki</option>
              <option>Perempuan</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label>Pekerjaan</label>
          <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Masukan Pekerjaan Anda" required>
        </div>
        <div class="form-group">
          <label>Kewarganegaraan</label>
          <input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan" placeholder="Masukan Kewarganegaraan Anda" required>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Provinsi</label>
            <select id="provinsi" name="provinsi" class="form-control">
              <option>Jawa Barat</option>
              <option>Jawa Timur</option>
              <option>Jawa Tengah</option>
              <option>Banten</option>
              <option>DKI Jakarta</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Kabupaten/Kota</label>
            <select id="kabupaten" name="kab_kota" class="form-control">
              <option>Kota Bandung</option>
              <option>Bandung</option>
              <option>Sumedang</option>
              <option>Majalengka</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Kecamatan</label>
            <select id="kecamatan" name="kecamatan" class="form-control">
              <option>Cileunyi</option>
              <option>Cicalengka</option>
              <option>Ibun</option>
              <option>Margahayu</option>
              <option>Pangalengan</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Kelurahan/Desa</label>
            <select id="desa" name="desa" class="form-control">
              <option>Cinunuk</option>
              <option>Cileunyi</option>
              <option>Cibiru Wetan</option>
              <option>Cimekar</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label>RT</label>
            <input type="number" name="rt" class="form-control" id="rt" placeholder="" required>
          </div>
          <div class="form-group col-md-3">
            <label>RW</label>
            <input type="number" name="rw" class="form-control" id="rw" placeholder="" required>
          </div>
          <div class="form-group col-md-6">
            <label>Kode Pos</label>
            <input type="number" name="kode_pos" class="form-control" id="kodepos" placeholder="Masukan Kode Pos" required>
          </div>
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <textarea class="form-control" name="alamat" id="alamat" rows="2" placeholder="Masukan Alamat Anda" required></textarea>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Status Pernikahan</label>
            <select id="sp" name="status_nikah" class="form-control">
              <option value="lajang">Lajang</option>
              <option value="cerai_hidup">Cerai Hidup</option>
              <option value="cerai_mati">Cerai Mati</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Status Hubungan dalam Keluarga</label>
            <select class="form-control" name="status_keluarga" type="text">
              <option value="kepala_keluarga">Kepala Keluarga</option>
              <option value="istri">Istri</option>
              <option value="anak">Anak</option>
              <option value="cucu">Cucu</option>
          </div>
        </div>
        <!-- end of isian form 1 -->
        <div class="form-group">
          <div class="form-group col-md-6">
            <label>Nama Ayah</label>
            <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Nama Ayah" required>
          </div>
          <div class="form-group col-md-6">
            <label>Nama Ibu</label>
            <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Nama Ibu" required>
          </div>
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>
  </div>
</section>

<footer class="footer text-center">
  <div class="container">
    <!-- <ul class="list-inline">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="javascript:void(0)">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="javascript:void(0)">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="javascript:void(0)">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
        </li>
      </ul> -->
    <p class="text-muted small mb-0">Copyright © KKN UIN Bandung 2020</p>
    <p class="text-muted small mb-0">Desa Cinunuk Kec.Cileunyi Kab.Bandung</p>
  </div>
</footer>