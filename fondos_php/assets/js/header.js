/**
 * FONDOS TECH — Header Behavior
 * Sticky header with compression and hide-on-scroll-down / show-on-scroll-up
 */
(function () {
    'use strict';

    const header = document.getElementById('ft-header');
    if (!header) return;

    const SCROLL_THRESHOLD = 80;
    const HIDE_THRESHOLD = 120;
    let ticking = false;
    let lastScrollY = window.scrollY || window.pageYOffset;
    let previousScrollY = lastScrollY;

    const toggle = document.getElementById('ft-navbar-toggle');
    const nav = document.getElementById('ft-nav');

    function onScroll() {
        lastScrollY = Math.max(0, window.scrollY || window.pageYOffset);
        if (!ticking) {
            window.requestAnimationFrame(updateHeader);
            ticking = true;
        }
    }

    function updateHeader() {
        const isNavOpen = nav && nav.classList.contains('nav-open');

        // Compression check
        if (lastScrollY > SCROLL_THRESHOLD) {
            header.classList.add('header-scrolled');
        } else {
            header.classList.remove('header-scrolled');
        }

        // Hide on scroll down, show on scroll up
        if (!isNavOpen && lastScrollY > HIDE_THRESHOLD) {
            if (lastScrollY > previousScrollY + 5) {
                // Scrolling down -> Hide header
                header.classList.add('header-hidden');
            } else if (lastScrollY < previousScrollY - 5) {
                // Scrolling up -> Show header
                header.classList.remove('header-hidden');
            }
        } else {
            // At top of page or mobile menu open -> Always show header
            header.classList.remove('header-hidden');
        }

        previousScrollY = lastScrollY;
        ticking = false;
    }

    window.addEventListener('scroll', onScroll, { passive: true });

    if (toggle && nav) {
        toggle.addEventListener('click', function (e) {
            e.stopPropagation();
            const isOpen = nav.classList.contains('nav-open');
            const newState = !isOpen;
            toggle.classList.toggle('active', newState);
            nav.classList.toggle('nav-open', newState);
            toggle.setAttribute('aria-expanded', newState);
            header.classList.remove('header-hidden');
            
            // Lock body scroll on mobile when menu is active
            if (window.innerWidth < 992) {
                document.body.classList.toggle('mobile-nav-active', newState);
            }
        });

        // Close button inside mobile offcanvas drawer
        const closeBtn = document.getElementById('ft-mobile-nav-close');
        if (closeBtn) {
            closeBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                toggle.classList.remove('active');
                nav.classList.remove('nav-open');
                toggle.setAttribute('aria-expanded', 'false');
                document.body.classList.remove('mobile-nav-active');
            });
        }

        // Dropdown toggle on mobile
        nav.querySelectorAll('.ft-has-dropdown > .ft-nav-link').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                if (window.innerWidth < 992) {
                    e.preventDefault();
                    e.stopPropagation();
                    const parent = btn.closest('.ft-has-dropdown');
                    const isOpen = parent.classList.contains('dropdown-open');
                    
                    // Close other open dropdowns
                    nav.querySelectorAll('.ft-has-dropdown').forEach(function (item) {
                        if (item !== parent) item.classList.remove('dropdown-open');
                    });

                    parent.classList.toggle('dropdown-open', !isOpen);
                    btn.setAttribute('aria-expanded', !isOpen);
                }
            });
        });

        // Close nav drawer on dropdown link click
        nav.querySelectorAll('.ft-dropdown-item, .ft-nav-link:not([aria-haspopup="true"])').forEach(function (link) {
            link.addEventListener('click', function () {
                if (window.innerWidth < 992) {
                    toggle.classList.remove('active');
                    nav.classList.remove('nav-open');
                    toggle.setAttribute('aria-expanded', 'false');
                    document.body.classList.remove('mobile-nav-active');
                    nav.querySelectorAll('.ft-has-dropdown').forEach(function (item) {
                        item.classList.remove('dropdown-open');
                    });
                }
            });
        });

        // Close mobile nav when clicking outside
        document.addEventListener('click', function (e) {
            if (window.innerWidth < 992 && nav.classList.contains('nav-open')) {
                if (!header.contains(e.target)) {
                    toggle.classList.remove('active');
                    nav.classList.remove('nav-open');
                    toggle.setAttribute('aria-expanded', 'false');
                    document.body.classList.remove('mobile-nav-active');
                }
            }
        });
    }
})();
