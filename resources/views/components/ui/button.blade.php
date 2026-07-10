@props([
    'variant' => 'primary', // primary, secondary, outline, text
    'size' => 'md', // sm, md, lg
    'href' => null,
    'type' => 'button',
    'class' => '',
    'icon' => null
])

@php
    $baseClasses = 'inline-flex items-center justify-center gap-2 font-medium rounded-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-slate-900 disabled:opacity-50 disabled:cursor-not-allowed';
    
    $variants = [
        'primary' => 'bg-blue-600 text-white hover:bg-blue-700 hover:shadow-md hover:-translate-y-0.5 focus:ring-blue-500 shadow-sm border border-transparent dark:bg-cyan-600 dark:hover:bg-cyan-500 dark:focus:ring-cyan-500',
        'secondary' => 'bg-white text-gray-900 hover:bg-gray-50 border border-gray-200 shadow-sm hover:shadow-md hover:-translate-y-0.5 focus:ring-gray-200 dark:bg-slate-800 dark:text-white dark:border-slate-700 dark:hover:bg-slate-700 dark:focus:ring-slate-700',
        'outline' => 'bg-transparent text-blue-600 border border-blue-600 hover:bg-blue-50 focus:ring-blue-500 dark:text-cyan-400 dark:border-cyan-400 dark:hover:bg-cyan-950 dark:focus:ring-cyan-500 hover:-translate-y-0.5',
        'text' => 'bg-transparent text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:ring-gray-200 dark:text-gray-300 dark:hover:bg-slate-800 dark:hover:text-white dark:focus:ring-slate-700',
    ];
    
    $sizes = [
        'sm' => 'h-9 px-4 text-sm',
        'md' => 'h-11 px-5 text-base',
        'lg' => 'h-12 px-6 text-lg',
    ];
    
    $classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['primary']) . ' ' . ($sizes[$size] ?? $sizes['md']) . ' ' . $class;
@endphp

@if($href)
    <a href="{{ $href }}" class="{{ $classes }}" {{ $attributes }}>
        @if($icon)<span>{!! $icon !!}</span>@endif
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" class="{{ $classes }}" {{ $attributes }}>
        @if($icon)<span class="mr-2">{!! $icon !!}</span>@endif
        {{ $slot }}
    </button>
@endif
