<?php
$page_title = "FT POSP Sure | AI-Powered POSP Insurance Software | FondosTech";
$page_description = "Scale your POSP agent network with FT POSP Sure — AI-powered POSP software for digital agent onboarding, instant quoting, multi-insurer policy issuance, automated commission payouts, and IRDAI compliance.";
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
                        style="font-size: 0.78125rem; color: #086ad8;">POSP MANAGEMENT SOFTWARE</span>
                </div>

                <h1 class="posp-hero-title mb-3">
                    FT POSP Sure — <span class="text-primary-custom">Software Built to Scale.</span>
                </h1>

                <p class="section-desc mb-4" style="max-width: 600px; margin-left: 0;">
                    AI-powered POSP software that handles onboarding, policy issuance, commissions and renewals — so you
                    scale your agent network, not your back office.
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
                        <span>5,000+ Active POSPs</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center text-primary-custom" style="width: 22px; height: 22px; font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.12);">✓</span>
                        <span>50+ Insurer APIs</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center text-primary-custom" style="width: 22px; height: 22px; font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.12);">✓</span>
                        <span>99.8% Auto Reconciliation</span>
                    </div>
                </div>
            </div>

            <!-- Right Side Image Frame -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="posp-hero-image-wrapper position-relative">
                    <div class="posp-hero-image-card shadow-lg rounded-4 overflow-hidden border bg-white p-2">
                        <img src="assets/images/insurance-policy-management-software-10.png"
                            alt="FT POSP Sure Agent Management Software Interface" class="img-fluid w-100 rounded-3"
                            style="object-fit: cover;">
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
                <div class="stat-txt">POSPs Supported</div>
            </div>
            <div class="stat-item">
                <div class="stat-val counter" data-target="50" data-suffix="+">50+</div>
                <div class="stat-txt">Insurer REST APIs</div>
            </div>
            <div class="stat-item">
                <div class="stat-val">99.8%</div>
                <div class="stat-txt">Auto Reconciliation</div>
            </div>
            <div class="stat-item">
                <div class="stat-val">100%</div>
                <div class="stat-txt">IRDAI Compliant</div>
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
            <div class="section-label">WHY IT'S MANDATORY</div>
            <h2 class="section-title">Why A Spreadsheet Can't Run Your <span class="text-primary-custom">POSP Network
                    Anymore</span></h2>
            <p class="section-desc mx-auto" style="max-width: 840px;">
                A POSP is IRDAI-licensed to sell insurance from day one — but licensing is just step one. Every POSP
                still needs KYC, policy issuance, payouts and renewal tracking. That works on spreadsheets at 50 agents.
                Past a few hundred, it breaks — which is why POSP software is now mandatory for any insurance broker or
                agency business serious about scaling distribution.
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
                        <span class="pillar-tag-badge">LICENSING RISK</span>
                    </div>

                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Compliance Doesn't Scale Manually
                    </h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        Every onboarding, every policy, every commission carries a compliance trail. One missed step
                        across thousands of agents is a licensing risk no insurance business can absorb.
                    </p>

                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact Level</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">⚡ IRDAI Audit Risk</span>
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
                        <span class="pillar-tag-badge">AGENT ATTRITION</span>
                    </div>

                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Slow Payouts Cost You Agents</h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        A POSP who waits days to get activated or weeks to get paid moves to a competitor who pays
                        faster. Fast onboarding and instant payouts keep top agents active on your network.
                    </p>

                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact Level</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">⏱️ Payout Delay
                            Risk</span>
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
                        <span class="pillar-tag-badge">OPERATIONAL BOTTLE-NECK</span>
                    </div>

                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Reconciliation Breaks Past 100 Agents
                    </h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        Matching commissions by hand in Excel works at 50 POSPs. At 1,000+, manual reconciliation eats
                        an entire operations team's month — every single month without exception.
                    </p>

                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact Level</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">📊 Excel Scale
                            Limit</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scale Solution Banner Callout -->
        <div class="mt-4 p-3 p-sm-4 rounded-4 bg-light border text-center shadow-sm" style="border-color: #cee4fd !important;"
            data-aos="zoom-in">
            <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap"
                style="font-size: 0.875rem; font-weight: 600;">
                <span class="text-dark">Spreadsheets break at 50 agents</span>
                <span class="text-primary-custom d-none d-sm-inline">➔</span>
                <span class="text-primary-custom fw-bold">FT POSP Sure scales past 5,000 POSPs with zero extra back-office team</span>
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
            <h2 class="section-title">One Platform, From First Login <span class="text-primary-custom">To First
                    Payout</span></h2>
            <p class="section-desc mx-auto">Every step a POSP takes — from the moment they're added to the moment they
                get paid — runs on one connected system.</p>
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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Digital Agent Onboarding</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Your admin adds a new POSP. KYC is submitted digitally, and the agent is verified and activated
                        — live and ready to sell within minutes, not days.
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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Instant Product Access &amp; Training
                    </h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        The POSP gets immediate access to your full product catalog across 50+ insurers, with
                        multilingual support so onboarding isn't limited by language.
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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Quoting &amp; Instant Policy Issuance
                    </h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        The POSP compares insurers and issues a policy digitally — powered by FondosTech's insurtech
                        engine, with Vahan API auto-verifying vehicle details for motor insurance instantly.
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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Commission Tracking &amp; Instant
                        Payouts</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Every policy sold is tracked against commission rules automatically — payouts can trigger as
                        soon as a policy is confirmed, not at month-end.
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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Claims &amp; Endorsement Support</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Claims are raised and tracked directly from the same dashboard — no separate claims management
                        system, no phone calls to the back office.
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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Automatic Renewal Tracking</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Upcoming renewals are flagged automatically, so POSPs follow up before a policy lapses — not
                        after.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 4: MANAGING YOUR POSP NETWORK         -->
<!-- ============================================= -->
<section class="posp-dashboard-section" id="dashboard">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">MANAGING YOUR POSP NETWORK</div>
            <h2 class="section-title">Everything Your Network Needs, <span class="text-primary-custom">In One
                    Dashboard</span></h2>
            <p class="section-desc mx-auto">Dual-view architecture designed for both agent speed and broker control.</p>
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
                            <span class="pillar-tag-badge mb-1">AGENT INTERFACE</span>
                            <h3 class="about-card-title mb-0" style="font-size:1.35rem;">For The POSP</h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>My Profile:</strong> Personal details, POSP reference ID, credentials — always
                                current.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>My Policy / Proposal / Quotation:</strong> Every quote and active policy
                                tracked in one view.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>My Renewals:</strong> Upcoming policy renewals surfaced before they lapse.
                            </div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Quote Request:</strong> Instant multi-insurer quoting from a single unified
                                screen.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Policy Claim:</strong> Claims raised and tracked without a call to the back
                                office.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>My Reward:</strong> Commission and incentive progress visible in real time.
                            </div>
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
                            <span class="pillar-tag-badge mb-1">ADMIN CONTROL</span>
                            <h3 class="about-card-title mb-0" style="font-size:1.35rem;">For The Broker</h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Sales-team / FOS Management:</strong> Performance across every POSP in one
                                dashboard.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Analytics &amp; Reporting:</strong> Real-time GWP, active policies, and top
                                performers at a glance.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Commission Systems:</strong> Automated calculation rules with zero month-end
                                scramble.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Multilingual Support:</strong> Onboard and support POSPs across India in their
                                language.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>IRDAI Audit Compliance:</strong> Full audit logs, training tracking, and
                                licensing verification.</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>White-Label Customization:</strong> Custom branding, sub-domains, and agent
                                portal themes.</div>
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
            <div class="section-label">AI IN INSURANCE</div>
            <h2 class="section-title">AI That Actually Helps Your <span class="text-primary-custom">POSPs Sell
                    More</span></h2>
            <p class="section-desc mx-auto">FT POSP Sure isn't digitized paperwork — it's insurtech built with AI at the
                core.</p>
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
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">AI-Matched Policy Recommendations
                    </h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        POSPs move from generic quotes to hyperpersonalized recommendations, closing more policy sales
                        without spending extra time per lead.
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
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">AI-Assisted Underwriting Support</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        More consistent, faster risk assessment on every policy issued through the platform — reducing
                        underwriting turnaround times.
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
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">Vahan API Vehicle Verification</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Auto-fetches and verifies vehicle registration data for motor insurance — eliminating manual
                        data entry errors and point-of-sale fraud.
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
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">AI-Powered Claims Routing</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Claims raised by a POSP are automatically validated and routed to the right handler instantly,
                        turning days into hours.
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
            <h2 class="section-title">One Platform, Every Kind Of <span class="text-primary-custom">POSP Business</span>
            </h2>
            <p class="section-desc mx-auto">Empowering traditional insurance brokerages, agencies, banks, and modern
                fintechs alike.</p>
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
                        Run your entire POSP network on one white-label platform instead of building it in-house.
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
                        From a single branch to a multi-state agency business, the same software scales with you.
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
                        Extend POSP-style distribution alongside lending products without individual carrier
                        integrations.
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
                    <h3 class="about-card-title mb-2">Fintechs</h3>
                    <p class="about-card-text">
                        Add a licensed insurance distribution layer to your app without building POSP infrastructure.
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
            <div class="section-label">THE DIFFERENCE</div>
            <h2 class="section-title">See What Changes, <span class="text-primary-custom">Side By Side</span></h2>
            <p class="section-desc mx-auto">Compare legacy manual agent operations with FT POSP Sure's automated
                platform.</p>
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
                                style="font-size: 0.875rem; background-color: #f1f5f9 !important;">WITHOUT POSP
                                SOFTWARE</span>
                        </div>
                        <span class="text-muted fw-semibold" style="font-size: 0.8125rem;">Legacy Manual Mode</span>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">POSPs onboarded via manual paperwork &amp; WhatsApp groups</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Commissions calculated manually in Excel every month-end</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Policies issued by re-entering data per insurer portal</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Motor details entered by hand, highly error-prone</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Claims tracked over email threads with zero real-time visibility
                            </div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Upcoming renewals missed with no timely agent follow-up</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Distribution growth strictly capped by back-office staff capacity
                            </div>
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
                            <div class="text-dark fw-bold">Digital agent onboarding, verified and live within minutes
                            </div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Instant, automated commission calculations &amp; direct
                                payouts</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Multi-insurer instant quoting &amp; 1-click policy issuance
                            </div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Vahan API auto-verifies vehicle registration data instantly
                            </div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Claims raised and tracked in real time on one unified
                                dashboard</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Policy renewals flagged automatically before policies lapse
                            </div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Seamlessly scale from 50 POSPs to 5,000+ with the same team
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
                    <div class="section-label">POSP SOFTWARE, EXPLAINED</div>
                    <h2 class="section-title">
                        Your POSP Questions, <span class="text-primary-custom">Answered</span>
                    </h2>
                    <p class="section-desc mb-4">
                        Everything you need to know about FT POSP Sure onboarding, IRDAI compliance, quoting, and
                        payouts.
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
                                What is a POSP in insurance?
                            </button>
                        </h3>
                        <div id="pospFaq1" class="accordion-collapse collapse show" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                A POSP (Point of Sale Person) is an individual authorized by IRDAI to sell specific,
                                pre-underwritten insurance products after basic training, without needing a full
                                insurance agent license.
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="120">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pospFaq2" aria-expanded="false" aria-controls="pospFaq2">
                                Why do I need POSP software instead of managing agents manually?
                            </button>
                        </h3>
                        <div id="pospFaq2" class="accordion-collapse collapse" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                Manual POSP management works for a small network but breaks past a few hundred agents.
                                POSP software like FT POSP Sure automates the entire process, so growth isn't limited by
                                back-office capacity.
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="140">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pospFaq3" aria-expanded="false" aria-controls="pospFaq3">
                                Is FT POSP Sure IRDAI-compliant?
                            </button>
                        </h3>
                        <div id="pospFaq3" class="accordion-collapse collapse" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                Yes. Every step — onboarding, KYC, policy issuance, commission payouts — follows
                                IRDAI-aligned workflows, so brokers stay compliant by default.
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="160">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pospFaq4" aria-expanded="false" aria-controls="pospFaq4">
                                Does FT POSP Sure work for motor insurance quoting?
                            </button>
                        </h3>
                        <div id="pospFaq4" class="accordion-collapse collapse" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                Yes. It integrates with the Vahan API to auto-fetch and verify vehicle registration
                                details, reducing manual entry and fraud risk.
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="180">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pospFaq5" aria-expanded="false" aria-controls="pospFaq5">
                                Can FT POSP Sure be white-labeled under my own brand?
                            </button>
                        </h3>
                        <div id="pospFaq5" class="accordion-collapse collapse" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                Yes. It's a full-stack, white-label platform — POSPs and customers see your brand, while
                                FondosTech's infrastructure runs underneath.
                            </div>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pospFaq6" aria-expanded="false" aria-controls="pospFaq6">
                                How is FT POSP Sure different from generic insurance CRM software?
                            </button>
                        </h3>
                        <div id="pospFaq6" class="accordion-collapse collapse" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                Generic CRM software tracks leads and contacts. FT POSP Sure is complete insurance
                                agency management software — onboarding, quoting, issuance, commissions, claims and
                                renewals, all in one system.
                            </div>
                        </div>
                    </div>

                    <!-- Item 7 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="220">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pospFaq7" aria-expanded="false" aria-controls="pospFaq7">
                                Does FT POSP Sure use AI?
                            </button>
                        </h3>
                        <div id="pospFaq7" class="accordion-collapse collapse" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                Yes. AI powers policy recommendations, underwriting support and claims routing
                                throughout the platform.
                            </div>
                        </div>
                    </div>

                    <!-- Item 8 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="240">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pospFaq8" aria-expanded="false" aria-controls="pospFaq8">
                                Is FT POSP Sure suitable for insurance agencies of any size?
                            </button>
                        </h3>
                        <div id="pospFaq8" class="accordion-collapse collapse" data-bs-parent="#pospFaqAccordion">
                            <div class="accordion-body">
                                Yes. It scales from a single-branch agency to a multi-state brokerage managing thousands
                                of POSPs, on the same core platform.
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
            <h2 class="about-cta-title">Ready To Run Your POSP Network On One Platform?</h2>
            <p class="about-cta-desc">
                See how FT POSP Sure replaces spreadsheets, WhatsApp groups and manual commission tracking — in one live
                demo.
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