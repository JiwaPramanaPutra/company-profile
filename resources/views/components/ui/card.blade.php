@props(['class' => '', 'hover' => true])

<div class="bg-white dark:bg-slate-800 rounded-2xl border border-gray-100 dark:border-slate-700/50 shadow-sm overflow-hidden flex flex-col h-full {{ $hover ? 'transition-all duration-200 hover:shadow-md hover:-translate-y-0.5 hover:border-gray-200 dark:hover:border-slate-600' : '' }} {{ $class }}">
    {{ $slot }}
</div>
