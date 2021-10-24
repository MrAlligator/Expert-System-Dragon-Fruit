<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>Pilih Gejala yang Dilihat pada Tanaman Buah Naga</h2>
            </div>

            <?php foreach ($random as $rn) : ?>
                <form action="<?= base_url('frontend/konsultasi/konsultasi/hapen') ?>" method="POST">
                    <div class="row content mb-3">
                        <div class="col-md">
                            <div class="card text-center">
                                <div class="card-header">
                                    <h5 class="card-title"><?= $rn['pertanyaan'] ?></h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?= base_url('assets/img/gejala/' . $rn['gb1']) ?>" class="img-thumbnail" alt="">
                                            <label for="op1[<?= $rn['id_pertanyaan'] ?>]"><?= $rn['gejala1'] ?></label></br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="op1[]" id="op1[]" value="<?= $rn['opsi1'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="<?= base_url('assets/img/gejala/' . $rn['gb1']) ?>" class="img-thumbnail" alt="">
                                            <label for="op2[<?= $rn['id_pertanyaan'] ?>]"><?= $rn['gejala2'] ?></label></br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="op2[]" id="op2[]" value="<?= $rn['opsi2'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="<?= base_url('assets/img/gejala/' . $rn['gb1']) ?>" class="img-thumbnail" alt="">
                                            <label for="op3[<?= $rn['id_pertanyaan'] ?>]"><?= $rn['gejala3'] ?></label></br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="op3[]" id="op3[]" value="<?= $rn['opsi3'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="row content">
                    <div class="col-md">
                        <button type="submit" class="btn-learn-more">Selesai</button>
                    </div>
                </div>
                </form>

        </div>
    </section><!-- End About Section -->
</main><!-- End #main -->