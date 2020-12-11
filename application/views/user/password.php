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
                    <h2>Ganti Password</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-5">
    <div class="container text-center">
        <form action="<?= base_url('user/ganti_password/'); ?>" method="POST">
            <div class="container-fluid shadow p-3  mb-3 bg-white rounded">
                <div class="form-row">
                    <div class="form-group col-6">
                        <label>Password Baru</label>
                        <input type="password" name="password" class="form-control" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                    </div>
                </div>
                <button class="btn btn-success">Ganti</button>
                <div id="message" class="form-group col-4 " onfocus="passwordFocus()" onblur="passwordBlur()">
                    <p id="letter" class="invalid">Huruf Kecil</p>
                    <p id="capital" class="invalid">Huruf Kapital</p>
                    <p id="number" class="invalid">Angka</b></p>
                    <p id="length" class="invalid">Minimum 8 Karakter</p>
                </div>
            </div>
        </form>
    </div>
</section>
<script src="<?= base_url('assets/'); ?>/js/password.js"></script>