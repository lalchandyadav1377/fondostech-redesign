<?php
/**
 * FONDOS TECH — Reusable Footer Component
 * Include via: <?php include 'includes/footer.php'; ?>
 */

$base_path = isset($base_path) ? $base_path : '';
if (!defined('RECAPTCHA_SITE_KEY')) {
    $config_file = __DIR__ . '/config.php';
    if (is_file($config_file)) {
        require_once $config_file;
    }
}
if (!defined('RECAPTCHA_SITE_KEY')) {
    define('RECAPTCHA_SITE_KEY', '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI');
}
?>

</main>
<!-- /#main-content -->

<!-- ============================================= -->
<!-- REQUEST DEMO MODAL-->
<!-- ============================================= -->
<div class="modal fade" id="requestDemoModal" tabindex="-1" aria-labelledby="requestDemoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content ft-demo-modal">
            <div class="modal-header">
                <div class="ft-demo-modal-heading">
                    <h2 class="ft-demo-modal-title" id="requestDemoModalLabel">Request a Demo</h2>
                    <p class="ft-demo-modal-desc">Tell us a little about your team. We’ll get back within 24 hours.</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="requestDemoForm" novalidate="novalidate">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="demoFullName">Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="demoFullName" id="demoFullName" class="form-control" placeholder="Rahul Sharma" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="demoCompanyName">Company <span class="text-danger">*</span></label>
                                <input type="text" name="demoCompanyName" id="demoCompanyName" class="form-control" placeholder="Your Company Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="demoWorkEmail">Work Email <span class="text-danger">*</span></label>
                                <input type="email" name="demoWorkEmail" id="demoWorkEmail" class="form-control" placeholder="work@company.com" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="demoPhoneNum">Phone <span class="text-danger">*</span></label>
                                <input type="tel" name="demoPhoneNum" id="demoPhoneNum" class="form-control" placeholder="+91 XXXXX XXXXX" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="demoMessage">Message <span class="text-danger">*</span></label>
                                <textarea name="demoMessage" id="demoMessage" class="form-control" rows="3" placeholder="Tell us what you want to see in the demo..." required></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="ft-recaptcha-wrap">
                                <div id="demoRecaptcha" class="g-recaptcha" data-sitekey="<?php echo htmlspecialchars(RECAPTCHA_SITE_KEY); ?>"></div>
                                <input type="hidden" name="demoCaptcha" id="demoCaptcha" value="">
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <button type="submit" class="btn-demo-submit">Request Demo</button>
                        </div>
                    </div>
                </form>
                <div class="ft-demo-modal-disclaimer">
                    <img src="<?php echo $base_path; ?>assets/images/mdi-secure-outline0.svg" alt="" width="18" height="18" class="flex-shrink-0 mt-1">
                    <span>Your data is used only to schedule this demo. We do not share your information with third parties.</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================================= -->
<!-- FOOTER                                        -->
<!-- ============================================= -->
<footer role="contentinfo">
    <!-- CTA Banner Section -->
    <div class="ft-footer-cta">
        <div class="container">
            <div class="ft-footer-cta-inner">
                <div class="ft-footer-cta-text">
                    <?php if (isset($active_page) && $active_page === 'home'): ?>
                    <h2>Ready to Simplify Insurance Operations?</h2>
                    <p>Know how FondosTech unifies insurance workflows, and integrates AI-backed technology on
                        one platform.</p>
                    <?php else: ?>
                    <h2>Ready to run your brokerage on one platform?</h2>
                    <p>See how FondosTech's insurance software can replace your spreadsheets, disconnected tools and
                        manual reconciliation — in one demo.</p>
                    <?php endif; ?>
                </div>
                <a href="#requestDemoModal" class="btn-schedule-demo js-demo-modal" data-bs-toggle="modal" data-bs-target="#requestDemoModal">
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
                        <a href="https://www.facebook.com/fondosTechnologies/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                            <img src="<?php echo $base_path; ?>assets/images/ic-baseline-facebook0.svg" alt="Facebook">
                        </a>
                        <a href="https://www.instagram.com/fondostechnologies/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                            <img src="<?php echo $base_path; ?>assets/images/mdi-instagram0.svg" alt="Instagram">
                        </a>
                        <a href="https://www.linkedin.com/company/fondos-technologies-pvt-ltd/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                            <img src="<?php echo $base_path; ?>assets/images/mdi-linkedin0.svg" alt="LinkedIn">
                        </a>
                        <a href="#" class="d-none" aria-label="X (Twitter)">
                            <img src="<?php echo $base_path; ?>assets/images/ri-twitter-x-line0.svg" alt="X">
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
                                <a href="<?php echo $base_path; ?>posp.php">FT POSP Sure</a>
                                <a href="<?php echo $base_path; ?>d2c-insure.php">FT D2C Insure</a>
                                <a href="<?php echo $base_path; ?>embedded-insure.php">FT Embedded Insure</a>
                                <a href="<?php echo $base_path; ?>lending-insure.php">FT Lending Insure</a>
                                <a href="<?php echo $base_path; ?>claims.php">FT Digital Claims</a>
                                <a href="<?php echo $base_path; ?>eb-sure.php">FT EB Sure</a>
                                <a href="<?php echo $base_path; ?>reconciliation.php">FT Reconciliation</a>
                                <a href="<?php echo $base_path; ?>payin-payout.php">FT Payin/Payout</a>
                                <a href="<?php echo $base_path; ?>compliance.php">FT Compliance</a>
                            </div>
                        </div>

                        <!-- Company -->
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <h3 class="ft-footer-col-title">Company</h3>
                            <div class="ft-footer-col-links">
                                <a href="<?php echo $base_path; ?>about-us.php">About Us</a>
                                <a href="<?php echo $base_path; ?>contact.php">Contact us</a>
                                <a href="<?php echo $base_path; ?>about-us.php#team" class="d-none">Leadership</a>
                                <a href="#" class="d-none">Careers</a>
                                <a href="<?php echo $base_path; ?>privacy.php">Privacy Policy</a>
                                <a href="<?php echo $base_path; ?>terms.php">Terms &amp; Conditions</a>
                            </div>
                        </div>

                        <!-- Resources -->
                        <div class="col-lg-2 col-md-6 col-sm-6 mb-4">
                            <h3 class="ft-footer-col-title">Resources</h3>
                            <div class="ft-footer-col-links">
                                <a href="<?php echo $base_path; ?>blog.php">Blog</a>
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
                                <div class="ft-footer-location">
                                    <img src="<?php echo $base_path; ?>assets/images/boxicons-location0.svg" alt=""
                                        aria-hidden="true">
                                    <span>Ahmedabad</span>
                                </div>
                                <div class="ft-footer-location">
                                    <img src="<?php echo $base_path; ?>assets/images/boxicons-location1.svg" alt=""
                                        aria-hidden="true">
                                    <span>Hyderabad</span>
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

<!-- Google reCAPTCHA v2 -->
<script>
    window.FT_RECAPTCHA_SITE_KEY = <?php echo json_encode(RECAPTCHA_SITE_KEY); ?>;
</script>
<?php $captcha_js_v = file_exists(dirname(__DIR__) . '/assets/js/recaptcha.js') ? filemtime(dirname(__DIR__) . '/assets/js/recaptcha.js') : time(); ?>
<script src="<?php echo $base_path; ?>assets/js/recaptcha.js?v=<?php echo $captcha_js_v; ?>"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onFtRecaptchaReady&render=explicit" async defer></script>

<!-- Request Demo Modal JS -->
<?php $demo_js_v = file_exists(dirname(__DIR__) . '/assets/js/demo-modal.js') ? filemtime(dirname(__DIR__) . '/assets/js/demo-modal.js') : time(); ?>
<script src="<?php echo $base_path; ?>assets/js/demo-modal.js?v=<?php echo $demo_js_v; ?>"></script>

<!-- Page-specific JS -->
<?php if (isset($page_js) && is_array($page_js)): ?>
    <?php foreach ($page_js as $js_file): ?>
        <?php $file_v = file_exists(dirname(__DIR__) . '/' . $js_file) ? filemtime(dirname(__DIR__) . '/' . $js_file) : time(); ?>
        <script src="<?php echo $base_path . $js_file; ?>?v=<?php echo $file_v; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>

</html>