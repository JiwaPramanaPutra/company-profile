<?php

$dir = new RecursiveDirectoryIterator(__DIR__ . '/resources/views');
$iterator = new RecursiveIteratorIterator($dir);

foreach ($iterator as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) !== 'php') continue;

    $content = file_get_contents($file);
    $original = $content;

    // Pattern 1: Basic text replacement
    // <tag>{{ __('key') }}</tag> => <tag x-text="t('key')">{{ __('key') }}</tag>
    $content = preg_replace_callback('/<([a-zA-Z0-9\-]+)([^>]*)>\s*\{\{\s*__\([\'"]([^\'"]+)[\'"]\)\s*\}\}\s*<\/\1>/s', function($m) {
        $tag = $m[1];
        $attrs = $m[2];
        $key = $m[3];
        // Don't add x-text if it already has one
        if (strpos($attrs, 'x-text=') !== false) {
            return $m[0];
        }
        return "<{$tag}{$attrs} x-text=\"t('{$key}')\">{{ __('{$key}') }}</{$tag}>";
    }, $content);

    // Pattern 2: Placeholders
    // placeholder="{{ __('key') }}" => placeholder="{{ __('key') }}" :placeholder="t('key')"
    $content = preg_replace_callback('/placeholder\s*=\s*[\'"]\{\{\s*__\([\'"]([^\'"]+)[\'"]\)\s*\}\}[\'"]/', function($m) {
        $key = $m[1];
        return "placeholder=\"{{ __('{$key}') }}\" :placeholder=\"t('{$key}')\"";
    }, $content);

    // Pattern 3: alt attributes
    $content = preg_replace_callback('/alt\s*=\s*[\'"]\{\{\s*__\([\'"]([^\'"]+)[\'"]\)\s*\}\}[\'"]/', function($m) {
        $key = $m[1];
        return "alt=\"{{ __('{$key}') }}\" :alt=\"t('{$key}')\"";
    }, $content);

    // Pattern 4: aria-labels
    $content = preg_replace_callback('/aria-label\s*=\s*[\'"]\{\{\s*__\([\'"]([^\'"]+)[\'"]\)\s*\}\}[\'"]/', function($m) {
        $key = $m[1];
        return "aria-label=\"{{ __('{$key}') }}\" :aria-label=\"t('{$key}')\"";
    }, $content);

    // Pattern 5: titles
    $content = preg_replace_callback('/title\s*=\s*[\'"]\{\{\s*__\([\'"]([^\'"]+)[\'"]\)\s*\}\}[\'"]/', function($m) {
        $key = $m[1];
        return "title=\"{{ __('{$key}') }}\" :title=\"t('{$key}')\"";
    }, $content);

    if ($original !== $content) {
        file_put_contents($file, $content);
        echo "Updated: " . $file->getFilename() . "\n";
    }
}
echo "Done.\n";
