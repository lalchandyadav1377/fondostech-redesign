(function () {
    window.ftCaptchaWidgets = window.ftCaptchaWidgets || {};

    function siteKey(el) {
        return (el && el.getAttribute("data-sitekey")) || window.FT_RECAPTCHA_SITE_KEY || "";
    }

    function bindCaptchaValue(inputId, solved) {
        var input = document.getElementById(inputId);
        if (!input) return;
        input.value = solved ? "1" : "";
        if (typeof jQuery !== "undefined" && jQuery(input).closest("form").length) {
            jQuery(input).valid();
        }
    }

    window.ftRenderCaptcha = function (elementId, onChange) {
        var el = document.getElementById(elementId);
        var key = siteKey(el);
        if (!el || !key || typeof grecaptcha === "undefined" || typeof grecaptcha.render !== "function") {
            return;
        }
        if (typeof window.ftCaptchaWidgets[elementId] !== "undefined") {
            return;
        }

        window.ftCaptchaWidgets[elementId] = grecaptcha.render(el, {
            sitekey: key,
            theme: "light",
            size: "normal",
            callback: function () {
                if (typeof onChange === "function") onChange(true);
            },
            "expired-callback": function () {
                if (typeof onChange === "function") onChange(false);
            },
            "error-callback": function () {
                if (typeof onChange === "function") onChange(false);
            }
        });
    };

    window.ftResetCaptcha = function (elementId) {
        if (typeof grecaptcha === "undefined" || typeof window.ftCaptchaWidgets[elementId] === "undefined") {
            return;
        }
        grecaptcha.reset(window.ftCaptchaWidgets[elementId]);
    };

    window.ftCaptchaSolved = function (elementId) {
        if (typeof grecaptcha === "undefined" || typeof window.ftCaptchaWidgets[elementId] === "undefined") {
            return false;
        }
        return grecaptcha.getResponse(window.ftCaptchaWidgets[elementId]).length > 0;
    };

    function renderVisibleWidgets() {
        var demoEl = document.getElementById("demoRecaptcha");
        var contactEl = document.getElementById("contactRecaptcha");
        if (contactEl) {
            window.ftRenderCaptcha("contactRecaptcha", function (solved) {
                bindCaptchaValue("contactCaptcha", solved);
            });
        }
        if (demoEl && document.getElementById("requestDemoModal") &&
            document.getElementById("requestDemoModal").classList.contains("show")) {
            window.ftRenderCaptcha("demoRecaptcha", function (solved) {
                bindCaptchaValue("demoCaptcha", solved);
            });
        }
    }

    window.onFtRecaptchaReady = function () {
        window.ftRecaptchaReady = true;
        renderVisibleWidgets();
    };

    document.addEventListener("shown.bs.modal", function (event) {
        if (!event.target || event.target.id !== "requestDemoModal") return;

        function renderDemo() {
            if (typeof grecaptcha === "undefined" || typeof grecaptcha.render !== "function") {
                return setTimeout(renderDemo, 150);
            }
            window.ftRenderCaptcha("demoRecaptcha", function (solved) {
                bindCaptchaValue("demoCaptcha", solved);
            });
        }

        setTimeout(renderDemo, 50);
    });

    document.addEventListener("hidden.bs.modal", function (event) {
        if (!event.target || event.target.id !== "requestDemoModal") return;
        window.ftResetCaptcha("demoRecaptcha");
        var input = document.getElementById("demoCaptcha");
        if (input) input.value = "";
    });
})();
