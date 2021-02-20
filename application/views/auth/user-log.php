<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body text-center">
                    <img src="<?= base_url('assets/'); ?>/user/images/munding.png" alt="" style="width:70px; height:auto;" class="text-center pb-3">
                    <h5 class="card-title text-center">Masuk sebagai Masyarakat</h5>
                    <?= $this->session->flashdata('message'); ?>
                    <form class="user form-signin text-left" action="<?= base_url('auth'); ?>" method="POST">

                        <div class="form-label-group">
                            <input type="no_kk" class="form-control" name="no_kk" id="no_kk" placeholder="Masukkan No. KK">
                            <label for="no_kk">Masukan No. KK</label>
                            <div class="error-message">
                                <?= form_error('no_kk', '<small 
                                        class="text-danger">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-label-group">
                            <input type="no_nik" class="form-control " name="no_nik" id="no_nik" placeholder="Masukkan NIK" value="<?= set_value('no_nik'); ?>">
                            <label for="no_nik">Masukan NIK</label>
                            <div class="error-message">
                                <?= form_error('no_nik', '<small 
                                        class="text-danger">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-label-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" value="<?= set_value('password'); ?>">
                            <label for="password">Masukan Password</label>
                            <div class="error-message">
                                <?= form_error('password', '<small 
                                        class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase">Sign In</button>
                        <hr class="my-4">
                        <p class="text-center">Daftar Akun<a href="<?= base_url('auth/regis'); ?>" class="ml-2"><i class="fas fa-arrow-right"></i></a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>