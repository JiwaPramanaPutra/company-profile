<section class="py-24 bg-gray-50 dark:bg-slate-900 border-t border-gray-100 dark:border-slate-800">
    <x-ui.container>
        <x-ui.section-title 
            titleKey="home.process.title" 
            subtitleKey="home.process.subtitle"
            class="scroll-reveal"
        >
            <span x-text="t('home.process.description')">{{ __('home.process.description') }}</span>
        </x-ui.section-title>

        <div class="relative mt-20">
            <!-- Connecting Line (Desktop) -->
            <div class="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-gray-200 dark:bg-slate-800" aria-hidden="true"></div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-8 relative">
                @foreach(config('company.process') as $index => $step)
                    <div class="relative scroll-reveal delay-{{ ($index + 1) * 100 }}">
                        <!-- Number Node -->
                        <div class="w-24 h-24 mx-auto bg-white dark:bg-slate-800 rounded-2xl shadow-xl border border-gray-100 dark:border-slate-700 flex items-center justify-center relative z-10 group transition-transform hover:-translate-y-2">
                            <span class="text-4xl font-display font-bold text-transparent bg-clip-text bg-gradient-to-br from-blue-600 to-cyan-400">
                                0{{ $step['step'] }}
                            </span>
                            
                            <!-- Arrow to next (except last) -->
                            @if(!$loop->last)
                                <div class="hidden md:block absolute top-1/2 -right-12 -translate-y-1/2 text-gray-300 dark:text-slate-600 w-8 h-8">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                                </div>
                            @endif
                        </div>

                        <!-- Content -->
                        <div class="mt-8 text-center px-2">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">
                                <span x-text="lang === 'id' ? '{{ addslashes($step['title_id']) }}' : '{{ addslashes($step['title_en']) }}'">{{ $step['title_en'] }}</span>
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                <span x-text="lang === 'id' ? '{{ addslashes($step['desc_id']) }}' : '{{ addslashes($step['desc_en']) }}'">{{ $step['desc_en'] }}</span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </x-ui.container>
</section>
