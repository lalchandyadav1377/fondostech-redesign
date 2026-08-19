# FondosTech — Insurance Broker Software

> End-to-end insurance software built to run your entire brokerage on a single platform.

![Bootstrap](https://img.shields.io/badge/Bootstrap-5.2.3-7952B3?logo=bootstrap&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php&logoColor=white)
![License](https://img.shields.io/badge/License-Proprietary-blue)

---

## 📋 Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [Getting Started](#getting-started)
- [Design System](#design-system)
- [Page Sections](#page-sections)
- [Responsive Breakpoints](#responsive-breakpoints)
- [Accessibility](#accessibility)
- [Browser Support](#browser-support)
- [License](#license)

---

## Overview

FondosTech is a production-ready PHP website for an insurance technology platform. It brings quoting, POSP management, claims, reconciliation, payouts, and IRDAI compliance onto a single platform — with AI built in where it genuinely saves your team time.

This project uses **Bootstrap 5.2.3** as the frontend framework with a custom design system built on top, following a component-based PHP architecture with reusable header and footer includes.

---

## Features

| Feature | Description |
|---------|-------------|
| 🔒 **Sticky Header** | Pill-shaped navbar that hides when scrolling down, shows when scrolling up/at top, and compresses for compact viewing |
| 🎯 **Hero Section** | Blue gradient background with curved bottom shape, trust badges, and dashboard visual |
| 🏢 **Industries** | 2x2 grid (Banks, NBFCs, Fintech, Brokers) with "View All" button revealing 2 extra industry cards (Logistics & E-Commerce) on click |
| 🔄 **Auto-switching Tabs** | Insurance / Healthcare / Lifesciences / Corporate Wellness tabs with 5s auto-cycle |
| 📦 **Vertical Slider** | 3-column product cards with continuous vertical animation and hover-pause |
| ⚡ **Interactive Workflow Diagram** | Tabbed comparison (Without FT vs With FT). "Without FT" features danger red pill button and legacy workflow diagram; "With FT" features primary blue pill button, central pulsing FT core, flowing blue dashed data rays, and status badges. |
| 🏛️ **Government Claims** | 6-step claims workflow with parallax scroll background effect |
| 💬 **Testimonials Carousel** | Infinite looping horizontal slider with edge-to-edge peek alignment (1st and last cards half-cut at screen boundaries), mouse drag/touch swipe support, centered header, and bottom navigation controls. |
| ❓ **FAQ Cards Stack** | 2-column layout matching reference design with category badge "Know Why To Choose Us?", "Read More" CTA pill, and styled floating accordion cards. |
| 📱 **Fully Responsive** | Designed for 320px to 1440px+ screens with dedicated responsive stylesheet |
| ♿ **Accessible** | Semantic HTML, ARIA roles, keyboard navigation, `prefers-reduced-motion` support |

---

## Tech Stack

| Technology | Version | Purpose |
|-----------|---------|---------|
| PHP | 8.x | Server-side templating |
| Bootstrap | 5.2.3 | Layout framework (grid, accordion, utilities) |
| CSS3 | — | Custom design system, SVG keyframes, flow animations, parallax |
| JavaScript | ES6 | Counter animation, tab auto-switch, parallax, infinite carousel, drag/swipe gestures |
| Inter | Google Fonts | Typography (400, 500, 600, 700) |

---

## Project Structure

```
fondos_php/
│
├── index.php                          # Homepage
├── copy_assets.php                    # One-time image copy utility
├── README.md                          # Comprehensive project documentation
│
├── includes/
│   ├── header.php                     # Reusable header (HTML head + sticky navbar)
│   └── footer.php                     # Reusable footer (CTA + links + scripts)
│
└── assets/
    ├── css/
    │   ├── global.css                 # Design system (variables, reusable classes)
    │   ├── header.css                 # Header-only styles
    │   ├── footer.css                 # Footer-only styles
    │   ├── responsive.css             # Dedicated responsive media query stylesheet
    │   └── pages/
    │       └── home.css               # Homepage-specific section styles
    │
    ├── js/
    │   ├── header.js                  # Sticky/compressed header scroll behavior
    │   └── pages/
    │       └── home.js                # Counter, tabs, parallax, infinite slider, drag gestures
    │
    └── images/                        # All PNG/SVG assets (created via copy_assets.php)
```

---

## Getting Started

### Prerequisites

- **XAMPP** (or any Apache + PHP setup)
- PHP 7.4 or higher
- Web browser

### Installation

1. **Clone or place the project** inside your XAMPP `htdocs` directory:

   ```
   d:\xampp\htdocs\Fondos_websit\fondos_php\
   ```

2. **Start Apache** via XAMPP Control Panel.

3. **Copy image assets** — open this URL in your browser:

   ```
   http://localhost/Fondos_websit/fondos_php/copy_assets.php
   ```

   This copies all image/SVG files from the `fondos_web_htm/` reference folder into `fondos_php/assets/images/`.

4. **View the website**:

   ```
   http://localhost/Fondos_websit/fondos_php/
   ```

---

## Design System

### Colors

| Variable | Hex | Usage |
|----------|-----|-------|
| `--primary-color` | `#086AD8` | Brand blue — buttons, links, active accents |
| `--secondary-color` | `#212529` | Dark text, headings |
| `--danger-color` | `#DC3545` | Without FT active state, warning badges |
| `--bg-light` | `#F5FAFF` | Page background |
| `--border-color` | `#EEF0F1` | Card borders |
| `--border-active` | `#CEE4FD` | Active/hover card borders |
| `--text-body` | `#495057` | Body text |
| `--text-muted` | `#6C757D` | Secondary text |

### Typography

- **Font**: [Inter](https://fonts.google.com/specimen/Inter) via Google Fonts
- **Weights**: 400 (Regular), 500 (Medium), 600 (SemiBold), 700 (Bold)

### Reusable CSS Classes

| Class | Description |
|-------|-------------|
| `.section-label` | Small uppercase label text (e.g., "Platform Capabilities") |
| `.section-title` | Large section heading with `.text-primary-custom` spans |
| `.section-desc` | Body text for section descriptions |
| `.btn-primary-custom` | White pill button with primary color text |
| `.btn-outline-custom` | Transparent pill button with white border |
| `.btn-link-custom` | Text link with arrow icon + hover animation |
| `.btn-demo-outline` | Outlined demo CTA button |
| `.product-card` | Standard card with border, radius, hover shadow |
| `.stat-card` | Statistics card with icon, number, label |
| `.feature-card` | Feature item with icon + text |
| `.ic-logo-card` | Insurer logo card |
| `.badge-trust` | Glassmorphic trust badge |

---

## Page Sections

The homepage (`index.php`) contains these sections in order:

| # | Section | ID | Key Feature |
|---|---------|-----|-------------|
| 1 | Hero | `#hero` | Blue background, curved bottom, trust badges |
| 2 | Insurer Logos | `#insurers` | 12-column responsive logo grid |
| 3 | Stats (Enterprise Depth) | `#stats` | 4 animated counter cards |
| 4 | Industries | `#industries` | 4 industry cards (Banks, NBFCs, Brokers, Fintech) |
| 5 | Insurtech AI | `#insurtech` | 6 AI feature cards |
| 6 | Platform Capabilities | `#products` | 4 auto-switching tabs |
| 7 | Lines of Business | `#lob` | 3-column vertical slider with hover-pause |
| 8 | Workflow Diagram | `#workflow` | Illustration + text layout |
| 9 | Government Claims | `#claims` | 6 step cards with parallax background |
| 10 | Testimonials | `#testimonials` | 4 customer quote cards |
| 11 | FAQ | `#faq` | Bootstrap accordion, 6 items |

---

## Responsive Breakpoints

| Breakpoint | Width | Behavior |
|-----------|-------|----------|
| Mobile S | 320px | Single column, stacked layout |
| Mobile M | 375px | Single column |
| Mobile L | 425px | Single column |
| Tablet | 576px | 2-column grids begin |
| Tablet L | 768px | Header items adjust, 2-col grids |
| Desktop S | 992px | Full navbar visible, 3-col layouts |
| Desktop M | 1200px | Full 4-col grids |
| Desktop L | 1400px+ | Full design width |
| Design ref | 1440px | Primary design target |

---

## Accessibility

- **Semantic HTML**: `<header>`, `<main>`, `<footer>`, `<section>`, `<nav>`, `<h1>`–`<h3>`
- **ARIA**: `role="banner"`, `role="tablist"`, `role="tab"`, `role="tabpanel"`, `aria-label`, `aria-expanded`, `aria-controls`
- **Alt text**: All content images include descriptive alt text
- **Decorative images**: Marked with `aria-hidden="true"` and empty alt
- **Keyboard**: `:focus-visible` styles on all interactive elements
- **Reduced motion**: `prefers-reduced-motion` disables:
  - Counter animations (shows final values instantly)
  - Tab auto-switching
  - Parallax scroll effect
  - Vertical slider animations
  - Pulse animations

---

## Adding New Pages

To add a new page (e.g., `about.php`):

```php
<?php
$page_title = 'About Us — FondosTech';
$page_description = 'Learn about FondosTech...';
$page_css = ['assets/css/pages/about.css'];
$page_js = [];
$active_page = 'about';

include 'includes/header.php';
?>

<!-- PAGE CONTENT HERE -->

<?php include 'includes/footer.php'; ?>
```

---

## Browser Support

| Browser | Version |
|---------|---------|
| Chrome | 90+ |
| Firefox | 90+ |
| Safari | 14+ |
| Edge | 90+ |
| Opera | 76+ |

---

## License

© 2026 Fondos Technologies Private Limited. All rights reserved.

CIN: U72900DL2016PTC290430
