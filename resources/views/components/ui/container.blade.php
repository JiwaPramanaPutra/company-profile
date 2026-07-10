@props(['class' => ''])
<div {{ $attributes->merge(['class' => 'max-w-7xl mx-auto w-full px-6 lg:px-8 ' . $class]) }}>
    {{ $slot }}
</div>
