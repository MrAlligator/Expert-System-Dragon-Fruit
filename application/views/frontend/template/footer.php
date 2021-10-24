<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container sticky-footer footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Valera</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/valera-free-bootstrap-theme/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

</div>
<!-- End of Page Wrapper -->

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Masuk?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <div class="text-center mb-2">
                    <img src="<?= base_url('assets/img/spbuahnaga.png') ?>" alt="" width="300">
                </div> -->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="com-md-4">
                        <a href="<?= base_url('backend/auth') ?>" class="btn btn-primary">Admin / Pakar</a>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <a href="<?= base_url('frontend/auth') ?>" class="btn btn-success">Petani / User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Vendor JS Files -->
<script src="<?= base_url('assets/frontend') ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url('assets/frontend') ?>/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/vendor/counterup/counterup.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="<?= base_url('assets/frontend') ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/vendor/venobox/venobox.min.js"></script>


<!-- Template Main JS File -->
<script src="<?= base_url('assets/frontend') ?>/js/main.js"></script>

</body>

</html>