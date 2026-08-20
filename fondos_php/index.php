<?php
/**
 * FONDOS TECH — Homepage (index.php)
 */

$page_title = 'FondosTech — The Insurance Software Built to Run Your Entire Brokerage';
$page_description = 'FondosTech is end-to-end insurance software that brings quoting, POSP management, claims, reconciliation, payouts and IRDAI compliance onto a single platform.';
$page_css = ['assets/css/pages/home.css'];
$page_js = ['assets/js/pages/home.js'];
$active_page = 'home';

include 'includes/header.php';
?>

<!-- ============================================= -->
<!-- SECTION 1: HERO                               -->
<!-- ============================================= -->
<section class="hero-section" id="hero" aria-label="Hero">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title" data-aos="fade-up"> Insurance Broker Software <br>
                <span class="hero-highlight-box">
                    <span class="hero-typewriter-text" id="heroTypewriter" aria-live="polite">Run with Precision.
                    </span><span class="hero-typewriter-cursor" aria-hidden="true"></span>
                </span>
            </h1>
            <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="50">
                FondosTech is AI-powered Insurtech that unifies Quoting, POSP management, Claims, Commission
                Reconciliation, PayIn-Payouts and IRDAI Compliance on a Single Platform, genuinely Saving Your Team
                Time, Every Single Day.

            </p>

            <div class="hero-buttons" data-aos="fade-up" data-aos-delay="100">
                <a href="#demo" class="btn-primary-custom">
                    Book a Free Demo
                    <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
                <a href="#products" class="btn-outline-custom">Explore Products</a>
            </div>

            <div class="hero-badges" data-aos="fade-up" data-aos-delay="200">
                <div class="badge-trust">

                    <span class="badge-text">✓ 40% Lower Operational Costs</span>
                </div>
                <svg class="badge-dot" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2.5" cy="2.5" r="2.5" fill="rgba(255,255,255,0.4)" />
                </svg>
                <div class="badge-trust">

                    <span class="badge-text">✓ 60% Faster Quotes </span>
                </div>
                <svg class="badge-dot" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2.5" cy="2.5" r="2.5" fill="rgba(255,255,255,0.4)" />
                </svg>
                <div class="badge-trust">

                    <span class="badge-text"> ✓ 2x Business Growth </span>
                </div>
            </div>

            <div class="hero-dashboard" data-aos="fade-up" data-aos-delay="300">
                <div class="hero-dashboard-frame">
                    <img src="assets/images/rectangle-180.png"
                        alt="FondosTech Insurance Dashboard - Policy management, claims tracking, and IRDAI compliance in one platform"
                        loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================= -->
<!-- SECTION 2: INSURER LOGOS                      -->
<!-- ============================================= -->
<section class="ic-section section-padding" id="insurers" aria-label="Insurer partners" data-aos="fade-up">
    <div class="container-fluid px-0">
        <div class="container">
            <div class="ic-section-title" data-aos="fade-up">
                <span>We Enable Seamless </span>
                <span class="text-primary-custom">Integrations With 50+ Insurers.</span>
            </div>
        </div>
        <div class="ic-logos-marquee" data-aos="fade-up" data-aos-delay="100">
            <div class="ic-logos-track">
                <div class="ic-logo-card"><img src="assets/images/magma-ic0.svg" alt="Magma Insurance"></div>
                <div class="ic-logo-card"><img src="assets/images/liberty-general-ic0.svg"
                        alt="Liberty General Insurance"></div>
                <div class="ic-logo-card"><img src="assets/images/image-81.png" alt="Insurance Partner"></div>
                <div class="ic-logo-card"><img src="assets/images/image-10.png" alt="Insurance Partner"></div>
                <div class="ic-logo-card"><img src="assets/images/image-21.png" alt="Insurance Partner"></div>
                <div class="ic-logo-card"><img src="assets/images/image-31.png" alt="Insurance Partner"></div>
                <div class="ic-logo-card"><img src="assets/images/image-40.png" alt="Insurance Partner"></div>
                <div class="ic-logo-card"><img src="assets/images/image-53.png" alt="Insurance Partner"></div>
                <div class="ic-logo-card"><img src="assets/images/image-60.png" alt="Insurance Partner"></div>
                <div class="ic-logo-card"><img src="assets/images/image-70.png" alt="Insurance Partner"></div>
                <div class="ic-logo-card"><img src="assets/images/bajaj-life-ic0.svg" alt="Bajaj Life Insurance"></div>
                <div class="ic-logo-card"><img src="assets/images/shriram-general-ic0.svg"
                        alt="Shriram General Insurance"></div>
            </div>
        </div>
    </div>
</section>



<!-- ============================================= -->
<!-- SECTION 4: INDUSTRIES / SEGMENTS              -->
<!-- ============================================= -->
<section class="industries-section section-padding" id="industries" aria-label="Industries we serve">
    <div class="container">
        <div class="section-header text-center mx-auto" style="max-width: 840px;" data-aos="fade-up">
            <div class="section-label">INDUSTRY / SEGMENTS</div>
            <h2 class="section-title">
                One Insurance Broker Software. <span class="text-primary-custom">Every Insurance Player.</span>
            </h2>
            <p class="section-desc mx-auto">"From Banks and NBFCs to Fintechs and Insurance Agencies — FondosTech's
                Insurtech Platform has a Solution."</p>
        </div>

        <div class="row g-4 mt-2">
            <!-- Card 1 — Banks -->
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="industry-card">
                    <img src="assets/images/bank-nbfcs-hm-10.png" alt="" class="industry-card-bg" aria-hidden="true">
                    <div class="industry-card-icon-box">
                        <img src="assets/images/image-110.png" alt="Banks Icon" width="38" height="38">
                    </div>
                    <h3 class="industry-card-title">Banks</h3>
                    <div class="industry-card-divider"></div>
                    <div class="industry-card-content">
                        <p class="industry-card-text"><strong>Problem:</strong> Banks issue thousands of loans every
                            month but have no easy way to attach insurance — credit life, personal accident, EMI
                            protection — without building tech in-house.</p>
                        <p class="industry-card-text"><strong>Solution:</strong> FondosTech's Lending Module embeds
                            ready-to-issue insurance into every loan disbursement — instant, compliant, no disruption to
                            existing systems.</p>
                    </div>
                    <div class="industry-card-footer">
                        <a href="#demo" class="btn-link-custom">
                            Get Quote
                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 — NBFCs -->
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="industry-card">
                    <img src="assets/images/bank-nbfcs-hm-10.png" alt="" class="industry-card-bg" aria-hidden="true">
                    <div class="industry-card-icon-box">
                        <img src="assets/images/image-90.png" alt="NBFCs Icon" width="38" height="38">
                    </div>
                    <h3 class="industry-card-title">NBFCs</h3>
                    <div class="industry-card-divider"></div>
                    <div class="industry-card-content">
                        <p class="industry-card-text"><strong>Problem:</strong> NBFCs run lean lending operations and
                            can't afford long insurer onboarding cycles or manual policy issuance every time a loan is
                            sanctioned.</p>
                        <p class="industry-card-text"><strong>Solution:</strong> FondosTech's lending APIs connect you
                            to multiple insurers in one integration — instant cover bundled into every disbursement,
                            zero paperwork.</p>
                    </div>
                    <div class="industry-card-footer">
                        <a href="#demo" class="btn-link-custom">
                            Get Quote
                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 — Fintech -->
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="industry-card">
                    <img src="assets/images/bank-nbfcs-hm-10.png" alt="" class="industry-card-bg" aria-hidden="true">
                    <div class="industry-card-icon-box">
                        <img src="assets/images/image-120.png" alt="Fintech Icon" width="38" height="38">
                    </div>
                    <h3 class="industry-card-title">Fintech</h3>
                    <div class="industry-card-divider"></div>
                    <div class="industry-card-content">
                        <p class="industry-card-text"><strong>Problem:</strong> Fintech apps want to cross-sell
                            insurance, but building a marketplace from scratch takes months of integrations and
                            compliance work.</p>
                        <p class="industry-card-text"><strong>Solution:</strong> FondosTech's D2C and POSP
                            infrastructure gives your app a ready insurance layer — customers get quotes, compare, pay
                            and receive their policy, all in-app.</p>
                    </div>
                    <div class="industry-card-footer">
                        <a href="#demo" class="btn-link-custom">
                            Get Quote
                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 4 — Insurance Brokers -->
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="industry-card">
                    <img src="assets/images/bank-nbfcs-hm-10.png" alt="" class="industry-card-bg" aria-hidden="true">
                    <div class="industry-card-icon-box">
                        <img src="assets/images/image-100.png" alt="Insurance Brokers Icon" width="38" height="38">
                    </div>
                    <h3 class="industry-card-title">Insurance Brokers</h3>
                    <div class="industry-card-divider"></div>
                    <div class="industry-card-content">
                        <p class="industry-card-text"><strong>Problem:</strong> Growing a POSP network means managing
                            onboarding, policies, commissions and renewals for thousands of agents — usually on
                            spreadsheets.</p>
                        <p class="industry-card-text"><strong>Solution:</strong> FondosTech's white-label insurance
                            broker software handles onboarding, policies and commissions in real time — scale
                            distribution without scaling your back office.</p>
                    </div>
                    <div class="industry-card-footer">
                        <a href="#demo" class="btn-link-custom">
                            Get Quote
                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 5 — Travel Agents -->
            <div class="col-lg-6 col-md-6 industry-extra-card d-none">
                <div class="industry-card">
                    <img src="assets/images/bank-nbfcs-hm-10.png" alt="" class="industry-card-bg" aria-hidden="true">
                    <div class="industry-card-icon-box">
                        <img src="assets/images/image-53.png" alt="Travel Agents Icon" width="38" height="38">
                    </div>
                    <h3 class="industry-card-title">Travel Agents</h3>
                    <div class="industry-card-divider"></div>
                    <div class="industry-card-content">
                        <p class="industry-card-text"><strong>Problem:</strong> Travel agents sell flights and holidays
                            daily but rarely offer travel insurance — an easy add-on sale left on the table.</p>
                        <p class="industry-card-text"><strong>Solution:</strong> FT Embedded Insure adds travel
                            insurance into your booking flow — instant issuance, and commission on cover you're already
                            positioned to sell.</p>
                    </div>
                    <div class="industry-card-footer">
                        <a href="#demo" class="btn-link-custom">
                            Get Quote
                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 6 — Travel Aggregators -->
            <div class="col-lg-6 col-md-6 industry-extra-card d-none">
                <div class="industry-card">
                    <img src="assets/images/bank-nbfcs-hm-10.png" alt="" class="industry-card-bg" aria-hidden="true">
                    <div class="industry-card-icon-box">
                        <img src="assets/images/image-60.png" alt="Travel Aggregators Icon" width="38" height="38">
                    </div>
                    <h3 class="industry-card-title">Travel Aggregators</h3>
                    <div class="industry-card-divider"></div>
                    <div class="industry-card-content">
                        <p class="industry-card-text"><strong>Problem:</strong> Travel aggregators process thousands of
                            bookings daily, but adding insurance means integrating with insurers one by one.</p>
                        <p class="industry-card-text"><strong>Solution:</strong> FondosTech's embedded APIs plug travel
                            insurance into your booking journey in one integration — instant issuance, live across every
                            booking.</p>
                    </div>
                    <div class="industry-card-footer">
                        <a href="#demo" class="btn-link-custom">
                            Get Quote
                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 7 — Logistics Aggregators -->
            <div class="col-lg-6 col-md-6 industry-extra-card d-none">
                <div class="industry-card">
                    <img src="assets/images/bank-nbfcs-hm-10.png" alt="" class="industry-card-bg" aria-hidden="true">
                    <div class="industry-card-icon-box">
                        <img src="assets/images/image-70.png" alt="Logistics Aggregators Icon" width="38" height="38">
                    </div>
                    <h3 class="industry-card-title">Logistics Aggregators</h3>
                    <div class="industry-card-divider"></div>
                    <div class="industry-card-content">
                        <p class="industry-card-text"><strong>Problem:</strong> Logistics aggregators move goods
                            constantly, but cargo and vehicle insurance is usually sold separately, if at all.</p>
                        <p class="industry-card-text"><strong>Solution:</strong> FT Embedded Insure attaches cargo and
                            CV insurance into your booking flow — instant issuance, so protection travels with every
                            shipment.</p>
                    </div>
                    <div class="industry-card-footer">
                        <a href="#demo" class="btn-link-custom">
                            Get Quote
                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 8 — Automobile Aggregators -->
            <div class="col-lg-6 col-md-6 industry-extra-card d-none">
                <div class="industry-card">
                    <img src="assets/images/bank-nbfcs-hm-10.png" alt="" class="industry-card-bg" aria-hidden="true">
                    <div class="industry-card-icon-box">
                        <img src="assets/images/car-insurance3.svg" alt="Automobile Aggregators Icon" width="38"
                            height="38">
                    </div>
                    <h3 class="industry-card-title">Automobile Aggregators</h3>
                    <div class="industry-card-divider"></div>
                    <div class="industry-card-content">
                        <p class="industry-card-text"><strong>Problem:</strong> Automobile aggregators help customers
                            buy vehicles daily, but insurance and warranty are usually left for the customer to arrange
                            elsewhere.</p>
                        <p class="industry-card-text"><strong>Solution:</strong> FT Embedded Insure adds motor insurance
                            and extended warranty into your purchase journey — instant issuance, built to convert at the
                            moment of sale.</p>
                    </div>
                    <div class="industry-card-footer">
                        <a href="#demo" class="btn-link-custom">
                            Get Quote
                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <button type="button" id="toggle-industries-btn" class="btn-primary-custom"
                style="padding:0.75rem 2.25rem;">
                <span class="btn-text">View All</span>
                <svg class="btn-icon" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"
                    style="transition: transform 0.3s ease;">
                    <path d="M9 4.5L13.5 9L9 13.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 5: ENTERPRISE DEPTH (Stats Counters)  -->
<!-- ============================================= -->
<section class="stats-section section-padding" id="stats" aria-label="Company statistics" data-aos="fade-up">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">
            Enterprise Depth. <span class="text-primary-custom">Global Scale.</span>
        </h2>
        <p class="section-desc" data-aos="fade-up" data-aos-delay="50">Trusted by brokers, banks and NBFCs nationwide
        </p>

        <div class="stats-grid">
            <div class="stat-card" data-aos="zoom-in" data-aos-delay="100">
                <img src="assets/images/background0.png" alt="" class="stat-icon" aria-hidden="true">
                <div class="stat-card-content">
                    <div class="stat-number">
                        <span data-count="49" data-suffix="+">0+</span>
                        <img src="assets/images/mdi-arrow-top-circle0.svg" alt="" class="stat-arrow" aria-hidden="true">
                    </div>
                    <div class="stat-label">Insurers Integrated</div>
                </div>
            </div>

            <div class="stat-card" data-aos="zoom-in" data-aos-delay="200">
                <img src="assets/images/handshake3.png" alt="" class="stat-icon" aria-hidden="true">
                <div class="stat-card-content">
                    <div class="stat-number">
                        <span data-count="40" data-suffix="+">0+</span>
                        <img src="assets/images/mdi-arrow-top-circle1.svg" alt="" class="stat-arrow" aria-hidden="true">
                    </div>
                    <div class="stat-label">Partners Onboard</div>
                </div>
            </div>

            <div class="stat-card" data-aos="zoom-in" data-aos-delay="300">
                <img src="assets/images/image-30.png" alt="" class="stat-icon" aria-hidden="true">
                <div class="stat-card-content">
                    <div class="stat-number">
                        <span data-count="98" data-suffix="M+">0M+</span>
                        <img src="assets/images/mdi-arrow-top-circle2.svg" alt="" class="stat-arrow" aria-hidden="true">
                    </div>
                    <div class="stat-label">GWP Processed</div>
                </div>
            </div>

            <div class="stat-card" data-aos="zoom-in" data-aos-delay="400">
                <img src="assets/images/image-20.png" alt="" class="stat-icon" aria-hidden="true">
                <div class="stat-card-content">
                    <div class="stat-number">
                        <span data-count="600" data-suffix="+">0+</span>
                        <img src="assets/images/mdi-arrow-top-circle3.svg" alt="" class="stat-arrow" aria-hidden="true">
                    </div>
                    <div class="stat-label">Insurance Products</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================================= -->
<!-- SECTION 5: INSURTECH FOR INSURANCE (AI)       -->
<!-- ============================================= -->
<section class="insurtech-section section-padding" id="insurtech" aria-label="AI-powered insurance features"
    data-aos="fade-up">
    <div class="container">
        <div class="insurtech-header text-center" data-aos="fade-up">
            <div class="insurtech-label">AI-POWERED INSURTECH</div>
            <h2 class="section-title text-white">AI-Driven Insurtech Behind Smarter Insurance Broker Software</h2>
            <p class="insurtech-desc">
                FondosTech's AI driven insurtech platform uses to automate quoting, underwriting, claims, and customer
                service — helping brokers understand risk faster. With AI-powered insurance software, brokers close more
                and teams work less, end to end.
            </p>
            <div class="insurtech-btn-wrap">
                <a href="#demo" class="btn-white-custom">
                    Let's Talk
                    <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="insurtech-cards-grid">
            <!-- Card 1 -->
            <div class="insurtech-card" data-aos="fade-up" data-aos-delay="100">
                <div class="insurtech-card-icon">
                    <img src="assets/images/image-50.png" alt="Sales Productivity Icon">
                </div>
                <h3 class="insurtech-card-title">Sales Productivity &amp; Hyperpersonalization</h3>
                <p class="insurtech-card-desc">
                    FondosTech's AI-driven insurtech Platform and insurance CRM software turn generic quotes into
                    hyperpersonalized recommendations — brokers and POSPs close more, faster.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="insurtech-card" data-aos="fade-up" data-aos-delay="150">
                <div class="insurtech-card-icon">
                    <img src="assets/images/handshake0.png" alt="Customer Service Icon">
                </div>
                <h3 class="insurtech-card-title">Customer Service with Voice Agents</h3>
                <p class="insurtech-card-desc">
                    AI in insurtech powers voice agents that handle queries and claims around the clock — software for
                    insurance agents that never clocks out.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="insurtech-card" data-aos="fade-up" data-aos-delay="200">
                <div class="insurtech-card-icon">
                    <img src="assets/images/image-51.png" alt="Augmented Claims Icon">
                </div>
                <h3 class="insurtech-card-title">Augmented Claims Management</h3>
                <p class="insurtech-card-desc">
                    FondosTech's AI insurance claims management software auto-validates and routes claims — insurtech
                    automation that turns days into hours.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="insurtech-card" data-aos="fade-up" data-aos-delay="250">
                <div class="insurtech-card-icon">
                    <img src="assets/images/handshake1.png" alt="Underwriting Icon">
                </div>
                <h3 class="insurtech-card-title">Underwriting Automation &amp; Accuracy</h3>
                <p class="insurtech-card-desc">
                    AI-assisted underwriting, built into our insurance software solutions, brings more consistency and
                    speed to risk assessment on every policy — reducing manual errors and mispriced risk.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="insurtech-card" data-aos="fade-up" data-aos-delay="300">
                <div class="insurtech-card-icon">
                    <img src="assets/images/image-52.png" alt="API Integrations Icon">
                </div>
                <h3 class="insurtech-card-title">Advanced API Integrations</h3>
                <p class="insurtech-card-desc">
                    FondosTech's insurtech engine connects with 50+ insurers and platforms like Vahan through AI-ready
                    APIs — the backbone of insurance agency management software, no manual re-entry.
                </p>
            </div>

            <!-- Card 6 -->
            <div class="insurtech-card" data-aos="fade-up" data-aos-delay="350">
                <div class="insurtech-card-icon">
                    <img src="assets/images/handshake2.png" alt="Web Interface Icon">
                </div>
                <h3 class="insurtech-card-title">User-Friendly Web Interface</h3>
                <p class="insurtech-card-desc">
                    AI-native insurance broker software, simple as a consumer insurtech app — start selling day one, no
                    training needed.
                </p>
            </div>
        </div>
    </div>
</section>





<!-- ============================================= -->
<!-- SECTION 6: PLATFORM CAPABILITIES (Sticky Storytelling Deck) -->
<!-- ============================================= -->
<section class="platform-section" id="products" aria-label="Platform capabilities" data-aos="fade-up">
    <div class="platform-sticky-wrapper" id="platform-sticky-wrapper">
        <div class="platform-sticky-container">
            <div class="container h-100 d-flex flex-column justify-content-center">
                <div class="row align-items-end mb-3" data-aos="fade-up">
                    <div class="col-lg-8">
                        <div class="section-label">PRODUCT SECTION</div>
                        <h2 class="section-title">Insurance Expertise, Built Into Software</h2>
                        <p class="section-desc" style="max-width: 100%;">Powered by deep insurance expertise and continuous product innovation, FondosTech insurance broker software enables brokers, banks, NBFCs and fintechs to launch, manage and scale insurance distribution with unmatched speed and flexibility.</p>
                    </div>
                    <div class="d-none col-lg-4 text-lg-end mt-3 mt-lg-0">
                        <a href="#products" class="btn-blue-pill">
                            View all Products
                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Filter / Category Pill Buttons (Desktop View - Large Screens 992px+) -->
                <div class="platform-deck-filters d-none d-lg-flex mb-3 flex-wrap" id="platform-deck-filters" data-aos="fade-up"
                    data-aos-delay="100">
                    <button class="platform-filter-btn active" data-target="0">
                        <img src="assets/images/mdi-umbrella-outline0.svg" alt="">
                        FT POSP Sure
                    </button>
                    <button class="platform-filter-btn" data-target="1">
                        <img src="assets/images/jam-medical0.svg" alt="">
                        FT D2C Insure
                    </button>
                    <button class="platform-filter-btn" data-target="2">
                        <img src="assets/images/tabler-microscope0.svg" alt="">
                        FT Lending Insure
                    </button>
                    <button class="platform-filter-btn" data-target="3">
                        <img src="assets/images/uil-bag0.svg" alt="">
                        FT Embedded Insure
                    </button>
                    <button class="platform-filter-btn" data-target="4">
                        <img src="assets/images/mdi-invoice-fast-outline0.svg" alt="">
                        FT Digital Claims
                    </button>
                    <button class="platform-filter-btn" data-target="5">
                        <img src="assets/images/material-symbols-money-bag-outline0.svg" alt="">
                        FT PayIn-PayOut
                    </button>
                    <button class="platform-filter-btn" data-target="6">
                        <img src="assets/images/group0.svg" alt="">
                        FT EB Sure
                    </button>
                    <button class="platform-filter-btn" data-target="7">
                        <img src="assets/images/ic-outline-gpp-good0.svg" alt="">
                        FT Compliance Shield
                    </button>
                </div>

                <!-- Custom Premium Dropdown Menu (Tablet & Mobile View - Max 991px) -->
                <div class="platform-deck-custom-dropdown dropdown d-lg-none mb-3" data-aos="fade-up"
                    data-aos-delay="100">
                    <button class="btn btn-custom-filter-dropdown dropdown-toggle w-100" type="button"
                        id="platformFilterDropdownBtn" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="dropdown-selected-content">
                            <img src="assets/images/mdi-umbrella-outline0.svg" alt="" id="dropdownSelectedIcon"
                                width="20" height="20">
                            <span id="dropdownSelectedLabel">FT POSP Sure</span>
                        </span>
                        <svg class="dropdown-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5">
                            <path d="M6 9l6 6 6-6" />
                        </svg>
                    </button>
                    <ul class="dropdown-menu platform-dropdown-menu-custom w-100 shadow-lg border-0 mt-2"
                        aria-labelledby="platformFilterDropdownBtn">
                        <li>
                            <button class="dropdown-item platform-custom-item active" type="button" data-target="0"
                                data-label="FT POSP Sure" data-icon="assets/images/mdi-umbrella-outline0.svg">
                                <img src="assets/images/mdi-umbrella-outline0.svg" alt="" width="20" height="20">
                                <span>FT POSP Sure</span>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item platform-custom-item" type="button" data-target="1"
                                data-label="FT D2C Insure" data-icon="assets/images/jam-medical0.svg">
                                <img src="assets/images/jam-medical0.svg" alt="" width="20" height="20">
                                <span>FT D2C Insure</span>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item platform-custom-item" type="button" data-target="2"
                                data-label="FT Lending Insure" data-icon="assets/images/tabler-microscope0.svg">
                                <img src="assets/images/tabler-microscope0.svg" alt="" width="20" height="20">
                                <span>FT Lending Insure</span>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item platform-custom-item" type="button" data-target="3"
                                data-label="FT Embedded Insure" data-icon="assets/images/uil-bag0.svg">
                                <img src="assets/images/uil-bag0.svg" alt="" width="20" height="20">
                                <span>FT Embedded Insure</span>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item platform-custom-item" type="button" data-target="4"
                                data-label="FT Digital Claims" data-icon="assets/images/mdi-invoice-fast-outline0.svg">
                                <img src="assets/images/mdi-invoice-fast-outline0.svg" alt="" width="20" height="20">
                                <span>FT Digital Claims</span>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item platform-custom-item" type="button" data-target="5"
                                data-label="FT PayIn-PayOut" data-icon="assets/images/material-symbols-money-bag-outline0.svg">
                                <img src="assets/images/material-symbols-money-bag-outline0.svg" alt="" width="20" height="20">
                                <span>FT PayIn-PayOut</span>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item platform-custom-item" type="button" data-target="6"
                                data-label="FT EB Sure" data-icon="assets/images/group0.svg">
                                <img src="assets/images/group0.svg" alt="" width="20" height="20">
                                <span>FT EB Sure</span>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item platform-custom-item" type="button" data-target="7"
                                data-label="FT Compliance Shield" data-icon="assets/images/ic-outline-gpp-good0.svg">
                                <img src="assets/images/ic-outline-gpp-good0.svg" alt="" width="20" height="20">
                                <span>FT Compliance Shield</span>
                            </button>
                        </li>
                    </ul>
                </div>

                <!-- Stacked Card Deck Container -->
                <div class="platform-card-deck" id="platform-card-deck" data-aos="fade-up" data-aos-delay="150">
                    <!-- Card 1: FT POSP Sure -->
                    <div class="platform-deck-card pos-0" data-index="0">
                        <div class="platform-card">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-6">
                                    <div class="platform-card-body">
                                        <span class="platform-card-label">FT POSP Sure</span>
                                        <h3 class="platform-card-title">Onboard Agents Fast. <span class="text-primary-custom">Scale Without Limits.</span></h3>
                                        <p class="platform-card-desc">FT POSP Sure digitizes every agent's journey, cutting onboarding time by up to 70% and letting one back-office team support 5,000 POSPs instead of 50 — with no added headcount cost.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/ic-outline-gpp-good0.svg" alt="">
                                                <span>Digital onboarding for agents and POSPs</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/group0.svg" alt="">
                                                <span>Instant commission tracking for every policy sold</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/material-symbols-money-bag-outline0.svg" alt="">
                                                <span>Renewal tracking that keeps every policy active</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/mdi-invoice-fast-outline0.svg" alt="">
                                                <span>Scale your network without scaling operational cost</span>
                                            </div>
                                        </div>
                                        <a href="#demo" class="btn-link-custom">
                                            Explore POSP
                                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="platform-card-image">
                                        <img src="assets/images/insurance-policy-management-software-10.png"
                                            alt="FT POSP Sure dashboard">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: FT D2C Insure -->
                    <div class="platform-deck-card pos-1" data-index="1">
                        <div class="platform-card">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-6">
                                    <div class="platform-card-body">
                                        <span class="platform-card-label">FT D2C Insure</span>
                                        <h3 class="platform-card-title">Quote Fast. <span class="text-primary-custom">Convert Customers Even Faster.</span></h3>
                                        <p class="platform-card-desc">FT D2C Insure turns a multi-day insurance purchase into a 4 steps in-app journey — and faster quote-to-buy flows typically lift conversion by 20-30%, directly adding revenue without extra marketing spend.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/ic-outline-gpp-good1.svg" alt="">
                                                <span>Custom UI built around your brand</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/group1.svg" alt="">
                                                <span>Multi-insurer comparison shown clearly to every customer</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/material-symbols-money-bag-outline1.svg" alt="">
                                                <span>Fraud detection built in from day one</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/mdi-invoice-fast-outline1.svg" alt="">
                                                <span>Higher conversion without any added acquisition cost</span>
                                            </div>
                                        </div>
                                        <a href="#demo" class="btn-link-custom">
                                            Explore D2C
                                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="platform-card-image">
                                        <img src="assets/images/insurance-policy-management-software-11.png"
                                            alt="FT D2C Insure dashboard">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: FT Lending Insure -->
                    <div class="platform-deck-card pos-2" data-index="2">
                        <div class="platform-card">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-6">
                                    <div class="platform-card-body">
                                        <span class="platform-card-label">FT Lending Insure</span>
                                        <h3 class="platform-card-title">Protect Every Loan. <span class="text-primary-custom">Disburse Without Delay.</span></h3>
                                        <p class="platform-card-desc">FT Lending Insure embeds insurance into every loan you disburse —Offering insurance at loan approval, not after, typically gets 20-30% more customers to take it — turning it into extra revenue, not an added cost.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/ic-outline-gpp-good2.svg" alt="">
                                                <span>Multiple insurers bundled into one loan</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/group2.svg" alt="">
                                                <span>Instant policy issuance at every loan disbursement</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/material-symbols-money-bag-outline2.svg" alt="">
                                                <span>Custom combo products built for each lender</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/mdi-invoice-fast-outline2.svg" alt="">
                                                <span>New commission revenue on loans you already write</span>
                                            </div>
                                        </div>
                                        <a href="#demo" class="btn-link-custom">
                                            Explore Lending
                                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="platform-card-image">
                                        <img src="assets/images/insurance-policy-management-software-12.png"
                                            alt="FT Lending Insure dashboard">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: FT Embedded Insure -->
                    <div class="platform-deck-card pos-3" data-index="3">
                        <div class="platform-card">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-6">
                                    <div class="platform-card-body">
                                        <span class="platform-card-label">FT Embedded Insure</span>
                                        <h3 class="platform-card-title">Insure At Checkout. <span class="text-primary-custom">Convert Customers Instantly.</span></h3>
                                        <p class="platform-card-desc">FT Embedded Insure adds insurance right at checkout — offered this way, it typically converts 2x better than insurance sold as a separate step, adding revenue per transaction at near-zero extra operational cost.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/ic-outline-gpp-good0.svg" alt="">
                                                <span>Opt-in journeys that customers actually complete</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/group0.svg" alt="">
                                                <span>Multiple insurers available inside a single flow</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/material-symbols-money-bag-outline0.svg" alt="">
                                                <span>Industry-specific setups for travel, EV and retail</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/mdi-invoice-fast-outline0.svg" alt="">
                                                <span>Revenue per transaction, without a bigger sales team</span>
                                            </div>
                                        </div>
                                        <a href="#demo" class="btn-link-custom">
                                            Explore Embedded
                                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="platform-card-image">
                                        <img src="assets/images/intelligent-core-hero-20.png"
                                            alt="FT Embedded Insure dashboard">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5: FT Digital Claims -->
                    <div class="platform-deck-card pos-3" data-index="4">
                        <div class="platform-card">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-6">
                                    <div class="platform-card-body">
                                        <span class="platform-card-label">FT Digital Claims</span>
                                        <h3 class="platform-card-title">Resolve Claims Faster. <span class="text-primary-custom">Rebuild Customer Trust.</span></h3>
                                        <p class="platform-card-desc">FT Digital Claims uses AI to validate and route claims automatically, cutting average resolution time from days to hours — and fewer manual touches per claim means lower processing cost per case.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/ic-outline-gpp-good1.svg" alt="">
                                                <span>AI-assisted checks run on every document</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/group1.svg" alt="">
                                                <span>Anomaly and fraud flags raised automatically, instantly</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/material-symbols-money-bag-outline1.svg" alt="">
                                                <span>Real-time status visible to agents and customers</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/mdi-invoice-fast-outline1.svg" alt="">
                                                <span>Lower cost per claim, faster customer resolution</span>
                                            </div>
                                        </div>
                                        <a href="#demo" class="btn-link-custom">
                                            See Claims
                                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="platform-card-image">
                                        <img src="assets/images/bank-nbfcs-hm-10.png"
                                            alt="FT Digital Claims dashboard">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6: FT PayIn-PayOut -->
                    <div class="platform-deck-card pos-3" data-index="5">
                        <div class="platform-card">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-6">
                                    <div class="platform-card-body">
                                        <span class="platform-card-label">FT PayIn-PayOut</span>
                                        <h3 class="platform-card-title">Reconcile Statements Fast. <span class="text-primary-custom">Pay Out Instantly.</span></h3>
                                        <p class="platform-card-desc">FT PayIn-PayOut automates commission matching, turning a 4-5 day monthly task into same-day processing — freeing up finance team hours that were previously locked in manual Excel reconciliation every month.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/ic-outline-gpp-good2.svg" alt="">
                                                <span>Automatic matching across every insurer statement</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/group2.svg" alt="">
                                                <span>Mismatches flagged before they become a problem</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/material-symbols-money-bag-outline2.svg" alt="">
                                                <span>Instant payouts triggered for agents and POSPs</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/mdi-invoice-fast-outline2.svg" alt="">
                                                <span>Days of manual work recovered every single month</span>
                                            </div>
                                        </div>
                                        <a href="#demo" class="btn-link-custom">
                                            See Reconciliation
                                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="platform-card-image">
                                        <img src="assets/images/insurance-policy-management-software-10.png"
                                            alt="FT PayIn-PayOut dashboard">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 7: FT EB Sure -->
                    <div class="platform-deck-card pos-3" data-index="6">
                        <div class="platform-card">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-6">
                                    <div class="platform-card-body">
                                        <span class="platform-card-label">FT EB Sure</span>
                                        <h3 class="platform-card-title">Enroll Fast. <span class="text-primary-custom">Support Every Employee Better.</span></h3>
                                        <p class="platform-card-desc">FT EB Sure gives HR one dashboard for enrolment, claims and renewals — cutting HR's insurance admin workload by up to 50%, so the same team supports more employees without added cost.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/ic-outline-gpp-good0.svg" alt="">
                                                <span>Self-service enrolment for every single employee</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/group0.svg" alt="">
                                                <span>Dependent details managed without HR intervention needed</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/material-symbols-money-bag-outline0.svg" alt="">
                                                <span>Real-time claims tracking visible to HR teams</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/mdi-invoice-fast-outline0.svg" alt="">
                                                <span>Half the admin time, without hiring extra staff</span>
                                            </div>
                                        </div>
                                        <a href="#demo" class="btn-link-custom">
                                            Explore Benefits
                                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="platform-card-image">
                                        <img src="assets/images/insurance-policy-management-software-11.png"
                                            alt="FT EB Sure dashboard">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 8: FT Compliance Shield -->
                    <div class="platform-deck-card pos-3" data-index="7">
                        <div class="platform-card">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-6">
                                    <div class="platform-card-body">
                                        <span class="platform-card-label">FT Compliance Shield</span>
                                        <h3 class="platform-card-title">Stay Compliant. <span class="text-primary-custom">Skip All The Effort.</span></h3>
                                        <p class="platform-card-desc">FT Compliance Shield automates IRDAI checks across every workflow, cutting manual compliance work by up to 60% — time your team gets back, and risk exposure that no longer sits on one person's memory.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/ic-outline-gpp-good2.svg" alt="">
                                                <span>IRDAI checks built into every workflow</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/group2.svg" alt="">
                                                <span>Audit trails created automatically for every action</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/material-symbols-money-bag-outline2.svg" alt="">
                                                <span>Regulatory reports generated without manual effort needed</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/mdi-invoice-fast-outline2.svg" alt="">
                                                <span>Lower compliance risk, without a bigger compliance team</span>
                                            </div>
                                        </div>
                                        <a href="#demo" class="btn-link-custom">
                                            Explore Compliance
                                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="platform-card-image">
                                        <img src="assets/images/insurance-policy-management-software-12.png"
                                            alt="FT Compliance Shield dashboard">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================= -->
<!-- SECTION 7: LINES OF BUSINESS (Vertical Slider)-->
<!-- ============================================= -->
<section class="lob-section section-padding" id="lob" aria-label="Lines of business" data-aos="fade-up">
    <div class="container">
        <div class="lob-content">
            <div class="lob-text" data-aos="fade-right">
                <div class="section-label">Lines of Business</div>
                <h2 class="section-title">
                    Pick and choose from <span class="text-primary-custom">Our Wide Range</span>
                </h2>
                <p class="section-desc">Explore a wide range of insurance products across personal, commercial,
                    specialty, life, health, property, and casualty lines — all powered by one intelligent, low-code
                    platform.</p>
                <div class="mt-3">
                    <a href="#" class="btn-link-custom">
                        Choose Now
                        <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="lob-slider-area" aria-label="Insurance products showcase" data-aos="fade-left"
                data-aos-delay="150">
                <div class="lob-slider-columns">
                    <!-- Column 1: Bottom to Top -->
                    <div class="lob-slider-column move-up">
                        <div class="lob-slider-track">
                            <div class="lob-product-card">
                                <img src="assets/images/simplification0.svg" alt="Health Insurance">
                                <span>Health Insurance</span>
                            </div>
                            <div class="lob-product-card">
                                <img src="assets/images/car-insurance3.svg" alt="Car Insurance">
                                <span>Car Insurance</span>
                            </div>
                            <div class="lob-product-card">
                                <img src="assets/images/simplification2.svg" alt="Bike Insurance">
                                <span>Bike Insurance</span>
                            </div>
                            <div class="lob-product-card">
                                <img src="assets/images/simplification3.svg" alt="Life Insurance">
                                <span>Life Insurance</span>
                            </div>
                        </div>
                    </div>

                    <!-- Column 2: Top to Bottom -->
                    <div class="lob-slider-column move-down">
                        <div class="lob-slider-track">
                            <div class="lob-product-card">
                                <img src="assets/images/simplification1.svg" alt="CV Insurance">
                                <span>CV Insurance</span>
                            </div>
                            <div class="lob-product-card">
                                <img src="assets/images/taxi-insurance0.svg" alt="Taxi Insurance">
                                <span>Taxi Insurance</span>
                            </div>
                            <div class="lob-product-card">
                                <img src="assets/images/misc-d-insurance0.svg" alt="Misc Insurance">
                                <span>Misc Insurance</span>
                            </div>
                            <div class="lob-product-card">
                                <img src="assets/images/family-floater0.svg" alt="Family Floater">
                                <span>Family Floater</span>
                            </div>
                        </div>
                    </div>

                    <!-- Column 3: Bottom to Top -->
                    <div class="lob-slider-column move-up">
                        <div class="lob-slider-track">
                            <div class="lob-product-card">
                                <img src="assets/images/car-insurance9.svg" alt="Marine Insurance">
                                <span>Marine Insurance</span>
                            </div>
                            <div class="lob-product-card">
                                <img src="assets/images/simplification3.svg" alt="Travel Insurance">
                                <span>Travel Insurance</span>
                            </div>
                            <div class="lob-product-card">
                                <img src="assets/images/simplification0.svg" alt="Health Insurance">
                                <span>Health Insurance</span>
                            </div>
                            <div class="lob-product-card">
                                <img src="assets/images/car-insurance3.svg" alt="Car Insurance">
                                <span>Car Insurance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================= -->
<!-- SECTION 8: WORKFLOW DIAGRAM (Powering Smarter Insurance) -->
<!-- ============================================= -->
<section class="workflow-section section-padding" id="workflow" aria-label="Platform workflow" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center mb-4" data-aos="fade-up">
            <div class="col-lg-8">
                <div class="section-label">Powering Smarter Insurance</div>
                <h2 class="section-title">
                    One Platform. Every <span class="text-primary-custom">Insurance Workflow.</span>
                </h2>
                <p class="section-desc">Insurance teams can't afford disconnected systems, manual workflows, or delayed
                    decisions. FondosTech unifies claims, operations, accounts, and sales into one intelligent platform.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                <div class="workflow-toggle-pills" id="workflow-toggle-pills">
                    <button class="workflow-tab-btn" data-workflow="without-ft">Without FT</button>
                    <button class="workflow-tab-btn active" data-workflow="with-ft">With FT</button>
                </div>
            </div>
        </div>

        <!-- Workflow Content Tabs -->
        <div class="workflow-tabs-container" data-aos="zoom-in" data-aos-delay="100">
            <!-- TAB 1: WITHOUT FONDOS TECH -->
            <div class="workflow-tab-content" id="workflow-without-ft">
                <div class="workflow-card legacy-workflow-card">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <span class="workflow-badge badge-warning">Legacy Disconnected Process</span>
                            <h3 class="workflow-card-title">Manual, Fragmented &amp; Slow Operations</h3>
                            <p class="workflow-card-desc">Brokers and agents waste 60%+ of their time jumping between
                                Excel sheets, manual insurer portals, and disconnected messaging tools.</p>
                            <div class="workflow-points-list">
                                <div class="workflow-point-item legacy">
                                    <span class="point-icon text-primary-custom">✕</span>
                                    <span>Multiple disconnected portals and manual re-entry errors</span>
                                </div>
                                <div class="workflow-point-item legacy">
                                    <span class="point-icon text-primary-custom">✕</span>
                                    <span>Slow 7 to 14 days quote-to-issue turnaround cycles</span>
                                </div>
                                <div class="workflow-point-item legacy">
                                    <span class="point-icon text-primary-custom">✕</span>
                                    <span>Manual payout calculations and compliance reconciliation risks</span>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="btn-link-custom">
                                    Speak with an Expert
                                    <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <div class="workflow-graphic-box legacy-graphic">
                                <div class="legacy-animated-graphic">
                                    <svg viewBox="0 0 700 350" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="w-100 h-auto">
                                        <defs>
                                            <linearGradient id="legNodeGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                                                <stop offset="0%" stop-color="#086AD8" />
                                                <stop offset="100%" stop-color="#0552AA" />
                                            </linearGradient>

                                            <filter id="legShadow" x="-10%" y="-10%" width="120%" height="130%">
                                                <feDropShadow dx="0" dy="4" stdDeviation="6" flood-color="#086AD8"
                                                    flood-opacity="0.18" />
                                            </filter>
                                        </defs>

                                        <!-- Card Canvas Background -->
                                        <rect width="700" height="350" rx="16" fill="#F8FBFF" />
                                        <rect x="1" y="1" width="698" height="348" rx="15" stroke="#CEE4FD"
                                            stroke-width="1.5" />

                                        <!-- Top Pill Header: WITHOUT FONDOS TECH -->
                                        <rect x="260" y="12" width="180" height="24" rx="12" fill="#64748B" />
                                        <text x="350" y="28" text-anchor="middle" font-size="10" font-weight="700"
                                            fill="#FFFFFF" letter-spacing="0.04em">WITHOUT FONDOS TECH</text>

                                        <!-- Left Side Vertical Modules -->
                                        <!-- 1. IC-Claims -->
                                        <g filter="url(#legShadow)">
                                            <rect x="25" y="45" width="115" height="40" rx="8"
                                                fill="url(#legNodeGrad)" />
                                            <text x="82.5" y="70" text-anchor="middle" font-size="11" font-weight="700"
                                                fill="#FFFFFF">IC-Claims</text>
                                        </g>

                                        <!-- 2. IC-Operations -->
                                        <g filter="url(#legShadow)">
                                            <rect x="25" y="115" width="115" height="40" rx="8"
                                                fill="url(#legNodeGrad)" />
                                            <text x="82.5" y="140" text-anchor="middle" font-size="11" font-weight="700"
                                                fill="#FFFFFF">IC-Operations</text>
                                        </g>

                                        <!-- 3. IC-Account -->
                                        <g filter="url(#legShadow)">
                                            <rect x="25" y="185" width="115" height="40" rx="8"
                                                fill="url(#legNodeGrad)" />
                                            <text x="82.5" y="210" text-anchor="middle" font-size="11" font-weight="700"
                                                fill="#FFFFFF">IC-Account</text>
                                        </g>

                                        <!-- 4. IC-Sales -->
                                        <g filter="url(#legShadow)">
                                            <rect x="25" y="255" width="115" height="40" rx="8"
                                                fill="url(#legNodeGrad)" />
                                            <text x="82.5" y="280" text-anchor="middle" font-size="11" font-weight="700"
                                                fill="#FFFFFF">IC-Sales</text>
                                        </g>

                                        <!-- Left Connector Badges & Flow Lines -->
                                        <!-- Claims Connector -->
                                        <rect x="148" y="53" width="125" height="24" rx="12" fill="#EEF5FC"
                                            stroke="#CEE4FD" />
                                        <text x="210.5" y="69" text-anchor="middle" font-size="9" font-weight="700"
                                            fill="#086AD8">= Quote + Payment =</text>
                                        <path d="M273 65 H315 V135 H330" stroke="#086AD8" stroke-width="1.5"
                                            stroke-dasharray="5 4" class="flowing-blue-line" />

                                        <!-- Operations Connector -->
                                        <rect x="148" y="123" width="140" height="24" rx="12" fill="#EEF5FC"
                                            stroke="#CEE4FD" />
                                        <text x="218" y="139" text-anchor="middle" font-size="9" font-weight="700"
                                            fill="#086AD8">= Policy Endorsement =</text>
                                        <path d="M288 135 H330" stroke="#086AD8" stroke-width="1.5"
                                            stroke-dasharray="5 4" class="flowing-blue-line" />

                                        <!-- Account Connector -->
                                        <rect x="148" y="193" width="125" height="24" rx="12" fill="#EEF5FC"
                                            stroke="#CEE4FD" />
                                        <text x="210.5" y="209" text-anchor="middle" font-size="9" font-weight="700"
                                            fill="#086AD8">= Billing + Payment =</text>
                                        <path d="M273 205 H315 V175 H330" stroke="#086AD8" stroke-width="1.5"
                                            stroke-dasharray="5 4" class="flowing-blue-line" />

                                        <!-- Sales Connector -->
                                        <rect x="148" y="263" width="165" height="24" rx="12" fill="#EEF5FC"
                                            stroke="#CEE4FD" />
                                        <text x="230.5" y="279" text-anchor="middle" font-size="9" font-weight="700"
                                            fill="#086AD8">= Claim Doc + Processing =</text>
                                        <path d="M313 275 H330 V190" stroke="#086AD8" stroke-width="1.5"
                                            stroke-dasharray="5 4" class="flowing-blue-line" />

                                        <!-- Center Box: Insurance Intermediary -->
                                        <g filter="url(#legShadow)">
                                            <rect x="330" y="115" width="125" height="80" rx="10"
                                                fill="url(#legNodeGrad)" />
                                            <text x="392.5" y="152" text-anchor="middle" font-size="12"
                                                font-weight="800" fill="#FFFFFF">Insurance</text>
                                            <text x="392.5" y="169" text-anchor="middle" font-size="12"
                                                font-weight="800" fill="#FFFFFF">Intermediary</text>
                                        </g>

                                        <!-- Right Connector Badges & Lines -->
                                        <!-- Top Solicit Connector -->
                                        <rect x="463" y="126" width="70" height="22" rx="11" fill="#EEF5FC"
                                            stroke="#CEE4FD" />
                                        <text x="498" y="141" text-anchor="middle" font-size="9" font-weight="700"
                                            fill="#086AD8">= Solicit &gt;</text>
                                        <path d="M533 137 H545" stroke="#086AD8" stroke-width="1.5"
                                            stroke-dasharray="5 4" class="flowing-blue-line" />

                                        <!-- Bottom Request Connector -->
                                        <rect x="463" y="162" width="135" height="22" rx="11" fill="#EEF5FC"
                                            stroke="#CEE4FD" />
                                        <text x="530.5" y="177" text-anchor="middle" font-size="9" font-weight="700"
                                            fill="#086AD8">= Req + Info + Payment &gt;</text>
                                        <path d="M598 173 H545" stroke="#086AD8" stroke-width="1.5"
                                            stroke-dasharray="5 4" class="flowing-blue-line" />

                                        <!-- Right Box: Customer -->
                                        <g filter="url(#legShadow)">
                                            <rect x="545" y="115" width="125" height="80" rx="10"
                                                fill="url(#legNodeGrad)" />
                                            <text x="607.5" y="161" text-anchor="middle" font-size="14"
                                                font-weight="800" fill="#FFFFFF">Customer</text>
                                        </g>

                                        <!-- Bottom Warning Highlights -->
                                        <rect x="25" y="310" width="195" height="26" rx="13" fill="#FFF5F5"
                                            stroke="#F5C2C7" />
                                        <text x="122.5" y="327" text-anchor="middle" font-size="10" font-weight="700"
                                            fill="#DC3545">✕ Manual Re-Entry Risk</text>

                                        <rect x="250" y="310" width="195" height="26" rx="13" fill="#FFF5F5"
                                            stroke="#F5C2C7" />
                                        <text x="347.5" y="327" text-anchor="middle" font-size="10" font-weight="700"
                                            fill="#DC3545">⏳ 7-14 Day Processing Delay</text>

                                        <rect x="475" y="310" width="195" height="26" rx="13" fill="#FFF5F5"
                                            stroke="#F5C2C7" />
                                        <text x="572.5" y="327" text-anchor="middle" font-size="10" font-weight="700"
                                            fill="#DC3545">⚠️ Siloed Portal Operations</text>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 2: WITH FONDOS TECH (Active Default) -->
            <div class="workflow-tab-content active" id="workflow-with-ft">
                <div class="workflow-card smart-workflow-card">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <span class="workflow-badge badge-success">FondosTech AI Core</span>
                            <h3 class="workflow-card-title">Unified, Automated &amp; Instant Execution</h3>
                            <p class="workflow-card-desc">Unifies quoting, POSP onboarding, claims reconciliation, and
                                IRDAI compliance on a single AI-powered platform.</p>
                            <div class="workflow-points-list">
                                <div class="workflow-point-item success">
                                    <span class="point-icon text-primary-custom">✓</span>
                                    <span>Single dashboard connected to 50+ insurer APIs &amp; Vahan</span>
                                </div>
                                <div class="workflow-point-item success">
                                    <span class="point-icon text-primary-custom">✓</span>
                                    <span>Instant AI-driven policy recommendation engine</span>
                                </div>
                                <div class="workflow-point-item success">
                                    <span class="point-icon text-primary-custom">✓</span>
                                    <span>Automated commission reconciliation &amp; IRDAI audit trails</span>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="btn-link-custom">
                                    Speak with an Expert
                                    <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <div class="workflow-graphic-box smart-graphic">
                                <div class="smart-animated-graphic">
                                    <svg viewBox="0 0 540 280" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="w-100 h-auto">
                                        <!-- Background Card -->
                                        <rect width="540" height="280" rx="16" fill="#F4F8FE" />
                                        <rect x="1" y="1" width="538" height="278" rx="15" stroke="#CEE4FD" />

                                        <!-- Header Pill Badge: WITH FONDOS TECH -->
                                        <rect x="195" y="14" width="150" height="24" rx="12" fill="#086AD8" />
                                        <text x="270" y="30" text-anchor="middle" font-size="10" font-weight="700"
                                            fill="#FFFFFF">WITH FONDOS TECH</text>

                                        <!-- Central Animated Blue Pulse Core -->
                                        <circle cx="270" cy="120" r="50" fill="none" stroke="#3D8DE5" stroke-width="1.5"
                                            class="pulsing-core-ring" />
                                        <circle cx="270" cy="120" r="38" fill="none" stroke="#086AD8" stroke-width="1"
                                            class="pulsing-core-ring-2" />
                                        <circle cx="270" cy="120" r="28" fill="#086AD8" />
                                        <text x="270" y="127" text-anchor="middle" font-size="18" font-weight="800"
                                            fill="#FFFFFF">FT</text>

                                        <!-- Left Modules (Connected to Core) -->
                                        <g class="smart-left-nodes">
                                            <!-- Claims Node -->
                                            <rect x="25" y="52" width="115" height="36" rx="8" fill="#FFFFFF"
                                                stroke="#086AD8" stroke-width="1.5" />
                                            <text x="82.5" y="74" text-anchor="middle" font-size="10" font-weight="700"
                                                fill="#086AD8">📋 IC-Claims</text>

                                            <!-- Ops Node -->
                                            <rect x="25" y="98" width="115" height="36" rx="8" fill="#FFFFFF"
                                                stroke="#086AD8" stroke-width="1.5" />
                                            <text x="82.5" y="120" text-anchor="middle" font-size="10" font-weight="700"
                                                fill="#086AD8">⚙️ IC-Operations</text>

                                            <!-- Account Node -->
                                            <rect x="25" y="144" width="115" height="36" rx="8" fill="#FFFFFF"
                                                stroke="#086AD8" stroke-width="1.5" />
                                            <text x="82.5" y="166" text-anchor="middle" font-size="10" font-weight="700"
                                                fill="#086AD8">💳 IC-Account</text>

                                            <!-- Sales Node -->
                                            <rect x="25" y="190" width="115" height="34" rx="8" fill="#FFFFFF"
                                                stroke="#086AD8" stroke-width="1.5" />
                                            <text x="82.5" y="211" text-anchor="middle" font-size="10" font-weight="700"
                                                fill="#086AD8">📈 IC-Sales</text>
                                        </g>

                                        <!-- Right Modules (Connected to Core) -->
                                        <g class="smart-right-nodes">
                                            <!-- Intermediary Node -->
                                            <rect x="400" y="75" width="115" height="42" rx="8" fill="#FFFFFF"
                                                stroke="#086AD8" stroke-width="1.5" />
                                            <text x="457.5" y="94" text-anchor="middle" font-size="10" font-weight="700"
                                                fill="#086AD8">Insurance</text>
                                            <text x="457.5" y="108" text-anchor="middle" font-size="9"
                                                fill="#495057">Intermediary</text>

                                            <!-- Customer Node -->
                                            <rect x="400" y="135" width="115" height="42" rx="8" fill="#FFFFFF"
                                                stroke="#086AD8" stroke-width="1.5" />
                                            <text x="457.5" y="154" text-anchor="middle" font-size="10"
                                                font-weight="700" fill="#086AD8">👥 End Customer</text>
                                            <text x="457.5" y="168" text-anchor="middle" font-size="9"
                                                fill="#495057">Instant Service</text>
                                        </g>

                                        <!-- Animated Flowing Blue Lines into Core -->
                                        <path d="M140 70 H195 V120 H220" stroke="#086AD8" stroke-width="1.5"
                                            stroke-dasharray="4 3" class="flowing-blue-line" />
                                        <path d="M140 116 H220" stroke="#086AD8" stroke-width="1.5"
                                            stroke-dasharray="4 3" class="flowing-blue-line" />
                                        <path d="M140 162 H195 V120 H220" stroke="#086AD8" stroke-width="1.5"
                                            stroke-dasharray="4 3" class="flowing-blue-line" />
                                        <path d="M400 96 H345 V120 H320" stroke="#086AD8" stroke-width="1.5"
                                            stroke-dasharray="4 3" class="flowing-blue-line" />
                                        <path d="M400 156 H345 V120 H320" stroke="#086AD8" stroke-width="1.5"
                                            stroke-dasharray="4 3" class="flowing-blue-line" />

                                        <!-- Bottom Feature Highlights -->
                                        <rect x="15" y="242" width="160" height="26" rx="13" fill="#FFFFFF"
                                            stroke="#CEE4FD" />
                                        <text x="95" y="259" text-anchor="middle" font-size="10" font-weight="700"
                                            fill="#086AD8">✓ Unified Process</text>

                                        <rect x="190" y="242" width="160" height="26" rx="13" fill="#FFFFFF"
                                            stroke="#CEE4FD" />
                                        <text x="270" y="259" text-anchor="middle" font-size="10" font-weight="700"
                                            fill="#086AD8">👁 Real-time Visibility</text>

                                        <rect x="365" y="242" width="160" height="26" rx="13" fill="#FFFFFF"
                                            stroke="#CEE4FD" />
                                        <text x="445" y="259" text-anchor="middle" font-size="10" font-weight="700"
                                            fill="#086AD8">⚡ Faster Turnaround</text>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================= -->
<!-- SECTION 9: GOVERNMENT CLAIMS (Parallax)       -->
<!-- ============================================= -->
<section class="claims-section section-padding d-none" id="claims" aria-label="Government claims management"
    data-aos="fade-up">
    <div class="claims-parallax-bg" aria-hidden="true"></div>
    <div class="container">
        <div class="claims-content">
            <div class="text-center" data-aos="fade-up">
                <div class="section-label">Government Claims Management</div>
                <h2 class="section-title">
                    Streamlined Claims <span class="text-primary-custom">Processing Workflow</span>
                </h2>
                <p class="section-desc mx-auto text-center">End-to-end claims management from registration to settlement
                    — powered by intelligent automation and real-time tracking for government and enterprise schemes.
                </p>
            </div>

            <div class="claims-steps">
                <div class="claims-step-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="claims-step-number">01</div>
                    <h3 class="claims-step-title">Claim Registration</h3>
                    <p class="claims-step-text">Digital claim intake with automated document collection, policy
                        validation, and real-time eligibility checks against scheme guidelines.</p>
                </div>
                <div class="claims-step-card" data-aos="fade-up" data-aos-delay="150">
                    <div class="claims-step-number">02</div>
                    <h3 class="claims-step-title">Document Verification</h3>
                    <p class="claims-step-text">AI-powered document scanning and verification against government
                        databases — reducing manual effort and improving accuracy.</p>
                </div>
                <div class="claims-step-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="claims-step-number">03</div>
                    <h3 class="claims-step-title">Assessment &amp; Approval</h3>
                    <p class="claims-step-text">Rule-based claim assessment with automated approval workflows,
                        escalation management, and audit-ready compliance trails.</p>
                </div>
                <div class="claims-step-card" data-aos="fade-up" data-aos-delay="250">
                    <div class="claims-step-number">04</div>
                    <h3 class="claims-step-title">Settlement Processing</h3>
                    <p class="claims-step-text">Automated settlement calculation and disbursement with real-time status
                        tracking for beneficiaries and administrators.</p>
                </div>
                <div class="claims-step-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="claims-step-number">05</div>
                    <h3 class="claims-step-title">Reconciliation</h3>
                    <p class="claims-step-text">Automated reconciliation of payouts against scheme budgets with detailed
                        reporting for government auditors and oversight bodies.</p>
                </div>
                <div class="claims-step-card" data-aos="fade-up" data-aos-delay="350">
                    <div class="claims-step-number">06</div>
                    <h3 class="claims-step-title">Analytics &amp; Reporting</h3>
                    <p class="claims-step-text">Comprehensive dashboards with claim volume trends, processing times,
                        rejection analysis, and scheme utilization metrics.</p>
                </div>
            </div>

            <!-- Visual flow -->
            <div class="claims-visual" aria-hidden="true">
                <div class="claims-flow-dot"></div>
                <div class="claims-flow-line"></div>
                <div class="claims-flow-dot"></div>
                <div class="claims-flow-line"></div>
                <div class="claims-flow-dot"></div>
                <div class="claims-flow-line"></div>
                <div class="claims-flow-dot"></div>
                <div class="claims-flow-line"></div>
                <div class="claims-flow-dot"></div>
                <div class="claims-flow-line"></div>
                <div class="claims-flow-dot"></div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================= -->
<!-- SECTION 10: TESTIMONIALS (Slider)             -->
<!-- ============================================= -->
<section class="testimonials-section section-padding" id="testimonials" aria-label="Customer testimonials"
    data-aos="fade-up">
    <!-- Centered Header -->
    <div class="container mb-4 text-center" data-aos="fade-up">
        <div class="section-label">Testimonials</div>
        <h2 class="section-title">
            Why Our Customers <span class="text-primary-custom">Love Us</span>
        </h2>
    </div>

    <!-- Edge-to-Edge Carousel Track -->
    <div class="container-fluid px-0" data-aos="fade-up" data-aos-delay="150">
        <div class="testimonials-slider-overflow">
            <div class="testimonials-track" id="testimonials-track">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <img src="assets/images/group-60.svg" alt="5 Stars" class="testimonial-stars-img">
                    <p class="testimonial-text">
                        <span>“</span>
                        FondosTech has revolutionized our insurance operations with their seamless API integrations and
                        user-friendly platforms. Their timely delivery and dedicated support team ensured a smooth
                        onboarding process, helping us achieve operational efficiency in record time.
                        <span>”</span>
                    </p>
                    <div class="testimonial-divider"></div>
                    <div class="testimonial-author">
                        <div>
                            <div class="testimonial-author-name">Manoj Upadhyay</div>
                            <div class="testimonial-author-role">Founder &amp; MD</div>
                        </div>
                        <img src="assets/images/logo-10.png" alt="Company logo" class="testimonial-author-logo">
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <img src="assets/images/group-61.svg" alt="5 Stars" class="testimonial-stars-img">
                    <p class="testimonial-text">
                        <span>“</span>
                        The journey with FondosTech has been outstanding. From timely delivery to exceptional client
                        support, they’ve consistently gone above and beyond to help us achieve our goals.
                        <span>”</span>
                    </p>
                    <div class="testimonial-divider"></div>
                    <div class="testimonial-author">
                        <div>
                            <div class="testimonial-author-name">Sameer Rinwa</div>
                            <div class="testimonial-author-role">Co-Founder</div>
                        </div>
                        <img src="assets/images/logo-30.png" alt="Company logo" class="testimonial-author-logo">
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <img src="assets/images/group-62.svg" alt="5 Stars" class="testimonial-stars-img">
                    <p class="testimonial-text">
                        <span>“</span>
                        The team at FondosTech truly understands the complexities of insurance distribution. Their
                        robust solutions for quote generation and policy issuance have streamlined our workflows, while
                        their exceptional post-implementation support makes them a trusted partner.
                        <span>”</span>
                    </p>
                    <div class="testimonial-divider"></div>
                    <div class="testimonial-author">
                        <div>
                            <div class="testimonial-author-name">Karan Nagda</div>
                            <div class="testimonial-author-role">Director</div>
                        </div>
                        <img src="assets/images/clip-path-group1.svg" alt="Company logo"
                            class="testimonial-author-logo">
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-card">
                    <img src="assets/images/group-63.svg" alt="5 Stars" class="testimonial-stars-img">
                    <p class="testimonial-text">
                        <span>“</span>
                        FondosTech’s claims management module has transformed the way we handle customer requests. The
                        platform is intuitive and efficient, and their team is always available to provide guidance
                        whenever needed. Truly a remarkable experience!
                        <span>”</span>
                    </p>
                    <div class="testimonial-divider"></div>
                    <div class="testimonial-author">
                        <div>
                            <div class="testimonial-author-name">Vikas Srivastav</div>
                            <div class="testimonial-author-role">Founder</div>
                        </div>
                        <img src="assets/images/logo-header-10.png" alt="Company logo" class="testimonial-author-logo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Centered Arrow Buttons -->
    <div class="container mt-4 text-center">
        <div class="testimonial-nav-btns d-inline-flex align-items-center justify-content-center gap-3">
            <button class="testimonial-nav-btn" id="testimonial-prev" aria-label="Previous testimonial">
                <svg viewBox="0 0 9 14" fill="none" width="10" height="14" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 1L2 7L8 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <button class="testimonial-nav-btn" id="testimonial-next" aria-label="Next testimonial">
                <svg viewBox="0 0 9 14" fill="none" width="10" height="14" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
</section>


<!-- ============================================= -->
<!-- SECTION 11: FAQ                               -->
<!-- ============================================= -->
<section class="faq-section section-padding" id="faq" aria-label="Frequently asked questions">
    <div class="container">
        <div class="row g-5">
            <!-- Left Info Block (Sticky Header Column) -->
            <div class="col-lg-5 col-md-12 faq-left-column">
                <div class="faq-left-content">
                    <div class="section-label">Know Why To Choose Us?</div>
                    <h2 class="section-title">
                        FAQs About <span class="text-primary-custom">FondosTech</span>
                    </h2>
                    <p class="section-desc mb-4">
                        Find trusted answers about our insurance broker software, POSP management, claims and
                        compliance.
                    </p>
                    <a href="contact.php"
                        class="btn btn-primary-custom rounded-pill px-4 py-3 d-inline-flex align-items-center gap-2 font-weight-bold shadow-sm">
                        <span>Read More</span>
                        <svg viewBox="0 0 9 14" fill="none" width="10" height="14" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Accordion Cards Stack -->
            <div class="col-lg-7 col-md-12" data-aos="fade-left" data-aos-delay="150">
                <div class="accordion faq-accordion-custom" id="faqAccordion">
                    <!-- Item 1 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                What is insurance software?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Insurance software is a digital platform that helps insurance brokers and POSPs manage
                                the full policy lifecycle — quoting, POSP and client management, claims, commission
                                reconciliation and regulatory compliance — from one system instead of multiple
                                disconnected tools.
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="150">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                Does FondosTech use AI?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, FondosTech leverages AI and machine learning algorithms for automated quote
                                extraction, intelligent claims assessment, fraud detection, and automated reconciliation
                                across insurer portals.
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                Is FondosTech suitable for small insurance agencies as well as large brokerages?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely. FondosTech is built with modular architecture, making it scalable for
                                individual brokers, growing agencies, and large enterprise insurance brokerages.
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="250">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                Does FondosTech support motor insurance quoting with vehicle data verification?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, our motor insurance module integrates directly with VAHAN and RTO databases for
                                instant vehicle detail lookup and instant quote generation.
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                Is FondosTech IRDAI-compliant?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, FondosTech is fully compliant with IRDAI regulations, including mandatory audit
                                logging, POSP training tracking, client data protection, and commission cap compliance.
                            </div>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="350">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                How is FondosTech different from a generic insurance CRM software?
                            </button>
                        </h3>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Unlike generic CRMs, FondosTech is purpose-built for insurance distribution, featuring
                                deep insurer portal API integrations, multi-line quote engines, end-to-end policy
                                endorsement, and automated payout calculations.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>