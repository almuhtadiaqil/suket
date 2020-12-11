<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body text-center">
                <img src="<?= base_url('assets/'); ?>/user/images/logo.png" alt="" style="width:70px; height:auto;" class="text-center pb-3">
            <h5 class="card-title text-center">Masuk sebagai Admin</h5>
            <?= $this->session->flashdata('message'); ?>
            <form class="user form-signin text-left" action="<?= base_url('auth/adlog'); ?>" method="POST">

                <div class="form-label-group">
                <input type="username" class="form-control " name="username" id="username" placeholder="Masukkan Username" value="<?= set_value('username'); ?>">
                    <label for="username">Masukan Username</label>
                    <div class="error-message">
                            <?= form_error('username', '<small 
                                        class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-label-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
                    <label for="password">Masukan Password</label>
                    <div class="error-message">
                            <?= form_error('password', '<small 
                                        class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase">Sign In</button>
                <hr class="my-4">
                <p class="text-center">Login sebagai Masyarakat ? <a href="<?= base_url('auth'); ?>" class="ml-2"><i class="fas fa-arrow-right"></i></a></p>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>