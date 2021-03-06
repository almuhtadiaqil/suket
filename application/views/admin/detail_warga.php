<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
            <div class="col-lg-8">
                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?= base_url('admin/profile'); ?>"><i class="fas fa-arrow-left"></i> Kembali </a>
                    </div>
                    <div class="card-body">
                        <?php foreach ($user as $user) : ?>
                         <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input class="form-control" type="text" id="nama" name="nama" value="<?php echo $user->nama; ?>"  />
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_nik">NIK</label>
                                    <input class="form-control" type="text" name="no_nik" id="no_nik" value="<?php echo $user->no_nik; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_kk">NKK</label>
                                    <input class="form-control" type="text" name="no_kk" id="no_kk" value="<?php echo $user->no_kk; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="text" name="password" id="password" value="<?php echo $user->password; ?>" />
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <input class="form-control" type="text" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $user->jenis_kelamin; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <input class="form-control" type="text" id="agama" name="agama" value="<?php echo $user->agama; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input class="form-control" type="text"  id="tempat_lahir" name="tempat_lahir" value="<?php echo $user->tempat_lahir; ?>" required/>
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Tanggal Lahir</label>
                                    <input class="form-control" type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $user->tanggal_lahir; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="form-group">
                                <label for=".....">Pendidikan</label>
                                <input class="form-control" type="text" id="pendidikan" name="pendidikan" value="<?php echo $user->pendidikan; ?>" />
                                <div class="invalid-feedback">

                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label for=".....">Pekerjaan</label>
                                <input class="form-control" type="text" name="pekerjaan" id="pekerjaan" value="<?php echo $user->pekerjaan; ?>" />
                                <div class="invalid-feedback">

                                </div>
                            </div>
                         
                        <div class="form-group">
                            <label for=".....">Kewarganegaraan</label>
                            <input class="form-control" type="text" id="kewarganegaraan" name="kewarganegaraan" value="<?php echo $user->kewarganegaraan; ?>" />
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for=".....">Alamat</label>
                            <textarea class="form-control" type="textarea" name="alamat" id="alamat" value="<?php echo $user->alamat; ?>" min="0" style="height : 100px"></textarea>
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="....">RT</label>
                                    <input class="form-control" type="text" name="RT" id="RT" value="<?php echo $user->RT; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="....">RW</label>
                                    <input class="form-control" type="text" name="RW" id="RW" value="<?php echo $user->RW; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Desa</label>
                                    <input class="form-control" type="text" name="desa" id="desa" value="<?php echo $user->desa; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Kecamatan</label>
                                    <input class="form-control" type="text" name="kecamatan" id="kecamatan" value="<?php echo $user->kecamatan; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Kabupaten/Kota</label>
                                    <input class="form-control" type="text" name="kab_kota" id="kab_kota" value="<?php echo $user->kab_kota; ?>"  />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Provinsi</label>
                                    <input class="form-control" type="text" name="provinsi" id="provinsi" value="<?php echo $user->provinsi; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Kode Pos</label>
                                    <input class="form-control" type="text" name="kode_pos" id="kode_pos" value="<?php echo $user->kode_pos; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for=".....">Kepala Keluarga</label>
                            <input class="form-control" type="text" name="kepala_keluarga" id="kepala_keluarga" value="<?php echo $user->kepala_keluarga; ?>" />
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for=".....">Status Pernikahan</label>
                            <input class="form-control" type="text" id="status_nikah" name="status_nikah" value="<?php echo $user->status_nikah; ?>" />
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for=".....">Status Hubungan dalam Keluarga</label>
                            <input class="form-control" type="text" id="status_keluarga" name="status_keluarga" value="<?php echo $user->status_keluarga; ?>" />
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Nama Ayah</label>
                                    <input class="form-control" type="text" name="nama_ayah" id="nama_ayah" value="<?php echo $user->nama_ayah; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="....">Nama Ibu</label>
                                    <input class="form-control" type="text" name="nama_ibu" id="nama_ibu" value="<?php echo $user->nama_ibu; ?>" />
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>
                        </div>    
                        </div>
                        <?php endforeach; ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <a class="btn btn-primary m-1" href="<?= base_url('admin/profile'); ?>">Batal</a>
                                            &emsp;
                                            <a class="btn btn-success m-1 text-white" data-toggle="modal" data-target="#staticModal" data-popup="tooltip" data-placement="top" title="Simpan Data"> Simpan </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.container-fluid -->

    <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static" style="position:absolute;left:0%; top:60%;">
        <div class="modal-dialog modal-sm" role="document">
             <form action="<?= base_url('tambah_warga/update'); ?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">Konfirmasi Penyimpanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Yakin Menyimpan Data Terbaru ?
                    </p>
                </div>
                <input type="hidden" name="action" id="act_value">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success" value="Simpan">Ya, Simpan</button>
                </div>
            </div>
        </form>
        </div>
    </div>