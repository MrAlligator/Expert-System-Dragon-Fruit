        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="2000">
                        <img src="<?= base_url('assets/img/about/esdf-s.png') ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Sistem Pakar Hama dan Penyakit Tanaman Buah Naga</h5>
                            <p>Sebuah sistem yang diperuntukan untuk petani tanaman buah naga, dengan tujuan untuk mempermudah pendiagnosaan hama dan penyakit yang menyerang tanaman buah naga, dan memberikan solusi penanganan yang tepat</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="<?= base_url('assets/img/about/esdf-s.png') ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-success">Rizki Widya Pratama</h5>
                            <h6 class="text-success">Developer</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Row -->
            <div class="row mt-3">
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Data Hama dan Penyakit</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlhp ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-bug fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Data Gejala</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlgj ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-stethoscope fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Data Probabilitas</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlpg ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-file-medical-alt fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Data Solusi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlsl ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-notes-medical fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Jumlah Data User</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlus ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        </div>