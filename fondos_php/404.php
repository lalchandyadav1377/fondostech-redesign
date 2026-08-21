<?php
/**
 * FONDOS TECH — 404 Error Page (Page Not Found)
 * Displayed when a user navigates to an invalid or non-existent URL.
 */

// Set true HTTP 404 status code for browsers and SEO crawlers
http_response_code(404);

$page_title = '404 — Page Not Found | FondosTech';
$page_description = 'The page or URL you requested could not be found. Explore FondosTech insurance platform solutions, POSP onboarding, claims, and compliance.';
$active_page = '404';
$page_css = ['assets/css/pages/404.css'];
$page_js = ['assets/js/pages/404.js'];

include 'includes/header.php';
?>

<!-- ============================================= -->
<!-- 404 ERROR HERO SECTION                        -->
<!-- ============================================= -->
<section class="error-hero-section">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-10 text-center" data-aos="fade-up">
        
        <!-- Animated 404 Visual Graphic -->
        <div class="error-visual-wrapper mb-4">
          <div class="error-glow-bg"></div>
          <div class="error-badge-label">
            <span class="pulse-dot"></span>
            HTTP 404 ERROR
          </div>
          <div class="error-number-display">
            <span class="digit">4</span>
            <div class="shield-zero-wrapper">
              <img src="<?php echo $base_path; ?>assets/images/clip-path-group3.svg" alt="FondosTech Icon" class="zero-shield-img">
              <div class="zero-pulse-ring"></div>
            </div>
            <span class="digit">4</span>
          </div>
        </div>

        <!-- Main Title & Subtitle -->
        <h1 class="error-main-title">
          Oops! Lost in the <span class="text-primary-custom">Policy Cloud?</span>
        </h1>
        <p class="error-main-desc mx-auto">
          The page you requested <code class="requested-path-badge"><?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/unknown-page'); ?></code> 
          could not be found, may have been renamed, or is no longer available.
        </p>

        <!-- Interactive Search & Action Buttons -->
        <div class="error-actions-container">
          <div class="error-search-box mb-4 mx-auto">
            <div class="input-group">
              <span class="input-group-text bg-transparent border-0 pe-0">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#086ad8" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="11" cy="11" r="8"></circle>
                  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
              </span>
              <input type="text" id="ft404SearchInput" class="form-control border-0 shadow-none ps-3" placeholder="Search pages, products, or resources..." aria-label="Search site pages">
              <button class="btn btn-primary-custom rounded-pill text-white px-4 py-2 my-1 me-1 ms-auto" id="btn404SearchSubmit" type="button" style="background:#086ad8;">
                Search
              </button>
            </div>
          </div>

          <div class="d-flex flex-wrap align-items-center justify-content-center gap-3 mb-5">
            <a href="<?php echo $base_path; ?>index.php" class="btn-404-primary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
              </svg>
              Back to Home Page
            </a>
            <a href="<?php echo $base_path; ?>contact.php" class="btn-404-outline">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
              </svg>
              Contact Support
            </a>
            <button id="btnBackHistory" class="btn-404-ghost" type="button">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
              Go Back Previous Page
            </button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ============================================= -->
<!-- QUICK NAVIGATION & POPULAR DESTINATIONS        -->
<!-- ============================================= -->
<section class="error-destinations-section section-padding">
  <div class="container">
    <div class="section-header text-center mb-5" data-aos="fade-up">
      <span class="section-label">RECOMMENDED NAVIGATION</span>
      <h2 class="section-title">Where would you like to <span class="text-primary-custom">go next?</span></h2>
      <p class="section-desc mx-auto">Explore key areas of the FondosTech enterprise insurance software suite.</p>
    </div>

    <div class="row g-4" id="destinationsGrid">
      <!-- Destination Card 1 -->
      <div class="col-lg-4 col-md-6 destination-card-wrapper" data-keywords="home homepage main platform index" data-aos="fade-up" data-aos-delay="100">
        <a href="<?php echo $base_path; ?>index.php" class="destination-card">
          <div class="card-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#086ad8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
            </svg>
          </div>
          <div class="card-content">
            <h3 class="card-title">Homepage</h3>
            <p class="card-desc">Overview of our enterprise insurance brokerage platform &amp; quote engines.</p>
            <span class="card-link-text">
              Explore Home
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </span>
          </div>
        </a>
      </div>

      <!-- Destination Card 2 -->
      <div class="col-lg-4 col-md-6 destination-card-wrapper" data-keywords="posp agent portal onboarding software reconciliation posp sure" data-aos="fade-up" data-aos-delay="200">
        <a href="<?php echo $base_path; ?>posp.php" class="destination-card">
          <div class="card-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#086ad8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
          </div>
          <div class="card-content">
            <h3 class="card-title">FT POSP Sure</h3>
            <p class="card-desc">End-to-end POSP network onboarding, commission tracking, and IRDAI compliance.</p>
            <span class="card-link-text">
              View POSP Sure
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </span>
          </div>
        </a>
      </div>

      <!-- Destination Card 3 -->
      <div class="col-lg-4 col-md-6 destination-card-wrapper" data-keywords="about company team leadership history insurtech" data-aos="fade-up" data-aos-delay="300">
        <a href="<?php echo $base_path; ?>about-us.php" class="destination-card">
          <div class="card-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#086ad8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
              <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
            </svg>
          </div>
          <div class="card-content">
            <h3 class="card-title">About Us</h3>
            <p class="card-desc">Learn about FondosTech's mission, leadership team, and enterprise architecture.</p>
            <span class="card-link-text">
              Read About Us
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </span>
          </div>
        </a>
      </div>

      <!-- Destination Card 4 -->
      <div class="col-lg-4 col-md-6 destination-card-wrapper" data-keywords="contact help support phone email location map address" data-aos="fade-up" data-aos-delay="400">
        <a href="<?php echo $base_path; ?>contact.php" class="destination-card">
          <div class="card-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#086ad8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
          </div>
          <div class="card-content">
            <h3 class="card-title">Contact &amp; Map</h3>
            <p class="card-desc">Reach out to our sales &amp; support teams or locate our offices in Delhi, Mumbai, Jaipur.</p>
            <span class="card-link-text">
              Get In Touch
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </span>
          </div>
        </a>
      </div>

      <!-- Destination Card 5 -->
      <div class="col-lg-4 col-md-6 destination-card-wrapper" data-keywords="blog articles news insights compliance updates" data-aos="fade-up" data-aos-delay="500">
        <a href="<?php echo $base_path; ?>blog.php" class="destination-card">
          <div class="card-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#086ad8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
              <polyline points="14 2 14 8 20 8"></polyline>
              <line x1="16" y1="13" x2="8" y2="13"></line>
              <line x1="16" y1="17" x2="8" y2="17"></line>
              <polyline points="10 9 9 9 8 9"></polyline>
            </svg>
          </div>
          <div class="card-content">
            <h3 class="card-title">Insurtech Blog</h3>
            <p class="card-desc">Industry trends, IRDAI compliance updates, and brokerage automation guides.</p>
            <span class="card-link-text">
              Browse Articles
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </span>
          </div>
        </a>
      </div>

      <!-- Destination Card 6 -->
      <div class="col-lg-4 col-md-6 destination-card-wrapper" data-keywords="demo schedule request call sales consultation" data-aos="fade-up" data-aos-delay="600">
        <a href="<?php echo $base_path; ?>contact.php#demo" class="destination-card highlighted-card">
          <div class="card-icon-box shadow-primary">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
          </div>
          <div class="card-content">
            <h3 class="card-title">Schedule a Live Demo</h3>
            <p class="card-desc">See how FondosTech can run your entire brokerage on a single intelligent platform.</p>
            <span class="card-link-text text-primary">
              Book Live Demo
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </span>
          </div>
        </a>
      </div>
    </div>

    <!-- No Results Placeholder for Search -->
    <div id="noResultsBox" class="text-center py-5 d-none">
      <div class="no-results-icon mb-3">🔍</div>
      <h4 class="fw-bold mb-2">No matching pages found</h4>
      <p class="text-muted mb-3">Try searching for keywords like "POSP", "About", "Contact", or "Blog".</p>
      <button id="btnResetSearch" class="btn btn-outline-primary rounded-pill px-4" type="button">Clear Search</button>
    </div>

  </div>
</section>

<!-- ============================================= -->
<!-- ASSISTANCE BANNER                             -->
<!-- ============================================= -->
<section class="error-help-section pb-5">
  <div class="container">
    <div class="error-help-card" data-aos="fade-up">
      <div class="row align-items-center">
        <div class="col-lg-8 mb-3 mb-lg-0">
          <div class="d-flex align-items-center gap-3">
            <div class="help-icon-wrapper">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#086ad8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="16" x2="12" y2="12"></line>
                <line x1="12" y1="8" x2="12.01" y2="8"></line>
              </svg>
            </div>
            <div>
              <h4 class="help-card-title mb-1">Think this link should exist or need help?</h4>
              <p class="help-card-desc mb-0">Our support engineering team is available Monday through Saturday to assist you.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 text-lg-end">
          <div class="d-flex flex-wrap align-items-center justify-content-lg-end gap-2">
            <a href="tel:+918000366997" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-2 fw-semibold">
              📞 +91 80003 66997
            </a>
            <button id="btnReportBrokenLink" class="btn btn-sm btn-light rounded-pill px-3 py-2 border text-muted fw-semibold" type="button">
              📋 Copy Wrong URL
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
