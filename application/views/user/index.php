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
        <a href="<?php base_url('Coba/index'); ?>" class="btn btn-primary">COBA</a>
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
                <p class="lead">WEB Persuratan Kelurahan Muarasanding berfungsi untuk mempermudah warga cinunuk dalam pembuatan surat, dengan mudah,cepat dan efisien.</p>
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
        <div class="card-deck">

            <div class="card pt-4">
                <img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
                <div class="card-body">
                    <h5 class="card-title">SURAT KETERANGAN USAHA</h5>
                    <p>Pengantar Nikah dari Kepala Desa Cinunuk</p>
                    <hr>
                    <a href="<?= base_url('user/sk_usaha'); ?>" class="btn btn-primary">BUAT</a>
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
                                <a href="<?= base_url('Tambah_warga/update_n1_batal/' . $data_sku['id']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
                            </td>
                        <?php else : ?>
                            <td>
                                <button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>

                <!-- <tr>
                    <th scope="row">2</th>
                    <td>Surat N4</td>
                    <td>02/08/2020</td>
                    <td><span class="badge badge-warning text-white">pending</span></td>
                    <td>
                        <button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
                        <button class="btn btn-sm bg-danger text-white"><i class="far fa-times-circle"></i> Batalkan</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Surat N5</td>
                    <td>02/08/2020</td>
                    <td><span class="badge badge-danger">dibatalkan</span></td>
                    <td>
                        <button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
                        <button class="btn btn-sm bg-danger text-white"><i class="far fa-times-circle"></i> Batalkan</button>
                    </td>
                </tr> -->
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