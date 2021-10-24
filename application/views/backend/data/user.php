        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
                <?php if (isset($user['email']) && $user['role_id'] == 1) : ?>
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                            </div>
                            <div class="col-md-2">
                                <a href="" class="btn btn-success btn-icon-split pull-right" data-toggle="modal" data-target="#exampleModal">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Tambah Data</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="50px">No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th width="100px">Foto User</th>
                                        <th width="100px">Hak Akses</th>
                                        <th width="100px">Perintah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pengguna as $user) : ?>
                                        <tr>
                                            <td>
                                                <?php
                                                echo ++$start;
                                                ?>
                                            </td>
                                            <td>
                                                <?= $user->name ?>
                                            </td>
                                            <td>
                                                <?= $user->email ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo base_url('assets/img/userimage/') . $user->foto_user ?>" alt="" width="100px">
                                            </td>
                                            <td>
                                                <?php
                                                if ($user->role_id == 1) {
                                                    echo "Administrator";
                                                } else if ($user->role_id == 2) {
                                                    echo "Pakar";
                                                } else if ($user->role_id == 3) {
                                                    echo "Petani / User";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a onclick="resetConfirm('<?= site_url('backend/data/user/resetpass/' . $user->id_user) ?>')" href="#!" class="badge badge-warning"><i class="fas fa-recycle"></i> Reset</a>
                                                <a onclick="deleteConfirm('<?= site_url('backend/data/user/deleteus/' . $user->id_user) ?>')" href="#!" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="50px">No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th width="100px">Foto User</th>
                                        <th width="100px">Hak Akses</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pengguna as $user) : ?>
                                        <tr>
                                            <td>
                                                <?php
                                                echo ++$start;
                                                ?>
                                            </td>
                                            <td>
                                                <?= $user->name ?>
                                            </td>
                                            <td>
                                                <?= $user->email ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo base_url('assets/img/userimage/') . $user->foto_user ?>" alt="" width="100px">
                                            </td>
                                            <td>
                                                <?php
                                                if ($user->role_id == 1) {
                                                    echo "Administrator";
                                                } else if ($user->role_id == 2) {
                                                    echo "Pakar";
                                                } else if ($user->role_id == 3) {
                                                    echo "Petani / User";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
        <!-- /.container-fluid -->
        <script>
            function deleteConfirm(url) {
                $('#btn-delete').attr('href', url);
                $('#deleteModal').modal();
            }

            function resetConfirm(url) {
                $('#btn-reset').attr('href', url);
                $('#resetModal').modal();
            }
        </script>

        <?= $this->pagination->create_links() ?>

        </div>
        <!-- End of Main Content -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Gejala</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form1" action="<?= site_url('backend/data/user') ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name"><?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"><?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="hak">Hak Akses</label>
                                    <select class="form-control" id="hak" name="hak" onchange="tampilkan();"><?= form_error('hak', '<small class="text-danger pl-3">', '</small>') ?>
                                        <option selected disabled value="">Pilih...</option>
                                        <option value="1">Administrator</option>
                                        <option value="2">Pakar</option>
                                        <option value="3">Petani / User</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" readonly><?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="show">Lihat</label><br>
                                    <input type="checkbox" id="show" onclick="myFunction()">
                                </div>
                            </div>
                            <div class="form-row" hidden>
                                <div class="form-group col-md-5">
                                    <input type="text" class="form-control" id="foto" name="foto" readonly>
                                </div>
                            </div>
                        </div>
                        <script>
                            function tampilkan() {
                                var role = document.getElementById("form1").hak.value;
                                if (role == "1") {
                                    document.getElementById("password").value = 'admin1234';
                                    document.getElementById("foto").value = 'administrator.png';
                                } else if (role == "2") {
                                    document.getElementById("password").value = 'pakar1234';
                                    document.getElementById("foto").value = 'expert.png';
                                } else if (role == "3") {
                                    document.getElementById("password").value = 'user1234';
                                    document.getElementById("foto").value = 'farmer.png';
                                }
                            }
                        </script>
                        <script type="text/javascript">
                            function myFunction() {
                                var x = document.getElementById("password");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }
                        </script>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>