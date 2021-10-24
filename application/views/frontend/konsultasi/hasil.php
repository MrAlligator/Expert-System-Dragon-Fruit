    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <h2><?= $title ?></h2>
                </div>
                <div class="row content">
                    <div class="col-md">
                        <?php echo $this->session->flashdata('message'); ?>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h6 class="m-0 font-weight-bold text-warning">Hasil Konsultasi</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th width="50px">No</th>
                                                <th width="100px">Jenis Buah Naga</th>
                                                <th width="100px">Lokasi Kebun</th>
                                                <th width="100px">Hama atau Penyakit</th>
                                                <th width="50px">%</th>
                                                <th>Solusi</th>
                                                <th width="50px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($hasil as $hsl) : ?>
                                                <tr>
                                                    <td>
                                                        <?= ++$start ?>
                                                    </td>
                                                    <td>
                                                        <?= $hsl['jenis'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $hsl['lokasi'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $hsl['hamapenyakit'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $hsl['prosentase'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $hsl['solusi'] ?>
                                                    </td>
                                                    <td>
                                                        <a href="" class="badge badge-primary">Cetak</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section><!-- End About Section -->
    </main><!-- End #main -->