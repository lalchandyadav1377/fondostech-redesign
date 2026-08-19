(function () {
    function initContactValidation() {
        if (typeof jQuery === "undefined" || typeof $.fn.validate === "undefined") {
            return setTimeout(initContactValidation, 100);
        }

        const $form = $("#contactForm");
        if (!$form.length) return;

        $.validator.addMethod("phoneIN", function (value, element) {
            value = value.replace(/\s+/g, "");
            return this.optional(element) || /^(\+91[\-\s]?)?[6789]\d{9}$/.test(value);
        }, "Please enter a valid 10-digit phone number.");

        $.validator.addMethod("workEmailCheck", function (value, element) {
            return this.optional(element) ||
                /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value);
        }, "Please enter a valid work email address.");

        $form.validate({
            errorClass: "error-message text-danger",
            errorElement: "span",

            highlight: function (element) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },

            unhighlight: function (element) {
                $(element).removeClass("is-invalid").addClass("is-valid");
            },

            errorPlacement: function (error, element) {
                error.insertAfter(element);
            },

            rules: {
                fullName: {
                    required: true,
                    minlength: 2
                },
                companyName: {
                    required: true,
                    minlength: 2
                },
                workEmail: {
                    required: true,
                    workEmailCheck: true
                },
                phoneNum: {
                    required: true,
                    phoneIN: true
                },
                userMessage: {
                    required: true,
                    minlength: 10
                }
            },

            messages: {
                fullName: {
                    required: "Full Name is required.",
                    minlength: "Full Name must be at least 2 characters."
                },
                companyName: {
                    required: "Company name is required.",
                    minlength: "Company name must be at least 2 characters."
                },
                workEmail: {
                    required: "Work Email is required.",
                    workEmailCheck: "Please enter a valid work email address."
                },
                phoneNum: {
                    required: "Phone number is required.",
                    phoneIN: "Please enter a valid 10-digit phone number."
                },
                userMessage: {
                    required: "Message is required.",
                    minlength: "Message must be at least 10 characters long."
                }
            },

            submitHandler: function (form) {
                var userName = $("#fullName").val() || "there";

                if (typeof Swal !== "undefined") {
                    Swal.fire({
                        html: `
                            <div class="thankyou-modal-content">
                                <div class="thankyou-icon-wrapper">
                                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <h3 class="thankyou-title">Thank You, ${userName}!</h3>
                                <p class="thankyou-desc">Your message has been received by our enterprise insurance team.</p>
                                <div class="thankyou-info-box">
                                    <div class="thankyou-info-item">
                                        <span class="thankyou-info-icon">⚡</span>
                                        <span><strong>Fast Response:</strong> A dedicated domain expert will review your requirements and respond within 24 hours.</span>
                                    </div>
                                    <div class="thankyou-info-item">
                                        <span class="thankyou-info-icon">📧</span>
                                        <span><strong>Direct Support:</strong> Need urgent assistance? Reach out to <a href="mailto:business@fondostech.in" style="color:#086ad8;font-weight:600;">business@fondostech.in</a></span>
                                    </div>
                                </div>
                                <div class="thankyou-actions">
                                    <button type="button" class="btn-thankyou-primary" onclick="Swal.close()">Great, Thank You!</button>
                                </div>
                            </div>
                        `,
                        showConfirmButton: false,
                        customClass: {
                            popup: 'thankyou-popup'
                        }
                    });
                } else {
                    alert("Thank you! Your message has been sent successfully. We will get back to you within 24 hours.");
                }

                form.reset();
                $(form).find(".form-control").removeClass("is-valid is-invalid");
                return false;
            }
        });
    }

    function initNetworkNodeMap() {
        const mapContainer = document.getElementById('india-network-map');
        if (!mapContainer || typeof L === 'undefined') {
            return setTimeout(initNetworkNodeMap, 150);
        }

        // Office locations data (Strictly 4 Locations)
        const locations = {
            delhi: {
                name: 'New Delhi',
                jurisdiction: 'REGISTERED OFFICE & NORTHERN REGION',
                address: 'Plot No. 42, Barakhamba Road, Connaught Place, New Delhi - 110001',
                phone: '+91 11 4567 8900',
                email: 'delhi.office@fondostech.com',
                coords: [28.6289, 77.2206]
            },
            jaipur: {
                name: 'Jaipur',
                jurisdiction: 'DEVELOPMENT CENTRE OF EXCELLENCE',
                address: 'IT Park, EPIP, Sitapura Industrial Area, Jaipur, Rajasthan - 302022',
                phone: '+91 141 277 0900',
                email: 'jaipur.dev@fondostech.com',
                coords: [26.7818, 75.8288]
            },
            gurugram: {
                name: 'Gurugram',
                jurisdiction: 'CENTRE OF EXCELLENCE & NCR HUB',
                address: 'DLF Cyber City, Tower B, Phase 2, Gurugram, Haryana - 122002',
                phone: '+91 124 678 9012',
                email: 'gurugram.hub@fondostech.com',
                coords: [28.4949, 77.0894]
            },
            mumbai: {
                name: 'Mumbai',
                jurisdiction: 'SALES & SUPPORT HUB - WESTERN REGION',
                address: 'Bandra Kurla Complex, Bandra East, Mumbai, Maharashtra - 400051',
                phone: '+91 22 6123 4567',
                email: 'mumbai.sales@fondostech.com',
                coords: [19.0660, 72.8687]
            }
        };

        // Initialize Leaflet Map centered over India
        const map = L.map('india-network-map', {
            center: [22.5, 78.9],
            zoom: 5,
            zoomControl: true,
            scrollWheelZoom: false
        });

        // CartoDB Positron / Voyager Light Basemap (Matching UrbanTek clean vector style)
        L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://carto.com/">CARTO</a> &copy; OpenStreetMap',
            subdomains: 'abcd',
            maxZoom: 18
        }).addTo(map);

        const markers = {};

        // Custom HTML Marker Icon Generator
        function createCustomIcon(isActive) {
            return L.divIcon({
                className: 'custom-node-marker',
                html: `
                    <div class="node-pin-wrapper ${isActive ? 'active' : ''}">
                        ${isActive ? '<div class="node-pin-pulse"></div>' : ''}
                        <div class="node-pin-bubble"></div>
                    </div>
                `,
                iconSize: [38, 38],
                iconAnchor: [19, 38]
            });
        }

        // Add location markers
        Object.keys(locations).forEach(function (cityKey) {
            const loc = locations[cityKey];
            const marker = L.marker(loc.coords, {
                icon: createCustomIcon(cityKey === 'delhi')
            }).addTo(map);

            marker.on('click', function () {
                selectLocation(cityKey);
            });

            markers[cityKey] = marker;
        });

        // UI elements
        const nameEl = document.getElementById('node-city-name');
        const jurisdictionEl = document.getElementById('node-jurisdiction');
        const addressEl = document.getElementById('node-address');
        const phoneEl = document.getElementById('node-phone');
        const emailEl = document.getElementById('node-email');
        const pillBtns = document.querySelectorAll('.node-pill-btn');

        function selectLocation(cityKey) {
            const data = locations[cityKey];
            if (!data) return;

            // Update Text Details Card
            if (nameEl) nameEl.textContent = data.name;
            if (jurisdictionEl) jurisdictionEl.textContent = data.jurisdiction;
            if (addressEl) addressEl.textContent = data.address;
            if (phoneEl) phoneEl.textContent = data.phone;
            if (emailEl) emailEl.textContent = data.email;

            // Update Pill Buttons state
            pillBtns.forEach(function (btn) {
                btn.classList.toggle('active', btn.getAttribute('data-city') === cityKey);
            });

            // Update Marker Icons
            Object.keys(markers).forEach(function (key) {
                markers[key].setIcon(createCustomIcon(key === cityKey));
            });

            // Smooth Pan Map to Location
            map.flyTo(data.coords, 6, {
                duration: 1.2
            });
        }

        // Handle Pill Button Clicks
        pillBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                const cityKey = this.getAttribute('data-city');
                selectLocation(cityKey);
            });
        });
    }

    $(document).ready(function () {
        initContactValidation();
        initNetworkNodeMap();
    });
})();