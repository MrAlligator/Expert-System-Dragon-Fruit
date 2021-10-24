<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="section-title">
                                    <h2>Buat Akun!</h2>
                                </div>
                                <form class="user" method="POST" action="<?= base_url('frontend/auth/register') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Masukkan Nama..." value="<?= set_value('name') ?>"> <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email..." value="<?= set_value('email') ?>"> <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Masukkan Kata Sandi..."> <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulang Kata Sandi...">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-user btn-block">
                                        Daftar Akun
                                    </button>
                                    <a href="<?= base_url('welcome') ?>" class="btn btn-primary btn-user btn-block">
                                        Kembali
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Lupa Kata Sandi?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('frontend/auth') ?>">Sudah Memiliki Akun? Masuk!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
</main><!-- End #main -->