    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div id="carouselExampleCaptions" class="carousel slide mb-5" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= base_url('assets/img/ilmu/' . $details['gambar']) ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="section-title">
                    <h2><?= $details['title'] ?></h2>
                </div>

                <div class="row content">
                    <div class="col-lg">
                        <p class="text-justify">
                            <?= $details['p1'] ?>
                        </p>
                        <p class="text-justify">
                            <?= $details['p2'] ?>
                        </p>
                        <p class="text-justify">
                            <?= $details['p3'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->
    </main><!-- End #main -->