<section class="py-24 bg-gray-50 dark:bg-slate-900 border-t border-gray-100 dark:border-slate-800">
    <x-ui.container>
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left: Content -->
            <div class="scroll-reveal">
                <x-ui.section-title 
                    titleKey="home.service_area.title" 
                    subtitleKey="home.service_area.subtitle"
                    alignment="left"
                >
                    <span x-text="t('home.service_area.description')">{{ __('home.service_area.description') }}</span>
                </x-ui.section-title>

                <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 gap-4">
                    @foreach(config('company.service_areas') as $area)
                        <div class="flex items-center gap-2 p-3 bg-white dark:bg-slate-800 rounded-xl border border-gray-100 dark:border-slate-700 shadow-sm">
                            <div class="w-8 h-8 rounded-lg bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-blue-600 dark:text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <span class="font-medium text-gray-700 dark:text-gray-300">{{ $area }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Right: Visual Map Indicator -->
            <div class="relative scroll-reveal delay-200 bg-white dark:bg-slate-800 rounded-2xl border border-gray-100 dark:border-slate-700 p-8 shadow-xl flex items-center justify-center min-h-[400px]">
                <!-- Abstract Map Representation -->
                <div class="relative w-full h-full max-w-sm aspect-square bg-blue-50 dark:bg-blue-900/10 rounded-full flex items-center justify-center border border-blue-100 dark:border-blue-800/50">
                    
                    <!-- Center Pulse -->
                    <div class="absolute w-4 h-4 bg-blue-600 dark:bg-cyan-400 rounded-full z-10">
                        <div class="absolute inset-0 bg-blue-600 dark:bg-cyan-400 rounded-full animate-ping opacity-75"></div>
                    </div>
                    
                    <!-- Concentric Circles -->
                    <div class="absolute w-1/3 h-1/3 border border-blue-200 dark:border-blue-800/50 rounded-full"></div>
                    <div class="absolute w-2/3 h-2/3 border border-blue-200 dark:border-blue-800/50 rounded-full"></div>
                    <div class="absolute w-full h-full border border-blue-200 dark:border-blue-800/50 rounded-full"></div>

                    <!-- Pointers -->
                    <div class="absolute top-1/4 left-1/4 w-3 h-3 bg-blue-400 dark:bg-cyan-600 rounded-full"></div>
                    <div class="absolute bottom-1/3 right-1/4 w-3 h-3 bg-blue-400 dark:bg-cyan-600 rounded-full"></div>
                    <div class="absolute top-1/2 right-1/6 w-2 h-2 bg-blue-300 dark:bg-cyan-700 rounded-full"></div>

                </div>
            </div>

        </div>
    </x-ui.container>
</section>
