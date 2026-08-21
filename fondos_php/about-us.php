<?php
$page_title = "About Us | FondosTech - Shaping the Future of Insurance Distribution";
$active_page = "about";
$page_css = ["assets/css/pages/about.css"];
$page_js = ["assets/js/pages/about.js"];
include 'includes/header.php';
?>

<!-- ============================================= -->
<!-- SECTION 1: HERO & EXPERIENCE STATS            -->
<!-- ============================================= -->
<section class="about-hero-section" id="about-hero">
    <div class="about-glow-orb-1"></div>
    <div class="about-glow-orb-2"></div>

    <div class="container text-center" data-aos="fade-up">
        <!-- Live Pulsing Indicator Badge -->
        <div class="about-hero-badge-wrap mb-3 d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill bg-white border shadow-sm">
            <span class="about-badge-dot"></span>
            <span class="fw-semibold text-uppercase tracking-wider" style="font-size: 0.78125rem; color: #086ad8;">TRUSTED ENTERPRISE INSURTECH INFRASTRUCTURE</span>
        </div>

        <h1 class="about-hero-title">
            Shaping the Future of Insurance Distribution, <span class="text-primary-custom">One Integration at a Time</span>
        </h1>

        <p class="section-desc mx-auto mb-4" style="max-width: 760px;">
            FondosTech is an insurtech infrastructure company building next-generation digital insurance distribution software. Founded in India in 2016, we empower insurance brokerages, banks, POSP networks, and fintech platforms to scale seamlessly.
        </p>

        <!-- Yrs Experience Badge Card -->
        <div class="row justify-content-center mt-3">
            <div class="col-lg-6 col-md-8">
                <div class="years-experience-card" data-aos="zoom-in" data-aos-delay="150">
                    <div class="years-number justify-content-center">
                        <span>9+</span> <span style="font-size:2.25rem; opacity:0.85;">Yrs</span>
                    </div>
                    <div class="years-label text-center">
                        Powering insurance tech infrastructure &amp; multi-line distribution across India
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Row -->
        <div class="about-stats-row">
            <div class="stat-item">
                <div class="stat-val counter" data-target="50" data-suffix="+">50+</div>
                <div class="stat-txt">Insurers Integrated</div>
            </div>
            <div class="stat-item">
                <div class="stat-val counter" data-target="550" data-suffix="+">550+</div>
                <div class="stat-txt">Active Brokers &amp; Fintechs</div>
            </div>
            <div class="stat-item">
                <div class="stat-val counter" data-target="1" data-suffix="M+">1M+</div>
                <div class="stat-txt">Monthly Policies Issued</div>
            </div>
            <div class="stat-item">
                <div class="stat-val">24/7</div>
                <div class="stat-txt">Enterprise SLA Support</div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 2: GUIDING BELIEFS & IMAGE SHOWCASE   -->
<!-- ============================================= -->
<section class="guiding-beliefs-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Left Text Content -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="section-label mb-2">OUR GUIDING BELIEFS &amp; MISSION</div>
                <h2 class="section-title mb-4">Driven by Customer Trust &amp; <span class="text-primary-custom">Engineering Precision</span></h2>
                <p class="section-desc mb-4">
                    We build technology that puts security, speed, and accuracy first. Insurance distribution relies heavily on trust, and our zero-downtime architecture ensures brokerages, agents, and policyholders have unbroken support when it matters most.
                </p>

                <!-- Bullet Highlights Grid -->
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2" style="font-weight: 600; color: #212529;">
                            <span class="about-icon-sm">✓</span> 70%+ Overhead Reduction
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2" style="font-weight: 600; color: #212529;">
                            <span class="about-icon-sm">✓</span> 99.99% Uptime SLA
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2" style="font-weight: 600; color: #212529;">
                            <span class="about-icon-sm">✓</span> 50+ Insurer REST APIs
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2" style="font-weight: 600; color: #212529;">
                            <span class="about-icon-sm">✓</span> IRDAI Audit Compliance
                        </div>
                    </div>
                </div>

                <div class="about-card p-4 border-start border-4 border-primary shadow-sm" style="border-radius: 1rem;">
                    <div class="section-label mb-1">OUR GOAL TODAY</div>
                    <h3 class="about-card-title mb-2" style="font-size: 1.15rem;">How we help your numbers</h3>
                    <p class="about-card-text" style="font-size: 0.9375rem;">
                        By automating policy issuance, commission statement reconciliation, and agent onboarding, FondosTech reduces operational overhead by over 70% while accelerating daily policy throughput across all lines of business.
                    </p>
                </div>
            </div>

            <!-- Right Showcase Image Card -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="about-image-showcase-wrapper position-relative">
                    <div class="about-image-card shadow-lg rounded-4 overflow-hidden border">
                        <img src="assets/images/insurance-policy-management-software-11.png" alt="FondosTech Insurtech Software Platform Showcase" class="img-fluid w-100 rounded-4" style="object-fit: cover;">
                    </div>
                    <!-- Floating Glassmorphic Metric Badge -->
                    <div class="about-floating-glass-badge">
                        <div class="d-flex align-items-center gap-3">
                            <div class="badge-icon-circle">⚡</div>
                            <div>
                                <div class="fw-bold text-dark" style="font-size: 1.1rem; line-height: 1.2;">70%+</div>
                                <div class="text-muted" style="font-size: 0.78125rem;">OpEx Overhead Saved</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 3: METRICS BANNER BAR (PROMINENT PROOF)-->
<!-- ============================================= -->
<section class="metrics-bar-section">
    <div class="container" data-aos="fade-up">
        <div class="metrics-bar-card">
            <div class="row g-4 align-items-center">
                <div class="col-6 col-md-3 metric-col">
                    <div class="metric-num counter" data-target="115" data-suffix="+">115+</div>
                    <div class="metric-lbl">Insurers &amp; Partners</div>
                </div>
                <div class="col-6 col-md-3 metric-col">
                    <div class="metric-num counter" data-target="58" data-suffix="+">58+</div>
                    <div class="metric-lbl">Tech Team Experts</div>
                </div>
                <div class="col-6 col-md-3 metric-col">
                    <div class="metric-num counter" data-target="1" data-suffix="M+">1M+</div>
                    <div class="metric-lbl">Monthly Transactions</div>
                </div>
                <div class="col-6 col-md-3 metric-col">
                    <div class="metric-num counter" data-target="4" data-suffix="">4</div>
                    <div class="metric-lbl">Innovation Centers</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 4: VERTICAL TIMELINE                  -->
<!-- ============================================= -->
<section class="timeline-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">OUR JOURNEY</div>
            <h2 class="section-title">How we've grown, <span class="text-primary-custom">year over year</span></h2>
            <p class="section-desc mx-auto">From early API experiments to India's leading unified insurtech distribution architecture.</p>
        </div>

        <div class="timeline-wrap" id="timelineWrap">
            <div class="timeline-progress-bar" id="timelineProgress"></div>

            <!-- Item 1 -->
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="timeline-dot"></div>
                <div class="about-card">
                    <span class="timeline-year">2016</span>
                    <h3 class="about-card-title" style="font-size:1.25rem;">Inception &amp; Core Architecture</h3>
                    <p class="about-card-text">Setting out to build a unified core engine to bridge disconnected insurance company portals and broker systems.</p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="150">
                <div class="timeline-dot"></div>
                <div class="about-card">
                    <span class="timeline-year">Early Years</span>
                    <h3 class="about-card-title" style="font-size:1.25rem;">Deep Insurer Relationship Building</h3>
                    <p class="about-card-text">Partnered directly with top public &amp; private life and non-life insurance carriers across India to establish secure REST API integrations.</p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="timeline-dot"></div>
                <div class="about-card">
                    <span class="timeline-year">The Pivot</span>
                    <h3 class="about-card-title" style="font-size:1.25rem;">Enterprise Scale Expansion</h3>
                    <p class="about-card-text">Scaled our tech infrastructure to support high-frequency POSP networks, automated commission reconciliation, and instant quote engines.</p>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="250">
                <div class="timeline-dot"></div>
                <div class="about-card">
                    <span class="timeline-year">Leading API</span>
                    <h3 class="about-card-title" style="font-size:1.25rem;">Unified Middleware Pioneer</h3>
                    <p class="about-card-text">Over 50+ insurer integrations across life, health, motor, and commercial insurance unified under a single REST API framework.</p>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="timeline-dot"></div>
                <div class="about-card">
                    <span class="timeline-year">Today</span>
                    <h3 class="about-card-title" style="font-size:1.25rem;">Integrated Full-Stack Architecture</h3>
                    <p class="about-card-text">Launching AI Underwriting, Voice Support Automation, and IRDAI Audit Compliance Suites to power the next generation of insurtech.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 5: OUR FOUNDATIONAL PILLARS (ENHANCED)-->
<!-- ============================================= -->
<section class="mission-values-section" id="pillars">
    <div class="container" data-aos="fade-up">
        <div class="mission-banner-card">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-3">
                <div>
                    <div class="section-label mb-1">OUR FOUNDATIONAL PILLARS</div>
                    <h2 class="section-title mb-0" style="font-size: 1.85rem;">Mission, vision &amp; values <span class="text-primary-custom">that define us</span></h2>
                </div>

                <!-- Interactive Tab Pill Buttons -->
                <div class="mission-tab-nav mb-0">
                    <button class="mission-tab-btn active d-inline-flex align-items-center gap-2" data-tab="mission">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>
                        <span>Mission</span>
                    </button>
                    <button class="mission-tab-btn d-inline-flex align-items-center gap-2" data-tab="vision">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        <span>Vision</span>
                    </button>
                    <button class="mission-tab-btn d-inline-flex align-items-center gap-2" data-tab="goals">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                        <span>Goals</span>
                    </button>
                    <button class="mission-tab-btn d-inline-flex align-items-center gap-2" data-tab="values">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        <span>Values</span>
                    </button>
                </div>
            </div>

            <hr class="my-4" style="border-color: var(--border-active, #CEE4FD); opacity: 0.6;">

            <!-- Tab Content Panes -->
            <div id="tab-mission" class="mission-tab-pane active">
                <span class="pillar-tag-badge mb-2">CORE MISSION</span>
                <h3 class="mission-pane-title">Connecting Every Insurance Stakeholder Seamlessly</h3>
                <p class="mission-pane-desc mb-4">
                    Our mission is to build robust software that connects every insurance stakeholder — brokers, banks, agents, and policyholders — through a unified, high-throughput platform that simplifies policy lifecycle management and drives zero-error operations.
                </p>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="pillar-check-item"><span class="check-icon">✓</span> Zero-Downtime Middleware</div>
                    </div>
                    <div class="col-md-4">
                        <div class="pillar-check-item"><span class="check-icon">✓</span> 70%+ OpEx Overhead Saved</div>
                    </div>
                    <div class="col-md-4">
                        <div class="pillar-check-item"><span class="check-icon">✓</span> Real-Time IRDAI Audit Trails</div>
                    </div>
                </div>
            </div>

            <div id="tab-vision" class="mission-tab-pane">
                <span class="pillar-tag-badge mb-2">FUTURE VISION</span>
                <h3 class="mission-pane-title">Transforming Insurance Into An Instant Digital Commodity</h3>
                <p class="mission-pane-desc mb-4">
                    We envision an ecosystem where any digital platform or bank can embed comprehensive multi-line insurance coverage into its customer journeys in minutes, protected by automated IRDAI compliance and instant claims processing.
                </p>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="pillar-check-item"><span class="check-icon">✓</span> Embedded Insurance APIs</div>
                    </div>
                    <div class="col-md-4">
                        <div class="pillar-check-item"><span class="check-icon">✓</span> Instant Automated Underwriting</div>
                    </div>
                    <div class="col-md-4">
                        <div class="pillar-check-item"><span class="check-icon">✓</span> Pan-India Agent Network</div>
                    </div>
                </div>
            </div>

            <div id="tab-goals" class="mission-tab-pane">
                <span class="pillar-tag-badge mb-2">2028 STRATEGIC GOALS</span>
                <h3 class="mission-pane-title">Empowering 1,000+ Distributors by 2028</h3>
                <p class="mission-pane-desc mb-4">
                    Our goal is to power over 10 million monthly policy transactions while maintaining 99.99% system availability, automating 99.8% of commission reconciliations, and setting the gold standard for insurtech reliability.
                </p>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="pillar-check-item"><span class="check-icon">✓</span> 10M+ Monthly Transactions</div>
                    </div>
                    <div class="col-md-4">
                        <div class="pillar-check-item"><span class="check-icon">✓</span> 99.8% Auto Reconciliation</div>
                    </div>
                    <div class="col-md-4">
                        <div class="pillar-check-item"><span class="check-icon">✓</span> 1,000+ Active Broker Networks</div>
                    </div>
                </div>
            </div>

            <div id="tab-values" class="mission-tab-pane">
                <span class="pillar-tag-badge mb-2">CORE VALUES</span>
                <h3 class="mission-pane-title">Integrity, Engineering Rigor &amp; Customer Trust</h3>
                <p class="mission-pane-desc mb-4">
                    We operate with total transparency, relentless technical rigor, and an obsessive focus on creating long-term value for our insurance carrier partners and distribution networks.
                </p>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="pillar-check-item"><span class="check-icon">✓</span> Bank-Grade Security</div>
                    </div>
                    <div class="col-md-4">
                        <div class="pillar-check-item"><span class="check-icon">✓</span> 24/7 Enterprise SLA Support</div>
                    </div>
                    <div class="col-md-4">
                        <div class="pillar-check-item"><span class="check-icon">✓</span> Transparent Financial Logs</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 6: WHY TEAMS CHOOSE FONDOSTECH (6-CARD)-->
<!-- ============================================= -->
<section class="why-choose-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">WHY CHOOSE US</div>
            <h2 class="section-title">Why teams choose <span class="text-primary-custom">FondosTech</span></h2>
            <p class="section-desc mx-auto">Engineered for security, speed, and effortless multi-insurer distribution.</p>
        </div>

        <div class="row g-4 mt-3">
            <!-- Feature 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-card">
                    <div class="about-card-watermark">01</div>
                    <div class="about-icon-box">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    </div>
                    <h3 class="about-card-title">Turnkey Deployment</h3>
                    <p class="about-card-text">Launch a full-featured multi-insurer portal and POSP agent app in weeks with pre-built UI components and REST APIs.</p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="about-card">
                    <div class="about-card-watermark">02</div>
                    <div class="about-icon-box">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 class="about-card-title">50+ Insurer Network</h3>
                    <p class="about-card-text">Access real-time quotation, policy generation, and endorsement APIs across all major Indian insurance carriers through one key.</p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="about-card">
                    <div class="about-card-watermark">03</div>
                    <div class="about-icon-box">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                    </div>
                    <h3 class="about-card-title">Deep Industry Expertise</h3>
                    <p class="about-card-text">Built by engineers and domain leaders with 9+ years of hands-on experience in Indian regulatory compliance and Insurtech architecture.</p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="about-card">
                    <div class="about-card-watermark">04</div>
                    <div class="about-icon-box">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h3 class="about-card-title">Rec-Engine Auto Match</h3>
                    <p class="about-card-text">Automates insurer statement reconciliation with 99.8% precision, eliminating manual Excel matching and payout delays.</p>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="about-card">
                    <div class="about-card-watermark">05</div>
                    <div class="about-icon-box">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                    </div>
                    <h3 class="about-card-title">Agile Core Delivery</h3>
                    <p class="about-card-text">Cloud-native infrastructure maintaining 99.99% availability even during peak renewal season volumes.</p>
                </div>
            </div>

            <!-- Feature 6 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                <div class="about-card">
                    <div class="about-card-watermark">06</div>
                    <div class="about-icon-box">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                    </div>
                    <h3 class="about-card-title">Omnichannel Readiness</h3>
                    <p class="about-card-text">Engage policyholders across Web, Mobile App, POSP Agent portals, and WhatsApp conversational AI seamlessly.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 7: FOUNDERS & DIRECTORS               -->
<!-- ============================================= -->
<section class="founders-section" id="founders">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">FOUNDERS &amp; DIRECTORS</div>
            <h2 class="section-title">Visionary Leadership <span class="text-primary-custom">&amp; Board of Directors</span></h2>
            <p class="section-desc mx-auto">Pioneering the future of insurance infrastructure with visionary leadership, domain expertise, and engineering excellence.</p>
        </div>

        <div class="row g-4 justify-content-center mt-2">
            <!-- Founder & CEO -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-card text-center p-4">
                    <div class="leader-avatar-circle mx-auto mb-3" style="width:84px; height:84px; font-size:1.6rem;">AS</div>
                    <span class="about-card-badge">FOUNDER &amp; CEO</span>
                    <h3 class="about-card-title mb-1">Aditya Sharma</h3>
                    <div class="leader-role-tag mb-2">Chief Executive Officer</div>
                    <p class="about-card-text">15+ years scaling insurance fintechs across Asia. Aditya leads overall company vision, capital strategy, and enterprise insurance carrier partnerships.</p>
                    <div class="mt-3">
                        <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="share-btn" title="LinkedIn Profile">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Co-Founder & CTO -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="about-card text-center p-4">
                    <div class="leader-avatar-circle mx-auto mb-3" style="width:84px; height:84px; font-size:1.6rem;">MG</div>
                    <span class="about-card-badge">CO-FOUNDER &amp; CTO</span>
                    <h3 class="about-card-title mb-1">Meenakshi Gupta</h3>
                    <div class="leader-role-tag mb-2">Chief Technology Officer</div>
                    <p class="about-card-text">Former Principal Software Architect with expertise in high-throughput API integrations, microservices, and distributed cloud infrastructure.</p>
                    <div class="mt-3">
                        <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="share-btn" title="LinkedIn Profile">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Managing Director -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="about-card text-center p-4">
                    <div class="leader-avatar-circle mx-auto mb-3" style="width:84px; height:84px; font-size:1.6rem;">RS</div>
                    <span class="about-card-badge">MANAGING DIRECTOR</span>
                    <h3 class="about-card-title mb-1">Rajesh Singhania</h3>
                    <div class="leader-role-tag mb-2">Executive Board Director</div>
                    <p class="about-card-text">20+ years in insurance governance &amp; capital allocation. Rajesh drives regulatory compliance, corporate operations, and institutional growth.</p>
                    <div class="mt-3">
                        <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="share-btn" title="LinkedIn Profile">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 8: OUR TEAM SECTION (SLIDER LOOP)     -->
<!-- ============================================= -->
<section class="leadership-section" id="team">
    <div class="container">
        <div class="d-flex align-items-end justify-content-between mb-4 flex-wrap gap-3" data-aos="fade-up">
            <div>
                <div class="section-label">OUR TEAM</div>
                <h2 class="section-title mb-0">Meet the minds <span class="text-primary-custom">behind FondosTech</span></h2>
            </div>
            <!-- Slider Navigation Buttons -->
            <div class="team-slider-controls d-flex gap-2">
                <button class="team-nav-btn team-prev" aria-label="Previous Team Member">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                </button>
                <button class="team-nav-btn team-next" aria-label="Next Team Member">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                </button>
            </div>
        </div>

        <div class="team-slider-wrapper" data-aos="fade-up" data-aos-delay="100">
            <div class="team-slider-track" id="teamSliderTrack">
                <!-- Team Member 1 -->
                <div class="team-slide-card">
                    <div class="about-card">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="leader-avatar-circle mb-0">AS</div>
                            <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="share-btn" title="LinkedIn Profile">
                                <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                            </a>
                        </div>
                        <h3 class="about-card-title mb-1">Aditya Sharma</h3>
                        <div class="leader-role-tag">Founder &amp; CEO</div>
                        <p class="about-card-text">15+ years scaling insurance fintechs across Asia. Aditya leads overall company vision, product strategy, and enterprise insurer partnerships.</p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="team-slide-card">
                    <div class="about-card">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="leader-avatar-circle mb-0">MG</div>
                            <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="share-btn" title="LinkedIn Profile">
                                <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                            </a>
                        </div>
                        <h3 class="about-card-title mb-1">Meenakshi Gupta</h3>
                        <div class="leader-role-tag">Co-Founder &amp; CTO</div>
                        <p class="about-card-text">Former Principal Software Architect with expertise in high-throughput API integrations, microservices, and distributed cloud infrastructure.</p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="team-slide-card">
                    <div class="about-card">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="leader-avatar-circle mb-0">VJ</div>
                            <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="share-btn" title="LinkedIn Profile">
                                <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                            </a>
                        </div>
                        <h3 class="about-card-title mb-1">Vikram Joshi</h3>
                        <div class="leader-role-tag">Chief Product Officer</div>
                        <p class="about-card-text">Spearheading AI voice underwriting and automated commission reconciliation product lines for top tier-1 insurance brokerages.</p>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="team-slide-card">
                    <div class="about-card">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="leader-avatar-circle mb-0">RM</div>
                            <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="share-btn" title="LinkedIn Profile">
                                <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                            </a>
                        </div>
                        <h3 class="about-card-title mb-1">Rohan Mehta</h3>
                        <div class="leader-role-tag">Head of Engineering</div>
                        <p class="about-card-text">Overseeing backend architecture, security protocols, and zero-downtime database clusters for multi-insurer REST integrations.</p>
                    </div>
                </div>

                <!-- Team Member 5 -->
                <div class="team-slide-card">
                    <div class="about-card">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="leader-avatar-circle mb-0">PN</div>
                            <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="share-btn" title="LinkedIn Profile">
                                <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                            </a>
                        </div>
                        <h3 class="about-card-title mb-1">Priya Nair</h3>
                        <div class="leader-role-tag">VP of Operations &amp; Reconciliation</div>
                        <p class="about-card-text">Driving automated commission reconciliation workflows (FT PayIn-PayOut) and insurer statement matching precision for 500+ brokers.</p>
                    </div>
                </div>

                <!-- Team Member 6 -->
                <div class="team-slide-card">
                    <div class="about-card">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="leader-avatar-circle mb-0">SV</div>
                            <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="share-btn" title="LinkedIn Profile">
                                <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                            </a>
                        </div>
                        <h3 class="about-card-title mb-1">Siddharth Verma</h3>
                        <div class="leader-role-tag">Head of POSP Distribution</div>
                        <p class="about-card-text">Scaling POSP onboarding, instant certification training, and policy quote engines for insurance brokerages across pan-India networks.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 9: OUR ADVISORY BOARD SECTION         -->
<!-- ============================================= -->
<section class="advisory-section" id="advisors">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div class="section-label">OUR ADVISORS</div>
            <h2 class="section-title">Guided by <span class="text-primary-custom">industry pioneers</span></h2>
            <p class="section-desc mx-auto">Distinguished advisors bringing decades of leadership across insurance carriers, IRDAI regulation, and venture scale.</p>
        </div>

        <div class="row g-4 mt-3">
            <!-- Advisor 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-card">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="about-card-badge mb-0">INSURTECH VETERAN</span>
                        <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="share-btn" title="LinkedIn Profile">
                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                        </a>
                    </div>
                    <h3 class="about-card-title mb-1">Gaurav Verma</h3>
                    <div class="leader-role-tag">Advisory Board Member</div>
                    <p class="about-card-text">Former MD at leading general insurance companies, advising FondosTech on carrier API relations, multi-line policy underwriting, and institutional growth.</p>
                </div>
            </div>

            <!-- Advisor 2 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="about-card">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="about-card-badge mb-0">IRDAI EXPERT</span>
                        <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="share-btn" title="LinkedIn Profile">
                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                        </a>
                    </div>
                    <h3 class="about-card-title mb-1">Sanjeev Rajeswaran</h3>
                    <div class="leader-role-tag">Advisory Board Member</div>
                    <p class="about-card-text">Providing strategic oversight on regulatory compliance workflows, IRDAI policy guidelines, data privacy, and audit logging frameworks.</p>
                </div>
            </div>

            <!-- Advisor 3 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="about-card">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="about-card-badge mb-0">SAAS INVESTOR</span>
                        <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="share-btn" title="LinkedIn Profile">
                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                        </a>
                    </div>
                    <h3 class="about-card-title mb-1">Farhan Ansar</h3>
                    <div class="leader-role-tag">Advisory Board Member</div>
                    <p class="about-card-text">Venture capital partner advising on platform monetization, international expansion, and enterprise SaaS customer success.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 10: READY TO TRANSFORM CTA BANNER     -->
<!-- ============================================= -->
<section class="about-cta-section">
    <div class="container" data-aos="fade-up">
        <div class="about-cta-card">
            <h2 class="about-cta-title">Ready to make your insurance operations effortless?</h2>
            <p class="about-cta-desc">
                See how FondosTech's software can replace your spreadsheets, disconnected portal tools, and manual reconciliation — in one demo.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="<?php echo $base_path; ?>contact.php" class="btn btn-light rounded-pill fw-bold py-3 px-5 d-inline-flex align-items-center gap-2 cta-hover-btn" style="color:#086ad8;">
                    <span>Schedule a Demo</span>
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="<?php echo $base_path; ?>contact.php" class="btn btn-outline-light rounded-pill fw-bold py-3 px-5">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
