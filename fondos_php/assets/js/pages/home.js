/**
 * FONDOS TECH — Homepage JavaScript (home.js)
 *
 * Features:
 * 1. Animated stat counters (IntersectionObserver)
 * 2. Auto-switching product tabs
 * 3. Parallax scroll effect
 * 4. Lines of Business vertical slider touch support
 */
(function () {
    'use strict';

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* =============================================
       0. HERO TYPEWRITER ANIMATION (Optalitix Style)
       ============================================= */
    function initHeroTypewriter() {
        const textEl = document.getElementById('heroTypewriter');
        if (!textEl) return;

        const phrases = [
            'Run with Precision.',
            'Scale with Ease.',
            'Automate with AI.',
        ];

        let phraseIdx = 0;
        let charIdx = phrases[0].length;
        let isDeleting = true;        // Start by deleting phrase 0 after initial display pause
        const typeSpeed = 60;        // Typing speed per character (ms)
        const deleteSpeed = 45;      // Deleting speed per character (ms)
        const delayAfterType = 2200;  // Pause after typing full phrase (ms)
        const delayAfterDelete = 350; // Pause after deleting before next phrase (ms)
        const initialPause = 1800;    // Pause before first phrase starts erasing

        function step() {
            const currentPhrase = phrases[phraseIdx];

            if (isDeleting) {
                if (charIdx > 0) {
                    charIdx--;
                    textEl.textContent = currentPhrase.substring(0, charIdx);
                }
            } else {
                if (charIdx < currentPhrase.length) {
                    charIdx++;
                    textEl.textContent = currentPhrase.substring(0, charIdx);
                }
            }

            let nextDelay = isDeleting ? deleteSpeed : typeSpeed;

            if (!isDeleting && charIdx === currentPhrase.length) {
                nextDelay = delayAfterType;
                isDeleting = true;
            } else if (isDeleting && charIdx === 0) {
                isDeleting = false;
                phraseIdx = (phraseIdx + 1) % phrases.length;
                nextDelay = delayAfterDelete;
            }

            setTimeout(step, nextDelay);
        }

        // Start animation cycle after initial pause
        setTimeout(step, initialPause);
    }

    /* =============================================
       1. STAT COUNTER ANIMATION
       ============================================= */
    function initCounters() {
        const counters = document.querySelectorAll('[data-count]');
        if (!counters.length) return;

        function animateCounter(el) {
            const target = parseInt(el.getAttribute('data-count'), 10);
            const suffix = el.getAttribute('data-suffix') || '';
            const duration = prefersReducedMotion ? 0 : 2000;

            if (duration === 0) {
                el.textContent = target + suffix;
                return;
            }

            const startTime = performance.now();
            const easeOutQuart = function (t) {
                return 1 - Math.pow(1 - t, 4);
            };

            function update(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const easedProgress = easeOutQuart(progress);
                const currentVal = Math.round(easedProgress * target);
                el.textContent = currentVal + suffix;

                if (progress < 1) {
                    requestAnimationFrame(update);
                }
            }

            requestAnimationFrame(update);
        }

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        counters.forEach(function (el) {
            observer.observe(el);
        });
    }    /* =============================================
       2. STACKED CARD DECK CONTROLLER (Sticky Scroll Storytelling)
       ============================================= */
    function initPlatformDeck() {
        const wrapper = document.getElementById('platform-sticky-wrapper');
        const deckContainer = document.getElementById('platform-card-deck');
        const filterContainer = document.getElementById('platform-deck-filters');
        if (!wrapper || !deckContainer || !filterContainer) return;

        const cards = Array.from(deckContainer.querySelectorAll('.platform-deck-card'));
        const filterBtns = Array.from(filterContainer.querySelectorAll('.platform-filter-btn'));
        if (!cards.length) return;

        let activeIndex = -1;
        let isClicking = false;
        let clickTimeout = null;

        const customDropdownItems = document.querySelectorAll('.platform-custom-item');
        const selectedLabel = document.getElementById('dropdownSelectedLabel');
        const selectedIcon = document.getElementById('dropdownSelectedIcon');

        function updateDeck(targetIdx) {
            if (targetIdx < 0) targetIdx = 0;
            if (targetIdx >= cards.length) targetIdx = cards.length - 1;
            if (targetIdx === activeIndex) return;

            activeIndex = targetIdx;

            cards.forEach(function (card, idx) {
                card.classList.remove('pos-active', 'pos-next-1', 'pos-next-2', 'pos-next-3', 'pos-prev');
                if (idx < activeIndex) {
                    card.classList.add('pos-prev');
                } else if (idx === activeIndex) {
                    card.classList.add('pos-active');
                } else {
                    var diff = idx - activeIndex;
                    if (diff === 1) card.classList.add('pos-next-1');
                    else if (diff === 2) card.classList.add('pos-next-2');
                    else card.classList.add('pos-next-3');
                }
            });

            filterBtns.forEach(function (btn, idx) {
                btn.classList.toggle('active', idx === activeIndex);
            });

            // Update Custom Dropdown UI
            customDropdownItems.forEach(function (item) {
                const idx = parseInt(item.getAttribute('data-target'), 10);
                const isSelected = (idx === activeIndex);
                item.classList.toggle('active', isSelected);
                if (isSelected && selectedLabel && selectedIcon) {
                    selectedLabel.textContent = item.getAttribute('data-label');
                    selectedIcon.src = item.getAttribute('data-icon');
                }
            });
        }

        customDropdownItems.forEach(function (item) {
            item.addEventListener('click', function () {
                const targetIdx = parseInt(this.getAttribute('data-target'), 10);
                updateDeck(targetIdx);

                // Auto-close Bootstrap dropdown menu
                const dropdownBtn = document.getElementById('platformFilterDropdownBtn');
                if (dropdownBtn) {
                    if (window.bootstrap && window.bootstrap.Dropdown) {
                        const bsDropdown = window.bootstrap.Dropdown.getInstance(dropdownBtn) || new window.bootstrap.Dropdown(dropdownBtn);
                        if (bsDropdown) bsDropdown.hide();
                    }
                    dropdownBtn.classList.remove('show');
                    dropdownBtn.setAttribute('aria-expanded', 'false');
                    const menu = dropdownBtn.nextElementSibling;
                    if (menu) menu.classList.remove('show');
                }
            });
        });

        // Manual filter button clicks on desktop
        filterBtns.forEach(function (btn, idx) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                updateDeck(idx);
            });
        });

        // Clicking stacked cards directly rotates deck
        cards.forEach(function (card, idx) {
            card.addEventListener('click', function (e) {
                if (e.target.closest('a')) return;
                updateDeck(idx);
            });
        });

        // Initialize Card 0 (Insurance)
        updateDeck(0);
    }

    /* =============================================
       3. AUTO-SWITCHING PRODUCT TABS
       ============================================= */
    function initProductTabs() {
        const tabContainer = document.getElementById('platform-tabs');
        if (!tabContainer) return;

        const tabButtons = tabContainer.querySelectorAll('.platform-tab-btn');
        const tabPanes = document.querySelectorAll('.platform-tab-content');
        if (!tabButtons.length || !tabPanes.length) return;

        let autoSwitchInterval = null;
        let resumeTimeout = null;
        const AUTO_SWITCH_DELAY = 5000;
        const RESUME_DELAY = 8000;
        let currentIndex = 0;
        let userInteracted = false;

        function activateTab(index) {
            tabButtons.forEach(function (btn, i) {
                btn.classList.toggle('active', i === index);
            });
            tabPanes.forEach(function (pane, i) {
                pane.classList.toggle('active', i === index);
            });
            currentIndex = index;
        }

        function startAutoSwitch() {
            if (prefersReducedMotion) return;
            stopAutoSwitch();
            autoSwitchInterval = setInterval(function () {
                var nextIndex = (currentIndex + 1) % tabButtons.length;
                activateTab(nextIndex);
            }, AUTO_SWITCH_DELAY);
        }

        function stopAutoSwitch() {
            if (autoSwitchInterval) {
                clearInterval(autoSwitchInterval);
                autoSwitchInterval = null;
            }
        }

        function scheduleResume() {
            clearTimeout(resumeTimeout);
            resumeTimeout = setTimeout(function () {
                userInteracted = false;
                startAutoSwitch();
            }, RESUME_DELAY);
        }

        // Tab click handling
        tabButtons.forEach(function (btn, index) {
            btn.addEventListener('click', function () {
                userInteracted = true;
                stopAutoSwitch();
                activateTab(index);
                scheduleResume();
            });
        });

        // Pause on hover
        tabContainer.addEventListener('mouseenter', function () {
            stopAutoSwitch();
        });

        tabContainer.addEventListener('mouseleave', function () {
            if (!userInteracted) {
                startAutoSwitch();
            } else {
                scheduleResume();
            }
        });

        // Also pause on the tab content area hover
        var tabContentArea = document.getElementById('platform-tab-contents');
        if (tabContentArea) {
            tabContentArea.addEventListener('mouseenter', function () {
                stopAutoSwitch();
            });
            tabContentArea.addEventListener('mouseleave', function () {
                if (!userInteracted) {
                    startAutoSwitch();
                } else {
                    scheduleResume();
                }
            });
        }

        // Activate first tab and start
        activateTab(0);
        startAutoSwitch();
    }

    /* =============================================
       3. PARALLAX SCROLL EFFECT
       ============================================= */
    function initParallax() {
        if (prefersReducedMotion) return;

        var parallaxBg = document.querySelector('.claims-parallax-bg');
        if (!parallaxBg) return;

        var section = parallaxBg.closest('.claims-section');
        if (!section) return;

        var ticking = false;

        function updateParallax() {
            var rect = section.getBoundingClientRect();
            var viewHeight = window.innerHeight;

            // Only apply parallax when section is in view
            if (rect.bottom > 0 && rect.top < viewHeight) {
                var scrollProgress = (viewHeight - rect.top) / (viewHeight + rect.height);
                var offset = (scrollProgress - 0.5) * 80; // max 40px movement
                parallaxBg.style.transform = 'translateY(' + offset + 'px)';
            }
            ticking = false;
        }

        window.addEventListener('scroll', function () {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }, { passive: true });
    }

    /* =============================================
       4. LINES OF BUSINESS TOUCH SUPPORT
       ============================================= */
    function initLobSlider() {
        var sliderArea = document.querySelector('.lob-slider-area');
        if (!sliderArea) return;

        // Touch pause/resume for mobile
        var tracks = sliderArea.querySelectorAll('.lob-slider-track');
        var isPaused = false;

        sliderArea.addEventListener('touchstart', function () {
            if (!isPaused) {
                tracks.forEach(function (track) {
                    track.style.animationPlayState = 'paused';
                });
                isPaused = true;
            } else {
                tracks.forEach(function (track) {
                    track.style.animationPlayState = 'running';
                });
                isPaused = false;
            }
        }, { passive: true });

        // Ensure seamless Coverfox-style loop by duplicating cards and setting exact pixel scroll distance
        var columns = sliderArea.querySelectorAll('.lob-slider-column');
        columns.forEach(function (col) {
            var track = col.querySelector('.lob-slider-track');
            if (!track) return;
            var originalContent = track.innerHTML;
            track.innerHTML = originalContent + originalContent;

            // Calculate exact pixel height of single set for zero-jump seamless loop
            function updateScrollDist() {
                var singleHeight = track.scrollHeight / 2;
                if (singleHeight > 0) {
                    track.style.setProperty('--scroll-dist', '-' + singleHeight + 'px');
                }
            }

            updateScrollDist();
            setTimeout(updateScrollDist, 300); // Recalculate after image asset load
            window.addEventListener('resize', updateScrollDist);
        });
    }

    /* =============================================
       5. INSURER LOGOS MARQUEE (Infinite Scroll)
       ============================================= */
    function initIcMarquee() {
        var marquee = document.querySelector('.ic-logos-marquee');
        if (!marquee) return;
        var track = marquee.querySelector('.ic-logos-track');
        if (!track) return;

        // Duplicate track content for seamless infinite loop
        track.innerHTML = track.innerHTML + track.innerHTML;
    }

    /* =============================================
       6. INDUSTRIES VIEW ALL TOGGLE
       ============================================= */
    function initIndustriesToggle() {
        var toggleBtn = document.getElementById('toggle-industries-btn');
        if (!toggleBtn) return;

        var extraCards = document.querySelectorAll('.industry-extra-card');
        var btnText = toggleBtn.querySelector('.btn-text');
        var btnIcon = toggleBtn.querySelector('.btn-icon');
        var isExpanded = false;

        toggleBtn.addEventListener('click', function () {
            isExpanded = !isExpanded;

            extraCards.forEach(function (card) {
                if (isExpanded) {
                    card.classList.remove('d-none');
                    card.style.animation = 'fadeInTab 0.4s ease forwards';
                } else {
                    card.classList.add('d-none');
                }
            });

            if (btnText) {
                btnText.textContent = isExpanded ? 'Show Less' : 'View All';
            }

            if (btnIcon) {
                btnIcon.style.transform = isExpanded ? 'rotate(90deg)' : 'rotate(0deg)';
            }
        });
    }

    /* =============================================
       WORKFLOW TOGGLE (Without FT vs With FT)
       ============================================= */
    function initWorkflowTabs() {
        const togglePills = document.getElementById('workflow-toggle-pills');
        const contents = document.querySelectorAll('.workflow-tab-content');
        if (!togglePills) return;

        // Set initial visibility state
        contents.forEach(function (content) {
            if (content.classList.contains('active')) {
                content.style.display = 'block';
            } else {
                content.style.display = 'none';
            }
        });

        // Global click listener delegation for workflow tabs
        document.addEventListener('click', function (e) {
            const btn = e.target.closest('.workflow-tab-btn');
            if (!btn) return;
            e.preventDefault();

            const workflowVal = btn.getAttribute('data-workflow');
            if (!workflowVal) return;

            const targetId = 'workflow-' + workflowVal;
            const btns = togglePills.querySelectorAll('.workflow-tab-btn');

            btns.forEach(function (b) {
                b.classList.remove('active');
            });
            btn.classList.add('active');

            contents.forEach(function (content) {
                if (content.id === targetId) {
                    content.classList.add('active');
                    content.style.display = 'block';
                } else {
                    content.classList.remove('active');
                    content.style.display = 'none';
                }
            });
        });
    }

    /* =============================================
       TESTIMONIALS INFINITE LOOP SLIDER
       ============================================= */
    /* =============================================
       TESTIMONIALS INFINITE LOOP SLIDER
       ============================================= */
    function initTestimonialsSlider() {
        const track = document.getElementById('testimonials-track');
        if (!track) return;

        const prevBtn = document.getElementById('testimonial-prev');
        const nextBtn = document.getElementById('testimonial-next');

        const originalCards = Array.from(track.children);
        if (!originalCards.length) return;

        // Clone cards for seamless infinite loop
        originalCards.forEach(function (card) {
            const clone = card.cloneNode(true);
            track.appendChild(clone);
        });

        let currentIndex = 0;
        const gap = 24;
        const totalOriginals = originalCards.length;
        let autoTimer = null;

        function getCardWidth() {
            return track.children[0].offsetWidth + gap;
        }

        function slideTo(index, animated) {
            if (animated !== false) {
                track.style.transition = 'transform 0.35s cubic-bezier(0.2, 0.8, 0.2, 1)';
            } else {
                track.style.transition = 'none';
            }
            const cardWidth = getCardWidth();
            track.style.transform = 'translateX(-' + (index * cardWidth) + 'px)';
            currentIndex = index;
        }

        track.addEventListener('transitionend', function () {
            // Seamless loop boundary resets
            if (currentIndex >= totalOriginals) {
                slideTo(currentIndex % totalOriginals, false);
            } else if (currentIndex < 0) {
                const rem = currentIndex % totalOriginals;
                slideTo(rem === 0 ? 0 : totalOriginals + rem, false);
            }
        });

        function nextSlide() {
            if (currentIndex >= totalOriginals * 2 - 1) {
                slideTo(totalOriginals - 1, false);
                void track.offsetWidth;
            }
            slideTo(currentIndex + 1, true);
        }

        function prevSlide() {
            if (currentIndex <= 0) {
                slideTo(totalOriginals, false);
                void track.offsetWidth;
            }
            slideTo(currentIndex - 1, true);
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function (e) {
                e.preventDefault();
                resetAutoTimer();
                nextSlide();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function (e) {
                e.preventDefault();
                resetAutoTimer();
                prevSlide();
            });
        }

        function startAutoTimer() {
            stopAutoTimer();
            autoTimer = setInterval(nextSlide, 4000);
        }

        function stopAutoTimer() {
            if (autoTimer) {
                clearInterval(autoTimer);
                autoTimer = null;
            }
        }

        function resetAutoTimer() {
            stopAutoTimer();
            startAutoTimer();
        }

        startAutoTimer();

        track.addEventListener('mouseenter', stopAutoTimer);
        track.addEventListener('mouseleave', startAutoTimer);

        // Swipe & Mouse Drag support
        let startX = 0;
        let isDragging = false;

        track.style.cursor = 'grab';

        // Touch Swipe
        track.addEventListener('touchstart', function (e) {
            stopAutoTimer();
            startX = e.touches[0].clientX;
            isDragging = true;
        }, { passive: true });

        track.addEventListener('touchend', function (e) {
            if (!isDragging) return;
            isDragging = false;
            const endX = e.changedTouches[0] ? e.changedTouches[0].clientX : startX;
            const diff = startX - endX;
            if (diff > 40) nextSlide();
            else if (diff < -40) prevSlide();
            startAutoTimer();
        });

        // Mouse Drag
        let mouseStartX = 0;
        let isMouseDown = false;

        track.addEventListener('mousedown', function (e) {
            stopAutoTimer();
            isMouseDown = true;
            mouseStartX = e.clientX;
            track.style.cursor = 'grabbing';
        });

        window.addEventListener('mouseup', function (e) {
            if (!isMouseDown) return;
            isMouseDown = false;
            track.style.cursor = 'grab';
            const diff = mouseStartX - e.clientX;
            if (diff > 40) nextSlide();
            else if (diff < -40) prevSlide();
            startAutoTimer();
        });
    }

    /* =============================================
       9. AOS (ANIMATE ON SCROLL) ENGINE
       ============================================= */
    function initAOS() {
        if (typeof AOS === 'undefined') return;
        if (prefersReducedMotion) return;

        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100
        });
    }

    /* =============================================
       10. FAQ STICKY HEADER CONTROLLER (GPU Smooth & Asset Load Recalibration)
       ============================================= */
    function initFaqSticky() {
        const faqSection = document.getElementById('faq');
        const leftContent = document.querySelector('.faq-left-content');
        const accordion = document.getElementById('faqAccordion');
        if (!faqSection || !leftContent || !accordion) return;

        let ticking = false;

        function updateFaqSticky() {
            if (window.innerWidth < 992) {
                leftContent.style.transform = 'none';
                ticking = false;
                return;
            }

            const headerEl = document.getElementById('ft-header');
            const topOffset = (headerEl ? headerEl.offsetHeight : 80) + 24;

            const sectionRect = faqSection.getBoundingClientRect();
            const leftHeight = leftContent.offsetHeight;
            const accordionHeight = accordion.offsetHeight;
            const maxTranslate = Math.max(0, accordionHeight - leftHeight);

            let translate = 0;
            if (sectionRect.top < topOffset) {
                translate = topOffset - sectionRect.top;
                if (translate > maxTranslate) translate = maxTranslate;
            }

            leftContent.style.transform = 'translate3d(0, ' + translate + 'px, 0)';
            ticking = false;
        }

        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateFaqSticky);
                ticking = true;
            }
        }

        window.addEventListener('scroll', requestTick, { passive: true });
        window.addEventListener('resize', updateFaqSticky);
        window.addEventListener('load', updateFaqSticky);

        // Recalculate after AOS initialization finishes
        setTimeout(updateFaqSticky, 300);
        setTimeout(updateFaqSticky, 1000);

        updateFaqSticky();
    }

    /* =============================================
       11. FLOATING FEATURE PILLS VIEWPORT OBSERVER
       ============================================= */
    function initPillViewportObserver() {
        const animatedContainers = document.querySelectorAll('.floating-feature-pills, .d2c-3image-container, .lending-4image-container, .embedded-5image-container, .claims-3image-container, .payout-5image-container, .eb-showcase-container, .compliance-4image-container, .recon-5image-container');
        if (!animatedContainers.length) return;

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -40px 0px'
        });

        animatedContainers.forEach(function (el) {
            observer.observe(el);
        });
    }

    /* =============================================
       INIT ALL
       ============================================= */
    function initAll() {
        initHeroTypewriter();
        initCounters();
        initPlatformDeck();
        initWorkflowTabs();
        initParallax();
        initLobSlider();
        initIcMarquee();
        initIndustriesToggle();
        initTestimonialsSlider();
        initAOS();
        initFaqSticky();
        initPillViewportObserver();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAll);
    } else {
        initAll();
    }

})();
