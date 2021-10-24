        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?>

                    <?= $this->session->flashdata('message') ?>

                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Sub Menu Baru</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Sub Menu</th>
                                <th scope="col">Menu</th>
                                <th scope="col">Url</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Status</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($submenu as $sm) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $sm['title'] ?></td>
                                    <td><?= $sm['menu'] ?></td>
                                    <td><?= $sm['url'] ?></td>
                                    <td><?= $sm['icon'] ?></td>
                                    <td>
                                        <?php
                                        $sts =  $sm['is_active'];
                                        if ($sts == '1') {
                                            echo 'Aktif';
                                        } else {
                                            echo 'Belum Aktif';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo site_url('backend/administrator/home/deletesubmenu/' . $sm['id']) ?>" class="badge badge-danger">Hapus</a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Sub Menu Baru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('backend/administrator/home/submenu') ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control text-capitalize" id="title" name="title" placeholder="Isikan Sub Menu">
                            </div>
                            <div class="form-group">
                                <select name="menu_id" id="menu_id" class="form-control">
                                    <option value="">Pilih Menu</option>
                                    <?php foreach ($menu as $m) : ?>
                                        <option value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="url" name="url" placeholder="Isikan Url Sub Menu">
                            </div>
                            <div class="form-group">
                                <select name="icon" id="icon" class="form-control">
                                    <option value="">Pilih Icon</option>
                                    <option value="fas fa-fw fa-folder-open">Folder Open</option>
                                    <option value="fas fa-fw fa-hospital-alt">Hospital</option>
                                    <option value="fas fa-fw fa-folder">Folder</option>
                                    <option value="fas fa-fw fa-book-open">Book Open</option>
                                    <option value="fas fa-fw fa-address-card">Address Card</option>
                                    <option value="fas fa-fw fa-tasks">Task</option>
                                    <option value="fas fa-fw fa-wrench">Wrench</option>
                                    <option value="fas fa-fw fa-tachometer-alt">Dashboard</i></option>
                                    <option value="fas fa-fw fa-clipboard">Clipboard</option>
                                    <option value="fas fa-fw fa-info-circle">Info Circle</option>
                                    <option value="fas fa-fw fa-chart-area">Chart Area</option>
                                    <option value="fas fa-fw fa-user">User</option>
                                    <option value="fas fa-fw fa-bug">Bug</option>
                                    <option value="fas fa-fw fa-stethoscope">Stetoscope</option>
                                    <option value="fas fa-fw fa-notes-medical">Medical Notes</option>
                                    <option value="fas fa-fw fa-file-medical-alt">File Medical Alt</option>
                                    <option value="fas fa-fw fa-file-medical">File Medical</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                    <label class="form-check-label" for="is_active">
                                        Aktif?
                                    </label>
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