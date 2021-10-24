        <!-- Begin Page Content -->
        <div class="container-fluid">

            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-9">
                            <h6 class="m-0 font-weight-bold text-primary">Data Hama Tanaman Buah Naga</h6>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="btn btn-success btn-icon-split pull-right" data-toggle="modal" data-target="#exampleModal">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Tambah Data Hama</span>
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
                                    <th width="200px">Kode Hama Penyakit</th>
                                    <th>Hama dan Penyakit</th>
                                    <th width="150px">Perintah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($hama as $bug) :
                                ?>
                                    <tr>
                                        <td>
                                            <?php
                                            echo $no++;
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $bug['kode_hamapenyakit'] ?>
                                        </td>
                                        <td>
                                            <?php echo $bug['hamapenyakit'] ?>
                                        </td>
                                        <td>
                                            <a class="badge badge-success" href="" data-toggle="modal" data-target="#editModal<?= $bug['id_hamapenyakit'] ?>"><i class="fas fa-edit"></i> Ubah</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('backend/data/hamapenyakit/deletehp/' . $bug['id_hamapenyakit']) ?>')" href="#!" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-9">
                            <h6 class="m-0 font-weight-bold text-primary">Data Penyakit Tanaman Buah Naga</h6>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="btn btn-success btn-icon-split pull-right" data-toggle="modal" data-target="#penyakitModal">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Tambah Data Penyakit</span>
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
                                    <th width="200px">Kode Hama Penyakit</th>
                                    <th>Hama dan Penyakit</th>
                                    <th width="150px">Perintah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($penyakit as $bug) :
                                ?>
                                    <tr>
                                        <td>
                                            <?php
                                            echo $no++;
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $bug['kode_hamapenyakit'] ?>
                                        </td>
                                        <td>
                                            <?php echo $bug['hamapenyakit'] ?>
                                        </td>
                                        <td>
                                            <a class="badge badge-success" href="" data-toggle="modal" data-target="#editModal<?= $bug['id_hamapenyakit'] ?>"><i class="fas fa-edit"></i> Ubah</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('backend/data/hamapenyakit/deletehp/' . $bug['id_hamapenyakit']) ?>')" href="#!" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
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

            function copytextbox() {
                document.getElementById('kd').value = document.getElementById('kd1').value + document.getElementById('kd3').value + document.getElementById('kd2').value
                // document.getElementById('kd').value = document.getElementById('kd2').value
            }

            function copy() {
                document.getElementById('kdp').value = document.getElementById('kdp1').value + document.getElementById('kdp3').value + document.getElementById('kdp2').value
            }
        </script>
        </div>
        <!-- End of Main Content -->

        <!-- Modal Hama -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Hama</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= site_url('backend/data/hamapenyakit') ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-group-text" id="kd1" name="kd1" value="H" width="50px" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-group-text align-center" id="kd3" name="kd3" value="<?php
                                                                                                                                            if ($jumlahhama < 10) {
                                                                                                                                                echo "0";
                                                                                                                                            } else {
                                                                                                                                                echo "";
                                                                                                                                            }
                                                                                                                                            ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="kd2" name="kd2" value="<?= $jumlahhama + 1 ?>" readonly>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="kd" name="kd" hidden>
                            </div>
                            <div class="form-group">
                                <input type="text" id="jenis" name="jenis" hidden value="Hama">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control text-capitalize" id="nama" name="nama" onclick="copytextbox();" placeholder="Nama Hama atau Penyakit"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
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

        <!-- Modal Penyakit -->
        <div class="modal fade" id="penyakitModal" tabindex="-1" aria-labelledby="penyakitModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="penyakitModalLabel">Tambah Penyakit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form1" action="<?= site_url('backend/data/hamapenyakit/penyakit') ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-group-text" id="kdp1" name="kdp1" value="P" width="50px" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-group-text align-center" id="kdp3" name="kdp3" value="<?php
                                                                                                                                            if ($jumlahpenyakit < 10) {
                                                                                                                                                echo "0";
                                                                                                                                            } else {
                                                                                                                                                echo "";
                                                                                                                                            }
                                                                                                                                            ?>" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="kdp2" name="kdp2" value="<?= $jumlahpenyakit + 1 ?>" readonly>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="kdp" name="kdp" hidden>
                            </div>
                            <div class="form-group">
                                <input type="text" id="jenis" name="jenis" hidden value="Penyakit">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control text-capitalize" id="nama" name="nama" onclick="copy();" placeholder="Nama Hama atau Penyakit"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
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


        <?php foreach ($all as $bug) : ?>
            <div class="modal fade" id="editModal<?= $bug['id_hamapenyakit'] ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Hama atau Penyakit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= site_url('backend/data/hamapenyakit/edithp') ?>" method="POST">
                            <div class="modal-body">
                                <div class="form-group" hidden>
                                    <input type="text" class="form-control" id="id" name="id" value="<?= $bug['id_hamapenyakit'] ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="kd" name="kd" value="<?= $bug['kode_hamapenyakit'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control text-capitalize" id="nama" name="nama" value="<?= $bug['hamapenyakit'] ?>"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
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