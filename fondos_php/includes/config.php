<?php
/**
 * Site config. Replace reCAPTCHA keys with production values from
 * https://www.google.com/recaptcha/admin (v2 Checkbox).
 *
 * Keys below are Google's official test keys — they always pass and
 * show a "for testing purposes" banner.
 */
if (!defined('RECAPTCHA_SITE_KEY')) {
    define('RECAPTCHA_SITE_KEY', '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI');
}
if (!defined('RECAPTCHA_SECRET_KEY')) {
    define('RECAPTCHA_SECRET_KEY', '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe');
}
