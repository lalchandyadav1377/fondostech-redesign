/* =============================================
   FONDOSTECH BLOG DETAIL PAGE JS — TOC SCROLLSPY, STICKY & SHARE
   ============================================= */

(function () {
    'use strict';

    function initBlogDetail() {
        // Table of Contents Scrollspy Active State
        const tocLinks = document.querySelectorAll('.toc-link');
        const sections = document.querySelectorAll('.article-body-content h2[id]');

        function updateTocScrollspy() {
            let currentSectionId = '';
            const scrollPos = window.scrollY + 140;

            sections.forEach(section => {
                if (scrollPos >= section.offsetTop) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            tocLinks.forEach(link => {
                const targetId = link.getAttribute('href').replace('#', '');
                if (targetId === currentSectionId) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        }

        if (sections.length && tocLinks.length) {
            window.addEventListener('scroll', updateTocScrollspy);
            updateTocScrollspy();
        }

        // Copy Article Link to Clipboard
        const copyBtn = document.getElementById('copyArticleLink');
        if (copyBtn) {
            copyBtn.addEventListener('click', function (e) {
                e.preventDefault();
                navigator.clipboard.writeText(window.location.href).then(() => {
                    this.style.background = '#086ad8';
                    this.style.color = '#ffffff';
                    setTimeout(() => {
                        this.style.background = '#ffffff';
                        this.style.color = '#086ad8';
                    }, 2000);
                });
            });
        }

        // Sticky Table of Contents Card Handler
        const tocWidget = document.getElementById('desktopTocWidget');
        const mainSection = document.querySelector('.article-main-section');
        const sidebarCol = tocWidget ? tocWidget.closest('.col-lg-4') : null;

        function handleStickyTocWidget() {
            if (!tocWidget || !mainSection || !sidebarCol || window.innerWidth < 992) {
                if (tocWidget) {
                    tocWidget.style.position = '';
                    tocWidget.style.top = '';
                    tocWidget.style.width = '';
                }
                return;
            }

            const mainRect = mainSection.getBoundingClientRect();
            const colWidth = sidebarCol.getBoundingClientRect().width - 24; // padding allowance
            const stickyTopOffset = 105; // 105px from top viewport

            // Calculate the initial offset top of the TOC card relative to document
            const tocInitialTop = tocWidget.offsetTop + mainSection.offsetTop;
            const scrollY = window.scrollY;

            if (scrollY + stickyTopOffset >= tocInitialTop) {
                const maxScroll = mainSection.offsetHeight - tocWidget.offsetHeight - 60;
                const currentScroll = Math.abs(mainRect.top) + stickyTopOffset;

                if (currentScroll < maxScroll) {
                    tocWidget.style.position = 'fixed';
                    tocWidget.style.top = stickyTopOffset + 'px';
                    tocWidget.style.width = colWidth + 'px';
                    tocWidget.style.zIndex = '90';
                } else {
                    tocWidget.style.position = 'absolute';
                    tocWidget.style.top = maxScroll + 'px';
                    tocWidget.style.width = colWidth + 'px';
                }
            } else {
                tocWidget.style.position = '';
                tocWidget.style.top = '';
                tocWidget.style.width = '';
            }
        }

        window.addEventListener('scroll', handleStickyTocWidget, { passive: true });
        window.addEventListener('resize', handleStickyTocWidget);
        handleStickyTocWidget();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initBlogDetail);
    } else {
        initBlogDetail();
    }
})();
