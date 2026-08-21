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
    // 2. Copy Wrong URL / Report Broken Link Action
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
