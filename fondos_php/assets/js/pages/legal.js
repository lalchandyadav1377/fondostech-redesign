/* =============================================
   FONDOSTECH LEGAL PAGES — STICKY TOC + SCROLLSPY
   CSS position:sticky cannot work here because
   #main-content uses overflow: hidden.
   ============================================= */

(function () {
    'use strict';

    function getStickyTop() {
        const headerEl = document.getElementById('ft-header');
        if (!headerEl || headerEl.classList.contains('header-hidden')) {
            return 24;
        }
        return Math.max(24, headerEl.getBoundingClientRect().bottom + 16);
    }

    function resetSticky(el) {
        if (!el) {
            return;
        }
        el.style.transform = 'none';
        el.classList.remove('is-stuck');
    }

    function stickWithin(el, container) {
        if (!el || !container) {
            return;
        }

        const topOffset = getStickyTop();
        const containerRect = container.getBoundingClientRect();
        const elHeight = el.offsetHeight;
        const maxTranslate = Math.max(0, container.offsetHeight - elHeight);
        let translate = 0;

        if (containerRect.top < topOffset) {
            translate = Math.min(topOffset - containerRect.top, maxTranslate);
        }

        el.style.transform = 'translate3d(0, ' + translate + 'px, 0)';
        el.classList.toggle('is-stuck', translate > 1);
    }

    function initLegalToc() {
        const tocLinks = document.querySelectorAll('.legal-toc-link');
        const sections = document.querySelectorAll('.legal-block[id]');
        const sidebar = document.querySelector('.legal-sidebar');
        const layout = document.querySelector('.legal-layout');
        const mobileToc = document.querySelector('.legal-mobile-toc');
        const documentCard = document.querySelector('.legal-document');
        let ticking = false;

        function updateActiveLink() {
            if (!tocLinks.length || !sections.length) {
                return;
            }

            const activeOffset = getStickyTop() + 40;
            let currentId = sections[0].id;

            sections.forEach(function (section) {
                if (section.getBoundingClientRect().top <= activeOffset) {
                    currentId = section.id;
                }
            });

            tocLinks.forEach(function (link) {
                const targetId = (link.getAttribute('href') || '').replace('#', '');
                link.classList.toggle('active', targetId === currentId);
            });
        }

        function updateSticky() {
            if (window.innerWidth >= 992) {
                resetSticky(mobileToc);
                stickWithin(sidebar, layout);
            } else {
                resetSticky(sidebar);
                resetSticky(mobileToc);
            }
        }

        function onFrame() {
            updateSticky();
            updateActiveLink();
            ticking = false;
        }

        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(onFrame);
                ticking = true;
            }
        }

        window.addEventListener('scroll', requestTick, { passive: true });
        window.addEventListener('resize', requestTick);
        window.addEventListener('load', requestTick);
        setTimeout(requestTick, 300);
        onFrame();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initLegalToc);
    } else {
        initLegalToc();
    }
})();
