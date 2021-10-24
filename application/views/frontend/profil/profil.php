    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2><?= $title ?></h2>
                </div>

                <div class="row content">
                    <div class="col-md">
                        <?php echo $this->session->flashdata('message'); ?>
                    </div>
                </div>
                <div class="row content">
                    <div class="col-md">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="<?php echo base_url('assets/img/userimage/') . $user['foto_user']; ?>" class="card-img">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $user['name']; ?></h5>
                                        <p class="card-text"><small class="text-muted">Joined Since <?php echo date('d F Y', $user['date_created']); ?></small></p>
                                        <a href="<?= base_url('frontend/profile/editprof') ?>" class="btn btn-primary btn-user btn-block">
                                            Edit Profil
                                        </a>
                                        <a href="" class="btn btn-primary btn-user btn-block" data-toggle="modal" data-target="#exampleModal">
                                            Edit Password
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->
    </main><!-- End #main -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('frontend/profile/editpass') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="password" class="form-control" id="password_lama" name="password_lama" placeholder="Password Lama"><?= form_error('password_lama', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password_baru" name="password_baru" placeholder="Password Baru"><?= form_error('password_baru', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="konfirm_pass" name="konfirm_pass" placeholder="Konfirmasi Password"><?= form_error('konfirm_pass', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>