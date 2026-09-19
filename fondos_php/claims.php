<?php
$page_title = "Claims Management Software | FT Digital Claims | FondosTech";
$page_description = "AI-assisted insurance claims management software for digital intake, document checks, routing, tracking and analytics through one connected platform.";
$active_page = "claims";
$page_css = ["assets/css/pages/posp.css"];
$page_js = ["assets/js/pages/posp.js"];
include 'includes/header.php';
?>

<!-- ============================================= -->
<!-- SECTION 1: HERO BANNER                        -->
<!-- ============================================= -->
<section class="posp-hero-section" id="claims-hero">
    <div class="posp-glow-orb-1"></div>
    <div class="posp-glow-orb-2"></div>

    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-start" data-aos="fade-right">
                <div
                    class="posp-hero-badge-wrap mb-3 d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill bg-white border shadow-sm">
                    <span class="posp-badge-dot"></span>
                    <span class="fw-semibold text-uppercase tracking-wider"
                        style="font-size: 0.78125rem; color: #086ad8;">CLAIMS MANAGEMENT SOFTWARE</span>
                </div>

                <h1 class="posp-hero-title mb-3">
                    FT Digital Claims: Resolve Every Claim in <span class="text-primary-custom">One Flow</span>
                </h1>

                <p class="section-desc mb-4" style="max-width: 600px; margin-left: 0;">
                    AI-assisted insurance claims management software for digital intake, document checks,
                    routing, tracking and analytics through one connected platform.
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

                <div class="d-flex align-items-center gap-3 flex-wrap posp-hero-trust-row"
                    style="font-size: 0.875rem; font-weight: 600; color: #495057;">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center text-primary-custom" style="width: 22px; height: 22px; font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.12);">✓</span>
                        <span>Real-time tracking</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center text-primary-custom" style="width: 22px; height: 22px; font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.12);">✓</span>
                        <span>AI-assisted checks</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center text-primary-custom" style="width: 22px; height: 22px; font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.12);">✓</span>
                        <span>Insurer / TPA workflows</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="posp-hero-image-wrapper position-relative">
                    <div class="posp-hero-image-card shadow-lg rounded-4 overflow-hidden border bg-white p-2">
                        <img src="assets/images/product_page/Product_Page_FT_Digital_Claims_img.webp"
                            alt="FT Digital Claims Software Interface" class="img-fluid w-100 rounded-3"
                            style="object-fit: contain;">
                    </div>
                    <div class="posp-floating-metric-badge shadow-lg bg-white border rounded-4 p-3 position-absolute">
                        <div class="d-flex align-items-center gap-3">
                            <div class="badge-icon-circle bg-primary text-white">⚡</div>
                            <div>
                                <div class="fw-bold text-dark" style="font-size: 1.05rem; line-height: 1.2;">Connected Claims</div>
                                <div class="text-muted" style="font-size: 0.78125rem;">AI-Assisted Workflow</div>
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
            <h2 class="section-title">Slow Claims Cost More Than <span class="text-primary-custom">Time</span></h2>
            <p class="section-desc mx-auto" style="max-width: 840px;">
                Disconnected intake, document checks and status updates slow teams down and leave
                customers chasing answers.
            </p>
        </div>

        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-card posp-challenge-card d-flex flex-column h-100 p-4 border-2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="about-icon-box mb-0">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">SERVICE DELAYS</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Customers Shouldn’t Chase Claim Updates</h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        Repeated calls and emails add friction when customers cannot see where their claim stands.
                    </p>
                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">Customer frustration</span>
                    </div>
                </div>
            </div>

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
                        <span class="pillar-tag-badge">MANUAL CHECKS</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Anomalies Need Early Attention</h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        Manual review makes inconsistent details, duplicate submissions and unusual patterns
                        harder to surface consistently.
                    </p>
                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">Review risk</span>
                    </div>
                </div>
            </div>

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
                        <span class="pillar-tag-badge">STATUS BLINDSPOTS</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Unclear Ownership Creates Bottlenecks</h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        When claims sit across inboxes and systems, teams lose visibility into the next required
                        action.
                    </p>
                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">Operational delays</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 p-3 p-sm-4 rounded-4 bg-light border text-center shadow-sm" style="border-color: #cee4fd !important;"
            data-aos="zoom-in">
            <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap"
                style="font-size: 0.875rem; font-weight: 600;">
                <span class="text-dark">FT Digital Claims keeps intake, documents, routing and claim status connected.</span>
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
            <h2 class="section-title">FT Digital Claim-Keep Every Claim Moving to <span class="text-primary-custom">Resolution</span></h2>
            <p class="section-desc mx-auto">Connect claim submission, document checks, routing, status and reporting through one
                claims management workflow.</p>
        </div>

        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
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
                        <span class="pillar-tag-badge">STEP 01 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Claim Intake</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Customers or POSPs submit claim details and supporting documents through the connected
                        portal.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="about-card posp-step-card d-flex flex-column h-100 p-4 border-2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="badge-icon-circle bg-primary text-white"
                            style="width:44px; height:44px; font-size:1.1rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <path d="M9 11l3 3L22 4" />
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 02 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">AI-Assisted Document Checks</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Review submitted documents against configured requirements and flag missing or
                        inconsistent information.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="about-card posp-step-card d-flex flex-column h-100 p-4 border-2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="badge-icon-circle bg-primary text-white"
                            style="width:44px; height:44px; font-size:1.1rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 03 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Anomaly Detection</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Surface mismatched details, duplicate submissions or unusual patterns for further review.
                    </p>
                </div>
            </div>

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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Smart Claim Routing</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Route claims to the relevant handler, insurer or TPA workflow using configured logic.
                    </p>
                </div>
            </div>

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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Status Tracking</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Keep customers, POSPs and teams informed as the claim moves through each stage.
                    </p>
                </div>
            </div>

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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Claims Analytics</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Track claim volumes, ageing and workflow bottlenecks across your claims book.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 4: MANAGING CLAIMS, DAY TO DAY        -->
<!-- ============================================= -->
<section class="posp-dashboard-section" id="dashboard">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">MANAGING CLAIMS, DAY TO DAY</div>
            <h2 class="section-title">Keep Every Claim Moving Before Delays Slow You <span class="text-primary-custom">Down</span></h2>
            <p class="section-desc mx-auto">Give customers clear claim visibility while your team manages documents, routing and
                follow-ups centrally.</p>
        </div>

        <div class="row g-4 mt-2">
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
                            <span class="pillar-tag-badge mb-1">CUSTOMER / POSP</span>
                            <h3 class="about-card-title mb-0" style="font-size:1.35rem;">For the customer / POSP</h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>File a Claim</strong> — Submit claim details and documents directly through the connected portal.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Track Claim Status</strong> — See the current claim stage without repeated calls or emails.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Upload Documents</strong> — Add supporting documents digitally and receive prompts for required information.</div>
                        </div>
                    </div>
                </div>
            </div>

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
                            <span class="pillar-tag-badge mb-1">BROKER / BACK OFFICE</span>
                            <h3 class="about-card-title mb-0" style="font-size:1.35rem;">For the broker / back office</h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Claims Routing</strong> — Route claims to the relevant handler, insurer or TPA workflow.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Anomaly Flags</strong> — Surface inconsistencies and unusual patterns for further review.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Partner Coordination</strong> — Keep supported insurer and TPA claim information connected.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Claims Analytics</strong> — Track claim volumes, ageing and workflow bottlenecks centrally.</div>
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
                    style="background-color: #ffffff; border-color: #cee4fd !important; font-size: 0.8125rem;">Customer / POSP Portal</span>
                <span class="text-muted fw-bold">|</span>
                <span class="badge px-2.5 py-1.5 rounded-pill fw-bold text-primary-custom border"
                    style="background-color: #ffffff; border-color: #cee4fd !important; font-size: 0.8125rem;">Broker Admin Control</span>
                <span class="text-muted fw-bold">|</span>
                <span class="badge px-2.5 py-1.5 rounded-pill fw-bold text-primary-custom border"
                    style="background-color: #ffffff; border-color: #cee4fd !important; font-size: 0.8125rem;">Role-Based Access</span>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 5: AI IN CLAIMS                       -->
<!-- ============================================= -->
<section class="posp-ai-section" id="ai-features">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">AI IN CLAIMS</div>
            <h2 class="section-title">AI-Backed Software to Accelerate Claims <span class="text-primary-custom">Process</span></h2>
            <p class="section-desc mx-auto">Apply AI assistance to document checks, anomaly detection and routing while keeping
                business rules and human review in control.</p>
        </div>

        <div class="row g-4 mt-2">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-card posp-ai-card d-flex flex-column h-100 p-4 border-2">
                    <div class="about-icon-box posp-ai-icon-box mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">Document Validation Support</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Check submitted documents against configured requirements and surface missing
                        information.
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                <div class="about-card posp-ai-card d-flex flex-column h-100 p-4 border-2">
                    <div class="about-icon-box posp-ai-icon-box mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">Anomaly Detection</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Flag inconsistent details, duplicate submissions and unusual patterns for review.
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="about-card posp-ai-card d-flex flex-column h-100 p-4 border-2">
                    <div class="about-icon-box posp-ai-icon-box mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">Claims Routing Support</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Use claim and policy information to support routing towards the relevant workflow.
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
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
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">Connected Policy Context</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Use available policy and customer information to support claim handling and follow-up.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-4 p-3 p-sm-4 rounded-4 bg-light border text-center shadow-sm" style="border-color: #cee4fd !important;"
            data-aos="zoom-in">
            <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap"
                style="font-size: 0.875rem; font-weight: 600;">
                <span class="text-dark">AI assists the workflow. Configured rules, insurer processes and human review remain in control.</span>
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
            <h2 class="section-title">Claims Management Across Insurance <span class="text-primary-custom">Distribution</span></h2>
            <p class="section-desc mx-auto">Support brokers, agencies, lenders and corporate programmes through one connected
                claims workflow.</p>
        </div>

        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-card text-center p-4 h-100">
                    <div class="about-icon-box mx-auto mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v3M12 14v3M16 14v3" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2">Insurance Brokers</h3>
                    <p class="about-card-text">
                        Give POSPs and customers claim visibility while managing claim activity centrally.
                    </p>
                </div>
            </div>

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
                    <h3 class="about-card-title mb-2">Insurance Agencies</h3>
                    <p class="about-card-text">
                        Manage growing claim volumes without relying on scattered emails, files and trackers.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
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
                        Track supported claims for loan-linked and embedded insurance policies through connected
                        workflows.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="about-card text-center p-4 h-100">
                    <div class="about-icon-box mx-auto mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <polygon points="12 2 2 7 12 12 22 7 12 2" />
                            <polyline points="2 17 12 22 22 17" />
                            <polyline points="2 12 12 17 22 12" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2">Corporates</h3>
                    <p class="about-card-text">
                        Give employees a clearer way to submit and follow supported group insurance claims.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-4 p-3 p-sm-4 rounded-4 bg-light border text-center shadow-sm" style="border-color: #cee4fd !important;"
            data-aos="zoom-in">
            <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap"
                style="font-weight: 600; font-size: 0.875rem;">
                <span class="text-dark fw-bold">Claim submitted</span>
                <span class="text-primary-custom">➔</span>
                <span class="badge px-2.5 py-1.5 rounded-pill fw-bold text-primary-custom border"
                    style="background-color: #ffffff; border-color: #cee4fd !important; font-size: 0.8125rem;">AI-assisted checks</span>
                <span class="text-primary-custom">➔</span>
                <span class="text-dark fw-bold">Routed to the relevant workflow</span>
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
            <div class="section-label">THE DIFFERENCE</div>
            <h2 class="section-title">Where FT Digital Claims Gives You The <span class="text-primary-custom">Edge</span></h2>
            <p class="section-desc mx-auto">See how one claims management platform replaces fragmented intake, follow-ups and
                tracking.</p>
        </div>

        <div class="row g-4 mt-3">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="about-card h-100 p-4 border-2"
                    style="background: #ffffff; border-color: #e2e8f0 !important;">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom"
                        style="border-color: #e2e8f0 !important;">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-secondary-subtle text-dark px-3 py-2 rounded-pill fw-bold"
                                style="font-size: 0.875rem; background-color: #f1f5f9 !important;">WITHOUT CLAIMS SOFTWARE</span>
                        </div>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Manual claims handling</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Claims filed and followed up over email</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Documents checked one by one</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Anomalies depend on manual review</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Claims assigned manually</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Customers chase status updates</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Bottlenecks are difficult to spot</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Reporting comes from separate records</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="about-card h-100 p-4 border-2 shadow-lg position-relative"
                    style="background: #ffffff; border-color: #086ad8 !important;">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4 pb-3 border-bottom"
                        style="border-color: #cee4fd !important;">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary text-white px-2.5 px-sm-3 py-2 rounded-pill fw-bold"
                                style="font-size: 0.8125rem;">⚡ WITH FT DIGITAL CLAIMS</span>
                        </div>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Connected claims management</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Claims submitted digitally</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">AI-assisted document checks</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Anomalies flagged for review</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Claims routed through configured logic</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Claim status stays visible</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Analytics surface workflow bottlenecks</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Claims data stays connected</div>
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
<section class="faq-section section-padding" id="faq" aria-label="Insurance Claims Management Questions Answered">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5 col-md-12 faq-left-column">
                <div class="faq-left-content">
                    <div class="section-label">CLAIMS SOFTWARE, EXPLAINED</div>
                    <h2 class="section-title">
                        Insurance Claims Management Questions, <span class="text-primary-custom">Answered</span>
                    </h2>
                    <p class="section-desc mb-4">
                        Key questions about FT Digital Claims, AI assistance, integrations and claim visibility.
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

            <div class="col-lg-7 col-md-12" data-aos="fade-left" data-aos-delay="150">
                <div class="accordion faq-accordion-custom" id="claimsFaqAccordion">
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#claimsFaq1" aria-expanded="true" aria-controls="claimsFaq1">
                                What is insurance claims management software?
                            </button>
                        </h3>
                        <div id="claimsFaq1" class="accordion-collapse collapse show" data-bs-parent="#claimsFaqAccordion">
                            <div class="accordion-body">
                                Insurance claims management software helps organisations manage claim intake,
                                documents, routing, status and reporting through one digital system.
                                It reduces reliance on disconnected emails, files and manual trackers.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="120">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#claimsFaq2" aria-expanded="false" aria-controls="claimsFaq2">
                                How does FT Digital Claims use AI?
                            </button>
                        </h3>
                        <div id="claimsFaq2" class="accordion-collapse collapse" data-bs-parent="#claimsFaqAccordion">
                            <div class="accordion-body">
                                FT Digital Claims uses AI assistance for document checks, anomaly detection and selected
                                routing workflows.
                                Configured rules and human review remain part of the claims process.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="140">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#claimsFaq3" aria-expanded="false" aria-controls="claimsFaq3">
                                Can customers and POSPs track claim status?
                            </button>
                        </h3>
                        <div id="claimsFaq3" class="accordion-collapse collapse" data-bs-parent="#claimsFaqAccordion">
                            <div class="accordion-body">
                                Supported customer and POSP journeys can show the current claim stage and relevant
                                status information.
                                Available visibility depends on the configured insurer or TPA workflow.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="160">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#claimsFaq4" aria-expanded="false" aria-controls="claimsFaq4">
                                Can FT Digital Claims connect with insurers and TPAs?
                            </button>
                        </h3>
                        <div id="claimsFaq4" class="accordion-collapse collapse" data-bs-parent="#claimsFaqAccordion">
                            <div class="accordion-body">
                                FT Digital Claims supports configured insurer and TPA workflows.
                                The exact integration, data exchange and claim stages depend on available APIs and
                                implementation scope.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="180">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#claimsFaq5" aria-expanded="false" aria-controls="claimsFaq5">
                                Does FT Digital Claims support embedded and loan-linked insurance claims?
                            </button>
                        </h3>
                        <div id="claimsFaq5" class="accordion-collapse collapse" data-bs-parent="#claimsFaqAccordion">
                            <div class="accordion-body">
                                Supported claims can connect with embedded or loan-linked policy workflows where the
                                applicable product and insurer journey are configured.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#claimsFaq6" aria-expanded="false" aria-controls="claimsFaq6">
                                Is FT Digital Claims a standalone claims management platform?
                            </button>
                        </h3>
                        <div id="claimsFaq6" class="accordion-collapse collapse" data-bs-parent="#claimsFaqAccordion">
                            <div class="accordion-body">
                                FT Digital Claims is part of the FondosTech insurance technology platform and can connect
                                claim activity with available policy, customer and distribution information.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="220">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#claimsFaq7" aria-expanded="false" aria-controls="claimsFaq7">
                                Does AI approve insurance claims automatically?
                            </button>
                        </h3>
                        <div id="claimsFaq7" class="accordion-collapse collapse" data-bs-parent="#claimsFaqAccordion">
                            <div class="accordion-body">
                                AI assists selected document, anomaly and routing workflows.
                                Final claim decisions remain subject to the applicable insurer, TPA, configured rules and
                                authorised decision process.
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
<section class="about-cta-section" id="posp-cta">
    <div class="container" data-aos="fade-up">
        <div class="about-cta-card">
            <div class="section-label mb-3" style="color: rgba(255,255,255,0.85);">SEE IT IN ACTION</div>
            <h2 class="about-cta-title">See How FT Digital Claims Fits Your Claims Workflow</h2>
            <p class="about-cta-desc">
                Show us how claims move today. See how intake, documents, routing and status tracking
                could run through one connected platform.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="<?php echo $base_path; ?>contact.php"
                    class="btn btn-light rounded-pill fw-bold py-3 px-5 d-inline-flex align-items-center gap-2 cta-hover-btn"
                    style="color:#086ad8;">
                    <span>Schedule a demo</span>
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
