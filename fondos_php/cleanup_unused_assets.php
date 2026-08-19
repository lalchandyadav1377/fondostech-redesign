<?php
/**
 * Cleanup Unused Assets — Scans codebase for referenced image filenames in assets/images/
 * and deletes unreferenced duplicate or orphan image files.
 */

$img_dir = __DIR__ . '/assets/images/';
if (!is_dir($img_dir)) {
    echo "Directory assets/images/ does not exist.\n";
    exit;
}

// Gather all code contents (.php, .css, .js)
$code_contents = '';
$scanned_files = 0;

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__));
foreach ($iterator as $file) {
    if ($file->isDir()) continue;
    $path = $file->getPathname();
    // Exclude assets/images directory and .git
    if (strpos($path, 'assets' . DIRECTORY_SEPARATOR . 'images') !== false) continue;
    if (strpos($path, '.git') !== false) continue;
    
    $ext = strtolower($file->getExtension());
    if (in_array($ext, ['php', 'css', 'js', 'html'])) {
        $code_contents .= file_get_contents($path) . "\n";
        $scanned_files++;
    }
}

echo "Scanned $scanned_files code files.\n";

// Scan assets/images/
$deleted_count = 0;
$kept_count = 0;

$images = scandir($img_dir);
foreach ($images as $img) {
    if ($img === '.' || $img === '..') continue;
    
    // Check if filename appears in codebase
    if (strpos($code_contents, $img) !== false) {
        $kept_count++;
    } else {
        // Unused image file - delete it
        unlink($img_dir . $img);
        echo "Deleted unused asset: $img\n";
        $deleted_count++;
    }
}

echo "\nCleanup Complete!\n";
echo "Kept: $kept_count active image files.\n";
echo "Deleted: $deleted_count unused extra image files.\n";
?>
