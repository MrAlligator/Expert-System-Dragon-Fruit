        <!-- Begin Page Content -->
        <div class="container-fluid">

            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-10">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pertanyaan</h6>
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
                                    <th width="200px">Pertanyaan</th>
                                    <th width="200px">Opsi 1</th>
                                    <th width="200px">Opsi 2</th>
                                    <th width="200px">Opsi 3</th>
                                    <th width="150px">Perintah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pertanyaan as $pr) : ?>
                                    <tr>
                                        <td>
                                            <?php
                                            echo ++$start;
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $pr['pertanyaan'] ?>
                                        </td>
                                        <td>
                                            <?php echo $pr['opsi1'] ?>
                                        </td>
                                        <td>
                                            <?php echo $pr['opsi2'] ?>
                                        </td>
                                        <td>
                                            <?php echo $pr['opsi3'] ?>
                                        </td>
                                        <td>
                                            <a class="badge badge-success" href="" data-toggle="modal" data-target="#editModal<?= $pr['id_pertanyaan'] ?>"><i class="fas fa-edit"></i> Ubah</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('backend/pakar/pertanyaan/deleteprt/' . $pr['id_pertanyaan']) ?>')" href="#!" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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

        <!-- Modal Tambah -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pertanyaan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= site_url('backend/pakar/pertanyaan') ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" name="prt" id="prt" value="Gejala mana yang muncul atau ditemukan?" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <select id="op1" name="op1" class="form-control">
                                    <option value="" disabled>Pilih Gejala</option>
                                    <?php foreach ($opsi1 as $op1) { ?>
                                        <option value="<?php echo $op1->id_gejala ?>"><?php echo $op1->gejala ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="op2" name="op2" class="form-control">
                                    <option value="" disabled>Pilih Gejala</option>
                                    <?php foreach ($opsi2 as $op2) { ?>
                                        <option value="<?php echo $op2->id_gejala ?>"><?php echo $op2->gejala ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="op3" name="op3" class="form-control">
                                    <option value="" disabled>Pilih Gejala</option>
                                    <?php foreach ($opsi3 as $op3) { ?>
                                        <option value="<?php echo $op3->id_gejala ?>"><?php echo $op3->gejala ?> </option>
                                    <?php } ?>
                                </select>
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

        <!-- Modal Edit -->
        <?php foreach ($pertanyaan as $pr) : ?>
            <div class="modal fade" id="editModal<?= $pr['id_pertanyaan'] ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Pertanyaan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= site_url('backend/pakar/pertanyaan/editprt') ?>" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" name="id" id="id" value="<?= $pr['id_pertanyaan'] ?>" class="form-control" hidden>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="prt" id="prt" value="<?= $pr['pertanyaan'] ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <select id="op1" name="op1" class="form-control">
                                        <option value="<?= $pr['opsi1'] ?>" selected>Current</option>
                                        <?php foreach ($opsi1 as $op1) { ?>
                                            <option value="<?php echo $op1->id_gejala ?>"><?php echo $op1->gejala ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select id="op2" name="op2" class="form-control">
                                        <option value="<?= $pr['opsi2'] ?>" selected>Current</option>
                                        <?php foreach ($opsi2 as $op2) { ?>
                                            <option value="<?php echo $op2->id_gejala ?>"><?php echo $op2->gejala ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select id="op3" name="op3" class="form-control">
                                        <option value="<?= $pr['opsi3'] ?>" selected>Current</option>
                                        <?php foreach ($opsi3 as $op3) { ?>
                                            <option value="<?php echo $op3->id_gejala ?>"><?php echo $op3->gejala ?> </option>
                                        <?php } ?>
                                    </select>
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