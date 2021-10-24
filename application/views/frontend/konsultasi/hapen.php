    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2><?= $title ?></h2>
                </div>

                <div class="row content mb-5">
                    <div class="col-md">
                        <p class="text-justify">Halaman ini adalah awal dari konsultasi yang dilakukan. Halaman ini merupakan halaman yang digunakan untuk mengisikan nama, jenis buah naga, dan lokasi perkebunan. Harap Isikan semua yang diwajibkan untuk diisi.</p>
                    </div>
                </div>
                <div class="row content mb-4">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <?php echo $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('frontend/konsultasi/konsultasi') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm-9" hidden>
                                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $user['id_user']; ?>" readonly>
                                </div>
                                <label for="nama" class="col-sm-3 col-form-label">Nama*</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $user['name']; ?>"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>

                            <?php foreach ($wajib as $w) : ?>
                                <div class="form-group row" hidden>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="id_per[]" name="id_per[]" value="<?= $w->id_pertanyaan ?>">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="pertanyaan[]" name="pertanyaan[]" value="<?= $w->pertanyaan ?>">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="o1[]" name="o1[]" value="<?= $w->opsi1 ?>">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="o2[]" name="o2[]" value="<?= $w->opsi2 ?>">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="o3[]" name="o3[]" value="<?= $w->opsi3 ?>">
                                    </div>
                                </div>
                                <?php foreach ($umum as $u) : ?>
                                    <div class="form-group row" hidden>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="id_per[]" name="id_per[]" value="<?= $u->id_pertanyaan ?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="pertanyaan[]" name="pertanyaan[]" value="<?= $u->pertanyaan ?>">
                                        </div>
                                        <div class=" col-sm-2">
                                            <input type="text" class="form-control" id="o1[]" name="o1[]" value="<?= $u->opsi1 ?>">
                                        </div>
                                        <div class=" col-sm-2">
                                            <input type="text" class="form-control" id="o2[]" name="o2[]" value="<?= $u->opsi2 ?>">
                                        </div>
                                        <div class=" col-sm-2">
                                            <input type="text" class="form-control" id="o3[]" name="o3[]" value="<?= $u->opsi3 ?>">
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                            <script>
                                function copytextbox() {
                                    document.getElementById('name[]').value = document.getElementById('nama').value
                                    // document.getElementById('kd').value = document.getElementById('kd2').value
                                }
                            </script>
                            <div class=" form-group row justify-content-end">
                                <button type="submit" class="btn-learn-more">Konsultasi</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                </div>

            </div>
        </section><!-- End About Section -->
    </main><!-- End #main -->