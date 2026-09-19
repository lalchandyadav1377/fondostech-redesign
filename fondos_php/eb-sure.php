<?php
$page_title = "Employee Benefits Platform | FT EB Sure | FondosTech";
$page_description = "FT EB Sure connects employee enrolment, endorsements, claims and renewals for group insurance through one AI-assisted platform.";
$active_page = "eb_sure";
$page_css = ["assets/css/pages/posp.css"];
$page_js = ["assets/js/pages/posp.js"];
include 'includes/header.php';
?>

<!-- ============================================= -->
<!-- SECTION 1: HERO BANNER                        -->
<!-- ============================================= -->
<section class="posp-hero-section" id="eb-hero">
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
                        style="font-size: 0.78125rem; color: #086ad8;">EMPLOYEE BENEFITS PLATFORM</span>
                </div>

                <h1 class="posp-hero-title mb-3">
                    Faster Enrolments. Easier Claims. <span class="text-primary-custom">Smoother Renewals.</span>
                </h1>

                <p class="section-desc mb-4" style="max-width: 600px; margin-left: 0;">
                    FT EB Sure connects employee enrolment, endorsements, claims and renewals for group
                    insurance through one AI-assisted platform.
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
                        <span>Digital enrolment</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center text-primary-custom" style="width: 22px; height: 22px; font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.12);">✓</span>
                        <span>Claims visibility</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center text-primary-custom" style="width: 22px; height: 22px; font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.12);">✓</span>
                        <span>Renewal management</span>
                    </div>
                </div>
            </div>

            <!-- Right Side Image Frame -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="posp-hero-image-wrapper position-relative">
                    <div class="posp-hero-image-card shadow-lg rounded-4 overflow-hidden border bg-white p-2">
                        <img src="assets/images/product_page/Product_Page_FT_EB_Sure_img.webp"
                            alt="FT EB Sure Software Interface" class="img-fluid w-100 rounded-3"
                            style="object-fit: contain;">
                    </div>
                    <div class="posp-floating-metric-badge shadow-lg bg-white border rounded-4 p-3 position-absolute">
                        <div class="d-flex align-items-center gap-3">
                            <div class="badge-icon-circle bg-primary text-white">⚡</div>
                            <div>
                                <div class="fw-bold text-dark" style="font-size: 1.05rem; line-height: 1.2;">One Benefits Platform</div>
                                <div class="text-muted" style="font-size: 0.78125rem;">Employee + HR Control</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 2: WHY IT MATTERS                     -->
<!-- ============================================= -->
<section class="posp-why-mandatory-section" id="why-critical">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">WHY IT MATTERS</div>
            <h2 class="section-title">Move Employee Benefits Beyond Spreadsheets and <span class="text-primary-custom">Manual HR</span></h2>
            <p class="section-desc mx-auto" style="max-width: 840px;">
                Manual enrolment, claims follow-ups and renewal tracking create more work for
                HR, brokers and employees.
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
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">MANUAL ENROLMENT</span>
                    </div>

                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Every Employee Change Adds Admin</h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        New hires, dependents and policy updates require repeated coordination when data moves
                        through emails and spreadsheets.
                    </p>

                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">Higher admin effort</span>
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
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                <polyline points="14 2 14 8 20 8" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">CLAIMS VISIBILITY</span>
                    </div>

                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Employees Shouldn’t Chase Claim Updates</h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        Limited claim visibility pushes employees back to HR and brokers for repeated status
                        checks.
                    </p>

                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">Poor employee experience</span>
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
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">RENEWAL PRESSURE</span>
                    </div>

                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Late Renewal Prep Limits Your Options</h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        Scattered claims, headcount and policy data make it harder to prepare early for renewal
                        discussions.
                    </p>

                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">Last-minute decisions</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 p-3 p-sm-4 rounded-4 bg-light border text-center shadow-sm" style="border-color: #cee4fd !important;"
            data-aos="zoom-in">
            <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap"
                style="font-size: 0.875rem; font-weight: 600;">
                <span class="text-dark">FT EB Sure connects enrolment, claims and renewals in one employee benefits platform.</span>
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
            <div class="section-label">HOW IT WORKS</div>
            <h2 class="section-title">Keep Employee Benefits in Sync From New Joiner to <span class="text-primary-custom">Renewal</span></h2>
            <p class="section-desc mx-auto">Keep employee data, coverage, claims and renewal activity connected throughout the group
                insurance lifecycle.</p>
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
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 01 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Add Employees</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Sync or upload employee and dependent information into supported group policy workflows.
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
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 02 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Process Enrolments</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Apply configured policy rules to support enrolments, additions and endorsements.
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
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                <polyline points="14 2 14 8 20 8" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 03 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Submit Claims</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Enable employees to submit claim details and required documents digitally.
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
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 04 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Track Claims</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Keep employees, HR teams and brokers informed through connected claim-status
                        workflows.
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
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 05 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Prepare Renewals</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Bring relevant claims, headcount and policy information together before renewal discussions
                        begin.
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
                                <line x1="18" y1="20" x2="18" y2="10" />
                                <line x1="12" y1="20" x2="12" y2="4" />
                                <line x1="6" y1="20" x2="6" y2="14" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 06 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Generate Reports</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Export relevant enrolment, claims and renewal information for operational and management
                        review.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 4: MANAGING EMPLOYEE BENEFITS         -->
<!-- ============================================= -->
<section class="posp-dashboard-section" id="dashboard">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">MANAGING EMPLOYEE BENEFITS, DAY TO DAY</div>
            <h2 class="section-title">Make Group Insurance Easier For HR and <span class="text-primary-custom">Broker Teams</span></h2>
            <p class="section-desc mx-auto">Give employees coverage clarity while HR and brokers manage enrolment, claims and
                renewals centrally.</p>
        </div>

        <div class="row g-4 mt-2">
            <!-- For the employee -->
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
                            <span class="pillar-tag-badge mb-1">EMPLOYEE INTERFACE</span>
                            <h3 class="about-card-title mb-0" style="font-size:1.35rem;">For the employee</h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>My Coverage</strong> — View relevant policy details, dependents and available coverage information.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Claims Tracker</strong> — Submit supported claims and follow their current status digitally.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Enrolment Status</strong> — See available enrolment and coverage updates without repeated HR follow-ups.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For HR / Broker / Admin -->
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
                            <span class="pillar-tag-badge mb-1">HR / BROKER / ADMIN</span>
                            <h3 class="about-card-title mb-0" style="font-size:1.35rem;">For HR / Broker / Admin</h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Bulk Enrolment</strong> — Add or update employee records across supported group policy workflows.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Claims Oversight</strong> — Track claims activity and available status information across the workforce.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Renewal Dashboard</strong> — Review relevant claims, utilisation and policy information before renewal.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Reporting</strong> — Export employee benefits data for HR, finance and operational review.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 p-3 p-sm-4 rounded-4 bg-light border text-center shadow-sm" style="border-color: #cee4fd !important;"
            data-aos="zoom-in">
            <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap"
                style="font-weight: 600; font-size: 0.875rem;">
                <span class="badge px-2.5 py-1.5 rounded-pill fw-bold text-primary-custom border"
                    style="background-color: #ffffff; border-color: #cee4fd !important; font-size: 0.8125rem;">Employee View</span>
                <span class="text-muted fw-bold">|</span>
                <span class="badge px-2.5 py-1.5 rounded-pill fw-bold text-primary-custom border"
                    style="background-color: #ffffff; border-color: #cee4fd !important; font-size: 0.8125rem;">HR &amp; Broker Control</span>
                <span class="text-muted fw-bold">|</span>
                <span class="badge px-2.5 py-1.5 rounded-pill fw-bold text-primary-custom border"
                    style="background-color: #ffffff; border-color: #cee4fd !important; font-size: 0.8125rem;">Central Reporting</span>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 5: AI-ASSISTED BENEFITS               -->
<!-- ============================================= -->
<section class="posp-ai-section" id="ai-features">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">AI-ASSISTED BENEFITS</div>
            <h2 class="section-title">AI That Simplifies Benefits As Your Workforce <span class="text-primary-custom">Scales</span></h2>
            <p class="section-desc mx-auto">Use AI assistance across enrolment, claims and renewals while keeping policy rules and
                human control in place.</p>
        </div>

        <div class="row g-4 mt-2">
            <!-- Feature 1 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-card posp-ai-card d-flex flex-column h-100 p-4 border-2">
                    <div class="about-icon-box posp-ai-icon-box mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">Enrolment Support</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Use employee and policy information to support matching within configured group insurance
                        rules.
                    </p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                <div class="about-card posp-ai-card d-flex flex-column h-100 p-4 border-2">
                    <div class="about-icon-box posp-ai-icon-box mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">Claims Document Support</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Review submitted claim information against configured document requirements.
                    </p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="about-card posp-ai-card d-flex flex-column h-100 p-4 border-2">
                    <div class="about-icon-box posp-ai-icon-box mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">Renewal Intelligence</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Surface relevant claims, utilisation and workforce information ahead of renewal planning.
                    </p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="about-card posp-ai-card d-flex flex-column h-100 p-4 border-2">
                    <div class="about-icon-box posp-ai-icon-box mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <line x1="18" y1="20" x2="18" y2="10" />
                            <line x1="12" y1="20" x2="12" y2="4" />
                            <line x1="6" y1="20" x2="6" y2="14" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">Benefits Data Intelligence</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Bring policy, employee and claims information together to support faster operational
                        decisions.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-4 p-3 p-sm-4 rounded-4 bg-light border text-center shadow-sm" style="border-color: #cee4fd !important;"
            data-aos="zoom-in">
            <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap"
                style="font-size: 0.875rem; font-weight: 600;">
                <span class="text-dark">AI assists configured workflows. Policy terms, insurer processes and human review remain in control.</span>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 6: BUILT FOR                          -->
<!-- ============================================= -->
<section class="posp-built-for-section" id="built-for">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">BUILT FOR</div>
            <h2 class="section-title">One Employee Benefits Platform, Scale Across <span class="text-primary-custom">Business</span></h2>
            <p class="section-desc mx-auto">Support employers, brokers and insurance partners through one connected group benefits
                platform.</p>
        </div>

        <div class="row g-4 mt-3">
            <!-- Segment 1 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-card text-center p-4 h-100">
                    <div class="about-icon-box mx-auto mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v3M12 14v3M16 14v3" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2">Corporates &amp; HR Teams</h3>
                    <p class="about-card-text">
                        Manage employee enrolment, claims visibility and group policy activity through one platform.
                    </p>
                </div>
            </div>

            <!-- Segment 2 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="about-card text-center p-4 h-100">
                    <div class="about-icon-box mx-auto mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2">Insurance Brokers</h3>
                    <p class="about-card-text">
                        Service multiple corporate benefits programmes with central employee, policy and claims
                        information.
                    </p>
                </div>
            </div>

            <!-- Segment 3 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="about-card text-center p-4 h-100">
                    <div class="about-icon-box mx-auto mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <polygon points="12 2 2 7 12 12 22 7 12 2" />
                            <polyline points="2 17 12 22 22 17" />
                            <polyline points="2 12 12 17 22 12" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2">Insurance Agencies</h3>
                    <p class="about-card-text">
                        Manage supported group insurance clients without relying on disconnected enrolment and
                        claims trackers.
                    </p>
                </div>
            </div>

            <!-- Segment 4 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="about-card text-center p-4 h-100">
                    <div class="about-icon-box mx-auto mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <rect x="2" y="7" width="20" height="14" rx="2" />
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2">Banks &amp; NBFCs</h3>
                    <p class="about-card-text">
                        Manage group insurance benefits for supported workforce or institutional programmes
                        through connected workflows.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 7: THE EB SURE ADVANTAGE              -->
<!-- ============================================= -->
<section class="posp-comparison-section" id="difference">
    <div class="container" data-aos="fade-up">
        <div class="section-header text-center">
            <div class="section-label">THE EB SURE ADVANTAGE</div>
            <h2 class="section-title">See Benefits Management Change with <span class="text-primary-custom">EB Sure</span></h2>
            <p class="section-desc mx-auto">Compare fragmented employee benefits administration with one connected group insurance
                platform.</p>
        </div>

        <div class="row g-4 mt-3">
            <!-- Left Side: WITHOUT EB SURE -->
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="about-card h-100 p-4 border-2"
                    style="background: #ffffff; border-color: #e2e8f0 !important;">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom"
                        style="border-color: #e2e8f0 !important;">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-secondary-subtle text-dark px-3 py-2 rounded-pill fw-bold"
                                style="font-size: 0.875rem; background-color: #f1f5f9 !important;">WITHOUT EB SURE</span>
                        </div>
                        <span class="text-muted fw-semibold" style="font-size: 0.8125rem;">Manual benefits administration</span>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Enrolments move through emails and spreadsheets</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Employee changes require repeated follow-ups</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Claims status is checked across separate channels</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Employees depend on HR for policy information</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Renewal data is gathered close to deadlines</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Coverage data sits across different records</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Reports are prepared manually</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: WITH FT EB SURE -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="about-card h-100 p-4 border-2 shadow-lg position-relative"
                    style="background: #ffffff; border-color: #086ad8 !important;">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4 pb-3 border-bottom"
                        style="border-color: #cee4fd !important;">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary text-white px-2.5 px-sm-3 py-2 rounded-pill fw-bold"
                                style="font-size: 0.8125rem;">⚡ WITH FT EB SURE</span>
                        </div>
                        <span class="text-muted fw-semibold" style="font-size: 0.8125rem;">Connected benefits management</span>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Enrolments run through structured digital workflows</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Employee changes stay connected to policy activity</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Available claims status remains visible centrally</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Employees access relevant coverage information</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Renewal information is brought together earlier</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Workforce coverage is visible in one platform</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Reports are available from connected data</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 8: FAQ                                -->
<!-- ============================================= -->
<section class="faq-section section-padding" id="faq" aria-label="Employee Benefits Questions Answered">
    <div class="container">
        <div class="row g-5">
            <!-- Left Sticky Sidebar -->
            <div class="col-lg-5 col-md-12 faq-left-column">
                <div class="faq-left-content">
                    <div class="section-label">FAQ</div>
                    <h2 class="section-title">
                        Employee Benefits Platform Questions, <span class="text-primary-custom">Answered</span>
                    </h2>
                    <p class="section-desc mb-4">
                        Key questions about enrolment, claims, renewals, AI and group insurance management.
                    </p>
                    <a href="<?php echo $base_path; ?>contact.php"
                        class="btn btn-primary-custom rounded-pill px-4 py-3 d-inline-flex align-items-center gap-2 font-weight-bold shadow-sm">
                        <span>Book a demo</span>
                        <svg viewBox="0 0 9 14" fill="none" width="10" height="14" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Accordion Cards -->
            <div class="col-lg-7 col-md-12" data-aos="fade-left" data-aos-delay="150">
                <div class="accordion faq-accordion-custom" id="ebSureFaqAccordion">
                    <!-- Item 1 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#ebFaq1" aria-expanded="true" aria-controls="ebFaq1">
                                What is an employee benefits platform?
                            </button>
                        </h3>
                        <div id="ebFaq1" class="accordion-collapse collapse show" data-bs-parent="#ebSureFaqAccordion">
                            <div class="accordion-body">
                                An employee benefits platform helps organisations manage employee insurance and related
                                benefits through one digital system. It can support enrollment, policy information, claims,
                                endorsements, renewals and reporting.
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="120">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#ebFaq2" aria-expanded="false" aria-controls="ebFaq2">
                                What is employee benefits software?
                            </button>
                        </h3>
                        <div id="ebFaq2" class="accordion-collapse collapse" data-bs-parent="#ebSureFaqAccordion">
                            <div class="accordion-body">
                                Employee benefits software provides digital tools for administering workforce benefits such
                                as group health, accident and life insurance. It reduces dependence on spreadsheets, emails
                                and separate tracking systems.
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="140">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#ebFaq3" aria-expanded="false" aria-controls="ebFaq3">
                                What group insurance products can FT EB Sure support?
                            </button>
                        </h3>
                        <div id="ebFaq3" class="accordion-collapse collapse" data-bs-parent="#ebSureFaqAccordion">
                            <div class="accordion-body">
                                FT EB Sure supports configured group insurance workflows, including Group Mediclaim,
                                Group Personal Accident and Group Term Life where applicable.
                                Available functionality depends on the insurer, policy and implementation.
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="160">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#ebFaq4" aria-expanded="false" aria-controls="ebFaq4">
                                Can employees track their own claims?
                            </button>
                        </h3>
                        <div id="ebFaq4" class="accordion-collapse collapse" data-bs-parent="#ebSureFaqAccordion">
                            <div class="accordion-body">
                                Supported employee journeys can provide access to relevant claim-status and policy
                                information. Available visibility depends on the configured insurer or TPA workflow.
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="180">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#ebFaq5" aria-expanded="false" aria-controls="ebFaq5">
                                How does FT EB Sure use AI?
                            </button>
                        </h3>
                        <div id="ebFaq5" class="accordion-collapse collapse" data-bs-parent="#ebSureFaqAccordion">
                            <div class="accordion-body">
                                FT EB Sure uses AI assistance within selected enrolment, claims and renewal workflows.
                                Configured policy rules, insurer processes and human review remain part of the process.
                            </div>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#ebFaq6" aria-expanded="false" aria-controls="ebFaq6">
                                Can FT EB Sure connect with HR systems?
                            </button>
                        </h3>
                        <div id="ebFaq6" class="accordion-collapse collapse" data-bs-parent="#ebSureFaqAccordion">
                            <div class="accordion-body">
                                FT EB Sure can support data exchange with configured HR and business systems.
                                Integration scope depends on available APIs, data structures and implementation
                                requirements.
                            </div>
                        </div>
                    </div>

                    <!-- Item 7 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="220">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#ebFaq7" aria-expanded="false" aria-controls="ebFaq7">
                                Does FT EB Sure help with renewals?
                            </button>
                        </h3>
                        <div id="ebFaq7" class="accordion-collapse collapse" data-bs-parent="#ebSureFaqAccordion">
                            <div class="accordion-body">
                                FT EB Sure brings relevant claims, utilisation, headcount and policy information together to
                                support renewal preparation. Final renewal terms and decisions remain subject to the insurer
                                and applicable policy process.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 9: FINAL CTA                          -->
<!-- ============================================= -->
<section class="about-cta-section" id="eb-cta">
    <div class="container" data-aos="fade-up">
        <div class="about-cta-card">
            <div class="section-label mb-3" style="color: rgba(255,255,255,0.85);">SEE IT IN ACTION</div>
            <h2 class="about-cta-title">Ready to See How FT EB Sure Simplify Benefits Management</h2>
            <p class="about-cta-desc">
                Bring enrolment, claims and renewals into one platform with EB Sure
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="<?php echo $base_path; ?>contact.php"
                    class="btn btn-light rounded-pill fw-bold py-3 px-5 d-inline-flex align-items-center gap-2 cta-hover-btn"
                    style="color:#086ad8;">
                    <span>Book a demo</span>
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="<?php echo $base_path; ?>contact.php"
                    class="btn btn-outline-light rounded-pill fw-bold py-3 px-5">Contact sales</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
