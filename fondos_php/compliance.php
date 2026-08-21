<?php
$page_title = "FT Compliance | AI-Powered IRDAI Compliance Software | FondosTech";
$page_description = "AI-powered IRDAI compliance software that tracks every regulatory checkpoint across quoting, PoSP onboarding, and claims — flagging violations before they happen, so your agency stays audit-ready without the year-end scramble.";
$active_page = "compliance";
$page_css = ["assets/css/pages/posp.css"];
$page_js = ["assets/js/pages/posp.js"];
include 'includes/header.php';
?>

<!-- ============================================= -->
<!-- SECTION 1: HERO BANNER                        -->
<!-- ============================================= -->
<section class="posp-hero-section" id="compliance-hero">
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
                        style="font-size: 0.78125rem; color: #086ad8;">IRDAI COMPLIANCE SOFTWARE</span>
                </div>

                <h1 class="posp-hero-title mb-3">
                    FT Compliance — <span class="text-primary-custom">Audit-Ready, Every Single Day.</span>
                </h1>

                <p class="section-desc mb-4" style="max-width: 600px; margin-left: 0;">
                    AI-powered IRDAI compliance software that tracks every regulatory checkpoint across quoting, PoSP onboarding, and claims — flagging violations before they happen, so your agency stays audit-ready without the year-end scramble.
                </p>

                <div class="d-flex align-items-center gap-3 flex-wrap mb-4">
                    <a href="<?php echo $base_path; ?>contact.php"
                        class="btn btn-primary-custom rounded-pill fw-bold py-2 py-xl-3 px-3 px-xl-5 d-inline-flex align-items-center gap-2 shadow-sm">
                        <span>Book a Free Demo</span>
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                            viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="#how-it-works"
                        class="btn btn-outline-primary-custom rounded-pill fw-bold py-2 py-xl-3 px-3 px-xl-5">See How It
                        Works</a>
                </div>

                <!-- Trust Highlights -->
                <div class="d-flex align-items-center gap-3 flex-wrap posp-hero-trust-row"
                    style="font-size: 0.875rem; font-weight: 600; color: #495057;">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center text-primary-custom" style="width: 22px; height: 22px; font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.12);">✓</span>
                        <span>Real-Time IRDAI Audit Trails</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center text-primary-custom" style="width: 22px; height: 22px; font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.12);">✓</span>
                        <span>Automated Compliance Checks</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center text-primary-custom" style="width: 22px; height: 22px; font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.12);">✓</span>
                        <span>Zero Manual Documentation</span>
                    </div>
                </div>
            </div>

            <!-- Right Side Image Frame -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="posp-hero-image-wrapper position-relative">
                    <div class="posp-hero-image-card shadow-lg rounded-4 overflow-hidden border bg-white p-2">
                        <img src="assets/images/insurance-policy-management-software-10.png"
                            alt="FT Compliance Software Interface" class="img-fluid w-100 rounded-3"
                            style="object-fit: cover;">
                    </div>
                    <!-- Floating Metric Badge -->
                    <div class="posp-floating-metric-badge shadow-lg bg-white border rounded-4 p-3 position-absolute">
                        <div class="d-flex align-items-center gap-3">
                            <div class="badge-icon-circle bg-primary text-white">⚡</div>
                            <div>
                                <div class="fw-bold text-dark" style="font-size: 1.05rem; line-height: 1.2;">Real-Time Flagging</div>
                                <div class="text-muted" style="font-size: 0.78125rem;">AI-Powered Compliance</div>
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
            <h2 class="section-title">Compliance Shouldn't Be a <span class="text-primary-custom">Once-a-Year Panic</span></h2>
            <p class="section-desc mx-auto" style="max-width: 840px;">
                IRDAI regulations touch every step of the policy lifecycle — PoSP licensing, documentation, commission limits, renewal timelines. Tracking this manually means violations often surface only during an audit, when it's too late to fix them quietly.
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
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                <polyline points="14 2 14 8 20 8" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">SCATTERED DOCUMENTATION</span>
                    </div>

                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Compliance Records, Everywhere But One Place</h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        PoSP licenses, policy documents, and commission records live across different systems — pulling them together for an audit takes days.
                    </p>

                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact Level</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">⏱️ High Time Cost</span>
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
                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                                <line x1="12" y1="9" x2="12" y2="13" />
                                <line x1="12" y1="17" x2="12.01" y2="17" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">VIOLATIONS GO UNSEEN</span>
                    </div>

                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Issues Surface Only During Audits</h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        A lapsed PoSP license or a commission breach often isn't caught until a regulator flags it — by then, the penalty is already in motion.
                    </p>

                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact Level</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">⚖️ Regulatory Risk</span>
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
                        <span class="pillar-tag-badge">MANUAL TRACKING</span>
                    </div>

                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Renewal Deadlines Missed Quietly</h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        Without automated tracking, license renewals and compliance deadlines slip past unnoticed — until it's a compliance gap, not just an oversight.
                    </p>

                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact Level</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">📉 License Suspension Risk</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scale Solution Banner Callout -->
        <div class="mt-4 p-3 p-sm-4 rounded-4 bg-light border text-center shadow-sm" style="border-color: #cee4fd !important;"
            data-aos="zoom-in">
            <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap"
                style="font-size: 0.875rem; font-weight: 600;">
                <span class="text-dark">Manual compliance tracking leaves gaps that surface only during audits</span>
                <span class="text-primary-custom d-none d-sm-inline">➔</span>
                <span class="text-primary-custom fw-bold">FT Compliance flags violations in real time, before they become penalties</span>
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
            <h2 class="section-title">From Policy Action to Audit Trail — <span class="text-primary-custom">One Automated Flow</span></h2>
            <p class="section-desc mx-auto">Every compliance checkpoint — from PoSP onboarding to policy renewal — is tracked automatically, without a manual checklist in sight.</p>
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
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                <polyline points="14 2 14 8 20 8" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 01 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Every Requirement, Mapped to Your Operations</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Every IRDAI regulatory requirement — licensing, documentation, commission limits — is mapped against your live agency operations automatically.
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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Continuous, Real-Time Tracking</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        FT Compliance continuously monitors PoSP licenses, policy records, and commission data against these checkpoints in real time.
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
                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 03 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Flagged the Moment It Happens</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        The system flags issues the moment they occur — an expired license, a missing document, a commission breach — not months later.
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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Routed to the Right Person, Instantly</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Flagged issues are routed to the right team member instantly, with the specific regulation and required fix shown clearly.
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
                                <path d="M9 11l3 3L22 4" />
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 05 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">A Verified Record, Without Paperwork</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Every compliance action taken is logged automatically, building a verified record without manual paperwork.
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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Ready the Moment It's Needed</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        A complete, exportable compliance report is available at any time — ready the moment a regulator asks for it.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 4: MANAGING COMPLIANCE, DAY TO DAY   -->
<!-- ============================================= -->
<section class="posp-dashboard-section" id="dashboard">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">MANAGING COMPLIANCE, DAY TO DAY</div>
            <h2 class="section-title">Everything Your Compliance Team Needs To <span class="text-primary-custom">Stay Ahead of Regulators</span></h2>
            <p class="section-desc mx-auto">Dual-view architecture designed for PoSP accountability and compliance team control.</p>
        </div>

        <div class="row g-4 mt-2">
            <!-- For The PoSP / Agent -->
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
                            <span class="pillar-tag-badge mb-1">POSP &amp; AGENT INTERFACE</span>
                            <h3 class="about-card-title mb-0" style="font-size:1.35rem;">For The PoSP / Agent</h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>License Status View</strong> — see certification and renewal status in real time</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Document Checklist</strong> — know exactly what's pending, with clear next steps</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Renewal Reminders</strong> — notified automatically before a license lapses</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For Compliance / The Back Office -->
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
                            <span class="pillar-tag-badge mb-1">COMPLIANCE CONTROL CONSOLE</span>
                            <h3 class="about-card-title mb-0" style="font-size:1.35rem;">For Compliance / The Back Office</h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Real-Time Violation Monitoring</strong> — every checkpoint tracked across the agency, continuously</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Automated Alert Routing</strong> — flagged issues sent to the right person, instantly</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>License &amp; Renewal Tracking</strong> — every PoSP's status visible on one dashboard</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Audit-Ready Reporting</strong> — exportable compliance reports, ready anytime</div>
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
                <span class="text-dark fw-bold mb-1 mb-sm-0">🔒 Single Source of Truth</span>
                <span class="text-primary-custom d-none d-sm-inline">➔</span>
                <span class="badge px-2.5 py-1.5 rounded-pill fw-bold text-primary-custom border"
                    style="background-color: #ffffff; border-color: #cee4fd !important; font-size: 0.8125rem;">👤 PoSP Status View</span>
                <span class="text-muted fw-bold">+</span>
                <span class="badge px-2.5 py-1.5 rounded-pill fw-bold text-primary-custom border"
                    style="background-color: #ffffff; border-color: #cee4fd !important; font-size: 0.8125rem;">📋 Compliance Admin Console</span>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 5: AI IN COMPLIANCE                   -->
<!-- ============================================= -->
<section class="posp-ai-section" id="ai-features">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">AI IN COMPLIANCE</div>
            <h2 class="section-title">AI That Catches Violations <span class="text-primary-custom">Before Regulators Do</span></h2>
            <p class="section-desc mx-auto">FT Compliance isn't a static checklist — it's insurtech built with AI at the core.</p>
        </div>

        <div class="row g-4 mt-2">
            <!-- Feature 1 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-card posp-ai-card d-flex flex-column h-100 p-4 border-2">
                    <div class="about-icon-box posp-ai-icon-box mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">AI-Powered Regulatory Monitoring</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Continuously checks PoSP licenses, documentation, and commission data against IRDAI requirements — no manual review cycles.
                    </p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                <div class="about-card posp-ai-card d-flex flex-column h-100 p-4 border-2">
                    <div class="about-icon-box posp-ai-icon-box mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">AI-Powered Violation Detection</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Flags compliance gaps the moment they occur — expired licenses, missing documents, commission breaches — before an audit surfaces them.
                    </p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="about-card posp-ai-card d-flex flex-column h-100 p-4 border-2">
                    <div class="about-icon-box posp-ai-icon-box mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">Automated Alert Routing</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Once a violation is flagged, the right team member is notified automatically, with the exact fix required.
                    </p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="about-card posp-ai-card d-flex flex-column h-100 p-4 border-2">
                    <div class="about-icon-box posp-ai-icon-box mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <rect x="2" y="7" width="20" height="14" rx="2" />
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">Insurtech-Native Architecture</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Built on FondosTech's insurtech engine, connecting compliance data directly to the policy and PoSP records already on the platform.
                    </p>
                </div>
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
            <h2 class="section-title">One Compliance System, Every Kind of <span class="text-primary-custom">Insurance Business</span></h2>
            <p class="section-desc mx-auto">Empowering traditional insurance brokerages, agencies, banks, and corporates alike.</p>
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
                    <h3 class="about-card-title mb-2">Insurance Brokers</h3>
                    <p class="about-card-text">
                        Stay audit-ready across every insurer relationship, without a compliance team buried in paperwork every quarter.
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
                    <h3 class="about-card-title mb-2">Insurance Agencies</h3>
                    <p class="about-card-text">
                        Scale your PoSP network without your compliance risk scaling faster than your team can track it.
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
                    <h3 class="about-card-title mb-2">Banks &amp; NBFCs</h3>
                    <p class="about-card-text">
                        Track compliance on embedded insurance products attached to loans, from the same platform that issued them.
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
                    <h3 class="about-card-title mb-2">Corporates</h3>
                    <p class="about-card-text">
                        Maintain regulatory visibility across broker and partner relationships on group insurance programs.
                    </p>
                </div>
            </div>
        </div>

        <!-- Scale Flow Bar -->
        <div class="mt-4 p-3 p-sm-4 rounded-4 bg-light border text-center shadow-sm" style="border-color: #cee4fd !important;"
            data-aos="zoom-in">
            <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap"
                style="font-weight: 600; font-size: 0.875rem;">
                <span class="text-dark fw-bold">Policy or PoSP action occurs</span>
                <span class="text-primary-custom">➔</span>
                <span class="badge px-2.5 py-1.5 rounded-pill fw-bold text-primary-custom border"
                    style="background-color: #ffffff; border-color: #cee4fd !important; font-size: 0.8125rem;">AI checks it against IRDAI requirements</span>
                <span class="text-primary-custom">➔</span>
                <span class="text-dark fw-bold">violations flagged instantly</span>
                <span class="text-primary-custom d-none d-sm-inline">➔</span>
                <span class="text-dark fw-bold d-none d-sm-inline">audit trail updated automatically</span>
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
            <h2 class="section-title">See What Changes, <span class="text-primary-custom">Side By Side</span></h2>
            <p class="section-desc mx-auto">Compare legacy manual compliance tracking with FT Compliance's automated platform.</p>
        </div>

        <div class="row g-4 mt-3">
            <!-- Left Side: WITHOUT COMPLIANCE SOFTWARE -->
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="about-card h-100 p-4 border-2"
                    style="background: #ffffff; border-color: #e2e8f0 !important;">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom"
                        style="border-color: #e2e8f0 !important;">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-secondary-subtle text-dark px-3 py-2 rounded-pill fw-bold"
                                style="font-size: 0.875rem; background-color: #f1f5f9 !important;">WITHOUT COMPLIANCE SOFTWARE</span>
                        </div>
                        <span class="text-muted fw-semibold" style="font-size: 0.8125rem;">Legacy Manual Mode</span>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Compliance records scattered across systems and files</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Violations discovered only during audits</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">License renewals tracked manually, or missed entirely</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Documentation compiled by hand, under deadline pressure</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">No real-time visibility into compliance status</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Audit prep takes days of manual record-pulling</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Regulatory risk discovered too late to fix quietly</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: WITH FT COMPLIANCE -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="about-card h-100 p-4 border-2 shadow-lg position-relative"
                    style="background: #ffffff; border-color: #086ad8 !important;">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4 pb-3 border-bottom"
                        style="border-color: #cee4fd !important;">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary text-white px-2.5 px-sm-3 py-2 rounded-pill fw-bold"
                                style="font-size: 0.8125rem;">⚡ WITH FT COMPLIANCE</span>
                        </div>
                        <span class="badge bg-primary-subtle text-primary-custom px-2.5 py-1 rounded-pill fw-bold"
                            style="font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.08) !important;">RECOMMENDED</span>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Every compliance record unified on one platform</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Violations flagged the moment they occur</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">License renewals tracked and auto-reminded</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Documentation logged automatically, in real time</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Live compliance status, visible anytime</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Audit-ready reports generated instantly</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Regulatory risk caught before it becomes a penalty</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 8: COMPLIANCE SOFTWARE EXPLAINED (FAQ)-->
<!-- ============================================= -->
<section class="faq-section section-padding" id="faq" aria-label="Compliance Questions Answered">
    <div class="container">
        <div class="row g-5">
            <!-- Left Sticky Sidebar -->
            <div class="col-lg-5 col-md-12 faq-left-column">
                <div class="faq-left-content">
                    <div class="section-label">COMPLIANCE SOFTWARE, EXPLAINED</div>
                    <h2 class="section-title">
                        Your Compliance Questions, <span class="text-primary-custom">Answered</span>
                    </h2>
                    <p class="section-desc mb-4">
                        Everything you need to know about FT Compliance's monitoring, alerts, and audit reporting.
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
                <div class="accordion faq-accordion-custom" id="complianceFaqAccordion">
                    <!-- Item 1 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#compFaq1" aria-expanded="true" aria-controls="compFaq1">
                                What is IRDAI compliance software?
                            </button>
                        </h3>
                        <div id="compFaq1" class="accordion-collapse collapse show" data-bs-parent="#complianceFaqAccordion">
                            <div class="accordion-body">
                                IRDAI compliance software is a digital system that automatically tracks regulatory requirements — PoSP licensing, documentation, commission limits — and flags violations in real time, replacing manual audit prep and scattered record-keeping.
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="120">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#compFaq2" aria-expanded="false" aria-controls="compFaq2">
                                How does FT Compliance use AI?
                            </button>
                        </h3>
                        <div id="compFaq2" class="accordion-collapse collapse" data-bs-parent="#complianceFaqAccordion">
                            <div class="accordion-body">
                                It uses AI to continuously scan policy actions, PoSP records, and commission data against IRDAI rules, flagging gaps, anomalies, or violations instantly without waiting for human review.
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="140">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#compFaq3" aria-expanded="false" aria-controls="compFaq3">
                                Can PoSPs and agents see their compliance status directly?
                            </button>
                        </h3>
                        <div id="compFaq3" class="accordion-collapse collapse" data-bs-parent="#complianceFaqAccordion">
                            <div class="accordion-body">
                                Yes. PoSPs and field agents have a dedicated status view showing their certification validity, pending document requirements, and renewal reminders.
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="160">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#compFaq4" aria-expanded="false" aria-controls="compFaq4">
                                Is FT Compliance a standalone tool, or part of a larger platform?
                            </button>
                        </h3>
                        <div id="compFaq4" class="accordion-collapse collapse" data-bs-parent="#complianceFaqAccordion">
                            <div class="accordion-body">
                                It's built into FondosTech's insurance broker software, so compliance tracking connects directly to live policy and PoSP records already on the platform.
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="180">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#compFaq5" aria-expanded="false" aria-controls="compFaq5">
                                How does FT Compliance reduce audit prep time?
                            </button>
                        </h3>
                        <div id="compFaq5" class="accordion-collapse collapse" data-bs-parent="#complianceFaqAccordion">
                            <div class="accordion-body">
                                Audit reports are generated automatically in real time. When a regulator or auditor requests documentation, complete compliance trails can be exported instantly instead of taking days to compile.
                            </div>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#compFaq6" aria-expanded="false" aria-controls="compFaq6">
                                Does FT Compliance track license renewals automatically?
                            </button>
                        </h3>
                        <div id="compFaq6" class="accordion-collapse collapse" data-bs-parent="#complianceFaqAccordion">
                            <div class="accordion-body">
                                Yes. The platform tracks PoSP certification expiry dates, sends automated renewal reminders to agents, and alerts compliance managers before a license lapses.
                            </div>
                        </div>
                    </div>

                    <!-- Item 7 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="220">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#compFaq7" aria-expanded="false" aria-controls="compFaq7">
                                Is FT Compliance insurtech, or a generic compliance tool?
                            </button>
                        </h3>
                        <div id="compFaq7" class="accordion-collapse collapse" data-bs-parent="#complianceFaqAccordion">
                            <div class="accordion-body">
                                It's built specifically for insurance on FondosTech's insurtech engine — pre-configured with IRDAI rules and policy workflows, not generic compliance software that requires custom setup.
                            </div>
                        </div>
                    </div>

                    <!-- Item 8 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="240">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#compFaq8" aria-expanded="false" aria-controls="compFaq8">
                                Does FT Compliance generate audit-ready reports?
                            </button>
                        </h3>
                        <div id="compFaq8" class="accordion-collapse collapse" data-bs-parent="#complianceFaqAccordion">
                            <div class="accordion-body">
                                Yes. Exportable, audit-ready reports covering PoSP licensing, policy logs, and commission compliance are available anytime at the click of a button.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 9: READY TO STAY AUDIT-READY CTA     -->
<!-- ============================================= -->
<section class="about-cta-section" id="posp-cta">
    <div class="container" data-aos="fade-up">
        <div class="about-cta-card">
            <h2 class="about-cta-title">Ready to Stay Audit-Ready, Every Single Day?</h2>
            <p class="about-cta-desc">
                See how FT Compliance replaces manual audit prep with one AI-powered compliance system.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="<?php echo $base_path; ?>contact.php"
                    class="btn btn-light rounded-pill fw-bold py-3 px-5 d-inline-flex align-items-center gap-2 cta-hover-btn"
                    style="color:#086ad8;">
                    <span>Schedule a Demo</span>
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="<?php echo $base_path; ?>contact.php"
                    class="btn btn-outline-light rounded-pill fw-bold py-3 px-5">Contact Sales</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
