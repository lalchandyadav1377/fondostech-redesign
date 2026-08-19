<?php
$page_title = "Contact Us | FondosTech";
$active_page = "contact";
$page_css = ["assets/css/pages/contact.css"];
$page_js = ["assets/js/pages/contact.js"];
include 'includes/header.php';
?>

<!-- ============================================= -->
<!-- SECTION 1: CONTACT HERO & FORM                -->
<!-- ============================================= -->
<section class="contact-hero-section section-padding" id="contact-hero">
    <div class="container">
        <div class="row g-5 align-items-stretch">
            <!-- Left Info Column Card (frame-2552) -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="contact-left-card">
                    <div>
                        <span class="section-label">GET IN TOUCH</span>
                        <h1 class="section-title">
                            Talk to <span class="text-primary-custom">our Experts.</span>
                        </h1>
                        <p class="section-desc">
                            Whether you're setting up benefits for your team or working out what risk your business is still carrying, we'll help you assess it clearly.
                        </p>

                        <!-- Bullet Points List with mask-group SVGs -->
                        <div class="contact-features-list mb-4">
                            <div class="contact-feature-item">
                                <img src="assets/images/mask-group0.svg" alt="" class="contact-feature-icon" aria-hidden="true">
                                <span class="contact-feature-text">An overview of the FondosTech platform and its features.</span>
                            </div>
                            <div class="contact-feature-item">
                                <img src="assets/images/mask-group1.svg" alt="" class="contact-feature-icon" aria-hidden="true">
                                <span class="contact-feature-text">Learn how to leverage the platform to your specific needs.</span>
                            </div>
                            <div class="contact-feature-item">
                                <img src="assets/images/mask-group2.svg" alt="" class="contact-feature-icon" aria-hidden="true">
                                <span class="contact-feature-text">Detailed analysis and a custom quote in minutes.</span>
                            </div>
                            <div class="contact-feature-item">
                                <img src="assets/images/mask-group3.svg" alt="" class="contact-feature-icon" aria-hidden="true">
                                <span class="contact-feature-text">Negotiated premiums from top insurers.</span>
                            </div>
                        </div>
                    </div>

                    <!-- Info Cards Grid & Social Links -->
                    <div>
                        <div class="contact-info-grid">
                            <div class="contact-info-card has-border-bottom">
                                <div class="contact-info-card-label">Partnerships &amp; Sales</div>
                                <div class="contact-info-card-val">
                                    <img src="assets/images/majesticons-mail-line1.svg" alt="" aria-hidden="true">
                                    <span>business@fondostech.in</span>
                                </div>
                            </div>

                            <div class="contact-info-card has-border-bottom">
                                <div class="contact-info-card-label">Contact Us</div>
                                <div class="contact-info-card-val">
                                    <img src="assets/images/fluent-call-12-regular1.svg" alt="" aria-hidden="true">
                                    <span>+91 80003 66997</span>
                                </div>
                            </div>

                            <div class="contact-info-card">
                                <div class="contact-info-card-label">Chat on Whatsapp</div>
                                <div class="contact-info-card-val">
                                    <img src="assets/images/group0.svg" alt="" aria-hidden="true">
                                    <span>+91 80003 66997</span>
                                </div>
                            </div>

                            <div class="contact-info-card">
                                <div class="contact-info-card-label">Support Timings</div>
                                <div class="contact-info-card-val">
                                    <img src="assets/images/mingcute-time-line0.svg" alt="" aria-hidden="true">
                                    <span>9AM - 7PM IST (Mon to Sat)</span>
                                </div>
                            </div>
                        </div>

                        <!-- Social Icons Row (Direct SVG icons matching reference) -->
                        <div class="contact-social-row">
                            <span class="contact-social-label">Follow us on</span>
                            <a href="#" aria-label="LinkedIn">
                                <img src="assets/images/pajamas-linkedin0.svg" alt="LinkedIn" class="social-img-icon">
                            </a>
                            <a href="#" aria-label="Facebook">
                                <img src="assets/images/formkit-facebook0.svg" alt="Facebook" class="social-img-icon">
                            </a>
                            <a href="#" aria-label="Instagram">
                                <img src="assets/images/akar-icons-instagram-fill0.svg" alt="Instagram" class="social-img-icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Form Column -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="contact-form-card">
                    <h2 class="form-title text-primary-custom">Drop Us a Message</h2>
                    <p class="form-desc">Fill out the form below and we'll get back to you within 24 hours.</p>
                    <hr class="my-3" style="border-color: #cee4fd; opacity: 0.8;">

                    <form action="javascript:void(0);" id="contactForm" class="mt-4" novalidate="novalidate" onsubmit="return false;">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="fullName">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="fullName" id="fullName" class="form-control" placeholder="Rahul Sharma" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="companyName">Company <span class="text-danger">*</span></label>
                                    <input type="text" name="companyName" id="companyName" class="form-control" placeholder="Your Company Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="workEmail">Work Email <span class="text-danger">*</span></label>
                                    <input type="email" name="workEmail" id="workEmail" class="form-control" placeholder="work@company.com" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phoneNum">Phone <span class="text-danger">*</span></label>
                                    <input type="tel" name="phoneNum" id="phoneNum" class="form-control" placeholder="+91 XXXXX XXXXX" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="userMessage">Message <span class="text-danger">*</span></label>
                                    <textarea name="userMessage" id="userMessage" class="form-control" rows="4" placeholder="Tell us how we can help..." required></textarea>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn-contact-submit">Send Message</button>
                            </div>
                        </div>
                    </form>

                    <div class="contact-form-disclaimer mt-3">
                        <img src="assets/images/mdi-secure-outline0.svg" alt="" width="18" height="18" class="flex-shrink-0 mt-1">
                        <span>Your data is used only to respond to your enquiry. We do not share your information with third parties. This form is dedicated for sales inquiries.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 2: OUR PRESENCE / LOCATIONS           -->
<!-- ============================================= -->
<!-- Leaflet CSS for Network Node Map -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

<!-- ============================================= -->
<!-- SECTION 2: OUR PRESENCE / NETWORK NODES       -->
<!-- ============================================= -->
<section class="presence-section section-padding" id="presence" data-aos="fade-up">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-label">OUR PRESENCE</span>
            <h2 class="section-title">
                We’re Available At <span class="text-primary-custom">Different Parts of India.</span>
            </h2>
            <p class="section-desc mx-auto text-center" style="max-width: 650px;">
                Serving 25+ Fortune 500 clients across 4 Regions.
            </p>
        </div>

        <div class="network-presence-wrapper" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 align-items-stretch">
                <!-- Left: Interactive Leaflet Vector Map of India -->
                <div class="col-lg-7">
                    <div class="presence-map-card">
                        <div id="india-network-map" class="presence-leaflet-map"></div>
                    </div>
                </div>

                <!-- Right: Active Center Details Card -->
                <div class="col-lg-5">
                    <div class="network-node-details-card">
                        <div>
                            <div class="node-card-header">
                                <div class="node-label">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>
                                    <span>NETWORK NODE</span>
                                </div>
                                <span class="badge-active-center">ACTIVE CENTER</span>
                            </div>

                            <h3 class="node-city-title" id="node-city-name">New Delhi</h3>
                            <div class="node-jurisdiction" id="node-jurisdiction">REGISTERED OFFICE &amp; NORTHERN REGION</div>

                            <div class="node-info-block mt-4">
                                <div class="node-info-item">
                                    <div class="info-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    </div>
                                    <div class="info-text">
                                        <label>ADDRESS</label>
                                        <p id="node-address">Plot No. 42, Barakhamba Road, Connaught Place, New Delhi - 110001</p>
                                    </div>
                                </div>

                                <div class="node-info-item mt-3">
                                    <div class="info-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    </div>
                                    <div class="info-text">
                                        <label>PHONE</label>
                                        <p id="node-phone">+91 11 4567 8900</p>
                                    </div>
                                </div>

                                <div class="node-info-item mt-3">
                                    <div class="info-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    </div>
                                    <div class="info-text">
                                        <label>EMAIL</label>
                                        <p id="node-email">delhi.office@fondostech.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Location Pills Selector (Only 4 Cities) -->
                        <div class="node-selector-pills mt-4" id="network-node-selectors">
                            <button class="node-pill-btn active" data-city="delhi">New Delhi</button>
                            <button class="node-pill-btn" data-city="jaipur">Jaipur</button>
                            <button class="node-pill-btn" data-city="gurugram">Gurugram</button>
                            <button class="node-pill-btn" data-city="mumbai">Mumbai</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leaflet JS for Network Node Map -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<!-- ============================================= -->
<!-- SECTION 3: FAQ (Centered Layout from contact-us-fondos design) -->
<!-- ============================================= -->
<section class="faq-section section-padding" id="faq" aria-label="Frequently asked questions" data-aos="fade-up">
    <div class="container">
        <!-- Centered Header -->
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-label text-center mb-2">Know why to choose Us?</div>
            <h2 class="section-title text-center">
                FAQs About <span class="text-primary-custom">FondosTech</span>
            </h2>
        </div>

        <!-- Centered 1-Column Accordion Wrapper -->
        <div class="contact-faq-wrapper mx-auto" style="max-width: 820px;" data-aos="fade-up" data-aos-delay="100">
            <div class="accordion faq-accordion-custom" id="contactFaqAccordion">
                <!-- Item 1 -->
                <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cfaq1" aria-expanded="true" aria-controls="cfaq1">
                            <span class="faq-num text-primary-custom me-3 fw-bold">01</span>
                            <span>Who should reach out to FondosTech?</span>
                        </button>
                    </h3>
                    <div id="cfaq1" class="accordion-collapse collapse show" data-bs-parent="#contactFaqAccordion">
                        <div class="accordion-body text-start">
                            Platforms, insurers, and enterprises seeking to launch, scale, or modernise insurance offerings without operational complexity.
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="150">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cfaq2" aria-expanded="false" aria-controls="cfaq2">
                            <span class="faq-num text-primary-custom me-3 fw-bold">02</span>
                            <span>Is this a sales or partnership conversation?</span>
                        </button>
                    </h3>
                    <div id="cfaq2" class="accordion-collapse collapse" data-bs-parent="#contactFaqAccordion">
                        <div class="accordion-body text-start">
                            Whether you are evaluating our insurance software, looking for a partnership, or exploring custom integrations, our team handles all sales and strategic inquiries.
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cfaq3" aria-expanded="false" aria-controls="cfaq3">
                            <span class="faq-num text-primary-custom me-3 fw-bold">03</span>
                            <span>How quickly will someone respond?</span>
                        </button>
                    </h3>
                    <div id="cfaq3" class="accordion-collapse collapse" data-bs-parent="#contactFaqAccordion">
                        <div class="accordion-body text-start">
                            Our team responds to all sales and partnership inquiries within 24 business hours.
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="250">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cfaq4" aria-expanded="false" aria-controls="cfaq4">
                            <span class="faq-num text-primary-custom me-3 fw-bold">04</span>
                            <span>Do you support pilots or POCs?</span>
                        </button>
                    </h3>
                    <div id="cfaq4" class="accordion-collapse collapse" data-bs-parent="#contactFaqAccordion">
                        <div class="accordion-body text-start">
                            Yes, we support structured proof-of-concept deployments for qualifying enterprises and MGAs.
                        </div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cfaq5" aria-expanded="false" aria-controls="cfaq5">
                            <span class="faq-num text-primary-custom me-3 fw-bold">05</span>
                            <span>Is this region-specific?</span>
                        </button>
                    </h3>
                    <div id="cfaq5" class="accordion-collapse collapse" data-bs-parent="#contactFaqAccordion">
                        <div class="accordion-body text-start">
                            FondosTech serves insurance brokers, MGAs, POSPs, and carriers across India and emerging global markets.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
