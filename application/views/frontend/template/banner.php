<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <h1>Expert System</h1>
        <h2>Sistem Pakar Diagnosa Hama dan Penyakit pada Tanaman Buah Naga</h2>
        <?php if (isset($user['email'])) : ?>
            <a href="<?= base_url('frontend/konsultasi/konsultasi') ?>" class="btn-get-started scrollto">Konsultasi</a>
        <?php else : ?>
            <a href="<?= base_url('frontend/auth') ?>" class="btn-get-started scrollto">Konsultasi</a>
        <?php endif; ?>
    </div>
</section><!-- End Hero -->