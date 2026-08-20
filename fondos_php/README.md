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

---

## Tech Stack

| Technology | Version | Purpose |
|-----------|---------|---------|
| **PHP** | 8.x | Server-side templating & component includes |
| **Bootstrap** | 5.2.3 | Responsive grid framework, offcanvas drawer & accordions |
| **Leaflet.js** | 1.9.4 | Interactive vector India map tiles & custom node pin markers |
| **SweetAlert2** | — | Enterprise modal popups |
| **jQuery & Validation** | 3.x | Client-side form validation |
| **AOS** | 2.3.4 | Animate-On-Scroll entrance transitions |
| **CSS3** | — | Custom design system, flexbox/grid layouts, SVG keyframes, smooth sticky scroll |
| **JavaScript** | ES6 | Counter animation, tab auto-switch, infinite marquee, smooth sticky observer |
| **Inter** | Google Fonts | Primary typography (400, 500, 600, 700, 800) |

---

## Project Structure

```
fondos_php/
│
├── index.php                          # Homepage
├── contact.php                        # Contact Us page (Form + Network Node Map)
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
    │       └── contact.css            # Contact page styles (Network node card, map styling)
    │
    ├── js/
    │   ├── header.js                  # Navbar scroll compression & offcanvas controls
    │   └── pages/
    │       ├── home.js                # Counter, tabs, infinite marquee, sticky FAQ controller
    │       └── contact.js             # Form validation & Leaflet Network Node map controller
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

---

## Design System & UI Components

### Color Tokens

| Token | Hex | Usage |
|-------|-----|-------|
| `--primary-color` | `#086AD8` | Primary brand blue — CTA buttons, active accents, map pins |
| `--secondary-color` | `#212529` | Dark headings and primary text |
| `--danger-color` | `#DC3545` | "Without FT" warning state |
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
- **Reduced Motion**: Respects `prefers-reduced-motion` settings across marquee and counter scripts

---

## License

© 2026 Fondos Technologies Private Limited. All rights reserved.  
CIN: U72900DL2016PTC290430
