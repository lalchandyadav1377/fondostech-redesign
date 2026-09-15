<?php
$page_title = "POSP Insurance Software | AI-Assisted Platform | FondosTech";
$page_description = "Manage POSP onboarding, insurer quotes, policies, commissions, claims and renewals with FT POSP Sure, AI-assisted POSP insurance software for distributors.";
$active_page = "posp";
$page_css = ["assets/css/pages/posp.css"];
$page_js = ["assets/js/pages/posp.js"];
include 'includes/header.php';
?>

<!-- ============================================= -->
<!-- SECTION 1: HERO BANNER                        -->
<!-- ============================================= -->
<section class="posp-hero-section" id="posp-hero">
    <div class="posp-glow-orb-1"></div>
    <div class="posp-glow-orb-2"></div>

    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Left Side Content -->
            <div class="col-lg-6 text-start" data-aos="fade-right">
                <!-- Live Pulsing Badge -->
                <div
                    class="posp-hero-badge-wrap mb-3 d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill bg-white border shadow-sm">
                    <span class="posp-badge-dot"></span>
                    <span class="fw-semibold text-uppercase tracking-wider"
                        style="font-size: 0.78125rem; color: #086ad8;">POSP insurance software</span>
                </div>

                <h1 class="posp-hero-title mb-3">
                    AI-assisted POSP insurance software <span class="text-primary-custom">built to scale distribution</span>
                </h1>

                <p class="section-desc mb-3" style="max-width: 600px; margin-left: 0;">
                    Manage POSP onboarding, insurer quotes, policy issuance, commissions, claims and
                    renewals through one connected insurance distribution platform.
                </p>
                <p class="section-desc mb-4" style="max-width: 600px; margin-left: 0;">
                    AI-assisted capabilities support selected sales, underwriting and claims workflows while your
                    teams retain business rules and operational control.
                </p>

                <div class="d-flex align-items-center gap-3 flex-wrap mb-4">
                    <a href="<?php echo $base_path; ?>contact.php"
                        class="btn btn-primary-custom rounded-pill fw-bold py-2 py-xl-3 px-3 px-xl-5 d-inline-flex align-items-center gap-2 shadow-sm">
                        <span>Book a demo</span>
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                            viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="#how-it-works"
                        class="btn btn-outline-primary-custom rounded-pill fw-bold py-2 py-xl-3 px-3 px-xl-5">See how it works</a>
                </div>

                <!-- Trust Highlights -->
                <div class="d-flex align-items-center gap-3 flex-wrap posp-hero-trust-row"
                    style="font-size: 0.875rem; font-weight: 600; color: #495057;">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center text-primary-custom" style="width: 22px; height: 22px; font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.12);">✓</span>
                        <span>5,000+ POSPs managed</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center text-primary-custom" style="width: 22px; height: 22px; font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.12);">✓</span>
                        <span>50+ Insurer APIs</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center text-primary-custom" style="width: 22px; height: 22px; font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.12);">✓</span>
                        <span>99.8% Automated reconciliation</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center text-primary-custom" style="width: 22px; height: 22px; font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.12);">✓</span>
                        <span>White-label Distribution journeys</span>
                    </div>
                </div>
            </div>

            <!-- Right Side Image Frame -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="posp-hero-image-wrapper position-relative">
                    <div class="posp-hero-image-card shadow-lg rounded-4 overflow-hidden border bg-white p-2">
                        <img src="assets/images/product_page/Product_Page_FT_POSP_Sure_img.svg"
                            alt="FT POSP Sure Agent Management Software Interface" class="img-fluid w-100 rounded-3"
                            style="object-fit: contain;">
                    </div>
                    <!-- Floating Metric Badge -->
                    <div class="posp-floating-metric-badge shadow-lg bg-white border rounded-4 p-3 position-absolute">
                        <div class="d-flex align-items-center gap-3">
                            <div class="badge-icon-circle bg-primary text-white">⚡</div>
                            <div>
                                <div class="fw-bold text-dark" style="font-size: 1.05rem; line-height: 1.2;">5,000+
                                    POSPs</div>
                                <div class="text-muted" style="font-size: 0.78125rem;">Live &amp; Onboarded</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Key Stats Bar Below -->
        <div class="posp-stats-row mt-5">
            <div class="stat-item">
                <div class="stat-val counter" data-target="5000" data-suffix="+">5,000+</div>
                <div class="stat-txt">POSPs managed</div>
            </div>
            <div class="stat-item">
                <div class="stat-val counter" data-target="50" data-suffix="+">50+</div>
                <div class="stat-txt">Insurer APIs</div>
            </div>
            <div class="stat-item">
                <div class="stat-val">99.8%</div>
                <div class="stat-txt">Automated reconciliation</div>
            </div>
            <div class="stat-item">
                <div class="stat-val">100%</div>
                <div class="stat-txt">White-label journeys</div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 2: WHY IT'S MANDATORY                 -->
<!-- ============================================= -->
<section class="posp-why-mandatory-section" id="why-mandatory">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">THE BUSINESS PROBLEM</div>
            <h2 class="section-title">Why growing POSP networks become harder to <span class="text-primary-custom">manage
                    manually</span></h2>
            <p class="section-desc mx-auto" style="max-width: 840px;">
                Your POSP network should grow. Your back office should not have to grow with it.
                As distribution expands, onboarding, insurer activity, commissions, renewals and servicing
                can spread across spreadsheets, portals and separate teams.
            </p>
        </div>

        <div class="row g-4 mt-3">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-card posp-challenge-card d-flex flex-column h-100 p-4 border-2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="about-icon-box mb-0">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                <line x1="12" y1="8" x2="12" y2="12" />
                                <line x1="12" y1="16" x2="12.01" y2="16" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">ONBOARDING</span>
                    </div>

                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">POSP onboarding slows down
                    </h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        KYC, documents, training and onboarding records require repeated follow-ups when
                        information sits across different systems.
                    </p>

                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact Level</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">⚡ Follow-up Delay</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="about-card posp-challenge-card d-flex flex-column h-100 p-4 border-2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="about-icon-box mb-0">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">INSURER PORTALS</span>
                    </div>

                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Insurer portals fragment policy operations</h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        POSPs and operations teams move between insurer systems for quotations, proposals,
                        policy issuance and servicing.
                    </p>

                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact Level</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">⏱️ Fragmented Workflows</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="about-card posp-challenge-card d-flex flex-column h-100 p-4 border-2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="about-icon-box mb-0">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <line x1="18" y1="20" x2="18" y2="10" />
                                <line x1="12" y1="20" x2="12" y2="4" />
                                <line x1="6" y1="20" x2="6" y2="14" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">RECONCILIATION</span>
                    </div>

                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Commission reconciliation takes more effort
                    </h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        Policy, insurer and commission data must be matched before POSP payouts can be
                        processed accurately.
                    </p>

                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact Level</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">📊 Matching Effort</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scale Solution Banner Callout -->
        <div class="mt-4 p-3 p-sm-4 rounded-4 bg-light border text-center shadow-sm" style="border-color: #cee4fd !important;"
            data-aos="zoom-in">
            <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap"
                style="font-size: 0.875rem; font-weight: 600;">
                <span class="text-dark">FT POSP Sure brings these workflows into one POSP management platform.</span>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 3: HOW IT WORKS                       -->
<!-- ============================================= -->
<section class="posp-how-it-works-section" id="how-it-works">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">COMPLETE POSP LIFECYCLE</div>
            <h2 class="section-title">Manage the complete POSP lifecycle from <span class="text-primary-custom">onboarding to
                    renewal</span></h2>
            <p class="section-desc mx-auto">FT POSP Sure connects the processes required to onboard POSPs, distribute insurance
                products and manage policy activity after the sale.</p>
        </div>

        <div class="row g-4 mt-3">
            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-card posp-step-card d-flex flex-column h-100 p-4 border-2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="badge-icon-circle bg-primary text-white"
                            style="width:44px; height:44px; font-size:1.1rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <line x1="19" y1="8" x2="19" y2="14" />
                                <line x1="16" y1="11" x2="22" y2="11" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 01 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Onboard — Digital POSP onboarding</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Capture POSP details, KYC, documents, training information and required onboarding
                        records through structured workflows.
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="about-card posp-step-card d-flex flex-column h-100 p-4 border-2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="badge-icon-circle bg-primary text-white"
                            style="width:44px; height:44px; font-size:1.1rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 02 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Activate — Insurer and product access
                    </h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Give eligible POSPs access to supported insurers, products and configured distribution
                        journeys.
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="about-card posp-step-card d-flex flex-column h-100 p-4 border-2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="badge-icon-circle bg-primary text-white"
                            style="width:44px; height:44px; font-size:1.1rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 03 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Quote — Multi-insurer quotations
                    </h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Compare available insurance options from supported insurers through one sales workflow.
                    </p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="about-card posp-step-card d-flex flex-column h-100 p-4 border-2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="badge-icon-circle bg-primary text-white"
                            style="width:44px; height:44px; font-size:1.1rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2" />
                                <line x1="1" y1="10" x2="23" y2="10" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 04 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Issue — Proposal and policy issuance</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Move selected proposals through connected policy issuance workflows without repeatedly
                        managing information across separate systems.
                    </p>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="about-card posp-step-card d-flex flex-column h-100 p-4 border-2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="badge-icon-circle bg-primary text-white"
                            style="width:44px; height:44px; font-size:1.1rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 05 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Pay — Commission and reconciliation</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Connect relevant policy information with applicable commission, reconciliation and payout
                        processes.
                    </p>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                <div class="about-card posp-step-card d-flex flex-column h-100 p-4 border-2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="badge-icon-circle bg-primary text-white"
                            style="width:44px; height:44px; font-size:1.1rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <polyline points="23 4 23 10 17 10" />
                                <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 06 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Retain — Claims and renewals</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Track servicing activity and surface policies approaching renewal for timely follow-up.
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="#dashboard"
                class="btn btn-primary-custom rounded-pill fw-bold py-3 px-5 d-inline-flex align-items-center gap-2 shadow-sm">
                <span>See the complete POSP journey</span>
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</section>
<section class="posp-dashboard-section" id="dashboard">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">POSP WORKSPACE AND BUSINESS CONTROL</div>
            <h2 class="section-title">Give POSPs faster workflows while you <span class="text-primary-custom">retain network control</span></h2>
            <p class="section-desc mx-auto">FT POSP Sure gives POSPs one workspace for selling and servicing while your
                management team gets central visibility across the distribution network.</p>
        </div>

        <div class="row g-4 mt-2">
            <!-- For The POSP -->
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="about-card posp-dashboard-card h-100 p-4 border-2">
                    <div class="d-flex align-items-center gap-3 mb-4 pb-3 border-bottom"
                        style="border-color: #cee4fd !important;">
                        <div class="badge-icon-circle bg-primary text-white" style="width:48px; height:48px;">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                        </div>
                        <div>
                            <span class="pillar-tag-badge mb-1">FOR YOUR POSPS</span>
                            <h3 class="about-card-title mb-0" style="font-size:1.35rem;">For your POSPs</h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Quotes and proposals:</strong> Access supported quotations and track proposal activity.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Policy portfolio:</strong> View active policies and relevant customer information.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Upcoming renewals:</strong> See policies requiring follow-up before expiry.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Claims:</strong> Raise and track customer servicing requests.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Commission visibility:</strong> View applicable earnings and payout information.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Profile and records:</strong> Access relevant POSP information in one place.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For The Broker -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="about-card posp-dashboard-card h-100 p-4 border-2">
                    <div class="d-flex align-items-center gap-3 mb-4 pb-3 border-bottom"
                        style="border-color: #cee4fd !important;">
                        <div class="badge-icon-circle bg-primary text-white" style="width:48px; height:48px;">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v3M12 14v3M16 14v3" />
                            </svg>
                        </div>
                        <div>
                            <span class="pillar-tag-badge mb-1">FOR YOUR BUSINESS</span>
                            <h3 class="about-card-title mb-0" style="font-size:1.35rem;">For your business</h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>POSP management:</strong> Manage users, teams and distribution hierarchies.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Sales visibility:</strong> Track gross written premium, policies and POSP performance.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Commission management:</strong> Manage applicable commission and payout processes centrally.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Reconciliation:</strong> Connect relevant policy and commission information.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Role-based access:</strong> Control what different users can view and manage.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Reports and analytics:</strong> Review network activity and business performance centrally.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Role Architecture Summary Banner -->
        <div class="mt-4 p-3 p-sm-4 rounded-4 bg-light border text-center shadow-sm" style="border-color: #cee4fd !important;"
            data-aos="zoom-in">
            <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap"
                style="font-weight: 600; font-size: 0.875rem;">
                <span class="text-dark fw-bold mb-1 mb-sm-0">🔒 Single Sign-On Architecture</span>
                <span class="text-primary-custom d-none d-sm-inline">➔</span>
                <span class="badge px-2.5 py-1.5 rounded-pill fw-bold text-primary-custom border"
                    style="background-color: #ffffff; border-color: #cee4fd !important; font-size: 0.8125rem;">👤 POSP Agent Portal</span>
                <span class="text-muted fw-bold">+</span>
                <span class="badge px-2.5 py-1.5 rounded-pill fw-bold text-primary-custom border"
                    style="background-color: #ffffff; border-color: #cee4fd !important; font-size: 0.8125rem;">🏢 Broker Admin Console</span>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 5: AI IN INSURANCE                    -->
<!-- ============================================= -->
<section class="posp-ai-section" id="ai-features">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">AI-ASSISTED INSURANCE WORKFLOWS</div>
            <h2 class="section-title">Bring AI assistance into policy, underwriting and <span class="text-primary-custom">claims
                    workflows</span></h2>
            <p class="section-desc mx-auto">AI should help your teams act faster, not add another layer of technology to manage.
                FT POSP Sure uses AI assistance in selected insurance processes where POSPs and
                operations teams review information and decide the next action.</p>
        </div>

        <div class="row g-4 mt-2">
            <!-- Feature 1 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-card posp-ai-card d-flex flex-column h-100 p-4 border-2">
                    <div class="about-icon-box posp-ai-icon-box mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">Policy recommendation support
                    </h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Help POSPs identify relevant policy options using available customer, product and quotation
                        information.
                    </p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                <div class="about-card posp-ai-card d-flex flex-column h-100 p-4 border-2">
                    <div class="about-icon-box posp-ai-icon-box mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">Underwriting decision support</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Surface relevant information to support underwriting review and configured decision
                        workflows.
                    </p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="about-card posp-ai-card d-flex flex-column h-100 p-4 border-2">
                    <div class="about-icon-box posp-ai-icon-box mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <rect x="2" y="7" width="20" height="14" rx="2" />
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">Claims routing support</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Help classify incoming claim requests and direct them towards the relevant process or
                        handling team.
                    </p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="about-card posp-ai-card d-flex flex-column h-100 p-4 border-2">
                    <div class="about-icon-box posp-ai-icon-box mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">Data-led next actions</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Use available policy and distribution information to support sales and servicing decisions.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-4 p-3 p-sm-4 rounded-4 bg-light border text-center shadow-sm" style="border-color: #cee4fd !important;"
            data-aos="zoom-in">
            <p class="mb-0" style="font-size: 0.875rem; font-weight: 600;">
                AI assists the process. Your configured business rules, insurer logic and user controls remain in place.
            </p>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 5B: INSURER AND SYSTEM INTEGRATIONS   -->
<!-- ============================================= -->
<section class="posp-dashboard-section" id="integrations">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">INSURER AND SYSTEM INTEGRATIONS</div>
            <h2 class="section-title">Connect your POSP network with <span class="text-primary-custom">multiple insurers</span></h2>
            <p class="section-desc mx-auto">FT POSP Sure connects with supported insurer APIs to bring quotations, proposals, policy
                issuance and policy information into a more unified insurance distribution process.</p>
        </div>

        <div class="row g-4 mt-2">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-card text-center p-4 h-100">
                    <h3 class="about-card-title mb-2">Insurer quotes</h3>
                    <p class="about-card-text">Bring supported insurer quotations into the POSP sales journey.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="about-card text-center p-4 h-100">
                    <h3 class="about-card-title mb-2">Proposals</h3>
                    <p class="about-card-text">Exchange relevant proposal information through configured insurer integrations.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="about-card text-center p-4 h-100">
                    <h3 class="about-card-title mb-2">Policy issuance</h3>
                    <p class="about-card-text">Move eligible proposals through connected issuance workflows.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="about-card text-center p-4 h-100">
                    <h3 class="about-card-title mb-2">Policy data</h3>
                    <p class="about-card-text">Bring supported policy information back into the POSP management platform.</p>
                </div>
            </div>
        </div>

        <p class="section-desc mx-auto text-center mt-4 mb-4">
            FT POSP Sure can also connect with supported customer, payment, data and reporting
            systems based on your implementation requirements.
        </p>

        <div class="text-center" data-aos="fade-up">
            <div class="mb-3 fw-bold text-primary-custom" style="font-size: 1.15rem;">50+ insurer APIs</div>
            <a href="<?php echo $base_path; ?>contact.php"
                class="btn btn-primary-custom rounded-pill fw-bold py-3 px-5 d-inline-flex align-items-center gap-2 shadow-sm">
                <span>Discuss your integration requirements</span>
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 6: BUILT FOR                          -->
<!-- ============================================= -->
<section class="posp-built-for-section" id="built-for">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">TARGET CUSTOMERS</div>
            <h2 class="section-title">POSP software for insurance brokers and <span class="text-primary-custom">growing distributors</span>
            </h2>
            <p class="section-desc mx-auto">FT POSP Sure is designed for organisations managing POSPs through an authorised
                insurance distribution model.</p>
        </div>

        <div class="row g-4 mt-3">
            <!-- Segment 1 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-card text-center p-4">
                    <div class="about-icon-box mx-auto mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v3M12 14v3M16 14v3" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2">Insurance brokers</h3>
                    <p class="about-card-text">
                        Manage POSPs, insurer workflows, policies, commissions, claims and renewals through one
                        insurance distribution platform.
                    </p>
                </div>
            </div>

            <!-- Segment 2 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="about-card text-center p-4">
                    <div class="about-icon-box mx-auto mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2">Corporate agents</h3>
                    <p class="about-card-text">
                        Centralise POSP operations while controlling users, products and distribution workflows.
                    </p>
                </div>
            </div>

            <!-- Segment 3 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="about-card text-center p-4">
                    <div class="about-icon-box mx-auto mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <rect x="2" y="7" width="20" height="14" rx="2" />
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2">Banks and non-banking financial companies</h3>
                    <p class="about-card-text">
                        Support POSP-led insurance distribution where the organisation operates through the
                        applicable authorised structure.
                    </p>
                </div>
            </div>

            <!-- Segment 4 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="about-card text-center p-4">
                    <div class="about-icon-box mx-auto mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <polygon points="12 2 2 7 12 12 22 7 12 2" />
                            <polyline points="2 17 12 22 22 17" />
                            <polyline points="2 12 12 17 22 12" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2">Fintech-led distributors</h3>
                    <p class="about-card-text">
                        Build branded digital distribution journeys around an authorised insurance distribution model
                        using connected POSP and insurer technology.
                    </p>
                </div>
            </div>
        </div>

        <!-- Scale Flow Bar -->
        <div class="mt-4 p-3 p-sm-4 rounded-4 bg-light border text-center shadow-sm" style="border-color: #cee4fd !important;"
            data-aos="zoom-in">
            <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap"
                style="font-weight: 600; font-size: 0.875rem;">
                <span class="text-dark fw-bold">Broker</span>
                <span class="text-primary-custom">➔</span>
                <span class="badge px-2.5 py-1.5 rounded-pill fw-bold text-primary-custom border"
                    style="background-color: #ffffff; border-color: #cee4fd !important; font-size: 0.8125rem;">⚡ FT POSP Sure</span>
                <span class="text-primary-custom">➔</span>
                <span class="text-dark fw-bold">5,000+ POSPs</span>
                <span class="text-primary-custom d-none d-sm-inline">➔</span>
                <span class="text-dark fw-bold d-none d-sm-inline">End Customers</span>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 7: THE DIFFERENCE                     -->
<!-- ============================================= -->
<section class="posp-comparison-section" id="difference">
    <div class="container" data-aos="fade-up">
        <div class="section-header text-center">
            <div class="section-label">BEFORE AND AFTER</div>
            <h2 class="section-title">POSP software vs spreadsheets and <span class="text-primary-custom">disconnected insurer
                    portals</span></h2>
            <p class="section-desc mx-auto">Compare disconnected POSP operations with FT POSP Sure's connected platform.</p>
        </div>

        <div class="row g-4 mt-3">
            <!-- Left Side: WITHOUT POSP SOFTWARE -->
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="about-card h-100 p-4 border-2"
                    style="background: #ffffff; border-color: #e2e8f0 !important;">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom"
                        style="border-color: #e2e8f0 !important;">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-secondary-subtle text-dark px-3 py-2 rounded-pill fw-bold"
                                style="font-size: 0.875rem; background-color: #f1f5f9 !important;">WITHOUT A CONNECTED
                                PLATFORM</span>
                        </div>
                        <span class="text-muted fw-semibold" style="font-size: 0.8125rem;">Spreadsheets &amp; Portals</span>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">POSP records sit across files and systems</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">POSPs move between insurer portals</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Policy tracking depends on separate records</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Commission calculations rely on spreadsheets</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Reconciliation runs through manual trackers</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Renewals depend on manual follow-ups</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Claims move through calls and emails</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Performance data sits across systems</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: WITH FT POSP SURE -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="about-card h-100 p-4 border-2 shadow-lg position-relative"
                    style="background: #ffffff; border-color: #086ad8 !important;">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4 pb-3 border-bottom"
                        style="border-color: #cee4fd !important;">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary text-white px-2.5 px-sm-3 py-2 rounded-pill fw-bold"
                                style="font-size: 0.8125rem;">⚡ WITH FT POSP SURE</span>
                        </div>
                        <span class="badge bg-primary-subtle text-primary-custom px-2.5 py-1 rounded-pill fw-bold"
                            style="font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.08) !important;">RECOMMENDED</span>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">POSP onboarding runs through structured digital workflows
                            </div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Supported insurer journeys connect through one platform</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Policy activity remains visible centrally
                            </div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Structured commission workflows connect policy and payout information
                            </div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Relevant reconciliation activity stays connected</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Upcoming renewals are surfaced for action
                            </div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Claims activity can be initiated and tracked digitally</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Network performance is available through central reporting
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 8: POSP SOFTWARE EXPLAINED (FAQ)     -->
<!-- ============================================= -->
<section class="faq-section section-padding" id="faq" aria-label="POSP Questions Answered">
    <div class="container">
        <div class="row g-5">
            <!-- Left Sticky Sidebar -->
            <div class="col-lg-5 col-md-12 faq-left-column">
                <div class="faq-left-content">
                    <div class="section-label">POSP INSURANCE SOFTWARE FAQS</div>
                    <h2 class="section-title">
                        POSP insurance software FAQs for <span class="text-primary-custom">brokers and distributors</span>
                    </h2>
                    <p class="section-desc mb-4">
                        Get answers about POSP onboarding, insurer workflows, commissions, claims and renewals.
                    </p>
                    <a href="<?php echo $base_path; ?>contact.php"
                        class="btn btn-primary-custom rounded-pill px-4 py-3 d-inline-flex align-items-center gap-2 font-weight-bold shadow-sm">
                        <span>Schedule a Demo</span>
                        <svg viewBox="0 0 9 14" fill="none" width="10" height="14" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Accordion Cards -->
            <div class="col-lg-7 col-md-12" data-aos="fade-left" data-aos-delay="150">
                <div class="accordion faq-accordion-custom" id="pospFaqAccordion">
                    <!-- Item 1 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pospFaq1" aria-expanded="true" aria-controls="pospFaq1">
                                What is POSP insurance software?
                            </button>
                        </h3>
                        <div id="pospFaq1" class="accordion-collapse collapse show" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                POSP insurance software helps insurers and authorised insurance intermediaries manage
                                the operational lifecycle of a POSP network digitally.
                                Depending on the platform, it can include onboarding, insurer access, quotations, policy
                                issuance, commissions, reconciliation, renewals, claims and reporting.
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="120">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pospFaq2" aria-expanded="false" aria-controls="pospFaq2">
                                What is POSP management software?
                            </button>
                        </h3>
                        <div id="pospFaq2" class="accordion-collapse collapse" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                POSP management software helps organisations onboard, manage and monitor POSPs
                                across their insurance distribution lifecycle.
                                It can support POSP records, insurer access, policies, commissions, reporting, renewals and
                                servicing.
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="140">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pospFaq3" aria-expanded="false" aria-controls="pospFaq3">
                                How is POSP software different from CRM software?
                            </button>
                        </h3>
                        <div id="pospFaq3" class="accordion-collapse collapse" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                A CRM primarily manages customer and sales relationships.
                                POSP software adds insurance-specific workflows such as POSP onboarding, insurer
                                connectivity, policy issuance, commissions, reconciliation, claims and renewals.
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="160">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pospFaq4" aria-expanded="false" aria-controls="pospFaq4">
                                Does FT POSP Sure support multiple insurers?
                            </button>
                        </h3>
                        <div id="pospFaq4" class="accordion-collapse collapse" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                FT POSP Sure connects with supported insurer APIs.
                                Available insurers, products and API journeys depend on the implementation scope and
                                active integrations.
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="180">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pospFaq5" aria-expanded="false" aria-controls="pospFaq5">
                                How does AI work in FT POSP Sure?
                            </button>
                        </h3>
                        <div id="pospFaq5" class="accordion-collapse collapse" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                FT POSP Sure uses AI assistance in selected capabilities such as policy recommendation
                                support, underwriting decision support and claims routing.
                                Configured business rules and operational controls remain part of the process.
                            </div>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pospFaq6" aria-expanded="false" aria-controls="pospFaq6">
                                Can FT POSP Sure manage POSP commissions and payouts?
                            </button>
                        </h3>
                        <div id="pospFaq6" class="accordion-collapse collapse" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                FT POSP Sure supports commission workflows that connect relevant policy information with
                                applicable commission, reconciliation and payout activity.
                            </div>
                        </div>
                    </div>

                    <!-- Item 7 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="220">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pospFaq7" aria-expanded="false" aria-controls="pospFaq7">
                                Can existing POSP data be migrated?
                            </button>
                        </h3>
                        <div id="pospFaq7" class="accordion-collapse collapse" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                Migration scope can be defined during implementation based on existing POSP, policy and
                                operational data, source systems and required workflows.
                            </div>
                        </div>
                    </div>

                    <!-- Item 8 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="240">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pospFaq8" aria-expanded="false" aria-controls="pospFaq8">
                                Can FT POSP Sure integrate with our existing systems?
                            </button>
                        </h3>
                        <div id="pospFaq8" class="accordion-collapse collapse" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                Integration depends on your existing technology stack, available APIs and required
                                workflows.
                                The FondosTech team can review the required insurer, customer, payment, data and
                                reporting integrations during implementation discussions.
                            </div>
                        </div>
                    </div>

                    <!-- Item 9 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="260">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pospFaq9" aria-expanded="false" aria-controls="pospFaq9">
                                Can FT POSP Sure be white-labelled?
                            </button>
                        </h3>
                        <div id="pospFaq9" class="accordion-collapse collapse" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                Supported POSP-facing journeys can be configured around your organisation's branding
                                and distribution model.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 9: READY TO RUN CTA BANNER            -->
<!-- ============================================= -->
<section class="about-cta-section" id="posp-cta">
    <div class="container" data-aos="fade-up">
        <div class="about-cta-card">
            <h2 class="about-cta-title">See how FT POSP Sure would work for your distribution model</h2>
            <p class="about-cta-desc">
                Tell us how you manage POSPs today. See how onboarding, insurer workflows, policies,
                commissions, claims and renewals could run through FT POSP Sure.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="<?php echo $base_path; ?>contact.php"
                    class="btn btn-light rounded-pill fw-bold py-3 px-5 d-inline-flex align-items-center gap-2 cta-hover-btn"
                    style="color:#086ad8;">
                    <span>Book my demo</span>
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="<?php echo $base_path; ?>contact.php"
                    class="btn btn-outline-light rounded-pill fw-bold py-3 px-5">Speak with Our Team</a>
            </div>
            <p class="about-cta-desc mt-3 mb-0" style="font-size: 0.875rem; opacity: 0.9;">
                A FondosTech product specialist will contact you to discuss your distribution requirements.
            </p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>