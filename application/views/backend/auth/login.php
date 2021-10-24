<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-lg-7">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <img src="<?= base_url('assets/img/spbuahnaga.png') ?>" alt="" width="300px" height="60px">
                  <br>
                  <br>
                  <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                </div>
                <?php echo $this->session->flashdata('message'); ?>
                <form class="user" method="POST" action="<?= base_url('backend/auth') ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan Email..." value="<?= set_value('email') ?>"> <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Kata Sandi..."> <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                  </div>
                  <button type="submit" class="btn btn-success btn-user btn-block">
                    Masuk
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
                  <a class="small" href="<?= base_url('backend/auth/register') ?>">Buat Akun Baru!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>