/**
 * FONDOS TECH — 404 Error Page Interactive Controller (404.js)
 */

document.addEventListener('DOMContentLoaded', function () {

    // -------------------------------------------------------------
    // 1. History Back Navigation Button
    // -------------------------------------------------------------
    const btnBackHistory = document.getElementById('btnBackHistory');
    if (btnBackHistory) {
        btnBackHistory.addEventListener('click', function () {
            if (window.history.length > 1) {
                window.history.back();
            } else {
                window.location.href = 'index.php';
            }
        });
    }

    // -------------------------------------------------------------
    // 2. Real-time Cards Search & Filter
    // -------------------------------------------------------------
    const searchInput = document.getElementById('ft404SearchInput');
    const searchSubmit = document.getElementById('btn404SearchSubmit');
    const destinationWrappers = document.querySelectorAll('.destination-card-wrapper');
    const noResultsBox = document.getElementById('noResultsBox');
    const btnResetSearch = document.getElementById('btnResetSearch');

    function filterDestinations() {
        if (!searchInput) return;
        const query = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;

        destinationWrappers.forEach(wrapper => {
            const keywords = wrapper.getAttribute('data-keywords') || '';
            const title = wrapper.querySelector('.card-title') ? wrapper.querySelector('.card-title').textContent.toLowerCase() : '';
            const desc = wrapper.querySelector('.card-desc') ? wrapper.querySelector('.card-desc').textContent.toLowerCase() : '';

            if (query === '' || keywords.includes(query) || title.includes(query) || desc.includes(query)) {
                wrapper.classList.remove('d-none');
                visibleCount++;
            } else {
                wrapper.classList.add('d-none');
            }
        });

        if (noResultsBox) {
            if (visibleCount === 0) {
                noResultsBox.classList.remove('d-none');
            } else {
                noResultsBox.classList.add('d-none');
            }
        }
    }

    if (searchInput) {
        searchInput.addEventListener('input', filterDestinations);
        searchInput.addEventListener('keyup', function (e) {
            if (e.key === 'Enter') {
                filterDestinations();
            }
        });
    }

    if (searchSubmit) {
        searchSubmit.addEventListener('click', filterDestinations);
    }

    if (btnResetSearch && searchInput) {
        btnResetSearch.addEventListener('click', function () {
            searchInput.value = '';
            filterDestinations();
            searchInput.focus();
        });
    }

    // -------------------------------------------------------------
    // 3. Copy Wrong URL / Report Broken Link Action
    // -------------------------------------------------------------
    const btnReportBrokenLink = document.getElementById('btnReportBrokenLink');
    if (btnReportBrokenLink) {
        btnReportBrokenLink.addEventListener('click', function () {
            const currentUrl = window.location.href;
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(currentUrl).then(() => {
                    if (typeof Swal !== 'undefined') {
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            title: 'URL copied to clipboard!',
                            text: 'You can now share or paste this path.',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        });
                    } else {
                        alert('URL copied to clipboard: ' + currentUrl);
                    }
                }).catch(() => {
                    alert('Current URL: ' + currentUrl);
                });
            } else {
                alert('Current URL: ' + currentUrl);
            }
        });
    }

});
