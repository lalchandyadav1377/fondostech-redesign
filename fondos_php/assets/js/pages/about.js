/* =============================================
   FONDOSTECH ABOUT US PAGE JS — MISSION TABS, COUNTERS, SCROLL TIMELINE & TEAM SLIDER
   ============================================= */

(function () {
    'use strict';

    function initAboutPage() {
        // 1. Mission, Vision, Values Tab Switching
        const tabBtns = document.querySelectorAll('.mission-tab-btn');
        const tabPanes = document.querySelectorAll('.mission-tab-pane');

        if (tabBtns.length && tabPanes.length) {
            tabBtns.forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetTab = this.getAttribute('data-tab');

                    tabBtns.forEach(b => b.classList.remove('active'));
                    tabPanes.forEach(p => p.classList.remove('active'));

                    this.classList.add('active');
                    const activePane = document.getElementById('tab-' + targetTab);
                    if (activePane) {
                        activePane.classList.add('active');
                    }
                });
            });
        }

        // 2. Animated Stats Counters
        function animateCounter(el) {
            const target = parseInt(el.getAttribute('data-target'), 10) || 0;
            const prefix = el.getAttribute('data-prefix') || '';
            const suffix = el.getAttribute('data-suffix') || '';
            const duration = 1600; // ms
            const stepTime = 20;
            const steps = duration / stepTime;
            const increment = target / steps;
            let current = 0;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                el.textContent = prefix + Math.floor(current) + suffix;
            }, stepTime);
        }

        const counters = document.querySelectorAll('.counter[data-target]');

        function checkCounters() {
            if (!counters.length) return;
            const triggerBottom = window.innerHeight * 0.9;

            counters.forEach(counter => {
                const rect = counter.getBoundingClientRect();
                if (rect.top < triggerBottom && !counter.classList.contains('counted')) {
                    counter.classList.add('counted');
                    animateCounter(counter);
                }
            });
        }

        // 3. Dynamic Vertical Timeline Scroll Progress Line & Active Dots
        const timelineWrap = document.getElementById('timelineWrap');
        const progressBar = document.getElementById('timelineProgress');
        const timelineItems = document.querySelectorAll('.timeline-item');

        function updateTimelineProgress() {
            if (!timelineWrap || !progressBar) return;

            const rect = timelineWrap.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            const triggerPoint = windowHeight * 0.65; // Threshold in viewport

            const totalHeight = rect.height;
            const currentScroll = triggerPoint - rect.top;

            let percentage = (currentScroll / totalHeight) * 100;
            percentage = Math.max(0, Math.min(100, percentage));

            progressBar.style.height = percentage + '%';

            // Highlight dots and cards as scroll progress reaches them
            timelineItems.forEach(item => {
                const itemRect = item.getBoundingClientRect();
                if (itemRect.top < triggerPoint + 30) {
                    item.classList.add('active-step');
                } else {
                    item.classList.remove('active-step');
                }
            });
        }

        window.addEventListener('scroll', function () {
            checkCounters();
            updateTimelineProgress();
        }, { passive: true });

        checkCounters();
        updateTimelineProgress();

        // 4. Seamless Infinite Team Slider Loop
        const track = document.getElementById('teamSliderTrack');
        const prevBtn = document.querySelector('.team-prev');
        const nextBtn = document.querySelector('.team-next');

        if (track) {
            let slides = Array.from(track.children);
            if (slides.length > 0) {
                // Dynamically clone slides for seamless infinite loop
                slides.forEach(slide => {
                    const clone = slide.cloneNode(true);
                    track.appendChild(clone);
                });

                let currentIndex = 0;
                let autoSlideTimer = null;
                const totalOriginal = slides.length;

                function slideTo(index, animate = true) {
                    const allSlides = track.querySelectorAll('.team-slide-card');
                    if (!allSlides.length) return;
                    const cardWidth = allSlides[0].getBoundingClientRect().width;
                    const gap = 24; // 1.5rem
                    const moveAmount = (cardWidth + gap) * index;

                    if (!animate) {
                        track.style.transition = 'none';
                    } else {
                        track.style.transition = 'transform 0.5s ease-in-out';
                    }

                    track.style.transform = `translateX(-${moveAmount}px)`;
                }

                function nextSlide() {
                    currentIndex++;
                    slideTo(currentIndex, true);

                    if (currentIndex >= totalOriginal) {
                        setTimeout(() => {
                            currentIndex = 0;
                            slideTo(currentIndex, false);
                        }, 500);
                    }
                }

                function prevSlide() {
                    if (currentIndex === 0) {
                        currentIndex = totalOriginal;
                        slideTo(currentIndex, false);
                        setTimeout(() => {
                            currentIndex--;
                            slideTo(currentIndex, true);
                        }, 20);
                    } else {
                        currentIndex--;
                        slideTo(currentIndex, true);
                    }
                }

                if (nextBtn) {
                    nextBtn.addEventListener('click', function (e) {
                        e.preventDefault();
                        nextSlide();
                        resetTimer();
                    });
                }

                if (prevBtn) {
                    prevBtn.addEventListener('click', function (e) {
                        e.preventDefault();
                        prevSlide();
                        resetTimer();
                    });
                }

                function startTimer() {
                    autoSlideTimer = setInterval(nextSlide, 3000);
                }

                function resetTimer() {
                    if (autoSlideTimer) clearInterval(autoSlideTimer);
                    startTimer();
                }

                track.addEventListener('mouseenter', function () {
                    if (autoSlideTimer) clearInterval(autoSlideTimer);
                });

                track.addEventListener('mouseleave', function () {
                    startTimer();
                });

                window.addEventListener('resize', function () {
                    slideTo(currentIndex, false);
                    updateTimelineProgress();
                });

                startTimer();
            }
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAboutPage);
    } else {
        initAboutPage();
    }
})();
