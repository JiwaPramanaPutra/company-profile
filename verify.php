<?php

$dir = new RecursiveDirectoryIterator(__DIR__ . '/resources/views');
$iterator = new RecursiveIteratorIterator($dir);
$count = 0;
$missing = [];

foreach ($iterator as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) !== 'php') continue;

    $content = file_get_contents($file);
    
    // Find all occurrences of {{ __('...') }}
    if (preg_match_all('/\{\{\s*__\([\'"]([^\'"]+)[\'"]\)\s*\}\}/', $content, $matches, PREG_OFFSET_CAPTURE)) {
        foreach ($matches[0] as $match) {
            $fullString = $match[0];
            $offset = $match[1];
            
            // Check context before the offset
            $contextBefore = substr($content, max(0, $offset - 50), min($offset, 50));
            
            // Allow if it is inside x-text="t('...')" wrap, or a :property="t('...')" wrap.
            // A simple check: if we can find x-text or an attribute binding right before it or around it
            $isBound = false;
            if (preg_match('/x-text\s*=\s*["\']t\([\'"][^\'"]+[\'"]\)["\'][^>]*>$/', rtrim($contextBefore))) $isBound = true;
            if (preg_match('/="$/', rtrim($contextBefore))) {
                // Inside an attribute. Check if there's a corresponding bound attribute e.g. :placeholder
                $line = substr($content, max(0, $offset - 200), 400); // Check the whole line approx
                if (preg_match('/:[a-zA-Z\-]+\s*=\s*["\']t\(/', $line)) {
                    $isBound = true;
                }
            }
            if (preg_match('/(titleKey|subtitleKey)\s*=\s*["\'][^"\'>]*$/', rtrim($contextBefore))) {
                // Wait, titleKey="key" was already transformed. It shouldn't have {{ __('...') }} anymore.
            }

            if (!$isBound) {
                // Let's print out the exact line and context for review
                $lines = explode("\n", substr($content, 0, $offset));
                $lineNumber = count($lines);
                $missing[] = $file->getFilename() . " (Line $lineNumber): " . trim(substr($content, max(0, $offset - 30), 80));
                $count++;
            }
        }
    }
}

echo "Remaining Unbound Instances: $count\n";
foreach ($missing as $m) {
    echo $m . "\n";
}
