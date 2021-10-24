        <!-- Begin Page Content -->
        <div class="container-fluid">

            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
                <?php if (isset($user['email']) && $user['role_id'] == 1 || $user['role_id'] == 2) : ?>
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 class="m-0 font-weight-bold text-primary">Data Gejala Tanaman Buah Naga</h6>
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
                                        <th width="200px">Kode Gejala</th>
                                        <th width="150px">Gambar</th>
                                        <th>Gejala</th>
                                        <th width="150px">Perintah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($gejala as $gj) :
                                    ?>
                                        <tr>
                                            <td>
                                                <?php
                                                echo ++$start;
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo $gj['kode_gejala'] ?>
                                            </td>
                                            <td>
                                                <img src="<?= base_url('assets/img/gejala/') . $gj['gambar'] ?>" width="150" alt="">
                                            </td>
                                            <td>
                                                <?php echo $gj['gejala'] ?>
                                            </td>
                                            <td>
                                                <a class="badge badge-success" href="" data-toggle="modal" data-target="#editModal<?= $gj['id_gejala'] ?>"><i class="fas fa-edit"></i> Ubah</a>
                                                <a onclick="deleteConfirm('<?php echo site_url('backend/data/gejala/deletegj/' . $gj['id_gejala']) ?>')" href="#!" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
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
                                <h6 class="m-0 font-weight-bold text-primary">Data Hama dan Penyakit Tanaman Buah Naga</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="50px">No</th>
                                        <th width="200px">Kode Hama Penyakit</th>
                                        <th>Hama dan Penyakit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($gejala as $gj) :
                                    ?>
                                        <tr>
                                            <td>
                                                <?php
                                                echo ++$start;
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo $gj['kode_gejala'] ?>
                                            </td>
                                            <td>
                                                <?php echo $gj['gejala'] ?>
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
        </script>

        <?= $this->pagination->create_links() ?>

        </div>
        <!-- End of Main Content -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Gejala</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= site_url('backend/data/gejala') ?>" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-group-text" id="kd1" name="kd1" value="G" size="1" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-group-text align-center" id="kd3" name="kd3" value="<?php
                                                                                                                                            if ($jumlahgejala < 10) {
                                                                                                                                                echo "00";
                                                                                                                                            } else if ($jumlahgejala < 100) {
                                                                                                                                                echo "0";
                                                                                                                                            } else {
                                                                                                                                                echo "";
                                                                                                                                            }
                                                                                                                                            ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="kd2" name="kd2" value="<?= $jumlahgejala + 1 ?>" readonly>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="kd" name="kd" hidden>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control text-capitalize" id="nama" name="nama" onclick="copytextbox();" placeholder="Nama Gejala"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="img">Gambar</label>
                                <input type="file" class="form-control-file" id="img" name="img">
                            </div>
                        </div>
                        <script>
                            function copytextbox() {
                                document.getElementById('kd').value = document.getElementById('kd1').value + document.getElementById('kd3').value + document.getElementById('kd2').value
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

        <?php foreach ($gejala as $gj) : ?>
            <div class="modal fade" id="editModal<?= $gj['id_gejala'] ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Gejala</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= site_url('backend/data/gejala/editgj') ?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group" hidden>
                                    <input type="text" class="form-control" id="id" name="id" value="<?= $gj['id_gejala'] ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="kd" name="kd" value="<?= $gj['kode_gejala'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control text-capitalize" id="nama" name="nama" value="<?= $gj['gejala'] ?>"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="img">Gambar</label>
                                    <input type="file" class="form-control-file" id="img" name="img">
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
        <?php endforeach; ?>