<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?= base_url('admin/profile'); ?>"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <div class="card-body">

                    <form action="<?= base_url('Tambah_warga/add'); ?>" method="post">
                        <div class="form-group">
                            <label>No. Kartu Keluarga</label>
                            <input class="form-control" type="text" name="no_kk" id="no_kk" required />
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="form-group">
                            <label>NIK</label>
                            <input class="form-control" type="text" name="no_nik" id="no_nik" required />
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input class="form-control" type="text" name="nama" id="nama" required />
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="....">Jenis Kelamin</label>
                                <select class="custom-select" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="0">Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="....">Agama</label>
                                <select class="custom-select" id="agama" name="agama">
                                    <option value="0">Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Aliran Kepercayaan">Aliran Kepercayaan</option>
                                </select>
                            </div>
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Tempat Lahir</label>
                                    <input class="form-control" type="text" id="tempat_lahir" name="tempat_lahir" required />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Tanggal Lahir</label>
                                    <input class="form-control type=" date" id="datepicker" placeholder="yyyy-mm-dd" name="tanggal_lahir" required />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for=".....">Pendidikan</label>
                            <select class="custom-select" id="pendidikan" name="pendidikan">
                                <option value="0">Pilih Pendidikan</option>
                                <option value="Belum Sekolah">Belum Sekolah</option>
                                <option value="Belum Tamat SD Sederajat">Belum Tamat SD Sederajat</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SLTP Sederajat">SLTP Sederajat</option>
                                <option value="SLTA Sederajat">SLTA Sederajat</option>
                                <option value="Diploma IV / Strata I">Diploma IV / Strata I</option>
                                <option value="Akademi / Diploma III">Akademi / Diploma III</option>
                                <option value="Diploma I / II">Diploma I / II</option>
                                <option value="Strata II">Strata II</option>
                                <option value="Strata III">Strata III</option>
                            </select>
                            <div class="invalid-feedback">

                            </div>
                        </div>


                        <div class="form-group">
                            <label for=".....">Pekerjaan</label>
                            <input class="form-control type=" text" name="pekerjaan" id="pekerjaan" required />
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for=".....">Kewarganegaraan</label>
                            <select class="custom-select" id="kewarganegaraan" name="kewarganegaraan">
                                <option value="0">Pilih Kewarganegaraan</option>
                                <option value="WNI">Warga Negara Indonesia (WNI)</option>
                                <option value="WNA">Warga Negara Asing (WNA)</option>
                            </select>
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Provinsi</label>
                                    <input class="form-control" type=" text" name="provinsi" id="provinsi" required />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Kabupaten/Kota</label>
                                    <input class="form-control" type="text" name="kab_kota" id="kab_kota" required />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Kecamatan</label>
                                    <input class="form-control" type=" text" name="kecamatan" id="kecamatan" required />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Desa</label>
                                    <input class="form-control" type=" text" name="desa" id="desa" required />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>RT</label>
                                    <br>
                                    <select class="custom-select" name="RT" id="RT">
                                        <option value="0">Pilih RT</option>
                                        <option value="1">RT 01</option>
                                        <option value="2">RT 02</option>
                                        <option value="3">RT 03</option>
                                        <option value="4">RT 04</option>
                                        <option value="5">RT 05</option>
                                        <option value="6">RT 06</option>
                                        <option value="7">RT 07</option>
                                        <option value="8">RT 08</option>
                                        <option value="9">RT 09</option>
                                        <option value="10">RT 10</option>
                                        <option value="11">RT 11</option>
                                        <option value="12">RT 12</option>
                                        <option value="13">RT 13</option>
                                        <option value="14">RT 14</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for=".....">RW</label>
                                    <br>
                                    <select class="custom-select" name="RW" id="RW">
                                        <option value="0">Pilih RW</option>
                                        <option value="01">RW 01</option>
                                        <option value="02">RW 02</option>
                                        <option value="03">RW 03</option>
                                        <option value="04">RW 04</option>
                                        <option value="05">RW 05</option>
                                        <option value="06">RW 06</option>
                                        <option value="07">RW 07</option>
                                        <option value="08">RW 08</option>
                                        <option value="09">RW 09</option>
                                        <option value="10">RW 10</option>
                                        <option value="11">RW 11</option>
                                        <option value="12">RW 12</option>
                                        <option value="13">RW 13</option>
                                        <option value="14">RW 14</option>
                                        <option value="15">RW 15</option>
                                        <option value="16">RW 16</option>
                                        <option value="17">RW 17</option>
                                        <option value="18">RW 18</option>
                                        <option value="19">RW 19</option>
                                        <option value="20">RW 20</option>
                                        <option value="21">RW 21</option>
                                        <option value="22">RW 22</option>
                                        <option value="23">RW 23</option>
                                        <option value="24">RW 24</option>
                                        <option value="25">RW 25</option>
                                        <option value="26">RW 26</option>
                                        <option value="27">RW 27</option>
                                        <option value="28">RW 28</option>
                                        <option value="29">RW 29</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Kode Pos</label>
                                    <input class="form-control" type=" text" name="kode_pos" id="kode_pos" required />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat" min="0" style="height : 100px" required></textarea>
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for=".....">Kepala Keluarga</label>
                            <input class="form-control" type=" text" name="kepala_keluarga" id="kepala_keluarga" required />
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for=".....">Status Pernikahan</label>
                            <select class="custom-select" id="status_nikah" name="status_nikah">
                                <option value="0">Pilih Status</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Cerai Hidup">Cerai Hidup</option>
                                <option value="Cerai Mati">Cerai Mati</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=".....">Status Hubungan dalam Keluarga</label>
                            <select class="custom-select" id="status_keluarga" name="status_keluarga">
                                <option value="0">Pilih Status</option>
                                <option value="Kepala Keluarga">Kepala Keluarga</option>
                                <option value="Istri">Istri</option>
                                <option value="Anak">Anak</option>
                                <option value="Cucu">Cucu</option>
                                <option value="Orang Tua">Orang Tua</option>
                                <option value="Mertua">Mertua</option>
                                <option value="Family Lain">Family Lain</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Nama Ayah</label>
                                    <input class="form-control" required type=" text" name="nama_ayah" id="nama_ayah" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Nama Ibu</label>
                                    <input class="form-control" required type=" text" name="nama_ibu" id="nama_ibu" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>


                        <button class="btn btn-primary" type="submit" name="btn" value="Simpan">Simpan</button>
                    </form>

                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->