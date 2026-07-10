<?php

$dir = new RecursiveDirectoryIterator(__DIR__ . '/resources/views');
$iterator = new RecursiveIteratorIterator($dir);

foreach ($iterator as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) !== 'php') continue;

    $content = file_get_contents($file);
    $original = $content;

    // We can just replace :title="__('key')" with titleKey="key" globally, because we only use it on our components.
    $content = preg_replace('/:\s*title\s*=\s*[\'"]\{\{\s*__\([\'"]([^\'"]+)[\'"]\)\s*\}\}[\'"]/', 'titleKey="$1"', $content);
    $content = preg_replace('/:\s*subtitle\s*=\s*[\'"]\{\{\s*__\([\'"]([^\'"]+)[\'"]\)\s*\}\}[\'"]/', 'subtitleKey="$1"', $content);
    
    // Some are like {{ __('navbar.contact') }} without being in a full tag (e.g. mixed content). Let's wrap them in a span.
    // Be careful not to wrap things inside attributes or existing x-text spans.
    // If it's already inside a tag that has x-text, we skip.
    // If it's just raw `{{ __('key') }}` outside of attributes, we wrap it.
    // A safe way: `100% <span x-text="t('home.hero.uptime')">{{ __('home.hero.uptime') }}</span>`

    if ($original !== $content) {
        file_put_contents($file, $content);
        echo "Updated props: " . $file->getFilename() . "\n";
    }
}
echo "Done.\n";
