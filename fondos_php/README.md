# FondosTech — Enterprise Insurance Broker Software

> End-to-end insurance software built to run your entire brokerage on a single intelligent platform.

![Bootstrap](https://img.shields.io/badge/Bootstrap-5.2.3-7952B3?logo=bootstrap&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php&logoColor=white)
![Leaflet](https://img.shields.io/badge/Leaflet-1.9.4-199900?logo=leaflet&logoColor=white)
![License](https://img.shields.io/badge/License-Proprietary-blue)

---

## 📋 Table of Contents

- [Overview](#overview)
- [Pages & Core Features](#pages--core-features)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [Getting Started](#getting-started)
- [Design System & UI Components](#design-system--ui-components)
- [Responsive Breakpoints](#responsive-breakpoints)
- [Accessibility & SEO](#accessibility--seo)
- [License](#license)

---

## Overview

**FondosTech** is a production-ready, modular PHP web application for an enterprise insurance technology platform. It unifies quoting, POSP onboarding, claims management, commission reconciliation, payouts, and IRDAI compliance onto a single platform — with built-in AI capabilities.

The repository follows a clean, component-based PHP architecture with modular headers, footers, page-specific stylesheets, and interactive JavaScript controllers.

---

## Pages & Core Features

### 🏠 1. Homepage (`index.php`)
- 🔒 **Sticky Header**: Pill-shaped floating navbar with custom chevron dropdown arrows (`Products`, `Company`, `Resources`), scroll compression, and offcanvas drawer for mobile.
- 🎯 **Hero Section**: Curated gradient hero with trust badges, call-to-actions, and interactive dashboard visuals.
- 🏢 **Industries Served**: 2x2 grid (Banks, NBFCs, Fintech, Brokers) with "View All" toggle button revealing 2 extra industry cards (Logistics & E-Commerce).
- 🔄 **Auto-Switching Product Deck**: Stacked card deck with category filters (Insurance, Healthcare, Lifesciences, Corporate Wellness) and auto-rotation.
- 📦 **Lines of Business Vertical Marquee**: 3-column continuous vertical product card slider running in a mathematically exact, 0.00px jump-free infinite marquee loop (`translateY(var(--scroll-dist))`).
- ⚡ **Insurance Workflow Comparison**: Interactive toggle between **"Without FT"** (danger red state with legacy workflow diagram) and **"With FT"** (primary blue state with central pulsing FT core and flowing data rays).
- 🏛️ **Government Claims Process**: 6-step claims workflow with parallax scroll background effects.
- 💬 **Testimonials Infinite Carousel**: Horizontal slider with edge-to-edge peek alignment, mouse drag/touch swipe support, and navigation controls.
- ❓ **Sticky FAQ Section**: 2-column layout featuring a GPU-accelerated smooth sticky sidebar (`initFaqSticky()`) that pins the left header at `top: 120px` while scrolling through 6 interactive accordion items on the right.

### 📞 2. Contact Us (`contact.php`)
- 📝 **Interactive Contact Form**: Enterprise inquiry form with jQuery Validation (Indian 10-digit phone regex `phoneIN` & work email check) and custom SweetAlert2 confirmation modal.
- 🗺️ **Interactive Network Node India Map**: Powered by Leaflet.js with CartoDB Voyager light vector tiles.
- 📍 **Pulsing Map Pin Markers**: Interactive location pins for **New Delhi**, **Jaipur**, **Gurugram**, and **Mumbai**. Clicking any pin smoothly pans the map (`flyTo`) and updates the active center details card.
- 🏢 **Active Center Node Details Card**: Real-time city card displaying City Name, Jurisdiction, Street Address, Phone, Email, and City Selector Pills (`[New Delhi] [Jaipur] [Gurugram] [Mumbai]`).

### 📱 3. FT POSP Sure (`posp.php`)
- 🚀 **Section 1 — Hero Showcase**: 2-Column responsive hero banner featuring left-aligned copy, primary blue CTAs, stylized light-blue checkmark badges (`✓`), right-side software interface showcase (`insurance-policy-management-software-10.png`), floating metric card (`⚡ 5,000+ POSPs Live & Onboarded`), and 4 `IntersectionObserver` animated stat counters (`5,000+ POSPs Supported`, `50+ Insurer APIs`, `99.8% Auto Reconciliation`, `100% IRDAI Compliant`).
- ⚠️ **Section 2 — Why Spreadsheet Fails (`WHY IT'S MANDATORY`)**: 3-card breakdown highlighting Compliance Audit Risk, Slow Payout Attrition, and Excel Reconciliation limits past 100 agents, complete with identical Y-pixel height alignment (`min-height: 3.25rem` titles and flex-end impact badges) and a bottom Scale Solution Banner Callout.
- 🔄 **Section 3 — 6-Step Workflow (`HOW IT WORKS`)**: 6 circular step nodes (`01`–`06`) covering Digital KYC Onboarding, Instant Product Access, Quoting & Issuance, Commission Tracking, Claims Support, and Auto-Renewal Tracking.
- 📊 **Section 4 — Dual Dashboard Showcase (`MANAGING YOUR POSP NETWORK`)**: Side-by-side feature cards detailing Agent Portal tools vs Broker Admin Controls, anchored by a Role Architecture Summary Banner (`Single Sign-On Architecture ➔ POSP Agent Portal + Broker Admin Console`).
- ⚡ **Section 5 — AI In Insurance Suite (`AI IN INSURANCE`)**: 4 interactive feature cards (white background by default, smoothly animating into solid Primary Blue `#086AD8` cards with white text on hover) for AI-Matched Recommendations, AI-Assisted Underwriting, Vahan API Vehicle Lookup, and Claims Routing.
- 🎯 **Section 6 — Segment Grid (`BUILT FOR`)**: 4 target segment cards (Brokers, Agencies, Banks/NBFCs, Fintechs) with a bottom Scale Flow Bar (`Insurance Broker ➔ FT POSP Sure ➔ 5,000+ POSPs ➔ End Customers`).
- ⚖️ **Section 7 — Side-by-Side Comparison Grid (`THE DIFFERENCE`)**: Dual-card comparison view contrasting *Legacy Manual Mode* (soft gray items with `✕` icons) against *With FT POSP Sure* (Primary Blue `#086AD8` border, `RECOMMENDED` badge, and `✓` icons).
- ❓ **Section 8 — POSP Software FAQ (`POSP SOFTWARE, EXPLAINED`)**: 8-item sticky accordion addressing IRDAI compliance, white-label capabilities, Vahan API motor quoting, and AI integration.
- 📣 **Section 9 — Primary CTA Callout**: High-impact full-width callout banner inviting brokers to schedule a live product demonstration.

### 🚫 4. 404 Error Page (`404.php`)
- 🎨 **Visual 404 Hero Showcase**: Custom animated 404 digit counter with brand blue glowing background, pulsing status dots, and floating shield logo.
- 🔎 **Real-time Live Page Search Bar**: Allows users to search and filter popular destination cards (Homepage, POSP Sure, About Us, Contact, Blog, Demo) dynamically on keypress.
- 🛡️ **HTTP 404 Status Code Header**: Returns authentic 404 status header (`http_response_code(404)`) for SEO crawlers and server accuracy.
- ⚙️ **Apache `.htaccess` URL Rewrite**: Intercepts non-existent page requests (e.g., `http://localhost/Fondos_websit/fondos_php/wrong-url` or invalid links) and automatically routes them to display `404.php`.
- 🚀 **Interactive Navigation Tools**: Direct links for "Back to Home Page", "Contact Support", "Go Back Previous Page", and "Copy Wrong URL" with SweetAlert2 toast notification.

---

## Tech Stack

| Technology | Version | Purpose |
|-----------|---------|---------|
| **PHP** | 8.x | Server-side templating & component includes |
| **Bootstrap** | 5.2.3 | Responsive grid framework, offcanvas drawer & accordions |
| **Leaflet.js** | 1.9.4 | Interactive vector India map tiles & custom node pin markers |
| **SweetAlert2** | — | Enterprise modal popups & 404 notification toasts |
| **jQuery & Validation** | 3.x | Client-side form validation |
| **AOS** | 2.3.4 | Animate-On-Scroll entrance transitions |
| **CSS3** | — | Custom design system, keyframes, 404 glowing visuals & responsive cards |
| **JavaScript** | ES6 | Counter animation, 404 real-time search filter, history back & URL copy |
| **Apache (.htaccess)** | — | Custom ErrorDocument 404 routing & URL rewriting |
| **Inter** | Google Fonts | Primary typography (400, 500, 600, 700, 800) |

---

## Project Structure

```
fondos_php/
│
├── index.php                          # Homepage
├── about-us.php                       # About Us page
├── contact.php                        # Contact Us page (Form + Network Node Map)
├── posp.php                           # FT POSP Sure product page
├── 404.php                            # Custom 404 Error Page (Page Not Found)
├── .htaccess                          # Apache ErrorDocument 404 & URL rewrite rules
├── copy_assets.php                    # One-time image copy utility script
├── cleanup_unused_assets.php          # Asset cleanup utility script
├── README.md                          # Comprehensive repository documentation
│
├── includes/
│   ├── header.php                     # Reusable header (HTML head + sticky navbar + offcanvas)
│   └── footer.php                     # Reusable footer (CTA banner + footer links + scripts)
│
└── assets/
    ├── css/
    │   ├── global.css                 # Design tokens, variables, global utility classes
    │   ├── header.css                 # Header & navbar styles
    │   ├── footer.css                 # Footer-only styles
    │   ├── responsive.css             # Dedicated mobile/tablet media query stylesheet
    │   └── pages/
    │       ├── home.css               # Homepage-specific section styles
    │       ├── about.css              # About Us page styles
    │       ├── contact.css            # Contact page styles (Network node card, map styling)
    │       ├── posp.css               # FT POSP Sure page styles
    │       └── 404.css                # 404 Error Page visual & responsive styles
    │
    ├── js/
    │   ├── header.js                  # Navbar scroll compression & offcanvas controls
    │   └── pages/
    │       ├── home.js                # Counter, tabs, infinite marquee, sticky FAQ controller
    │       ├── about.js               # About page counter, tab & timeline progress controller
    │       ├── contact.js             # Form validation & Leaflet Network Node map controller
    │       ├── posp.js                # FT POSP Sure counter & interactive controller
    │       └── 404.js                 # 404 real-time card search, history back & URL copy controller
    │
    └── images/                        # All SVG & PNG image assets
```

---

## Getting Started

### Prerequisites

- **XAMPP** (or any Apache + PHP 7.4/8.x environment)
- Modern web browser (Chrome, Edge, Firefox, Safari)

### Installation

1. **Place the project** inside your local web server directory:
   ```
   d:\xampp\htdocs\Fondos_websit\fondos_php\
   ```

2. **Start Apache** via XAMPP Control Panel.

3. **Verify Image Assets** — run this script URL once if images are missing:
   ```
   http://localhost/Fondos_websit/fondos_php/copy_assets.php
   ```

4. **Launch Application**:
   - Homepage: `http://localhost/Fondos_websit/fondos_php/index.php`
   - Contact Page: `http://localhost/Fondos_websit/fondos_php/contact.php`
   - POSP Page: `http://localhost/Fondos_websit/fondos_php/posp.php`
   - 404 Error Page (Direct): `http://localhost/Fondos_websit/fondos_php/404.php`
   - Test Wrong URL (404 Routing): `http://localhost/Fondos_websit/fondos_php/invalid-page-demo`

---

## Design System & UI Components

### Color Tokens

| Token | Hex | Usage |
|-------|-----|-------|
| `--primary-color` | `#086AD8` | Primary brand blue — CTA buttons, active accents, map pins, 404 digits |
| `--secondary-color` | `#212529` | Dark headings and primary text |
| `--danger-color` | `#DC3545` | "Without FT" warning state & 404 pulse dot |
| `--bg-light` | `#F5FAFF` | Soft page section background |
| `--border-active` | `#CEE4FD` | Active/hover card borders |

---

## Responsive Breakpoints

| Device | Width | Layout Behavior |
|--------|-------|-----------------|
| Mobile Small | 320px – 425px | Single-column cards, full-width buttons, touch drawer |
| Tablet / Mobile Landscape | 576px – 768px | 2-column card grids, responsive map container |
| Desktop Medium | 992px – 1199px | Full desktop navbar, 3-column marquee, sticky sidebar |
| Large Desktop | 1200px+ | Primary target layout (1320px container max-width) |

---

## Accessibility & SEO

- **Semantic HTML5**: `<header>`, `<main>`, `<footer>`, `<section>`, `<nav>`, `<h1>`–`<h3>`
- **SEO Ready**: Dynamic `<title>`, `<meta description>`, OpenGraph tags, JSON-LD Structured Data
- **ARIA & Focus**: `role="banner"`, `role="navigation"`, `aria-expanded`, `:focus-visible` outlines
- **HTTP 404 Header**: Sends proper 404 HTTP status code for search crawlers.
- **Reduced Motion**: Respects `prefers-reduced-motion` settings across marquee and counter scripts

---

## License

© 2026 Fondos Technologies Private Limited. All rights reserved.  
CIN: U72900DL2016PTC290430
