        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-10">
                            <h6 class="m-0 font-weight-bold text-primary">Data Konteks</h6>
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
                                    <th>Kelas</th>
                                    <th>Judul</th>
                                    <th width="100px">Gambar</th>
                                    <th>Detail</th>
                                    <th width="100px">Perintah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($ilmu as $i) : ?>
                                    <tr>
                                        <td>
                                            <?php
                                            echo ++$start;
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $class = $i->class;
                                            if ($class == 1) {
                                                echo 'Keilmuan';
                                            } elseif ($class == 2) {
                                                echo 'Obyek';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?= $i->title ?>
                                        </td>
                                        <td>
                                            <img src="<?= base_url('assets/img/ilmu/') . $i->gambar ?>" alt="" width="100px">
                                        </td>
                                        <td>
                                            <?php
                                            $mentah = $i->p1;
                                            $context = substr($mentah, 0, 750);
                                            echo $context . '....';
                                            ?>
                                        </td>
                                        <td>
                                            <a onclick="deleteConfirm('<?= site_url('backend/administrator/home/deletekw/' . $i->id_ilmu) ?>')" href="#!" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Konteks</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form1" action="<?= site_url('backend/administrator/home/knowledge') ?>" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <select class="form-control" id="class" name="class">
                                    <option selected disabled value="">Pilih Kelas</option>
                                    <option value="1">Keilmuan</option>
                                    <option value="2">Obyek</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Isi Judul">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="img" name="img">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="context" id="context" rows="3" placeholder="Isikan Konteks"></textarea>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="plain" id="plain" rows="3" placeholder="Isikan Konteks"></textarea>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="text" id="text" rows="3" placeholder="Isikan Konteks"></textarea>
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