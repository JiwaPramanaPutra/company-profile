<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Compile the blade view explicitly
$content = view('pages.home')->render();

echo "Hero section found: " . (str_contains($content, 'id="hero"') ? "YES" : "NO") . "\n";
echo "Swiper wrapper found: " . (str_contains($content, 'swiper-wrapper') ? "YES" : "NO") . "\n";
echo "Slide 1 title found: " . (str_contains($content, 'Professional Network Infrastructure Solutions') ? "YES" : "NO") . "\n";
echo "Slide 2 title found: " . (str_contains($content, 'Structured LAN Cabling') ? "YES" : "NO") . "\n";
echo "Slide 3 title found: " . (str_contains($content, 'Fast, Stable') ? "YES" : "NO") . "\n";
echo "Slide 4 title found: " . (str_contains($content, 'Router') ? "YES" : "NO") . "\n";
echo "Slide 5 title found: " . (str_contains($content, 'Starlink') ? "YES" : "NO") . "\n";
echo "Stats bar found: " . (str_contains($content, 'counter_projects') ? "YES" : "NO") . "\n";
echo "Pagination found: " . (str_contains($content, 'swiperPagination') ? "YES" : "NO") . "\n";
echo "Navigation found: " . (str_contains($content, 'swiperNext') ? "YES" : "NO") . "\n";
echo "Ken Burns found: " . (str_contains($content, 'hero-ken-burns') ? "YES" : "NO") . "\n";
echo "x-text hybrid found: " . (str_contains($content, "x-text=\"t(") ? "YES" : "NO") . "\n";
echo "AppTranslations found: " . (str_contains($content, 'AppTranslations') ? "YES" : "NO") . "\n";
