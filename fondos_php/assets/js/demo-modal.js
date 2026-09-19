(function ($) {
    function openRequestDemoModal() {
        var modalEl = document.getElementById("requestDemoModal");
        if (!modalEl || typeof bootstrap === "undefined") return;
        bootstrap.Modal.getOrCreateInstance(modalEl).show();
    }

    function resetDemoForm($form) {
        if (!$form.length || !$form.data("validator")) return;
        $form.validate().resetForm();
        $form.find(".form-control").removeClass("is-valid is-invalid");
        $form.find("#demoCaptcha").val("");
        if (typeof window.ftResetCaptcha === "function") {
            window.ftResetCaptcha("demoRecaptcha");
        }
    }

    function initDemoValidation() {
        if (typeof $.fn.validate === "undefined") {
            return setTimeout(initDemoValidation, 100);
        }

        var $form = $("#requestDemoForm");
        if (!$form.length) return;

        $.validator.addMethod("demoLettersonly", function (value, element) {
            return this.optional(element) || /^[a-zA-Z\s.'-]+$/.test(value);
        }, "Please enter a valid name.");

        $.validator.addMethod("demoPhoneIN", function (value, element) {
            value = $.trim(value).replace(/\s+/g, "");
            return this.optional(element) || /^(\+91[\-\s]?)?[6-9]\d{9}$/.test(value);
        }, "Please enter a valid 10-digit phone number.");

        $.validator.addMethod("demoWorkEmail", function (value, element) {
            return this.optional(element) ||
                /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test($.trim(value));
        }, "Please enter a valid work email address.");

        $.validator.addMethod("demoCaptchaChecked", function (value) {
            if (typeof window.ftCaptchaSolved === "function" && window.ftCaptchaSolved("demoRecaptcha")) {
                return true;
            }
            return value === "1";
        }, "Please complete the captcha.");

        $form.validate({
            errorClass: "error-message text-danger",
            errorElement: "span",
            ignore: ":hidden:not(#demoCaptcha)",

            highlight: function (element) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },

            unhighlight: function (element) {
                $(element).removeClass("is-invalid").addClass("is-valid");
            },

            errorPlacement: function (error, element) {
                if (element.attr("id") === "demoCaptcha") {
                    error.appendTo(element.closest(".ft-recaptcha-wrap"));
                    return;
                }
                error.insertAfter(element);
            },

            onkeyup: function (element) {
                $(element).valid();
            },

            onfocusout: function (element) {
                $(element).valid();
            },

            rules: {
                demoFullName: {
                    required: true,
                    minlength: 2,
                    maxlength: 80,
                    demoLettersonly: true
                },
                demoCompanyName: {
                    required: true,
                    minlength: 2,
                    maxlength: 100
                },
                demoWorkEmail: {
                    required: true,
                    email: true,
                    demoWorkEmail: true
                },
                demoPhoneNum: {
                    required: true,
                    demoPhoneIN: true
                },
                demoMessage: {
                    required: true,
                    minlength: 10,
                    maxlength: 1000
                },
                demoCaptcha: {
                    required: true,
                    demoCaptchaChecked: true
                }
            },

            messages: {
                demoFullName: {
                    required: "Full Name is required.",
                    minlength: "Full Name must be at least 2 characters.",
                    maxlength: "Full Name cannot exceed 80 characters.",
                    demoLettersonly: "Please enter a valid name."
                },
                demoCompanyName: {
                    required: "Company name is required.",
                    minlength: "Company name must be at least 2 characters.",
                    maxlength: "Company name cannot exceed 100 characters."
                },
                demoWorkEmail: {
                    required: "Work Email is required.",
                    email: "Please enter a valid work email address.",
                    demoWorkEmail: "Please enter a valid work email address."
                },
                demoPhoneNum: {
                    required: "Phone number is required.",
                    demoPhoneIN: "Please enter a valid 10-digit phone number."
                },
                demoMessage: {
                    required: "Message is required.",
                    minlength: "Message must be at least 10 characters long.",
                    maxlength: "Message cannot exceed 1000 characters."
                },
                demoCaptcha: {
                    required: "Please complete the captcha.",
                    demoCaptchaChecked: "Please complete the captcha."
                }
            },

            submitHandler: function (form) {
                var userName = $.trim($("#demoFullName").val()) || "there";
                var modalEl = document.getElementById("requestDemoModal");

                if (modalEl && typeof bootstrap !== "undefined") {
                    var modalInstance = bootstrap.Modal.getInstance(modalEl);
                    if (modalInstance) {
                        modalInstance.hide();
                    }
                }

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
                                <p class="thankyou-desc">Your demo request has been received. Our team will reach out shortly.</p>
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
                            popup: "thankyou-popup"
                        }
                    });
                }

                form.reset();
                resetDemoForm($(form));
                return false;
            }
        });

        $("#requestDemoModal").on("hidden.bs.modal", function () {
            resetDemoForm($form);
        });
    }

    $(function () {
        $(document).on("click", ".js-demo-modal", function (event) {
            var $offcanvas = $("#mobileNavbar");
            if (!$offcanvas.hasClass("show") || typeof bootstrap === "undefined") {
                return;
            }

            event.preventDefault();
            event.stopPropagation();
            $offcanvas.one("hidden.bs.offcanvas", openRequestDemoModal);
            var instance = bootstrap.Offcanvas.getInstance($offcanvas[0]) ||
                bootstrap.Offcanvas.getOrCreateInstance($offcanvas[0]);
            instance.hide();
        });

        initDemoValidation();
    });
})(jQuery);
