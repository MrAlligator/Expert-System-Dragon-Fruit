        <!-- Begin Page Content -->
        <div class="container-fluid">

            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
                <?php if (isset($user['email']) && $user['role_id'] == 1 || $user['role_id'] == 2) : ?>
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 class="m-0 font-weight-bold text-primary">Data Solusi Hama dan Penyakit Tanaman Buah Naga</h6>
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
                                        <th width="100px">Kode Solusi</th>
                                        <th>Hama dan Penyakit</th>
                                        <th>Solusi</th>
                                        <th width="150px">Perintah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($solusi as $fix) :
                                    ?>
                                        <tr>
                                            <td>
                                                <?php
                                                echo ++$start;
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo $fix->kode_solusi ?>
                                            </td>
                                            <td>
                                                <?php echo $fix->hamapenyakit ?>
                                            </td>
                                            <td>
                                                <?php echo $fix->solusi ?>
                                            </td>
                                            <td>
                                                <a class="badge badge-success" href="" data-toggle="modal" data-target="#editModal<?= $fix->id_solusi ?>"><i class="fas fa-edit"></i> Ubah</a>
                                                <a onclick="deleteConfirm('<?php echo site_url('backend/data/solusi/deletesol/' . $fix->id_solusi) ?>')" href="#!" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
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
                                <h6 class="m-0 font-weight-bold text-primary">Data Solusi Hama dan Penyakit Tanaman Buah Naga</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="50px">No</th>
                                        <th width="100px">Kode Solusi</th>
                                        <th>Hama dan Penyakit</th>
                                        <th>Solusi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($solusi as $fix) :
                                    ?>
                                        <tr>
                                            <td>
                                                <?php
                                                echo ++$start;
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo $fix->kode_solusi ?>
                                            </td>
                                            <td>
                                                <?php echo $fix->hamapenyakit ?>
                                            </td>
                                            <td>
                                                <?php echo $fix->solusi ?>
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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Solusi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= site_url('backend/data/solusi') ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-group-text" id="kd1" name="kd1" value="S" width="50px" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="kd2" name="kd2" value="<?= $jumlahsol + 1 ?>" readonly>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="kd" name="kd" hidden>
                            </div>
                            <div class="form-group">
                                <label for="hp">Hama / Penyakit</label>
                                <select id="hp" name="hp" class="form-control">
                                    <?php foreach ($hamapenyakit as $hp) { ?>
                                        <option value="<?php echo $hp->hamapenyakit ?>"><?php echo $hp->hamapenyakit ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="solusi">Solusi</label>
                                <textarea class="form-control" id="solusi" name="solusi" onclick="copytextbox()"></textarea>
                            </div>
                        </div>
                        <script>
                            function copytextbox() {
                                document.getElementById('kd').value = document.getElementById('kd1').value + document.getElementById('kd2').value
                                // document.getElementById('kd').value = document.getElementById('kd2').value
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

        <?php foreach ($solusi as $fix) : ?>
            <div class="modal fade" id="editModal<?= $fix->id_solusi ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Solusi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= site_url('backend/data/solusi/editsol') ?>" method="POST">
                            <div class="modal-body">
                                <div class="form-group" hidden>
                                    <input type="text" class="form-control" id="id" name="id" value="<?= $fix->id_solusi ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="kd" name="kd" value="<?= $fix->kode_solusi ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="hp" name="hp" value="<?= $fix->hamapenyakit ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="solusi" name="solusi" rows="5"><?= $fix->solusi ?></textarea>
                                </div>
                            </div>
                            <script>
                                function copytextbox() {
                                    document.getElementById('kd').value = document.getElementById('kd1').value + document.getElementById('kd2').value
                                    // document.getElementById('kd').value = document.getElementById('kd2').value
                                }
                            </script>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>