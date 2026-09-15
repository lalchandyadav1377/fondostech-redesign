<?php
/**
 * FONDOS TECH — Homepage (index.php)
 */

$page_title = 'FondosTech — Insurtech Platform Built to Scale With Ease';
$page_description = 'FondosTech is an AI-driven Insurtech Platform which consolidates multi-insurer quotes, simplifies POSP onboarding and payouts & reconciliation – all on a 100% IRDAI compliant, CERT-In & ISO certified secure environment.';
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
            <h1 class="hero-title" data-aos="fade-up"> Insurtech Platform Built to Scale With Ease. <br>
                <span class="hero-highlight-box">
                    <span class="hero-typewriter-text" id="heroTypewriter" aria-live="polite">Automate with AI.
                    </span><span class="hero-typewriter-cursor" aria-hidden="true"></span>
                </span>
            </h1>
            <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="50">
                FondosTech is an AI-driven Insurtech Platform which consolidates multi-insurer quotes,
                simplifies POSP onboarding and payouts &amp; reconciliation – all on a 100% IRDAI compliant,
                CERT-In &amp; ISO certified secure environment. Built for fast go-to-market, it saves time and
                effort across every stakeholder.
            </p>

            <div class="hero-buttons" data-aos="fade-up" data-aos-delay="100">
                <a href="contact.php" class="btn-primary-custom">
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

                    <span class="badge-text">✓ 40% Reduced Operational Cost</span>
                </div>
                <svg class="badge-dot" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2.5" cy="2.5" r="2.5" fill="rgba(255,255,255,0.4)" />
                </svg>
                <div class="badge-trust">

                    <span class="badge-text">✓ 60% Increased Efficiency</span>
                </div>
                <svg class="badge-dot" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2.5" cy="2.5" r="2.5" fill="rgba(255,255,255,0.4)" />
                </svg>
                <div class="badge-trust">

                    <span class="badge-text">✓ 2X Business Growth</span>
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
        <div class="container text-center mb-4">
            <h2 class="section-title" data-aos="fade-up">
                Access 50+ Insurers <span class="text-primary-custom">Through One Platform</span>
            </h2>
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
            <div class="section-label">Industry/Segment</div>
            <h2 class="section-title">
                One Insurtech Platform. <span class="text-primary-custom">Every Business Player</span>
            </h2>
            <p class="section-desc mx-auto">FondosTech's Insurtech Platform has a solution for every stakeholder in the distribution
                chain.</p>
        </div>

        <div class="row g-4 mt-2">
            <!-- Card 1 — Banks -->
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="industry-card">
                    <img src="assets/images/home_page/Banks_bg_img.png" alt="" class="industry-card-bg"
                        aria-hidden="true">
                    <div class="industry-card-icon-box">
                        <img src="assets/images/home_page/Banks_img_icon.png" alt="Banks Icon" width="38" height="38">
                    </div>
                    <h3 class="industry-card-title">Banks</h3>
                    <div class="industry-card-divider"></div>
                    <div class="industry-card-content">
                        <p class="industry-card-text"><strong>Problem:</strong> Banks render thousands of loans but adding credit life, personal accident or EMI
                            protection usually requires separate insurer integrations and operational work flows.</p>
                        <p class="industry-card-text"><strong>Solution:</strong> The Lending Module by FondosTech enables you to embed insurance into your
                            loan process seamlessly and provide the appropriate cover at disbursal without disturbing
                            your current systems.</p>
                    </div>
                    <div class="industry-card-footer">
                        <a href="contact.php" class="btn-link-custom">
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
                    <img src="assets/images/home_page/NBFCs_bg_img.png" alt="" class="industry-card-bg"
                        aria-hidden="true">
                    <div class="industry-card-icon-box">
                        <img src="assets/images/home_page/NBFCs_img_icon.png" alt="NBFCs Icon" width="38" height="38">
                    </div>
                    <h3 class="industry-card-title">Non Banking Financial Companies</h3>
                    <div class="industry-card-divider"></div>
                    <div class="industry-card-content">
                        <p class="industry-card-text"><strong>Problem:</strong> NBFCs need to include insurance at the time of loan disbursal without adding
                            friction to customer onboarding, loan approval, policy issuance or existing operational
                            processes.</p>
                        <p class="industry-card-text"><strong>Solution:</strong> FondosTech's Lending APIs connect multiple insurers on a single integration,
                            allowing NBFCs to offer and underwrite relevant insurance with every eligible loan.</p>
                    </div>
                    <div class="industry-card-footer">
                        <a href="contact.php" class="btn-link-custom">
                            Get a Quote
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
                    <img src="assets/images/home_page/fintech_bg_img.png" alt="" class="industry-card-bg"
                        aria-hidden="true">
                    <div class="industry-card-icon-box">
                        <img src="assets/images/home_page/fintech_img_icon.png" alt="Fintech Icon" width="38"
                            height="38">
                    </div>
                    <h3 class="industry-card-title">Fintech</h3>
                    <div class="industry-card-divider"></div>
                    <div class="industry-card-content">
                        <p class="industry-card-text"><strong>Problem:</strong> Fintech platforms want to offer insurance with financial products but multiple
                            insurer integrations, product workflows and compliance requirements can slow down
                            implementation.</p>
                        <p class="industry-card-text"><strong>Solution:</strong> FondosTech provides one integration to launch, distribute and manage embedded insurance
                            within your app, without building separate insurer connections for every product.</p>
                    </div>
                    <div class="industry-card-footer">
                        <a href="contact.php" class="btn-link-custom">
                            Get quote
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
                    <img src="assets/images/home_page/insurance_broker_bg_img.png" alt="" class="industry-card-bg"
                        aria-hidden="true">
                    <div class="industry-card-icon-box">
                        <img src="assets/images/home_page/insurance_brokers_img_icon.png" alt="Insurance Brokers Icon"
                            width="38" height="38">
                    </div>
                    <h3 class="industry-card-title">Insurance agents &amp; POSPs</h3>
                    <div class="industry-card-divider"></div>
                    <div class="industry-card-content">
                        <p class="industry-card-text"><strong>Problem:</strong> Growing POSP networks make agent onboarding, KYC, policy issuance, commission
                            tracking and renewals difficult when these processes run across disconnected systems.</p>
                        <p class="industry-card-text"><strong>Solution:</strong> FondosTech brings POSP operations onto one platform, helping you manage agent
                            onboarding, policy issuance, commissions and renewals through a single workflow.</p>
                    </div>
                    <div class="industry-card-footer">
                        <a href="contact.php" class="btn-link-custom">
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
                    <img src="assets/images/home_page/travel_agents_bg_img.png" alt="" class="industry-card-bg"
                        aria-hidden="true">
                    <div class="industry-card-icon-box">
                        <img src="assets/images/home_page/travel_agents_img_icon.png" alt="Travel Agents Icon"
                            width="38" height="38">
                    </div>
                    <h3 class="industry-card-title">Tour Agency</h3>
                    <div class="industry-card-divider"></div>
                    <div class="industry-card-content">
                        <p class="industry-card-text"><strong>Problem:</strong> Travel agents are always juggling bookings and in the rush, travel insurance
                            simply doesn't get included in the flow at all. This is a missed opportunity, not only to protect
                            travelers but also to generate commission on each policy sold.</p>
                        <p class="industry-card-text"><strong>Solution:</strong> Include travel insurance solution within the booking journey powered by FT
                            Embedded Insure. Customers can purchase cover and get their policy instantly, without ever
                            stepping outside the booking flow.</p>
                    </div>
                    <div class="industry-card-footer">
                        <a href="contact.php" class="btn-link-custom">
                            Request a Quote
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
                    <img src="assets/images/home_page/travel_aggregators_bg_img.png" alt="" class="industry-card-bg"
                        aria-hidden="true">
                    <div class="industry-card-icon-box">
                        <img src="assets/images/home_page/travel_aggregators_img_icon.png" alt="Travel Aggregators Icon"
                            width="38" height="38">
                    </div>
                    <h3 class="industry-card-title">Travel Aggregators</h3>
                    <div class="industry-card-divider"></div>
                    <div class="industry-card-content">
                        <p class="industry-card-text"><strong>Problem:</strong> Aggregators have booking volumes at scale but that scale comes with its own
                            headache: managing multiple insurance integrations and workflows simultaneously. It's more
                            complicated than it needs to be to offer travel cover at checkout.</p>
                        <p class="industry-card-text"><strong>Solution:</strong> FondosTech's Embedded Insurance APIs make that complexity simple. You can
                            embed travel cover straight into your booking flow, meaning customers buy and get their
                            policy instantly at checkout, no extra steps, no friction.</p>
                    </div>
                    <div class="industry-card-footer">
                        <a href="contact.php" class="btn-link-custom">
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
                    <img src="assets/images/home_page/logistics_aggregators_bg_img.png" alt="" class="industry-card-bg"
                        aria-hidden="true">
                    <div class="industry-card-icon-box">
                        <img src="assets/images/home_page/logistics_aggregator_img_icon.png"
                            alt="Logistics Aggregators Icon" width="38" height="38">
                    </div>
                    <h3 class="industry-card-title">Logistics Aggregators</h3>
                    <div class="industry-card-divider"></div>
                    <div class="industry-card-content">
                        <p class="industry-card-text"><strong>Problem:</strong> Logistics platforms deal with continuous shipment volumes, but cargo and
                            commercial vehicle insurance are often not part of the shipment booking and fulfillment
                            process.</p>
                        <p class="industry-card-text"><strong>Solution:</strong> FT Embedded Insure embeds cargo and commercial vehicle cover into your
                            booking flow so relevant protection is issued with each eligible shipment.</p>
                    </div>
                    <div class="industry-card-footer">
                        <a href="contact.php" class="btn-link-custom">
                            Get a quote
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
                    <img src="assets/images/home_page/automobile_aggregator_bg_img.png" alt="" class="industry-card-bg"
                        aria-hidden="true">
                    <div class="industry-card-icon-box">
                        <img src="assets/images/home_page/automobile_aggregators_img_icon.png"
                            alt="Automobile Aggregators Icon" width="38" height="38">
                    </div>
                    <h3 class="industry-card-title">Car Aggregation</h3>
                    <div class="industry-card-divider"></div>
                    <div class="industry-card-content">
                        <p class="industry-card-text"><strong>Problem:</strong> Often buyers of vehicles will purchase insurance and warranty separately, creating
                            a gap between vehicle purchase and protection at a key point of sale.</p>
                        <p class="industry-card-text"><strong>Solution:</strong> FT Embedded Insure integrates motor insurance and extended warranty into your
                            purchase flow, allowing customers to finalize their vehicle protection before checkout.</p>
                    </div>
                    <div class="industry-card-footer">
                        <a href="contact.php" class="btn-link-custom">
                            Get a quote
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
            Enterprise-Grade Technology. <span class="text-primary-custom">Proven at Scale.</span>
        </h2>
        <p class="section-desc" data-aos="fade-up" data-aos-delay="50">Powering insurers, brokers, banks and NBFCs.
        </p>

        <div class="stats-grid">
            <div class="stat-card" data-aos="zoom-in" data-aos-delay="100">
                <img src="assets/images/home_page/Insurers_Integrated_img_icon.png" alt="" class="stat-icon"
                    aria-hidden="true">
                <div class="stat-card-content">
                    <div class="stat-number">
                        <span data-count="50" data-suffix="+">0+</span>
                        <img src="assets/images/mdi-arrow-top-circle0.svg" alt="" class="stat-arrow" aria-hidden="true">
                    </div>
                    <div class="stat-label">Insurers Integrated</div>
                </div>
            </div>

            <div class="stat-card" data-aos="zoom-in" data-aos-delay="200">
                <img src="assets/images/home_page/Partners_Onboard_img_icon.png" alt="" class="stat-icon"
                    aria-hidden="true">
                <div class="stat-card-content">
                    <div class="stat-number">
                        <span data-count="40" data-suffix="+">0+</span>
                        <img src="assets/images/mdi-arrow-top-circle1.svg" alt="" class="stat-arrow" aria-hidden="true">
                    </div>
                    <div class="stat-label">Partners Onboard</div>
                </div>
            </div>

            <div class="stat-card" data-aos="zoom-in" data-aos-delay="300">
                <img src="assets/images/home_page/GWP_Processed_img_icon.png" alt="" class="stat-icon"
                    aria-hidden="true">
                <div class="stat-card-content">
                    <div class="stat-number">
                        <span data-count="98" data-suffix="M+">0M+</span>
                        <img src="assets/images/mdi-arrow-top-circle2.svg" alt="" class="stat-arrow" aria-hidden="true">
                    </div>
                    <div class="stat-label">GWP Processed</div>
                </div>
            </div>

            <div class="stat-card" data-aos="zoom-in" data-aos-delay="400">
                <img src="assets/images/home_page/Insurance_Products_img_icon.png" alt="" class="stat-icon"
                    aria-hidden="true">
                <div class="stat-card-content">
                    <div class="stat-number">
                        <span data-count="600" data-suffix="+">0+</span>
                        <img src="assets/images/mdi-arrow-top-circle3.svg" alt="" class="stat-arrow" aria-hidden="true">
                    </div>
                    <div class="stat-label">Insurance Product</div>
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
            <div class="insurtech-label">AI-Powered Insurtech</div>
            <h2 class="section-title text-white">AI-Powered Insurtech Platform for Smarter Insurance Distribution</h2>
            <p class="insurtech-desc">
                FondosTech's insurtech platform automates, underwriting, policy issuance, claims and
                servicing across insurance workflows. Helps teams process business faster, reduce manual
                work, and scale efficiently.
            </p>
            <div class="insurtech-btn-wrap">
                <a href="contact.php" class="btn-white-custom">
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
                    <img src="assets/images/home_page/Sales_Productivity_Hyperpersonalization_img_icon.png"
                        alt="Sales Productivity Icon">
                </div>
                <h3 class="insurtech-card-title">Sales and Productivity &amp; Personalisation</h3>
                <p class="insurtech-card-desc">
                    FondosTech integrates AI across its sales
                    and CRM operations to turn customer and
                    policy data into actionable
                    recommendations that brokers and POSPs
                    can use to sell faster and more efficiently.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="insurtech-card" data-aos="fade-up" data-aos-delay="150">
                <div class="insurtech-card-icon">
                    <img src="assets/images/home_page/Customer_Service_Voice_Agents_img_icon.png"
                        alt="Customer Service Icon">
                </div>
                <h3 class="insurtech-card-title">AI-Powered Customer Service</h3>
                <p class="insurtech-card-desc">
                    AI-powered voice agents handle routine
                    customer queries, policy requests, and
                    claims support around the clock, reduce
                    response times, and ease the workload on
                    service teams.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="insurtech-card" data-aos="fade-up" data-aos-delay="200">
                <div class="insurtech-card-icon">
                    <img src="assets/images/home_page/Augmented_Claims_Management_img_icon.png"
                        alt="Augmented Claims Icon">
                </div>
                <h3 class="insurtech-card-title">AI-Assisted Claims Management</h3>
                <p class="insurtech-card-desc">
                    FondosTech deployed AI to validate claim
                    information, identify inconsistencies, and
                    route cases to right workflows, speeding up
                    claims processing.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="insurtech-card" data-aos="fade-up" data-aos-delay="250">
                <div class="insurtech-card-icon">
                    <img src="assets/images/home_page/Underwriting_Automation_Accuracy_img_icon.png"
                        alt="Underwriting Icon">
                </div>
                <h3 class="insurtech-card-title">Smarter Underwriting &amp; Risk Management</h3>
                <p class="insurtech-card-desc">
                    AI-backed underwriting helps evaluate risk,
                    validate information, and support consistent
                    decision making across policies. Improves
                    speed and accuracy of underwriting.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="insurtech-card" data-aos="fade-up" data-aos-delay="300">
                <div class="insurtech-card-icon">
                    <img src="assets/images/home_page/Advanced_API_Integrations_img_icon.png"
                        alt="API Integrations Icon">
                </div>
                <h3 class="insurtech-card-title">API-ready insurance Ecosystem</h3>
                <p class="insurtech-card-desc">
                    FondosTech connects insurers and
                    distribution platforms through ready APIs,
                    for faster data exchange across quotes,
                    policy, services, and payments.
                </p>
            </div>

            <!-- Card 6 -->
            <div class="insurtech-card" data-aos="fade-up" data-aos-delay="350">
                <div class="insurtech-card-icon">
                    <img src="assets/images/home_page/User_Friendly_Web_Interface_img_icon.png"
                        alt="Web Interface Icon">
                </div>
                <h3 class="insurtech-card-title">User-Friendly Web Interface</h3>
                <p class="insurtech-card-desc">
                    A clean intuitive interface makes it easier to
                    manage complex insurance workflows.
                    Helps team quote, issue, and service
                    policies with less training and less
                    operational steps.
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
                        <h2 class="section-title">Insurance Expertise, Engineered Into Every Product</h2>
                        <p class="section-desc" style="max-width: 100%;">Built on deep insurance expertise, FondosTech helps brokers, banks, NBFCs and fintechs
                            manage distribution, automate operations, and scale across products, partners and
                            channels.</p>
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
                <div class="platform-deck-filters d-none d-lg-flex mb-3 flex-wrap" id="platform-deck-filters"
                    data-aos="fade-up" data-aos-delay="100">
                    <button class="platform-filter-btn active" data-target="0">
                        <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                            alt="">
                        POSP Sure
                    </button>
                    <button class="platform-filter-btn" data-target="1">
                        <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                            alt="">
                        D2C Insure
                    </button>
                    <button class="platform-filter-btn" data-target="2">
                        <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                            alt="">
                        Lending Insure
                    </button>
                    <button class="platform-filter-btn" data-target="3">
                        <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                            alt="">
                        Embedded Insure
                    </button>
                    <button class="platform-filter-btn" data-target="4">
                        <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                            alt="">
                        Digital Claims
                    </button>
                    <button class="platform-filter-btn" data-target="5">
                        <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                            alt="">
                        PayIn-PayOut
                    </button>
                    <button class="platform-filter-btn" data-target="6">
                        <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                            alt="">
                        EB Sure
                    </button>
                    <button class="platform-filter-btn" data-target="7">
                        <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                            alt="">
                        Compliance Shield
                    </button>
                    <button class="platform-filter-btn" data-target="8">
                        <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                            alt="">
                        Reconciliation
                    </button>
                </div>

                <!-- Custom Premium Dropdown Menu (Tablet & Mobile View - Max 991px) -->
                <div class="platform-deck-custom-dropdown dropdown d-lg-none mb-3" data-aos="fade-up"
                    data-aos-delay="100">
                    <button class="btn btn-custom-filter-dropdown dropdown-toggle w-100" type="button"
                        id="platformFilterDropdownBtn" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="dropdown-selected-content">
                            <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                                alt="" id="dropdownSelectedIcon" width="20" height="20">
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
                                data-label="FT POSP Sure"
                                data-icon="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg">
                                <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                                    alt="" width="20" height="20">
                                <span>FT POSP Sure</span>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item platform-custom-item" type="button" data-target="1"
                                data-label="FT D2C Insure"
                                data-icon="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg">
                                <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                                    alt="" width="20" height="20">
                                <span>FT D2C Insure</span>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item platform-custom-item" type="button" data-target="2"
                                data-label="FT Lending Insure"
                                data-icon="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg">
                                <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                                    alt="" width="20" height="20">
                                <span>FT Lending Insure</span>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item platform-custom-item" type="button" data-target="3"
                                data-label="FT Embedded Insure"
                                data-icon="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg">
                                <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                                    alt="" width="20" height="20">
                                <span>FT Embedded Insure</span>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item platform-custom-item" type="button" data-target="4"
                                data-label="FT Digital Claims"
                                data-icon="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg">
                                <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                                    alt="" width="20" height="20">
                                <span>FT Digital Claims</span>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item platform-custom-item" type="button" data-target="5"
                                data-label="FT PayIn-PayOut"
                                data-icon="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg">
                                <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                                    alt="" width="20" height="20">
                                <span>FT PayIn-PayOut</span>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item platform-custom-item" type="button" data-target="6"
                                data-label="FT EB Sure"
                                data-icon="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg">
                                <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                                    alt="" width="20" height="20">
                                <span>FT EB Sure</span>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item platform-custom-item" type="button" data-target="7"
                                data-label="FT Compliance Shield"
                                data-icon="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg">
                                <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                                    alt="" width="20" height="20">
                                <span>FT Compliance Shield</span>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item platform-custom-item" type="button" data-target="8"
                                data-label="FT Reconciliation"
                                data-icon="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg">
                                <img src="assets/images/home_page/Fondos_Technologies_Privated_Limited_Logo_svg_icon.svg"
                                    alt="" width="20" height="20">
                                <span>FT Reconciliation</span>
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
                                        <h3 class="platform-card-title">Onboard Faster. <span
                                                class="text-primary-custom">Manage POSPs at Scale.</span></h3>
                                        <p class="platform-card-desc">FT POSP Sure digitizes end to end POSP lifecycle starting from onboarding, policy sale,
                                            commissions, renewals and claims. It simplifies the administration of growing networks.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_POSP_Sure/FT_POSP_Sure_Icon_1.svg"
                                                    alt="">
                                                <span>KYC &amp; Digital Onboarding for POSPs</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_POSP_Sure/FT_POSP_Sure_Icon_2.svg"
                                                    alt="">
                                                <span>Automated commission and payout tracking</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_POSP_Sure/FT_POSP_Sure_Icon_3.svg"
                                                    alt="">
                                                <span>Claims management and policy renewal</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_POSP_Sure/FT_POSP_Sure_Icon_4.svg"
                                                    alt="">
                                                <span>Centralized network and performance monitor</span>
                                            </div>
                                        </div>
                                        <a href="contact.php" class="btn-link-custom">
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
                                    <div class="platform-card-image posp-sure-image-wrapper">
                                        <div class="platform-image-container">
                                            <img src="assets/images/home_page/FT_POSP_Sure/FT_POSP_Sure_Img_1.png"
                                                alt="FT POSP Sure dashboard" class="platform-main-img">

                                            <!-- Animated Floating Feature Pills (Figma Design System) -->
                                            <div class="floating-feature-pills" aria-label="FT POSP Sure Key Modules">
                                                <div class="feature-pill-item pill-1" data-aos="fade-left"
                                                    data-aos-delay="200">
                                                    <span class="pill-icon">
                                                        <svg viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.3332 4L5.99984 11.3333L2.6665 8"
                                                                stroke="#086AD8" stroke-width="2.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    <span class="pill-text">POSP &amp; Agent Onboarding</span>
                                                </div>
                                                <div class="feature-pill-item pill-2" data-aos="fade-left"
                                                    data-aos-delay="300">
                                                    <span class="pill-icon">
                                                        <svg viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.3332 4L5.99984 11.3333L2.6665 8"
                                                                stroke="#086AD8" stroke-width="2.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    <span class="pill-text">Policy Management</span>
                                                </div>
                                                <div class="feature-pill-item pill-3" data-aos="fade-left"
                                                    data-aos-delay="400">
                                                    <span class="pill-icon">
                                                        <svg viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.3332 4L5.99984 11.3333L2.6665 8"
                                                                stroke="#086AD8" stroke-width="2.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    <span class="pill-text">Renewal &amp; Claims Management</span>
                                                </div>
                                                <div class="feature-pill-item pill-4" data-aos="fade-left"
                                                    data-aos-delay="500">
                                                    <span class="pill-icon">
                                                        <svg viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.3332 4L5.99984 11.3333L2.6665 8"
                                                                stroke="#086AD8" stroke-width="2.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    <span class="pill-text">Real-Time Insurance Analytics</span>
                                                </div>
                                            </div>
                                        </div>
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
                                        <h3 class="platform-card-title">Compare quicker. <span
                                                class="text-primary-custom">Rapid conversion</span></h3>
                                        <p class="platform-card-desc">Fetch quotes and policy comparison to complete policy purchase in just one digital journey.
                                            Get suitable covers for customers for faster purchase.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_D2C_Sure/FT_D2C_Insure_Icon_1.svg"
                                                    alt="">
                                                <span>Tailored insurance journeys for your business</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_D2C_Sure/FT_D2C_Insure_Icon_2.svg"
                                                    alt="">
                                                <span>Compare multi-insurer quotes in a single view</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_D2C_Sure/FT_D2C_Insure_Icon_3.svg"
                                                    alt="">
                                                <span>Built-in check-ins for accurate policy selection</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_D2C_Sure/FT_D2C_Insure_Icon_4.svg"
                                                    alt="">
                                                <span>Quicker quote to policy journeys for all customers</span>
                                            </div>
                                        </div>
                                        <a href="d2c-insure.php" class="btn-link-custom">
                                            Discover D2C Insure
                                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="platform-card-image d2c-image-wrapper">
                                        <div class="platform-image-container"
                                            aria-label="FT D2C Insure Product Showcase">
                                            <img src="assets/images/product_page/Product_Page_FT_D2C_Insure_img.svg"
                                                alt="FT D2C Insure product interface" class="platform-main-img">
                                        </div>
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
                                        <h3 class="platform-card-title">Embed Insurance. <span
                                                class="text-primary-custom">Timely delivery of loans.</span></h3>
                                        <p class="platform-card-desc">FT Lending Insure merges insurance and the loan. Empowers lenders to supply apt covers,
                                            issue policies and handle insurance without delaying disbursement.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Lending_Insure/FT_Lending_Insure_Icon_1.svg"
                                                    alt="">
                                                <span>One integration, Multiple insurance providers</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Lending_Insure/FT_Lending_Insure_Icon_2.svg"
                                                    alt="">
                                                <span>Loan Disbursement and Policy Issuance</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Lending_Insure/FT_Lending_Insure_Icon_3.svg"
                                                    alt="">
                                                <span>Flexible insurance solutions all types of loan</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Lending_Insure/FT_Lending_Insure_Icon_4.svg"
                                                    alt="">
                                                <span>Insurance on existing loan trips for secondary income</span>
                                            </div>
                                        </div>
                                        <a href="lending-insure.php" class="btn-link-custom">
                                            Explore Lending Insurance
                                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="platform-card-image lending-image-wrapper">
                                        <div class="lending-4image-container"
                                            aria-label="FT Lending Insure Multi-Screen Showcase">
                                            <!-- Background Web Portal -->
                                            <img src="assets/images/home_page/FT_Lending_Insure/FT_Lending_Insure_Img_1.png"
                                                alt="FT Lending Insure loan platform" class="lending-img-bg">
                                            <!-- Top Center Loan Details Modal -->
                                            <img src="assets/images/home_page/FT_Lending_Insure/FT_Lending_Insure_Img_2.png"
                                                alt="FT Lending Insure loan details" class="lending-img-top">
                                            <!-- Bottom Left Plan Selection Modal -->
                                            <img src="assets/images/home_page/FT_Lending_Insure/FT_Lending_Insure_Img_3.png"
                                                alt="FT Lending Insure choose plan" class="lending-img-left">
                                            <!-- Bottom Right Policy Success Modal -->
                                            <img src="assets/images/home_page/FT_Lending_Insure/FT_Lending_Insure_Img_4.png"
                                                alt="FT Lending Insure policy issued" class="lending-img-right">
                                        </div>
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
                                        <h3 class="platform-card-title">Embed Insurance. <span
                                                class="text-primary-custom">Protection with Every Purchase.</span></h3>
                                        <p class="platform-card-desc">FT Embedded Insure allows businesses to deliver relevant insurance at the point of digital
                                            purchase journeys, removing the need for a separate insurance purchase process, and
                                            enabling businesses to provide protection at checkout.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Embedded_Insure/FT_Embedded_Insure_Icon_1.svg"
                                                    alt="">
                                                <span>In the purchase journey, simply put, opt-in insurance.</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Embedded_Insure/FT_Embedded_Insure_Icon_2.svg"
                                                    alt="">
                                                <span>One integration, many insurers</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Embedded_Insure/FT_Embedded_Insure_Icon_3.svg"
                                                    alt="">
                                                <span>EV and retail journeys, customizable travel</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Embedded_Insure/FT_Embedded_Insure_Icon_4.svg"
                                                    alt="">
                                                <span>incremental revenue from existing customer transactions</span>
                                            </div>
                                        </div>
                                        <a href="contact.php" class="btn-link-custom">
                                            Explore Embedded Insure
                                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="platform-card-image embedded-image-wrapper">
                                        <div class="embedded-5image-container"
                                            aria-label="FT Embedded Insure Multi-Screen Showcase">
                                            <!-- 1. Mobile Phone Checkout Screen (Far Left Background) -->
                                            <img src="assets/images/home_page/FT_Embedded_Insure/FT_Embedded_Insure_Img_1.png"
                                                alt="FT Embedded Insure mobile checkout" class="embedded-img-1">
                                            <!-- 2. Policy Summary Modal (Top Right) -->
                                            <img src="assets/images/home_page/FT_Embedded_Insure/FT_Embedded_Insure_Img_4.png"
                                                alt="FT Embedded Insure policy summary" class="embedded-img-4">
                                            <!-- 3. Insure Plan Options Modal (Middle Right) -->
                                            <img src="assets/images/home_page/FT_Embedded_Insure/FT_Embedded_Insure_Img_3.png"
                                                alt="FT Embedded Insure choose plan" class="embedded-img-3">
                                            <!-- 4. Add Protection Main Modal (Center Foreground) -->
                                            <img src="assets/images/home_page/FT_Embedded_Insure/FT_Embedded_Insure_Img_2.png"
                                                alt="FT Embedded Insure add protection" class="embedded-img-2">
                                            <!-- 5. Insurance Activated Success Badge (Bottom Right Foreground) -->
                                            <img src="assets/images/home_page/FT_Embedded_Insure/FT_Embedded_Insure_Img_5.png"
                                                alt="FT Embedded Insure activated badge" class="embedded-img-5">
                                        </div>
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
                                        <h3 class="platform-card-title">Faster Process. <span
                                                class="text-primary-custom">Smooth Settlement.</span></h3>
                                        <p class="platform-card-desc">The service reduces claim settlement TAT by reviewing claim documents, validating, routing
                                            and tracking the status of a claim, enabling teams to process cases faster with fewer manual
                                            checks and follow-ups.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Digital_Claims/FT_Digital_Claims_Icon_1.svg"
                                                    alt="">
                                                <span>AI enabled faster claim paper verification</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Digital_Claims/FT_Digital_Claims_Icon_2.svg"
                                                    alt="">
                                                <span>Noted improved document review</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Digital_Claims/FT_Digital_Claims_Icon_3.svg"
                                                    alt="">
                                                <span>Get Real-Time Claim Status Updates</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Digital_Claims/FT_Digital_Claims_Icon_4.svg"
                                                    alt="">
                                                <span>Reduced manual steps in claim journey</span>
                                            </div>
                                        </div>
                                        <a href="contact.php" class="btn-link-custom">
                                            Explore Digital Claims
                                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="platform-card-image claims-image-wrapper">
                                        <div class="claims-3image-container"
                                            aria-label="FT Digital Claims Multi-Screen Showcase">
                                            <!-- 1. Main Claims Portal Dashboard (Center Background) -->
                                            <img src="assets/images/home_page/FT_Digital_Claims/FT_Digital_Claims_Img_1.png"
                                                alt="FT Digital Claims dashboard" class="claims-img-bg">
                                            <!-- 2. Upload Claim Documents Modal (Top Left) -->
                                            <img src="assets/images/home_page/FT_Digital_Claims/FT_Digital_Claims_Img_2.png"
                                                alt="FT Digital Claims upload documents" class="claims-img-left">
                                            <!-- 3. Claim Status Tracker Modal (Bottom Right) -->
                                            <img src="assets/images/home_page/FT_Digital_Claims/FT_Digital_Claims_Img_3.png"
                                                alt="FT Digital Claims status tracker" class="claims-img-right">
                                        </div>
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
                                        <h3 class="platform-card-title">Track Every Payment. <span
                                                class="text-primary-custom">Pay Every Partner Right.</span></h3>
                                        <p class="platform-card-desc">FT PayIn-PayOut connects premium collections, commissions calculations, and partner
                                            payouts in one finance workflow. Convenient premium transaction tracking and commission
                                            calculations, without switching between spreadsheets.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_PayIn_PayOut/FT_PayIn_PayOut_Icon_1.svg"
                                                    alt="">
                                                <span>Track premium collections across payment modes</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_PayIn_PayOut/FT_PayIn_PayOut_Icon_2.svg"
                                                    alt="">
                                                <span>Maps commission against policies and partners</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_PayIn_PayOut/FT_PayIn_PayOut_Icon_3.svg"
                                                    alt="">
                                                <span>Manage agent and POSP payouts from one system</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_PayIn_PayOut/FT_PayIn_PayOut_Icon_4.svg"
                                                    alt="">
                                                <span>Check status of your payment and settlement in one place</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_PayIn_PayOut/FT_PayIn_PayOut_Icon_4.svg"
                                                    alt="">
                                                <span>Reduce payout errors with structured payment workflows</span>
                                            </div>
                                        </div>
                                        <a href="contact.php" class="btn-link-custom">
                                            Explore PayIn-PayOut
                                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="platform-card-image payout-image-wrapper">
                                        <div class="payout-5image-container"
                                            aria-label="FT PayIn-PayOut Multi-Screen Showcase">
                                            <!-- 1. Main Dashboard (Center Background) -->
                                            <img src="assets/images/home_page/FT_PayIn_PayOut/FT_PayIn_PayOut_Img_1.png"
                                                alt="FT PayIn-PayOut main dashboard" class="payout-img-1">
                                            <!-- 2. Settlement Status Donut Chart (Top Left) -->
                                            <img src="assets/images/home_page/FT_PayIn_PayOut/FT_PayIn_PayOut_Img_4.png"
                                                alt="FT PayIn-PayOut settlement status" class="payout-img-4">
                                            <!-- 3. Recent Payouts Modal (Top Center) -->
                                            <img src="assets/images/home_page/FT_PayIn_PayOut/FT_PayIn_PayOut_Img_5.png"
                                                alt="FT PayIn-PayOut recent payouts" class="payout-img-5">
                                            <!-- 4. Pay-In Channels Grid (Bottom Left) -->
                                            <img src="assets/images/home_page/FT_PayIn_PayOut/FT_PayIn_PayOut_Img_3.png"
                                                alt="FT PayIn-PayOut channels" class="payout-img-3">
                                            <!-- 5. Today's Overview Widget (Bottom Right Foreground) -->
                                            <img src="assets/images/home_page/FT_PayIn_PayOut/FT_PayIn_PayOut_Img_2.png"
                                                alt="FT PayIn-PayOut today overview" class="payout-img-2">
                                        </div>
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
                                        <h3 class="platform-card-title">Offer employee benefits. <span
                                                class="text-primary-custom">Zero admin burden.</span></h3>
                                        <p class="platform-card-desc">FT EB Sure brings employee enrolment, dependent data, group policies, claims and renewal
                                            into one platform. HR gets the cleaner records, real-time policy visibility and fewer
                                            spreadsheets, with reduced email and insurer follow-ups.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_EB_Sure/FT_EB_Sure_Icon_1.svg"
                                                    alt="">
                                                <span>Self service enrolment for employees and dependents</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_EB_Sure/FT_EB_Sure_Icon_2.svg"
                                                    alt="">
                                                <span>Unified employee, dependent, and policy records</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_EB_Sure/FT_EB_Sure_Icon_3.svg"
                                                    alt="">
                                                <span>Real-time claim status for HR teams</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_EB_Sure/FT_EB_Sure_Icon_4.svg"
                                                    alt="">
                                                <span>Central view of employee benefit policies</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_EB_Sure/FT_EB_Sure_Icon_4.svg"
                                                    alt="">
                                                <span>Renewal tracking with upcoming policy visibility</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_EB_Sure/FT_EB_Sure_Icon_1.svg"
                                                    alt="">
                                                <span>Structured enrolment data for faster insurer processing</span>
                                            </div>
                                        </div>
                                        <a href="contact.php" class="btn-link-custom">
                                            Explore FT EB Sure
                                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="platform-card-image eb-image-wrapper">
                                        <div class="eb-showcase-container"
                                            aria-label="FT EB Sure Multi-Screen Showcase">
                                            <!-- 1. Self-Service Enrolment Card (Top Left Background) -->
                                            <img src="assets/images/home_page/FT_EB_Sure/FT_EB_Sure_Img_1.png"
                                                alt="FT EB Sure self-service enrolment" class="eb-img-1">
                                            <!-- 2. Dependent Management Card (Top Right Background) -->
                                            <img src="assets/images/home_page/FT_EB_Sure/FT_EB_Sure_Img_2.png"
                                                alt="FT EB Sure dependent management" class="eb-img-2">
                                            <!-- 3. Claims Tracking Card (Bottom Left Foreground) -->
                                            <img src="assets/images/home_page/FT_EB_Sure/FT_EB_Sure_Img_3.png"
                                                alt="FT EB Sure claims tracking" class="eb-img-3">
                                            <!-- 4. Renewals Overview Card (Bottom Right Foreground) -->
                                            <img src="assets/images/home_page/FT_EB_Sure/FT_EB_Sure_Img_4.png"
                                                alt="FT EB Sure renewals overview" class="eb-img-4">
                                            <!-- 5. Floating Pill 1 (Top Left) -->
                                            <img src="assets/images/home_page/FT_EB_Sure/FT_EB_Sure_Img_5.png"
                                                alt="Easy Employee Enrollment" class="eb-pill-1">
                                            <!-- 6. Floating Pill 2 (Middle Right) -->
                                            <img src="assets/images/home_page/FT_EB_Sure/FT_EB_Sure_Img_6.png"
                                                alt="Real-Time Claims Tracking" class="eb-pill-2">
                                            <!-- 7. Floating Pill 3 (Bottom Center) -->
                                            <img src="assets/images/home_page/FT_EB_Sure/FT_EB_Sure_Img_7.png"
                                                alt="50% Less Admin Work" class="eb-pill-3">
                                        </div>
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
                                        <h3 class="platform-card-title">Compliance that Runs. <span
                                                class="text-primary-custom">Audits Every Process</span></h3>
                                        <p class="platform-card-desc">FT Compliance Shield integrates regulatory checks, audit logs and reporting controls into
                                            day-to-day insurance operations. Enables teams to stay compliant, reduces manual
                                            follow-ups, and updates clean records for audits and reviews.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Compliance_Shield/FT_Compliance_Icon_1.svg"
                                                    alt="">
                                                <span>IRDAI-aligned checks inside key workflows</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Compliance_Shield/FT_Compliance_Icon_2.svg"
                                                    alt="">
                                                <span>Time stamped audit trails for every recorded action</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Compliance_Shield/FT_Compliance_Icon_3.svg"
                                                    alt="">
                                                <span>Structured system for regulatory reporting</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Compliance_Shield/FT_Compliance_Icon_4.svg"
                                                    alt="">
                                                <span>Central dashboard for compliance status</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Compliance_Shield/FT_Compliance_Icon_1.svg"
                                                    alt="">
                                                <span>Process level visibility across the teams</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Compliance_Shield/FT_Compliance_Icon_2.svg"
                                                    alt="">
                                                <span>Audit ready records with clear action history</span>
                                            </div>
                                        </div>
                                        <a href="contact.php" class="btn-link-custom">
                                            Explore Compliance Shield
                                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="platform-card-image compliance-image-wrapper">
                                        <div class="compliance-4image-container"
                                            aria-label="FT Compliance Shield Multi-Screen Showcase">
                                            <!-- 1. Main Dashboard (Center Background) -->
                                            <img src="assets/images/home_page/FT_Compliance_Shield/FT_Compliance_Shield_Img_1.png"
                                                alt="FT Compliance Shield main dashboard" class="compliance-img-1">
                                            <!-- 2. Compliance Status 98% In Control Badge (Far Left Foreground) -->
                                            <img src="assets/images/home_page/FT_Compliance_Shield/FT_Compliance_Shield_Img_5.png"
                                                alt="FT Compliance Shield status badge" class="compliance-img-5">
                                            <!-- 3. Report Types Modal (Middle Center Foreground) -->
                                            <img src="assets/images/home_page/FT_Compliance_Shield/FT_Compliance_Shield_Img_3.png"
                                                alt="FT Compliance Shield report types" class="compliance-img-3">
                                            <!-- 4. Regulatory Reports Widget (Far Right Foreground) -->
                                            <img src="assets/images/home_page/FT_Compliance_Shield/FT_Compliance_Shield_Img_2.png"
                                                alt="FT Compliance Shield regulatory reports" class="compliance-img-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 9: FT Reconciliation -->
                    <div class="platform-deck-card pos-3" data-index="8">
                        <div class="platform-card">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-6">
                                    <div class="platform-card-body">
                                        <span class="platform-card-label">FT RECONCILIATION</span>
                                        <h3 class="platform-card-title">Match Every Purchase. <span
                                                class="text-primary-custom">Fix All Mismatches.</span></h3>
                                        <p class="platform-card-desc">FT Reconciliation matches insurer statements against policy, premium, and commission
                                            records, flags mismatches at transaction level, and gives the finance team a clear list before
                                            commissions move to payout.</p>
                                        <div class="platform-features-list">
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Reconciliation/FT_Reconciliation_Icon_1.svg"
                                                    alt="">
                                                <span>Up to 100% statement matching automation</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Reconciliation/FT_Reconciliation_Icon_2.svg"
                                                    alt="">
                                                <span>Every exception identified before payout</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Reconciliation/FT_Reconciliation_Icon_3.svg"
                                                    alt="">
                                                <span>Multiple format supported Insurer statements</span>
                                            </div>
                                            <div class="platform-feature-item">
                                                <img src="assets/images/home_page/FT_Reconciliation/FT_Reconciliation_Icon_4.svg"
                                                    alt="">
                                                <span>Cycle-wise audit trail maintained</span>
                                            </div>
                                        </div>
                                        <a href="contact.php" class="btn-link-custom">
                                            Explore FT Reconciliation
                                            <svg class="btn-icon" viewBox="0 0 9 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="platform-card-image recon-image-wrapper">
                                        <div class="recon-5image-container"
                                            aria-label="FT Reconciliation Multi-Screen Showcase">
                                            <!-- 1. Import Insurer Statements Modal (Top Left Background) -->
                                            <img src="assets/images/home_page/FT_Reconciliation/FT_Reconciliation_Img_1.png"
                                                alt="FT Reconciliation import statements" class="recon-img-1">
                                            <!-- 2. Payout Processing Modal (Top Right Background) -->
                                            <img src="assets/images/home_page/FT_Reconciliation/FT_Reconciliation_Img_2.png"
                                                alt="FT Reconciliation payout processing" class="recon-img-2">
                                            <!-- 3. Commission Matching Donut Chart Modal (Middle Center Foreground) -->
                                            <img src="assets/images/home_page/FT_Reconciliation/FT_Reconciliation_Img_5.png"
                                                alt="FT Reconciliation commission matching" class="recon-img-5">
                                            <!-- 4. Mismatches & Alerts Modal (Bottom Left Foreground) -->
                                            <img src="assets/images/home_page/FT_Reconciliation/FT_Reconciliation_Img_3.png"
                                                alt="FT Reconciliation mismatches and alerts" class="recon-img-3">
                                            <!-- 5. Payouts Sent Successfully Modal (Bottom Right Foreground) -->
                                            <img src="assets/images/home_page/FT_Reconciliation/FT_Reconciliation_Img_4.png"
                                                alt="FT Reconciliation payouts sent success" class="recon-img-4">
                                        </div>
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
                    Multiple Products. <span class="text-primary-custom">Faster Configuration</span>
                </h2>
                <p class="section-desc">
                    Launch motor, health, life, travel, property, and other insurance products from one platform.
                    Configure new products faster, reduced set-up efforts, and expand without rebuilding your
                    distribution stack.
                </p>
                <div class="d-flex align-items-center gap-3 flex-wrap my-4">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-white border shadow-sm"
                        style="font-weight: 600; font-size: 0.875rem; color: #086ad8; border-color: #CEE4FD !important;">
                        <span
                            style="display:inline-block; width:8px; height:8px; border-radius:50%; background:#086ad8;"></span>
                        <span>12 Hrs to Configure</span>
                    </div>
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-white border shadow-sm"
                        style="font-weight: 600; font-size: 0.875rem; color: #086ad8; border-color: #CEE4FD !important;">
                        <span
                            style="display:inline-block; width:8px; height:8px; border-radius:50%; background:#086ad8;"></span>
                        <span>Same-Day Launch</span>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="contact.php" class="btn-link-custom">
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
                    One Platform. Every <span class="text-primary-custom">Insurance Workflow</span>
                </h2>
                <p class="section-desc">Insurance operations slow down when teams work across disconnected systems.
                    FondosTech brings sales, policies, claims, payouts, and operations together on one
                    insurance platform.
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
                            <span class="workflow-badge badge-warning">Disconnected Insurance Operations</span>
                            <h3 class="workflow-card-title">Multiple System. Complicated Work</h3>
                            <p class="workflow-card-desc">Brokers and insurance agents lose 60% time moving between insurer portals, spreadsheets,
                                and internal systems, creating duplicate work.</p>
                            <div class="workflow-points-list">
                                <div class="workflow-point-item legacy">
                                    <span class="point-icon text-primary-custom">✕</span>
                                    <span>Multiple systems create repeated data entry and errors</span>
                                </div>
                                <div class="workflow-point-item legacy">
                                    <span class="point-icon text-primary-custom">✕</span>
                                    <span>Manual processes slow quote-to-policy turnaround</span>
                                </div>
                                <div class="workflow-point-item legacy">
                                    <span class="point-icon text-primary-custom">✕</span>
                                    <span>Disconnected payout and reconciliation increase efforts</span>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="contact.php" class="btn-link-custom">
                                    Connect With FT
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
                            <span class="workflow-badge badge-success">FondosTech Connected Platform</span>
                            <h3 class="workflow-card-title">Connected Workflows. Automated Operations</h3>
                            <p class="workflow-card-desc">Better control over insurance operations from onboarding to servicing. Less operational
                                efforts for quoting, POSP onboarding, policy management, claims, reconciliation, and
                                compliance.</p>
                            <div class="workflow-points-list">
                                <div class="workflow-point-item success">
                                    <span class="point-icon text-primary-custom">✓</span>
                                    <span>One dashboard connected with 50+ insurer</span>
                                </div>
                                <div class="workflow-point-item success">
                                    <span class="point-icon text-primary-custom">✓</span>
                                    <span>AI-assisted recommendations across insurance sales workflows</span>
                                </div>
                                <div class="workflow-point-item success">
                                    <span class="point-icon text-primary-custom">✓</span>
                                    <span>Automated reconciliation with built-in compliance audit trails</span>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="contact.php" class="btn-link-custom">
                                    Speak with the Expert
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
            Why Leaders <span class="text-primary-custom">Choose Us</span>
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
                    <div class="section-label">Know More About Us</div>
                    <h2 class="section-title">
                        FAQs About <span class="text-primary-custom">FondosTech</span>
                    </h2>
                    <p class="section-desc mb-4">
                        Get answers to common questions about our insurance software, POSP operations, claims
                        and compliance.
                    </p>
                    <a href="contact.php"
                        class="btn btn-primary-custom rounded-pill px-4 py-3 d-inline-flex align-items-center gap-2 font-weight-bold shadow-sm">
                        <span>Get Started</span>
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
                                What is software for insurance brokers?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Insurance broker software is a specialized system that allows brokers to manage policy
                                sales, quotes, client information, claims, commissions, compliance and renewals in one
                                place.
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="120">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                Does FondosTech utilize AI?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                FondosTech leverages AI-assisted capabilities for insurance workflow optimization,
                                document verification and quotation support and to eliminate manual, repetitive work.
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="140">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                Is FondosTech good for small insurance agencies and large brokerages
                                too?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. FondosTech is built to serve both small agencies and large brokerages with scalable
                                workflows that grow with your business.
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="160">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                What is the difference between insurance broker software and insurance
                                management systems?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                A generic system doesn't work; insurance broker software is built around the specific needs
                                of a brokerage, such as insurer connectivity, quotations, policy management, commissions,
                                claims, compliance and renewals.
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="180">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                Does FondosTech support quoting motor insurance with vehicle data
                                verification?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. Motor insurance quoting FondosTech can help by validating the vehicle data which can
                                assist the teams to improve the accuracy of the quotes and reduce manual data entry.
                            </div>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                Is FondosTech IRDAI-compliant?
                            </button>
                        </h3>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                FondosTech helps insurance companies to operationalize IRDAI related checks, workflows,
                                records and audit trails. However, compliance also depends on how the platform is
                                configured and used by the organisation.
                            </div>
                        </div>
                    </div>

                    <!-- Item 7 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="220">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                                What is claims management software and does FondosTech have it?
                            </button>
                        </h3>
                        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Claims management software helps teams log, track, route and manage claims through the
                                entire lifecycle. FondosTech provides digital claims management, document validation,
                                exception tracking and real-time status visibility.
                            </div>
                        </div>
                    </div>

                    <!-- Item 8 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="240">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8">
                                How Insurtech is revolutionizing the insurance industry in India?
                            </button>
                        </h3>
                        <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Insurtech is helping insurers, brokers and intermediaries digitise operations, automate
                                repetitive tasks, improve customer service and make insurance processes faster and more
                                transparent.
                            </div>
                        </div>
                    </div>

                    <!-- Item 9 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="260">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq9" aria-expanded="false" aria-controls="faq9">
                                Can FondosTech's software be used by banks and NBFCs, not just insurance brokers?
                            </button>
                        </h3>
                        <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. FondosTech can support banks, NBFCs and other financial businesses that manage
                                insurance distribution, partner payouts, compliance and related workflows.
                            </div>
                        </div>
                    </div>

                    <!-- Item 10 -->
                    <div class="accordion-item faq-card-item" data-aos="fade-up" data-aos-delay="280">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq10" aria-expanded="false" aria-controls="faq10">
                                Why should I choose insurance software built only for the insurance industry?
                            </button>
                        </h3>
                        <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Insurance-specific software is more relevant than a generic management system because
                                it's built with industry workflows, terminology, regulations, policy data, commissions, claims
                                and insurer processes.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>