<?php
/**
 * Asset copy utility — Copies all images from contact-us-fondos into assets/images/
 */
$source = __DIR__ . '/../fondos_web_htm/';
$dest = __DIR__ . '/assets/images/';

if (!is_dir($dest)) {
    mkdir($dest, 0777, true);
}

$extensions = ['png', 'svg', 'jpg', 'jpeg', 'gif', 'webp', 'ico'];
$count = 0;

// Copy root fondos_web_htm images
foreach (scandir($source) as $file) {
    if ($file === '.' || $file === '..') continue;
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (in_array($ext, $extensions)) {
        copy($source . $file, $dest . $file);
        $count++;
    }
}

// Copy contact-us-fondos images
$contact_source = __DIR__ . '/../fondos_web_htm/contact-us-fondos/';
if (is_dir($contact_source)) {
    foreach (scandir($contact_source) as $file) {
        if ($file === '.' || $file === '..') continue;
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, $extensions)) {
            copy($contact_source . $file, $dest . $file);
            $count++;
        }
    }
    // Also copy city alias names
    @copy($contact_source . 'image-100.png', $dest . 'city-delhi.png');
    @copy($contact_source . 'image-120.png', $dest . 'city-jaipur.png');
    @copy($contact_source . 'image-101.png', $dest . 'city-gurugram.png');
    @copy($contact_source . 'image-102.png', $dest . 'city-mumbai.png');
}

echo "Successfully copied $count images to assets/images/\n";
?>


