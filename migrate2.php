<?php

$dir = new RecursiveDirectoryIterator(__DIR__ . '/resources/views');
$iterator = new RecursiveIteratorIterator($dir);

foreach ($iterator as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) !== 'php') continue;

    $content = file_get_contents($file);
    $original = $content;

    // Pattern for section-title: :title="__('key')" -> title-key="key"
    $content = preg_replace_callback('/<x-ui\.section-title([^>]*?):title\s*=\s*[\'"]\{\{\s*__\([\'"]([^\'"]+)[\'"]\)\s*\}\}[\'"]([^>]*?)>/s', function($m) {
        $before = $m[1];
        $key = $m[2];
        $after = $m[3];
        return "<x-ui.section-title{$before}title-key=\"{$key}\"{$after}>";
    }, $content);

    // Pattern for section-title: :subtitle="__('key')" -> subtitle-key="key"
    $content = preg_replace_callback('/<x-ui\.section-title([^>]*?):subtitle\s*=\s*[\'"]\{\{\s*__\([\'"]([^\'"]+)[\'"]\)\s*\}\}[\'"]([^>]*?)>/s', function($m) {
        $before = $m[1];
        $key = $m[2];
        $after = $m[3];
        return "<x-ui.section-title{$before}subtitle-key=\"{$key}\"{$after}>";
    }, $content);

    // Fix remaining tags where the tag spans multiple lines or has classes etc
    // Match any tag containing ONLY {{ __('key') }} and some whitespace
    $content = preg_replace_callback('/<([a-zA-Z0-9\-]+)([^>]*)>\s*\{\{\s*__\([\'"]([^\'"]+)[\'"]\)\s*\}\}\s*<\/\1>/s', function($m) {
        $tag = $m[1];
        $attrs = $m[2];
        $key = $m[3];
        if (strpos($attrs, 'x-text=') !== false) {
            return $m[0];
        }
        return "<{$tag}{$attrs} x-text=\"t('{$key}')\">{{ __('{$key}') }}</{$tag}>";
    }, $content);

    // Fix text inside tags mixed with other text or span like: 100% {{ __('key') }}
    // We can wrap the translation in a span if it's not the only thing in the tag.
    // Actually, it's safer to just wrap it in a span manually.
    
    if ($original !== $content) {
        file_put_contents($file, $content);
        echo "Updated: " . $file->getFilename() . "\n";
    }
}
echo "Done.\n";
