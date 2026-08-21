<?php
/**
 * FONDOS TECH — Reusable Footer Component
 * Include via: <?php include 'includes/footer.php'; ?>
 */

$base_path = isset($base_path) ? $base_path : '';
?>

</main><!-- /#main-content -->

<!-- ============================================= -->
<!-- FOOTER                                        -->
<!-- ============================================= -->
<footer role="contentinfo">
    <!-- CTA Banner Section -->
    <div class="ft-footer-cta">
        <div class="container">
            <div class="ft-footer-cta-inner">
                <div class="ft-footer-cta-text">
                    <h2>Ready to run your brokerage on one platform?</h2>
                    <p>See how FondosTech's insurance software can replace your spreadsheets, disconnected tools and
                        manual reconciliation — in one demo.</p>
                </div>
                <a href="#demo" class="btn-schedule-demo">
                    <img src="<?php echo $base_path; ?>assets/images/uil-schedule0.svg" alt="" aria-hidden="true">
                    Schedule a Demo
                </a>
            </div>
        </div>
    </div>

    <!-- White Footer Card Section -->
    <div class="ft-footer-body-area">
        <div class="container">
            <div class="ft-footer-body">
                <!-- Top: Logo + Social -->
                <div class="ft-footer-top">
                    <div class="ft-footer-logo">
                        <a href="<?php echo $base_path; ?>index.php" aria-label="FondosTech Home">
                            <img src="<?php echo $base_path; ?>assets/images/clip-path-group0.svg" alt="FondosTech Logo"
                                width="180" height="40">
                        </a>
                    </div>
                    <div class="ft-footer-social" aria-label="Social media links">
                        <a href="#" aria-label="LinkedIn">
                            <img src="<?php echo $base_path; ?>assets/images/mdi-linkedin0.svg" alt="LinkedIn">
                        </a>
                        <a href="#" aria-label="Facebook">
                            <img src="<?php echo $base_path; ?>assets/images/ic-baseline-facebook0.svg" alt="Facebook">
                        </a>
                        <a href="#" aria-label="X (Twitter)">
                            <img src="<?php echo $base_path; ?>assets/images/ri-twitter-x-line0.svg" alt="X">
                        </a>
                        <a href="#" aria-label="Instagram">
                            <img src="<?php echo $base_path; ?>assets/images/mdi-instagram0.svg" alt="Instagram">
                        </a>
                    </div>
                </div>

                <!-- Links Grid -->
                <div class="ft-footer-links">
                    <div class="row">
                        <!-- Products -->
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <h3 class="ft-footer-col-title">Products</h3>
                            <div class="ft-footer-col-links">
                                <a href="#">FT Digital Insure</a>
                                <a href="#">FT Digital Claims</a>
                                <a href="#">FT EB Sure</a>
                                <a href="#">FT Reconciliation</a>
                                <a href="#">FT Payin/Payout</a>
                                <a href="#">FT Compliance</a>
                            </div>
                        </div>

                        <!-- Company -->
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <h3 class="ft-footer-col-title">Company</h3>
                            <div class="ft-footer-col-links">
                                <a href="<?php echo $base_path; ?>about-us.php">About Us</a>
                                <a href="<?php echo $base_path; ?>contact.php">Contact us</a>
                                <a href="<?php echo $base_path; ?>about-us.php#team">Leadership</a>
                                <a href="#">Careers</a>
                                <a href="#">Privacy Policy</a>
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>

                        <!-- Resources -->
                        <div class="col-lg-2 col-md-6 col-sm-6 mb-4">
                            <h3 class="ft-footer-col-title">Resources</h3>
                            <div class="ft-footer-col-links">
                                <a href="<?php echo $base_path; ?>blog.php">Blog</a>
                                <a href="<?php echo $base_path; ?>404.php">404 Error Page</a>
                                <a href="<?php echo $base_path; ?>wrong-page-demo">Test Wrong URL</a>
                                <a href="<?php echo $base_path; ?>index.php#faq">FAQs</a>
                            </div>
                        </div>

                        <!-- Get in Touch -->
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                            <h3 class="ft-footer-col-title">Get in Touch</h3>
                            <div class="ft-footer-contact-item">
                                <img src="<?php echo $base_path; ?>assets/images/fluent-call-12-regular0.svg" alt=""
                                    aria-hidden="true">
                                <a href="tel:+918000366997">+91 80003 66997</a>
                            </div>
                            <div class="ft-footer-contact-item">
                                <img src="<?php echo $base_path; ?>assets/images/majesticons-mail-line0.svg" alt=""
                                    aria-hidden="true">
                                <a href="mailto:business@fondostech.in">business@fondostech.in</a>
                            </div>

                            <h4 class="ft-footer-locations-title">Our Locations</h4>
                            <div class="ft-footer-locations">
                                <div class="ft-footer-location">
                                    <img src="<?php echo $base_path; ?>assets/images/boxicons-location0.svg" alt=""
                                        aria-hidden="true">
                                    <span>New Delhi</span>
                                </div>
                                <div class="ft-footer-location">
                                    <img src="<?php echo $base_path; ?>assets/images/boxicons-location2.svg" alt=""
                                        aria-hidden="true">
                                    <span>Jaipur</span>
                                </div>
                                <div class="ft-footer-location">
                                    <img src="<?php echo $base_path; ?>assets/images/boxicons-location1.svg" alt=""
                                        aria-hidden="true">
                                    <span>Gurugram</span>
                                </div>
                                <div class="ft-footer-location">
                                    <img src="<?php echo $base_path; ?>assets/images/boxicons-location3.svg" alt=""
                                        aria-hidden="true">
                                    <span>Mumbai</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom: Copyright -->
                <div class="ft-footer-bottom">
                    <div class="ft-footer-copyright">
                        &copy;2026 Fondos Technologies Private Limited. All rights reserved.
                    </div>
                    <div class="ft-footer-cin">
                        CIN : U72900DL2016PTC290430
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- AOS (Animate On Scroll) JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-out-cubic',
                once: true,
                offset: 80
            });
        }
    });
</script>

<!-- jQuery 3.6.4 -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- jQuery Validation Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Bootstrap 5.2.3 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

<!-- Header JS -->
<script src="<?php echo $base_path; ?>assets/js/header.js"></script>

<!-- Page-specific JS -->
<?php if (isset($page_js) && is_array($page_js)): ?>
    <?php foreach ($page_js as $js_file): ?>
        <?php $file_v = file_exists(dirname(__DIR__) . '/' . $js_file) ? filemtime(dirname(__DIR__) . '/' . $js_file) : time(); ?>
        <script src="<?php echo $base_path . $js_file; ?>?v=<?php echo $file_v; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>

</html>