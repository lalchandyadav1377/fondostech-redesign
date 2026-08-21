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
          Oops! Page Not <span class="text-primary-custom">Found</span>
        </h1>
        <p class="error-main-desc mx-auto">
          We couldn't find the page at <code class="requested-path-badge"><?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/unknown-page'); ?></code>. 
          It may have been moved, renamed, or is temporarily unavailable. Let's get you back on track.
        </p>

        <!-- Action Buttons -->
        <div class="error-actions-container">
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

<?php include 'includes/footer.php'; ?>
