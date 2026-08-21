/**
 * FT POSP SURE PAGE CONTROLLER (posp.js)
 * FondosTech Insurtech Infrastructure Platform
 */
document.addEventListener('DOMContentLoaded', () => {
    // Initialize Animated Counters
    initPospCounters();
});

/**
 * Animated Number Counter for POSP Page Stats
 */
function initPospCounters() {
    const counterElements = document.querySelectorAll('.counter');
    if (!counterElements.length) return;

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.25
    };

    const counterObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const endValue = parseInt(target.getAttribute('data-target'), 10) || 0;
                const suffix = target.getAttribute('data-suffix') || '';
                const duration = 2000;
                const startTime = performance.now();

                function updateCount(currentTime) {
                    const elapsedTime = currentTime - startTime;
                    const progress = Math.min(elapsedTime / duration, 1);
                    const easeOutProgress = 1 - Math.pow(1 - progress, 3);
                    const currentCount = Math.floor(easeOutProgress * endValue);

                    target.textContent = currentCount.toLocaleString('en-IN') + suffix;

                    if (progress < 1) {
                        requestAnimationFrame(updateCount);
                    } else {
                        target.textContent = endValue.toLocaleString('en-IN') + suffix;
                    }
                }

                requestAnimationFrame(updateCount);
                observer.unobserve(target);
            }
        });
    }, observerOptions);

    counterElements.forEach(el => counterObserver.observe(el));
}
