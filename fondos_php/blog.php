<?php
$page_title = "Blog & Insights | FondosTech - Insurtech Software & Trends";
$active_page = "blog";
$page_css = ["assets/css/pages/blog.css"];
$page_js = ["assets/js/pages/blog.js"];
include 'includes/header.php';
?>

<!-- ============================================= -->
<!-- SECTION 1: BLOG HERO WITH AMBIENT GLOW ORBS  -->
<!-- ============================================= -->
<section class="blog-hero-section" id="blog-hero">
    <div class="blog-glow-orb-1"></div>
    <div class="blog-glow-orb-2"></div>

    <div class="container text-center" data-aos="fade-up">
        <nav class="blog-breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo $base_path; ?>index.php">Home</a> &nbsp;/&nbsp; <span>Blog &amp; Insights</span>
        </nav>

        <div class="blog-section-label">
            <span class="blog-badge-dot"></span>
            INSURTECH KNOWLEDGE HUB
        </div>

        <h1 class="blog-hero-title">
            Insights &amp; Trends for <span class="text-primary-custom">Modern Insurance Distribution</span>
        </h1>

        <p class="blog-hero-desc">
            Explore expert articles on AI underwriting, POSP network scaling, automated reconciliation, and IRDAI regulatory compliance for brokers, banks, and fintechs.
        </p>

        <!-- Search Input Box -->
        <div class="blog-search-box">
            <svg class="blog-search-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <circle cx="11" cy="11" r="8"/>
                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
            </svg>
            <input type="text" id="blogSearchInput" class="blog-search-input" placeholder="Search articles on AI, POSP, Claims, Compliance...">
        </div>

        <!-- Category Filter Buttons -->
        <div class="blog-categories-wrap">
            <button class="blog-cat-btn active" data-category="all">
                <svg class="cat-btn-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22v-8"/><path d="M12 14a7 7 0 0 0 7-7H5a7 7 0 0 0 7 7z"/><path d="M12 3a2 2 0 0 0-2 2v2h4V5a2 2 0 0 0-2-2z"/></svg>
                All Posts
            </button>
            <button class="blog-cat-btn" data-category="ai">
                <svg class="cat-btn-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                Insurtech AI
            </button>
            <button class="blog-cat-btn" data-category="posp">
                <svg class="cat-btn-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                POSP Growth
            </button>
            <button class="blog-cat-btn" data-category="reconciliation">
                <svg class="cat-btn-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                Reconciliation
            </button>
            <button class="blog-cat-btn" data-category="embedded">
                <svg class="cat-btn-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                Embedded Insure
            </button>
            <button class="blog-cat-btn" data-category="compliance">
                <svg class="cat-btn-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                Compliance
            </button>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 2: FEATURED ARTICLE HERO CARD         -->
<!-- ============================================= -->
<section class="featured-post-section" id="featured-post">
    <div class="container">
        <div class="featured-card">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6">
                    <div class="featured-img-wrap">
                        <span class="featured-badge">FEATURED ARTICLE</span>
                        <img src="assets/images/rectangle-180.png" alt="FondosTech AI Insurtech Platform Dashboard">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="featured-content">
                        <span class="featured-card-label">Insurtech AI</span>
                        <div class="meta-info">
                            <span>Aug 18, 2026</span>
                            <span>•</span>
                            <span>5 min read</span>
                        </div>
                        <h2 class="featured-title">
                            <a href="<?php echo $base_path; ?>blog-detail.php" style="color:inherit;text-decoration:none;">How AI Voice Agents &amp; Hyperpersonalization Are Changing Insurance Customer Service</a>
                        </h2>
                        <p class="featured-excerpt">
                            Automated voice agents now handle policy queries, renewal reminders, and claims intake around the clock — enabling insurance brokerages to scale support without hiring extra staff.
                        </p>
                        <div class="author-row">
                            <div class="author-left">
                                <div class="author-avatar">FT</div>
                                <div>
                                    <div class="author-name">FondosTech Editorial</div>
                                    <div class="author-role">Insurtech Insights Team</div>
                                </div>
                            </div>
                            <a href="<?php echo $base_path; ?>blog-detail.php" class="btn-link-custom">
                                Read Article
                                <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- SECTION 3: ARTICLES 3-COLUMN GRID             -->
<!-- ============================================= -->
<section class="articles-grid-section" id="articles-grid">
    <div class="container">
        <div class="row g-4" id="blogGridContainer">
            <!-- Article 1: POSP Growth -->
            <div class="col-lg-4 col-md-6 blog-card-item" data-category="posp">
                <article class="blog-card">
                    <div class="blog-card-img">
                        <span class="blog-card-category">POSP Growth</span>
                        <img src="assets/images/insurance-policy-management-software-10.png" alt="POSP Network Management Dashboard">
                    </div>
                    <div class="blog-card-body">
                        <span class="blog-card-label">FT POSP Sure</span>
                        <div class="blog-card-meta">
                            <span>Aug 14, 2026</span>
                            <span>•</span>
                            <span>4 min read</span>
                        </div>
                        <h3 class="blog-card-title"><a href="<?php echo $base_path; ?>blog-detail.php" style="color:inherit;text-decoration:none;">Scaling POSP Networks: Supporting 5,000 Agents with One Team</a></h3>
                        <p class="blog-card-excerpt">
                            Learn how digital agent onboarding and instant commission tracking let insurance brokerages scale distribution rapidly without inflating back-office cost.
                        </p>
                        <div class="blog-card-footer">
                            <span class="author-role">Distribution Team</span>
                            <a href="<?php echo $base_path; ?>blog-detail.php" class="btn-link-custom">
                                Read Article
                                <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Article 2: Reconciliation -->
            <div class="col-lg-4 col-md-6 blog-card-item" data-category="reconciliation">
                <article class="blog-card">
                    <div class="blog-card-img">
                        <span class="blog-card-category">Reconciliation</span>
                        <img src="assets/images/bank-nbfcs-hm-10.png" alt="Commission Statement Reconciliation">
                    </div>
                    <div class="blog-card-body">
                        <span class="blog-card-label">FT PayIn-PayOut</span>
                        <div class="blog-card-meta">
                            <span>Aug 10, 2026</span>
                            <span>•</span>
                            <span>6 min read</span>
                        </div>
                        <h3 class="blog-card-title">Automating Commission Reconciliation: Turning 5 Days into Same-Day</h3>
                        <p class="blog-card-excerpt">
                            Ditch manual Excel matching. Discover how FT PayIn-PayOut matches insurer statements automatically and triggers instant payouts.
                        </p>
                        <div class="blog-card-footer">
                            <span class="author-role">Fintech &amp; Operations</span>
                            <a href="<?php echo $base_path; ?>blog-detail.php" class="btn-link-custom">
                                Read Article
                                <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Article 3: Embedded Insure -->
            <div class="col-lg-4 col-md-6 blog-card-item" data-category="embedded">
                <article class="blog-card">
                    <div class="blog-card-img">
                        <span class="blog-card-category">Embedded Insure</span>
                        <img src="assets/images/insurance-policy-management-software-11.png" alt="Embedded Insurance at Checkout">
                    </div>
                    <div class="blog-card-body">
                        <span class="blog-card-label">FT Embedded Insure</span>
                        <div class="blog-card-meta">
                            <span>Aug 05, 2026</span>
                            <span>•</span>
                            <span>5 min read</span>
                        </div>
                        <h3 class="blog-card-title">Embedded Insurance for Banks &amp; NBFCs: Protecting Every Loan</h3>
                        <p class="blog-card-excerpt">
                            Embedding credit life and personal accident insurance at loan approval increases customer uptake by 20-30% with instant API issuance.
                        </p>
                        <div class="blog-card-footer">
                            <span class="author-role">Banking Solutions</span>
                            <a href="<?php echo $base_path; ?>blog-detail.php" class="btn-link-custom">
                                Read Article
                                <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Article 4: Compliance -->
            <div class="col-lg-4 col-md-6 blog-card-item" data-category="compliance">
                <article class="blog-card">
                    <div class="blog-card-img">
                        <span class="blog-card-category">Compliance</span>
                        <img src="assets/images/insurance-policy-management-software-12.png" alt="IRDAI Compliance Shield">
                    </div>
                    <div class="blog-card-body">
                        <span class="blog-card-label">FT Compliance Shield</span>
                        <div class="blog-card-meta">
                            <span>Jul 28, 2026</span>
                            <span>•</span>
                            <span>7 min read</span>
                        </div>
                        <h3 class="blog-card-title">IRDAI Compliance Checklist for Insurance Brokers in 2026</h3>
                        <p class="blog-card-excerpt">
                            Stay ahead of regulatory audits with automated IRDAI check workflows, mandatory audit logs, and POSP certification tracking.
                        </p>
                        <div class="blog-card-footer">
                            <span class="author-role">Legal &amp; Compliance</span>
                            <a href="<?php echo $base_path; ?>blog-detail.php" class="btn-link-custom">
                                Read Article
                                <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Article 5: Insurtech AI -->
            <div class="col-lg-4 col-md-6 blog-card-item" data-category="ai">
                <article class="blog-card">
                    <div class="blog-card-img">
                        <span class="blog-card-category">Insurtech AI</span>
                        <img src="assets/images/rectangle-180.png" alt="AI Claims Validation Engine">
                    </div>
                    <div class="blog-card-body">
                        <span class="blog-card-label">FT Digital Claims</span>
                        <div class="blog-card-meta">
                            <span>Jul 20, 2026</span>
                            <span>•</span>
                            <span>4 min read</span>
                        </div>
                        <h3 class="blog-card-title">Augmented Claims Management: Cutting Resolution Time to Hours</h3>
                        <p class="blog-card-excerpt">
                            How machine learning models automatically validate claim documentation, flag anomalies, and rebuild customer trust.
                        </p>
                        <div class="blog-card-footer">
                            <span class="author-role">AI Research Lab</span>
                            <a href="<?php echo $base_path; ?>blog-detail.php" class="btn-link-custom">
                                Read Article
                                <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Article 6: POSP Growth -->
            <div class="col-lg-4 col-md-6 blog-card-item" data-category="posp">
                <article class="blog-card">
                    <div class="blog-card-img">
                        <span class="blog-card-category">POSP Growth</span>
                        <img src="assets/images/bank-nbfcs-hm-10.png" alt="Single API Integration Engine">
                    </div>
                    <div class="blog-card-body">
                        <span class="blog-card-label">FT POSP Sure</span>
                        <div class="blog-card-meta">
                            <span>Jul 12, 2026</span>
                            <span>•</span>
                            <span>5 min read</span>
                        </div>
                        <h3 class="blog-card-title">Single API Integration Engine: Connecting 50+ Insurer Portals</h3>
                        <p class="blog-card-excerpt">
                            Eliminate individual insurer portal integrations with a unified REST API architecture built for high-throughput quoting.
                        </p>
                        <div class="blog-card-footer">
                            <span class="author-role">Engineering Team</span>
                            <a href="<?php echo $base_path; ?>blog-detail.php" class="btn-link-custom">
                                Read Article
                                <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Article 7: Insurtech AI -->
            <div class="col-lg-4 col-md-6 blog-card-item" data-category="ai">
                <article class="blog-card">
                    <div class="blog-card-img">
                        <span class="blog-card-category">Insurtech AI</span>
                        <img src="assets/images/insurance-policy-management-software-10.png" alt="AI Claims Validation Engine">
                    </div>
                    <div class="blog-card-body">
                        <span class="blog-card-label">FT Digital Claims</span>
                        <div class="blog-card-meta">
                            <span>Jul 02, 2026</span>
                            <span>•</span>
                            <span>5 min read</span>
                        </div>
                        <h3 class="blog-card-title">AI Document Verification: Automated Fraud Detection for Claims</h3>
                        <p class="blog-card-excerpt">
                            Machine learning vision models automatically analyze damage photos, medical bills, and police reports to flag fraud instantly.
                        </p>
                        <div class="blog-card-footer">
                            <span class="author-role">AI Research Lab</span>
                            <a href="<?php echo $base_path; ?>blog-detail.php" class="btn-link-custom">
                                Read Article
                                <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Article 8: Embedded Insure -->
            <div class="col-lg-4 col-md-6 blog-card-item" data-category="embedded">
                <article class="blog-card">
                    <div class="blog-card-img">
                        <span class="blog-card-category">Embedded Insure</span>
                        <img src="assets/images/insurance-policy-management-software-11.png" alt="Embedded Travel Insurance">
                    </div>
                    <div class="blog-card-body">
                        <span class="blog-card-label">FT Embedded Insure</span>
                        <div class="blog-card-meta">
                            <span>Jun 24, 2026</span>
                            <span>•</span>
                            <span>4 min read</span>
                        </div>
                        <h3 class="blog-card-title">Embedded Travel Insurance: Converting Checkout Traffic into Policies</h3>
                        <p class="blog-card-excerpt">
                            How flight and bus booking portals embed instant trip cancellation & baggage loss coverage right at payment checkout.
                        </p>
                        <div class="blog-card-footer">
                            <span class="author-role">Travel Solutions</span>
                            <a href="<?php echo $base_path; ?>blog-detail.php" class="btn-link-custom">
                                Read Article
                                <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Article 9: POSP Growth -->
            <div class="col-lg-4 col-md-6 blog-card-item" data-category="posp">
                <article class="blog-card">
                    <div class="blog-card-img">
                        <span class="blog-card-category">POSP Growth</span>
                        <img src="assets/images/insurance-policy-management-software-12.png" alt="POSP Renewal Retention">
                    </div>
                    <div class="blog-card-body">
                        <span class="blog-card-label">FT POSP Sure</span>
                        <div class="blog-card-meta">
                            <span>Jun 15, 2026</span>
                            <span>•</span>
                            <span>6 min read</span>
                        </div>
                        <h3 class="blog-card-title">Automated Renewal Alerts: Boosting Agent Policy Retention by 40%</h3>
                        <p class="blog-card-excerpt">
                            Automated WhatsApp and SMS policy renewal reminders help POSPs retain customers effortlessly before policy lapse dates.
                        </p>
                        <div class="blog-card-footer">
                            <span class="author-role">Distribution Team</span>
                            <a href="<?php echo $base_path; ?>blog-detail.php" class="btn-link-custom">
                                Read Article
                                <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <!-- Pagination Bar -->
        <div class="blog-pagination" data-aos="fade-up">
            <button class="page-link-custom active" data-page="1">1</button>
            <button class="page-link-custom" data-page="2">2</button>
            <button class="page-link-custom" data-page="3">3</button>
            <button class="page-link-custom" id="nextPageBtn" aria-label="Next page">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </button>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
