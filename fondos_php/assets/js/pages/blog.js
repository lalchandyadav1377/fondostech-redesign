/* =============================================
   FONDOSTECH BLOG INTERACTIVE JS — FILTER, SEARCH & ANIMATIONS
   ============================================= */

(function () {
    'use strict';

    function initBlogSystem() {
        const searchInput = document.getElementById('blogSearchInput');
        const filterBtns = document.querySelectorAll('.blog-cat-btn');
        const blogCards = document.querySelectorAll('.blog-card-item');
        const featuredSection = document.getElementById('featured-post');
        const featuredCard = document.querySelector('.featured-card');
        const pageBtns = document.querySelectorAll('.page-link-custom[data-page]');
        const nextPageBtn = document.getElementById('nextPageBtn');

        let activeCategory = 'all';
        let searchQuery = '';
        let currentPage = 1;
        const pageSize = 3;

        function applyFiltersAndPagination() {
            // 1. Filter cards based on Category and Search Query
            const matchingCards = [];

            blogCards.forEach(card => {
                const cardCat = card.getAttribute('data-category');
                const titleEl = card.querySelector('.blog-card-title');
                const excerptEl = card.querySelector('.blog-card-excerpt');
                const labelEl = card.querySelector('.blog-card-label');

                const title = titleEl ? titleEl.textContent.toLowerCase() : '';
                const excerpt = excerptEl ? excerptEl.textContent.toLowerCase() : '';
                const label = labelEl ? labelEl.textContent.toLowerCase() : '';

                const matchesCategory = (activeCategory === 'all' || cardCat === activeCategory);
                const matchesSearch = !searchQuery || title.includes(searchQuery) || excerpt.includes(searchQuery) || label.includes(searchQuery);

                if (matchesCategory && matchesSearch) {
                    matchingCards.push(card);
                } else {
                    card.style.display = 'none';
                    card.classList.remove('card-animated');
                }
            });

            // 2. Featured Card Visibility & Animation
            if (featuredCard) {
                const featuredTitle = featuredCard.querySelector('.featured-title')?.textContent.toLowerCase() || '';
                const featuredExcerpt = featuredCard.querySelector('.featured-excerpt')?.textContent.toLowerCase() || '';
                const matchesCategory = (activeCategory === 'all' || activeCategory === 'ai');
                const matchesSearch = !searchQuery || featuredTitle.includes(searchQuery) || featuredExcerpt.includes(searchQuery);

                if (matchesCategory && matchesSearch && currentPage === 1) {
                    if (featuredSection) featuredSection.style.display = 'block';
                    featuredCard.style.display = 'block';
                    featuredCard.style.opacity = '1';
                } else {
                    if (featuredSection) featuredSection.style.display = 'none';
                }
            }

            // 3. Paginate & Apply Staggered Animation to matching cards
            const totalMatches = matchingCards.length;
            const totalPages = Math.max(1, Math.ceil(totalMatches / pageSize));

            if (currentPage > totalPages) {
                currentPage = totalPages;
            }

            const startIndex = (currentPage - 1) * pageSize;
            const endIndex = startIndex + pageSize;

            let visibleIndex = 0;
            matchingCards.forEach((card, index) => {
                if (index >= startIndex && index < endIndex) {
                    card.style.display = 'block';
                    card.style.opacity = '1';
                    card.style.visibility = 'visible';
                    card.style.animationDelay = (visibleIndex * 0.08) + 's';
                    card.classList.remove('card-animated');
                    // Force reflow to restart CSS animation
                    void card.offsetWidth;
                    card.classList.add('card-animated');
                    visibleIndex++;
                } else {
                    card.style.display = 'none';
                    card.classList.remove('card-animated');
                }
            });

            // Refresh AOS animations if AOS is loaded
            if (typeof window.AOS !== 'undefined' && typeof window.AOS.refresh === 'function') {
                window.AOS.refresh();
            }

            // 4. Update Pagination Buttons UI
            pageBtns.forEach(btn => {
                const pageNum = parseInt(btn.getAttribute('data-page'), 10);
                if (pageNum === currentPage) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }

                if (pageNum > totalPages) {
                    btn.style.display = 'none';
                } else {
                    btn.style.display = 'inline-flex';
                }
            });

            if (nextPageBtn) {
                if (currentPage >= totalPages) {
                    nextPageBtn.style.opacity = '0.4';
                    nextPageBtn.style.pointerEvents = 'none';
                } else {
                    nextPageBtn.style.opacity = '1';
                    nextPageBtn.style.pointerEvents = 'auto';
                }
            }

            // 5. No Results State Feedback
            let noResultsEl = document.getElementById('noBlogResultsMessage');
            const gridContainer = document.getElementById('blogGridContainer');

            if (totalMatches === 0) {
                if (!noResultsEl && gridContainer) {
                    noResultsEl = document.createElement('div');
                    noResultsEl.id = 'noBlogResultsMessage';
                    noResultsEl.className = 'col-12 text-center py-5';
                    noResultsEl.innerHTML = `
                        <div class="p-5" style="background:#ffffff; border:1.5px solid #cee4fd; border-radius:1.75rem; max-width:640px; margin:0 auto; box-shadow:0 8px 30px rgba(0,0,0,0.04);">
                            <div style="width:60px; height:60px; border-radius:50%; background:#eff6ff; display:flex; align-items:center; justify-content:center; margin:0 auto 1.25rem; color:#086ad8;">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <circle cx="11" cy="11" r="8"/>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                                </svg>
                            </div>
                            <h4 style="font-weight:800; color:#0f172a; font-size:1.35rem; margin-bottom:0.5rem;">No articles found in this category</h4>
                            <p style="color:#64748b; font-size:0.95rem; margin:0;">Try selecting <strong>All Posts</strong> or searching for a different keyword.</p>
                        </div>
                    `;
                    gridContainer.appendChild(noResultsEl);
                } else if (noResultsEl) {
                    noResultsEl.style.display = 'block';
                }
            } else if (noResultsEl) {
                noResultsEl.style.display = 'none';
            }
        }

        // Pagination Button Clicks (1, 2, 3)
        pageBtns.forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                const pageNum = parseInt(this.getAttribute('data-page'), 10);
                if (pageNum !== currentPage) {
                    currentPage = pageNum;
                    applyFiltersAndPagination();

                    const gridEl = document.getElementById('articles-grid');
                    if (gridEl) {
                        gridEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }
            });
        });

        // Next Page Button Click (>)
        if (nextPageBtn) {
            nextPageBtn.addEventListener('click', function (e) {
                e.preventDefault();
                currentPage++;
                applyFiltersAndPagination();

                const gridEl = document.getElementById('articles-grid');
                if (gridEl) {
                    gridEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        }

        // Category Filter Pill Clicks
        if (filterBtns.length) {
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    activeCategory = this.getAttribute('data-category') || 'all';
                    currentPage = 1;

                    filterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    applyFiltersAndPagination();
                });
            });
        }

        // Search Input Listeners
        if (searchInput) {
            ['input', 'keyup', 'change', 'search'].forEach(eventType => {
                searchInput.addEventListener(eventType, function () {
                    searchQuery = this.value.toLowerCase().trim();
                    currentPage = 1;
                    applyFiltersAndPagination();
                });
            });
        }

        // Initial trigger
        applyFiltersAndPagination();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initBlogSystem);
    } else {
        initBlogSystem();
    }
})();
