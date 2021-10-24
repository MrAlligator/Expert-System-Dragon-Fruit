        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-8">
                    <?php echo $this->session->flashdata('message'); ?>
                    <form action="<?php echo site_url('backend/admin/profile/editpass') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="password_lama" class="col-sm-2 col-form-label">Password Lama</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password_lama" name="password_lama"><?= form_error('password_lama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password_baru" class="col-sm-2 col-form-label">Password Baru</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password_baru" name="password_baru"><?= form_error('password_baru', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="konfirm_pass" class="col-sm-2 col-form-label">Konfirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="konfirm_pass" name="konfirm_pass"><?= form_error('konfirm_pass', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Ubah Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->