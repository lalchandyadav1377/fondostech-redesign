<?php
$page_title = "FT PayIn-Payout | AI-Powered Payment Automation Software | FondosTech";
$page_description = "AI-powered PayIn-Payout software that collects premiums, verifies every transaction against policy data, and releases agent payouts automatically — removing the manual payment tracking that slows brokers down.";
$active_page = "payin_payout";
$page_css = ["assets/css/pages/posp.css"];
$page_js = ["assets/js/pages/posp.js"];
include 'includes/header.php';
?>

<!-- ============================================= -->
<!-- SECTION 1: HERO BANNER                        -->
<!-- ============================================= -->
<section class="posp-hero-section" id="payin-payout-hero">
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
                        style="font-size: 0.78125rem; color: #086ad8;">PAYIN-PAYOUT AUTOMATION SOFTWARE</span>
                </div>

                <h1 class="posp-hero-title mb-3">
                    FT PayIn-Payout — <span class="text-primary-custom">Every Payment, Verified Instantly.</span>
                </h1>

                <p class="section-desc mb-4" style="max-width: 600px; margin-left: 0;">
                    AI-powered PayIn-Payout software that collects premiums, verifies every transaction against policy data, and releases agent payouts automatically — removing the manual payment tracking that slows brokers down.
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
                        <span>Instant Payment Verification</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center text-primary-custom" style="width: 22px; height: 22px; font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.12);">✓</span>
                        <span>50+ Insurer &amp; Gateway Integrations</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center text-primary-custom" style="width: 22px; height: 22px; font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.12);">✓</span>
                        <span>Zero Manual Payout Tracking</span>
                    </div>
                </div>
            </div>

            <!-- Right Side Image Frame -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="posp-hero-image-wrapper position-relative">
                    <div class="posp-hero-image-card shadow-lg rounded-4 overflow-hidden border bg-white p-2">
                        <img src="assets/images/insurance-policy-management-software-10.png"
                            alt="FT PayIn-Payout Software Interface" class="img-fluid w-100 rounded-3"
                            style="object-fit: cover;">
                    </div>
                    <!-- Floating Metric Badge -->
                    <div class="posp-floating-metric-badge shadow-lg bg-white border rounded-4 p-3 position-absolute">
                        <div class="d-flex align-items-center gap-3">
                            <div class="badge-icon-circle bg-primary text-white">⚡</div>
                            <div>
                                <div class="fw-bold text-dark" style="font-size: 1.05rem; line-height: 1.2;">Same-Day Payouts</div>
                                <div class="text-muted" style="font-size: 0.78125rem;">Auto-Verified Payment Matching</div>
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
            <h2 class="section-title">Payment Tracking Shouldn't Be Your Team's <span class="text-primary-custom">Full-Time Job</span></h2>
            <p class="section-desc mx-auto" style="max-width: 840px;">
                Every premium collected and every payout released moves through a different bank, gateway, or insurer portal. Tracking this manually means constant follow-ups, delayed payouts, and agents left wondering when — or if — their money will arrive.
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
                                <rect x="2" y="5" width="20" height="14" rx="2" />
                                <line x1="2" y1="10" x2="22" y2="10" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">SCATTERED PAYMENT SOURCES</span>
                    </div>

                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Multiple Gateways, One Spreadsheet</h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        Premiums come in through different banks and gateways — tracking them all manually means constant cross-checking, every single day.
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
                        <span class="pillar-tag-badge">VERIFICATION GAPS</span>
                    </div>

                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Unverified PayIns Delay Everything</h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        A premium that isn't verified quickly holds up policy issuance — and every downstream step waits with it.
                    </p>

                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact Level</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">📉 Policy Delay Risk</span>
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
                        <span class="pillar-tag-badge">DELAYED PAYOUTS</span>
                    </div>

                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Agents Wait Longer Than They Should</h3>
                    <p class="about-card-text flex-grow-1 mb-4">
                        Manual payout runs mean agents are paid days after they've earned it — and every delay chips away at trust.
                    </p>

                    <div class="pt-3 border-top d-flex align-items-center justify-content-between"
                        style="border-color: #cee4fd !important;">
                        <span class="text-muted" style="font-size: 0.8125rem;">Impact Level</span>
                        <span class="fw-bold text-primary-custom" style="font-size: 0.875rem;">⚠️ Agent Retention Risk</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scale Solution Banner Callout -->
        <div class="mt-4 p-3 p-sm-4 rounded-4 bg-light border text-center shadow-sm" style="border-color: #cee4fd !important;"
            data-aos="zoom-in">
            <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap"
                style="font-size: 0.875rem; font-weight: 600;">
                <span class="text-dark">Manual PayIn-Payout tracking adds days to every cycle</span>
                <span class="text-primary-custom d-none d-sm-inline">➔</span>
                <span class="text-primary-custom fw-bold">FT PayIn-Payout verifies and releases payments the same day, automatically</span>
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
            <h2 class="section-title">From Premium Collected to Agent Paid — <span class="text-primary-custom">One Automated Flow</span></h2>
            <p class="section-desc mx-auto">Every stage of the payment cycle — from PayIn to payout — flows through one connected system, without a single manual bank statement check.</p>
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
                                <rect x="2" y="5" width="20" height="14" rx="2" />
                                <line x1="2" y1="10" x2="22" y2="10" />
                            </svg>
                        </div>
                        <span class="pillar-tag-badge">STEP 01 / 06</span>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Every Source, Captured Automatically</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Premium payments are captured automatically from every connected bank, gateway, and insurer portal — no manual entry required.
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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Every Payment Matched to Its Policy</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        FT PayIn-Payout matches each payment against the corresponding policy automatically, confirming amount, source, and status.
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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Mismatches Flagged Before They Spread</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        The system flags mismatches — short payments, duplicate entries, unmatched transactions — before they affect policy issuance.
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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Side-by-Side Review, Fast Fixes</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Flagged payments are surfaced for quick review, with the transaction and policy data shown side by side.
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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">Payouts Follow Verification, Automatically</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Once a PayIn is verified, the corresponding agent or POSP payout is triggered automatically — no separate payment run.
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
                    <h3 class="about-card-title mb-2" style="min-height: 3.25rem;">A Clean Ledger, Every Cycle</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Every PayIn and payout cycle produces a clean, exportable ledger — ready for internal review or regulatory inspection.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 4: MANAGING PAYMENTS, DAY TO DAY     -->
<!-- ============================================= -->
<section class="posp-dashboard-section" id="dashboard">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">MANAGING PAYMENTS, DAY TO DAY</div>
            <h2 class="section-title">Everything Your Finance Team Needs To <span class="text-primary-custom">Track Every Rupee</span></h2>
            <p class="section-desc mx-auto">Dual-view architecture designed for agent transparency and finance team control.</p>
        </div>

        <div class="row g-4 mt-2">
            <!-- For The Agent / POSP -->
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
                            <span class="pillar-tag-badge mb-1">AGENT &amp; POSP INTERFACE</span>
                            <h3 class="about-card-title mb-0" style="font-size:1.35rem;">For The Agent / POSP</h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>PayIn Status View</strong> — see confirmed premium payments in real time</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Payout Tracker</strong> — every payout, matched to the policy and payment that triggered it</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Delay Alerts</strong> — notified directly if a payout is held pending verification</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For Finance / The Back Office -->
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
                            <span class="pillar-tag-badge mb-1">FINANCE CONTROL CONSOLE</span>
                            <h3 class="about-card-title mb-0" style="font-size:1.35rem;">For Finance / The Back Office</h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Multi-Source PayIn Matching</strong> — every bank, gateway, and insurer payment matched automatically</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Automated Discrepancy Detection</strong> — mismatches flagged before payout, not after</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Instant Payout Triggers</strong> — verified PayIns release payouts without a manual run</div>
                        </div>
                        <div class="pillar-check-item">
                            <span class="check-icon">✓</span>
                            <div><strong>Audit-Ready Reporting</strong> — exportable ledgers for every payment cycle</div>
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
                    style="background-color: #ffffff; border-color: #cee4fd !important; font-size: 0.8125rem;">👤 Agent Payment View</span>
                <span class="text-muted fw-bold">+</span>
                <span class="badge px-2.5 py-1.5 rounded-pill fw-bold text-primary-custom border"
                    style="background-color: #ffffff; border-color: #cee4fd !important; font-size: 0.8125rem;">📋 Finance Admin Console</span>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 5: AI IN PAYIN-PAYOUT                 -->
<!-- ============================================= -->
<section class="posp-ai-section" id="ai-features">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">AI IN PAYIN-PAYOUT</div>
            <h2 class="section-title">AI That Verifies Payments <span class="text-primary-custom">Before You Even Ask</span></h2>
            <p class="section-desc mx-auto">FT PayIn-Payout isn't a bank statement tracker — it's insurtech built with AI at the core.</p>
        </div>

        <div class="row g-4 mt-2">
            <!-- Feature 1 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-card posp-ai-card d-flex flex-column h-100 p-4 border-2">
                    <div class="about-icon-box posp-ai-icon-box mb-3">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"
                            viewBox="0 0 24 24">
                            <rect x="2" y="5" width="20" height="14" rx="2" />
                            <line x1="2" y1="10" x2="22" y2="10" />
                        </svg>
                    </div>
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">AI-Powered Payment Matching</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Matches incoming premiums to the correct policy automatically, regardless of which bank or gateway it arrived through.
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
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">AI-Powered Discrepancy Detection</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Flags short payments, duplicates, and unmatched transactions that a manual reviewer would likely miss.
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
                    <h3 class="about-card-title mb-2" style="min-height: 2.75rem;">Automated Payout Logic</h3>
                    <p class="about-card-text flex-grow-1 mb-0">
                        Once a PayIn is verified, payouts trigger automatically based on your commission and payout rules — not a manual run.
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
                        Built on FondosTech's insurtech engine, connecting payment data directly to policy and POSP records already on the platform.
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
            <h2 class="section-title">One Payment System, Every Kind of <span class="text-primary-custom">Insurance Business</span></h2>
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
                        Verify premiums and release agent payouts across every insurer on your panel, without a finance team chasing bank statements.
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
                        Scale your agent network without your payment tracking workload scaling at the same rate.
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
                        Track PayIns and payouts on embedded insurance products attached to loans, from the same platform that issued them.
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
                        Verify and release partner or broker payouts on group insurance programs, with full audit-ready visibility.
                    </p>
                </div>
            </div>
        </div>

        <!-- Scale Flow Bar -->
        <div class="mt-4 p-3 p-sm-4 rounded-4 bg-light border text-center shadow-sm" style="border-color: #cee4fd !important;"
            data-aos="zoom-in">
            <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap"
                style="font-weight: 600; font-size: 0.875rem;">
                <span class="text-dark fw-bold">Premium paid in</span>
                <span class="text-primary-custom">➔</span>
                <span class="badge px-2.5 py-1.5 rounded-pill fw-bold text-primary-custom border"
                    style="background-color: #ffffff; border-color: #cee4fd !important; font-size: 0.8125rem;">AI verifies the transaction</span>
                <span class="text-primary-custom">➔</span>
                <span class="text-dark fw-bold">discrepancies flagged for review</span>
                <span class="text-primary-custom d-none d-sm-inline">➔</span>
                <span class="text-dark fw-bold d-none d-sm-inline">payout released automatically</span>
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
            <p class="section-desc mx-auto">Compare legacy manual payment tracking with FT PayIn-Payout's automated platform.</p>
        </div>

        <div class="row g-4 mt-3">
            <!-- Left Side: WITHOUT PAYIN-PAYOUT SOFTWARE -->
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="about-card h-100 p-4 border-2"
                    style="background: #ffffff; border-color: #e2e8f0 !important;">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom"
                        style="border-color: #e2e8f0 !important;">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-secondary-subtle text-dark px-3 py-2 rounded-pill fw-bold"
                                style="font-size: 0.875rem; background-color: #f1f5f9 !important;">WITHOUT PAYIN-PAYOUT SOFTWARE</span>
                        </div>
                        <span class="text-muted fw-semibold" style="font-size: 0.8125rem;">Legacy Manual Mode</span>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Payments tracked by hand across bank statements</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Every gateway and insurer checked separately, manually</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Discrepancies caught inconsistently, if at all</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Payouts run manually, once verification is "done"</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Agents call finance for payment status</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">No unified ledger beyond scattered spreadsheets</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f8fafc; border-color: #e2e8f0;">
                            <span class="check-icon" style="background: #94a3b8; color: #ffffff;">✕</span>
                            <div class="text-muted">Payment cycles take days to close</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: WITH FT PAYIN-PAYOUT -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="about-card h-100 p-4 border-2 shadow-lg position-relative"
                    style="background: #ffffff; border-color: #086ad8 !important;">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4 pb-3 border-bottom"
                        style="border-color: #cee4fd !important;">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary text-white px-2.5 px-sm-3 py-2 rounded-pill fw-bold"
                                style="font-size: 0.8125rem;">⚡ WITH FT PAYIN-PAYOUT</span>
                        </div>
                        <span class="badge bg-primary-subtle text-primary-custom px-2.5 py-1 rounded-pill fw-bold"
                            style="font-size: 0.75rem; background-color: rgba(8, 106, 216, 0.08) !important;">RECOMMENDED</span>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Payments matched automatically by AI</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Every bank, gateway, and insurer verified instantly</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Discrepancies flagged automatically, before payout</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Payouts triggered instantly on verified PayIns</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Agents see live payment status, no calls needed</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Audit-ready ledger generated every cycle</div>
                        </div>
                        <div class="pillar-check-item" style="background: #f5faff; border-color: #cee4fd;">
                            <span class="check-icon">✓</span>
                            <div class="text-dark fw-bold">Payment cycles closed the same day</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 8: PAYIN-PAYOUT SOFTWARE EXPLAINED (FAQ) -->
<!-- ============================================= -->
<section class="faq-section section-padding" id="faq" aria-label="PayIn-Payout Questions Answered">
    <div class="container">
        <div class="row g-5">
            <!-- Left Sticky Sidebar -->
            <div class="col-lg-5 col-md-12 faq-left-column">
                <div class="faq-left-content">
                    <div class="section-label">PAYIN-PAYOUT SOFTWARE, EXPLAINED</div>
                    <h2 class="section-title">
                        Your PayIn-Payout Questions, <span class="text-primary-custom">Answered</span>
                    </h2>
                    <p class="section-desc mb-4">
                        Everything you need to know about FT PayIn-Payout's verification, matching, and payout process.
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
                <div class="accordion faq-accordion-custom" id="payinPayoutFaqAccordion">
                    <!-- Item 1 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#payFaq1" aria-expanded="true" aria-controls="payFaq1">
                                What is PayIn-Payout automation software?
                            </button>
                        </h3>
                        <div id="payFaq1" class="accordion-collapse collapse show" data-bs-parent="#payinPayoutFaqAccordion">
                            <div class="accordion-body">
                                PayIn-Payout automation software is a digital system that automatically verifies incoming premium payments against policy data and releases agent or POSP payouts — replacing manual bank statement tracking and payment reconciliation.
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="120">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#payFaq2" aria-expanded="false" aria-controls="payFaq2">
                                How does FT PayIn-Payout use AI?
                            </button>
                        </h3>
                        <div id="payFaq2" class="accordion-collapse collapse" data-bs-parent="#payinPayoutFaqAccordion">
                            <div class="accordion-body">
                                It uses AI to automatically match incoming payments to policy records, detect discrepancies or short payments, and trigger payout logic based on verified transactions.
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="140">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#payFaq3" aria-expanded="false" aria-controls="payFaq3">
                                Can agents see their payment and payout status in real time?
                            </button>
                        </h3>
                        <div id="payFaq3" class="accordion-collapse collapse" data-bs-parent="#payinPayoutFaqAccordion">
                            <div class="accordion-body">
                                Yes. Agents and POSPs can track confirmed premium payments and triggered payouts directly from their dashboard without contacting finance.
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="160">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#payFaq4" aria-expanded="false" aria-controls="payFaq4">
                                Is FT PayIn-Payout a standalone tool, or part of a larger platform?
                            </button>
                        </h3>
                        <div id="payFaq4" class="accordion-collapse collapse" data-bs-parent="#payinPayoutFaqAccordion">
                            <div class="accordion-body">
                                It's built into FondosTech's insurance broker software, so payment data connects directly to policy and POSP records already on the platform.
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="180">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#payFaq5" aria-expanded="false" aria-controls="payFaq5">
                                How much faster are payouts with FT PayIn-Payout?
                            </button>
                        </h3>
                        <div id="payFaq5" class="accordion-collapse collapse" data-bs-parent="#payinPayoutFaqAccordion">
                            <div class="accordion-body">
                                Payouts are triggered instantly once a PayIn is verified, cutting payout turnaround from days or weeks to the same day.
                            </div>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#payFaq6" aria-expanded="false" aria-controls="payFaq6">
                                Does FT PayIn-Payout work with any bank or payment gateway?
                            </button>
                        </h3>
                        <div id="payFaq6" class="accordion-collapse collapse" data-bs-parent="#payinPayoutFaqAccordion">
                            <div class="accordion-body">
                                Yes. It integrates via API and statement feeds with major banks, payment gateways, and insurer portals to consolidate all payment flows.
                            </div>
                        </div>
                    </div>

                    <!-- Item 7 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="220">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#payFaq7" aria-expanded="false" aria-controls="payFaq7">
                                Is FT PayIn-Payout insurtech, or traditional payment software?
                            </button>
                        </h3>
                        <div id="payFaq7" class="accordion-collapse collapse" data-bs-parent="#payinPayoutFaqAccordion">
                            <div class="accordion-body">
                                It's built specifically for insurance on FondosTech's insurtech engine — connecting payments directly to policy data, commission structures, and agent records.
                            </div>
                        </div>
                    </div>

                    <!-- Item 8 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="240">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#payFaq8" aria-expanded="false" aria-controls="payFaq8">
                                Does FT PayIn-Payout generate audit-ready reports?
                            </button>
                        </h3>
                        <div id="payFaq8" class="accordion-collapse collapse" data-bs-parent="#payinPayoutFaqAccordion">
                            <div class="accordion-body">
                                Yes. Clean, exportable ledgers and reconciliation reports are generated automatically for every payment cycle.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 9: READY TO VERIFY PAYMENTS CTA BANNER-->
<!-- ============================================= -->
<section class="about-cta-section" id="posp-cta">
    <div class="container" data-aos="fade-up">
        <div class="about-cta-card">
            <h2 class="about-cta-title">Ready to Verify Payments and Release Payouts, Instantly?</h2>
            <p class="about-cta-desc">
                See how FT PayIn-Payout replaces manual bank tracking with one AI-powered payment system.
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
