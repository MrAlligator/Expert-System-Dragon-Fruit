        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
                <?php if (isset($user['email']) && $user['role_id'] == 1 || $user['role_id'] == 2) : ?>
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 class="m-0 font-weight-bold text-primary">Data Probabilitas</h6>
                            </div>
                            <div class="col-md-2">
                                <a href="#!" class="btn btn-success btn-icon-split pull-right" data-toggle="modal" data-target="#exampleModal">
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
                                        <th width="200px">Hama / Penyakit</th>
                                        <th>Gejala</th>
                                        <th width="100px">Probabilitas</th>
                                        <th width="150px">Perintah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($probabilitas as $ilmu) : ?>
                                        <?php
                                        $pb = $ilmu->probabilitas;
                                        if ($pb != 0.01) :
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    echo ++$start;
                                                    ?>
                                                </td>
                                                <td>
                                                    <?= $ilmu->hamapenyakit ?>
                                                </td>
                                                <td>
                                                    <?= $ilmu->gejala; ?>
                                                </td>
                                                <td>
                                                    <?= $ilmu->probabilitas ?>
                                                </td>
                                                <td>
                                                    <a class="badge badge-success" href="#!" data-toggle="modal" data-target="#editModal<?= $ilmu->id_pengetahuan ?>"><i class="fas fa-edit"></i> Ubah</a>
                                                    <a onclick="deleteConfirm('<?php echo site_url('backend/data/probabilitas/deleteprb/' . $ilmu->id_pengetahuan) ?>')" href="#!" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                </td>
                                            </tr>
                                        <?php else : ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 class="m-0 font-weight-bold text-primary">Data Probabilitas</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="50px">No</th>
                                        <th width="200px">Hama / Penyakit</th>
                                        <th>Gejala</th>
                                        <th width="100px">Probabilitas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($probabilitas as $ilmu) : ?>
                                        <?php
                                        $pb = $ilmu->probabilitas;
                                        if ($pb != 0.01) :
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    echo ++$start;
                                                    ?>
                                                </td>
                                                <td>
                                                    <?= $ilmu->hamapenyakit ?>
                                                </td>
                                                <td>
                                                    <?= $ilmu->gejala; ?>
                                                </td>
                                                <td>
                                                    <?= $ilmu->probabilitas ?>
                                                </td>
                                            </tr>
                                        <?php else : ?>
                                        <?php endif; ?>
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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Probabilitas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= site_url('backend/data/probabilitas') ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <select id="hp" name="hp" class="form-control">
                                    <option value="" disabled>Pilih Hama atau Penyakit</option>
                                    <?php foreach ($hamapenyakit as $hp) { ?>
                                        <option value="<?php echo $hp->id_hamapenyakit ?>"><?php echo $hp->hamapenyakit ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="gj" name="gj" class="form-control">
                                    <option value="" disabled>Pilih Gejala</option>
                                    <?php foreach ($gejala as $gj) { ?>
                                        <option value="<?php echo $gj->id_gejala ?>"><?php echo $gj->gejala ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="number" id="prb" name="prb" class="form-control" placeholder="Isikan Nilai Probabilitas" step="0.01" min=0.01 max=1.0><?= form_error('prb', '<small class="text-danger pl-3">', '</small>') ?>
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

        <!-- Modal -->
        <?php foreach ($probabilitas as $ilmu) : ?>
            <div class="modal fade" id="editModal<?= $ilmu->id_pengetahuan ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Tambah Probabilitas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= site_url('backend/data/probabilitas/editprb') ?>" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" id="id" name="id" class="form-control" value="<?= $ilmu->id_pengetahuan ?>" hidden>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="hp" name="hp" class="form-control" value="<?= $ilmu->id_hamapenyakit ?>" hidden>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="gj" name="gj" class="form-control" value="<?= $ilmu->id_gejala ?>" hidden>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control-plaintext" value="<?= $ilmu->hamapenyakit ?>" readonly>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-9">
                                        <textarea class="form-control-plaintext" readonly cols="3" rows="4"><?= $ilmu->gejala ?></textarea>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="number" id="prb" name="prb" class="form-control" value="<?= $ilmu->probabilitas ?>" placeholder="Isikan Nilai Probabilitas" step="0.01" min=0.01 max=1.0><?= form_error('prb', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
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