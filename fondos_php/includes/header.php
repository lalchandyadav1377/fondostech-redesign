<?php
/**
 * FONDOS TECH — Reusable Header Component
 * Include via: <?php include 'includes/header.php'; ?>
 *
 * Required: $page_title, $page_description (optional)
 * Optional: $page_css (array of additional CSS files)
 */

if (!isset($page_title))
  $page_title = 'FondosTech — Insurance Software';
if (!isset($page_description))
  $page_description = 'FondosTech is end-to-end insurance software that brings quoting, POSP management, claims, reconciliation, payouts and IRDAI compliance onto a single platform.';
if (!isset($page_css))
  $page_css = [];
if (!isset($active_page))
  $active_page = 'home';

// Determine base path
$base_path = '';

// Auto-sync images from fondos_web_htm to fondos_php/assets/images/
$target_img_dir = dirname(__DIR__) . '/assets/images/';
$source_htm_dir = dirname(dirname(__DIR__)) . '/fondos_web_htm/';

if (!is_dir($target_img_dir) || count(glob($target_img_dir . '*.*')) < 10) {
  if (!is_dir($target_img_dir)) {
    @mkdir($target_img_dir, 0777, true);
  }
  if (is_dir($source_htm_dir)) {
    $allowed_exts = ['png', 'svg', 'jpg', 'jpeg', 'gif', 'webp', 'ico'];
    $files = scandir($source_htm_dir);
    foreach ($files as $file) {
      $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
      if (in_array($ext, $allowed_exts)) {
        @copy($source_htm_dir . $file, $target_img_dir . $file);
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="author" content="Fondos Technologies Private Limited">
  <meta name="theme-color" content="#086AD8">

  <!-- Primary SEO Meta Tags -->
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="keywords"
    content="insurance software, insurance broker software, POSP management platform, claims automation, IRDAI compliance software, insurance quote engine, FondosTech">

  <!-- Canonical Link -->
  <link rel="canonical" href="https://fondostech.in/">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="<?php echo $base_path; ?>assets/images/clip-path-group3.svg">
  <link rel="apple-touch-icon" href="<?php echo $base_path; ?>assets/images/clip-path-group3.svg">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://fondostech.in/">
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:image" content="https://fondostech.in/assets/images/clip-path-group3.svg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://fondostech.in/">
  <meta property="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="twitter:image" content="https://fondostech.in/assets/images/clip-path-group3.svg">

  <!-- JSON-LD Structured Data Schema (SEO Rich Snippets) -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://fondostech.in/#organization",
          "name": "Fondos Technologies Private Limited",
          "url": "https://fondostech.in/",
          "logo": "https://fondostech.in/assets/images/clip-path-group3.svg",
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91-80003-66997",
            "contactType": "customer service",
            "email": "business@fondostech.in",
            "areaServed": "IN",
            "availableLanguage": ["English", "Hindi"]
          }
        },
        {
          "@type": "SoftwareApplication",
          "name": "FondosTech Insurance Software",
          "operatingSystem": "Web",
          "applicationCategory": "BusinessApplication",
          "description": "End-to-end insurance software bringing quoting, POSP management, claims, reconciliation, payouts and IRDAI compliance onto a single platform."
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is insurance software?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Insurance software is a digital platform that helps insurance brokers and POSPs manage the full policy lifecycle — quoting, POSP and client management, claims, commission reconciliation and regulatory compliance — from one system."
              }
            },
            {
              "@type": "Question",
              "name": "Does FondosTech use AI?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, FondosTech leverages AI and machine learning algorithms for automated quote extraction, intelligent claims assessment, fraud detection, and automated reconciliation across insurer portals."
              }
            },
            {
              "@type": "Question",
              "name": "Is FondosTech IRDAI-compliant?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, FondosTech is fully compliant with IRDAI regulations, including mandatory audit logging, POSP training tracking, client data protection, and commission cap compliance."
              }
            }
          ]
        }
      ]
    }
    </script>

  <!-- Bootstrap 5.2.3 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Global Design System -->
  <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/global.css">

  <!-- Header CSS -->
  <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/header.css">

  <!-- Footer CSS -->
  <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/footer.css">

  <!-- Page-specific CSS -->
  <?php foreach ($page_css as $css_file): ?>
    <link rel="stylesheet" href="<?php echo $base_path . $css_file; ?>">
  <?php endforeach; ?>

  <!-- AOS (Animate On Scroll) CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

  <!-- Global Responsive Styles -->
  <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/responsive.css">
</head>

<body>

  <!-- ============================================= -->
  <!-- HEADER                                        -->
  <!-- ============================================= -->
  <header id="ft-header" class="ft-header" role="banner">
    <nav class="ft-navbar" aria-label="Main navigation">
      <!-- Logo -->
      <a href="<?php echo $base_path; ?>index.php" class="ft-navbar-brand" aria-label="FondosTech Home">
        <img src="<?php echo $base_path; ?>assets/images/clip-path-group3.svg" alt="FondosTech Logo" width="180"
          height="40">
      </a>

      <!-- Mobile Toggle -->
      <button class="ft-navbar-toggle d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNavbar" aria-controls="mobileNavbar" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <!-- Desktop Navigation Links -->
      <div class="ft-nav d-none d-lg-flex" id="ft-nav" role="menubar">
        <div class="ft-nav-item" role="none">
          <a href="<?php echo $base_path; ?>index.php" class="ft-nav-link <?php echo ($active_page === 'home') ? 'active' : ''; ?>" role="menuitem">Home</a>
        </div>

        <!-- Products Dropdown -->
        <div class="ft-nav-item ft-has-dropdown" role="none">
          <button class="ft-nav-link" role="menuitem" aria-haspopup="true" aria-expanded="false">
            Products
            <svg class="dropdown-icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 6L8 10L12 6" />
            </svg>
          </button>
          <div class="ft-dropdown-menu" role="menu">
            <a href="<?php echo $base_path; ?>index.php#products" class="ft-dropdown-item" role="menuitem">FT Digital Insure</a>
            <a href="<?php echo $base_path; ?>index.php#products" class="ft-dropdown-item" role="menuitem">FT Digital Claims</a>
            <a href="<?php echo $base_path; ?>index.php#products" class="ft-dropdown-item" role="menuitem">FT EB Sure</a>
            <a href="<?php echo $base_path; ?>index.php#products" class="ft-dropdown-item" role="menuitem">FT Reconciliation</a>
            <a href="<?php echo $base_path; ?>index.php#products" class="ft-dropdown-item" role="menuitem">FT Payin/Payout</a>
            <a href="<?php echo $base_path; ?>index.php#products" class="ft-dropdown-item" role="menuitem">FT Compliance</a>
          </div>
        </div>

        <!-- Company Dropdown -->
        <div class="ft-nav-item ft-has-dropdown" role="none">
          <button class="ft-nav-link" role="menuitem" aria-haspopup="true" aria-expanded="false">
            Company
            <svg class="dropdown-icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 6L8 10L12 6" />
            </svg>
          </button>
          <div class="ft-dropdown-menu" role="menu">
            <a href="<?php echo $base_path; ?>index.php#workflow" class="ft-dropdown-item" role="menuitem">About Us</a>
            <a href="<?php echo $base_path; ?>contact.php" class="ft-dropdown-item" role="menuitem">Contact Us</a>
            <a href="<?php echo $base_path; ?>index.php#stats" class="ft-dropdown-item" role="menuitem">Leadership</a>
            <a href="<?php echo $base_path; ?>index.php#insurtech" class="ft-dropdown-item" role="menuitem">Careers</a>
            <a href="#" class="ft-dropdown-item" role="menuitem">Privacy Policy</a>
            <a href="#" class="ft-dropdown-item" role="menuitem">Terms &amp; Conditions</a>
          </div>
        </div>

        <!-- Resources Dropdown -->
        <div class="ft-nav-item ft-has-dropdown" role="none">
          <button class="ft-nav-link" role="menuitem" aria-haspopup="true" aria-expanded="false">
            Resources
            <svg class="dropdown-icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 6L8 10L12 6" />
            </svg>
          </button>
          <div class="ft-dropdown-menu" role="menu">
            <a href="<?php echo $base_path; ?>index.php#lob" class="ft-dropdown-item" role="menuitem">Blog</a>
            <a href="<?php echo $base_path; ?>index.php#claims" class="ft-dropdown-item" role="menuitem">Articles</a>
            <a href="<?php echo $base_path; ?>index.php#testimonials" class="ft-dropdown-item" role="menuitem">Newsletter</a>
            <a href="<?php echo $base_path; ?>index.php#faq" class="ft-dropdown-item" role="menuitem">FAQs</a>
          </div>
        </div>

        <div class="ft-nav-item" role="none">
          <a href="<?php echo $base_path; ?>contact.php" class="ft-nav-link <?php echo ($active_page === 'contact') ? 'active' : ''; ?>" role="menuitem">Contact Us</a>
        </div>
      </div>

      <!-- CTA -->
      <div class="ft-header-cta">
        <a href="#demo" class="btn-demo-outline">
          Request Demo
          <svg class="btn-icon" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </a>
      </div>
    </nav>
  </header>

  <!-- ============================================= -->
  <!-- MOBILE OFFCANVAS NAVBAR                       -->
  <!-- ============================================= -->
  <div class="offcanvas offcanvas-start ft-mobile-offcanvas d-lg-none" tabindex="-1" id="mobileNavbar" aria-labelledby="mobileNavbarLabel">
    <div class="offcanvas-header border-bottom px-4 py-3">
      <a href="<?php echo $base_path; ?>index.php" class="offcanvas-title" id="mobileNavbarLabel">
        <img src="<?php echo $base_path; ?>assets/images/clip-path-group3.svg" alt="FondosTech Logo" width="150" height="34">
      </a>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between px-4 py-3">
      <div class="ft-mobile-menu-list">
        <a href="<?php echo $base_path; ?>index.php" class="ft-mobile-menu-link <?php echo ($active_page === 'home') ? 'active' : ''; ?>">Home</a>

        <!-- Products Accordion -->
        <div class="ft-mobile-accordion-item">
          <button class="ft-mobile-menu-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mobileProducts" aria-expanded="false">
            <span>Products</span>
            <svg class="dropdown-icon ms-auto" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 6L8 10L12 6"/></svg>
          </button>
          <div class="collapse" id="mobileProducts">
            <div class="ft-mobile-sub-menu">
              <a href="<?php echo $base_path; ?>index.php#products">FT Digital Insure</a>
              <a href="<?php echo $base_path; ?>index.php#products">FT Digital Claims</a>
              <a href="<?php echo $base_path; ?>index.php#products">FT EB Sure</a>
              <a href="<?php echo $base_path; ?>index.php#products">FT Reconciliation</a>
              <a href="<?php echo $base_path; ?>index.php#products">FT Payin/Payout</a>
              <a href="<?php echo $base_path; ?>index.php#products">FT Compliance</a>
            </div>
          </div>
        </div>

        <!-- Company Accordion -->
        <div class="ft-mobile-accordion-item">
          <button class="ft-mobile-menu-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mobileCompany" aria-expanded="false">
            <span>Company</span>
            <svg class="dropdown-icon ms-auto" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 6L8 10L12 6"/></svg>
          </button>
          <div class="collapse" id="mobileCompany">
            <div class="ft-mobile-sub-menu">
              <a href="<?php echo $base_path; ?>index.php#workflow">About Us</a>
              <a href="<?php echo $base_path; ?>contact.php">Contact Us</a>
              <a href="<?php echo $base_path; ?>index.php#stats">Leadership</a>
              <a href="<?php echo $base_path; ?>index.php#insurtech">Careers</a>
            </div>
          </div>
        </div>

        <!-- Resources Accordion -->
        <div class="ft-mobile-accordion-item">
          <button class="ft-mobile-menu-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mobileResources" aria-expanded="false">
            <span>Resources</span>
            <svg class="dropdown-icon ms-auto" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 6L8 10L12 6"/></svg>
          </button>
          <div class="collapse" id="mobileResources">
            <div class="ft-mobile-sub-menu">
              <a href="<?php echo $base_path; ?>index.php#lob">Blog</a>
              <a href="<?php echo $base_path; ?>index.php#claims">Articles</a>
              <a href="<?php echo $base_path; ?>index.php#testimonials">Newsletter</a>
              <a href="<?php echo $base_path; ?>index.php#faq">FAQs</a>
            </div>
          </div>
        </div>

        <a href="<?php echo $base_path; ?>contact.php" class="ft-mobile-menu-link <?php echo ($active_page === 'contact') ? 'active' : ''; ?>">Contact Us</a>
      </div>

      <div class="ft-mobile-offcanvas-footer pt-4 mt-auto">
        <a href="<?php echo $base_path; ?>contact.php" class="btn btn-primary w-100 rounded-pill py-2.5 fw-bold shadow-sm" style="background:#086ad8;border-color:#086ad8;">Request Demo</a>
      </div>
    </div>
  </div>

  <!-- Spacer to offset fixed header -->
  <!-- <div style="height: 5.5rem;" aria-hidden="true"></div> -->

  <main id="main-content">