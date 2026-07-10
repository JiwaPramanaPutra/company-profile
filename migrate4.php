<?php

$dir = new RecursiveDirectoryIterator(__DIR__ . '/resources/views');
$iterator = new RecursiveIteratorIterator($dir);

foreach ($iterator as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) !== 'php') continue;

    $content = file_get_contents($file);
    $original = $content;

    // Pattern 1: :title="__('key')" -> titleKey="key"
    $content = preg_replace('/:\s*title\s*=\s*[\'"]__\([\'"]([^\'"]+)[\'"]\)\s*[\'"]/', 'titleKey="$1"', $content);
    $content = preg_replace('/:\s*subtitle\s*=\s*[\'"]__\([\'"]([^\'"]+)[\'"]\)\s*[\'"]/', 'subtitleKey="$1"', $content);

    // Pattern 2: remaining bare {{ __('key') }}
    // Let's replace any {{ __('key') }} that is not inside an HTML tag attribute or already wrapped in x-text.
    // Actually, just wrapping it in `<span x-text="t('key')">{{ __('key') }}</span>` is universally safe for text nodes!
    // But we need to make sure we don't wrap it if it's already inside `<span x-text="...">{{ __('key') }}</span>`
    // or inside attributes like `alt="{{ __('key') }}"`.
    
    // So we match `{{ __('key') }}`. We check the surrounding text. If it's inside quotes `="...{{__('key')}}..."`, we skip it.
    // If it's already preceded by `x-text="t('key')">`, we skip it.
    
    $tokens = preg_split('/(\{\{\s*__\([\'"][^\'"]+[\'"]\)\s*\}\})/', $content, -1, PREG_SPLIT_DELIM_CAPTURE);
    
    $newContent = '';
    $insideAttribute = false;
    $insideXTextWrapper = false;
    
    foreach ($tokens as $i => $token) {
        if (preg_match('/^\{\{\s*__\([\'"]([^\'"]+)[\'"]\)\s*\}\}$/', $token, $matches)) {
            $key = $matches[1];
            
            // Check previous token to see if we are inside an attribute (ends with `="` or `='`)
            $prev = $tokens[$i-1] ?? '';
            if (preg_match('/=\s*["\']$/', $prev)) {
                $newContent .= $token;
                continue;
            }
            
            // Check if previous token ends with `x-text="t('...Key...')">` or similar
            if (preg_match('/x-text\s*=\s*["\']t\([\'"]' . preg_quote($key, '/') . '[\'"]\)["\']\s*>$/', $prev) || 
                preg_match('/x-text\s*=\s*["\']t\([\'"][^\'"]+[\'"]\)["\']\s*class="[^"]*">\s*$/', $prev) ||
                preg_match('/x-text=.*>$/', rtrim($prev))) {
                $newContent .= $token;
                continue;
            }
            
            // It's a bare text node
            $newContent .= "<span x-text=\"t('{$key}')\">{$token}</span>";
        } else {
            $newContent .= $token;
        }
    }
    
    $content = $newContent;

    if ($original !== $content) {
        file_put_contents($file, $content);
        echo "Updated: " . $file->getFilename() . "\n";
    }
}
echo "Done.\n";
