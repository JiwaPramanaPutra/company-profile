@props(['title' => '', 'subtitle' => '', 'titleKey' => '', 'subtitleKey' => '', 'alignment' => 'center'])

@php
    $alignmentClasses = [
        'left' => 'text-left',
        'center' => 'text-center',
        'right' => 'text-right',
    ];
    $wrapperClass = $alignmentClasses[$alignment] ?? $alignmentClasses['center'];
@endphp

<div class="w-full mb-12 md:mb-16 lg:mb-20 {{ $wrapperClass }} animate-slide-up">
    @if(isset($badge))
        <div class="mb-6">
            {{ $badge }}
        </div>
    @endif

    @if($titleKey)
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight text-gray-900 dark:text-white leading-tight mb-4" x-text="t('{{ $titleKey }}')">
            {{ __($titleKey) }}
        </h2>
    @elseif($title)
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight text-gray-900 dark:text-white leading-tight mb-4">
            {!! $title !!}
        </h2>
    @endif

    @if($subtitleKey)
        <p class="text-base md:text-lg lg:text-xl text-gray-600 dark:text-gray-400 leading-relaxed whitespace-nowrap" x-text="t('{{ $subtitleKey }}')">
            {{ __($subtitleKey) }}
        </p>
    @elseif($subtitle)
        <p class="text-base md:text-lg lg:text-xl text-gray-600 dark:text-gray-400 leading-relaxed whitespace-nowrap">
            {{ $subtitle }}
        </p>
    @endif

    @if(!empty($slot) && $slot->isNotEmpty())
        <div class="mt-6">
            {{ $slot }}
        </div>
    @endif
</div>
